<?php
	require_once('database.php');
    
    session_destroy();
	header('Location:index.php');

?>