<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Fin video</title>
	<link rel="stylesheet" href="../css/formArticle.css"> </head>

<body>
    
	<?php include 'header.php'; ?>
    
	<section>
		<form id="formArticle" method="POST" action="finArticle.php">
			<div id="formArticleContainer">
				<div id="contactForm">
					<div id="contactFormTitle">
						<?xml version="1.0" ?>
							<svg version="1.1" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<title/>
								<desc/>
								<defs/>
								<g fill="none" fill-rule="evenodd" id="People" stroke="none" stroke-width="1">
									<g fill="#000000" id="Icon-72">
										<path d="M26.707,38.707 C26.693,38.722 26.304,39.148 26.109,40 L35,40 C35.552,40 36,40.447 36,41 C36,41.553 35.552,42 35,42 L25,42 C24.448,42 24,41.553 24,41 C24,38.85 24.975,37.639 25.239,37.349 L32.21,28.386 C32.236,28.353 32.264,28.322 32.293,28.293 C32.307,28.278 34,26.526 34,24 C34,21.794 32.206,20 30,20 C27.794,20 26,21.794 26,24 C26,24.553 25.552,25 25,25 C24.448,25 24,24.553 24,24 C24,20.691 26.691,18 30,18 C33.309,18 36,20.691 36,24 C36,27.136 34.102,29.29 33.757,29.655 L26.79,38.614 C26.764,38.646 26.736,38.678 26.707,38.707 M30,58 C14.561,58 2,45.439 2,30 C2,14.561 14.561,2 30,2 C45.439,2 58,14.561 58,30 C58,45.439 45.439,58 30,58 M30,0 C13.458,0 0,13.458 0,30 C0,46.542 13.458,60 30,60 C46.542,60 60,46.542 60,30 C60,13.458 46.542,0 30,0" id="number-two" /> </g>
								</g>
							</svg>
							<h2>Contact</h2> </div>
					<div id="contactFormInputs">
						<div id="contactFormNames">
							<div id="contactFormLastName">
								<label for="lastName">Nom</label>
								<br/>
								<input name="lastName" type="text" required/> </div>
							<div id="contactFormFirstName">
								<label for="firstName">Prénom</label>
								<br/>
								<input name="firstName" type="text" required/> </div>
						</div>
						<div id="contactFormDepartementSociety">
							<div id="contactFormDepartement">
								<label for="departements">Département</label>
								<select name="departements" id="nav_dep_select">
									<option value="01">(01) Ain </option>
									<option value="02">(02) Aisne </option>
									<option value="03">(03) Allier </option>
									<option value="04">(04) Alpes de Haute Provence </option>
									<option value="05">(05) Hautes Alpes </option>
									<option value="06">(06) Alpes Maritimes </option>
									<option value="07">(07) Ardèche </option>
									<option value="08">(08) Ardennes </option>
									<option value="09">(09) Ariège </option>
									<option value="10">(10) Aube </option>
									<option value="11">(11) Aude </option>
									<option value="12">(12) Aveyron </option>
									<option value="13">(13) Bouches du Rhône </option>
									<option value="14">(14) Calvados </option>
									<option value="15">(15) Cantal </option>
									<option value="16">(16) Charente </option>
									<option value="17">(17) Charente Maritime </option>
									<option value="18">(18) Cher </option>
									<option value="19">(19) Corrèze </option>
									<option value="2A">(2A) Corse du Sud </option>
									<option value="2B">(2B) Haute-Corse </option>
									<option value="21">(21) Côte d'Or </option>
									<option value="22">(22) Côtes d'Armor </option>
									<option value="23">(23) Creuse </option>
									<option value="24">(24) Dordogne </option>
									<option value="25">(25) Doubs </option>
									<option value="26">(26) Drôme </option>
									<option value="27">(27) Eure </option>
									<option value="28">(28) Eure et Loir </option>
									<option value="29">(29) Finistère </option>
									<option value="30">(30) Gard </option>
									<option value="31">(31) Haute Garonne </option>
									<option value="32">(32) Gers </option>
									<option value="33">(33) Gironde </option>
									<option value="34">(34) Hérault </option>
									<option value="35">(35) Ille et Vilaine </option>
									<option value="36">(36) Indre </option>
									<option value="37">(37) Indre et Loire </option>
									<option value="38">(38) Isère </option>
									<option value="39">(39) Jura </option>
									<option value="40">(40) Landes </option>
									<option value="41">(41) Loir et Cher </option>
									<option value="42">(42) Loire </option>
									<option value="43">(43) Haute Loire </option>
									<option value="44">(44) Loire Atlantique </option>
									<option value="45">(45) Loiret </option>
									<option value="46">(46) Lot </option>
									<option value="47">(47) Lot et Garonne </option>
									<option value="48">(48) Lozère </option>
									<option value="49">(49) Maine et Loire </option>
									<option value="50">(50) Manche </option>
									<option value="51">(51) Marne </option>
									<option value="52">(52) Haute Marne </option>
									<option value="53">(53) Mayenne </option>
									<option value="54">(54) Meurthe et Moselle </option>
									<option value="55">(55) Meuse </option>
									<option value="56">(56) Morbihan </option>
									<option value="57">(57) Moselle </option>
									<option value="58">(58) Nièvre </option>
									<option value="59">(59) Nord </option>
									<option value="60">(60) Oise </option>
									<option value="61">(61) Orne </option>
									<option value="62">(62) Pas de Calais </option>
									<option value="63">(63) Puy de Dôme </option>
									<option value="64">(64) Pyrénées Atlantiques </option>
									<option value="65">(65) Hautes Pyrénées </option>
									<option value="66">(66) Pyrénées Orientales </option>
									<option value="67">(67) Bas Rhin </option>
									<option value="68">(68) Haut Rhin </option>
									<option value="69">(69) Rhône </option>
									<option value="70">(70) Haute Saône </option>
									<option value="71">(71) Saône et Loire </option>
									<option value="72">(72) Sarthe </option>
									<option value="73">(73) Savoie </option>
									<option value="74">(74) Haute Savoie </option>
									<option value="75">(75) Paris </option>
									<option value="76">(76) Seine Maritime </option>
									<option value="77">(77) Seine et Marne </option>
									<option value="78">(78) Yvelines </option>
									<option value="79">(79) Deux Sèvres </option>
									<option value="80">(80) Somme </option>
									<option value="81">(81) Tarn </option>
									<option value="82">(82) Tarn et Garonne </option>
									<option value="83">(83) Var </option>
									<option value="84">(84) Vaucluse </option>
									<option value="85">(85) Vendée </option>
									<option value="86">(86) Vienne </option>
									<option value="87">(87) Haute Vienne </option>
									<option value="88">(88) Vosges </option>
									<option value="89">(89) Yonne </option>
									<option value="90">(90) Territoire de Belfort </option>
									<option value="91">(91) Essonne </option>
									<option value="92">(92) Hauts de Seine </option>
									<option value="93">(93) Seine Saint Denis </option>
									<option value="94">(94) Val de Marne </option>
									<option value="95">(95) Val d'Oise </option>
								</select>
							</div>
							<div id="contactFormSociety">
								<label for="society">Société</label>
								<br/>
								<input name="society" type="text" required/> </div>
						</div>
						<div id="contactFormEmail">
							<label for="email">Adresse mail</label>
							<br/>
							<input name="email" type="mail" required/> </div>
						<div id="contactFormPhoneNumber">
							<label for="phone">Téléphone</label>
							<br/>
							<input name="phone" type="number" required/> </div>
						<div id="contactFormRecontacter">
							<p>Acceptez-vous d'être contacté ?</p>
							<div>
								<input type="checkbox" name="checkBoxMail" value="1" />
								<label for="checkBoxMail">Mail</label>
								<br/>
								<input type="checkbox" name="checkBoxPhone" value="1" />
								<label for="checkBoxPhone">Téléphone</label>
								<br/> </div>
						</div>
					</div>
				</div>
				<div id="categoryForm">
					<div id="categoryFormTitle">
						<?xml version="1.0" ?>
							<svg height="60px" version="1.1" viewBox="0 0 60 60" width="60px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<title/>
								<desc/>
								<defs/>
								<g fill="none" fill-rule="evenodd" id="People" stroke="none" stroke-width="1">
									<g fill="#000000" id="Icon-73">
										<path d="M36,36 C36,39.309 33.309,42 30,42 C26.691,42 24,39.309 24,36 C24,35.447 24.448,35 25,35 C25.552,35 26,35.447 26,36 C26,38.206 27.794,40 30,40 C32.206,40 34,38.206 34,36 C34,33.794 32.206,32 30,32 C29.666,32 29.354,31.833 29.168,31.555 C28.982,31.276 28.948,30.924 29.077,30.615 L33.5,20 L25,20 C24.448,20 24,19.553 24,19 C24,18.447 24.448,18 25,18 L35,18 C35.334,18 35.646,18.167 35.832,18.445 C36.018,18.724 36.052,19.076 35.923,19.385 L31.429,30.172 C34.05,30.814 36,33.184 36,36 M30,58 C14.561,58 2,45.439 2,30 C2,14.561 14.561,2 30,2 C45.439,2 58,14.561 58,30 C58,45.439 45.439,58 30,58 M30,0 C13.458,0 0,13.458 0,30 C0,46.542 13.458,60 30,60 C46.542,60 60,46.542 60,30 C60,13.458 46.542,0 30,0" id="number-three" /> </g>
								</g>
							</svg>
							<h2>Choix catégorie</h2> </div>
					<div id="categoryFormInputs">
						<div>
							<input type="radio" name="categoryForm" value="1" />
							<p>Bien-être physique / psychologique</p>
							<!--					<label for="categoryBienEtre">Bien-être physique / psychologique</label>-->
						</div>
						<div>
							<input type="radio" name="categoryForm" value="2" />
							<p>Cohesion de groupe</p>
							<!--					<label for="categoryCohesion">Cohesion de groupe</label>-->
						</div>
						<div>
							<input type="radio" name="categoryForm" value="3" />
							<p>Travail</p>
							<!--					<label for="categoryTravail">Travail</label>-->
						</div>
						<div>
							<input type="radio" name="categoryForm" value="4" />
							<p>Equilibre professionnel / personnel</p>
							<!--					<label for="categoryEquilibre">Equilibre professionnel / personnel</label>-->
						</div>
						<div>
							<input type="radio" name="categoryForm" value="5" />
							<p>Récompenses</p>
							<!--					<label for="categoryRecompenses">Récompenses</label>-->
						</div>
						<div>
							<input type="radio" name="categoryForm" value="6" />
							<p>Organisation du lieu de travail</p>
							<!--					<label for="categoryOrganisation">Organisation du lieu de travail</label>-->
						</div>
						<div>
							<input type="radio" name="categoryForm" value="7" />
							<p>Vision commune</p>
							<!--					<label for="categoryVision">Vision commune</label>-->
						</div>
					</div>
				</div>
				<div id="articleForm">
					<div id="articleFormTitle">
						<?xml version="1.0" ?>
							<svg height="60px" version="1.1" viewBox="0 0 60 60" width="60px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<title/>
								<desc/>
								<defs/>
								<g fill="none" fill-rule="evenodd" id="People" stroke="none" stroke-width="1">
									<g fill="#000000" id="Icon-74">
										<path d="M36,35 C36,35.553 35.553,36 35,36 L34,36 L34,41 C34,41.553 33.553,42 33,42 C32.447,42 32,41.553 32,41 L32,22.486 L24.805,34 L29,34 C29.553,34 30,34.447 30,35 C30,35.553 29.553,36 29,36 L23,36 C22.637,36 22.302,35.803 22.125,35.484 C21.949,35.167 21.959,34.778 22.152,34.47 L32.152,18.47 C32.388,18.091 32.851,17.914 33.275,18.039 C33.704,18.162 34,18.554 34,19 L34,34 L35,34 C35.553,34 36,34.447 36,35 M30,58 C14.561,58 2,45.439 2,30 C2,14.561 14.561,2 30,2 C45.439,2 58,14.561 58,30 C58,45.439 45.439,58 30,58 M30,0 C13.458,0 0,13.458 0,30 C0,46.542 13.458,60 30,60 C46.542,60 60,46.542 60,30 C60,13.458 46.542,0 30,0" id="number-four" />
									</g>
								</g>
							</svg>
							<h2>Votre article</h2> </div>
					<div id="articleFormInputs">
						<label for="titreArticle">Titre de l'article</label>
						<input type="text" name="titreArticle" />
						<label for="prerequis1">Pré-requis de la démarche</label>
						<input type="text" name="requisOne" />
						<label for="prerequis2">Pré-requis de la démarche</label>
						<input type="text" name="requisTwo" />
						<label for="contenuArticle">Contenu de l'article</label>
						<textarea name="contenuArticle"></textarea>
					</div>
				</div>
			</div>
			<input type="submit" value="Envoyer"/>
		</form>
	</section>
    
	<?php include 'header.php'; ?>
    
</body>

</html>