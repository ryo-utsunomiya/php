<?php
require_once '../common/mysql.php';

$query = 'SELECT * FROM tbk ORDER BY bang';
$result = $mysqli->query($query);

include 'kantan_kekka.php';