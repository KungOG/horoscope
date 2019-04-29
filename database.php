<?php

class Database {
    
    function __construct() {
        $dbname = 'mysql:host=localhost;dbname=horoscope;';
        $user = 'root';
        $password = '';

        // Create connection
        try {
            $this->connection=new PDO($dbname, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

        // Check connection
        } catch (PDOException $e) {
            throw $e;
        }
    }
    
};
?>