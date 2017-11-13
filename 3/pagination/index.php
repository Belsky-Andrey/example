<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Bootstrap -->
	<link href="stylesheet/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				
				<?php 
					$page = $_GET['page'];
				?>

				<h1>Cтраница
					<?php 
						if ($page){
							echo "<span> $page</span>";
						}
						else {
							echo "<span> главная</span>";
						}
					?>
				</h1>

				<ul class="pagination">
					<!-- <li><a href="#">«</a></li> -->
					<li><a href="?page=1">1</a></li>
					<li><a href="?page=2">2</a></li>
					<li><a href="?page=3">3</a></li>
					<!-- <li><a href="#">»</a></li> -->
				</ul>

			</div>	
		</div>
	</div>

</body>
</html>

