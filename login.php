<?php
session_start();

define("USERNAME","eman");
define("PASSWORD","123");

if(isset($_POST['username'])){

    if($_POST['username'] == USERNAME && $_POST['password'] == PASSWORD){

      $_SESSION['username'] = $_POST['username'];
      
      header("LOCATION: home.php");
    }

}