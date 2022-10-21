<?php
    try {
        $conn = null;
        echo "Connexión cerrada";
    } catch (PDOException $e) {
        echo $e;
    }
?>