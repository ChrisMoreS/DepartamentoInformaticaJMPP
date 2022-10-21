<?php 
    $servername = "localhost";
    $username = "root";
    $passwd = "";
    $database = "deptinformaticajmpp";

    try {
        $conn = new PDO("mysql:host=$servername;", $username, $passwd); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection Successful";
    } catch (PDOException $e) {
        echo $e;
    }

    try {
        $query = '
            DROP DATABASE IF EXISTS DepartamentoInformaticaJMPP;
            CREATE DATABASE DepartamentoInformaticaJMPP;
            USE DepartamentoInformaticaJMPP;
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
                IdUser VARCHAR(255)
            );
            
            CREATE TABLE PostImages (
                IdPostImage INT AUTO_INCREMENT PRIMARY KEY,
                IdPost INT,
                PostImageName VARCHAR(255),
                FOREIGN KEY (IdPost) REFERENCES Post(IdPost)
            );
        ';
        $conn->exec($query);
    } catch (PDOException $e) {
        echo $e;
    }
    
    
    try {
        $conn = null;
        echo "Connexión cerrada";
    } catch (PDOException $e) {
        echo $e;
    }
?>