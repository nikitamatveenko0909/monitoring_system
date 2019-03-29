<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-8 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">SND</h5>
              <form class="form-signin" action="actions/login.php" method="POST">
                <div class="form-label-group">
                  <input type="username" id="inputUser" name="username" class="form-control" placeholder="username" required autofocus>
                  <label for="inputUser">Användarnamn</label>
                </div>
                <div class="form-label-group">
  								<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
  								<label for="inputPassword">Lösenord</label>
  							</div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit" value="submit">Logga in</button>
                <hr class="my-4">
                <?php
                session_start();
                  if(isset($_SESSION['failure'])){
                    echo $_SESSION['failure'];
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
