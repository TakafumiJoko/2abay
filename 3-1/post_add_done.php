<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>

<?php

$name = $_POST['name'];
$content = $_POST['content'];

$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$content = htmlspecialchars($content, ENT_QUOTES, 'UTF-8');

try
{
	$dsn = 'mysql:dbname=twitter;host=localhost';
	$user = 'root';
	$password = '';
	$dbh = new PDO($dsn, $user, $password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql = 'INSERT INTO post (name, content) VALUES (?,?)';
	$stmt = $dbh->prepare($sql);
	$data[] = $name;
	$data[] = $content;
	$stmt->execute($data);
	
	$dbh = null;
}
catch(Exception $e)
{
	print 'ただいま障害が発生しております。ご迷惑をお掛けしております。';
	exit();
}

?>

<h2>投稿が完了しました。</h2>
<form action="index.php">
	<input type="button" value="投稿一覧へ戻る" onclick="history.back()">
</form>
</body>
</html>
