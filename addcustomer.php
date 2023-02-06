<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
</head>
<body>
    <H1>Add Customer</H1>
    <form action="addcustomer.php"method="POST">
  <input type="text" placeholder="Enter Customer ID"name="CustomerID">
  <br><br>
    <input type="text" placeholder="Enter Name"name="Name">
    <br><br>
    <input type="date" name="Birtdate">
    <br><br>
    <input type="email" placeholder="Enter Customer Mail"name="Email">
    <br><br>
    <input type="text" placeholder="Enter Country Code"name="CountryCode">
    <br><br>
    <input type="text" placeholder="Enter debt"name="OutstandingDebt">
    <br><br>

    <input type="submit">
    </form>
    </body>
</html>

<?php

if(!empty($_POST['CustomerID'])&& !empty($_POST['Name'])&& !empty($_POST['Birtdate'])&& !empty($_POST['Email'])&& !empty($_POST['CountryCode'])&& !empty($_POST['OutstandingDebt'])):
 
require 'connect.php';
$sql_insert="insert into customer values (:CustomerID, :Name, :Birtdate, :Email, :CountryCode, :OutstandingDebt)";

$stmt=$conn->prepare($sql_insert);
$stmt->bindParam(":CustomerID", $_POST['CustomerID']);
$stmt->bindParam(":Name", $_POST['Name']);
$stmt->bindParam(":Birtdate", $_POST['Birtdate']);
$stmt->bindParam(":Email", $_POST['Email']);
$stmt->bindParam(":CountryCode", $_POST['CountryCode']);
$stmt->bindParam(":OutstandingDebt", $_POST['OutstandingDebt']);

if($stmt->execute()):
  
    $message = 'Suscessfuiiy add new Customer';
    //header("Location:/business265/");
else:
    $message = 'Fail to add new Customer';
endif;
echo $message;
$conn = null;
endif;

?>