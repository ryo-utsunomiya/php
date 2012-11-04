<?php
    $textfile = 'log.txt';
    // ファイルを開く
    $fp = fopen($textfile, 'r+b');
    if (!$fp) { // fopen()返り値検証
        exit('ファイルがないか異常があります');
    }
    if (!flock($fp, LOCK_EX)) { // テキストを排他的にロック
        exit('ファイルをロックできませんでした');
    }
    
    for ($i = 0; $i < 13; $i++) {
        fwrite($fp, 0 . "\n");
    }
    
    // ファイルを閉じる（ロック解除）
    fclose($fp);