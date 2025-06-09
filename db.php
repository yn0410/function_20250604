<?php
$dsn="mysql:host=localhost;dbname=store;charset=utf8";
$pdo=new PDO($dsn,'root','');
function all($table){
    // echo "回傳資料表 $table 的所有資料";
    global $pdo;
    $sql="SELECT * FROM $table";
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}

function dd($array){ //dd=direct dump
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

?>