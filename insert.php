<?php
include('functions.php');

// 入力チェック
if(
    !isset($_POST['shurui']) || $_POST['shurui']=='' ||
    !isset($_POST['name']) || $_POST['name']=='' ||
    !isset($_POST['henka']) || $_POST['henka']=='' ||
    !isset($_POST['syndrome']) || $_POST['syndrome']==''
){
    exit('ParamError');
}


//POSTデータ取得
$shurui = $_POST['shurui'];
$name = $_POST['name'];
$henka = $_POST['henka'];
$syndrome = $_POST['syndrome'];
$therapy = $_POST['therapy'];

//DB接続
$pdo = db_conn();

//データ登録SQL作成
$sql ='INSERT INTO myakushin_table(id, shurui, name, henka, syndrome, therapy, indate)values(NULL, :a1, :a2, :a3, :a4, :a5, sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $shurui, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $name, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $henka, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $syndrome, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a5', $therapy, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit('sqlError:'.$error[2]);
} else {
    //５．index.phpへリダイレクト
    header('Location: index.php');
}
