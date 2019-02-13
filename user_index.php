<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザー登録</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div{
            padding: 10px;
            font-size:16px;
            }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">ユーザー登録</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="user_select.php">DATA</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <form method="post" action="user_insert.php">
        <div class="form-group">
            <label for="name">ユーザー名</label>
            <!-- 受け取った値をvaluesに埋め込もう -->
            <input type="text" class="form-control" id="name" name="name" value="<?=$rs['name']?>">
        </div>
        <div class="form-group">
            <label for="lid">ログインID</label>
            <!-- 受け取った値をvaluesに埋め込もう -->
            <input type="text" class="form-control" id="lid" name="lid" value="<?=$rs['lid']?>">
        </div>
        <div class="form-group">
            <label for="lpw">パスワード</label>
            <!-- 受け取った値をvaluesに埋め込もう -->
            <input type="text" class="form-control" id="lpw" name="lpw" value="<?=$rs['lpw']?>">
        </div>
        <div class="form-group">
            <label for="kanri_flg">管理者</label>
            <!-- 受け取った値をvaluesに埋め込もう -->
            <input type="radio" id="kanri_flg" name="kanri_flg" value=0 >一般
            <input type="radio" id="kanri_flg" name="kanri_flg" value=1 >管理者
        </div>
        <div class="form-group">
            <label for="life_flg">アクティブ</label>
            <!-- 受け取った値をvaluesに埋め込もう -->
            <input type="radio" id="life_flg" name="life_flg" value=0 >アクティブ
            <input type="radio" id="life_flg" name="life_flg" value=1 >非アクティブ
        </div>        <!-- idは変えたくない = ユーザーから見えないようにする-->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <!-- <input type="hidden" name="id" value="<?=$rs['id']?>"> -->
    </form>


</body>

</html>