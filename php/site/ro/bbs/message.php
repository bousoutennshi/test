<?php

// get arguments
$board_id   = $_POST['board_id'];
$creater    = $_POST['creater'];
$message    = $_POST['message'];

// check arguments
if( !$board_id ){
    echo "<h6 style=\"text-align:right;\">不正投稿はいけません。</h6>";
    exit;
}
if( !$creater ){
    echo "<h6 style=\"text-align:right;\">名前を入力してね♪</h6>";
    exit;
}
if( !$message ){
    echo "<h6 style=\"text-align:right;\">内容を入力してね♪</h6>";
    exit;
}

// mysql connect
$dsn        = 'mysql:dbname=ro;host=localhost';
$user       = 'myokota';
$password   = 'bousou';
try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// insert
$sql    = "insert into message (board_id,message,poster,post_at) values(?,?,?,?)";
$bind   = array( $board_id, $message, $creater, time() );
$stmt   = $dbh->prepare($sql);
$flag   = $stmt->execute($bind);

if( $flag ){
    echo "<h6 style=\"text-align:right;\">書き込みしたよ♪<br>";
    echo "上のBBSメニューから戻ってね♪</h6>";
    exit;
}else{
    echo "<h6 style=\"text-align:right;\">書き込みに失敗したよ！<br>";
    echo "管理者に問い合わせてね。</h6>";
    exit;
}

?>
