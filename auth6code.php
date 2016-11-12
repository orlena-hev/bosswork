<?php
session_start(); 
if (empty($_POST['login']) || empty($_POST['pas']) )
{
	exit("Заполните поля!");
}

$login = $_POST['login'];
$pass = $_POST['pas'];


include_once("db.php");
//минипроверка на подбор паролей
$ip = getenv("HTTP_X_FORWARDED_FOR");

if (empty($ip) || $ip == 'unknown') {
	$ip = getenv("REMOTE_ADDR"); //звлекаем IP
	$usercol = mysql_query("SELECT col FROM userban WHERE ip='$ip'",$db);
	$userip = mysql_fetch_array($usercol);

	if ($userip['col'] > 2) {
		//если больше 2х неудачных попыток входа,то выдаем сообщение, 
		//подождите 3 мин и повторите вход
	exit("подождите 3 мин и повторите вход");		
	}
}



$userinfo = mysql_query("SELECT * FROM users WHERE login='$login'",$db);

$newuserinfo = mysql_fetch_array($userinfo);

var_dump($newuserinfo);

if ($pass == $newuserinfo['password'])
{
	echo "Вы успешно вошли на сайт!";
	$_SESSION['id'] = $newuserinfo['id'];
	$_SESSION['login'] = $newuserinfo['login'];
	$_SESSION['password'] = $newuserinfo['password'];
	$_SESSION['role'] = $newuserinfo['role'];

}
else {
	//если пользователь с введенныи логином и паролем не существует
	//то делаем запись в таблицу по ip
	$select = mysql_query("SELECT * FROM userban WHERE ip='$ip'");
	$user_row = mysql_fetch_array($select);
	if ($ip == $user_row['ip']) { //проверяе есть ли пользователе с таким ip  таблице userban
		$col = $user_row['col'] + 1;
		//прибавляем еще 1 попытку неудачного входа
		mysql_query("UPDATE userban SET col='$col',date=NOW() WHERE ip='$ip'");
	}
	else {
		mysql_query("INSERT userban (ip,date,col) VALUES ('$ip',NOW(),'1')")
	}

	exit("Пароли не совпадают!Повторите ввод!");
}

?>