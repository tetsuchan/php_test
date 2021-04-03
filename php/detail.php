<?php
    if ( isset ($_GET["email"]) ) {
        $email = $_GET["email"];
      }
    if ( isset ($_GET["password"]) ) {
        $password = $_GET["password"];
      }
    $id = $_GET["id"];
    $db = mysqli_connect("localhost", "root", "admin", "corona");
    $sql = "select * from info where id=".$id;
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
            <?php
                while($data = mysqli_fetch_assoc($result)){
                    echo '<div class="main-title ">
                            <h1>'.$data["pref"].'の最新情報</h1>
                         </div>
                         <div class="container">
                            <p class="name">'.$data["date"].'の情報</p>
                            <table border="1" align="center" class="pref-t">
                                <tr>
                                    <th>都道府県</th><th>感染者数</th><th>状況・対応</th>
                                </tr>
                                <tr>
                                    <td>'.$data["pref"].'</td><td>'.$data["infection"].'人</td><td>'.$data["memo"].'</td>
                                </tr>
                            </table>
                            <p class="btn-s"><a class="button" href="update.php?id='.$data["id"].'&email='.$email.'&password='.$password.'">更新ページへ</a></p>
                            <form action="search.php" method="post">
                                <input type="hidden" name="email" value="'.$email.'">
                                <input type="hidden" name="password" value="'.$password.'">
                                <input type="submit" value="戻る" class="button">
                            </form>
                         </div>';
                }
            ?>
        </div>
        <footer>
            <p>2021 Japan News</p>
        </footer>
    </body>
</html>
