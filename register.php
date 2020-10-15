<?php

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if($name!=null&&$email!=null&&$pass!=null){
  //Connect DB and add the values
  echo "register successfully";
}
else{
  echo "Please fill entire Form";
}
?>
