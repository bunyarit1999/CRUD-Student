<?php
  if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
    try {
        $stmt = $conn->prepare("INSERT INTO student(Stu_id , Name_Surname , Gender , Birthday , Department , Faculty , Class , time) 
        VALUES(:Stu_id , :Name_Surname , :Gender , :Birthday , :Department , :Faculty , :Class , :time)");
        
        $stmt->bindParam(':Stu_id', $Stu_id);
        $stmt->bindParam(':Name_Surname', $Name_Surname);
        $stmt->bindParam(':Gender', $Gender);
        $stmt->bindParam(':Birthday', $Birthday);
        $stmt->bindParam(':Department', $Department);
        $stmt->bindParam(':Faculty', $Faculty);
        $stmt->bindParam(':Class', $Class);
        $stmt->bindParam(':time', $time);

        $Stu_id = $_POST["Stu_id"];
        $Name_Surname = $_POST["Name_Surname"];
        $Gender = $_POST["Gender"];
        $Birthday = $_POST["Birthday"];
        $Department = $_POST["Department"];
        $Faculty = $_POST["Faculty"];
        $Class = $_POST["Class"];
        $time = date("Y-m-d h:i:s");
        $stmt->execute();
    
        header('location:../udg_students/index.php');
                
    } catch (PDOException $e) {
        echo '<br> <br> <br> ไม่สามารถบันทึกข้อมูลได้ เกิดข้อผิดพลาด : ' . $e->getMessage();
        echo "<a href='../udg_students/index.php'>กลับหน้าหลัก</a>";
    }
    $conn = null;
}
