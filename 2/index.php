<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>PHP課題2</title>
	</head>
	<body>
		<h1>FizzBuzz問題</h1>
		<form method="post">
			<label for="fizz">FizzNum:</label>
			<input type="text" name="fizz" id="fizz" placeholder="整数値を入力してください">
			<br>
			<label for="buzz">BuzzNum:</label>
			<input type="text" name="buzz" id="buzz" placeholder="整数値を入力してください">
			<br>
			<input type="submit" value="実行">
		</form>
		<h2>【出力】</h2>
		<?php
		if(isset($_POST["fizz"]) && isset($_POST["buzz"])){
			if($_POST["fizz"]>0 && $_POST["buzz"]>0) {
				for($i=1;$i<100;$i++){
					if(($i%$_POST["fizz"]) === 0 && ($i%$_POST["buzz"]) === 0) {
						echo "<span>FizzBuzz {$i}</span><br>";
					} elseif($i%$_POST["fizz"] === 0) {
						echo "<span>Fizz {$i}</span><br>";
					} elseif($i%$_POST["buzz"] === 0) {
						echo "<span>Buzz {$i}</span><br>";
					}
				}
			} else {
				echo "整数値を入力してください";
			}
		}
		?>
	</body>
</html>
