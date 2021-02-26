<?php

$debug_mode = TRUE;
$debugMessages = [];

$database_initialized = false;

function debug($message)
{
    global $debugMessages;

    array_push($debugMessages, $message);
}

require(__DIR__ . '\vendor\autoload.php');
require_once('initialize/register-components.php');

require_once('database/initialize_database.php');

if($debug_mode === TRUE)    require_once('debug.php');

?>