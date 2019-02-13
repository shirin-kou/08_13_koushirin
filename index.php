<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MYAKUSHIN</title>
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
            <a class="navbar-brand" href="#">MYAKUSHIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="select.php">DATA</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <form action="insert.php" method="POST">
        <div class="form-group">
            <label for="shurui">タイプ</label>
            <input type="text" class="form-control" id="shurui" name="shurui">
        </div>
        <div class="form-group">
            <label for="name">脈診名</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="henka">脈の変化</label>
            <input type="text" class="form-control" id="henka" name="henka">
        </div>
        <div class="form-group">
            <label for="syndrome">症状</label>
            <input type="text" class="form-control" id="syndrome" name="syndrome">
        </div>
        <div class="form-group">
            <label for="therapy">対処法</label>
            <input type="text" class="form-control" id="therapy" name="therapy">
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</body>

</html>