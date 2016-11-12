<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Циклы</title>
</head>

<body>


<?php 
// один проход цикла - итерация 
// как и в С три вида циклов :с предусловием(while), с постусловием(do-while), со счетчиком (for)


//Цикл  while
$n=0;
echo "<hr color='#f2f2f2' width='600px' align='left' />Вывод цифр с использованием цикла while :";
while ($n++ <7) echo $n;// выведет 1234567 т.к. за счет инкремента увеличение счетчика происходит после проверки логического условия

echo "<br>";

//Цикл  do-while
$n=1;
echo "<hr color='#f2f2f2' width='600px' align='left' />Вывод цифр с использованием цикла do-while :";
do echo $n; while ($n++ <7);

echo "<br>";

// Цикл for
echo "<hr color='#f2f2f2' width='600px' align='left' />Вывод цифр с использованием цикла for :";
for ($n=0; $n<7;$n++) {
	 for ($k=0;$k<=3;$k++) echo "$k ";
}	 


// Операторы break(прерывает работу всего цикла) и continue(прерывает только текущую итерацию)
echo "<hr color='#f2f2f2' width='600px' align='left' />Вывод цифр с использованием операторов break и continue :";
$iter=0;
while ($iter++ <5) { if ($iter==3) break; echo $iter;  }// попробовать вместо break поставить continue!


// Цикл перебора массива
// Синтаксис : foreach (массив as $ключ=>$значение) операторы;
foreach ($GLOBALS as $key=>$value) echo "<hr color='#0000cc' width='900px' align='left' />Цикл перебора массива foreach : $key = $value"; // $GLOBALS - олезный стандартный массив,содержащий глобальные переменные
/*
Здесь выводятся имна переменных и соответствующие им значения. Каждый элемент массива имеет индекс и ключ,который служит для однозначаной идентификации элемента массива.
*/


//Конструкция выбора switch-case , использование когда вариантов очень много и для каждого варианта нужно выполнить определенное действие
/*
Синтаксис:
switch (выражение) {
case значение1 : команды1; [break;]
...
case значениеN : командыN; [break;]
[default : команды по умолчанию; [break;]]
}
*/




?>
</body>
</html>
