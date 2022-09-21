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
	$C_ID=$_POST['C_ID'];
	$Fname=$_POST['Fname'];	
	$Lname=$_POST['Lname'];
	$Phno=$_POST['Phno'];
	$Address=$_POST['Address'];
}

$query="INSERT INTO Customer(C_ID,Fname,Lname,Phno,Address) VALUES ('$C_ID','$Fname','$Lname','$Phno','$Address')";


$result=mysqli_query($conn, $query);

if($result)
{
		$_SESSION['success']="";
		header('Location:contact2.php');
	}
	else
	{
		$_SESSION['failure']="";
			echo'<script>alert("Invalid information, please enter again")</script>';
			header( "refresh:1; url=contact.php" );
		
		
	}

?>
