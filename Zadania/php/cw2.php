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
			
			$x=2;
			$y=3;
			$z=4;
			$x++;
			$y--;
			$z+=$y;
			--$z;
			$x*=$z;
			print($x." ".$y." ".$z);
			print ("<br>"); print ("<br>");
			
			print("<b>"."Zadanie 1"."</b>"); print ("<br>");
			$dane = 'Mateusz ';
			$dane .='Bolingier ';
			$dane .='Racibórz ';
			$dane .='Przejazdowa';
			print ($dane);
			
			print ("<br>"); print ("<br>"); print("<b>"."Zadanie 2"."</b>");
		?>
		
		<h1>Obliczam kwotę do zwrotu</h1>
			<p>
				Wynik obliczeń to <?= (7 * 105 )-12; ?> złotych.
			</p>
		
		<?php
			print("<b>"."Zadanie 3"."</b>"); print ("<br>");
			//liczba + tekst
			$a=2;
			$b="0";
			$c=$a+$b;
			print($c);
			print("<br>");
			//tekst+liczba
			$c=$b+$a;
			print($c);
			print("<br>");
			//konkatenacja liczby i tekstu
			print($a.$b);
			print("<br>");
			//(konkatenacja liczby i tekstu)+liczba
			$c=($a.$b)+3;
			print($c);
			
			
			print ("<br>");print ("<br>"); print("<b>"."Zadanie 4"."</b>"); print ("<br>");
			//Odczytanie daty i przypisanie zmiennej $czas informacji  o dacie i godzinie za pomocą funkcji date"
			$czas=date("U");
			//Czas to ilość sekund,  które upłynęły od północy 1 stycznia roku 1980
			echo("Data w formacie UNIXa: ".$czas);
			print("<br>");
			print("Aktualny czas i data: ".date("H:i:s d-m-Y"));
			print("<br>");
			//data 10 dni późniejsza
			$czas+=60*60*24*10;
			print("Data o 10 dni późniejsza: ".date("H:i:s d-m-Y",$czas));
			print("<br>");
			
			
			print ("<br>");print ("<br>"); print("<b>"."Zadanie 5"."</b>"); print ("<br>");
			$dzien=date("d");
			$miesiac=date("m");
			$rok=date("Y");
			$godzina=date("H");
			$minuta=date("i");
			$sekunda=date("s");
			echo("$dzien-$miesiac-$rok $godzina:$minuta:$sekunda");
			
			
			print ("<br>");print ("<br>"); print("<b>"."Zadanie 6"."</b>"); print ("<br>");
			print ('dzień: 12; <b>'.date("d").'</b> <br />');
			print ('miesiąc: 03; <b>'.date("m").'</b> <br />');
			print ('rok: 2010; <b>'.date("Y").'</b> <br />');
			print ('godzina: 8; <b>'.date("H").'</b> <br />');
			print ('minuta: 30; <b>'.date("i").'</b> <br />');
		?>
	</body>
</html>