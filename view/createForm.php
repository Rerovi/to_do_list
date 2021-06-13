<?
require 'head.php';
require '../functions.php';
?>
<form method="post" action="../create.php">
    <label>List name: </label><input type="text" name="list-name"><br>
    <label>Task: </label><input type="text" name="task-name"><br>
    <label>Duration: </label><input type="number" name="duration"><span> Minutes</span><br>
    <label>Description: </label><textarea name="description" id="description"></textarea><br><br>
    <input type="submit" value="Create!">
</form>
