<?
require "connection.php";
$db = dbConnect();

//Querry functions

function dbQuery($q, $d)
{
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

function insertDb($q)
{
    $db = dbConnect();
    $stmt = $db->prepare($q);
    $stmt->execute();
}

//Gather functions

function gatherLists()
{
    $sql = "SELECT * FROM `list`";
    $d = 0;

    return $list = dbQuery($sql, $d);
}

function gatherTasks()
{
    $sql = "SELECT * FROM `tasks`";
    $d = 0;

    return $tasks = dbQuery($sql, $d);
}

function gatherTask($id)
{
    $sql = "SELECT * FROM tasks WHERE list_id =" . $id;
    $d = 0;

    return $task = dbQuery($sql, $d);
}

function gatherList($id)
{
    $sql = "SELECT * FROM list WHERE id =" . $id;
    $d = 0;

    return $task = dbQuery($sql, $d);
}

function gatherListName($id) {
    $sql = "SELECT name FROM list WHERE id =" . $id;
    $d = 0;

    return $name = dbQuery($sql, $d);
}


//Add functions

function addList($v)
{
    $sql = "INSERT INTO `list` (`name`) VALUES ('{$v}')";
    insertDb($sql);
}

function addTask($v)
{
    if (isset($v["listId"])) {
        $listId = $v["listId"];
    } else {
        $sql = "SELECT * FROM list ORDER BY id DESC";
        $d = 0;

        $gather = dbQuery($sql, $d);
        $listId = $gather[0][0];
    }

    $sql = "INSERT INTO `tasks` ( `list_id`, `name`, `description`, `length`, `status`) 
            VALUES ('{$listId}', '{$v["task-name"]}', '{$v["description"]}', '{$v["duration"]}', '0')";

    insertDb($sql);
}

//Edit functions

function editTask($data)
{
    $sql = "UPDATE `tasks` SET `name` = '{$data["task-name"]}', `description` = '{$data["description"]}', `length` = '{$data["duration"]}', `status` = '1' 
            WHERE `tasks`.`id` = '{$data["id"]}'";

    insertDb($sql);
}

function editList($data)
{
    $sql = "UPDATE `list` SET `name` = '{$data['list-name']}' WHERE `list`.`id` = '{$data["id"]}'";

    insertDb($sql);
}

//Remove Functions

function removeList($id)
{
    $sql = "DELETE FROM `list` WHERE `list`.`id` = {$id}";

    insertDb($sql);
}

function removeTask($id)
{
    $sql = "DELETE FROM `tasks` WHERE `tasks`.`id` = {$id}";

    insertDb($sql);
}

//Status functions

function checkStatus($s)
{
    if ($s == 0) {
        $s = "Not done";
    } else if ($s == 1) {
        $s = "Done";
    }
    return $s;
}

//Sort functions

function sortTask($id, $sort)
{
    if ($sort == 1) {
        $sql = "SELECT * FROM `tasks` WHERE `list_id` = {$id} ORDER BY `tasks`.`length` ASC";
        $d = 0;

        } else if ($sort == 0) {
        $sql = "SELECT * FROM `tasks` WHERE `list_id` = {$id} ORDER BY `tasks`.`length` DESC";
        $d = 0;
    }
    return $tasks = dbQuery($sql, $d);
}

//SELECT * FROM `tasks` WHERE `list_id` = 17 ORDER BY `tasks`.`length` ASC
//SELECT * FROM `tasks` ORDER BY `tasks`.`length` ASC
//SELECT * FROM `tasks` ORDER BY `tasks`.`length` DESC