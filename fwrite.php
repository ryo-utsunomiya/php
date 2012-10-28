<?php

$textfile = 'text.txt';

$fp = fopen($textfile, 'wb') or die('file does not exist');

flock($fp, LOCK_EX) or die('failed to lock');

fwrite($fp, 'hello');

fclose($fp);
