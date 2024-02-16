<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $Username =htmlspecialchars($_POST["Username"]);
    $Email =htmlspecialchars($_POST["email"]);
    $password =htmlspecialchars($_POST["password"]);
    $firstname =htmlspecialchars($_POST["Username"]);
    $firstname =htmlspecialchars($_POST["Username"]);

}
else{
    header("Location: ../animationlogin.php");
}