<?php
session_start();
include_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="utf-8">

<link rel="stylesheet" href="css/style.css" type="text/css">
<style>
input[type=button],
      input[type=submit] {
        background-color: #000066;
        border: none;
        color: #fff;
        padding: 15px 30px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
	font-size:25px;

      }
</style>
</head>

<body>
<div class="container py-4">
<div class="row" style ="margin-left:150px:">
<div class ="col-md-8">
<?php

if(isset($_SESSION['success'])&&$_SESSION['success']!='')
{
	echo '<div class="alert alert-success text-center font-weight-bold" role="alert">'.$_SESSION['success'].'</div>';
	unset($_SESSION['success']);
}
if(isset($_SESSION['failure'])&&$_SESSION['failure']!='')
{
	echo '<div class="alert alert-danger text-center font-weight-bold" role="alert">'.$_SESSION['failure'].'</div>';
	unset($_SESSION['success']);
}

?>
<div align="center" >
<div class="card">
<h1 class="text-primary font-weight-bold text-center">Database Insertion</h1>
<div class = "card-body">
<form action="userinfo.php" method="POST">
<div class="form-group">
<label class="font-wight-bold text-success">Customer ID</label>
<input type="text" name="C_ID" class="form-control"><br><br><br><br>
</div>
<div class="form-group">
<label class="font-wight-bold text-success">First Name</label>
<input type="text" name="Fname" class="form-control"><br><br><br><br>
</div>
<div class="form-group">
<label class="font-wight-bold text-success">Last Name</label>
<input type="text" name="Lname" class="form-control"><br><br><br><br>
</div>
<div class="form-group">
<label class="font-wight-bold text-success">Phone Number</label>
<input type="text" name="Phno" class="form-control"><br><br><br><br>
</div><div class="form-group">
<label class="font-wight-bold text-success">Address</label>
<input type="text" name="Address" class="form-control"><br><br><br><br>
</div>
<div class="text-center">
<input class="button" type="submit" name="submit" value="Submit">
</div>
</div>
</form>	
</form>
</body>
</html>

