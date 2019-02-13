<?php
// 関数ファイル読み込み
include('functions.php');

//入力チェック(受信確認処理追加)
if(
    !isset($_POST['shurui']) || $_POST['shurui']=='' ||
    !isset($_POST['name']) || $_POST['name']=='' ||
    !isset($_POST['henka']) || $_POST['henka']=='' ||
    !isset($_POST['syndrome']) || $_POST['syndrome']==''
){
    exit('ParamError');
}

//POSTデータ取得
$id = $_POST['id'];
$shurui = $_POST['shurui'];
$name = $_POST['name'];
$henka = $_POST['henka'];
$syndrome = $_POST['syndrome'];
$therapy = $_POST['therapy'];

//DB接続します(エラー処理追加)
$pdo = db_conn();

//データ登録SQL作成
$sql = 'UPDATE myakushin_table SET shurui =:a1, name = :a2, henka = :a3, syndrome = :a4, therapy = :a5  WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $shurui, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $name, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $henka, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $syndrome, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a5', $therapy, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//4．データ登録処理後
if ($status==false) {
    errorMsg($stmt);
} else {
    header('Location: select.php');
    exit;
}
