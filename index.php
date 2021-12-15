<!DOCTYPE html>
<html>
<head>
    <title>Лаба 10</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите элементы массива через запятую:</p>
        <input type="text" name="n" value="1, 2, 3">
        <input type="submit" value="OK">
    </form>
    <?php
        $n=$_POST["n"];
        $myArray = explode(", ", $n);

    //подсчет количества положительных элементов в массиве
        $sumOfPol = 0;
        for($i=0; $i<count($myArray); $i++){
            if ($myArray[$i]>0) {
                $sumOfPol++;
            }
        }

        //подсчет суммы чисел после последнего нулевого элемента
        $last0El;
        for($i=count($myArray)-1; $i>0; $i--){
            if($myArray[$i]==0){
                $last0El=$i;
                break;
            }
        }
        $sum = 0;
        for($k = $last0El+1; $k<count($myArray); $k++){
            $sum+=($myArray[$k]);
        }



        //Массив, где сначала все элементы, целая часть которых не превышает 1, а потом всё остальное
        $firstM = [];
        $secM = [];
        for($m = 0; $m<count($myArray); $m++){
            if(intval($myArray[$m])<=1){
                $firstM[]=$myArray[$m];
            }
            else{
                $secM[]=$myArray[$m];
            }
        }
        $myArray = array_merge($firstM, $secM);

        echo "Количество положительных элементов в массиве ".$sumOfPol."; Сумма модулей чисел после последнего нулевого элемента равна ".$sum."; Массив, где сначала все элементы, целая часть которых не превышает 1, а потом всё остальное: </br>";
        for($m=0; $m<count($myArray); $m++){
            echo $myArray[$m]."; ";
        }
    ?>
</body>
</html>