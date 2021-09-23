
<?php
// begin tracking session variables
session_start();

// Make sure we have database connection script
include_once('mysql_connect.php');

// uncomment for errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// define upload variable 
$uploadOk = 1;

// Adapted from W3 Image File Upload: https://www.w3schools.com/php/php_file_upload.asp
// save the uplaoded file in events_uploads
$target_dir = "ra_uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// check if there is a file being uploaded
if(isset($_POST["submit"])) {
    
    // open error file 
    $RaErrorFile = fopen("errorfile.txt", "w");

    // Check the file type is csv
    $check = ($fileType == "csv");
    if($fileType == "csv") {

        // Open the uploaded file
        if (($file = fopen($_FILES["fileToUpload"]["tmp_name"], "r"))) {

            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                fwrite($RaErrorFile, 'Sorry, your file is too large. \n');
                $uploadOk = 0;
            }   

            // get header row from upload 
            $upload_header = fgetcsv($file);

            // open example file 
            if ($example_file = fopen('ra_example.csv', 'r')) {
                
                // define example header row
                $example_header = fgetcsv($example_file);   

                // Check headers from upload match required format
                if ($upload_header != $example_header) { 
                    fwrite($RaErrorFile, 'Headers do not match. \n');
                    $uploadOk = 0;
                }
            } else { // unable to open example file
                fwrite($RaErrorFile, 'Could not open example CSV template. \n');
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

                // check first name
                if (!preg_match("/^[a-z ,.'()-]+$/i",$csv_row[0])) {
                                        $errorRow = $row_num+1;
                    $firstNameError = 'Problem with the First Name column on row '.$errorRow.'. \n';
                    fwrite($RaErrorFile, $firstNameError);
                    $uploadOk = 0; 
                }

                // check last name
                if (!preg_match("/^[a-z ,.'()-]+$/i",$csv_row[1])) {
                    $errorRow = $row_num+1;
                    $lastNameError = 'Problem with the Last Name column on row '.$errorRow.'. \n';
                    fwrite($RaErrorFile, $lastNameError);
                    $uploadOk = 0; 
                }

                // check email
                if(!filter_var($csv_row[2], FILTER_VALIDATE_EMAIL))
                {
                    $errorRow = $row_num+1;
                    $emailError = 'Problem with the Email column on row '.$errorRow.'. \n';
                    fwrite($RaErrorFile, $emailError);
                    $uploadOk = 0; 
                }

                // adapted from https://stackoverflow.com/questions/164979/regex-for-matching-uk-postcodes
                // check postcode
                if (!preg_match("/^([A-Z]{1,2}\d[A-Z\d]? ?\d[A-Z]{2}|GIR ?0A{2})$/i",$csv_row[3])) {
                    $errorRow = $row_num+1;
                    $postCodeError = 'Problem with the Postcode column on row '.$errorRow.'. \n';
                    fwrite($RaErrorFile, $postCodeError);
                    $uploadOk = 0; 
                }
                
                // adapted from https://stackoverflow.com/questions/11757013/regular-expressions-for-city-name 
                // check city
                if (!preg_match("/^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]*$/i",$csv_row[4])) {
                    $errorRow = $row_num+1;
                    $cityError = 'Problem with the city column on row '.$errorRow.'. \n';
                    fwrite($RaErrorFile, $cityError);
                    $uploadOk = 0;
                }

                // check country 
                if (!preg_match("/^[A-Z .,-]*\z/i",$csv_row[5])) {
                    fwrite($RaErrorFile, 'Problem with the First Name column. \n');
                    $uploadOk = 0; 
                    $errorRow = $row_num+1;
                    $countryError = 'Problem with the country column on row '.$errorRow.'. \n';
                    fwrite($RaErrorFile, $countryError);
                    $uploadOk = 0;
                }
            }

            // close file 
            fclose($file);

        } else { // unable to open upload file
            fwrite($RaErrorFile, 'Sorry, we were unable to open this file. \n');
            ($uploadOk == 0);
        }
        
    } else { // file is not a csv
        fwrite($RaErrorFile, 'File is not a CSV. \n');
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
    $link = OpenDbConnection();

    // query for deleting old data in preparation for new csv
    $emptyEventsTableQuery = $link->prepare("DELETE FROM regionaladmins");
    $emptyEventsTableQuery->execute();

    // query for resetting eventID column
    $resetEventIDQuery = $link->prepare("ALTER TABLE `regionaladmins` AUTO_INCREMENT = 1");
    $resetEventIDQuery->execute();

    fgetcsv($file, 10000, $delimiter); // read first row (headers) and do nothing
    while($uploading_rows = fgetcsv($file, 0, $delimiter)) {

        // create variables for upload
        $fName = $uploading_rows[0];
        $lName = $uploading_rows[1];
        $email = $uploading_rows[2];
        $postcode = $uploading_rows[3];
        $city = $uploading_rows[4];
        $country = $uploading_rows[5];

        // Prepare upload to database query
        $csvToDbQuery = $link->stmt_init();
        $csvToDbQuery->prepare("INSERT INTO regionaladmins (fName, lName, email, postcode, city, country) values(?,?,?,?,?,?)");
        // bind parameters to upload query
        $csvToDbQuery->bind_param("ssssss", $fName, $lName, $email, $postcode, $city, $country);
        // execute query
        $csvToDbQuery->execute();
    } 

        // close file
        fclose($file);

        // prepare current date
        $currentDate = date('Y-m-d_H:i:s');
        // save the upload file
        $new_target_file = $target_dir . 'regional_admins_'.$currentDate.'.csv';
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
