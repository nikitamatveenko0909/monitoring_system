<?php
  require "check_auth.php";
  include "list_decoder.php";
  $userKey = $_GET['userKey'];

  $list_index = array();

  foreach ($list['users'] as $key => $value) {
    if ($value['email'] == $userKey){
      $list_index[] = $key;
    }
  }


  foreach ($list_index as $i) {
    unset($list['users'][$i]);
  }

  $list['users'] = array_values($list['users']);

  file_put_contents('list.json', json_encode($list));
  header("Location: list.php");

 ?>
