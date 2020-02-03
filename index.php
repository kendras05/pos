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
		
		
		
    <button class="number-btn">0</button>
	  <button class="number-btn">1</button>
    <button class="number-btn">2</button>
    <button class="number-btn">3</button>
    <button class="number-btn">4</button>
    <button class="number-btn">5</button>
		<button class="number-btn">6</button>
		<button class="number-btn">7</button>
		<button class="number-btn">8</button>
		<button class="number-btn">9</button>
    <button class="add-btn">Add Amount</button>


</fieldset>
<br>
<br>
<form action="/submit.php" method="get"> 
<textarea readonly id="ledger" rows="4" cols="50">Ledger</textarea>
Total: <button type="submit" value ="submit" id ="total"/>Total</button>
</form>
	
</body>
<html>
