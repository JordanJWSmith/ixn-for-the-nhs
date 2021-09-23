<?php

  
include_once("db_connect.php");

// define filename
$filename = 'Projects.csv';

// retrieve projects query
$DbToCsv ="SELECT projectID,startTime, completionTime, name, email, projectTitle, projectAuthors, universityEmails,
           moduleCode, teamNumber, academicsupervisor, clientName, clientOrganisation, techUsed, projectKeywords,
           abstract, githubLink, youtubeLink, websiteLink, externalEmails, university
           FROM projects";


$columnNames = array('ID','Start time','Completion time','Name','Email','Title of Project',
        'Project Authors (separated by commas): e.g. Jane Doe, John Smith',
        "Project Authors UCL email addresses (separated by commas)",
        "Class module code: e.g. COMP0016, COMP0067, COMP0102",
        'Team number if known','Internal Academic Supervisor',
        'Client Name (if it is an industry IXN project) or External Academic Supervisor Name (research project)',
        "Client Organisation: e.g. Intel, GOSH, Microsoft, NHS England, IBM",
        "Technologies Used (e.g. C#, Azure, Unity, TensorFlow)",
        "Field Area Keywords: e.g. Healthcare, ML, Data Science",
        'Abstract: Not more than 150 words','GitHub or other repository link if it is open source/public',
        'Video presentation link if available (any videos produced during the terms)',
        'Project Website URL or URLs with development images/short video clips relating to the project if it is available.',
        'Non-UCL email addresses if you wish to be contacted in the future by IXN partners because of your work.','University');

// fetch projects
$projects = $link->query($DbToCsv);

// prepare csv
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Projects.csv');

// open file
$output = fopen('php://output', 'w');

// // insert header row into csv
fputcsv($output, $columnNames);

// insert projects into csv
while ($row = $projects->fetch_assoc()) {
    fputcsv($output, $row);
}

// close file
fclose($output);
exit;


?>
