<?
require "head.php";
require "../functions.php";

$count = 0;
$tcount = 0;
$li = array();



$list = gatherList();
$tasks = gatherTasks();

foreach ($list as $item) {
    echo "<div class='lists' id='list-$count'>
    <h2>" . $item[1] . "</h2><div class='tasks'>";
    foreach ($tasks as $task) {
        if ($task[0] = $count) {
            print_r($task[0]);
            echo "<div class='task'><ul><li class='listItem'><b>Task: </b>" . $task[2] . "</li>";
            echo "<li class='listItem'><b>Duration: </b>" . $task[4] . " Minutes</li>";
            echo "<li class='listItem'><b>Description: </b>" . $task[3] . "</li>";
            echo "<li class='listItem'><b>Status: </b>" . $task[5] . "</li></ul></div>";
        }
    }

    echo "</div></div>";
    $count++;
}
echo "<div id='plus-container'><a id='plus' class='fas fa-plus' href='createForm.php' title='Add a list'></a></div>";


require "foot.php";
