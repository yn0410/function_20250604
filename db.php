<?php
$dsn="mysql:host=localhost;dbname=store;charset=utf8";
$pdo=new PDO($dsn,'root','');

/* all()-給定資料表名後，會回傳整個資料表的資料
find()-會回傳資料表指定id的資料 */

function all($table, $where=null){ //"參數=null"表示預設值=null，呼叫函式時，可寫可不寫這個參數，不寫加此參數就是預設值去呼叫此function
    // echo "回傳資料表 $table 的所有資料";
    global $pdo;
    $sql="SELECT * FROM $table $where";
    echo $sql;
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}

function dd($array){ //dd=direct dump
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function q($sql){
    global $pdo;
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function find($table, $id){
    global $pdo;

    if(is_array($id)){
        $tmp=[];
        foreach($id as $key=>$value){
            $tmp[]="`$key`='$value'";
        }
        $sql="SELECT * FROM $table WHERE ".join(" AND ", $tmp);
    }else{
        $sql="SELECT * FROM $table WHERE id='$id'";
    }
    echo $sql;
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

?>