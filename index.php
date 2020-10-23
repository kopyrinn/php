<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

	<?php
	
		$text = "<h1>Vasya</h1>";
		$div = "<div style='' class=''></div>";
			
	?>

	<?php
		echo "Hello!";
		echo $div;
		echo $text;
	?>	
	<?php
		$array = ["kolya","vasya","harry"];		//массив
		echo $array[0];
		echo $array[2];

		for ($i=0; $i<3 ; $i=$i+1) {  //цикл
			echo $array[$i];
		}

	?>
	<h1>
		<?php
			echo $array[0];
		?>		
	</h1>
	<?php

	?>


	<?php 
		$val = [ //ассоциативный массив ака объект
			"name" => "Nick",
			"age" => 14,
			"hobby" => "swim"
		];

		for ($i=0; $i < 3; $i++) { 
			$val["name"];
			object.name
		}

		$arrayVal = [ //ассоц массив внутри массива
			[
				"name" => "Nick",
				"age" => 14,
				"hobby" => "swim"
			],
			[
				"name" => "Vova",
				"age" => 15,
				"hobby" => "prog"
			],

		]
		for ($i=0; $i < 2 ; $i++) { 
			echo $arrayVal[$i]["name"];	
		}
		
	?>

	<h1>
		<?php
			echo $val["name"];

			
		?>
	</h1>


		<?php
			$img = ["img/2.png", "img/3.png"]

			echo "<img src='" + $img[0] + "'>";
		?>

</body>
</html>