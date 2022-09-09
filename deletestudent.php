<?php
if($_SERVER['REQUEST_METHOD'] === 'GET') {

    require_once('server/connect.php');
    
    try {
        $stmt = $conn->prepare("DELETE FROM student WHERE id_udg = :id_udg");
        
        $stmt->bindParam(':id_udg', $id_udg );
 
        $id_udg  = $_GET["id_udg"];
        $stmt->execute();
           
        header('location:index.php');   

    } catch (PDOException $e) {
        echo '<br> <br> <br> ไม่สามารถลบข้อมูลได้ เกิดข้อผิดพลาด : ' . $e->getMessage();
        echo "<a href='index.php'>กลับหน้าหลัก</a>";
    }
      $conn = null;
}








        

