<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHPでクリックされたボタンに応じて別の処理を実行する方法</title>
    </head>
    <body>
        <h2>日本の首都は？</h2>
        <form action="form.php" method="post">
            <input type="text" name="answer">
            <input type="submit" value="OK"></input>
        </form>
        <?php
            if (isset($_POST["answer"])){
              $result = "";
              if ($_POST['answer'] === "東京") {
                  $result = "正解";
              }
              else {
                  $result = "不正解";
              }
              echo $result;
            }
        ?>
    </body>
</html>
