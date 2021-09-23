<?php

  

include_once("db_connect.php");

// define filename
$filename = 'Regional_Admins.csv';

// retrieve events query
$DbToCsv ="SELECT fName, lName, email, postcode, city, country
           FROM regionaladmins";


$columnNames = array('First Name', 'Last Name',
                     'Email', 'Postcode',
                     'City', 'Country');

// fetch RAs
$events = $link->query($DbToCsv);

// prepare csv
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Regional_Admins.csv');

// open file
$output = fopen('php://output', 'w');

// // insert header row into csv
fputcsv($output, $columnNames);

// insert events into csv
while ($row = $events->fetch_assoc()) {
    fputcsv($output, $row);
}

// close file
fclose($output);
exit;


?>
