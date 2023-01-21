<?php
  include "connect.php";

  $distance = $_POST['distance_vip'];
  $firstname = $_POST['firstname_vip'];
  $lastname = $_POST['surname_vip'];
  $gender = $_POST['gender_vip'];
  $email = $_POST['email_vip'];
  $tel = $_POST['tel_vip'];
  $size = $_POST['size_vip'];
  $receive = $_POST['receive_vip'];

  $h_num = $_POST['house_num_vip'];
  $district = $_POST['district_vip'];
  $subdistrict = $_POST['subdistrict_vip'];
  $province = $_POST['province_vip'];
  $postcode = $_POST['postcode_vip'];

  $sql = "INSERT INTO `info_vip`(`distance`, `firstname`, `lastname`, `gender`, `email`, `tel`, `size`, `receive`, `h_num`, `district`, `subdistrict`, `province`, `postcode`) VALUES
  ('$distance','$firstname','$lastname','$gender','$email','$tel','$size','$receive','$h_num','$district','$subdistrict','$province','$postcode')";
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
    alert('success');
    location='index.php';
  </script>
  ";
?>
