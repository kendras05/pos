<html>
	<head>
		<link rel="stylesheet" href="app.css"/>

	<body>
		<?php $title = "Dev Tiki Bar Point of Sale System"; 
		
		  function button($type, $name){
							echo "<button type=$type  value='' name=$name/>";
 }	
	
		
?>

<fieldset class="screen">

		<h1><?php echo $title; ?></h1>
		
		
		<div class="border">
		<button class="button" value ="" name ="0"/>0</button>
		<button class="button" value ="" name ="1"/>1</button>
		<button class="button" value ="" name ="2"/>2</button>
		<button class="button" value ="" name ="3"/>3</button>
		<button class="button" value ="" name ="4"/>4</button>
		<button class="button" value ="" name ="5"/>5</button>
		<button class="button" value ="" name ="6"/>6</button>
		<button class="button" value ="" name ="7"/>7</button>
		<button class="button" value ="" name ="8"/>8</button>
		<button class="button" value ="" name ="9"/>9</button>
		<button class="button" value ="" name ="+"/>+</button>
<br>
		<form action="/submit.php" method="POST">
		<input type="submit" value="Submit">


</fieldset>		
</body>
<html>
