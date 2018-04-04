<?php
session_start();
if(isset($_POST["sub"]))
{
	include 'dbinit.php';

	$name=$_POST["username"];
	$pass=$_POST["password"];

	$_SESSION['username'] = $name;

	$qry = "SELECT * FROM admin where username = '$name' ";

	$rs=mysqli_query($con,$qry) or die("Eror while fetching data");
	//var_dump($rs);	
	if(mysqli_num_rows($rs)>=1)
	{
		$rw = mysqli_fetch_assoc($rs);
		if ($rw['username'] == $name) 
		{
			
		
			if ($pass==$rw['password']  ) 
			{
				header("location:admin.php");
			}
			else
			{
				echo "<script>alert('Incorrect password/username')</script>";
			}
		}
		else 
		{
			echo "<script>alert('Incorrect password/username')</script>";
		}
	}
	else
	{
		echo "<script>alert('Incorrect password/username')</script>";
	}
	
}
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
	<title>Event Management System</title>
</head>
<body>
	<nav class="navbar navbar-my navbar-default navbar-fixed-top">
		<div  class="navbar-header">
			<a class="navbar-brand" href="index.php">Event Managment</a>
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
	        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
		</div>
		<div class="nav navbar-right collapse navbar-collapse" id="menu">
		    <form class="navbar-form" action="" method="post">
		      <div class="form-group">
		      	<label for="username">Username:</label>
		        <input type="text" class="form-control" name ="username" id ="username" placeholder="username" required>
		      	<label for="password">Password:</label>
		        <input type="password" class="form-control" name="password" id ="password" placeholder="Password" required>
		      	<input type="submit" name="sub" class="btn btn-default" value="Login">
		      	&nbsp &nbsp
		      </div>
		    </form>
		</div>
	</nav>
	<div class="img1bg"></div>
	<div class="jumbotron">
		<center>
			This is a project for Database Management System lorem ipsum dolor set amet
						This is a project for Database Management System lorem ipsum dolor set amet			This is a project for Database Management System lorem ipsum dolor set amet			This is a project for Database Management System lorem ipsum dolor set amet			This is a project for Database Management System lorem ipsum dolor set amet			This is a project for Database Management System lorem ipsum dolor set amet
		</center>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">Please enable javascript</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">Please enable javascript</script>
	<script type="text/javascript" src="script.js">Please enable javascript</script>
</body>
</html>