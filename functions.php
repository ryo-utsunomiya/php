<?php
// HTMLでのエスケープ処理をする関数
function h($var) {
    if (is_array($var)) {
        // $varが配列の場合
        return array_map('h', $var);
    } else {
        // $varが配列でない場合
        return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
    }
}

// テンプレートを処理する関数
function display($template, $data) {
    foreach ($data as $key => $val) {
        // テンプレートで使う変数を作成
        $$key = h($val); // 値をエスケープ処理
    }
    // $dataを破棄
    unset($data);
    include dirname(__FILE__) . '/../templates/' . $template;
}

// 入力値に不正なデータがないかチェックする関数
function checkInput($var) {
    if (is_array($var)) {
        return array_map('checkInput', $var);
    } else {
        if (get_magic_quotes_gpc()) { // magic_quotes_gpc対策
            $var = stripslashes($var);
        }
        if (preg_match('/\0/', $var)) { // NULLバイト攻撃対策
            die('不正な入力です');
        }
        if (!mb_check_encoding($var, 'UTF-8')) { // 文字エンコードの確認
            die('不正な入力です');
        }
        return $var;
    }
}
