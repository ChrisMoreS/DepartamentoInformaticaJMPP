<?php
    include("../include/connect.php");

    function limpiarInput ($input) {
        $input = htmlentities($input);
        $input = htmlspecialchars($input);
        $input = strip_tags($input);
        $input = stripcslashes($input);
        $input = stripslashes($input);

    }

    include("../include/closeConnection.php");
?>