<?php

require "db.php";//подключаемся файл с подключением бд;
	   
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$name = trim(htmlspecialchars($name));// убираем пробелы и лишние символы;
		$email = trim(htmlspecialchars($email));
		$message = trim(htmlspecialchars($message));
		
		if(isset($_POST["submit"]))//если была нажата кнопка отправить;
		{
			
        $query = "INSERT INTO `comment`(`name`, `email`, `message`) VALUES (:name,:email,:message)";
		$result = $pdo->prepare($query);		
		$result->execute(array(
		   ':name' => $name,
		   ':email' => $email,
		   ':message' => $message));
		
        echo "Спасибо $name";


		}else{
			echo "Что-то пошло не так попробуйте заного";
		}
   
?>