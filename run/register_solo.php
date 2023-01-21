<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>JomtraiRun</title>
  </head>
  <body>
    <?php include "navbar.php" ?>

    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-10">
          <h4>แบบบุคคล</h4>
          <hr>
          <form action="reg_script.php" method="post" enctype="multipart/form-data">
            <p>ระยะ</p>
            <select class="form-control" name="distance" required>
              <option selected disabled>ระยะ</option>
              <option>5 km</option>
              <option>10 km</option>
            </select>
            <hr>

            <p>ชื่อ-นามสกุล</p>
            <div class="form-inline">
              <input class="form-control mr-2" type="text" name="firstname" required>
              <input class="form-control ml-2" type="text" name="surname" required>
            </div>
            <p class="mt-2">เพศ</p>
            <select class="form-control" name="gender" required>
              <option selected disabled>เพศ</option>
              <option>ชาย</option>
              <option>หญิง</option>
            </select>
            <p class="mt-2">วันเกิด</p>
            <input class="form-control" type="date" name="birth" required>
            <div class="form-inline mt-2">
              <div class="mr-2">
                <p>อีเมล</p>
                <input class="form-control" type="email" name="email" required>
              </div>
              <div class="ml-2">
                <p>เบอร์โทร</p>
                <input class="form-control" type="number" maxlength="10" minlength="10" name="tel" required>
              </div>
            </div>
            <hr>

            <p>ที่อยู่</p>
            <div class="form-inline mt-2">
              <div class="mr-2">
                <p>บ้านเลขที่</p>
                <input class="form-control" type="text" name="house_num" required>
              </div>
              <div class="ml-2 mr-2">
                <p>อำเภอ</p>
                <input class="form-control" type="text" name="district" required>
              </div>
              <div class="mr-2 ml-2">
                <p>ตำบล</p>
                <input class="form-control" type="text" name="subdistrict" required>
              </div>
              <div class="ml-2">
                <p>จังหวัด</p>
                <input class="form-control" type="text" name="province" required>
              </div>
              <div class="mt-2">
                <p>รหัสไปรษณีย์</p>
                <input class="form-control" type="number" name="postcode" required>
              </div>
            </div>
            <hr>

            <p>เลือกขนาดเสื้อและวิธีรับเสื้อ</p>
            <div class="row">
              <div class="col-6">
                <p>ขนาด</p>
                <select class="form-control" name="size" required>
                  <option selected disabled>ขนาด</option>
                  <option>XS</option>
                  <option>S</option>
                  <option>M</option>
                  <option>L</option>
                  <option>XL</option>
                  <option>2XL</option>
                  <option>3XL</option>
                  <option>4XL</option>
                  <option>5XL</option>
                </select>
              </div>
              <div class="col-6">
                <p>วิธีรับเสื้อ</p>
                <select class="form-control" name="receive" required>
                  <option selected disabled>วิธีรับ</option>
                  <option>รับด้วยตนเอง</option>
                  <option>ส่งไปรษณีย์</option>
                </select>
              </div>
            </div>
            <hr>

            <p>ข้อมูลการโอน</p>
            <p><b>เลขบัญชี นายภาณุรุจ ทองมาก 401-111-222 <br>ธนาคารกรุงไทย</b></p>
            <p>หลักฐานการโอน</p>
            <input class="form-control" type="file" name="proof" required>
            <button class="btn text-light mt-4 mb-4" type="submit" style="background: #ebe;">สมัคร</button>

          </form>
        </div>
      </div>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
