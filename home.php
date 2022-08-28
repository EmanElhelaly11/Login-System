<?php
session_start();

if(empty($_SESSION['username'])){
    header("LOCATION: form.html");
}


echo "Welcome, You are Logged In!";

