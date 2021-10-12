<?
require 'functions.php';
$data = $_POST;

if (isset($data["list-name"])) {
    editList($data);
} else if(isset($data["task-name"])) {
    editTask($data);
}

header("location:view/index.php");