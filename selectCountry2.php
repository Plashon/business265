<html> <head>
<title> Phubate-Display Country</title>
</head>
<body>
<?php
require "connect.php";
$sql = "SELECT * FROM 	Country";
 
$stmt = $conn->prepare($sql);
 
$stmt->execute();
?>
 
<table width="200" border="1">
  <tr>
    <th width="90"> <div align="center">รหัสประเทศ </div></th>
    <th width="20"> <div align="center">ชื่อประเทศ</div></th>

  </tr>
 
<?php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
 
  <tr>
 
    
    <td>   <div align="center"> <?php echo $result["CountryCode"]; ?>        </td>

    <td>
      <!--อย่าเว้นวรรค เวลาลิ้งค์ ไอสัสสสสสสสสสสสส--> 
      <!--อย่าเว้นวรรค เวลาลิ้งค์ ไอสัสสสสสสสสสสสส--> 
        <a href="Detail2.php?CountryName=<?php echo $result["CountryName"]; ?>">
                                        <?php echo $result["CountryName"]; ?>    
        </a>   
        <!--อย่าเว้นวรรค เวลาลิ้งค์ ไอสัสสสสสสสสสสสส-->  
        <!--อย่าเว้นวรรค เวลาลิ้งค์ ไอสัสสสสสสสสสสสส--> 
    </td>

   

   
    
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


