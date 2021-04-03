<?php
    $id = $_POST["id"];
    if ( isset ($_POST["email"]) ) {
        $email = $_POST["email"];
      }
    if ( isset ($_POST["password"]) ) {
        $password = $_POST["password"];
      }
    $db = mysqli_connect("localhost", "root", "admin", "corona");
    $sql = "select * from login where id=.$id";
    $result = mysqli_query($db,$sql);
    $name = "";
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
               <h1>退会手続きページ</h1>
            </div>
            <div class="container">
                <?php
                    echo '<p class="check-p">本当に退会しますか？</p>
                            <div class="flex-c">
                                <form action="delete.php" method="get">
                                    <input type="hidden" name="id" value="'.$id.'">
                                    <p><input type="submit" value="退会する" class="btn-a"></p>
                                </form>
                                <form action="mypage.php" method="post">
                                    <input type="hidden" name="email" value="'.$email.'">
                                    <input type="hidden" name="password" value="'.$password.'">
                                    <input type="hidden" name="loginflug" value="true">
                                    <p><input type="submit" value="キャンセル" class="btn-a"></p>
                                </form>
                            </div>';
                ?>
            </div>             
        </div>
        <footer>
            <p>2021 Japan News</p>
        </footer>
    </body>
</html>


