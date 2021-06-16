<?
require "head.php";
require "../functions.php";

$list = gatherList();
$tasks = gatherTasks();

$taskCount = count($tasks);

foreach ($list as $item) {
    $itemId = $item["id"];
    echo "<div class='lists' id='list-$itemId'>
    <h2>" . $item[1] . "</h2><div class='tasks'>";
    foreach ($tasks as $task) {
        if ($task["list_id"] == $item["id"]) {
            echo "<div class='task'><ul><li class='list-item'><a id='edit-button' class='far fa-pen' title='Edit a task'  href='editForm.php?task=$task[0]'></a></li>
                  <li class='listItem'><b>Task: </b>" . $task[2] . "</li>";
            echo "<li class='list-item'><b>Duration: </b>" . $task[4] . " Minutes</li>";
            echo "<li class='list-item'><b>Description: </b>" . $task[3] . "</li>";
            echo "<li class='list-item'><b>Status: </b>" . $task[5] . "</li></ul></div><hr>";
        }
    }
    echo "<li class='list-item'><a class='fas fa-plus' href='createForm.php?listId=$itemId' title='Add a task'></a></li>";
    echo "</div></div>";

}
echo "<div id='plus-container'><a id='plus' class='fas fa-plus fa-4x' href='createForm.php?list=createList' title='Add a list'></a></div>";
require "foot.php";
