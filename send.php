<?php

	//let`s get data from form elements

	$Login = $_POST['Login'];
	$Password = $_POST['Password'];
	$Email = $_POST['Email'];
	$Tel = $_POST['Tel'];


	
	//processing of received data

	//transformation type to data
	$Login = HTMLSPECIALCHARS($Login);
	$Password = HTMLSPECIALCHARS($Password);
	$Email = HTMLSPECIALCHARS($Email);
	$Tel = HTMLSPECIALCHARS($Tel);

	//decode URL link
	$Login = urldecode($Login);
	$Password = urldecode($Password);
	$Email = urldecode($Email);
	$Tel = urldecode($Tel);
	
	//delete type of space
	$Login = trim($Login);
	$Password = trim($Password);
	$Email = trim($Email);
	$Tel = trim($Tel);



	//send recived data to the mail

	if (mail("zkulcickij@gmail.com",
			"Новое данные пользователя с сайта",
			"Логин: ".$Login."\n".
			"Пароль: ".$Password."\n".
			"Email: ".$Email."\n".
			"Телефон: ".$Tel,
			"From: no-reply@mail.ru \r\n")
	) {
		echo('Письмо успешно отправилось!');
	}

	else {
		echo('Есть ошибки! Проверьте данные');
	}


?>














