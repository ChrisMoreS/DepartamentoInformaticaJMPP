<?php 

    $servername = "localhost";
    $adminUser = 'adminDIJMPP';
    $adminPWD = '1234';
    $database = "departamentoinformaticajmpp";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $adminUser, $adminPWD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection Successful";
    } catch (PDOException $e) {
        echo $e;
    }

?>