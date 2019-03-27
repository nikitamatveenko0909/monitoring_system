<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
    session_start();
    if(!isset($_SESSION['auth'])){
      header("Location:index.php");
    }
   ?>
  <a href="logout.php">Log out</a>
  <?php
    echo $_SESSION['success'] . "<br>";

    $url = 'list.json';
    $data = file_get_contents($url);
    $list = json_decode($data,true);
    $users = $list['users'];


    $tableContent = '<table>';
    foreach ($users as $user) {
      $tableContent .= '<tr><td>'.$user['firstname'].'</td><td>'.$user['lastname'].'</td><td>'.$user['email'].'</td><td>'.$user['number'].'</td></tr>';
    }
    $tableContent .= '</table>';
   ?>



<?php print $tableContent; ?>

<a href="addnew.php">Lägg till</a>


</body>
</html>
