<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<title>TODO App</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-6 offset-md-3 text-center">
					<h1>TODO App</h1>
					<hr/>
					
					<?php
						
						//connect to MySQL
						$link = mysqli_connect("localhost", "root", "", "todo_app", 3306);
						
						include ('Note.class.php');

						if (mysqli_connect_error($link)) {
							die('<div class="alert alert-danger">Connection to DB failed!</div>');
						}
					
						if (isset($_POST['submit_btn'])) {
								
							$note = $_POST['note'];
							
							if (empty($note)) {
								echo '<div class="alert alert-warning">Note field cannot be empty</div>';
							}
							else {
								$time_now = time();
								//add the note to the table
								$sql_insert = "INSERT INTO notes (note, created) VALUES('$note', '$time_now')";
								
								//send sql to mysql
								mysqli_query($link, $sql_insert) or die(mysqli_error($link));
								
								if (mysqli_affected_rows($link) == 1) {
									echo '<div class="alert alert-success">Note added :)</div>';
								}
								else {
									echo '<div class="alert alert-warning">Something wrong happened :(</div>';
								}
							}
						}
					?>
					
					<h2>List Notes</h2>
					<?php
						//We will use PHP to connect to the notes table and get all notes..
						
						$allNotes = Note::getAllNotes($link);

						//check if there are any rows (notes)
						if (count($allNotes) > 0) {
							//list all notes
							echo '<div class="alert alert-success">'.count($allNotes).' note(s) found</div>';
							
							foreach ($allNotes as $note) {
								?> 
								<div class="card">
									<div class="card-body">
										<h5 class="card-title"><?php echo $note->note; ?></h5>
										<p class="card-text">Created on <?php echo date('dS F Y h:i:s', $note->created); ?></p>
										<a href="delete_note.php?id=<?php echo $note->id;?>" class="btn btn-danger">Delete Note</a>
									</div>
								</div>
								<?php
							}
							
						}
						else {
							//no notes, show message
							echo '<div class="alert alert-warning">There are no notes yet, please add one.</div>';
						}							
						
						
					?>
					<hr/>
					
					
					
					<h2>Add a new Note</h2>
					<form action="index.php" method="post">
						<textarea rows="10" cols="50" name="note" placeholder="Please enter your note" class="form-control"></textarea>
						<br/>
						<input type="submit" name="submit_btn" class="btn btn-success" />
					</form>
				</div>
			</div>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>