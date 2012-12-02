<?php
/**
 * Author: ryo
 * Date: 2012/12/02
 * Time: 13:38
 */
class Programmer extends Employee
{
   public function __construct($name, $type)
   {
       parent::__construct($name, $type);
   }

   public function getSaraly()
   {
       return $this->salary * 2;
   }
}