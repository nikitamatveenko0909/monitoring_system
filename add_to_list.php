<?php
 require "list_decoder.php";
 $message = '';
 $error = '';

 if(isset($_POST['submit'])){
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
     $error = "<label class='text-danger'>Skriv in ditt nummer</label>";
   }
   if($error == ""){

     if(file_exists('list.json')){
       $extra = array(
         'firstname' => $_POST["firstname"],
         'lastname' => $_POST["lastname"],
         'email' => $_POST["email"],
         'number' => $_POST["number"]
       );

       $list['users'][] = $extra;
       $final_list = json_encode($list);
       if(file_put_contents($url, $final_list)){
         $message = "<label class='text-success'>Success</label>";
       }
     }
     else{
       $error = 'JSON filen finns inte!';
       echo $error;
     }
   }
}
 ?>
