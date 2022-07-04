<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Отдел вневедомственной охраны по городу Тверь</title>
	<link rel="stylesheet" type="text/css" href="source\css\style.css">
</head>
<body>
	<header>
	<div class="header">
		<a href="index.php"><img src="source\image\logo.png"></a>
		<ul>
			<li><a href="index.php">Главная</a></li>
			<li><a href="tasks.html">Задачи и функции отдела</a></li>
			<li><a href="activity.html">Деятельность</a></li>
			<li><a href="contacts.html">Контакты</a></li>
		</ul>
	</div>
	</header>
	<main>
		<div class="page_header" style="background-image: url(source/image/h_back.jpg)">
		<h1>Отдел вневедомственной охраны в городе Тверь</h1>
		<h2>Центральная охрана обьектов,квартир,гаражей и земельных участков</h2>
	</div>
	<div class="main_info">
		<div class="left_col">
				<details>
					<summary>Меню</summary>
					<ul>
						<li><a href="index.php">Главная</a></li>
						<li><a href="tasks.html">Задачи</a></li>
						<li><a href="activity.html">Деятельность</a></li>
						<li><a href="contacts.html">Контакты</a></li>
					</ul>
				</details>
		</div>
		<div class="right_col">
			<div class="topic">
				<p class="topic_task">Общая характеристика отдела</p>
			<div class="topic_first">
				<img src="source\image\sotrud.jpg" class="topic_img">
				<p class="topic_text">История отдельного батальона полиции отдела вневедомственной охраны по городу Твери — филиала ФГКУ «УВО ВНГ России по Тверской области» — началась с 20 февраля 1980 года</p>

			</div>
			</div>
			<div class="topic">
				<p class="topic_header">Интересные факты отдела</p>
				<p class="topic_text">Почти четыре десятилетия многие жители Твери доверяют защиту имущества только вневедомственной охране.</p>
				<p class="topic_text">14 августа 1992 года Правительство Российской Федерации приняло «Положение о вневедомственной охране при органах внутренних дел Российской Федерации». С 1 января 2012 года подразделения вневедомственной охраны получили статус казённых учреждений. Согласно Закону «Об исполнении бюджета за 2012 года» в 2012 году на обеспечение деятельности вневедомственной охраны было израсходовано 89 млрд рублей, поступления в бюджет за услуги, предоставляемые вневедомственной охраной, составили 48,4 млрд рублей.</p>
			<div class="topic">
				<p class="topic_header">Сотрудники работают слаженно и оперативно</p>
				<p class="topic_text">Патрульные автомобили батальона охраны имеют преимущество на дороге и прибывают на охраняемый объект в максимально короткое время, обеспечивая надежную защиту имущества. </p>
			</div>
			<div class="topic">
				<p class="topic_header">Сотрудникам каждый день приходиться рискововать своей жизнью</p>
				<p class="topic_text">Полицейские батальона обладают правовой грамотностью, навыками меткой стрельбы, а также боевыми приемами борьбы.</p>
				<p class="topic_text">Регулярно они отрабатывают свои умения на полигоне, в тире, в спортзале, отмечают в областном управлении Росгвардии.</p>
			</div>
		</div>
		<div class="topic">
				<p class="topic_header">Оставьте комментарий</p>	
				<form name="comment" action="comment.php" method="post">
    		<p>Имя:</p>
    		<input type="text" name="name" required style="border: 2px solid;border-color: #03015e; border-radius:10px; width: 25%;">
    		<p>Комментарий:</p>
    		<textarea type="text" name="text_comment" cols="30" rows="1" required style="border: 2px solid;border-color: #03015e; border-radius:10px;"></textarea>
    		<br>
    		<input type="hidden" name="page_id" value="150">
    		<input type="submit" value="Отправить" style="border: 2px solid;border-color: #03015e;border-radius:10px; width: 25%;">
    		<p class="topic_header">Комментарии</p>
    		<?php
 				$page_id = 150;
  			$mysqli = new mysqli("localhost", "root", "", "comments");// Подключается к базе данных
  			$result_set = $mysqli->query("SELECT name, text_comment FROM `comment` WHERE `page_id`='$page_id'"); 
  			while ($row = $result_set->fetch_assoc()) {
  			echo "<p style=\" word-break: break-all;\">";
    		echo implode(": ",$row);
    		echo "</p>";
  			}
				?>
				</form>
		</div>
	</div>
</div>
	</main>
	<footer>
		<div class="footer">
			<p>© 2021 Сайт</p>
		</div>
	</footer>
</body>
</html>