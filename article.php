<?php 
	if($_COOKIE['mail'] == '') {
		header("Location: /registration.php");
		exit();
	} 
?>

<?php
	$page_title = "Добавление статьи";
	require "html/header.php";
?>

<main class="p-4">
<div class="container">
	<div class="row">
		<div class="col-8 offset-2 p-3">
			<h2>Добавление статьи</h2>
			<form action="php/add_article.php" method="POST" class="article-form">
				<label for="title">Заголовок</label>
				<input type="text" id="title" name="title" class="form-control mb-2">

				<label for="text">Текст статьи</label>
				<textarea id="text" name="text" class="form-control mb-2"></textarea>

				<div class="alert alert-danger mt-3 mb-0" id="error-block"></div>

				<button type="submit" class="btn btn-success mt-3">Отправить</button>
			</form>
		</div>
	</div>
</div>
</main>

<?php require "html/footer.php" ?>