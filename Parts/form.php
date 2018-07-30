<?php
require "header.php";
?>
<center><h2>Так же приглашаем ремеслеников к сотрудничеству</h2><center></center></center>
<form action="" method="post" name="tast">
	<h3>Оставить сообщение</h3>
			<input type="text" name="name" placeholder="Ваше имя..." required />
		
			<br>
			"Напишите нам сообщение."
			<br>
			 <textarea name="message" rows="5" cols="45" > </textarea></p>
			
			<input name="submit" type="submit" value="отправить">
</form>
<?php
if ($_POST["submit"]){
print_r($_POST);
mail("n.81@mail.ru",'здравствуйте вам сообщение от сайта "ПАХОМиК"',"имя:   ".$_POST[name]."     сообщение:   ".$_POST[message]);
mail("cris19721972@gmail.com",'здравствуйте вам сообщение от сайта "ПАХОМиК"',"имя:   ".$_POST[name]."     сообщение:   ".$_POST[message]);


}
?>
