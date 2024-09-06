<?php

class Address
{
    public $username;
    public $title;
    public $text;

    public $link;

    // 値の宣言時にメソッド（mysqli_connect()）は動作できない

    
    public function __construct()
    {
        // コンストラクター内でメソッドを動作させること
        $this->link = mysqli_connect("localhost", "root", "mariadb", "board");
        // 文字コードを設定
        mysqli_set_charset($this->link, "utf8mb4");
    }

    public function board()
    {
        $stmt = mysqli_prepare(
            $this->link,
            "INSERT INTO comment (username, title, text)" .
                " VALUES (?, ?, ?);"
        );

        // s:string型 i:int型 d:float型 
        mysqli_stmt_bind_param(
            $stmt,
            "sss",
            $this->username,
            $this->title,
            $this->text,
        );

        mysqli_stmt_execute($stmt);


        // コネクションを閉じる（データベースからログアウト）
        mysqli_close($this->link);
    }

    public function read(){
        $result = mysqli_query($this->link, "SELECT * FROM comment");
        $row = mysqli_fetch_array($result);
        return $row;
    }
}

?>