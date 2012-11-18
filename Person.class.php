<?php
/**
 * Author: ryo
 * Date: 2012/11/18
 * Time: 14:38
 */
class Person
{
    // プロパティ
    public $name;
    private $_gender;
    private  $_birthdate;

    // コンストラクター
    function __construct($name, $gender, $birthdate) {
        $this->name = $name;
        $this->_gender = $gender;
        $this->_birthdate = $birthdate;
    }

    // 年齢を取得するメソッド
    function getAge() {
        $birthdate = date_create($this->_birthdate);
        $today = date_create();

        $birthdateInt = intval(date_format($birthdate, 'Ymd'));
        $todayInt = intval(date_format($today, 'Ymd'));
        $age = intval(($todayInt - $birthdateInt) / 10000);

        return $age;
    }
}
