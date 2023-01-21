<?php
  include "connect.php";

  $distance = $_POST['distance'];
  $firstname = $_POST['firstname'];
  $surname = $_POST['surname'];
  $gender = $_POST['gender'];
  $birth = $_POST['birth'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $size = $_POST['size'];
  $receive = $_POST['receive'];

  $h_num = $_POST['house_num'];
  $district = $_POST['district'];
  $subdistrict = $_POST['subdistrict'];
  $province = $_POST['province'];
  $postcode = $_POST['postcode'];

  $g_name = $_POST['groupname'];

  $sql = "INSERT INTO `info`(`distance`, `firstname`, `lastname`, `groupname`, `gender`, `birth`, `email`, `tel`, `size`, `receive`, `h_num`, `district`, `subdistrict`, `province`, `postcode`) VALUES
  ('$distance','$firstname','$surname','$groupname','$gender','$birth','$email','$tel','$size','$receive','$h_num','$district','$subdistrict','$province','$postcode')";
  $result = $con->query($sql);

  $dir = "uploads/";
  $file = $dir.basename($_FILES['proof']['name']);
  $type = strtolower(pathinfo($_FILES['proof']['name'],PATHINFO_EXTENSION));

  if ($type<>"png" && $type<>"jpg") {
    echo "picture error";
  }else {
    move_uploaded_file($_FILES['proof']['tmp_name'],$file);
  }

  echo "
  <script type='text/javascript'>
    alert('successfully');
    location='index.php';
  </script>
  ";
?>
