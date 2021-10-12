<?
require 'head.php';
require '../functions.php';
?> </div><?
$listId = $_GET["list"];
$status = $_GET["status"];

$tasks = gatherTask($listId);
$list = gatherList($listId);

echo '<div class="container"><h1>' . $list[0][1] . '</h1><hr id="hr1">';
foreach ($tasks as $task) {
    if ($task["status"] == $status) {
        echo "<strong><span>Task: </strong>" . $task[2] . "</span><br>
               <strong><span>Duration:</strong> " . $task[4] . " Minutes</span><br>
               <strong><span>Description:</strong> " . $task[3] . "</span><br>
               <strong><span>Status: </strong>".checkStatus($task[5])."</span><br><hr id='hr2'>";
    } else if(empty($task["status"])) {
        echo "<strong><span>Error while loading page</span></strong>";
    }
}


