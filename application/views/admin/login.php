<form action="" method="post">
	<h1>Вход в Админку</h1>
	<?php if($error) echo "<strong>Неверная пара логин-пароль</strong><br/>"; ?>
	<span>Логин: </span><input name="login" value=""/><br/>
	<span>Пароль: </span><input name="pass" value=""/><br/>
	<input type="submit" name="logbtn" value="Вход"/>
</form>  