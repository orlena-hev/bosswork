<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
<meta name="licence" content="Copywright LernVid.com - Creative Commons Sharalike 3.0" />
	<title>Ajax Template</title>
	<link rel='stylesheet' type='text/css' href='css/style.css' />
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
    <script type='text/javascript' src='js/hashchange.js'></script>
    <script type='text/javascript' src='js/dynamicpage.js'></script>
</head>
<body>
	<div id="logo">
		<h1>Ajax Template</h1>
	</div>		
	<div id="wrapper">
        <div id="header">
			<div id="navi">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="news.html">News</a></li>
					<li><a href="downloads.html">Downloads</a></li>
					<li><a href="team.html">Team</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>
		<div id="content">

			<form action="auth.php" name="authform" method="post">
      <input type="text" name="login">
      <input type="password" name="pas">
      <input type="submit" name="butsub" value="Войти">
      <a href="php/reg.php"><input type="button" value="Зарегистрироваться" name=""></a>
      </form>
      
		</div>
	</div>
	<div id="footer">
		<div id="footerlinks">
			<a href="imprint.html">Imprint</a>
		</div>
		<!-- It's NOT allowed to delete the Backlink to the autor! >>> Infos under: http://lernvid.com/lizenz <<< -->
		Design by <a  title="Templates" href="http://www.lernvid.com">LernVid.com</a>
	</div>
</body>
</html>