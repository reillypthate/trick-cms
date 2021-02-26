<?php

    if($num_rows = $conn->executeQuery("SELECT * FROM `element`")->rowCount() == 0)
    {
        require_once("populate-tables/default_elements.php");
    }
    if($num_rows = $conn->executeQuery("SELECT * FROM `component`")->rowCount() == 0)
    {
        require_once("populate-tables/default_components.php");
    }
    if($num_rows = $conn->executeQuery("SELECT * FROM `attribute`")->rowCount() == 0)
    {
        require_once("populate-tables/default_attributes.php");
    }
    if($num_rows = $conn->executeQuery("SELECT * FROM `component_attribute`")->rowCount() == 0)
    {
        require_once("populate-tables/default_component-attributes.php");
    }
    /*
    if($num_rows = $conn->executeQuery("SELECT * FROM `subcomponent`")->rowCount() == 0)
    {
        require_once("populate-tables/default_subcomponents.php");
    }
    */
    
?>