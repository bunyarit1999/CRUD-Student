<?php
require_once('server/connect.php');
require_once('code/edit.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลนักศึกษา</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/font.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
         <a class="navbar-brand" href="#">เว็บไซต์การจัดการข้อมูลนักศึกษา</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        </div>
    </nav>
    
    <br> <br> <br> 
<div class="container my-3 p-3 bg-light rounded-3">
<h4><i class="fas fa-user-plus"></i> แก้ไขมูลนักศึกษา</h4>
    <hr>
        <form action=" " method="post" class="row g-3">

        <input type="hidden" name="id" value="<?php echo $row['id_udg']?>"> 
  
            <div class="col-md-6">
                <label for="Stu_id" class="form-label">รหัสนักศึกษา</label>
                <input class="form-control" type="number" name="Stu_id" value="<?php echo $row['Stu_id']?>" required>
            </div>

            <div class="col-md-6">
                <label for="Name_Surname" class="form-label">ชื่อ - นามสกุล</label>
                <input class="form-control" type="text" name="Name_Surname" value="<?php echo $row['Name_Surname']?>" required>
            </div>

            <div class="col-md-6">
                <label for="Gender" class="form-label">เพศ</label>
                <select class="form-select" name="Gender" aria-label="Default select example">
                    <option value="ผู้ชาย">ผู้ชาย</option>
                    <option value="ผู้หญิง">ผู้หญิง</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="Birthday" class="form-label">วัน/เดือน/ปีเกิด</label>
                <input class="form-control" type="date" name="Birthday" value="1999-01-01">
            </div>
            
            <div class="col-md-6">
                <label for="Department" class="form-label">สาขา</label>
                <input class="form-control" type="text"name="Department" value="<?php echo $row['Department']?>" required>
            </div>

            <div class="col-md-6">
                <label for="Faculty" class="form-label">คณะ</label>
                <input class="form-control" type="text"name="Faculty" value="<?php echo $row['Faculty']?>" required>
            </div>

            <div class="form-group mb-3">
                <label for="Class" class="form-label">ระดับชั้นปี</label>
                <select class="form-select" name="Class" aria-label="Default select example">
                    <option value="1">ปี 1</option>
                    <option value="2">ปี 2</option>
                    <option value="3">ปี 3</option>
                    <option value="4">ปี 4</option>
                </select>
            </div>
            
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                บันทึกข้อมูล
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> 🔴การแจ้งเตือน</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ยืนยันการบันทึกข้อมูลหรือไม่
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit" name="submit">ยืนยัน</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
                    </div>
                    </div>
                </div>
                </div>
                <button class="btn btn-danger" type="reset">ล้างข้อมูล</button>
            </div>
        </form>
    </div>


</body>
</html>