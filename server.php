<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>���������� ������ _SERVER</title>
</head>

<body>
<?php 
/* 
����� �� ��������� ��������������� �������� �������� ������ $_SERVER � � ���� PHP-������������� �������� ����������, ���������� �� �������. ��� ������ ���������� ������ ������������ ����������� ��������� Web-����������. 
 */
echo "��� ip-����� :".$_SERVER['REMOTE_ADDR'];
echo "<br>��� ������� � �� :".$_SERVER['HTTP_USER_AGENT'];
if (isset($_SERVER['HTTP_REFERER'])) {
echo "<br>�� ������ �� ��� �������� � ������ :".$_SERVER['HTTP_REFERER'];/*���������� ������� ������� ������ �� ��� �������� - */}
else {echo "<br>�� ������ �� ��� �������� �� �� ��������!";}


?>
</body>
</html>
