<?php
$textfile = 'file.txt';

// ファイルを開く
$fp = fopen($textfile, 'w+b');
if (!$fp) { // fopen()の返り値検証
    exit('ファイルがないか異常があります');
}

if (!flock($fp, LOCK_EX)) { // テキストを排他的にロック
    exit('ファイルをロックできませんでした');
}

while (!feof($fp)) {
    echo fgets($fp) . '<br />';
}

// ファイルを閉じる
fclose($fp);