<?php
session_start();
include_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
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
</style></head>
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
                <br><br>
		   
		    <div class = "card-body">
		   
                    <form action="userinfo2.php" method="POST">
                      
			<div class="form-group">
			<label class="font-wight-bold text-success">Billing ID</label>
				<input type="text" name="billing_id" class="form-control"><br><br><br><br>
			</div>

			<div class="form-group">
			<label class="font-wight-bold text-success">Game ID</label>
				<input type="text" name="game_id" class="form-control"><br><br><br><br>
			</div>
			
			<div class="form-group">
			<label class="font-wight-bold text-success">Selling Price</label>
				<input type="text" name="Selling_price" class="form-control"><br><br><br><br>
			</div>
			<!--
			<div class="form-group">
			<label class="font-wight-bold text-success">Customer ID</label>
			<input type="text" name="C_ID" class="form-control"><br><br><br><br>
			</div>
			-->
			  <div class="text-center">
			<input class="button" type="submit" name="submit" value="Submit">
			</div>
			</div>
			</form>	
			
		   
                    </form>
</body>
</html>

