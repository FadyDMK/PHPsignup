<?php

if (empty($_POST["name"])){
    die("Name required");
}

if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("Valid Email required");
}

if (strlen($_POST["password"])<8){
    die("password must be atleast 8 characters long");
}

if (! preg_match("/[a-z]/i", $_POST["password"])){
    die("password must contain atleast one letter");
}

if(!preg_match("/[1-9]/", $_POST["password"])){
    die("password must contain atleast one digit");
}

if ($_POST["password"]!== $_POST["password_confirmation"]){
    die("Passwords do not match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);



print_r($_POST);
var_dump($password_hash);
?>