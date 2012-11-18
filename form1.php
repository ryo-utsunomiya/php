<?php
session_start();
// セッションIDを変更
session_regenerate_id(TRUE);

// カスタム関数
require '/home/ryo/dev/4webcr8r/libs/functions.php';

// 画像認証ライブラリー
$cryptinstall =  '/crypt/cryptographp.fct.php';
require $cryptinstall;

$data = array();

$data['name'] = isset($_SESSION['name']) ? $_SESSION['name'] : NULL;
$data['email'] = isset($_SESSION['email']) ? $_SESSION['email'] : NULL;
$data['subject'] = isset($_SESSION['subject']) ? $_SESSION['subject'] : NULL;
$data['body'] = isset($_SESSION['body']) ? $_SESSION['body'] : NULL;

// CSRF対策の固定トークンを生成
if (empty($_SESSION['ticket'])) {
    // セッション変数にトークンを代入
    $_SESSION['ticket'] = sha1(uniqid(mt_rand(), TRUE));
}
// トークンをテンプレートに渡す
$data['ticket'] = $_SESSION['ticket'];

display('form1_view.php', $data);