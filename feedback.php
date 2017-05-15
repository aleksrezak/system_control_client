<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Умный шкаф</title>
</head>
<body>
<header>
	<div id ="logo">
	 <a href="D:/SCK/index.php" title="Перейти на главную"> <span>У</span>мный <span>Ш</span>каф </a>
	</div>

	<div id= "menuHead">
		<a href="D:/SCK/about.php">
			<div style="margin-right: 5%">О нас</div> 
		</a>
		<a href="feedback.php">
			<div>Обратная связь</div>
		</a>
	</div>
	
	<div id= "regAuth">
		<a href ="regAuth.php">Регистрация</a>|<a href="auth.php">Авторизация
		</a>
	</div>
</header>
 
<div id= "wrapper">
<div id= "leftCol">
	<input type="text" placeholder="Имя" id="name" name="name">
	 <input type="text" placeholder="Email" id="email" name="email">
	  <input type="text" placeholder="Тема сообщения" id="subject" name="subject">
	  <textarea name="message" id="message"></textarea>
	   <input type="button" placeholder="done" id="done" name="send" value="Отправить">
</div>
</div>

<footer>
	<div id = "social">
	</div>
	<div id = rights>
Все права защищены &copy; <?=date ('Y')?>
	</div>
</footer>

</body>
</html>