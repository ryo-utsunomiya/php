<!DOCTYPE HTML>
<html lang="ja-JP">
<head>
    <meta charset="UTF-8">
    <title>delete</title>
</head>
<body>
    <?php
while ($row = $result->fetch_array(MYSQLI_NUM)) {
    echo htmlspecialchars($row[0]) . ':';
    echo htmlspecialchars($row[1]) . ':';
    echo htmlspecialchars($row[2]) . '<br>';
}
    ?>ø
<p><a href="kantan.html">トップメニューに戻ります</a></p>
</body>
</html>