<?
echo '1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу: если $a и $b положительные, вывести их разность; если $а и $b отрицательные, вывести их произведение; если $а и $b разных знаков, вывести их сумму; ноль можно считать положительным числом.
<br>';

$a = rand(0,2500)-1000;
$b = rand(0,2500)-1000;

echo "a=".$a."<br>";
echo "b=".$b."<br>";
if($a>=0 && $b>=0){
    $dif=$a-$b;
    echo "разность: ".$dif;
}
elseif($a<0 && $b<0){
    $mul=$a*$b;
    echo "произведение: ".$mul;
}
elseif(($a>=0 && $b<0)||($a<0 && $b>=0)){
    $sum=$a+$b;
    echo "сумма: ".$sum;
}
else{
    echo "Ошибка!";
}
    
echo '<hr>2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.<br>';
    
$a=rand(1,15);
switch($a){
    case 0:
        echo "0, ";
    case 1:
        echo "1, ";
    case 2:
        echo "2, ";
    case 3:
        echo "3, ";
    case 4:
        echo "4, ";
    case 5:
        echo "5, ";
    case 6:
        echo "6, ";
    case 7:
        echo "7, ";
    case 8:
        echo "8, ";
    case 9:
        echo "9, ";
    case 10:
        echo "10, ";
    case 11:
        echo "11, ";
    case 12:
        echo "12, ";
    case 13:
        echo "13, ";
    case 14:
        echo "14, ";
    case 14:
        echo "15";
        break;
    default:
        echo "Ошибка!";
        break;
}

echo '<hr>3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.<br>';

function sum($x, $y){
    return $x+$y;
}

echo sum (10,15)."<br>";

function dif($x, $y){
    return $x-$y;
}

echo dif (10,15)."<br>";

function mul($x, $y){
    return $x*$y;
}

echo mul (10,15)."<br>";

function div($x, $y){
    if ($y!=0){
        return $x/$y;
    }
    else {
        echo "y=0 - на 0 делить нельзя!";
    }
}

echo div (10,15)."<hr>";
    

echo '4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).<br>';

function mathOperation ($arg1, $arg2, $operation){
    switch ($operation){
        case "sum":
            return sum($arg1, $arg2);
            break;
        case "dif":
            return dif($arg1, $arg2);
            break;
        case "mul":
            return mul($arg1, $arg2);
            break;
        case "div":
            return div($arg1, $arg2);
            break;
        default:
            echo "Ошибка";
            break;
    }
}

echo mathOperation(10, 15, "dif")."<hr>";

echo '6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.<br>';
  
function power($val, $pow){
    if ($pow==1){
        return $val;
    }
    elseif ($pow>1){
        return $val*power($val, $pow-1);
    }
    else {
        echo "Ошибка: степень не является целым положительным числом";
    }
}

echo power(5, 20)."<hr>";

echo '7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например: 22 часа 15 минут; 21 час 43 минуты <br>';

function printTime (){
    $hour=date(G);
    $minut=date(i);
 
//1 и 21 час    
    if ($hour==1 || $hour==21){
        $textHour=" час ";
    }
//2,3,4,22,23,24 часа
    elseif (($hour>1 && $hour<=4) || $hour>=22){
        $textHour=" часа ";
    }
 //все остальные часы
    else {
        $textHour=" часов ";
    }
//01,21,31,41,51 минута
    if ($minut==01 || (($minut>=20)&&($minut%10==1))){
        $textMinut=" минута";
    }
//02,03,04 и каждая 2, 3 и 4 минуты в десятке после 20
    elseif (($minut>01 && $minut<=04)||(($minut>20)&&(($minut%10>=2)&&($minut%10<=4)))){
        $textMinut=" минуты";
    }
//все остальные минуты
    else{
        $textMinut=" минут";
    }
    $text="<strong>Текущее время: </strong>";
    $text.=$hour;
    $text.=$textHour;
    $text.=$minut;
    $text.=$textMinut;
    return $text;
}

echo printTime();
?>

