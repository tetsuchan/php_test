<?php
    if ( isset ($_POST["email"]) ) {
        $email = $_POST["email"];
      }
    if ( isset ($_POST["password"]) ) {
        $password = $_POST["password"];
      }
    $block = $_POST["block"];
    $sql = "select * from info where block='".$block."'";
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
            <h1>COVID 19</h1>
        </header>
        <div class="main">
            <div class="main-title">
                <h1>検索ページ</h1>
            </div>
            <div class="container">
                <p class="name">検索結果</p>
                <table border="1" align="center" class="pref-t link-cd">
                    <tr>
                        <th>地域</th><th>都道府県</th><th>詳細</th>
                    </tr>
                    <?php
                        while($data = mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<td>'.$data["block"].'</td>';
                            echo '<td>'.$data["pref"].'</td>';
                            echo '<td><a href="detail.php?id='.$data["id"].'&email='.$email.'&password='.$password.'">詳細はコチラ</a></td>';
                            echo '</tr>';
                        }
                    ?>
                </table>
                <form action="search.php" method="post">
                        <?php
                            echo '<input type="hidden" name="email" value="'.$email.'">
                                 <input type="hidden" name="password" value="'.$password.'">';
                        ?>
                        <p class="btn-s"><input type="submit" value="戻る" class="button"></p>
                    </form>
            </div>
        </div>
    <footer>
        <p>2021 Japan News</p>
    </footer>

    </body>
</html>



