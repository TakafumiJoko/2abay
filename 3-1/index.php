<?php

try
{
$dsn = 'mysql:dbname=twitter;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT * FROM post';
$stmt = $dbh->prepare($sql);
$stmt->execute();

$rows = $stmt->fetchALL(PDO::FETCH_ASSOC);

$dbh = null;
}
catch(Exception $e)
{
	print 'ただいま障害が発生しております。ご迷惑をお掛けしております。';
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>ろくまる農園</title>
</head>
<body>
<h1>掲示板</h1>
<h2>新規投稿</h2>
<form action="post_add_done.php" method="post">
name:
<input type="text" name="name">
<br>
投稿内容:<br>
<textarea name="post" rows="15" cols="30">
</textarea>
<br>
<input type="submit" value="投稿">
</form>
<br>
<h2>投稿内容一覧</h2>
<?php

foreach($rows as $rec)
{
echo "<div class='post'>";
echo "No:{$rec['id']}<br>";
echo "名前:{$rec['name']}<br>";
echo "投稿内容:{$rec['post']}<br>";
echo "</div><br>";
}

?>

</body>
</html>
