<?php

try {
    $dsn = 'mysql:dbname=twitter;host=localhost';
    $user = 'root';
    $password = '';
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT * FROM post';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $posts = $stmt->fetchALL(PDO::FETCH_ASSOC);

    $pdo = null;
} catch(Exception $e) {
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
	<textarea name="content" rows="15" cols="30">
	</textarea>
	<br>
	<input type="submit" value="投稿">
	</form>
	<br>
	<h2>投稿内容一覧</h2>
		
<?php foreach ($posts as $post) {
    ; ?>
	<div class="post">
	No:<?php echo $post['id']; ?><br>
	名前:<?php echo $post['name']; ?><br>
	投稿内容:<?php echo $post['content']; ?><br>
	<br>
	<form action="post_edit.php" method="post">
	<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
	<input type="submit" value="編集">
	</form>
	<form action="post_delete_done.php" method="post">
	<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
	<input type="submit" value="削除">
	</form>
	</div><br>
<?php } ?>

</body>
</html>