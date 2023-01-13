<html>
    <head>
        <title>
        Search_country_in_one_click
        </title>
    </head>
    <body>
        <H1>Search_country_in_one_click</H1>
        <form action="Search_country_in_one_click.php" methode="GET">
            <input type="text"placeholder="Enter Country Code" name="CountryCode">
            <br><br>
            <input type="submit">
        </form>
    </body>
</html>
<?php
if(isset($_GET['CountryCode'])):
    echo "<br>" . $_GET['CountryCode'];
    require 'connect.php';
    $count =0;
    $sql = "SELECT * FROM country where CountryCode = :CountryCode";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':CountryCode',$_GET['CountryCode']);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    echo"<br>****************<br>";
    
    while($row = $stmt->fetch()){
        echo $row['CountryCode'].''.$row['CountryName']."<br/>";
        $count++;

    }
//echo"count...".$count;
if($count==0)
echo "<br>No data...<br/>";
$conn = null;
endif;
?>