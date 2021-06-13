<?
require 'functions.php';


addList($_POST["list-name"]);
addTask($_POST);


header("location:view/index.php");