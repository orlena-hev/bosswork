<?php include_once("db_connect.php"); 
//var_dump($_POST);

//isset($_POST['nik'])  
//unset($pass); - удаление 
//empty($_POST['nik']) 
$mynik = $_POST['nik'];
$email = $_POST['e_mail']; 
$pass = $_POST['password'];
$repass =$_POST['f_password'];

$mynik = trim($mynik);
$pass = trim($pass);

$mynik = stripcslashes($mynik);
$pass = stripcslashes($pass);

$mynik = htmlspecialchars($mynik);
$pass = htmlspecialchars($pass);


//echo $pass[5];
//заполнены ли все 4 поля?
if (empty($mynik) || empty($email) || empty($pass) || empty($repass)) {
	echo "<br>Заполените поля,обязательные для ввода (отмечены красным)!<br>";	
}

else {
		//echo isset($_POST['password']);
		if ($pass !== $repass) {
			echo "<span style='color:#cc0000;'><br>Пароли не совпадают!</span>";
		} 
		else {
			echo "Пароли совпадают";
			
			$err = mysql_query("INSERT INTO users (login,password) VALUES ('$mynik','$pass')");
			if ($err == true) {
				echo "Данные успешно записаны в БД";
			}
		}

}
//echo "Пользователь ввел ник:".$mynik." Почта:".$email;
?>