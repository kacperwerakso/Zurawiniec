<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="Utf-8">
	<meta name="viewport" content="initial-scale=0.4, maximum-scale=0.4, width=device-width">
	<title>dokument</title>
	<link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
	<header class="header">
		<nav class="navigations">
			<a class="navigations__link" href="index.php" id="gora">Strona główna</a>
			<a class="navigations__link" href="rekreacja.php">Rekreacja</a>
			<a class="navigations__link" href="historia.php">Historia</a>
			<a class="navigations__link" href="przyroda.php">Przyroda</a>
			<a class="navigations__link" href="prawo.php">Podstawy prawne</a>
			<a class="navigations__link2" href="logout.php">Wyloguj</a>
		</nav>

		<main class="main">
			<br>
			<header class="obramowka3">
				<h1 class="mainheading">REZERWAT PRZYRODY ŻURAWINIEC</h1>
			</header>
			<br><br><br>

			<img class="foto1" src="foto1.jpeg" alt="fota1">
			<br><br>
			<article class="obramowka">
				<h2 class="tytul">Rezerwat przyrody nieożywionej umiejscowiony w północnej części Poznania</h2>
			</article>
			<br><br><br>

			<article>
				<img class="foto2" src="foto2.jpeg" alt="fota2">
				<br><br>

				<p class="lok">Lokalizacja - Poznań</p>
			</article>
			<br><br><br>

			<article class="obramowka2">
				<h2 class="tytul">Podstawowe informacje</h2>
				<br>
				<br>
				<p class="podinf">Kraj: Polska</p>
				<p class="podinf">Miasto: Poznań</p>
				<p class="podinf">Dzielnica: Naramowice</p>
				<p class="podinf">Mezoregion: Pojezierze Poznańskie</p>
				<p class="podinf">Data utworzenia: 1959</p>
				<p class="podinf">Powierzchnia: 1,47ha</p>
			</article>

			<header class="tytul">
				<h2><br>Czego dowiesz się ze strony</h2>
			</header>
			<br>
			<article>
				<p class="tekst3">Dlaczego Rezerwat przyrody Żurawiniec jest miejscem jedynym w swoim rodzaju.</p>
				<p class="tekst3">Poznasz jego historię, problematykę oraz jak funkcjonuje aktualnie zważając na faunę i
					florę.</p>
				<p class="tekst3">Dowiesz się dlaczego jest chętnie odwiedzany pod kątem rekreacji.</p>
				<p class="tekst3">Kluczową kwestią będą również najciekawsze elementy które napotkać można odwiedzając
					rezerwat</p>
				<p class="tekst3">Całości towarzyszyć bedzie zbior wyszukanych ciekawostek nadających głębszy sens
					coniektórym aspektom tego miejsca</p>
				<br>
				<a class="odnosnik" href="#gora"><br><br><br>WYBÓR PODSTRON</a>
			</article>
		</main>

</html>