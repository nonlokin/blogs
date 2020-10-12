<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php 
			

			$database = [
				["title"=>"Among Us и два года на взлёт: в чём секрет игры?", "short_text"=>"Два года назад, в июне 2018 года, на Android и iOS вышла игра Among Us. Её создала студия InnerSloth, в которой работало всего три человека, и ни один из них не разбирался в маркетинге. Да и сама игра была сделана, что называется, на коленке: даже онлайновый мультиплеер добавили лишь по требованию игроков, тогда как разработчики собирались обойтись локальными сессиями.
Через некоторое время Among Us выпустили в Steam, что не особо помогло. Первые полгода в неё играло три десятка человек, и разработчики уже подумывали закрыть сервера. Но потом внезапно что-то сдвинулось с места. 20 сентября игра двухлетней давности уверенно заняла первое место в чартах продаж Steam, потеснив свежую и популярную Fall Guys: Ultimate Knockout. Общее количество игроков на РС и мобильных устройствах превысило 86,6 млн человек, а прибыль скакнула до 4,5 млн долларов — да что, чёрт возьми, происходит?
","img"=>"img/amongus.jpg","users"=>"user12"],
				["title"=>"World of Warcraft: Shadowlands отложили «до конца года»", "short_text"=>"Blizzard неожиданно объявила, что премьера расширения Shadowlands для World of Warcraft не состоится 27 октября.
Основная часть контента уже готова, однако требуется дополнительная полировка и балансировка, а также внесение изменений — последнее особенно касается эндгейм-контента. Разработчики напоминают, что Blizzard всегда была гарантом качества (кхем, Reforged), поэтому лучше отложить премьеру и сразу реализовать потенциал проекта.
13 октября для World of Warcraft выйдет препатч Shadowlands, который введёт кое-какие нововведения и свежий фундамент. В том числе обновленный прогресс персонажа и новые возможности для кастомизации.
Официальная премьера World of Warcraft: Shadowlands теперь состоится до конца года.","img"=>"img/wow.jpg","users"=>"user30"],
				["title"=>"Триквел «Мира Юрского периода» перенесли на 2022 год", "short_text"=>"Студия Universal решила перенести триквел «Мира Юрского периода» на год — с июня 2021 года на 10 июня 2022-го. 
Самое интересное, что фильм уже практически досняли — команде осталось всего три недели работы. Судя по всему, студия не хочет рисковать с премьерой триквела, пытаясь создать идеальные условия для его релиза — ведь франшиза принесла Universal уже больше 5 млрд долларов. 
А в связи с массовым перемещением крупных премьер на 2021 год, календарь рынка изменился, из-за чего, к примеру, страдают заключённые рекламные контракты. 
На новой дате картина, кстати, будет соревноваться с некой безымянной лентой Disney. ","img"=>"img/mup.jpg","users"=>"user50"],
				["title"=>"Представлены системные требования беты Call of Duty: Black Ops Cold War
", "short_text"=>"Activision представила системные требования беты Call of Duty: Black Ops Cold War, которая на РС пройдёт с 15 по 19 октября. 
В целом у шутера умеренные аппетиты. 
Минимальные требования
ОС — 64-битные Windows 7 и 10 
Процессор — Intel Core i5-2500К или эквивалент AMD 
Видеокарта — GeForce GTX 670 (или GTX 1650) или AMD Radeon HD 7950
Оперативная память — 8 ГБ
Место на диске — 45 ГБ. 
Рекомендуемые
ОС — 64-битная Windows 10 
Процессор — Intel Core i7-4770К или эквивалент AMD 
Видеокарта — GeForce GTX 970 (или GTX 1660 Super) или AMD Radeon R9 390 (или RX 580)
Оперативная память — 16 ГБ
Место на диске — 45 ГБ. 
","img"=>"img/cw.jpg","users"=>"user66"],
				["title"=>"Авторы World of Warcraft тоже хотели бы увидеть Генри Кавилла в роли Артаса", "short_text"=>"Авторы World of Warcraft заявили, что тоже хотели бы увидеть на экране Генри Кавилла в роли Артаса.
Предложения о таком выборе для роли прозвучали ещё месяц назад, когда в сети появился фанатский постер с Кавиллом, но тогда его в первую очередь поддерживали фанаты Warcraft.","img"=>"img/arthas.jpg","users"=>"user74"],
			["title"=>$_GET["title"], "short_text"=>$_GET["short_text"],"img"=>$_GET["img"],"users"=>$_GET["users"]]
			];

		 ?>
	</div>
	<?php
		$connect = mysqli_connect("127.0.0.1","root","","myFirstDB");


		if($connect==false){
			echo "связь не установлена";
		} else{
			echo "есть контакт";
		}


		$text_query = "SELECT * FROM posts";


		$query = mysqli_query($connect, $text_query); // это есть наша таблица полностью

		if($query==false){
			echo "запрос не работает";
		} else{
			echo "запрос работает";
		}
		$result1 = $query->fetch_assoc();
		$result2 = $query->fetch_assoc();
		$result3 = $query->fetch_assoc();
		$result4 = $query->fetch_assoc();
		$result5 = $query->fetch_assoc();

		echo $result3["user"];
		echo $result3["title"];
	?>
	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<?php
			$correct = "12345";
			if($_GET["password"] == $correct){
				echo "<h1>Добрый день,".$_GET["login"]."</h1>";
			}
		?>		
		<h1 class="text-center">БЛОГ</h1>
		<hr>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php


			 	echo "<h1>". $result1["title"]."</h1>";
			 	echo "<img src=".$result1["img"]." class='w-100'>";
			 	echo "<p class=''>".$result1["text"]."</p>";
			 	echo "<a href='blog1.php' class='font-weight-bolder' style='font-size:25px;'>Далее...</a>";


			 	echo "<h1>". $result2["title"]."</h1>";
			 	echo "<img src=".$result2["img"]." class='w-100'>";
			 	echo "<p class=''>".$result2["text"]."</p>";
			 	echo "<a href='blog2.php' class='font-weight-bolder' style='font-size:25px;'>Далее...</a>";


			 	echo "<h1>". $result3["title"]."</h1>";
			 	echo "<img src=".$result3["img"]." class='w-100'>";
			 	echo "<p class=''>".$result3["text"]."</p>";
			 	echo "<a href='blog3.php' class='font-weight-bolder' style='font-size:25px;'>Далее...</a>";


			 	echo "<h1>". $result4["title"]."</h1>";
			 	echo "<img src=".$result4["img"]." class='w-100'>";
			 	echo "<p class=''>".$result4["text"]."</p>";
			 	echo "<a href='blog4.php' class='font-weight-bolder' style='font-size:25px;'>Далее...</a>";


			 	echo "<h1>". $result5["title"]."</h1>";
			 	echo "<img src=".$result5["img"]." class='w-100'>";
			 	echo "<p class=''>".$result5["text"]."</p>";
			 	echo "<a href='blog5.php' class='font-weight-bolder' style='font-size:25px;'>Далее...</a>";
			 ?>

		</div>
	</div>
</body>
</html>