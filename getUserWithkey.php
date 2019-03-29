<?php
function getUserWithKey($userKey, $list){
  foreach ($list['users'] as $key => $value) {
      if ($value["email"] == $userKey) {
        return $list['users'][$key];
      }
  }
}
 ?>
