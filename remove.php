<?php
require 'functions.php';

if (isset($_GET["list"])) {
    removeList($_GET["list"]);
} else if(isset($_GET["task"])) {
    removeTask($_GET["task"]);
}


header("location:view/index.php");