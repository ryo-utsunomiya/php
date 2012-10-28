<?php
require_once '../common/mysql.php';

$c1_d = $mysqli->real_escape_string($_POST['c1']);

$query = "SELECT * FROM tbk WHERE mess LIKE '%$c1_d%'";
$result = $mysqli->query($query);

include 'kantan_kekka.php';