<?php
include_once("conn_obj.php");
$sql="SELECT * FROM students";
$result = $db_link->query($sql);
print_r($result);
// fetch_row() 整數索引  _assoc 欄位名為索引 _array 整數與欄位名
while($row_result = $result->fetch_assoc()){
    foreach($row_result as $item => $value){
        // foreach 將陣列以 鍵=>值 方式儲存建立
        echo $item . "=" . $value . "<br>";
        
    }
    echo "<hr>";

}