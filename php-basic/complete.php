<?php
session_start();
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '名なし';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PH基礎編</title>
</head>
<body>
  <h2><?php echo $name; ?>様、お問い合わせを参りました。</h2>
  <p>ありがとうございました。今後の参考にさせていただきます。</p>
  <button id="back-btn" onclick="location.href='form.php';">戻る</button>

  <?php
  $_SESSION = [];
  session_destroy();
  ?>
</body>
</html>