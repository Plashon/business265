<html><head>
        <title> Display Selected Country Information </title>
    </head>
    <body>
        <?php
        if (isset($_GET["CountryName"]))
        {
            $strCountryName = $_GET["CountryName"];
            echo  $strCountryName;
        }
        require "connect.php";
        $sql ="SELECT * FROM country WHERE CountryName = ?";
        $params = array($strCountryName);
        $stmt = $conn->prepare($sql);
       $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
  
<!-- Detail  -->
    <table width="300" border="1">
    <tr>
        <th width="130">รหัสประเทศ</th>
        <td><?php echo $result["CountryCode"]; ?></td>
    </tr>

  <tr>
    <th width="325">ชื่อประเทศ</th>
    <td width="240"><?php echo $result["CountryName"]; ?></td>
  </tr>


  </table>

 
<?php
$conn = null;
?>
    </body>
</html>