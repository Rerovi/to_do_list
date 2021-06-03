<?
function dbConnect() {
    try {
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $conn = new PDO("mysql:host=$servername;dbname=to_do_list", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;

    } catch (PDOException $e) {
        echo "<div id='error'><h3>Error while connecting with database: ". $e->getMessage(). "</h3></div>";
    }
}

