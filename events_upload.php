
<?php
// begin tracking session variables
session_start();

// uncomment for errors
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


include_once("db_connect.php");

// uncomment for errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// adapted from https://www.php.net/manual/en/function.checkdate.php#113205
// Date validation function
function verifyDate($date, $format = 'j/n/Y')
{
    return (DateTime::createFromFormat($format, $date) !== false);
}

// dateTime conversion function to conform to MySQL format
// https://www.php.net/manual/en/datetime.createfromformat.php
function ConvertToMySqlDateTimeFormat($csvDate) {
    return date('Y-m-d',strtotime($csvDate));
}

// define upload variable
$uploadOk = 1;

// Adapted from W3 Image File Upload: https://www.w3schools.com/php/php_file_upload.asp
// save the uplaoded file in events_uploads
$target_dir = "events_uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// check if there is a file being uploaded
if(isset($_POST["submit"])) {

    // open error file
    $EventsErrorFile = fopen("errorfile.txt", "w");

    // Check the file type is csv
    $check = ($fileType == "csv");
    if($fileType == "csv") {

        // Open the uploaded file
        if (($file = fopen($_FILES["fileToUpload"]["tmp_name"], "r"))) {

            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                fwrite($EventsErrorFile, 'Sorry, your file is too large. \n');
                $uploadOk = 0;
            }

            // get header row from upload
            $upload_header = fgetcsv($file);

            // open example file
            if ($example_file = fopen('events_example.csv', 'r')) {

                // define example header row
                $example_header = fgetcsv($example_file);

                // echo "<pre>"; var_dump($upload_header); echo "</post>";
                // echo "<pre>"; var_dump($example_header); echo "</post>";

                // Check headers from upload match required format
                if ($upload_header != $example_header) {
                    fwrite($EventsErrorFile, 'Headers do not match. \n');
                    $uploadOk = 0;
                }
            } else { // unable to open example file
                fwrite($EventsErrorFile, 'Could not open example CSV template. \n');
                $uploadOk = 0;
            }

            // initialise variables to store the CSV's delimiter, row type and row number.
            $delimiter=',';
            $rows = array();
            $row_num = 0;

            // iterate through rows
            while($csv_row = fgetcsv($file, 0, $delimiter)) {

                // increment row_num to read the next row for subsequent iteration
                $row_num++;

                // encode the row, may need to remove this if database has encoding issues
                // array_map('utf8_encode', $csv_row);

                // check title
                if (!preg_match("/^[a-z0-9 ,.&'\-()]*$/i", $csv_row[0]) || strlen($csv_row[0]>90))
                {
                    $errorRow = $row_num+1;
                    $titleError = 'Problem with the Title column on row '.$errorRow.'. \n';
                    fwrite($EventsErrorFile, $titleError);
                    $uploadOk = 0;
                }

                // check author name
                if (!preg_match("/^[a-z ,.'()-]+$/i",$csv_row[1])) {
                    $errorRow = $row_num+1;
                    $authorNameError = 'Problem with the Author name column on row '.$errorRow.'. \n';
                    fwrite($EventsErrorFile, $authorNameError);
                    $uploadOk = 0;
                }

                // check publish date
                if (!verifyDate($csv_row[2])) {
                    $errorRow = $row_num+1;
                    $publishDateError = 'Problem with the Publish date column on row '.$errorRow.'. \n';
                    fwrite($EventsErrorFile, $publishDateError);
                    $uploadOk = 0;
                }

                // check event date
                if (!verifyDate($csv_row[3])) {
                    $errorRow = $row_num+1;
                    $eventDateError = 'Problem with the Event date column on row '.$errorRow.'. \n';
                    fwrite($EventsErrorFile, $eventDateError);
                    $uploadOk = 0;
                }

                // Check description length
                if (strlen($csv_row[4])>600)
                {
                    $errorRow = $row_num+1;
                    $descriptionError = 'Problem with the description column on row '.$errorRow.'. The description can only be a maximum of 600 characters long. \n';
                    fwrite($EventsErrorFile, $descriptionError);
                    $uploadOk = 0;
                }

                // check link
                // adapted from: https://www.w3schools.com/php/php_form_url_email.asp
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$csv_row[5]))
                {
                    $errorRow = $row_num+1;
                    $linkError = 'Problem with the GitHub or other repository link column on row '.$errorRow.'. \n';
                    fwrite($EventsErrorFile, $linkError);
                    $uploadOk = 0;
                }

            }

            // close file
            fclose($file);

        } else { // unable to open upload file
            fwrite($EventsErrorFile, 'Sorry, we were unable to open this file. \n');
            ($uploadOk == 0);
        }

    } else { // file is not a csv
        fwrite($EventsErrorFile, 'File is not a CSV. \n');
        $uploadOk = 0;
    }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
$check = "False";
} else { // otherwise try to upload file

    $check = 'True';

    // open file
    $file = fopen($_FILES["fileToUpload"]["tmp_name"], "r");

    // open connection to ixnportal db
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // query for deleting old data in preparation for new csv
    $emptyEventsTableQuery = $link->prepare("DELETE FROM events");
    $emptyEventsTableQuery->execute();

    // query for resetting eventID column
    $resetEventIDQuery = $link->prepare("ALTER TABLE `events` AUTO_INCREMENT = 1");
    $resetEventIDQuery->execute();

    // upload to db
    $first_row = fgetcsv($file, 0, $delimiter); // read first row (headers) and do nothing
    while($uploading_rows = fgetcsv($file, 0, $delimiter)) {




        // encode the row, done for database encoding (MAY NEED TO REMOVE)
        // array_map('utf8_encode', $csv_row);

        // convert dates to mysql format
        // $publishDate = ConvertToMySqlDateTimeFormat($uploading_rows[2]);
        // $publishDate = $uploading_rows[2];

        // echo "normal: ".$uploading_rows[2]."<br>";
        // echo ConvertToMySqlDateTimeFormat($uploading_rows[2]). "<br>";
        $publishDate = ConvertToMySqlDateTimeFormat($uploading_rows[2]);
        // $publishDate = date('Y-m-d',strtotime($uploading_rows[2]));
        // echo "publish date: " . $uploading_rows[2] . "<br>";
        // echo "publish date: " . $publishDate . "<br>";

        $eventDate = ConvertToMySqlDateTimeFormat($uploading_rows[3]);
        // echo "event date: " . $uploading_rows[3] . "<br>";
        // echo "event date: " . $eventDate . "<br><br>";

        // create variables for upload
        $eventTitle = $uploading_rows[0];
        $eventAuthor = $uploading_rows[1];
        $description = $uploading_rows[4];
        $externalLink = $uploading_rows[5];

        // Prepare upload to database query
        $csvToDbQuery = $link->stmt_init();
        $csvToDbQuery->prepare("INSERT INTO events (eventTitle, authorName, publishDate,
                                eventDate, description, link) values(?,?,?,?,?,?)");
        // bind parameters to upload query
        $csvToDbQuery->bind_param("ssssss", $eventTitle, $eventAuthor, $publishDate, $eventDate, $description, $externalLink);
        // execute query
        $csvToDbQuery->execute();
    }

        // close file
        fclose($file);

        // prepare current date
        $currentDate = date('Y-m-d_H:i:s');
        // save the upload file
        $new_target_file = $target_dir . 'events_'.$currentDate.'.csv';
        // move and rename uploaded csv
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
        {
        //   echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded. <br>";
          rename($target_file, $new_target_file);
        }

}

// uncomment to automatically redirect back to the admin page
echo "<script>window.location = './Admin_Home.php?upload=".$check."'</script>";
?>
