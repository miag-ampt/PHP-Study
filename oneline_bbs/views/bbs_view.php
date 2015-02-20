<html>
<head>
        <title>ひとこと掲示板</title>
</head>
<body>
        <h1>ひとこと掲示板</h1>

        <form action="bbs.php" method="post">
                <?php if (count($errors) > 0): ?>
                <ul class="error_list">
                        <?php foreach ($errors as $error): ?>
                        <li>
                                <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
                        </li>
                        <?php endforeach; ?>
                </ul>
                <?php endif; ?>

                名前: <input type="text" name="name" /><br />
                ひとこと: <input type="text" name="comment" size="60" /></br />
                <input type="submit" name="submit" value="送信" />
        </form>

</body>
</html>

