<div class="col-12 col-md-8 p-3">
	<?php 
		require_once "php/mysql_connect.php";

		$sql = "SELECT * FROM articles ORDER BY `date` DESC";
		$query = $pdo->query($sql);
		while($row = $query->fetch(PDO::FETCH_OBJ)) {
			echo "<h2>$row->title</h2>
				<p>$row->autor<p>
				<a href='/news.php?id=$row->id' class='btn btn-warning mb-4'>Читать далее</a>
			";
		}
	?>
	
</div>