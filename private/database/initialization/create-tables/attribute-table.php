<?php

    /**
     * Table 4: "attribute"
     */
    try
    {
        $tables['attribute'] = $fromSchema->createTable("attribute");
        $tables['attribute']->addColumn("id", "integer", array("autoincrement" => true));
        $tables['attribute']->addColumn("name", "string", array("length" => 100, "notnull" => true));
        $tables['attribute']->addColumn("slug", "string", array("length" => 100, "notnull" => true));
        $tables['attribute']->addColumn("description", "string", array("length" => 255, "notnull" => true));
        $tables['attribute']->addColumn("ordinal", "integer", array());

        $tables['attribute']->setPrimaryKey(array("id"));
    }catch(Exception $e)
    {
        debug($e->getMessage());
        $tables['attribute'] = $fromSchema->getTable("attribute");
    }

?>