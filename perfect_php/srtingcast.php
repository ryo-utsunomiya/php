<?php
/**
 * Author: ryo
 * Date: 2012/11/24
 * Time: 16:28
 */
if (!isset($argv[1])) {
    exit;
}
$num = (int)$argv[1];
if ($num === 100) {
    echo "num is 100", PHP_EOL;
} else {
    echo "num is not 100", PHP_EOL;
}