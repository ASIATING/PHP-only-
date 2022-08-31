<?php
$db_host="localhost";
$db_username="newschool";
$db_password="1234";
$db_name="newschool";

$db_link =@new mysqli("$db_host","$db_username","$db_password","$db_name");
// new mysqli("主機 PORT","使用者名稱","密碼");
if ($db_link->connect_error !=""){
    echo "資料庫連結失敗";
    // echo ($connect_error) ;
} else{

    $db_link->query("SET NAMES 'utf8'");
    // echo "資料庫ok";
}

