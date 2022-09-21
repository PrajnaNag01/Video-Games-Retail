<?php
session_start();
$conn=mysqli_connect('localhost','root','','videogame');

if($conn)
{
	echo "connected to database";
}
else
{	
	echo "Not connected to database";
}
if(isset($_POST['submit']))
{
	
	$billing_id=$_POST['billing_id'];	
	$game_id=$_POST['game_id'];
	$Selling_price=$_POST['Selling_price'];
	$_SESSION['c_id'] = "$C_ID";
	
}

$query1="INSERT INTO invoice(billing_id,game_id,Selling_price,c_id) VALUES ('$billing_id','$game_id','$Selling_price','$c_id')";

$result=mysqli_query($conn, $query1);
if($result)
{
	
		$_SESSION['success']="";
		header('Location:invoice.php');
	}
	else
	{
		$_SESSION['failure']="";
			echo'<script>alert("Invalid information, please enter again")</script>';
			header( "refresh:1; url=contact2.php" );
	}

?>


