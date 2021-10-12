

<!--//require "head.php";-->
<!--//require "../functions.php";-->
<!--//-->
<!--//$list = gatherLists();-->
<!--//$tasks = gatherTasks();-->
<!--//-->
<!--//$taskCount = count($tasks);-->
<!--//-->
<!--//foreach ($list as $item) {-->
<!--//    $itemId = $item["id"];-->
<!--//    echo "<div class='lists' id='list-$itemId'>-->
<!--//    <div class='dropdown'><h2>" . $item[1] . "</h2>-->
<!--//        <div class='dropdown-content'>-->
<!--//            <ul class='list-items'>-->
<!--//                <a href='editForm.php?list=$itemId' title='Edit a list' ><li>Edit <i class='far fa-pen'></i></a>-->
<!--//                <a href='../remove.php?list=$itemId' title='remove list'><li>Delete <i class='far fa-trash-alt'></i></li></a>-->
<!--//                <a href='' title='Filter tasks'><li>Filter <i class='far fa-filter'></i></li></a>-->
<!--//                <a href='sortList.php?list=$itemId' title='Sort tasks'><li>Sorteer <i class='fal fa-sort'></i></li></a>-->
<!--//            </ul>-->
<!--//        </div>-->
<!--//    </div><div class='tasks'><hr>";-->
<!--//-->
<!--//    foreach ($tasks as $task) {-->
<!--//        if ($task["list_id"] == $item["id"]) {-->
<!--//            echo "<div class='task'>-->
<!--//        <ul><li class='list-item'><a id='edit-button' class='far fa-pen' title='Edit a task'  href='editForm.php?task=$task[0]'></a><a href='../remove.php?task=$task[0]'><i class='far fa-trash-alt'></i></a></li>-->
<!--//            <li class='list-item'><b>Task: </b>" . $task[2] . "</li>";-->
<!--//            echo "<li class='list-item'><b>Duration: </b>" . $task[4] . " Minutes</li>";-->
<!--//            echo "<li class='list-item'><b>Description: </b>" . $task[3] . "</li>";-->
<!--//            echo "<li class='list-item'><b>Status: </b>" . checkStatus($task[5]) . "</li></ul></div><hr>";-->
<!--//        }-->
<!--//    }-->
<!--//    echo "<a class='fas fa-plus' href='createForm.php?listId=$itemId' title='Add a task'></a>";-->
<!--//    echo "</div></div>";-->
<!--//}-->
<!--//-->
<!--//echo "<div id='plus-container'><a id='plus' class='fas fa-plus fa-4x' href='createForm.php?list=createList' title='Add a list'></a></div>";-->
<!--//require "foot.php";-->


