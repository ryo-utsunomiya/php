<?php
/**
 * Author: ryo
 * Date: 2012/11/18
 * Time: 14:20
 */

session_start();

$message = '';

$username = 'usr';
$password = 'pass';

if (isset($_POST['user_id'], $_POST['password'])) {
    if ($_POST['user_id'] === $username && $_POST['password'] == $password) {
        session_regenerate_id(TRUE);
        $_SESSION['login'] = TRUE;
    } else {
        $_SESSION['login'] = FALSE;
    }

} else {
    $message = 'ユーザー名とパスワードを入力してください';
    $_SESSION['login'] = FALSE;
}