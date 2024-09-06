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
            padding: 30px;
            margin: auto;
        }
    </style>

</head>
<body>

<div class="bg_pattern Paper_v2"></div>
    <h2>◇掲示板◇</h2>
    <!-- <a href="index.php">▽投稿フォームへ</a> -->
    <a href="select.php">▽一覧ページへ</a>

<?php
    ini_set('display_errors', "On");

    require_once 'Address.php';

    // クラスのインスタンス化
    $address = new Address();

    // インスタンスに値を追加
    $address->username = $_POST['username'];
    $address->title = $_POST['title'];
    $address->text = $_POST['text'];

    // データの追加の実行
    $address->board();

    echo "投稿しました"
    ?>
</body>
</html>