<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ini_set('display_errors', "On");
    
    $link = mysqli_connect("localhost", "root", "mariadb", "board");
    mysqli_set_charset($link, "utf8mb4");

    $stmt = mysqli_prepare(
        $link,
        "DELETE FROM comment WHERE id = ?" .
        "VALUES(?,?,?);"
    );

    mysqli_stmt_bind_param(
        $stmt,
        "sss",
        $_POST["username"],
        $_POST["title"],
        $_POST["text"]
    );

    mysqli_stmt_execute($stmt);
    mysqli_close($link);

    echo "削除しました。";
    ?>

    <a href="form.php">投稿一覧へ</a>
</body>
</html>