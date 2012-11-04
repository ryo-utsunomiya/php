<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title>メールフォーム</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen,tv" />
</head>
<body>
<div id="box">
<div id="header">
<h1>PHP for Web Designer</h1>
</div>
<ul id="menu" class="clearfix">
  <li><a href="question1.php">アンケート</a></li>
  <li class="active"><a href="form1.php">メールフォーム</a></li>
  <li><a href="webapi/">グルメMAP</a></li>
</ul>
<div id="main">
<h2 class="mail-bar">メールフォーム</h2>
<?php if (isset($error)): ?>
    <?php foreach ($error as $val): ?>
        <span style="color:FF0000"><?php echo $val; ?></span><br />
    <?php endforeach; ?>
<?php endif; ?>
<form action="form2.php" method="post">
  <dl class="clearfix mailform">
  <dt>お名前</dt>
  <dd><label>
  <input type="text" name="name" value="<?php echo $name;?>" size="50" />
  </label></dd>
  <dt>e-mail</dt>
  <dd><label>
  <input type="text" name="email" value="<?php echo $email;?>" size="50" />
  </label></dd>
  <dt>件名</dt>
  <dd><label>
  <input type="text" name="subject" value="<?php echo $subject;?>" size="50" />
  </label></dd>
  <dt>内容</dt>
  <dd><label>
  <textarea name="body" cols="50" rows="10"><?php echo $body;?></textarea>
  </label></dd>
  </dl>
  <p>
  <input type="hidden" name="ticket" value="<?php echo $ticket; ?>" />
  <input type="submit" value="確認画面へ" />
  </p>
</form>
</div>
<p class="copy">
&copy; 2010 PHP for Web Designer. All rights reserved.
</p> 
</div>
</body>
</html>
