<?php

$message = '';
$error = '';
  if(empty($_POST['firstname'])){
    $error = "<label class='text-danger'>Skriv in ditt förnamn</label>";
  }
  else if(empty($_POST['lastname'])) {
    $error = "<label class='text-danger'>Skriv in ditt efternamn</label>";
  }
  else if(empty($_POST['email'])) {
    $error = "<label class='text-danger'>Skriv in din e-post</label>";
  }
  else if(empty($_POST['number'])) {
    $error = "<label class='text-dange'>Skriv in ditt nummer</label>";
  }
  if($error == ""){

  print_r($_POST);
    if(file_exists('../list.json')){
      $url = "../list.json";
      $data = file_get_contents($url);
      $list = json_decode($data, true);
      $users = $list['users'];


      $extra = array(
        'firstname' => $_POST["firstname"],
        'lastname' => $_POST["lastname"],
        'email' => $_POST["email"],
        'number' => $_POST["number"]
      );

      $users[] = $extra;
      $final_list = json_encode($users);
      if(file_put_contents($url, $final_list)){
        $message = "<label class='text-success'>Success</label>";
        echo $message;
      }

    }
    else{
      $error = 'JSON filen finns inte!';
      echo $error;
    }
}
else{
  header("Location:http://google.com");
}
?>
