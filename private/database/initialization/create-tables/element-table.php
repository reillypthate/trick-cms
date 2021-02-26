<?php

    try
    {
        $tables['element'] = $fromSchema->createTable("element");

        //  Columns
        $tables['element']->addColumn(
            "id", 
            "integer", 
            array("autoincrement" => true)
        );
        $tables['element']->addColumn(
            "name", 
            "string", 
            array("length" => 100)
        );
        $tables['element']->addColumn(
            "tag", 
            "string", 
            array("length" => 100)
        );
        $tables['element']->addColumn(
            "description", 
            "string", 
            array("length" => 255)
        );
        $tables['element']->addColumn(
            "isVoid", 
            "integer", 
            array("length" => 1)
        );

        //  Primary Key
        $tables['element']->setPrimaryKey(array("id"));
        //  Comment
        $tables['element']->setComment("Stores basic information about HTML elements used in this CMS.");

        $tables['element']->addUniqueIndex(array("tag"));
        
    }catch(Exception $e)
    {
        debug($e->getMessage());
        $tables['element'] = $fromSchema->getTable("element");
    }

?>