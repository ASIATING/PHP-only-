<?php
include_once("conn_obj.php");
?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>學生系統-新增資料</title>
</head>

<body>
  <div class="container py-3">
    <h1 class="text-center">學生系統-新增資料</h1>
    <form action="" method="get">
      <table>
        <tr>
          <td>座號</td>
          <td><input type="text" name="cID" id="cID" disabled></td>
        </tr>
        <tr>
          <td>姓名</td>
          <td><input type="text" name="cName" id="cName"></td>
        </tr>
        <tr>
          <td>性別</td>
          <td>
            <label><input type="radio" name="cSex" value="F">小姐</label>
            <label><input type="radio" name="cSex" value="M">先生</label>
          </td>
        </tr>
        <tr>
          <td>生日</td>
          <td><input type="date" name="cBirthday" id="cBirthday"></td>
        </tr>
        <tr>
          <td>電子郵件</td>
          <td><input type="email" name="cEmail" id="cEmail"></td>
        </tr>
        <tr>
          <td>手機號碼</td>
          <td><input type="text" name="cPhone" id="cPhone"></td>
        </tr>
        <tr>
          <td>住址</td>
          <td><input type="text" name="cID" id="cID"></td>
        </tr>
        <tr>
          <td>身高</td>
          <td><input type="number" name="cHeight" id="cHeight"></td>
        </tr>
        <tr>
          <td>體重</td>
          <td><input type="number" name="cWeight" id="cWeight"></td>
        </tr>

      </table>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>