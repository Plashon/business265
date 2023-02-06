<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Country</title>
</head>
<body>
    <center><H1>Add Country</H1></center>
    <form action="addcountry.php"method="POST">
   <center><input type="text" placeholder="Enter Country Code"name="CountryCode"></center> 
    <br>
    <center><input type="text" placeholder="Enter Country Name"name="CountryName"></center> 
    <br><br>
    <center><input type="submit"></center>
    </form>
    </body>
</html>

<?php

if(!empty($_POST['CountryCode'])&& !empty($_POST['CountryName'])):
  
require 'connect.php';
$sql_insert="insert into country values (:CountryCode, :CountryName)";

$stmt=$conn->prepare($sql_insert);
$stmt->bindParam(":CountryCode", $_POST['CountryCode']);
$stmt->bindParam(":CountryName", $_POST['CountryName']);

if($stmt->execute()):
    
    $message = 'Suscessfuiiy add new country';
    //header("Location:/business265/");
else:
    $message = 'Fail to add new country';
endif;
echo $message;
$conn = null;
endif;

?>