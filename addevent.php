<?php
	session_start();
	$username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" contnet="Anurag Phadnis">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="shortcut icon" href=images/"icn.png"/>
	<link rel="stylesheet" href="css/style.css">
	<title>Event Management System</title></head>
<body>
	<nav class="navbar navbar-my navbar-default navbar-fixed-top">
		<div  class="navbar-header">
			<a class="navbar-brand" href="index.php">Event Managment</a>
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
	        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
		</div>
		<ul class="nav navbar-nav navbar-right collapse navbar-collapse" id=menu>
			<li><a href="#"><?php echo strtoupper($username);?>&nbsp &nbsp</li>
		</ul>
	</nav>
	<div class="paddtop"></div>
	<div class="container">
		<p>
			<form method="post" class="form-horizontal" action="uploadeventdata.php">
				<div class="form-group">
					<label for="ename" class="control-label col-sm-2">Event Name:</label>
					<div class="col-sm-9 col-sm-offset-1">
						<input type="text" class="form-control" id="ename" name="ename" placeholder="Add Event Name" required>
					</div>
				</div>
				<div class="form-group">
					<label for="edesc" class="control-label col-sm-2">Event Description:</label>
					<div class="col-sm-9 col-sm-offset-1">
						<input type="text" class="form-control" id="edesc" name="edesc" placeholder="Add Event Description" required>
					</div>
				</div>
				<div class="form-group">
					<label for="ereg" class="control-label col-sm-2">Registration Prize(INR):</label>
					<div class="col-sm-9 col-sm-offset-1">
						<input type="number" class="form-control" id="ereg" name="ereg" placeholder="Add Registration Prize for Event">
					</div>
				</div>
				<div class="form-group">
					<label for="edate" class="control-label col-sm-2">Event Date:</label>
					<div class="col-sm-9 col-sm-offset-1">
						<input type="date" class="form-control" id="edate" name="edate" placeholder="Add Date of Event(YYYY/MM/DD)">
					</div>
				</div>
				<div class="form-group">
					<label for="etime" class="control-label col-sm-2">Event Time:</label>
					<div class="col-sm-9 col-sm-offset-1">
						<input type="time" class="form-control" id="etime" name="etime" placeholder="Add Starting Time of Event">
						<br>
					</div>
						<center> <button type="submit" class="btn btn-default">Submit</button></center>
				</div>
			</form>
		</p>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">Please enable javascript</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">Please enable javascript</script>
	<script type="text/javascript" src="script.js">Please enable javascript</script>
</body>
</html>