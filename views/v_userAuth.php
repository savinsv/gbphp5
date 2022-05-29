<?php
/**
 * Шаблон редактора
 * ================
 * $text - текст статьи
 */
?>

<form method="post">
	<input name="login" placeholder="login" required/>
	<input name="password" placeholder="password" required/>

<!-- 	<textarea name="text"><?=$text?></textarea>
 -->
	<br/>
	<input type="submit" value="Вход" />
	<a href="index.php?c=User&action=reg" >Регистрация</a>
</form>
