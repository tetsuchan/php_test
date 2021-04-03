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
                echo '<div class="main-title">
                        <h1>'.$data["pref"].'の更新ページ</h1>
                     </div>';
                echo '<div class="container">
                        <form action="new_data.php" method="post">
                            <p class="update-t"><label for="date">日付</label></p>
                            <p class="space"><input class="update-info" type="date" name="date" value="'.$data["date"].'"></p>
                            <p class="update-t"><label for="infection">感染者数</label></p>
                            <p class="space"><input class="update-info" type="number" name="infection" value="'.$data["infection"].'"></p>
                            <p class="update-t"><label for="memo">状況・対応</label></p>
                            <p class="space"><textarea class="update-info" name="memo" cols="20" rows="4">'.$data["memo"].'</textarea></p>
                            <input type="hidden" name="id" value="'.$id.'">
                            <input type="hidden" name="email" value="'.$email.'">
                            <input type="hidden" name="password" value="'.$password.'">
                            <p class="update"><input type="submit" value=更新 class="button"></p>
                        </form>
                        <form action="detail.php" method="get">
                            <input type="hidden" name="email" value="'.$email.'">
                            <input type="hidden" name="password" value="'.$password.'">
                            <input type="hidden" name="id" value="'.$id.'">
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


