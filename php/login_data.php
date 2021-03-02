<?php
    $db = mysqli_connect("localhost", "root", "", "corona");
    $name = $_POST["name"];
    $address = $_POST["address"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "insert into login
    (name,address,number,email, password) value
    ('".$name."','".$address."',".$number.",'".$email."','".$password."')";
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
            <div class=main-title>
                <h1>会員登録完了</h1>
            </div>
            <div class="container">
                <p class="insert">登録が完了しました！</p>
                <p class="login-back"><a href="index.php" class="button">戻る</a></p>
            </div>
        </div>
        <footer>
            <p>2021 Japan News</p>
        </footer>
    </body>


