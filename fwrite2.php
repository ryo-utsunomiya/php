<?php
$textfile = 'write.txt';
$fruits = array('apple', 'orange', 'banana');

// open file
$fp = fopen($textfile, 'r+b') or die('file dose not exist');

flock($fp, LOCK_EX) or die('failed to lock file');

foreach ($fruits as $value) {
    fwrite($fp, $value . "\n");
}

rewind($fp); // ファイルポインタの位置を先頭に戻す

while (!feof($fp)) {
    echo fgets($fp) . '<br />';
}

fclose($fp);
