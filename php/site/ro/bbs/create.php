<?php

// get arguments
$board_name = $_POST['board_name'];
$creater    = $_POST['creater'];
$detail     = $_POST['detail'];

// check arguments
if( !$board_name ){
    echo "<h6 style=\"text-align:right;\">スレッド名を入力してね♪</h6>";
    exit;
}
if( !$creater ){
    echo "<h6 style=\"text-align:right;\">名前を入力してね♪</h6>";
    exit;
}
if( !$detail ){
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
$sql    = "insert into board (board_name,board_detail,creater,create_at) values(?,?,?,?)";
$bind   = array( $board_name, $detail, $creater, time() );
$stmt   = $dbh->prepare($sql);
$flag   = $stmt->execute($bind);

if( $flag ){
    echo "<h6 style=\"text-align:right;\">新しいスレッドを作成したよ♪<br>";
    echo "上のBBSメニューから戻ってね♪</h6>";
    exit;
}else{
    echo "<h6 style=\"text-align:right;\">新しいスレッドの作成に失敗したよ！<br>";
    echo "管理者に問い合わせてね。</h6>";
    exit;
}

?>
