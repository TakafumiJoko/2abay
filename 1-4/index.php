<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form method="post">
			<select name="janken">
				<option value="グー">グー</option>
				<option value="チョキ">チョキ</option>
				<option value="パー">パー</option>
			</select>
			<input type="submit" value="じゃんけん！">
		</form>
		<?php 
		function janken($usr, $cpu){
			if($usr === $cpu) {
				return "draw";
			}
			if($usr === "グー" && $cpu === "チョキ") {
				return "win";
			}
			if($usr === "チョキ" && $cpu === "パー") {
				return "win";
			} 
			if($usr === "パー" && $cpu === "グー") {
				return "win";
			}
			if($usr === "チョキ" && $cpu === "グー") {
				return "lose";
			}
			if($usr === "パー" && $cpu === "チョキ") {
				return "lose";
			} 
			if($usr === "グー" && $cpu === "パー") {
				return "lose";
			}
		}
		if (isset($_POST["janken"])) {
			$usr = $_POST["janken"];
			$hands = ["グー", "チョキ", "パー"];
			$key = array_rand($hands);
			$cpu = $hands[$key];
			$result = janken($usr, $cpu);
			if($result === "win") {
				$message = "あなたの勝利です！";
			}
			if($result === "draw") {
				$message = "あいこ";
			}
			if($result === "lose") {
				$message = "あなたの敗北です。。。";
			}
			echo "<p>自分:{$usr}</p>";
			echo "<p>相手:{$cpu}</p>";
			echo "<p>{$message}</p>";
		}
		?>
	</body>
</html>