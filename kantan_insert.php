<?php
require_once '../common/mysql.php';

$a1 = $_POST['a1'];
$a2 = $_POST['a2'];

$query = sprintf(
    "INSERT INTO tbk (nama, mess) VALUES ('%s', '%s')",
    $mysqli->real_escape_string($a1),
    $mysqli->real_escape_string($a2)
    );
$mysqli->query($query);

$result = $mysqli->query('SELECT * FROM tbk ORDER BY bang');

require_once 'kantan_kekka.php';