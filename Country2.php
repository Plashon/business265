<?php
try {
    require 'connect.php';
    $sql = "SELECT * FROM country";  
   $stmt = $conn->prepare($sql);
    $stmt->execute();
 
    // //แบบที่ 1
    // while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     echo '<br>' .
    //         'รหัสประเทศแบบที่ 1 : ' .
    //         $result['CountryCode'] .
    //         ' ชื่อประเทศ : ' .
    //         $result['CountryName'] .
    //         
    // }
 
    //แบบที่ 2
    while ($result = $stmt->fetch(PDO::FETCH_NUM)){
        echo "<br>"   . $result[0] ."--".  $result[1];   }

} 
    catch (PDOException $e) {
    echo 'ไม่สามารถประมวลผลข้อมูลได้ : ' . $e->getMessage();
}
 
$conn = null;
?>
