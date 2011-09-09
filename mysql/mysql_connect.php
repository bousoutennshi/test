<?php

$ret = mysql_connect('localhost', 'myokota', 'bousou');
if( !$ret ){
    die('mysql connect error : '.mysql_error());
}
echo "mysql connect success!!\n";
mysql_close($ret);

?>
