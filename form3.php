<?php
session_start();

require '/home/ryo/dev/4webcr8r/libs/functions.php';

$_POST = checkInput($_POST);

if (isset($_POST['ticket'], $_SESSION['ticket'])) {
    $ticket = $_POST['ticket'];
    if ($ticket !== $_SESSION['ticket']) {
        die('不正アクセスの疑いがあります');
    }
} else {
    die('不正アクセスの疑いがあります');
}

$name = $_SESSION['name'];
$email = $_SESSION['email'];
$subject = $_SESSION['subject'];
$body = $_SESSION['body'];

$mailTo = 'a@b.com';
$returnMail = 'a@b.com';

mb_language('ja');
mb_internal_encoding('UTF-8');

$header = 'From:' . mb_encode_mimeheader($name) . '<' . $email . '>';

if (ini_get('safe_mode')) {
    $result = mb_send_mail($mailTo, $subject, $$body, $header);
} else {
    $result = mb_send_mail($mailTo, $subject, $$body, $header, '-f' . $returnMail);
}

$message = '';

if ($result) {
    $message = '送信完了';
    $_SESSION = array();
    session_destroy();
} else {
    $message = '送信失敗';
}

$data = array();
$data['message'] = $message;
display('form3_view.php', $data);