<!DOCTYPE html>
<html>
   <head>
		<title>Films with Kevin Bacon</title>
		<meta charset="utf-8" />
		
		<!-- Links to provided files.  Do not edit or remove these links -->
		<link href="https://webster.cs.washington.edu/images/kevinbacon/favicon.png" type="image/png" rel="shortcut icon" />
		<script src="https://webster.cs.washington.edu/js/kevinbacon/provided.js" type="text/javascript"></script>

		<!-- Link to your CSS file that you should edit -->
		<link href="bacon.css" type="text/css" rel="stylesheet" />
</head>
<body>
		<div id="frame">
			<div id="banner">
				<a href="index.php"><img src="https://webster.cs.washington.edu/images/kevinbacon/mymdb.png" alt="banner logo" /></a>
				My Movie Database
			</div>
			
<div id="main">

    <?php
   

    /*** connection credentials *******/
$servername = "www.watzekdi.net";
$username = "watzekdi_cs393";
$password = "KevinBac0n";
$database = "watzekdi_imdb";
$dbport = 3306;

//////////////


/////////////////
/****** connect to database **************/

try {
$db = new PDO("mysql:host=$servername;dbname=$database;charset=utf8;port=$dbport", $username, $password);
}
catch(PDOException $e) {
echo $e->getMessage();
} 

    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    
    $first = $db->quote($firstname);
    $last = $db->quote($lastname);
    $actorId = $db->query("SELECT id FROM actors WHERE first_name LIKE $first AND last_name LIKE $last");
    $actorId2 = $db->query("SELECT id FROM actors WHERE first_name = 'Kevin' AND last_name ='Bacon'" );
    //echo($actorId);
   foreach($actorId as $i){
    $actorId = $db->quote($i["id"]);
    }
    
    foreach($actorId2 as $i){
    $actorId2 = $db->quote($i["id"]);
    }
    

    $movieId = $db->query("
    SELECT DISTINCT m.name,m.year
    FROM movies m 
    JOIN roles r1 ON r1.movie_id =m.id
    JOIN actors new ON r1.actor_id = new.id
    JOIN roles r2 ON r2.movie_id = m.id
    JOIN actors kevin on r2.actor_id = kevin.id
    WHERE new.id = $actorId
    AND kevin.id = $actorId2 
    ORDER BY year DESC" );
    ?>
    
   <h1>Results For <?=$firstname;?> <?=$lastname;?></h1>
   <p> Films with <?=$firstname;?> <?=$lastname;?> and Kevin Bacon</p>
   
   
   
   <table>
   	<tr>
   		<th>#</th>
   		<th>Title</th>
     	<th>Year</th>
    </tr>


    
<?php
	$i=0;
    foreach($movieId as $m){
   	$i=$i+1;
    $movieId = $db->quote($m["name"]);
    //////////////////

    ?>

    <tr>
      <td><?=$i;?></td>
      <td> <?= $m["name"]; ?></td>
      <td> <?= $m["year"];  ?> </td>
     </tr>
   <?php } ?>
   </tr>
   </table>
   </br>
   	<!-- form to search for every movie by a given actor -->
		<form action="search-all.php" method="get">
					<fieldset>
						<legend>All movies</legend>
						<div>
							<input name="firstname" type="text" size="12" placeholder="first name" autofocus="autofocus" /> 
							<input name="lastname" type="text" size="12" placeholder="last name" /> 
							<input type="submit" value="go" />
						</div>
					</fieldset>
				</form>
    	<form action="search-kevin.php" method="get">
					<fieldset>
						<legend>Movies with Kevin Bacon</legend>
						<div>
							<input name="firstname" type="text" size="12" placeholder="first name" /> 
							<input name="lastname" type="text" size="12" placeholder="last name" /> 
							<input type="submit" value="go" />
						</div>
					</fieldset>
				</form>
			</div> <!-- end of #main div -->
		
			<div id="w3c">
				<a href="https://webster.cs.washington.edu/validate-html.php"><img src="https://webster.cs.washington.edu/images/w3c-html.png" alt="Valid HTML5" /></a>
				<a href="https://webster.cs.washington.edu/validate-css.php"><img src="https://webster.cs.washington.edu/images/w3c-css.png" alt="Valid CSS" /></a>
			</div>
		</div> <!-- end of #frame div -->
	</body>

    
</html>