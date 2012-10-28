<!DOCTYPE HTML>
<html lang="ja-JP">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
    <p>車を何台持っていますか?</p>
	<form action="" method="post">
	    <label>
	        <select name="car" id="">
	            <option value="0">0台</option>
	            <option value="1">1台</option>
	            <option value="2">2台</option>
	            <option value="3">3台</option>
	            <option value="4">4台</option>
	       </select>
	    </label>
	    <div>
	        <input type="submit" value="送信" />
	    </div>
	</form>
<?php
if (isset($_POST['car'])) {
    $car = $_POST['car'];
    $car = htmlspecialchars($car, ENT_QUOTES, 'UTF-8');
    echo '車の所持台数は' . $car . '台です。';
}
?>
</body>
</html>