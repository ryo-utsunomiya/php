<?php
$str = '123-4567';
if (preg_match('/^\d{3}-?\d{4}/$', $str)) {
    echo 'match';
} else {
    echo 'not match';
}
