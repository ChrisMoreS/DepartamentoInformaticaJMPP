<?php 

    $servername = "localhost";
    $username = "root";
    $passwd = "";
    $database = "deptinformaticajmpp";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $passwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection Successful";
    } catch (PDOException $e) {
        echo $e;
    }

?>