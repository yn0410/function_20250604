<?php //include 'library.php'; ?>
<?php include 'db.php'; ?>
<!-- <h3>用*畫圖</h3> -->
<h3>拿到資料表所有資料</h3>
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

$rows=all('sales');
dd($rows);

$sales=all('sales', "where quantity >=2");
dd($sales);

?>