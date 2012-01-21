<?php

$a = array( 
    array( 'a', 'b', 'c' ), 
    array( 'd', 'e', 'f' ), 
    array( 'g', 'x', 'j' ),
    array( 'o', 'q', 'p' )
);

# 元データ
var_dump($a);

# 狙い撃ちで配列削除
var_dump(array_splice( $a, 3, 1 ));

# 削除完了データ
var_dump($a);

?>
