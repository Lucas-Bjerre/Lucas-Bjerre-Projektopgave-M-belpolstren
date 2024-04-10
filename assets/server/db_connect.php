<?php
$db = new mysqli('localhost', 'root', '', 'ProjektopgaveM-belpolstren_database');

if($db === false){
    die("ERROR: Could not connect. " . $db -> connect_error);
}
?>