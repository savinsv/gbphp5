<?php
/**
 * Шаблон редактора
 * ================
 * $text - текст статьи
 */
?>

<form method="post">
	<label for="surname">Фамилия</label>
	<input name="surname" id="surname" placeholder="Фамилия" required/>
	<label for="name">Имя</label>
	<input name="name" id="name" placeholder="Имя" required/>
	<label for="patronymic">Отчество</label>
	<input name="patronymic" id="patronymic" placeholder="Отчество"/>
	<br/>
	<label for="login">Login</label>
	<input name="login" id="login" placeholder="login" required/>
	<label for="password">Пароль</label>
	<input name="password" id="password" placeholder="password" required/>
	<label for="email">Электронная почта</label>
	<input name="email" id="email" pattern=".+@.+\..+" placeholder="username@domaine.com" required/>

	<br/>
	<input type="submit" value="Зарегистрировать" />
</form>
