<!DOCTYPE html>
<html>
<?php
	$movie = $_GET["film"];
	$movieinfo = file("$movie/info.txt");
	list($name,$year,$rating)=$movieinfo;
	$overview = file("$movie/overview.txt");
	$picture = "$movie/overview.png";
?>

	<head>
		<title>Rancid Tomatoes - <?=$name?></title>
		<meta charset="utf-8" />
		<link href="movie.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div class ="banner">
			<img src="https://webster.cs.washington.edu/images/rancidbanner.png" alt="Rancid Tomatoes" />
		</div>

		<h1>
			<strong>
			<?=$name;?> (<?=$year;?>)
			</strong>
		</h1>

<div id ="container">
		<?php
				if ($rating >=60) $grade = "fresh";
				else $grade = "rotten"
			?>
	<div id="top">
				<img src="https://webster.cs.washington.edu/images/<?=$grade?>large.png" alt="Rotten" />
				<strong><?=$rating?>%</strong>
			</div>
		<div id ="sidebar"> <!--the one of introduction details of the movie-->
				<div>
					<img src=<?=$picture?> alt="general overview" />
				</div>
				
				<dl>
					<?php
						foreach($overview as $x){
							$y = explode(":",$x);
						
							echo "<dt><strong>".$y[0]."</strong></dt>";
							echo"<dd>".$y[1]."</dd>";
							
						}
					?>
				</dl>
		
		</div>  <!--Div for sidebar-->


		<?php
			$globe = glob("$movie/review*.txt");   #globe will store all the content of reviews
			$c=count($globe);  #to get how many globe (reviews) are here
			if (is_int($c/2)){
				$mid=$c/2;
				
			}
			else{
				$mid =round($c/2, 0, PHP_ROUND_HALF_UP);
			}
		
		?>




	<div id ="review">
		
			
		<div id="column1">
		
			<?php
				for($i = 0;$i<=$mid-1;$i++){
					$f=$globe[$i]; // each f will be an review
					$review = file("$f"); // to create new variable s to store each review files(so we can section them in the future)
					list($comment,$like,$name,$source)=$review;
					#echo $f;(f will be review 1 review 2....blah)
					$image = strtolower($like);
					echo "<p><img src='https://webster.cs.washington.edu/images/$image.gif' alt='$image'/><q class = block>".$comment."</q></p>";
					echo "<p><img src='https://webster.cs.washington.edu/images/critic.gif' alt='Critic' />".$name."</br>".$source."</p>";
				}
			?>
		
		</div>

		<div id="column2">	
			<?php
			for($i = $mid;$i<=$c-1;$i++){
				$f=$globe[$i];
				$review = file("$f"); // to create new variable s to store each review files(so we can section them in the future)
				list($comment,$like,$name,$source)=$review;
				echo "<p><img src='https://webster.cs.washington.edu/images/$image.gif' alt='$image'/><q class = block>".$comment."</q></p>"; #single quote here of the html inside of php
				echo "<p><img src='https://webster.cs.washington.edu/images/critic.gif' alt='Critic' />".$name."</br>".$source."</p>";
				}
				?>
		</div>
	</div>

		
			<p id="end">(1-10) of 88</p>
			
		<div id="top">
			<img src="https://webster.cs.washington.edu/images/<?=$grade?>large.png" alt="Rotten" />
			<strong><?=$rating?>%</strong>
		</div>
		
		<div id ="source">
			<a href="https://webster.cs.washington.edu/validate-html.php"><img src="https://webster.cs.washington.edu/images/w3c-html.png" alt="Valid HTML5" /></a><br />
			<a href="https://webster.cs.washington.edu/validate-css.php"><img src="https://webster.cs.washington.edu/images/w3c-css.png" alt="Valid CSS" /></a>
		</div>
	</div><!--for CONTAINER-->
		
		<div class ="banner">
			<img src="https://webster.cs.washington.edu/images/rancidbanner.png" alt="Rancid Tomatoes" />
		</div>
	</body>
</html>
