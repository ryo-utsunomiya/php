<?php

set_error_handler(function ($errno, $errstr, $errfile, $errline)
{
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

try {
    array_merge();
} catch (ErrorException $e) {
    echo 'Error occured!', PHP_EOL;
    echo $e->getMessage(), PHP_EOL;
    echo 'Stack Trace:', PHP_EOL;
    echo $e->getTraceAsString();
}