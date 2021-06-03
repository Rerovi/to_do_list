<?

use http\Params;

require "../connection.php";
require "head.php";

$count = 0;

function dbQuery ($q, $d){
    global $data;
    $db = dbConnect();
    $stmt = $db->prepare($q);
    if (empty($d)) {
        $stmt->execute();
    } else {
        $stmt->execute($d);
    }
    $data = $stmt->fetchAll();
}
function gatherList () {
    global $data;
    $sql = "SELECT * FROM `list`";
    $d = 0;

    dbQuery($sql, $d);
    $GLOBALS["list"] =  $data;
}

function gatherTasks () {
    global  $data;
    $sql = "SELECT * FROM `tasks`";
    $d = 0;

    dbQuery($sql, $d);
    $GLOBALS["tasks"] =  $data;
}

gatherList();
gatherTasks();



echo "<br><br>";

foreach ($GLOBALS["list"] as $item) {
    echo "<div class='list' id='list-$count'>
    <h3>" . $GLOBALS["list"][$count][1] . "</h3>
    <ul>";

    echo "</ul>
    </div>";
    $count++;
}



require "foot.php";
