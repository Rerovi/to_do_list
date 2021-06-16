<?
require 'functions.php';

if (isset($_POST["listId"])) {
    addTask($_POST);
} else {
    addList($_POST["list-name"]);
    addTask($_POST);
}


header("location:view/index.php");