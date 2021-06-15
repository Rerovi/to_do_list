<?
require "head.php";
require "../functions.php";

$list = gatherList();
$tasks = gatherTasks();

$tcount = 0;
$taskCount = count($tasks);


foreach ($list as $item) {
    $itemId = $item["id"];
    echo "<div class='lists' id='list-$itemId'>
    <h2>" . $item[1] . "</h2><div class='tasks'>";
    foreach ($tasks as $task) {
        if ($tcount == $taskCount) {
            print_r($item);
            echo "<br>";
            echo "<br>";
            print_r($task);
            if ($task["list_id"] = $item["id"]) {

                print_r($task[1]);
                echo "<div class='task'><ul><li class='listItem'><b>Task: </b>" . $task[2] . "</li>";
                echo "<li class='listItem'><b>Duration: </b>" . $task[4] . " Minutes</li>";
                echo "<li class='listItem'><b>Description: </b>" . $task[3] . "</li>";
                echo "<li class='listItem'><b>Status: </b>" . $task[5] . "</li></ul></div>";
            } else {
            }
        } else {}
    }

    echo "</div></div>";
    $tcount++;
}
echo "<div id='plus-container'><a id='plus' class='fas fa-plus' href='createForm.php' title='Add a list'></a></div>";


require "foot.php";
