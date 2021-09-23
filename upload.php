
<?php
session_start();

// uncomment for errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// datetime validation function
function verifyDateTime($date, $format = 'n/j/Y H:i:s')
{
    return (DateTime::createFromFormat($format, $date) !== false);
}

// dateTime conversion function to conform to MySQL format
// https://www.php.net/manual/en/datetime.createfromformat.php
function ConvertToMySqlDateTimeFormat($csvDate) {
  return date('Y-m-d h:i:s',strtotime($csvDate));
}

// Adapted from W3 Image File Upload: https://www.w3schools.com/php/php_file_upload.asp

// Choose where to save the uploaded file
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// echo 'Target file: ' . $target_file . "<br>";
// echo 'File type: ' . $fileType . "<br>";
// echo 'File name: ' . $_FILES['fileToUpload']['name'] . "<br>";
// echo 'Is CSV: ' . ($fileType == "csv") . "<br>";

// if a file is trying to be uploaded
if(isset($_POST["submit"])) {

  $errorfile = fopen("errorfile.txt", "w");

//  // Check if file already exists
//  if (file_exists($target_file)) {
//    echo "Sorry, file already exists. <br>";
//    $_SESSION["exists"] = 'Sorry, file already exists. <br>';
//    fwrite($errorfile, 'Sorry, file already exists. \n');
//    $uploadOk = 0;
//  } else {
//    unset($_SESSION['exists']);
//  }


  // Check the file type is csv
  $check = ($fileType == "csv");
  if($fileType == "csv") {
    //echo "File is csv. <br>";
    //unset($_SESSION['typecheck']);
    $uploadOk = 1;

    // Open the uploaded file
    if (($file = fopen($_FILES["fileToUpload"]["tmp_name"], "r")))
    {
      // echo 'opened file <br>';
      // unset($_SESSION['openfile']);
      $row = fgetcsv($file);

      // Open template file and check if the headers are correct
      if ($example_file = fopen('IXN_Test_Example.csv', 'r'))
      {
        // unset($_SESSION['template']);
        $example_row = fgetcsv($example_file);

        // Check headers
        if ($row == $example_row)
        {
          // echo 'Headings match <br>';
           // unset($_SESSION['headings']);
          } else {
          fwrite($errorfile, 'Headers do not match. \n');
          $uploadOk = 0;
          // $_SESSION["headings"] = 'CSV headers are incorrect. <br>';
          }
        } else {
          // echo 'Could not open CSV template <br>';
          $uploadOk = 0;
          // $_SESSION["template"] = 'Could not open CSV template. Please contact system admin. <br>';
          fwrite($errorfile, 'Could not open CSV template. Please contact system admin. \n');
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
          // echo "Sorry, your file is too large. <br>";
          // $_SESSION["toolarge"] = 'Sorry, your file is too large. <br>';
          fwrite($errorfile, 'Sorry, your file is too large. \n');
          $uploadOk = 0;
        } else {
          // unset($_SESSION['toolarge']);
        }


    $c = 0;
    while (($data = fgetcsv($file)) !== FALSE) {
      $c++;
    }

    // Check file is not empty
    if ($c > 0) {
      // echo 'File contains ' . $c . ' rows <br>';
      // unset($_SESSION['empty']);
    } else {
      // echo 'File is empty. <br>';
        $uploadOk = 0;
        // $_SESSION["empty"] = 'File contains no information. <br>';
        fwrite($errorfile, 'File contains no information. \n');
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
      array_map('utf8_encode', $csv_row);

      // check to see if ID column is int
      if (is_numeric($csv_row[0]) !== true)
      {
        // if not, set session variables and upload error
        $errorRow = $row_num+1;
        $idError = 'Problem with the ID column on row '.$errorRow.'. \n';
        fwrite($errorfile, $idError);
        $uploadOk = 0;

      }

      // check start-time column format
      if (verifyDateTime($csv_row[1]) !== True)
      {
        $errorRow = $row_num+1;
        $startTimeError = 'Problem with the Start time column on row '.$errorRow.'. \n';
        fwrite($errorfile, $startTimeError);
        $uploadOk = 0;
      }

      // check completion-time column format
      if (verifyDateTime($csv_row[2]) !== True)
      {
        $errorRow = $row_num+1;
        $completionTimeError = 'Problem with the Completion time column on row '.$errorRow.'. \n';
        fwrite($errorfile, $completionTimeError);
        $uploadOk = 0;
      }

      // check name satisfies regex: certain special characters allowed, the 'i' at the end means ignore case
      if (!preg_match("/^[a-z ,.'-()]+$/i",$csv_row[3]))
      {
        $errorRow = $row_num+1;
        $nameError = 'Problem with the Name column on row '.$errorRow.'. \n';
        fwrite($errorfile, $nameError);
        $uploadOk = 0;
      }

      // check email
      if(!filter_var($csv_row[4], FILTER_VALIDATE_EMAIL))
      {
        $errorRow = $row_num+1;
        $emailError = 'Problem with the Email column on row '.$errorRow.'. \n';
        fwrite($errorfile, $emailError );
        $uploadOk = 0;
      }

      // check project title
      if (!preg_match("/^[a-z0-9 ,.&'\-()]*$/i", $csv_row[5]) || strlen($csv_row[5]>90))
      {
        $errorRow = $row_num+1;
        $projectTitleError = 'Problem with the Project title column on row '.$errorRow.'. \n';
        fwrite($errorfile, $projectTitleError );
        $uploadOk = 0;
      }

      // check project authors
      if (!preg_match("/^[a-z ,.'()-]+$/i",$csv_row[6])) {
        $errorRow = $row_num+1;
        $projectAuthorsError = 'Problem with the Project authors column on row '.$errorRow.'. \n';
        fwrite($errorfile, $projectAuthorError );
        $uploadOk = 0;
      }

      // check project author's UCL email addresses
      if (!filter_var($csv_row[7], FILTER_VALIDATE_EMAIL))
      {
        $errorRow = $row_num+1;
        $uclEmailError = 'Problem with the Academic emails column on row '.$errorRow.'. \n';
        fwrite($errorfile, $uclEmailError );
        $uploadOk = 0;
      }

      // check Class module code
      if (!preg_match("/^[a-z0-9]+$/i",$csv_row[8]))
      {
        $errorRow = $row_num+1;
        $moduleCodeError = 'Problem with the Module code column on row '.$errorRow.'. \n';
        fwrite($errorfile, $moduleCodeError );
        $uploadOk = 0;
      }

      // check team number
      if (is_numeric($csv_row[9]) !== true)
      {
        $errorRow = $row_num+1;
        $teamNumberError = 'Problem with the teamNumber column on row '.$errorRow.'. \n';
        fwrite($errorfile, $teamNumber );
        $uploadOk = 0;
      }

      // check internal academic supervisor
      if (!preg_match("/^[a-z ,.'-]+$/i",$csv_row[10]))
      {
        $errorRow = $row_num+1;
        $Error = 'Problem with the internal Supervisor column on row '.$errorRow.'. \n';
        fwrite($errorfile, $error);
        $uploadOk = 0;
      }

      // check client Name
      if (!preg_match("/^[a-z '-]+$/i",$csv_row[11]))
      {
        $errorRow = $row_num+1;
        $Error = 'Problem with the client name column on row '.$errorRow.'. \n';
        fwrite($errorfile, $error);
        $uploadOk = 0;
      }

      // check client organisation
      if (!preg_match("/^[a-z '-]+$/i",$csv_row[12]))
      {
        $errorRow = $row_num+1;
        $Error = 'Problem with the client organisation column on row '.$errorRow.'. \n';
        fwrite($errorfile, $error);
        $uploadOk = 0;
      }

      // check technologies used
      if (!preg_match("/^[a-z0-9 .()'–-]+$/i",$csv_row[13]))
      {
        $errorRow = $row_num+1;
        $Error = 'Problem with the technologies used column on row '.$errorRow.'. \n';
        fwrite($errorfile, $error);
        $uploadOk = 0;
      }

      // check field area keywords
      if (!preg_match("/^[a-z0-9 .()'–-]+$/i",$csv_row[14]))
      {
        $errorRow = $row_num+1;
        $Error = 'Problem with the keywords column on row '.$errorRow.'. \n';
        fwrite($errorfile, $error);
        $uploadOk = 0;
      }

      // check repo link
      // adapted from: https://www.w3schools.com/php/php_form_url_email.asp
      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$csv_row[16]))
      {
        $errorRow = $row_num+1;
        $Error = 'Problem with the Github repository link column on row '.$errorRow.'. \n';
        fwrite($errorfile, $error);
        $uploadOk = 0;
      }

      // check video link
      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$csv_row[17]))
      {
        $errorRow = $row_num+1;
        $Error = 'Problem with the video link on row '.$errorRow.'. \n';
        fwrite($errorfile, $error);
        $uploadOk = 0;
      }

      // check Project Website link
      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$csv_row[18]))
      {
        $errorRow = $row_num+1;
        $Error = 'Problem with the project website column on row '.$errorRow.'. \n';
        fwrite($errorfile, $error);
        $uploadOk = 0;
      }

      // check non-UCL email addresses
      // Issues with IXN_Test.csv due to dummy emails with brackets in them
      if (!filter_var($csv_row[19], FILTER_VALIDATE_EMAIL))
      {
        $errorRow = $row_num+1;
        $Error = 'Problem with the external email addresses column on row '.$errorRow.'. \n';
        fwrite($errorfile, $error);
        $uploadOk = 0;
      }

      // check university
      if (preg_match("/^[a-z .&-]*$/i", $csv_row[20]))
      {
        $errorRow = $row_num+1;
        $Error = 'Problem with the university column on row '.$errorRow.'. \n';
        fwrite($errorfile, $error);
        $uploadOk = 0;
      }
    }

    fclose($file);

  } else {
      // echo 'Unable to open file. <br>';
      $uploadOk = 0;
      $_SESSION["openfile"] = 'Sorry, we were unable to open this file. <br>';
      fwrite($errorfile, 'Sorry, this system only accepts csv file format. \n');
  }
    } else {
      // echo "File is not csv. <br>";
      $_SESSION["typecheck"] = 'File is not CSV. <br>';
      $uploadOk = 0;
      fwrite($errorfile, 'File is not CSV. \n');
    }
  }


  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    // echo "Sorry, your file was not uploaded. <br>";
    $check = "False";

  // if everything is ok, try to upload file
  } else {
    $check = 'True';

    // open file
    $file = fopen($_FILES["fileToUpload"]["tmp_name"], "r");

  
include_once("db_connect.php");

    // delete old project data so that new csv can be stored
    $sql = "DELETE FROM projects";
    if(mysqli_query($link, $sql)){
      // echo "Table is deleted successfully";
    } else {
      // echo "Table is not deleted successfully\n";
    }

    $resetIDs = "ALTER TABLE `projects` AUTO_INCREMENT = 1";
    if(mysqli_query($link, $resetIDs)){
      // echo "IDs reset successfully";
    } else {
      // echo "IDs not reset\n";
    }


    // read file
    fgetcsv($file, 10000, $delimiter); // read first row (headers) and do nothing
    while($uploading_rows = fgetcsv($file, 0, $delimiter)) {

      // encode the row, done for database encoding (MAY NEED TO REMOVE)
      // array_map('utf8_encode', $csv_row);

      // convert starttime and completiong time into MySQL formats
      $startTime = convertToMySqlDateTimeFormat($uploading_rows[1]);
      $completionTime = convertToMySqlDateTimeFormat($uploading_rows[2]);

      // create variables for other fields
      $name = $uploading_rows[3];
      $email = $uploading_rows[4];
      $projectTitle = $uploading_rows[5];
      $projectAuthors = $uploading_rows[6];
      $universityEmails = $uploading_rows[7];
      $moduleCode = $uploading_rows[8];
      $teamNumber = $uploading_rows[9];
      $academicsupervisor = $uploading_rows[10];
      $clientName = $uploading_rows[11];
      $clientOrganisation = $uploading_rows[12];
      $techUsed = $uploading_rows[13];
      $projectKeywords = $uploading_rows[14];
      $abstract = $uploading_rows[15];
      $githubLink = $uploading_rows[16];
      $youtubeLink = $uploading_rows[17];
      $projectLink = $uploading_rows[18];
      $externalEmails = $uploading_rows[19];
      $university = $uploading_rows[20];


      // define upload query in a prepared statement
      $csvToDb = $link->stmt_init();
      $csvToDb->prepare("INSERT into projects (startTime, completionTime, name, email, projectTitle, projectAuthors,
                                    universityEmails, moduleCode, teamNumber, academicsupervisor, clientName, clientOrganisation,
                                    techUsed, projectKeywords, abstract, githubLink, youtubeLink, websiteLink, externalEmails, university)
                                    values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

      // bind parameters
      $csvToDb->bind_param("ssssssssisssssssssss", $startTime, $completionTime, $name, $email, $projectTitle, $projectAuthors, $universityEmails,
          $moduleCode, $teamNumber, $academicsupervisor, $clientName, $clientOrganisation, $techUsed, $projectKeywords,
          $abstract, $githubLink, $youtubeLink, $projectLink, $externalEmails, $university);

      // execute upload query
      $csvToDb->execute();


    }

    // close file
    fclose($file);


$currentDate = date('Y-m-d-H:i:s');
    // save the upload file
    $new_target_file = $target_dir . 'IXN_Projects'.$currentDate.'.csv';
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
    {
      // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded. <br>";
      rename($target_file, $new_target_file);
      $_SESSION["upload"] = 1;

    } else {
      // echo "Sorry, there was an error uploading your file. <br>";
      $_SESSION["upload"] = 0;
    }
  }

// uncomment to automatically redirect back to the admin page
echo "<script>window.location = './Admin_Home.php?upload=".$check."'</script>";
?>
