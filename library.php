<?php

    // 整合
    function stars($shape, $size){
        switch($shape){
            case '正三角形':
                triangle($size);
                break;
            case '菱形':
                invertedTriangle($size);
                break;
            case '矩形':
                rectangle($size);
                break;
            case '倒三角形':
                revertTrangle($size);
                break;
            default:
                echo "無此形狀";
        }
    }


    // 1.正三角形
    function triangle($size){
        for($i=0; $i<$size; $i++){
            for($k=0; $k<$size-1-$i; $k++){
                echo "&nbsp;";
            }
            for($j=0; $j<2*$i+1; $j++){
                echo "*";
            }
            echo "<br>";
        }
    }

    // 2.菱形
    function invertedTriangle($stars){
        if($stars%2==0){ //若是偶數 強制改成奇數
            $stars=$stars+1;
        }

        for($i=0; $i<$stars; $i++){ //印菱形
            if($i<=floor($stars/2)){ 
                $y=$i;
            }else{
                $y=$stars -1 -$i;
            }

            for($j=0; $j<floor($stars/2)-$y; $j++){ //印空白
                echo "&nbsp;";
            }

            for($k=0; $k<$y*2+1; $k++){//印*
                echo "*";
            }
            echo "<br>";
        }
    }

    // 3.矩形
    function rectangle($w){
        for($i=0;$i<$w;$i++){

            for($j=0;$j<$w;$j++){

                if($i==0 || $i==$w-1 || $j==0  || $j==$w-1 || $i==$j || $i==$w-1-$j){
                    echo "*";
                }else{
                    echo "&nbsp;";
                }
                

            }

        echo "<br>";
        }
    }

    // 4.倒三角形
    function revertTrangle($stars){
        for($i=0;$i<$stars;$i++){
            for($j=0;$j<$stars;$j++){
                if($i<=$j){
                    echo "*";
                }
            }
            echo "<br>";
        }
    }

?>