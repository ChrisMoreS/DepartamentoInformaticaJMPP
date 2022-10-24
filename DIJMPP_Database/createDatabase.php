<?php 
    $servername = "localhost";
    $username = "root";
    $passwd = "";
    $database = "departamentoinformaticajmpp";
    $adminUser = 'adminDIJMPP';
    $adminPWD = '1234';

    try {
        $conn = new PDO("mysql:host=$servername;", $username, $passwd); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Root Connection Successful </br>";
    } catch (PDOException $e) {
        echo $e;
    }

    try {
        $query = '
            DROP DATABASE IF EXISTS '. $database .';
            CREATE DATABASE '. $database .';
            DROP USER IF EXISTS '. $adminUser .'@localhost;
            GRANT ALL PRIVILEGES ON '. $database .'.* TO '. $adminUser .'@localhost IDENTIFIED BY "'. $adminPWD .'" with grant option;
            ';

        $query2 = '
            USE '. $database .';
            CREATE TABLE Users (
                IdUser INT AUTO_INCREMENT PRIMARY KEY, 
                Username VARCHAR(255),
                Category VARCHAR(255)
            );
            
            CREATE TABLE UserProfiles (
                IdProfile INT AUTO_INCREMENT PRIMARY KEY,
                IdUser INT,
                ImageName VARCHAR(255),
                FOREIGN KEY (IdUser) REFERENCES Users(IdUser)
            );
            
            CREATE TABLE Post (
                IdPost INT AUTO_INCREMENT PRIMARY KEY,
                Title VARCHAR(255),
                Content TEXT,
                Tag VARCHAR(255),
                DateSubmit DATE,
                IdUser INT,
                FOREIGN KEY (IdUser) REFERENCES Users(IdUser)
            );
            
            CREATE TABLE PostImages (
                IdPostImage INT AUTO_INCREMENT PRIMARY KEY,
                IdPost INT,
                PostImageName VARCHAR(255),
                FOREIGN KEY (IdPost) REFERENCES Post(IdPost)
            );
        ';
        $conn->exec($query);
        echo "Database Creation Successful </br> Admin User Created </br>";
        $conn = null;
        echo "Root Disconnection </br>";
        $conn = new PDO("mysql:host=$servername;dbname=$database", $adminUser, $adminPWD); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Admin Connection Successful </br>";
        $conn->exec($query2);
        echo "Tables creation successful </br>";
    } catch (PDOException $e) {
        echo $e;
    }
    
    
    try {
        $conn = null;
        echo "Admin Disconnection </br>";
    } catch (PDOException $e) {
        echo $e;
    }
?>