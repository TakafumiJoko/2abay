<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>1-3</title>
</head>
<body>
<?php

$question["問題"] = "日本の首都は？";

$answer["回答1"] = "大阪";

$answer["回答2"] = "北海道";

$answer["回答3"] = "箱根";

$answer["回答4"] = "東京";

echo "<h3>問題 {$question["問題"]}</h3>";

foreach($answer as $key => $value) {
  echo "<p>{$key} {$value}</p>";
}

?>
</body>
</html>