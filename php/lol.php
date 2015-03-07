<html>
<head>
	<link rel="stylesheet" type="text/css" href="lol.css"/>
</head>

<body>
	<h3>
		This is a program that tests you manhood. It compares your name with the word faget in your mother tongue and 
		retrieves the percentage of similarity. <br><br><br><br>
	</h3>
	<form action="lol.php" method="GET">
		<b>Insert your name (at least two names are required)</b><br>
		<input type="text" name='name' /><br>
		<b>Insert the word for faget in your mother tongue</b><br>
		<input type = "text" name='faget' /><br><br><hr/>
		<input type = "submit" value = "submit"/>
	<form>
</body>
</html>

<?php

	
if ( ( isset ($_GET['name'])&&!empty($_GET['name']) ) && ( isset ($_GET['faget'])&&!empty($_GET['faget']) ) ) {
	$name1 = $_GET['name'];
	$faget1 = $_GET['faget'];
	
	$name = strtolower ($name1);
	$faget = strtolower($faget1);
	
	if ( 	( ( !preg_match('/joao/', $name) || !preg_match('/joão/', $name) ) && !preg_match('/ferraz/', $name) ) 
		&&  ( ( !preg_match('/joao/', $name) || !preg_match('/joão/', $name) ) && !preg_match('/seco/', $name) ) 
		&&  ( !preg_match('/carmo/', $name)  && !preg_match('/ivan/', $name) )
		&&  ( ( !preg_match('/flavio/', $name) || !preg_match('/flávio/', $name) ) && !preg_match('/pereira/', $name) )
	){
		similar_text($name, $faget, $result);
		echo '<p>'.$result .'% Similarity between your name and '.$faget1.'.</p>';
	}elseif ( (preg_match('/joao/', $name) || preg_match('/joão/', $name)) && preg_match('/seco/', $name) ) {
		echo '<p>99%</p>';
	}elseif( preg_match('/ivan/', $name) && preg_match('/carmo/', $name) ) {
		echo '<p>You have broken the scale! You are a faget queen!</p>';
	}elseif ( (preg_match('/flavio/', $name) || preg_match('/flávio/', $name)) && preg_match('/pereira/', $name) ) {
		echo '<p>You have been banned from this website. It is restricted only to animals and WORMS just aren\'t allowed.</p>';
	}else{
		echo '<p>0% Similarity between your name and faget. You are a true Macho Man!</p>';
	};
	
}else{
	echo '<p>All fields are requested. Please, fill them and retry.</p>';
};
?>

