<?php


include_once dirname(__DIR__) . '../config/database.php';

class Users extends Database
{
    private $dbConnection;

    function __construct()
    {
        $this->dbConnection = $this->connect();

        if ($this->dbConnection === false) {
            return false;
        }
    }

    function login($email, $password)
    {

        $sql = "SELECT * FROM users
            WHERE email = '$email'
            AND `password` = '$password'
            AND status = 'ACTIVE'";

        $result = $this->dbConnection->query($sql);

        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}
