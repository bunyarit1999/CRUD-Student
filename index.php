<?php
require_once('server/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เว็บไซต์การจัดการข้อมูลนักศึกษา</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/font.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/sweetalert2.min.css">
    <script src="assets/sweetalert2/dist/sweetalert2.all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">เว็บไซต์การจัดการข้อมูลนักศึกษา</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <a href="addstudent.php" class="btn btn-primary">เพิ่มข้อมูลนักศึกษา</a>
        </div>
    </nav>
    
<br> <br> <br>
<div class="container my-3 p-3 bg-light rounded-3">
<h4><i class="fas fa-table"></i> แสดงรายชื่อข้อมูลนักศึกษา</h4>
    <hr>
    <table class="table table-striped table-hover" id="example">
        <thead>
            <tr>
            <th>ลำดับที่</th>
            <th>รหัสนักเรียน</th>
            <th>ชื่อ - นามสกุล</th>
            <th>เพศ</th>
            <th>วัน/เดือน/ปีเกิด</th>
            <th>สาขา</th>
            <th>คณะ</th>
            <th>ระดับชั้นปี</th>
            <th>บันทึกเมื่อ</th>
            <th>การจัดการข้อมูล</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $students = "SELECT * FROM student";

            $result = $conn->prepare($students);
            $result->execute();
 
            if ($result->rowCount()) {
           
            $rows = $result->fetchAll(PDO::FETCH_OBJ);
            $count =1;
            foreach($rows as $row) {
        ?>
        <tr>
            <td><?=$count++?></td>
            <td><?=$row->Stu_id?></td>
            <td><?=$row->Name_Surname?></td>
            <td><?=$row->Gender?></td>
            <td><?=$row->Birthday?></td>
            <td><?=$row->Department?></td>
            <td><?=$row->Faculty?></td>
            <td><?=$row->Class?></td>
            <td><?=$row->time?></td>
            <form action="">
            <td> <a class="btn btn-warning" href="editstudent.php?id=<?=$row->id_udg?>"> <i class="fa-solid fa-pen-to-square"></i> </a>
                <button type='button' class="btn btn-danger" id='deleteItem' data-id="<?=$row->id_udg?>"> <i class="fa-solid fa-trash-can"> </i></button>
            </form>
            </td> 
        </tr>
        <?php
                }
            } else {
            echo '<tr><td colspan=3>ไม่พบข้อมูลนักศึกษา</tr></td>';
            }
            $conn = null;
            ?>

        </tbody>
        </table>
        
</div>

<script>
    $(document).on('click', '#deleteItem', function(){  
        Swal.fire({
            text: "คุณต้องการลบข้อมูลหรือไม่ ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ยืนยัน',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
              if (result.isConfirmed) { 
                $.ajax({  
                    type: "GET",  
                    url: "deletestudent.php",  
                    data: { id_udg : $(this).data('id') }
                   
                }) .done(function(response, textStatus, jqXHR){
                    Swal.fire({
                        text: 'ลบรายการเสร็จสิ้น',
                        icon: 'success',
                        confirmButtonText: 'ตกลง',
                    }).then((result) => {
                        location.reload()
                    })
                }) 
            } 
        })
    }) 
    $(function(){
                $('#example').dataTable();
            });  
</script>

</body>
</html>
