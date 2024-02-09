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
			
			print ("<b>"."Ćwiczenie 1:"."</b>");		print ("<br>");
			$A=64;
			$B=8;
			print ("a=$A");		print ("<br>");
			print ("b=$B");		print ("<br>");
			print ("suma liczb $A i $B wynosi: ".($A + $B));		print ("<br>");
			print ("różnica pomiędzy $A i $B wynosi: ".($A - $B));		print ("<br>");
			print ("iloczyn liczb $A i $B wynosi: ".($A * $B));		print ("<br>");
			print ("iloraz liczb $A i $B wynosi: ".($A / $B));		print ("<br>");
			print ("<br>");
			
			print ("<b>"."Ćwiczenie 2:"."</b>");		print ("<br>");
			$A=64;
			$B=8;
			print ("a=$A");		print ("<br>");
			print ("b=$B");		print ("<br>");
			print ("suma liczb $A i $B wynosi: "."<b>".($A + $B)."</b>");		print ("<br>");
			print ("różnica pomiędzy $A i $B wynosi: "."<b>".($A - $B)."</b>");		print ("<br>");
			print ("iloczyn liczb $A i $B wynosi: "."<b>".($A * $B)."</b>");		print ("<br>");
			print ("iloraz liczb $A i $B wynosi: "."<b>".($A / $B)."</b>");		print ("<br>");
			print ("<br>");
			
			print ("<b>"."Ćwiczenie 3:"."</b>");		print ("<br>");
			$A=69;
			$B=4;
			print ("a=$A");		print ("<br>");
			print ("b=$B");		print ("<br>");
			print ("suma liczb $A i $B wynosi: "."<b>".($A + $B)."</b>");		print ("<br>");
			print ("różnica pomiędzy $A i $B wynosi: "."<b>".($A - $B)."</b>");		print ("<br>");
			print ("iloczyn liczb $A i $B wynosi: "."<b>".($A * $B)."</b>");		print ("<br>");
			print ("iloraz liczb $A i $B wynosi: "."<b>".($A / $B)."</b>");		print ("<br>");
			print ("<br>");
			
			print ("<b>"."Ćwiczenie 5:"."</b>");		print ("<br>");
			$dochod=5000;
			$procent=19;
			$kwotaWolna=530.08;
			$procentMath=$procent/100;
			print ("Dochód: $dochod");		print ("<br>");
			print ("Procent: $procent %");		print ("<br>");
			print ("Kwota wolna od podatku: $kwotaWolna");		print ("<br>");
			print ("Kwota podatku wynosi: "."<b>".(($dochod-$kwotaWolna)*$procentMath)."</b>");		print ("<br>");
			print ("<br>");
			
			print ("<b>"."Ćwiczenie 4:"."</b>");		print ("<br>");
			phpinfo();
			
		?>
	</body>
</html>