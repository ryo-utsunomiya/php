<?php
/**
 * Author: ryo
 * Date: 2012/11/23
 * Time: 11:00
 */
require_once('appvars.php');
require_once('connectvars.php');

// Connect to the database
$dbc = mysqli_connect(DB_HOST, DB_PASSWORD, DB_USER, DB_NAME);

// Retrieve the score data from MySQL
$query = 'SELECT * FROM guitarwars ORDER BY score DESC, date ASC';
$data = mysqli_query($dbc, $query);

// Loop through the array of scoredata, formatting it as HTML

// snip

mysqli_close($dbc);
?>