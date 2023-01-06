<?php
try {
    require 'connect.php';
    $sql = "SELECT customer.CustomerID ,customer.Name,Birthdate, 
    customer.OutstandingDebt,country.CountryName  
    FROM customer,country
    WHERE customer.CountryCode = country.CountryCode"; 
   $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "<br>";
    //แบบที่ 1
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<br>' .
            'รหัสลูกค้าของฉันแบบที่ 1 : ' .
            $result['CustomerID'] .
            ' วันเกิด : ' .
            $result['Birthdate'] .
            ' ยอดหนี้ : ' .
            $result['OutstandingDebt'];
    }
 
//  //แบบที่ 2
//  while ($result = $stmt->fetch(PDO::FETCH_NUM)){
//     echo "<br>"  . "ชื่อลูกค้า : " . $result[1] .  $result[0]
//         . $result[2]   .  $result[3] ;   }
} 
    catch (PDOException $e) {
    echo 'ไม่สามารถประมวลผลข้อมูลได้ : ' . $e->getMessage();
}
 
$conn = null;
?>