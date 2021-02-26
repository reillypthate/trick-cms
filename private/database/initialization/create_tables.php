<?php
    use \Doctrine\DBAL\Schema\Schema as S;

    $fromSchema = $sm->createSchema();//new S();

    $tables = array();

    require_once("create-tables/element-table.php");
    require_once("create-tables/attribute-table.php");
    require_once("create-tables/component-table.php");
    require_once("create-tables/component-attribute-table.php");
    require_once("create-tables/subcomponent-table.php");

    //  Drop Tables if they exist.

    $toSchema = clone $fromSchema;
    $toSchema->dropTable("element");
    $toSchema->dropTable("attribute");
    $toSchema->dropTable("component");
    $toSchema->dropTable("component_attribute");
    $toSchema->dropTable("subcomponent");

    $migrateSQL = $fromSchema->getMigrateToSql($toSchema, $conn->getDatabasePlatform());
    print_r($migrateSQL);

    foreach($migrateSQL as $key=>$query)
    {
        try
        {
            $conn->executeQuery($query);
        }catch(Exception $e)
        {
            debug($e->getMessage());
        }
    }

    //  Add Tables back.
    $queries = $fromSchema->toSql($conn->getDatabasePlatform());

    foreach($queries as $tableName=>$query)
    {
        debug($query);
        try
        {
            $conn->executeQuery($query);
        }catch(Exception $e)
        {
            debug($e->getMessage());
        }
    }

    //$conn->query($queries);

?>