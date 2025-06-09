<?php //include 'library.php'; ?>
<?php include 'db.php'; ?>
<!-- <h3>用*畫圖</h3> -->
<h3>拿到資料表的資料</h3>
<style>
    *{
       font-family:'Courier New', Courier, monospace;
    }
</style>
<?php
/* stars('正三角形', 15);
stars('菱形', 15);
stars('矩形', 15);
stars('倒三角形', 15);
 */

/* $rows=all('sales');
dd($rows);

$sales=all('sales', "where quantity >=2");
dd($sales);

$all=q("select name, price from items order by price");
dd($all); */


/* dd(find('items', 3));
dd(find('items', ['name'=>'蛋餅','stock'=>55])); */

$row=find('items', 5);
dd($row);

$row['cost']=15;
$row['price']=45;

dd($row);

update("items", $row);
?>