<?php

    try
    {
        $tables['component'] = $fromSchema->createTable("component");

        //  Columns
        $tables['component']->addColumn(
            "id", 
            "integer", 
            array(
                "autoincrement" => true
            )
        );
        $tables['component']->addColumn(
            "element_id", 
            "integer", 
            array(
                "notnull" => false
            )
        );
        $tables['component']->addColumn(
            "name", 
            "string", 
            array(
                "length" => 100, 
                "notnull" => true
            )
        );
        $tables['component']->addColumn(
            "description", 
            "string", 
            array(
                "length" => 255, 
                "notnull" => true
            )
        );

        //  Primary Key
        $tables['component']->setPrimaryKey(array("id"));

        //  Indices
        $tables['component']->addIndex(
            array("element_id"),
            $name="idx_component__element_id"
        );

        //  Foreign Key Constraints
        $tables['component']->addForeignKeyConstraint(
            $tables['element'],
            array("element_id"), array("id"),
            array("onUpdate" => "CASCADE"),
            $name="fk_component__element_id"
        );

    }catch(Exception $e)
    {
        debug($e->getMessage());
        $tables['component'] = $fromSchema->getTable("component");
    }

?>