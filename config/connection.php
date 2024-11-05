<?php

class Connection
{
    public function openConnetion()
    {
        $hostName = "localhost";
        $userNmae = "root";
        $password = "root";
        $database = "kedai_kopi";

        $conn = new mysqli($hostName, $userNmae, $password, $database);

        if ($conn->connect_error) {
            die("Connetion failed" . $conn->connect_error);
        }
    }
}
