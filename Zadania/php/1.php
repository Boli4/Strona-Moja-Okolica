<!DOCTYPE html>
<html lang="pl">
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP</title>
		<meta name="author" content="Mateusz Bolingier">
		<meta name="description" content="Zadania">
		<meta name="keywords" content="szkoła, Mateusz, Bolingier, moja okolica, Racibórz, Ostróg">
		<link href="style.css" rel="stylesheet" type="text/css"/>
		<link rel="shortcut icon" href="mojeFavicon.ico" type="image/x-icon" />
	</head>
	
	<body>
		<?php
			print ("PHP");
			print ("<br>");
			print ('Zaczynam poznawać PHP');
			print ("<br>");
			print ("Zaczynam poznawać PHP");
			print ("<br>");
			
			print ("<br>");
			define ("SZKOLA", "ZSM");
			print (SZKOLA);
			print ("<br>");
			
			print ("<br>");
			$imie="Mateusz";
			$nazwisko="Bolingier";
			$tekst="Nazywam się $imie $nazwisko";
			print ($tekst);
			print ("<br>");
			
			print ("<br>");
			$bokA=12;
			$bokB=15;
			print ("Pole prostokąta o bokach $bokA i $bokB wynosi: ".$bokA * $bokB);
			print ("<br>");
			
			print ("<br>");
			printf ('Liczba PI: %0.4f', M_PI); //wyświetlenie liczby π do 4 miejsc po przecinku, PI() oraz M_PI oznaczają liczbę π
			
		?>
	</body>
</html>