<?php


class Database
{
    function connect()
    {        
        include 'credentials.php';
        
        // Create connection
        $connection = new mysqli($databaseMain['host'], $databaseMain['username'], $databaseMain['password'], $databaseMain['name'], $databaseMain['port']);

        // Check connection
        if ($connection->connect_error) {
            echo("Connection failed: " . $connection->connect_error);
            
            return false;
        }
        
       return $connection;
    }
}
