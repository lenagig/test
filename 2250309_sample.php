<?php
    echo "Hello, World!";
    $siteName = "Web演習１";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> はじめてのPHP プログラミング</h1>
    <p><?php echo "Hello, World!" ?></p>
    <p><?php echo $siteName; ?></p>
    <p><?=$siteName ?></p>
</body>
</html>