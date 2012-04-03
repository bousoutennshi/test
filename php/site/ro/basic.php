<?php
// Basic認証
function AuthenticateUser($user,$pwd){
    // mysql connect
    $dsn            = 'mysql:dbname=ro;host=localhost';
    $db_user        = 'myokota';
    $db_password    = 'bousou';
    try {
        $dbh = new PDO($dsn, $db_user, $db_password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit;
    }

    // select user data
    $sql    = "select * from user";
    $stmt   = $dbh->prepare($sql);
    $flag   = $stmt->execute();

    if( !$flag ){
        echo "DB接続失敗したよ。管理者に問い合わせてね。";
        exit;
    }

    // get user data
    $user_list = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $user_list[] = $row;
    }

    // 照合
    foreach( $user_list as $user_data ){
        if( $user_data['user_id'] === $user ){
            if( $user_data['passwd'] === $pwd ){
                return true;
            }
        }
    }

    return false;
}
?>
