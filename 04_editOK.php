<?php
if(isset($_GET['action']) && $_GET['action'] =='edit'){
     echo "送過來";
    include_once('./conn_obj.php');
    //設定接收變數
    $cID=$_GET['cID'];
    $cName=$_GET['cName'];
    $cSex=$_GET['cSex'];
    $cBirthday=$_GET['cBirthday'];
    $cEmail=$_GET['cEmail'];
    $cPhone=$_GET['cPhone'];
    $cAddr=$_GET['cAddr'];
    $cHeight=$_GET['cHeight'];
    $cWeight=$_GET['cWeight'];
    
    $sql = "update students set
    cName='{$cName}',
    cSex='{$cSex}',
    cBirthday='{$cBirthday}',
    cEmail='{$cEmail}',
    cPhone='{$cPhone}',
    cAddr='{$cAddr}',
    cHeight={$cHeight},
    cWeight={$cWeight}
    where cID={$cID}";
    $result = $db_link->query($sql);
    print_r($result);
    header("location:02_tableview.php");

 
}
