<?php
  session_start();
  if(!isset($_SESSION['auth'])){
    header("Location:index.php");
  }
 ?>
 <a href="logout.php">Logga ut</a>
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
						<h5 class="card-title text-center">SND</h5>
						<form class="form-signin" action="actions/add_new_submit.php" method="POST">
              <?php
                if(isset($error)){
                  echo $error;
                }
               ?>
							<div class="form-label-group">
								<input type="text" id="inputFirstName" name="firstname" class="form-control" placeholder="Firstname" autofocus>
								<label for="inputFirstName">Förnamn</label>
							</div>
							<div class="form-label-group">
								<input type="text" id="inputLastName" name="lastname" class="form-control" placeholder="Lastname">
								<label for="inputLastName">Efternamn</label>
							</div>
							<div class="form-label-group">
								<input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email">
								<label for="inputEmail">E-post</label>
							</div>
							<div class="form-label-group">
								<input type="number" id="inputNumber" name="number" class="form-control" placeholder="Phone number">
								<label for="inputNumber">Telefonnummer</label>
							</div>
							<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit" value="submit">Submit</button>
							<hr class="my-4">
              <?php
                if(isset($message)){
                  echo $message;
                }
               ?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
