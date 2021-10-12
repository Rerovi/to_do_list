<?
require 'head.php';
require '../functions.php';
?>
<div class="form-background">
    <?
    if (isset($_GET["task"])) {
        $taskId = $_GET["task"];
        $taskInfo = gatherTask($taskId); ?>
        <form method="post" action="../edit.php">
            <label>Task: </label><input type="text" name="task-name" value="<? echo $taskInfo[0]["name"]; ?>"><br>
            <label>Duration: </label><input type="number" name="duration" value="<? echo $taskInfo[0]["length"]; ?>"><span> Minutes</span><br>
            <label>Description: </label><textarea name="description" id="description"><? echo $taskInfo[0][3]; ?></textarea><br><br>
            <label>Status: </label><select name="status" >
                <? if ($taskInfo[0]["status"] == 0) {?>
                <option name="Not Done" value="0">Not Done</option>
                <option name="Done" value="1">Done</option>
                <? } else if($taskInfo[0]["status"] == 1) {?>
                <option name="Done" value="1">Done</option>
                <option name="Not Done" value="0">Not Done</option>
                <?}?>
            </select>
            <input type="hidden" name="id" value="<? echo $taskId; ?>">
            <input type="submit" value="Edit!">
        </form>
        <?
    } else if (isset($_GET["list"])) {
        $listId = $_GET["list"];
        $listInfo = gatherList($listId); ?>
        <form method="post" action="../edit.php">
        <label>Naam: </label><input type="text" name="list-name" value="<? echo $listInfo[0]["name"]; ?>"><br>
        <input type="hidden" name="id" value="<? echo $listId; ?>">
        <input type="submit" value="Edit!">
        </form><?
    }
    ?>
</div>

