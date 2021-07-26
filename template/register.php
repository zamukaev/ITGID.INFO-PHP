<?php
/**
 * register page template
 */
if(isset($_POST['submit'])){
	$err = [];
	if(strlen($_POST['login']) < 6 AND strlen($_POST['login']) >30){
		$err[] = 'логин меньше 6 или больше 30';
	}
	if(strlen($_POST['password']) < 6){
		$err[] = 'пароль меньше 6';
	}
	if(isLoginExist($_POST['login'])){
		$err[] = 'логин сушествует ';
	}
	if(count($err) == 0){
		createUser($_POST['login'], $_POST['password']);
		header("Location: /login");
		exit();
	}
	
	else{
			echo 'Ошибка регистрации';
			foreach($err as $error){
				echo $error.'<br>';
			}
		}
}

require_once 'header.php';
?>
<div class="content pure-u-1 pure-u-md-3-4">
	<h2>Регистрация</h2>
	<form method="POST"  class="pure-form pure-form-stacked">
			Login: <input type="text" name="login" required><br>
			Pass: <input type="text" name="password" required><br>
			<input type="submit" name="submit" value="Регистрация" class="pure-button-primary pure-button ">
	</form>
	<p>
	<a class="pure-button pure-button-primary" href="/">Назад</a>
	</p>
	<?php echo $error.'<br>';?>
	<?php require_once 'footer.php'; ?>
</div>
</div>
</div><!-- layout end -->