<?php
	$page_title = "Обратная связь";
	require "html/header.php";
?>

<main class="p-4">
<div class="container">
	<div class="row">
   <div class="col-8 offset-2 p-3">
			<h2>Обратная связь</h2>
			<form action="php/reg.php" method="POST" class="message-send-form">
				<label for="name">Имя</label>
				<input type="text" id="name" name="name" class="form-control mb-2">

				<label for="mail">Email</label>
				<input type="email" id="mail" name="mail" class="form-control mb-2">

            <label for="mess">Сообщение</label>
            <textarea name="mess" id="mess" class="form-control mb-2"></textarea>

				<button type="submit" class="btn btn-success mt-3">Отправить</button>
			</form>
		</div>
	</div>
</div>
</main>

<?php require "html/footer.php" ?>