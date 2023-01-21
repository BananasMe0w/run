<?php
  $dir = "uploads/";
  $file = $dir.basename($_FILES['up']['name']);
  $type = strtolower(pathinfo($_FILES['up']['name'],PATHINFO_EXTENSION));

  if(file_exists($file)){
    echo "file exist";
  }elseif ($type<>"png" && $$type<>"jpg") {
    echo "$type error";
  }else {
    move_uploaded_file($_FILES['up']['tmp_name'],$file);
    echo "success";
  }
?>
