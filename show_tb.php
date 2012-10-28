<?php
require_once '/common/mysql.php';

$re = $mysql->query("SHOW TABLES FROM db1");
while ($kekka = $re->fetch_array(MYSQLI_NUM)) {
    print $kekka[0];
    print '<br>';
}