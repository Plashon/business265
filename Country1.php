<?php
require "connect.php";
// ลองให้โชว์ข้อมูล country
$sql = "SELECT * FROM country"; 
       
$stmt = $conn->prepare($sql);
$stmt->execute();
echo '<br>';
 echo '<br>';
 
$result = $stmt->fetchAll();
//print_r($result);

foreach ($result as $r) {
    print $r['CountryCode'] . '--' .$r['CountryName']  .'--' . $r['CountryName']. '<br>';
}
?>