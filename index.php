<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="POST" action="index.php">
    <input type="text" name="email" id="">
    <input type="submit" value="Submit">
  </form>
</body>

</html>

<?php
$connect = new mysqli('localhost','root','','pv'); // thu vien mysqli, ket noi toi database tren may cua minh, user la root, khong co password, database ten la pv
if($connect->errno !== 0)
{
  die("Error"); //thong bao ket noi that bai
}
$connect->set_charset('utf8'); //neu csdl su dung tieng viet
$exp = "/^[a-zA-z0-9-\.]+@([a-zA-z0-9-]+\.)+[a-zA-Z0-9-]{2,4}$/";
$array_email = array();
if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $sql = "select * from email where email='$email'"; //lay tat ca column cua record thoa man email la email duoc nhap vao
  $res = $connect->query($sql); //lay ra ket qua cua cau truy van
  if (empty($email)) {
    echo "Email " . $email .  " is empty email";
  } else if (!preg_match($exp, $email)) {
    echo "Email " . $email .  " is invalid email";
  }
  else if ($res->num_rows > 0) {
    echo "Email " . $email .  " is duplicate email";
  }
  else {
    $str = "insert into email value('$email')";
    $connect->query($str);
    echo "Email " . $email .  " is success send";
  }
}
?>