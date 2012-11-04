<?php
if (empty($_COOKIE['count'])) {
    // 初めてのアクセス
    $count = 1;
} else {
    // 2回目以降のアクセス
    $count = $_COOKIE['count'] + 1;
}

// クッキーを発行
setcookie('count', $count);
?>
<!DOCTYPE HTML>
<html lang="ja-JP">
<head>
	<meta charset="UTF-8">
	<title>cookieを使ったカウンター</title>
</head>
<body>
<?php
echo 'アクセス回数:' . $count;
?>
</body>
</html>
