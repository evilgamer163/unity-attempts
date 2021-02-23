<?php
require_once "php/mysql_connect.php";

$sql = "SELECT * FROM `articles` WHERE `id` = :id";
$id = $_GET['id'];
$query = $pdo->prepare($sql);
$query->execute(['id'=>$id]);

$article = $query->fetch(PDO::FETCH_OBJ);


$page_title = $article->title;
require "html/header.php";
?>

<main class="p-4">
<div class="container">
<div class="row">
	<div class="col-12 col-md-8 p-3">
		<div class="jumbotron">
			<h1><?php echo $article->title ?></h1>
			<p><?php echo $article->text ?></p>
			<p><?php echo "Дата: " . date('d.m.Y', time($article->date)) ?></p>
			<p><?php echo "Автор: <a href='mailto:$article->autor'>$article->autor</a>" ?></p>
			<a href="/" class="btn btn-danger">Назад</a>
		</div>

		<div class="comments">
			<h3>Комментарии</h3>
			<form action="/news.php?id=<?php echo $_GET['id']?>" method="POST" class="message-form">
				<label for="comm"><strong>Оставьте ваш отзыв</strong></label>
				<textarea name="comm" id="comm" class="form-control"></textarea>

				<button type="submit" class="btn btn-success mt-3">Отправить</button>
			</form>

			<?php
				if($_POST['comm'] != '') {
					$comm = trim(filter_var($_POST['comm'], FILTER_SANITIZE_STRING));

					require_once "./php/mysql_connect.php";
				
					$sql = "INSERT INTO comments(comm, article_id) VALUES(?, ?)"; //sql-запрос
					$query = $pdo->prepare($sql); //подготовка запроса
					$query->execute([$comm, $_GET['id']]); //выполнение запроса
				}

				$sql = "SELECT * FROM `comments` WHERE `article_id` = :id ORDER BY `id` DESC";
				$query = $pdo->prepare($sql);
				$query->execute(['id' => $_GET['id']]);
				$comments = $query->fetchAll(PDO::FETCH_OBJ);

				foreach($comments as $comment) {
					echo "<p>$comment->comm</p>";
				}
			?>
		</div>
	</div>

	<?php require "html/aside.php" ?>
</div>
</div>
</main>

<?php require "html/footer.php" ?>