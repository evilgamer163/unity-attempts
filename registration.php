<?php
	$page_title = "Регистрация";
	require "html/header.php";
?>

<main class="p-4">
<div class="container">
	<div class="row">
		<div class="col-8 offset-2 p-3">
			<h2>Регистрация</h2>
			<form action="php/reg.php" method="POST" class="reg-form">
				<label for="name">Имя</label>
				<input type="text" id="name" name="name" class="form-control mb-2">

				<label for="mail">Email</label>
				<input type="email" id="mail" name="mail" class="form-control mb-2">

				<label for="pass">Пароль</label>
				<input type="password" id="pass" name="pass" class="form-control mb-2">

				<div class="alert alert-danger mt-3 mb-0" id="error-block"></div>

				<button type="submit" class="btn btn-success mt-3">Отправить</button>
			</form>
		</div>
	</div>
</div>
</main>

<?php require "html/footer.php" ?>