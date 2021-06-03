<?
function dbConnect() {
    try {
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $conn = new PDO("mysql:host=$servername;dbname=to_do_list", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        return $conn;

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

