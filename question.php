<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title>アンケートフォーム</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen,tv" />
</head>
<body>
<div id="box">
<div id="header">
<h1>PHP for Web Designer</h1>
</div>
<ul id="menu" class="clearfix">
  <li class="active"><a href="question1.php">アンケート</a></li>
  <li><a href="form1.php">メールフォーム</a></li>
  <li><a href="webapi/">グルメMAP</a></li>
</ul>
<div id="main">
<h2>アンケートフォーム</h2>
<form action="question2.php" method="post">
  <dl class="clearfix">
  <dt>性別は？</dt>
  <dd>
<?php
$number = array(1, 2);
$male = '男性';
$female = '女性';
echo '<label><input type="radio" name="gender" value="' . $number[0] . '" id="" />' . $male . '</label>' . "\n";
echo '<label><input type="radio" name="gender" value="' . $number[1] . '" id="" />' . $female . '</label>' . "\n";
?>
  </dd>
  <dt>年齢は？</dt>
  <dd>
  <label>
  <select name="age">
  <option value="0" selected="selected">選択してください</option>
<?php
for ($i = 1; $i <= 4; $i++) {
    echo '<option value="' . $i . '">' . $i . '0代</option>' . "\n";
}
?>
  <option value="5">50代以上</option>
  </select>
  </label>
  </dd>
  <dt>趣味は？</dt>
  <dd class="hobby-area">
<?php
$hobby = array(1 => '音楽鑑賞',
               2 => '映画鑑賞',
               3 => 'ドライブ',
               4 => '旅行',
               5 => 'その他');
foreach ($hobby as $key => $value) {
    echo '<label for="' . $key . '"><input type="checkbox" name="hobby[' . $key . ']" value="' . $key . '" id="' . $key . '" />' . $value . '</label>' . "\n";
}
?>
  </dd>
  </dl>
  <p>
  <input type="submit" value="投票する" />
  </p>
</form>
</div>
<p class="copy">
&copy; 2010 PHP for Web Designer. All rights reserved.
</p>
</div>
</body>
</html>
