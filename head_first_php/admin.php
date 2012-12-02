<?php
/**
 * Author: ryo
 * Date: 2012/11/23
 * Time: 11:20
 */
// User name and password for authentication
require_once('authorize.php');
require_once('appvars.php');
require_once('connectvars.php');
// Connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Retrieve the score data from MySQL
$query = 'SELECT * FROM guitarwars ORDER BY score DESC, date ASC';
$data = mysqli_query($dbc, $query);
// Loop through the array of score data, formatting it as HTML

// snip

mysqli_close($dbc);
?>