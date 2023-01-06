<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ดูข้อมูลselect0.php</title>
</head>
<body>
 
<?php
require 'connect.php';
 
// ทดสอบเรียกดูข้อมูลจากฐานข้อมูล แบบ Loop
$sql = "SELECT customer.CustomerID ,customer.Name, 
        customer.OutstandingDebt,country.CountryName  
        FROM customer,country
        WHERE customer.CountryCode = country.CountryCode"; 
        //WHERE CustomerID = 'Cus005' 
$stmt = $conn->prepare($sql);
$stmt->execute();
echo '<br>';
 echo '<br>';
 
$result = $stmt->fetchAll();
//print_r($result);

foreach ($result as $r) {
    print $r['CustomerID'] . '--' .
     $r['Name']  .'--'. $r['OutstandingDebt'].
      '--' . $r['CountryName']. '<br>';
}
?>
