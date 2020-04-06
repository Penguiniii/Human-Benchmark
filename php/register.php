<?php

$connect = mysql_connect('localhost', 'root', 'ThisPassword');
mysql_select_db('scores_db1' $connect);

$sql = 'INSERT INTO users (name,score) VALUES ("'.$_POST[name].'","'.$_POST[score].'")';

$result = mysql_query($sql);

if($result) {
    $created = 'score Posted for '._Post['name'];
    echo 'message='.urlencode($created);

}

?>