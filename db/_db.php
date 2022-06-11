<?php
// Script to connect to the database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "elearningdb";

// $con = mysqli_connect($servername, $username, $password, $database);


class DB
{
    function __construct()

    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "volunteernetworkdb";
        $this->conn = new mysqli($servername, $username, $password, $database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function getCount($sql)
    {
        $result = $this->conn->query($sql);
        return $result->num_rows;
    }
    function execute($sql)
    {
        return $this->conn->query($sql);
    }

    function getRow($sql)
    {
        $rows = $this->execute($sql);
        return  $rows->fetch_assoc();
    }

    function close()
    {
        $this->conn->close();
    }
}


