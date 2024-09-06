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

        h2 {
            color: black;
        }

        body {
            text-align: center;
            background-color: antiquewhite;
            line-height: 1.5;
        }

        table {
            border: 1px solid black;
            border-radius: 10%;
            padding: 30px;
            margin: auto;
        }

        input[type=submit] {
            margin-top: 30px;
        }

        #space {
            padding: 10px;
        }

        .button {
            display: inline-block;
            border-radius: 20%;     /* 角丸       */
            font-size: 14pt;        /* 文字サイズ */
            text-align: center;     /* 文字位置   */
            cursor: pointer;        /* カーソル   */
            padding: 13px 22px;     /* 余白       */
            background: black;      /* 背景色     */
            color: #ffffff;         /* 文字色     */
            line-height: 1em;       /* 1行の高さ  */
            transition: .3s;        /* なめらか変化 */
            box-shadow: 2px 2px 5px #666666;        /* 影の設定 */
            border: 2px solid black;        /* 枠の指定 */
        }

        .button:hover {
            box-shadow: none;       /* カーソル時の影消去 */
            color: black;           /* 背景色     */
            background: #ffffff;    /* 文字色     */
        }
    </style>
</head>

<body>
<div class="bg_pattern Paper_v2"></div>
    <h2>掲示板 投稿ページ</h2>

    <!-- <?php
        ini_set('display_errors' , "On");
        // var_dump($_SESSION);

        $_SESSION['id'] = $_POST['id'];

        session_start();
        if (!isset($_SESSION['id'])) {
            echo "違います";
        } else {
            echo "ようこそ" . ($_POST['id']) . "さん";
        }
        ?> -->

    <form action="form2.php" method="POST">


        <table class="table">
            <tr>
                <th>名前：</th>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <th>タイトル名：</th>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <th>本文：</th>
                <td><textarea name="text" id="space"></textarea></td>
            </tr>
        </table>
        <input type="submit" value="投稿" class="button">


    </form>
</body>

</html>