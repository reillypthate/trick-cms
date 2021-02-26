<?php

    $connectionParams = array(
        'dbname' => 'trick-cms',
        'user' => 'root',
        'password' => '',
        'host' => 'localhost',
        'driver' => 'pdo_mysql'
    );

    $conn = new mysqli(
        $connectionParams['host'], 
        $connectionParams['user'], 
        $connectionParams['password']
    );
    if($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    //  Attempt to create database if it doesn't exist.
    //  Ultimately loads the database.
    require_once('initialization/create_database.php');

    $conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);

    if($database_initialized !== TRUE)
    {
        $sm = $conn->getSchemaManager();
    
        require_once('initialization/create_tables.php');
    }
    //  Checks each empty to table to see whether the table needs to be 
    //  re-populated.
    require_once('initialization/populate_tables.php');
    
?>
