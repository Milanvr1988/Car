<?php 
session_start();
require "config.php"; 
$config=require "config.php";
$configuration = $config['database'];
// var_dump($configuration);
require "Class/Connection.php";
require "Class/User.php";
require "Class/Posts.php";
require "Models/BaseModel.php";
require "Models/BmwModel.php";
require "Models/CitroenModel.php";

$db = Connection::con($configuration);
$register = new User($db);
$post = new Posts($db);
$post_cars_bmw = new BmwModel($db);
$post_cars_citroen = new CitroenModel($db);




?>