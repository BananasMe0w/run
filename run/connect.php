<?php
  $host = "localhost";
  $user = "root";
  $pw = "meowmeow";
  $db = "run";

  $con = new mysqli($host, $user, $pw, $db);
  $con -> set_charset("utf8");
  date_default_timezone_set('Asia/Bangkok');
  session_start();
?>
