<?php

try {
    $postId = $_POST['id'];

    $dsn = 'mysql:dbname=twitter;host=localhost';
    $user = 'root';
    $password = '';
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM post WHERE id = {$postId}";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $post = $stmt->fetch(PDO::FETCH_ASSOC);

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
	<h2>編集ページ</h2>
	<form action="post_edit_done.php" method="post">
	<input type="hidden" name="id" value=<?php echo $post['id']; ?>>
	name:
	<input type="text" name="name" value="<?php echo $post['name']; ?>">
	<br>
	投稿内容:<br>
	<textarea name="content" rows="15" cols="30" value="<?php echo $post['content']; ?>"><?php echo $post['content']; ?></textarea>
	<br>
	<input type="submit" value="更新">
	<input type="button" value="戻る" onclick="location.href='index.php'">
	</form>
</body>
</html>
