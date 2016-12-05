<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Bootstrap 101 Template</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container" id="header-wrapper">
			<nav class="topmenu-container">
				<ul class="topmenu">
					<li><a href="index.php">Главная</a></li>
					<li><a href="#">Портфолио</a></li>
					<li><a href="services.php">Услуги</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</nav>
			
			<!-- slider -->
			<div id="slider" class="carousel slide" data-ride="carousel" data-interval="false">
				<!-- controls -->
				<div class="carousel-inner">
					<!-- slides -->
					<div class="item active">
						<div class="container slide1-wrapper">
								<div class="logo">
									<h1>Astra</h1>
									<ul>
										<li>стрижки</li>
										<li>окрашивание</li>
										<li>прически</li>
										<li>маникюр</li>
										<li>шелак</li>
										<li>мак-мак</li>
									</ul>
								</div>
		
								<a class="btn" href="#slider" class="right carousel-control" data-slide="next">ЗАПИСАТЬСЯ</a>
								
								<div id="valery">
									<h2>Валерия Полякова</h2>
									<div class="photo-wrapper">
										<img src="img/valery_2.png" alt="Валерия Полякова" class="photo">
									</div>
								</div>

								<div class="hello">
									<div class="row">
										<div class="col-xs-4">Привет!</div>
										<div class="col-xs-8">
											Меня зовут Лера Полякова. Я самый хороший парикмахер на всей планете!<br>
											Я умею шить, вышивать, даже зашиваться! Все, что угодно могу сделать. А еще могу подстричь вас быстро и дешево, потому что я только начинаю этим заниматься, и кто знает, может так произойдет, что по неосторожности отрежу ухо, но я ведь только начинаю, так что думаю, что здесь нет ничего страшного!<br>
											Жду вас у себя в коммуналке по адресу ул. Десантников, 12.
										</div>
									</div>
								</div>
						</div>
					</div>
					<div class="item">
						<div class="container slide2-wrapper">
							<p>Звони, и мы согласуем все детали</p>
							<p>8-999-204-73-63</p>
						</div>
					</div>
				</div>
			</div>

<!--
			<div class="logo">
				<h1>Astra</h1>
				<ul>
					<li>стрижки</li>
					<li>окрашивание</li>
					<li>прически</li>
					<li>маникюр</li>
					<li>шелак</li>
					<li>мак-мак</li>
				</ul>
			</div>

			<a class="btn" href="/">ЗАПИСАТЬСЯ</a>
			
			<div id="valery">
				<h2>Валерия Полякова</h2>
				<div class="photo-wrapper">
					<img src="img/valery_2.png" alt="Валерия Полякова" class="photo">
				</div>
			</div>

			<div class="hello">
				<div class="row">
					<div class="col-xs-4">Привет!</div>
					<div class="col-xs-8">
						Меня зовут Лера Полякова. Я самый хороший парикмахер на всей планете!<br>
						Я умею шить, вышивать, даже зашиваться! Все, что угодно могу сделать. А еще могу подстричь вас быстро и дешево, потому что я только начинаю этим заниматься, и кто знает, может так произойдет, что по неосторожности отрежу ухо, но я ведь только начинаю, так что думаю, что здесь нет ничего страшного!<br>
						Жду вас у себя в коммуналке по адресу ул. Десантников, 12.
					</div>
				</div>
			</div>
-->
		</div>

		<div class="container main-container">
			<div class="row">
				<div class="col-xs-4 sidebar">
					<h3>РУБРИКИ</h3>
					<ul>
						<li><a href="#">Окрашивания</a></li>
						<li><a href="#">Стрижки</a></li>
						<li><a href="#">Новости</a></li>
						<li><a href="#">Разное</a></li>
					</ul>
				</div>