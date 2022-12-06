<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
			crossorigin="anonymous"
		/>

		<title>Pan Tadeusz</title>
	</head>
	<body>
		<header class="container, text-center">
			<h1>
				Pan Tadeusz, czyli ostatni zajazd na Litwie: historia szlachecka z roku
				1811 i 1812 we dwunastu księgach wierszem
			</h1>
		</header>

		<div class="container">
			<div class="row">
				<div class="col-4">
					<h2>Spis tresci</h2>
					<ul>
						<li><a href='./index.php'>Strona Glowna</li>
						<?php
							for($i=1; $i<=12; $i++){
								// print("<li><a href='/Pan_Tadeusz/k{$i}.html'>Ksiega {$i}</a></li>");
								print("<li><a href='./index.php?i=$i&name=Test'>Ksiega $i</a></li>");
							}
						?>
						<!-- <li><a href="/Pan_Tadeusz/k1.html">Ksiega 1</a></li>
						<li><a href="/Pan_Tadeusz/k2.html">Ksiega 2</a></li>
						<li><a href="/Pan_Tadeusz/k3.html">Ksiega 3</a></li>
						<li><a href="/Pan_Tadeusz/k4.html">Ksiega 4</a></li>
						<li><a href="/Pan_Tadeusz/k5.html">Ksiega 5</a></li>
						<li><a href="/Pan_Tadeusz/k6.html">Ksiega 6</a></li>
						<li><a href="/Pan_Tadeusz/k7.html">Ksiega 7</a></li>
						<li><a href="/Pan_Tadeusz/k8.html">Ksiega 8</a></li>
						<li><a href="/Pan_Tadeusz/k9.html">Ksiega 9</a></li>
						<li><a href="/Pan_Tadeusz/k10.html">Ksiega 10</a></li>
						<li><a href="/Pan_Tadeusz/k11.html">Ksiega 11</a></li>
						<li><a href="/Pan_Tadeusz/k12.html">Ksiega 12</a></li> -->
					</ul>
				</div>
				<div class="col-8">
					<?php
					if (isset($_GET['i'])) {
					$i = $_GET['i'];
					include_once("k$i.html");
					}
					else {
						print("
						<img
						src='./248_159056408810.jpg'
						alt='Pan tadeusz'
						class='img-fluid'
						/>");
					}
					?>
					<!-- <img
						src="./248_159056408810.jpg"
						alt="Pan tadeusz"
						class="img-fluid"
					/> -->
				</div>
			</div>
		</div>
		<footer class="containter, text-center">
			<p class="lead">&copy; Michał Kubacki</p>
		</footer>
		<script
			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
			integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
			integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
			crossorigin="anonymous"
		></script>
	</body>
</html>
