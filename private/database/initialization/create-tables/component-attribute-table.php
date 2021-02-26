<?php

    try
    {
        $tables['component_attribute'] = $fromSchema->createTable("component_attribute");
        
        //  Columns
        $tables['component_attribute']->addColumn(
            "id", 
            "integer", 
            array(
                "autoincrement" => true
            )
        );
        $tables['component_attribute']->addColumn(
            "component_id", 
            "integer", 
            array(
                "notnull" => true
            )
        );
        $tables['component_attribute']->addColumn(
            "attribute_id", 
            "integer", 
            array(
                "notnull" => true
            )
        );

        //  Primary Key
        $tables['component_attribute']->setPrimaryKey(array("id"));

        //  Indices
        $tables['component_attribute']->addIndex(
            array("component_id"),
            $name="idx_compattr__component_id"
        );
        $tables['component_attribute']->addIndex(
            array("attribute_id"),
            $name="idx_compattr__attribute_id"
        );

        //  Foreign Key Constraints
        $tables['component_attribute']->addForeignKeyConstraint(
            $tables['component'], 
            array("component_id"), array("id"),
            array("onUpdate" => "CASCADE"),
            $name="fk_compattr__component_id"
        );
        $tables['component_attribute']->addForeignKeyConstraint(
            $tables['attribute'], 
            array("attribute_id"), array("id"),
            array("onUpdate" => "CASCADE"),
            $name="fk_compattr__attribute_id"
        );
    }catch(Exception $e)
    {
        debug($e->getMessage());
        $tables['component_attribute'] = $fromSchema->getTable("component_attribute");
    }
    
?>