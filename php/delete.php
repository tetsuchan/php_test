<?php
    $id = $_GET["id"];
    $db = mysqli_connect("localhost", "root", "", "corona");
    $sql = "delete from login where id=".$id;
    $result = mysqli_query($db,$sql);
    mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
    </head>
    <body>
        <header>
            <h1>COVID‑19</h1>
        </header>
        <div class="main">
            <div class="main-title">
                <h1>退会ページ</h1>
            </div>
            <div class=container>
                <p class="withdrawal">退会の手続きが完了しました。</p>
                <p class="login-back"><a href="index.php" class="button">戻る</a></p>
            </div>
        </div>
        <footer>
            <p>2021 Japan News</p>
        </footer>
    </body>
</html>