<?
require 'head.php';
require '../functions.php';

$taskId = $_GET["task"];

print_r($taskId);

$taskInfo = gatherTask($taskId);

print_r($taskInfo);

echo '<form method="post" action="../edit.php">
            <label>Task: </label><input type="text" name="task-name" value="'.$taskInfo["name"].'"><br>
            <label>Duration: </label><input type="number" name="duration" value="'.$taskInfo["name"].'"><span> Minutes</span><br>
            <label>Description: </label><textarea name="description" id="description" value="'.$taskInfo["name"].'"></textarea><br><br>
            <input type="submit" value="Create!">
        </form>';