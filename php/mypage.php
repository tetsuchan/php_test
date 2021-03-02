<?php
    $loginflug = false;
    $db = mysqli_connect("localhost", "root", "", "corona");
    if ( isset ($_POST["email"]) ) {
        $email = $_POST["email"];
      }
    if ( isset ($_POST["password"]) ) {
        $password = $_POST["password"];
      }
    if ( isset ($_POST["loginflug"]) ) { 
        $loginflug = $_POST["loginflug"];
      }
    $sql = "select * from login where email='".$email."' and password='".$password."'";
    $result = mysqli_query($db,$sql);
    while($data = mysqli_fetch_assoc($result)){
        $loginflug = true;
        $name = $data["name"];
        $address = mb_substr($data["address"],0,2);
        $withdraw= '<form action="check.php" method="post">
                        <input type="hidden" name="id" value="'.$data["id"].'">
                        <input type="hidden" name="email" value="'.$email.'">
                        <input type="hidden" name="password" value="'.$password.'">
                        <input type="submit" value="退会" class="btn-a">
                    </form>';
    }
    mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
    </head>
    <body>
        <?php
            if($loginflug){
                $db = mysqli_connect("localhost", "root", "", "corona");
                $sql1 = "select * from info where pref like '".$address."%'"; 
                $result1 = mysqli_query($db,$sql1);
                echo '<header>
                        <div class="flex">
                            <h1>COVID 19</h1>
                            <p>'.$withdraw.'</p>
                        </div>
                     </header>';
                echo '<div class=main>
                        <div class="main-title">
                            <h1>マイページ</h1>
                        </div>
                        <div class="container">
                            <p class="name">ログインに成功しました！</p>';
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo '<p class="text-p"><span>'.$name.'</span>さんの地域の<span>'.$data1["date"].'</span>時点での、<br>最新情報は以下になります。</p>
                                     <table border="1" align="center" class="pref-t">
                                        <tr>
                                            <th>都道府県</th><th>感染者数</th><th>状況・対応</th>
                                        </tr>
                                        <tr>
                                            <td>'.$data1["pref"].'</td><td>'.$data1["infection"].'人</td><td>'.$data1["memo"].'</td>
                                        </tr>
                                    </table>';
                            }
                        echo '<form action="search.php" method="post">
                                <input type="hidden" name="email" value="'.$email.'">
                                <input type="hidden" name="password" value="'.$password.'">
                                <p class="retrieval"><input type="submit" value="検索はコチラ" class="button"></p>
                            </form>
                        </div>
                     </div>';
                echo '<footer>
                        <p>2021 Japan News</p>
                     </footer>'; 
                     mysqli_close($db);
            } else {
                echo '<header>
                        <h1>COVID 19</h1>
                     </header>';
                echo '<div class=main>
                        <div class="container">
                            <p class="name">入力された情報が正しくありません。</p>
                            <form action="index.php" method="post">
                                <p class="retrieval"><input type="submit" value="戻る" class="button"></p>
                            </form>
                        </div>
                     </div>';
                echo '<footer>
                        <p>2021 Japan News</p>
                     </footer>';    
            }
        ?>
    </body>
</html>

