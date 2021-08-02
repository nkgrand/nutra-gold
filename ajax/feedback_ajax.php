<?php
 $name = htmlspecialchars($_POST['name']);
 $name2 = htmlspecialchars($_POST['name2']);
 $tel = htmlspecialchars($_POST['tel']);
 // $email = htmlspecialchars($_POST['email']);
 // $subject = htmlspecialchars($_POST['subject']);
 // $message = htmlspecialchars($_POST['message']);
 $kg = htmlspecialchars($_POST['kg']);
 if($name == '' || $name2 == '' || $tel == '' ) {
	echo 'Заполните все поля';
exit;
}
	//Отправка 
	
	$message = "Имя: $name\r\nФамилия: $name2\r\nТелефон: $tel\r\nВес товара: $kg\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
	// $message = "Имя: $name\r\nФамилия: $name2\r\nТелефон: $tel\r\nВес товара: $kg\r\n;
	$headers = 'From: <info.ludmart@gmail.com>'. "\r\n" . 'Reply-to: <info.ludmart@gmail.com>' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	if (mail("<info.ludmart@gmail.com>",$subject, $message, $headers))
		echo "";
	else	
		echo "ВАША ЗАЯВКА НЕ ОТПРАВЛЕНА";
?>