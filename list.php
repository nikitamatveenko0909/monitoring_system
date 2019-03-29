<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/listStyle.css">
	<link rel="stylesheet" href="css/style.css">

	<title>Document</title>
</head>

<body>

	<?php
  include "list_decoder.php";
    session_start();
    if(!isset($_SESSION['auth'])){
      header("Location:index.php");
    }
    echo $_SESSION['success'] ;

    $users = $list['users'];


    $tableContent = ' <div class="container"> <h2 class="text-center"> Lista </h2> <hr/> <div class=""> <table class="table table-bordered"> 	<thead><tr>
        <th>Förnamn</th>
        <th>Efternamn</th>
        <th>Epost</th>
        <th>Nummer</th>
        <th>Ändra/ta bort</th>
      </tr></thead>';

    foreach ($users as $user) {
      $tableContent .=
		  '<tbody><tr><td>'.$user['firstname'].'</td><td>'.$user['lastname'].'</td><td>'.$user['email'].'</td><td>'.$user['number'].'</td>
      <td><a href="userform.php?userKey='.$user['email'].'"><img src="bilder/edit.svg" style="width:20px;height:20px;"></a><a href="delete_from_list.php?userKey='.$user['email'].'">
        <img src="bilder/delete.svg" style="width:20px;height:20px;padding:2px;"></a></td></tr></tbody> ';
    }
    $tableContent .= '
		</table>
		</div>
		<div class="d-flex">
		<div class="p-2"><a href="actions/logout.php" class="btn btn-primary" role="button">Log out</a></div>
	  	<div class="p-2"><a href="userform.php" class="btn btn-primary" role="button">Lägg till</a></div>
		</div>
		</div>
		'

   ?>


<a href="#" target="_blank"></a>

	<?php print $tableContent; ?>




</body>

</html>
