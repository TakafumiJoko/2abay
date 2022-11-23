<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>ろくまる農園</title>
</head>
<body>

<?php

$postId = $_POST['id'];
$name = $_POST['name'];
$content = $_POST['content'];

print $postId;
print $name;
print $content;


$postId = htmlspecialchars($postId, ENT_QUOTES, 'UTF-8');
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$content = htmlspecialchars($content, ENT_QUOTES, 'UTF-8');

try
{
	$dsn = 'mysql:dbname=twitter;host=localhost';
	$user = 'root';
	$password = '';
	$pdo = new PDO($dsn, $user, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql = "UPDATE post SET name = ?, content = ? WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	$data[] = $name;
	$data[] = $content;
	$data[] = $postId;
	$stmt->execute($data);
	
	$pdo = null;
}
catch(Exception $e)
{
	print 'ただいま障害が発生しております。ご迷惑をお掛けしております。';
	exit();
}

?>

<h2>編集が完了しました。</h2>
<button onclick="location.href='index.php'">投稿一覧へ戻る</button>
</body>
</html>
