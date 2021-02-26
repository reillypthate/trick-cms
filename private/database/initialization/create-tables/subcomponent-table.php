<?php

    try
    {
        $tables['subcomponent'] = $fromSchema->createTable("subcomponent");
        
        //  Columns
        $tables['subcomponent']->addColumn(
            "id", 
            "integer", 
            array(
                "autoincrement" => true
            )
        );
        $tables['subcomponent']->addColumn(
            "parent_id", 
            "integer", 
            array(
                "notnull" => true
            )
        );
        $tables['subcomponent']->addColumn(
            "child_id", 
            "integer", 
            array(
                "notnull" => true
            )
        );
        $tables['subcomponent']->addColumn(
            "ordinal", 
            "integer", 
            array(
                "notnull" => true
            )
        );

        //  Primary Key
        $tables['subcomponent']->setPrimaryKey(array("id"));

        //  Indices
        $tables['subcomponent']->addIndex(
            array("parent_id"),
            $name="idx_subcomponent__parent_id"
        );
        $tables['subcomponent']->addIndex(
            array("child_id"),
            $name="idx_subcomponent__child_id"
        );

        //  Foreign Key Constraints
        $tables['subcomponent']->addForeignKeyConstraint(
            $tables['component'], 
            array("parent_id"), array("id"),
            array("onUpdate" => "CASCADE"),
            $name="fk_subcomponent__parent_id"
        );
        $tables['subcomponent']->addForeignKeyConstraint(
            $tables['component'], 
            array("child_id"), array("id"),
            array("onUpdate" => "CASCADE"),
            $name="fk_subcomponent__child_id"
        );

    }catch(Exception $e)
    {
        debug($e->getMessage());
        $tables['subcomponent'] = $fromSchema->getTable("subcomponent");
    }

?>