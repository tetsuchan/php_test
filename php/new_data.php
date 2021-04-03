<?php
    if ( isset ($_POST["email"]) ) {
        $email = $_POST["email"];
      }
    if ( isset ($_POST["password"]) ) {
        $password = $_POST["password"];
      }
    $id = $_POST["id"];
    $date = $_POST["date"];
    $infection = $_POST["infection"];
    $memo = $_POST["memo"];
    $sql = "update info set
    date='".$date."', infection=".$infection.", memo='".$memo."' where id=".$id;
    $db = mysqli_connect("localhost", "root", "admin", "corona");
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
        <div class=main>
            <div class="main-title">
                <h1>更新ありがとうございます！</h1>
            </div>
            <div class="container">
                <p class="name">更新が完了しました！</p>
                <?php
                    echo '<form action="detail.php" method="get">
                            <input type="hidden" name="email" value="'.$email.'">
                            <input type="hidden" name="password" value="'.$password.'">
                            <input type="hidden" name="id" value="'.$id.'">
                            <p class="btn-s"><input type="submit" value="戻る" class="button"></p>
                         </form>';
                ?>
            </div>
        </div>   
        <footer>
            <p>2021 Japan News</p>
        </footer>
    </body>
</html>



