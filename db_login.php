<?php

    $db_host = "localhost";
    $db_username = "root";
    $db_pass = "";
    $db_name = "main";

    $dbc = new mysqli("$db_host", "$db_username", "$db_pass", "$db_name");
    if ($dbc->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

                                                    


?>