<html> <head>
<title> Phubate-Display customer</title>
</head>
<body>
<?php
require "connect.php";
$sql = "SELECT customer.CustomerID, customer.Name , customer.Birthdate,customer.Email,country.CountryName,customer.OutstandingDebt  
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
    <td>    <?php echo $result["CustomerID"]; ?>        </td>
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