<?
require "head.php";
require "../functions.php";

$list = gatherLists();
$tasks = gatherTasks();

$taskCount = count($tasks);

foreach ($list as $item) {
    $itemId = $item["id"];
    echo '<div class="lists" id="list-'.$itemId.'">
        <div class="list"><ul class="menu">
        <li class="parent"><h2>' . $item[1] . '</h2>
            <ul class="child">
                <li><a href="editForm.php?list=' . $itemId . '" title="Edit a list">Edit <i class="far fa-pen"></i></a></li>
                <li><a href="../remove.php?list=' . $itemId . '" title="remove list">Delete <i class="far fa-trash-alt"></i></a></li>
                <li class="parent"><a>Sorteer <i class="fal fa-sort"></i><span class="expand">»</span></a>
                    <ul class="child">
                        <li><a href="sortList.php?list='.$itemId.'&sort=1">Oplopend</a></li>
                        <li><a href="sortList.php?list='.$itemId.'&sort=0">Aflopend</a></li>
                    </ul>
                </li>
                <li class="parent"><a href="#">Filter <i class="far fa-filter"></i><span class="expand">»</span></a>
                    <ul class="child">
                        <li><a href="filterList.php?list=' . $itemId . '&status=1" title="Filter tasks">Done </a></li>
                        <li><a href="filterList.php?list=' . $itemId . '&status=0" title="Filter tasks">Not Done </a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul><br><br><br><hr>';

    foreach ($tasks as $task) {
        if ($task["list_id"] == $item["id"]) {
            echo '<div class="task">
        <ul><li class="list-item"><a id="edit-button" class="far fa-pen" title="Edit a task"  href="editForm.php?task='.$task[0].'"></a><a href="../remove.php?task='.$task[0].'"><i class="far fa-trash-alt"></i></a></li>
            <li class="list-item"><b>Task: </b>' . $task[2] . '</li>';
            echo '<li class="list-item"><b>Duration: </b>' . $task[4] . ' Minutes</li>';
            echo '<li class="list-item"><b>Description: </b>' . $task[3] . '</li>';
            echo '<li class="list-item"><b>Status: </b>' . checkStatus($task[5]) . '</li></ul></div><hr>';
        }
    }
    echo '<a class="fas fa-plus" href="createForm.php?listId=' . $itemId . '" title="Add a task"></a>';
    echo "</div></div>";
}
echo "<div id='plus-container'><a id='plus' class='fas fa-plus fa-4x' href='createForm.php?list=createList' title='Add a list'></a></div>";

