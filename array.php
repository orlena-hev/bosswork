<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Array in PHP</title>
</head>

<body>


<?php 

$mas[0] = 1;
$mas[1] = 2;
$mas[2] = 3;
$mas[3] = 4;
$mas[4] = 5;

//или $mas = array(0=>1,1=>2,2=>3,3=>4);  или $mas = array(1,2,3,4);

for ($i=0;$i<=4;$i++) { echo  $mas[$i];}
//Функция count(наш массив)- возвращает размер массива,т.е. кол-во элементов в нем,необходимо когда неизвестно какой массив
//Функция list() сопостовляет переменные и массив $z[0]="br" $z[1]="dr" list($one,$two)=$z;

//Ассоциативные масивы - масивы, индексами которых являются строки
//Индексы ассоциативных масивов называют ключами
$ass["Sevastopol"]=350000;
$ass["Kiev"]=2000000;
$ass["Odessa"]=1000000;
echo "<br>";
echo $ass["Kiev"];


// Многомерные массивы
$ob["kurs1"] = array ("kaf" => "avt", "many" => 1500, "year" => 2000);
$ob["kurs2"] = array ("kaf" => "tampt", "many" => 2500, "year" => 2002);
//echo "<br>my fakultet - ".$ob["kurs2"]["kaf"];
printf("<br>Я могу учиться на двух кафедрах : %s или %s",$ob["kurs1"]["kaf"],$ob["kurs2"]["kaf"]);
/*выведеи инфу с помощью функции printf("",)- состоит из 2-х частей,первая-что выводим + маркеры, вторая - значения этих маркеров */



//операции над массивами : удаление, слияние , перебор
//удаление массива(как и любой другой переменной) - функция UnSet(имя_массива),для освобождения памяти
//слияние происходит при помощи знака +  ,опасная операция! или функция array_merge();
?>
</body>
</html>
