<?php

    function connect($servername = "silva.computing.dundee.ac.uk", $username = "2019indteam4", $password = "5478.ind4.8745", $database = "2019indteam4db")
    {
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            return false;
        }
        return true;
    }