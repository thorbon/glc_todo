<?php

include_once dirname(__DIR__) . '../config/database.php';

class Task extends Database
{
    private $dbConnection;

    function __construct()
    {
        $this->dbConnection = $this->connect();

        if ($this->dbConnection === false) {
            return false;
        }
    }

    function getAllTaskByUserId($userId)
    {

        $data = [];

        $sql = "SELECT * FROM task
                WHERE user_id = $userId";

        $result = $this->dbConnection->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                $data[] = $row;
            }
        } else {
            echo 'No data found';
        }

        return $data;
    }

    function addTask($title, $details, $dueDate, $userId)
    {

        $data = [];

        $sql = "INSERT INTO task (title,details,due_date,userId)
        VALUES ('$title','$details','$dueDate',$userId)";

        $result = $this->dbConnection->query($sql);

        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}
