<?php
if (!isset($_GET['cID']) or  $_GET['cID'] == '') {
  //轉址
  header('location:02_tableView.php');
  exit();
}
?>