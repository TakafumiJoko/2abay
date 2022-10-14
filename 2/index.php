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
		if(isset($fizz]) && isset($buzz)){
	 		$fizz = $_POST["fizz"];
			$buzz = $_POST["buzz"];
			if(is_int($fizz) && is_int($buzz)) {
				for($i = 1; $i < 100; $i++){
					if(($i % $fizz) === 0 && ($i % $buzz) === 0) {
						echo "<span>FizzBuzz {$i}</span><br>";
					} elseif($i % $fizz === 0) {
						echo "<span>Fizz {$i}</span><br>";
					} elseif($i % $buzz === 0) {
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
