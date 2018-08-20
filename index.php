<!DOCTYPE html>
<html>
  <form action="skript-form.php" method="post">
	<div style="background-color: #D2FFEB; width: 350px;border: 0.5px double #000040;">
	<h3 style="color: #FF5F9A">Заполните форму обратной связи</h3>
	<b><h2>Напишите свое имя:</h2>
	<p><input type="text" name="name" required value="<?=$name;?>" size="25" placeholder="Введите свое имя" style="width: 300px;"></p>
	<b><h2>Заполните свой email</h2>
	<p><input type="text" name="email" required size=30 placeholder="Введите свой email:" style="width: 300px;"></p>
	<h2>Текст сообщения:</h2>
	<textarea name="message" required  cols="40" rows="5" placeholder="Введите текст сообщения"></textarea>
	<p><input type="submit" name="submit" value="Отправить" style="width: 300px;"></p><br>
	</div>
  </form>
</html>