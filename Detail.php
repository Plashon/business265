<html>
    <head>
        <litle>Display-Select-Customer</litle>
    </head>
    <body>
        <?php
        if (isset($_GET["CustomerID"]))
        {
            $strCustomerID = $_GET["CustomerID"];
        }
        require "connect.php";
        $sql = "SELECT * FROM customer WHERE CustomerID = ?";
        $params = array($strCustomerID);
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);    
        ?>
        

<table width="300" border="1">
  <tr>
    <th width="325">รหัสลูกค้าสมาชิก</th>
    <td width="240"><?php echo $result["CustomerID"]; ?></td>
  </tr>

  <tr>
    <th width="130">ชื่อ</th>
    <td><?php echo $result["Name"]; ?></td>
  </tr>
 

  <tr>
    <th width="130">Email</th>
    <td><?php echo $result["Email"]; ?></td>
  </tr>

 
  </table>
<?php
$conn = null;
?>
</body>
</html>

    </body>
</html>