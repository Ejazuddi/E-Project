<?php

$Con =mysqli_connect('localhost','root','','E comerece');

if(isset($_POST['submit'])){
$Name= $_POST ['submit'];
$Email = $_POST['email'];
$Number = $_POST['number'];
$Password = $_POST['password'];


mysqli_query($Con,"INSERT INTO `tbuser`(`Username`, `Email`, `Number`, `password`) VALUES ('$Name','$Email','$Number','$Password')");


}

?>