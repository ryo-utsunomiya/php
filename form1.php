<?php
session_start();
// セッションIDを変更
session_regenerate_id(TRUE);

require '/home/ryo/dev/4webcr8r/libs/functions.php';

$data = array();

$data['name'] = NULL;
$data['email'] = NULL;
$data['subject'] = NULL;
$data['body'] = NULL;

// CSRF対策の固定トークンを生成
if (empty($_SESSION['ticket'])) {
    // セッション変数にトークンを代入
    $_SESSION['ticket'] = sha1(uniqid(mt_rand(), TRUE));
}
// トークンをテンプレートに渡す
$data['ticket'] = $_SESSION['ticket'];

display('form1_view.php', $data);