<?php
  include "list_decoder.php";
  $userKey = $_GET['userKey'];


  if(isset($_POST['submit'])){
    foreach ($list['users'] as $key => $value) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        if ($value["email"] == $userKey) {
            $list['users'][$key]['firstname'] = $firstname;
            $list['users'][$key]['lastname'] = $lastname;
            $list['users'][$key]['email'] = $email;
            $list['users'][$key]['number'] = $number;
            header("Location: list.php");
        }
    }
  }

  $newJsonString = json_encode($list);
  file_put_contents('list.json', $newJsonString);
 ?>
