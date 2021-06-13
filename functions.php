<?
require "connection.php";
$db = dbConnect();

function dbQuery($q, $d) {
    global $db;
    $stmt = $db->prepare($q);
    if (empty($d)) {
        $stmt->execute();
    } else {
        $stmt->execute($d);
    }
    $data = $stmt->fetchAll();

    return $data;
}

function insertDb($q) {
    $db = dbConnect();
    $stmt = $db->prepare($q);
    $stmt->execute();
}

function gatherList() {
    $sql = "SELECT * FROM `list`";
    $d = 0;

    return $list = dbQuery($sql, $d);
}

function gatherTasks() {
    $sql = "SELECT * FROM `tasks`";
    $d = 0;

    return $tasks = dbQuery($sql, $d);
}

function addList($v) {
    $sql = "INSERT INTO `list` (`name`) VALUES ('{$v}')";
    insertDb($sql);
}

function addTask($v) {
    $sql = "SELECT * FROM list ORDER BY id DESC";
    $d = 0;

    $gather = dbQuery($sql, $d);
    $listId =  $gather[0][0];


    $sql = "INSERT INTO `tasks` ( `list_id`, `name`, `description`, `length`, `status`) VALUES ('{$listId}', '{$v["task-name"]}', '{$v["description"]}', '{$v["duration"]}', '0')";

    insertDb($sql);
}

//function addList($d) {
//    $sql = "INSERT INTO `tasks` (, `list_id`, `name`, `description`, `length`, `status`) VALUES ('{$d}', '2', 'janken', 'Heel hard janken enzo', '50', '0')";
//}

//INSERT INTO `tasks` (`id`, `list_id`, `name`, `description`, `length`, `status`) VALUES ('2', '2', 'janken', 'Heel hard janken enzo\r\n', '50', '0');