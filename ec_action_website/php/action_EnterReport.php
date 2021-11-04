<?php

	session_start();
	//Here we include our database connection
	include_once 'dbh.inc.php';

	//Here we fetch the data from the URL that was passed from our HTML form\
	$equipmentPick = $_POST['equipmentPick'];
	$room = $_SESSION['room'];
  $report="";

	foreach ($equipmentPick as $value){
		$report .= "$value"." | ";
	}


	// Here we create a SQL statement that insert data into our database
	$sql = "INSERT INTO ecstock (room, report, tim, status) VALUES ( '$room','$report', NOW(), 'ACTIVE');";

	//Here we "query" (insert) the data into the database and check if successful
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();

	//We don't need to do anythin else in order to insert data
	//HOWEVER!!!
	//We have not added ANY security to our code by filtering the data the user typed into the HTML form. We will learn about security later using prepared statements!

	// Here we go back to the front page
	header("Location: ../thank_you.html");
