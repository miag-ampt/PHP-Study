<?php

// データベースに接続
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
	die('データベースに接続できません: ' . mysql_error());
}

//データベースを選択
mysql_select_db('oneline_bbs', $link);

// エラーを格納する$errorsを初期化
$errors = array();

// POSTなら保存処理実行
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// 名前の入力チェック
	$name = null;
	if(!isset($_POST['name']) || !strlen($_POST['name'])) {
		$errors['name'] = '名前を入力してください';
	} else if (strlen($_POST['name']) > 40) {
		$errors['name'] = '名前は40文字以内で入力してください';
	} else {
		$name = $_POST['name'];
	}

// ひとことが正しく入力されているか確認
$comment = null;
	if (!isset($_POST['comment']) || !strlen($_POST['comment'])) {
		$errors['comment'] = 'ひとことを入力してください';
	} else if (strlen($_POST['comment']) > 200) {
		$errors['comment'] = 'ひとことは200文字以内で入力してください';
	} else {
		$comment = $_POST['comment'];
	}

// エラーが無ければ保存
if (count($errors) === 0) {
	// 保存するためのSQL文を作成
	$sql = "INSERT INTO `post` (`name`, `comment`, `created_at`) VALUES ('"
		. mysql_real_escape_string($name) . "', '"
		. mysql_real_escape_string($comment) . "', '"
		. date('Y-m-d H:i:s') . "')";

	//保存する
	mysql_query($sql, $link);
	}
}

?>

<html>
<head>
	<title>ひとこと掲示板</title>
</head>
<body>
	<h1>ひとこと掲示板</h1>

	<form action="bbs.php" method="post">
		<?php if (count($errors)): ?>
		<ul class="error_list">
			<?php foreach ($errors as $error): ?>
			<li>
				<?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
			</li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>	
		名前: <input type="text" name="name" /><br />
		ひとこと; <input type="text" name="comment" size="60" /><br />
		<input type="submit" name="submit" value="送信" />
	</form>
</body>
</html>