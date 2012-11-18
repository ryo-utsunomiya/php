<?php
/**
 * Author: ryo
 * Date: 2012/11/18
 * Time: 14:53
 */

require 'Person.class.php';

$obj = new Person('Shoin Yoshida', 'male', '1830/9/20');

echo $obj->getAge() . "歳\n";
echo $obj->name;
//echo $obj->_gender;