<?
require 'head.php';
require '../functions.php';
?> </div><?

$listId = $_GET["list"];
$sort = $_GET["sort"];

$list = gatherList($listId);
$tasks = sortTask($listId, $sort);



echo '<div class="container"><h1>' . $list[0][1] . '</h1><hr id="hr1">';
foreach ($tasks as $task) {
    echo "<strong><span>Task: </strong>" . $task[2] . "</span><br>
               <strong><span>Duration:</strong> " . $task[4] . " Minutes</span><br>
               <strong><span>Description:</strong> " . $task[3] . "</span><br>
               <strong><span>Status: </strong>".checkStatus($task[5])."</span><br><hr id='hr2'>";
}
