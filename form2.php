<?php
session_start();

require '/home/ryo/dev/4webcr8r/libs/functions.php';

// 画像認証ライブラリー
$cryptinstall =  '/crypt/cryptographp.fct.php';
require $cryptinstall;

$_POST = checkInput($_POST);

// 固定トークンを確認
if (isset($_POST['ticket'], $_SESSION['ticket'])) {
    $ticket = $_POST['ticket'];
    if ($ticket !== $_SESSION['ticket']) {
        die('不正アクセスの疑いがあります');
    }
} else {
    die('不正アクセスの疑いがあります');
}

$name = isset($_POST['name']) ? $_POST['name'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$subject = isset($_POST['subject']) ? $_POST['subject'] : NULL;
$body = isset($_POST['body']) ? $_POST['body'] : NULL;
$code = isset($_POST['code']) ? $_POST['code'] : NULL;

$name = trim($name);
$email = trim($email);
$subject = trim($subject);
$body = trim($body);
$code = trim($code);

$error = array();

if ($name == '') {
    $error[] = 'お名前欄は必須項目です';
} else if (mb_strlen($name) > 100) {
    $error[] = 'お名前は100文字以内でお願い致します';
}

if ($email == '') {
    $error[] = 'メールアドレスは必須項目です';
} else {
    $pattern = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/iD';
    if (!preg_match($pattern, $email)) {
        $error[] = 'メールアドレスの形式が正しくありません';
    }
}

if ($subject == '') {
    $error[] = '件名は必須項目です';
} else if (mb_strlen($subject) > 100) {
    $error[] = '件名は100文字以内でお願い致します';
}

if ($body == '') {
    $error[] = '内容は必須項目です';
} else if (mb_strlen($body) > 500) {
    $error[] = '内容は500文字以内でお願い致します';
}

// 画像認証をチェック
if (mb_strlen($code) <> 4) {
    $error[] = '確認キーワードは4文字以内で入力してください';
} else if (!chk_crypt($code)) {
    $error[] = '確認キーワードが誤っています';
}

if (count($error) > 0) {
    // エラーがある場合は入力フォームを表示
    $data = array();
    $data['error'] = $error;
    $data['name'] = $name;
    $data['email'] = $email;
    $data['subject'] = $subject;
    $data['body'] = $body;
    $data['ticket'] = $ticket;
    display('form_view.php', $data);
} else { // エラーが0の場合
    // POSTされたデータをセッション変数に保存
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['subject'] = $subject;
    $_SESSION['body'] = $body;
    
    // 確認画面を表示
    $data = array();
    $data['name'] = $name;
    $data['email'] = $email;
    $data['subject'] = $subject;
    $data['body'] = $body;
    $data['ticket'] = $ticket;
    display('form2_view,php', $data);
    
}
