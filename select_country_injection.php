<?php
require "connect.php";
if (isset($_GET["CountryCode"]))
{
    $strCountryCode = $_GET["CountryCode"];
    echo "<br>" . "strCountryCode = " .$strCountryCode;
    $sql = "SELECT * FROM country where CountryCode = '" .$strCountryCode . "'";
    echo "<br>" . " sql = " .$sql . "<br>";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    print_r($result);

}
?>