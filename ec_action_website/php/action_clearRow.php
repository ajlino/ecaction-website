<?php
	//Here we include our database connection
	include_once 'dbh.inc.php';

	//Here we fetch the data from the URL that was passed from our HTML form
	$id = $_POST['report_id'];

  	//Here we create a SQL statement that insert data into our database
  	$sql = "UPDATE ecstock SET status='CLEARED' WHERE report_id = $id";

	//Here we "query" (insert) the data into the database and check if successful
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();

// Here we go back to the front page
header("Location: action_MakeReportList.php");

	//We don't need to do anythin else in order to insert data
	//HOWEVER!!!
	//We have not added ANY security to our code by filtering the data the user typed into the HTML form. We will learn about security later using prepared statements!

	//Here we go back to the front page
	// header("Location: ../index.php?signup=success");
