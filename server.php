<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Глобальный массив _SERVER</title>
</head>

<body>
<?php 
/* 
Одним из важнейших предопределённых массивов является массив $_SERVER — в него PHP-интерпретатор помещает переменные, полученные от сервера. Без данных переменных сложно организовать полноценную поддержку Web-приложений. 
 */
echo "Ваш ip-адрес :".$_SERVER['REMOTE_ADDR'];
echo "<br>Ваш броузер и ОС :".$_SERVER['HTTP_USER_AGENT'];
if (isset($_SERVER['HTTP_REFERER'])) {
echo "<br>Вы пришли на эту страницу с адреса :".$_SERVER['HTTP_REFERER'];/*необходимо вначале создать ссылку на эту страницу - */}
else {echo "<br>Вы попали на эту страницу не по переходу!";}


?>
</body>
</html>
