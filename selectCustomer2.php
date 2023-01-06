<html> <head>
<title> Phubate-Display Customer-Detail</title>
</head>
<body>
<?php
require "connect.php";
$sql = "SELECT *
        FROM customer,country
        WHERE customer.CountryCode = country.CountryCode";
 
$stmt = $conn->prepare($sql);
 
$stmt->execute();
?>
 
<table width="800" border="1">
  <tr>
    <th width="90"> <div align="center">รหัสผู้ใช้ </div></th>
    <th width="140"> <div align="center">Name </div></th>
    <th width="120"> <div align="center">Birthdate </div></th>
    <th width="100"> <div align="center">Email </div></th>
    <th width="50"> <div align="center">CountryName </div></th>
    <th width="70"> <div align="center">ยอดหนี้</div></th>
  </tr>
 
<?php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
 
  <tr>
    <td>
      <!--อย่าเว้นวรรค เวลาลิ้งค์ ไอสัสสสสสสสสสสสส--> 
      <!--อย่าเว้นวรรค เวลาลิ้งค์ ไอสัสสสสสสสสสสสส--> 
        <a href="Detail.php?CustomerID=<?php echo $result["CustomerID"]; ?>">
                                        <?php echo $result["CustomerID"]; ?>    
        </a>   
        <!--อย่าเว้นวรรค เวลาลิ้งค์ ไอสัสสสสสสสสสสสส-->  
        <!--อย่าเว้นวรรค เวลาลิ้งค์ ไอสัสสสสสสสสสสสส--> 
    </td>
    <td>    <?php echo $result["Name"]; ?>              </td>
    <td>    <?php echo $result["Birthdate"]; ?>         </td>
    <td>    <?php echo $result["Email"]; ?>             </td>
    <td>    <?php echo $result["CountryName"]; ?>       </td>
    <td>    <?php echo $result["OutstandingDebt"]; ?>   </td>
    
  </tr>
 
<?php
  }
?>
 
</table>
 
<?php
$conn = null;
?>
</body>  
</html>