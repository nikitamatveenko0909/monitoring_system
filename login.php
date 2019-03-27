<?php
session_start();
$url = 'userpass.json';
$data = file_get_contents($url);
$login = json_decode($data);
$username = $_POST['username'];
$password = $_POST['password'];

if($username == $login->username && $password == $login->password){
  $_SESSION['success'] = "Successfully logged in";
  $_SESSION['auth'] = 1;
  header("Location:list.php");
}
else{
  $_SESSION['failure'] = "Incorrect";
  header("Location:index.php");
}
?>
