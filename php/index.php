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
                <h1>コロナウイルス最新情報</h1>
                <h2>〜管理ツール（日本全国版）〜</h2>
            </div>
            <div class="container">
                <p class="login-title">ログイン</p>
                <form action="mypage.php" method="post" >
                    <p><label for="email">メールアドレス</label></p>
                    <p class="user"><input type="text" name="email" id="email" class="login-info"></p>
                    <p><label for="password">パスワード</label></p>
                    <p class="user"><input type="password" name="password" id="password" class="login-info"></p>
                    <p class="login"><input type="submit" value="ログイン" class="button"></p>
                </form>
                <a href="new_page.php">新規会員登録はこちら</a>
            </div>
        </div>
        <footer>
            <p>2021 Japan News</p>
        </footer>
    </body>
</html>