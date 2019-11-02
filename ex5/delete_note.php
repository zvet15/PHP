<?php

if (isset($_GET['id'])) {
	//get note's id from the URL using GET
	$note_to_delete = $_GET['id'];
	
	//connect to db
	$link = mysqli_connect("localhost", "root", "", "todo_app", 3306);
	
	//create DELETE sql command
	$sql_del = "DELETE FROM notes WHERE id='$note_to_delete'";
	
	//send query to mysql
	mysqli_query($link, $sql_del);
	
	//check if row was affected (deleted)
	if (mysqli_affected_rows($link) == 1)
		echo "Note deleted :D";
	else 
		echo "Note not deleted :(";
	
	//ideally you would redirect the user to the index.php with the msg
}
?>
<hr/>
<a href="index.php">Go back</a>