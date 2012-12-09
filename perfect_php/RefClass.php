<?php

class RefClass
{
    public function __construct()
    {
        echo __CLASS__, 'が生成されました', PHP_EOL;
    }

    public function __destruct()
    {
        echo __CLASS__, 'が破棄されました', PHP_EOL;
    }
}


echo '** Program Start', PHP_EOL;
echo '** new RefClass', PHP_EOL;
$a = new RefClass();
echo '** $b = $a', PHP_EOL;
$b = $a;
echo '** unset $a', PHP_EOL;
unset($a);
echo '** unset $b', PHP_EOL;
unset($b);
echo 'Program end';