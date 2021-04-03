<?php
    if ( isset ($_POST["email"]) ) {
        $email = $_POST["email"];
      }
    if ( isset ($_POST["password"]) ) {
        $password = $_POST["password"];
      }
    $sql = "select * from info";
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
                    <h1>検索ページ</h1>
                </div>
                <div class="container">
                    <p class="name">地域から探す</p>
                    <form action="block.php" method="post">
                        <div class="pref1 pref2">
                            <select name="block">
                                <option value="北海道">北海道</option>
                                <option value="東北">東北</option>
                                <option value="関東">関東</option>
                                <option value="中部">中部</option>
                                <option value="近畿">近畿</option>
                                <option value="中国">中国</option>
                                <option value="四国">四国</option>
                                <option value="九州沖縄">九州沖縄</option>
                            </select>
                        </div>
                        <?php
                            echo '<input type="hidden" name="email" value="'.$email.'">
                                 <input type="hidden" name="password" value="'.$password.'">';
                        ?>
                        <p class="retrieval"><input type="submit" value="検索" class="button"></p>
                    </form> 
                    <p class="name">都道府県はコチラ</p>           
                    <table border="1" align="center" class="pref-t block-c">
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
                    <form action="mypage.php" method="post">
                        <?php
                            echo '<input type="hidden" name="email" value="'.$email.'">
                                 <input type="hidden" name="password" value="'.$password.'">';
                        ?>
                        <input type="hidden" name="loginflug" value="true">
                        <p class="btn-s"><input type="submit" value="戻る" class="button"></p>
                    </form>
                </div>
            </div>
        <footer>
            <p>2021 Japan News</p>
        </footer>
    </body>
</html>

