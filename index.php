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
			$database =[
				[
					"title" => "Статья 1",
					"text" => "lorem",
					"img" => "img/1.jpg",
					"user" => "user5"
				],
				[
					"title" => "Статья 2",
					"text" => "lorem",
					"img" => "img/2.jpg",
					"user" => "user522"
				],
				[
					"title" => "Статья 3",
					"text" => "lorem",
					"img" => "img/3.jpg",
					"user" => "user53"
				],
				[
					"title" => "Статья 4",
					"text" => "lorem",
					"img" => "img/4.jpg",
					"user" => "user54"
				],
				[
					"title" => "Статья 5",
					"text" => "lorem",
					"img" => "img/5.jpg",
					"user" => "user55"

				],
				[
					"title" => "Статья 5",
					"text" => "lorem",
					"img" => "img/5.jpg",
					"user" => "user55"

				],
				[
					"title" => $_GET["title"],
					"text" => $_GET["text"],
					"img" => $_GET["img"],
					"user" => $_GET["user"]
				],
				[
					"title" => "Привет всем",
					"text" => "фывфывыв",
					"img" => "img/5.jpg",
					"user" => "user55"

				],
			]
		 ?>
	</div>
	<?php

		$connect = mysqli_connect("127.0.0.1", "root", "", "myFirstDB");

		if ($connect==false){
			echo "Подключение отсутствует";
		} else {
			echo "Вы подключились к БД";
		}


	
		$text_zaprosa = "SELECT * FROM posts";

		$zapros = mysqli_query($connect, $text_zaprosa); //мы взяли всю таблицу
	
		if($zapros == false) {
			echo "Запрос не работает!";
		} else {
			echo "Запрос работает!";
		}

		$stroka1 = $zapros->fetch_assoc(); //когда феч ассок сработал 1 раз сохранили строку номер 1
		$stroka2 = $zapros->fetch_assoc(); //когда феч ассок сработал 2 раз сохранили строку номер 2
		echo $stroka1["title"];
		echo $stroka2["title"];

	?>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">БЛОГ</h1>
		<hr>
		<div class="col-" style=""> 
			<h1>
				<input type="" name="">
			 <?php 
             	echo "<h1 style= 'background-color: green;'>". $stroka1["title"] ."</h1>";
             	echo "<img src = '". $stroka1["img"]."' class= 'w-100'></img>";
             	echo "<p>". $stroka1["text"]."</p>";
             	echo "<p>". $stroka1["user"]."</p>";
             	echo "<form action='admin.php' method='GET'>";
             	echo "<input type='hidden' name='name'  value='kolya'>";
             	echo "<button>asdasdsa </button>";
             	echo "</form>";

			 ?>

			 <a href="admin.php">открыть</a>

		</div>
	</div>
</body>
</html>


