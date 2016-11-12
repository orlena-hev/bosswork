<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Php_Znatok</title>
</head>

<body>
<?php 
# три вида комментариев
// строчный комментарий
/* 
многострочный комментарий 
*/
?>


<?php
// создание новых переменных 
// переменная может быть создана в любом месте программы,до ее первого использования
/*
Типы переменных в php:
integer, double(or float), string, object, bool
*/
$zch = 10; //Обязательно знак ; !!! 
$zstr = "Вывод значения новой переменной :";
echo "$zstr $zch"; // использование оператора вывода echo


// Строковые операции
// Операция конкатенации
$ex = 20;
$konk =  $ex.$zch;
echo "<br /><hr color='#f2f2f2' width='300px' align='left' />Результат конкатенации (числа 20 и 10 ): $konk";
$zstr[2]="Y";
echo $zstr[2];// обращениеие к конкретному символу в строке

// Функции определения и задания типа переменных
/*
is_int($x) или is_integer($x), is_double($x) или is_float($x), is_string($x), is_array($x), is_object($x), is_bool($x) - возвращает true если переданная переменная совпадает с ее действительным типом ;
gettype($x) - возвращает строку,описывающую тип переменной (integer, double(or float), string, object, bool или unknown type, если невозможно определить тип)
явно указать тип - функция settype($x, $type) $type-то,что возвращает gettype($x)
*/
$tip = gettype($zch);
echo "<br><hr color='#f2f2f2' width='300px' align='left' />Вывод типа переменной,содержащей строку : $tip"; 


// Перейти к рассмотрению конструкции if-else в файл if_else.php


// Константы
// Функция define ($name, $value, $case_sen) ,где $case_sen- необяз. параметр логического типа, указывающий следует ли учитывать регистр символов. 
define ("pi",3.14,true);
echo "<br>Вывод значения константы пи : "; 
echo pi ; //pi можно использовать без знака $!!!
/*
Для проверки существования константы можно использовать функцию defined()
*/
if (defined("pi") == true) echo "<br>Проверка прошла удачно, константа pi объявлена!";


// $x +=10; эквивалентно $x = $x+10; !!!

// проверка сущестования переменной : isset($perem_name);

// удаление переменных (чтобы не занимать память)  : unset($perem_name);


// Основные математические операции
$v = 34;
$n = 10;
$rez1 = $n+$v;
$rez2 = $v-$n;
$rez3 = $v/$n;
$rez4 = $v*$n;
$rez5 = $v%$n;
echo "<br /><hr color='red' width='650px' align='left' />Результаты математических операций : <br />Сложение : $rez1 , Вычитание : $rez2 , Деление : $rez3 ,Умножение : $rez4, Остаток от деления : $rez5  <hr color='red' width='650px' align='left' />"; 
$v++;// операция инкремента 
$n--;// операция декремента 


// Оператор эквивалентности ===
$ss = 0;
$zz = "";
if ($ss == $zz) echo "Равенство переменных : ss = zz";// если поставить === то надпись выводится не будет !!!


// Ссылки(жесткие и символические),жесткиая ссылка -просто псевдоним другой переменной(для создания исп-ся оператор & )		


// Перейти к рассмотрению циклов


/* Сбор одного скрипта из нескольких
Инструкция require "имя_файла"; - заменяет функцию указанным файлом
Инструкция include "имя_файла"; - включает код в сценарий во время выполнения сценария,из-за трансляции во время выполнения скорость снижается
Инструкции однократного включения - include_once "" и require_once "",исключают возможность двойного включения
*/

//--------------------------------------------------------------------------------------------------------------------------------

/*
Синтаксис HEREDOC
Для вывода на экран большого кол-ва информации необходимо установить маркеры
echo <<<HERE

Большой объем текста

HERE;
*/



?>



</body>
</html>