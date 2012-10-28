<?php
require_once '../common/mysql.php';

$b1_d = $_POST['b1'];

$query = sprintf(
    'DELETE FROM tbk WHERE bang = %d',
    $b1_d
);
$mysqli->query($query);

$result = $mysqli->query('SELECT * FROM tbk ORDER BY bang');

require_once 'kantan_kekka.php';