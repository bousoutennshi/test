<?php
try{
    $dbh = new PDO(
        'mysql:host=localhost:port=3306:dbname=test',
        'myokota',
        'bousou'
    );
}catch(PDOException $e){
    print $e->getMessage();
}

?>
