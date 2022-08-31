<?php
include_once("conn_obj.php");
$sql = "select * from students";
$result = $db_link->query($sql);
//$total_rows  代表總比數
$total_rows = $result->num_rows;
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>學生系統-主畫面</title>
</head>

<body>
  <div class="container py-3">
    <h1 class="text-center">學生系統-主畫面</h1>
    <h4><?php echo "查詢目前學生總比數: " . $total_rows . "筆"; ?>
  <a href="./06_add.php" class="btn btn-sm btn-warning">新增</a>
  </h4>
    
    <table class="table">
      <tr>
        <th>#</th>
        <th>座號</th>
        <th>姓名</th>
        <th>稱謂</th>
        <th>生日</th>
        <th>編輯</th>
      </tr>
      <!-- php 資料讀出迴圈 start -->
      <?php

      // print_r( $result);
      $num = 1;
      while ($row = $result->fetch_assoc()) {


      ?>
        <tr>
          <td><?php echo $num; ?></td>
          <td><?php echo "22A_" . $row['cID'] ?></td>
          <td><?php echo $row['cName'] ?></td>
          <td><?php
              if ($row['cSex'] == 'F') {
                echo "小姐";
              } else {
                echo "先生";
              }
              ?>
          </td>
          <td><?php echo $row['cBirthday'] ?></td>
          <td><a class="btn btn-primary ntn-sm" href="./03_detail.php?cID=<?php echo $row['cID']; ?>">詳細</a>
            <a class="btn btn-success ntn-sm" href="./04_edit.php?cID=<?php echo $row['cID']; ?>">編輯</a>
            <a class="btn btn-danger ntn-sm" href="./05_delete.php?cID=<?php echo $row['cID']; ?>">刪除</a>
          </td>
        </tr>
      <?php $num++;
      } ?>
      <!-- php 資料讀出迴圈 end -->
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>