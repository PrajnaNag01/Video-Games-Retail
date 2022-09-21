<!DOCTYPE html>
<html>
<head>
  <title>Invoice</title>

</head>

<body>
<div align="center">
 <div id="content"
                 style="text-align: center;
                 vertical-align: middle;
                 border-color: #000000;
                 border-width: 4px;
                 border-style: solid;
                 margin-top: 1%;
                 margin-bottom: 2%;
		margin-left: 35%;
		margin-right: 40%;">
              
<h2>Invoice</h2>
<div align="center">
<table border="2">
<tbody>
  <tr>
    <td>Customer_ID</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Phone Number</td>
    <td>Address</td>
  </tr>

<?php

include "dbconn.php"; // Using database connection file here
$sql = "SELECT * FROM customer ORDER BY C_ID DESC LIMIT 1";
$records = mysqli_query($db,$sql) or die( mysqli_error($db));

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['C_ID']; ?></td>
    <td><?php echo $data['Fname']; ?></td>
    <td><?php echo $data['Lname']; ?></td>
    <td><?php echo $data['Phno']; ?></td>
    <td><?php echo $data['Address']; ?></td>
  </tr>	
<?php
}
?>
</tbody>
</table>

<table border="2">
<tbody>
  <tr>
    <td>Billing ID</td>
    <td>Game ID</td>
    <td>Selling Price</td>
    <td>Billing Date & Time</td>
  </tr>
<br><br>
<?php

include "dbconn.php"; // Using database connection file here
$sql = "SELECT * FROM invoice ORDER BY Billing_date DESC LIMIT 1";
$records = mysqli_query($db,$sql) or die( mysqli_error($db));

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['billing_id']; ?></td>
    <td><?php echo $data['game_id']; ?></td>
    <td><?php echo $data['Selling_price']; ?></td>
    <td><?php echo $data['Billing_date']; ?></td>
  </tr>	
<?php
}
?>
</tbody>
</table>
<?php mysqli_close($db); // Close connection
 ?>
<br>
<h4 align ="center">
Thankyou for shopping in Panash!<br>
We hope to see you soon<br>
Keep calm and game on!<br>
</div>
</div>
</div>
</h4>
</body>
<?php
header( "refresh:20; url=contact.php" );
?>
</html>

