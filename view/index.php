<?
require "../connection.php";
require "head.php";
$db = dbConnect();
$idk = 0;

$stmt = $db->prepare("SELECT *  FROM list");
$stmt->execute();
echo "<br>";
$data = $stmt->fetchAll();

echo "<br><br>";

foreach ($data as $item) {
    echo "<div class='list' id='list-$idk'>
    <h3>".$data[$idk][1]."</h3>
    <ul>";
    
    echo "</ul>
    </div>";
    $idk++;
}

require "foot.php";
