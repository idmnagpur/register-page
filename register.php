<?php

$name = $_POST['name'];
$uname = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if($name!=null&&$uname!=null&&$email!=null&&$pass!=null){
  //Connect DB and add the values
  echo "register successfully";
}
else{
  echo "Please fill entire Form";
}
?>
