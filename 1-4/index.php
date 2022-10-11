<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>PHP課題1-4</title>
	</head>
	<body>
		<form method="post">
			<select name="janken">
				<option value="グー" selected>グー</option>
				<option value="チョキ">チョキ</option>
				<option value="パー">パー</option>
			</select>
			<br>
			<input type="submit" value="じゃんけん！">
		</form>
		<?php 
		function janken($usr, $cpu){
			switch ($usr) {
				case $cpu:
					return "draw";
				case "グー":
					if($cpu === "チョキ") {
						return "win";
					}
					if($cpu === "パー") {
						return "lose";
					}
				case "チョキ":
					if($cpu === "パー") {
						return "win";
					}
					if($cpu === "グー") {
						return "lose";
					}
				case "パー":
					if($cpu === "グー") {
						return "win";
					}
					if($cpu === "チョキ") {
						return "lose";
					}
			}
		}
		if (isset($_POST["janken"])) {
			$usr = $_POST["janken"];
			$hands = ["グー", "チョキ", "パー"];
			$key = array_rand($hands);
			$cpu = $hands[$key];
			$result = janken($usr, $cpu);
			switch($result) {
				case "win":
					$message = "あなたの勝利です！";
					break;
				case "draw":
					$message = "あいこ";
					break;
				case "lose":
					$message = "あなたの敗北です。。。";
					break;
			}
			echo "<p>自分:{$usr}</p>";
			echo "<p>相手:{$cpu}</p>";
			echo "<p>{$message}</p>";
		}
		?>
	</body>
</html>