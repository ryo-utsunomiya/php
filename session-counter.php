<?php
session_start();
if (empty($_SESSION['count'])) {
    // 初めてのアクセス
    $_SESSION['count'] = 1;
} else {
    // 2回目以降のアクセス
    $_SESSION['count']++;
}
echo 'アクセス回数:' . $_SESSION['count'];
