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
      <form action="search_vip.php" method="post">
        <div class="row">
          <div class="col-12 input-group-append">
            <input class="form-control" type="text" name="search">
            <button type="submit" class="btn text-light ml-1" style="background: #ebe;">search</button>
          </div>
        </div>
      </form>
      <table class="table table-responsive-lg mt-4">
        <thead class="text-center">
          <th>เลข BIB</th>
          <th>ชื่อ</th>
          <th>นามสกุล</th>
          <th>ประเภท</th>
          <th>เพศ</th>
          <th>รุ่นอายุ</th>
          <th>ขนาดเสื้อ</th>
          <th>การรับเสื้อ</th>
        </thead>
        <tbody>
          <?php
            include "connect.php";

            $sql = "SELECT * FROM info_vip";
            $result = $con->query($sql);
            while ($row = $result->fetch_assoc()) {

              $birth = $row['birth'];
              $date = date("Y-m-d");

              $age = $date-$birth;

              $bib = sprintf("VIP-%04d", $row['id_info']);
          ?>
          <tr class="text-center">
            <td><?php echo $bib ?></td>
            <td><?php echo $row['firstname'] ?></td>
            <td><?php echo $row['lastname'] ?></td>
            <td><?php echo $row['distance'] ?></td>
            <td><?php echo $row['gender'] ?></td>
            <td>
              <?php echo "ไม่จำกัดรุ่นอายุ"; ?>
            </td>
            <td><?php echo $row['size'] ?></td>
            <td><?php echo $row['receive'] ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
