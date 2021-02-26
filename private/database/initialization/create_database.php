<?php

//  Create Database
    try
    {
        $sql = "CREATE DATABASE `" . $connectionParams['dbname'] . "`";
        $result = $conn->query($sql);

        if($result === TRUE)
        {
            debug("Database `" . $connectionParams['dbname'] . "` created!");
        }else
        {
            //  If DB exists, no need to re-initialize tables.
            $database_initialized = TRUE;   
            throw new Exception("Database `" . $connectionParams['dbname'] . "` exists.");
        }
    }catch(Exception $e)
    {
        debug($e->getMessage());
    }finally
    {
        //  Select $connectionParams['dbname'] as default database.
        $conn->select_db($connectionParams['dbname']);
        debug("Selected `" . $connectionParams['dbname'] . "` as default database.");
        if($result = $conn->query("SELECT DATABASE()"))
        {
            $row = $result->fetch_row();
            debug("Default database is " . $row[0] . ".");
            //printf("Default database is %s.\n", $row[0]);
            $result->close();
        }
        debug("Established connection to database `" . $connectionParams['dbname'] . "`.");
    }

?>