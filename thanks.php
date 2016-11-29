<?php 
  $nickname = htmlspecialchars($_POST['nickname']);
  $email = htmlspecialchars($_POST['email']);
  $content = htmlspecialchars($_POST['content']);
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>送信完了</title>
    <meta charset="utf-8">
</head>
<body>
  <h1>お問い合わせありがとうございました！</h1>
  <div>
    <h3>お問い合わせ詳細内容</h3>
    <p>ニックネーム:<?php echo $nickname; ?></p>
    <p>メールアドレス:<?php echo $email; ?></p>
    <p>お問い合わせ内容:<?php echo $content; ?></p>  
  </div>
</body>
</html>