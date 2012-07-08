<?php

require('/usr/share/nginx/html/ro/basic.php');

// Basic認証
if(!isset($_SERVER["PHP_AUTH_USER"])) {
    header("WWW-Authenticate: Basic realm=\"Please Enter Your Password\"");
    header("HTTP/1.1 401 Unauthorized");
    //キャンセル時の表示
    echo "<h6 style=\"text-align:right;\">".
         "認証エラーです。<br>".
         "パスワードの発行はABOUTから管理者に連絡してください。".
         "</h6>";
    exit;
}else {
    if(!AuthenticateUser($_SERVER["PHP_AUTH_USER"],$_SERVER["PHP_AUTH_PW"])){
        //認証エラーの処理
        echo "<h6 style=\"text-align:right;\">".
             "認証エラーです。<br>".
             "パスワードの発行はABOUTから管理者に連絡してください。".
             "</h6>";
        exit;
    }
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

// select
$sql    = "select * from board";
$stmt   = $dbh->prepare($sql);
$flag   = $stmt->execute();

if( !$flag ){
    echo "DB接続失敗したよ。管理者に問い合わせてね。";
    exit;
}

// get board data
$board_list = array();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $board_list[] = $row;
}

// select
$sql    = "select * from message";
$stmt   = $dbh->prepare($sql);
$flag   = $stmt->execute();

if( !$flag ){
    echo "DB接続失敗したよ。管理者に問い合わせてね。";
    exit;
}

// get message data
$message_list = array();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $message_list[] = $row;
}

?>
<html>
    <head>
        <title>bbs site</title>
        <link rel="stylesheet" href="http://www2228ue.sakura.ne.jp/ro/css/bbs.css" />
        <script type="text/javascript" src="http://jsajax.com/jQuery/jquery.js"></script>
        <script type="text/javascript">  
            $(document).ready(function() {  
                $('div.create:eq(0)> div').hide();  
                $('div.create:eq(0)> h4').click(function() {  
                    $(this).next().slideToggle('fast');
                });
            });
        </script>
    </head>
    <body>
        <h6 style="text-align:right;">
            BBS<br>
            <div class="create">
                <h4><a href="#">新規作成</a></h4>
                <div>
                    <form method="post" action="./bbs/create.php">
                    スレッド名：<input type="text" name="board_name" maxlength="255" size="25"><br><br>
                    お名前：<input type="text" name="creater" maxlength="255" size="25"><br><br>
                    内容：<textarea name="detail" rows="4" cols="20"></textarea><br>
                    <input type="submit" value="新規作成">
                    </form>
                </div>
                <hr width="250" align="right"><br>
                <?php
                if( !empty($board_list) ){
                    arsort($board_list);
                    $i = count($board_list);
                    foreach( $board_list as $board_data ){
                        $date = date("Y/m/d H:i:s", $board_data['create_at']); 
                        $detail = preg_replace('/\n/','<br>',$board_data['board_detail']);
                        echo "<font size=\"2\">No.$i Title:".$board_data['board_name']." Name: ".
                             $board_data['creater']."</font><br>".
                             $detail."<br>".
                             "<font size=\"1\">".$date."</font><br><br>";
                        foreach($message_list as $message_data){
                            if( !empty($message_data) ){
                                if( $board_data['board_id'] == $message_data['board_id'] ){
                                    echo "{$message_data['poster']}さんの発言：{$message_data['message']}<br>";
                                }
                            }
                        }
                        echo "<br><form method=\"post\" action=\"./bbs/message.php\">".
                             "<input type=\"text\" name=\"creater\" maxlength=\"255\" size=\"10\"> ".
                             "<input type=\"text\" name=\"message\" maxlength=\"255\" size=\"25\">".
                             "<input type=\"hidden\" name=\"board_id\" value=\"{$board_data['board_id']}\">".
                             "<input type=\"submit\" value=\"コメント\"><br><br>".
                             "</form>".
                             "<hr width=\"250\" align=\"right\"><br>";
                        $i--;
                    }
                }
                ?>
            </div>
        </h6>
    </body>
</html>
