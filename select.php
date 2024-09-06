<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* 背景 --------------------------------------*/
        .bg_pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: #fff;
            z-index: -1;
        }

        .Paper_v2 {
            background-image:
                repeating-linear-gradient(to bottom,
                    transparent 25px,
                    rgba(0, 0, 0, 0.04) 26px, rgba(0, 0, 0, 0.04) 26px,
                    transparent 27px, transparent 51px,
                    rgba(0, 0, 0, 0.04) 52px, rgba(0, 0, 0, 0.04) 52px,
                    transparent 53px, transparent 77px,
                    rgba(0, 0, 0, 0.04) 78px, rgba(0, 0, 0, 0.04) 78px,
                    transparent 79px, transparent 103px,
                    rgba(0, 0, 0, 0.04) 104px, rgba(0, 0, 0, 0.04) 104px,
                    transparent 105px, transparent 129px,
                    rgba(0, 0, 0, 0.04) 130px, rgba(0, 0, 0, 0.04) 130px),

                repeating-linear-gradient(to right,
                    transparent 25px,
                    rgba(0, 0, 0, 0.04) 26px, rgba(0, 0, 0, 0.04) 26px,
                    transparent 27px, transparent 51px,
                    rgba(0, 0, 0, 0.04) 52px, rgba(0, 0, 0, 0.04) 52px,
                    transparent 53px, transparent 77px,
                    rgba(0, 0, 0, 0.04) 78px, rgba(0, 0, 0, 0.04) 78px,
                    transparent 79px, transparent 103px,
                    rgba(0, 0, 0, 0.04) 104px, rgba(0, 0, 0, 0.04) 104px,
                    transparent 105px, transparent 129px,
                    rgba(0, 0, 0, 0.04) 130px, rgba(0, 0, 0, 0.04) 130px);
        }

        /* --------------------------------------- */

        body {
            text-align: center;
            font-style: oblique;
            background-color: antiquewhite;
        }

        table {
            border: 1px solid black;
            border-radius: 10%;
            padding: 30px;
            margin: 50px auto;
        }

        div {
            line-height: 40px;
        }

        .button2 {
            background-color: #fff;
            border: solid 2px black;
            color: black;
            border-radius: 20px;
            padding: 10px 30px;
            text-decoration: none;
            font-size: 1em;
            box-shadow: 0 5px 0 #191970;
            display: inline-block;
            transition: .2s;
        }

        .button2:hover {
            color: #191970;
            transform: translateY(5px);
            box-shadow: 0 0 0 #191970;
        }

        a {
            margin-bottom: 40px;
        }


    </style>
</head>

<body>
    <div class="bg_pattern Paper_v2"></div>

    <h2>◇掲示板◇</h2>
    <a href="login.php" class="button2">ログインページ</a>
    <a href="index.php" class="button2">投稿ページ</a>

    <?php
    ini_set('display_errors', "On");

    // コネクションを開く(データベースにログイン)
    // ホスト名、ユーザー名、パスワード、使用するデータベース名
    $link = mysqli_connect("localhost", "root", "mariadb", "board");

    // 文字コードを設定する
    mysqli_set_charset($link, "utf8mb4");

    //一覧ページ 
    $result = mysqli_query($link, "SELECT * FROM comment;");

    // レコードセットを繰り返し取得する
    while ($row = mysqli_fetch_array($result)) { ?>

        <div>No. <?php echo htmlspecialchars($row["id"]) ?></div>
        <div>▽名前： <?php echo htmlspecialchars($row["username"]) ?>
            ▽タイトル： <?php echo htmlspecialchars($row["title"]) ?></div>
        <div>本文： <?php echo htmlspecialchars($row["text"]) ?> </div>
        <a href="delete.php"> 削除</a>
        <div>----------------------------------------------</div>
    <?php
    }

    // レコードセットを解放する
    mysqli_free_result($result);

    // コネクションを閉じる
    mysqli_close($link);
    ?>

</body>

</html>