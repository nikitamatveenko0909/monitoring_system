<?php
require "check_auth.php";
include "getUserWithKey.php";
$is_editing = false;

if(isset($_GET['userKey'])) {
    include "change_list.php";
    $label = "Änvdra användare";
    $userKey = $_GET['userKey'];
    $list['email'] = $userKey;
    $currentuser = getUserWithKey($userKey, $list);
    $is_editing = true;
}
else{
  include "add_to_list.php";
  $label = "Lägga till användare";
}



 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row " >
			<div class="col-sm-9 col-md-8 col-lg-5 mx-auto">
				<div class="card card-signin my-5">
					<div class="card-body">
						<h5 class="card-title text-center">SND</h5> <h3> <?php print $label; ?> </h3>
						<form class="form-signin" method="POST">
              <?php
                if(isset($error)){
                  echo $error;
                }
                if(isset($message)){
                    echo $message;
                }
               ?>
							<div class="form-label-group">
								<input type="text" id="inputFirstName" value="<?php $is_editing?print $currentuser['firstname']:""; ?>" name="firstname" class="form-control" placeholder="Firstname" autofocus>
								<label for="inputFirstName">Förnamn</label>
							</div>
							<div class="form-label-group">
								<input type="text" id="inputLastName" value="<?php $is_editing?print $currentuser['lastname']:""; ?>" name="lastname" class="form-control" placeholder="Lastname">
								<label for="inputLastName">Efternamn</label>
							</div>
							<div class="form-label-group">
								<input type="email" id="inputEmail" value="<?php $is_editing?print $currentuser['email']:""; ?>" name="email" class="form-control" placeholder="Email">
								<label for="inputEmail">E-post</label>
							</div>
							<div class="form-label-group">
								<input type="text" id="inputNumber" value="<?php $is_editing?print $currentuser['number']:""; ?>" name="number" class="form-control" placeholder="Phone number">
								<label for="inputNumber">Telefonnummer</label>
							</div>
							<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit" value="submit">Submit</button>
							<hr class="my-4">
              <a class="btn btn-danger float-right text-uppercase" href="actions/logout.php">Logga ut</a>
              <a class="btn btn-success float-left text-uppercase" href="list.php">Listan</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
