<?php
    //var_dump($_POST);
    //空の配列を作成
	$postData = [];

    //$_POSTの中身を取り出して、$postDataに格納
    $postData["uname"] = filter_input(INPUT_POST, "uname");
    $postData["ruby"] = filter_input(INPUT_POST, "ruby");
    $postData["mail"] = filter_input(INPUT_POST, "mail");
    $postData["password"] = filter_input(INPUT_POST, "password");
    $postData["confirmPassword"] = filter_input(INPUT_POST, "confirmPassword");
    $postData["tel"] = filter_input(INPUT_POST, "tel");
    $postData["postal"] = filter_input(INPUT_POST, "postal");
    $postData["address"] = filter_input(INPUT_POST, "address");
    $postData["checkDM"] = filter_input(INPUT_POST, "checkDM");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題12_1 送信結果表示</title>
</head>
<body>
    <h1>内容確認</h1>
    <p>
	    お名前：<?php echo $postData["uname"]; ?>
	</p>
	<p>
		フリガナ：<?= $postData["ruby"] ?>
	</p>
    <p>
		メールアドレス：<?= $postData["mail"] ?>
	</p>
    <p>
		パスワード：<?= $postData["password"] ?>
	</p>
    <p>
		電話番号：<?= $postData["tel"] ?>
	</p>
    <p>
		郵便番号：<?= $postData["postal"] ?>
	</p>
    <p>
		住所：<?= $postData["address"] ?>
	</p>
    <p>
		お得なクーポン：
        <?php
            if($postData["checkDM"] === "1"){
                echo "希望する";
            }else{
                echo "希望しない";
            }
        ?>
	</p>
</body>
</html>