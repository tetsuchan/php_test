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
                <h1>新規会員登録</h1>
            </div>
            <div class="container">
                <form action="login_data.php" method="post" >
                    <label for="name">氏名</label>
                    <p class="user"><input type="text" id="name" name="name" class="login-info" required="required"></p>
                    <label for="address">住所</label>
                    <p class="user"><input type="text" id="address" name="address" class="login-info" required="required"></p>
                    <label for="number">電話番号（携帯）</label>
                    <p class="user"><input type="tel" name="number" id="number" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" placeholder="例：090-1234-5678" class="login-info"></p>
                    <label for="email">メールアドレス</label></p>
                    <p class="user"><input type="text" name="email" id="email" class="login-info" required="required"></p>
                    <label for="password">パスワード</label></p>
                    <p class="pass"><input type="password" name="password" id="password" class="login-info" required="required"></p>
                    <p class="login"><input type="submit" value="登録" class="button"></p>
                </form>
            </div>
        </div>
        <footer>
            <p>2021 Japan News</p>
        </footer>
    </body>
</html>
