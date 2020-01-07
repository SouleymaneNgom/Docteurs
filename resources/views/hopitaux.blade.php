<!DOCTYPE html>
<html lang="en">
<head>
<title>Hopitaux</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{URL::asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{URL::asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{URL::asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('styles/news.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('styles/news_responsive.css')}}">
</head>
<body>

<div class="super_container">

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<form action="#" class="menu_search_form">
				<input type="text" class="menu_search_input" placeholder="Search" required="required">
				<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
			
			<ul>
				<li class="menu_item"><a href="index">Accueil</a></li>
				<li class="menu_item"><a href="hopitaux">Hopitaux</a></li>
				<li class="menu_item"><a href="Maladies">Maladies</a></li>
				<li class="menu_item"><a href="docteurs">docteurs</a></li>
				<li class="menu_item"><a href="contact">Contact</a></li>
				<li class="menu_item"><a href="rendezvous">Rendez-Vous</a></li>
				
			</ul>
		</div>
		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>

		<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
										<a href="#">Fo Nekk Docteur<span>+</span></a>	
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_nav">
											
										</div>
										<div class="header_top_phone">
											<i class="fa fa-phone" aria-hidden="true"></i>
											<span>77 677 25 49</span>
										</div>
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li><a href="index">Accueil</a></li>
													<li><a href="hopitaux">Hopitaux</a></li>
													<li><a href="maladies">Maladies</a></li>
													<li><a href="contact">Contact</a></li>
													<li><a href="dondesang">Don-De-Sang</a></li>
													<li><a href="docteurs">Rendez-Vous</a></li>
													
												</ul>
											</nav>
											<div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
											<style>
												.search_container_form{
													margin-right: -40px;
												</style>
												<form action="#" id="search_container_form" class="search_container_form">
													<input type="text" class="search_container_input" placeholder="Search" required="required">
													<button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
													
												</form>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</header>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Hopitaux</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Posts -->
				<div class="col-lg-8">
					<div class="news_posts">
						
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="images/principal.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date"><a href="#">03 Décembre 2019</a></div>
								<div class="news_post_title"><a href="#">HISTORIQUE DE L’HOPITAL PRINCIPAL DE DAKAR</a></div>
								<div class="news_post_info">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										
									</ul>
								</div>
								<div class="news_post_text">
									<p>le projet de la construction de l’hôpital remonte à 1862 et les travaux
										débutent en 1880 avec la fermeture de l’hôpital de Gorée soupçonné
										d’entretenir le risque épidémique suite à la tragique épidémie de fièvre
										jaune de 1878 qui frappa Gorée et Dakar, puis Rufisque et Saint-Louis
										et qui avait fait 750 décès.
										Situé sur la presqu’île de Dakar, en bordure de l’anse Bernard, l’Hôpital
										fût inauguré en août 1884. Il comprenait sept bâtiments à étages avec
										des arcades de briques qui se faisaient face, trois à trois et fut complété
										en 1897 par deux bâtiments de logements à deux niveaux. Une galerie
										à arcades réunit ces deux constructions avec une façade tournée vers
										le Palais du gouverneur.</p>
								</div>
								<div class="button news_post_button"><a href="http://www.assemblee-nationale.sn/loi-portant-creation-d-un-etablissement-public-de-sante-a-statut-special-denomme-%E2%80%9Chopital-principal-de-dakar%E2%80%9D-l4.xml"><span>lire la suite</span><span>lire la suite</span></a></div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="images/fann.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date"><a href="#">06 décembre 2019</a></div>
								<div class="news_post_title"><a href="#">HISTORIQUE DE L’HOPITAL FANN DE DAKAR</a></div>
								<div class="news_post_info">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										
									</ul>
								</div>
								<div class="news_post_text">
									<p>Le Centre Hospitalier Universitaire National de Fann (CHUNF) est devenu un établissement public de santé conformément aux décrets 98-701 du 26 Août 1998 portant organisation des Etablissements Publics de Santé, 98-702.

										C’est l’un des plus importants établissements de santé du Sénégal. Etablissement de niveau III, il se situe au sommet de la pyramide sanitaire du Sénégal. Sa finalité première est de promouvoir et d’améliorer la santé des populations mais aussi d’assurer une meilleure accessibilité des soins tout en offrant aux populations des services continus et de qualité.
										
										Étroitement lié à l’Université Cheikh Anta DIOP de Dakar, le CHNU de Fann est également voué à l’enseignement et à la recherche dans ses nombreux pôles d’excellence. Ses missions de soins, de recherche, d’enseignement, sont en parfaite congruence avec les orientations fixées par l’Etat qui assure en partie son financement et lui fixe un statut de service public.</p>
								</div>
								<div class="button news_post_button"><a href="https://fr.wikipedia.org/wiki/Centre_hospitalier_national_universitaire_de_Fann"><span>lire la suite</span><span>lire la suite</span></a></div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="images/seteo.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date"><a href="#">15 decembre 2019</a></div>
								<div class="news_post_title"><a href="#">HISTORIQUE DE L’HOPITAL DE SETEO</a></div>
								<div class="news_post_info">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										
									</ul>
								</div>
								<div class="news_post_text">
									<p>’’L’hôpital général de Grand-Yoff enregistre, chaque année, environ 17 mille cas de traumatologie. C’est quasiment, entre 45 à 55 malades par jour’’, révèle le professeur Mouhamadou Habib Sy, chef du service d’Orthopédie-traumatologie de cette structure médicale.

										Selon Pr Sy, dans un hôpital régional par exemple, l’on peut enregistrer 25 à 30 malades par jour, alors que dans celui du type départemental, l’on y trouve entre 10 à 15 malades.
										
										Pr Sy intervenait à une séance académique axée sur ’’Les urgences traumatologiques graves : place et rôle du chirurgien orthopédique’’.</p>
								</div>
								<div class="button news_post_button"><a href="https://www.seneweb.com/news/Societe/hopital-general-de-grand-yoff-un-etablissement-public-de-sant-dans-l-agonie_n_33992.html"><span>lire la suite</span><span>lire la suite</span></a></div>
							</div>
						</div>

						<div class="news_post">
							<div class="news_post_image"><img src="images/choucair.png" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date"><a href="#">10 decembre 2019</a></div>
								<div class="news_post_title"><a href="#">Centre de Santé Nabil Chucaire</a></div>
								<div class="news_post_info">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										
									</ul>
								</div>
								<div class="news_post_text">
									<p>L’hôpital « Nabil Choucair » sis à la Patte d’oie pourrait être confronté ces prochains jours à une action en justice intentée contre sa direction, à la suite du décès d’un jeune controleur des impôts de 34 ans. En effet, le malheureux N'diaga Seck qui souffrait d’asthme s’était rendu dans l’établissement jeudi dernier à la suite d’un petit malaise.
										Selon les informations recueillies, le sieur Seck avait lui-même conduit sa voiture pour se rendre dans la structure où des corticoïdes lui ont été prescrits par une…infirmière. Ce faisant, Seck serait lui même allé acheter les médicaments à la Pharmacie située à la sortie de l’hôpital avant de se voir injecter les intraveineuses par sa soignante. C’est à la suite de cette injection que N'diaga Seck, titubant, s’est affalé de tout son long dans les couloirs de l’hôpital raide mort. Les agents de la structure ayant constaté que le patient était décédé ont fait appel à la morgue qui a beaucoup tardé à amener un brancard pour déplacer le cadavre. Et c’est dans cette disposition à même le sol, que la famille de N'diaga Seck a retrouvé ce dernier, le corps absent de toute vie.
										Une image qui a enragé toute la famille, qui a décidé de porter plainte contre l’établissement pour négligence. En effet N'diaga Seck n’étant sujet à aucune crise ne nécessitait pas ce genre de traitement, le corticoïde lui étant fatal.
										Réuni pour la cérémonie du troisième jour à Kébémer, une plainte devra être portée contre l’établissement de santé par les proches de la victime.
										N'diaga Seck était père d’une fillette de 2 ans</p>
								</div>
								<div class="button news_post_button"><a href="https://fondationsonatel.com/categorie-realisation/centre-de-sante-nabil-choucair/"><span>lire la suite</span><span>lire la suite</span></a></div>
							</div>
						</div>
						
						
					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-4">
					<div class="news_sidebar">

						<!-- Search -->
						

						<!-- Latest News -->
						<div class="sidebar_latest">
							<div class="sidebar_title">Actualités Médicales</div>
							<div class="sidebar_latest_container">

								<!-- Latest News Post -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/infos.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="http://www.departement-information-medicale.com/">Informations Médicales</a></div>
										
										
									</div>
								</div>

								<!-- Latest News Post -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/traitement.png" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="https://www.sante-sur-le-net.com/maladies/">Traitement Maladies</a></div>
										
									</div>
								</div>

								<!-- Latest News Post -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/conseil.png" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="https://www.doctissimo.fr/sante/news/conseils-medicaux-en-ligne-comment-s-y-retrouver">Conseils Médicaux</a></div>
										
									</div>
								</div>

							</div>
						</div>

						<!-- Categories -->
						<div class="sidebar_categories">
							<div class="sidebar_title">Pharmacies</div>
							<div class="categories">
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/pharmacie.jpeg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="https://www.doctissimo.fr/sante/news/conseils-medicaux-en-ligne-comment-s-y-retrouver">Conseils pharmacetique</a></div>
										
									</div>
								</div>
							</div>
						</div>

						<!-- Appointment -->
						<div class="sidebar_categories">
							<div class="sidebar_title">Tradipraticien</div>
							<div class="categories">
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/praticien.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="https://observers.france24.com/fr/20100603-tradipraticiens-medecine-traditionnelle-charlatans-congo-sante-plantes-kisangani">Les tradipraticiens, entre médecine traditionnelle et charlatanisme</a></div>
										
									</div>
								</div>
							</div>
						</div>

						<div class="sidebar_categories">
							<div class="sidebar_title">Accouchement</div>
							<div class="categories">
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/accouchement.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="https://fr.allafrica.com/stories/201806070816.html">Risque de l'accouchement</a></div>
										
									</div>
								</div>
							</div>
						</div>

						<div class="sidebar_categories">
							<div class="sidebar_title">Sida</div>
							<div class="categories">
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/pharmacie.jpeg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="https://sidaction.org/vihsida-quest-ce-que-cest?gl_campagne=TWEBGAG&utm_source=google&utm_campaign=vih&utm_medium=cpc&gclid=CjwKCAiAlajvBRB_EiwA4vAqiPl7ImSayLYMoqYKx4cu0K5InGaA6cH7yJ9vWaq0_ROivmlkltGNOBoC2hYQAvD_BwE">VIH/SIDA : QU'EST-CE QUE C'EST ?</a></div>
										
									</div>
								</div>
							</div>
						</div>


						<div class="sidebar_categories">
							<div class="sidebar_title">MST</div>
							<div class="categories">
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/pharmacie.jpeg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="https://www.caducee.net/DossierSpecialises/reproductive/sante-reproduction-adolescents/jeunes-mst.asp">Maladies sexuellement transmissibles</a></div>
										
									</div>
								</div>
							</div>
						</div>



						<div class="sidebar_categories">
							<div class="sidebar_title">urgences</div>
							<div class="categories">
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/urgence.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="https://www.petitfute.com/v37475-dakar/c1172-pense-fute-services/c1136-sante/c876-urgence/">URGENCES MÉDICALES AU SÉNÉGAL</a></div>
										
									</div>
								</div>
							</div>
						</div>



						<div class="sidebar_categories">
							<div class="sidebar_title">Poste de Santé</div>
							<div class="categories">
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/dispensaire.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="https://www.zeste.coop/fr/un-poste-de-sante-au-senegal">UN POSTE DE SANTÉ AU SÉNÉGAL
										</a></div>
										
									</div>
								</div>
							</div>
						</div>


						<div class="sidebar_categories">
							<div class="sidebar_title">Ebola</div>
							<div class="categories">
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/ebola.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="https://www.scienceshumaines.com/ebola-le-senegal-et-le-nigeria-exemplaires_fr_35772.html">Ebola au Sénégal</a></div>
										
									</div>
								</div>
							</div>
						</div>


						<div class="sidebar_categories">
							<div class="sidebar_title">Ordonnnace</div>
							<div class="categories">
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/ordonnance.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="https://www.dirpharm.net/">Importance de l'ordonnance</a></div>
										
									</div>
								</div>
							</div>
						</div>


						<div class="sidebar_categories">
							<div class="sidebar_title">Accidents</div>
							<div class="categories">
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/accidents.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="https://www.dakaractu.com/Senegal-Les-chiffres-de-l-hecatombe-536-accidents-18-390-victimes-430-morts-en-8-mois_a175924.html">Causes Accidents au sénégal</a></div>
										
									</div>
								</div>
							</div>
						</div>

						<div class="sidebar_categories">
							<div class="sidebar_title">Sage Femme</div>
							<div class="categories">
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/sagefemme.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="http://efosante.com/sage-femme-detat/">Sage Femme d'état</a></div>
										
									</div>
								</div>
							</div>
						</div>


						<div class="sidebar_categories">
							<div class="sidebar_title">Infirmier</div>
							<div class="categories">
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/infirmier (2).jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="https://votresalaire.org/senegal/carriere/senegal-emplois-et-revenus/senegal-cadres-infirmiers">Role de l'infirmier ?</a></div>
										
									</div>
								</div>
							</div>
						</div>


						<div class="sidebar_categories">
							<div class="sidebar_title">AVC</div>
							<div class="categories">
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/avc.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="https://www.ferloo.com/prise-en-charge-des-avc-au-senegal-1-neurologue-pour-536-000-habitants/">Prise en Charge AVC au sénégal</a></div>
										
									</div>
								</div>
							</div>
						</div>


						<div class="sidebar_categories">
							<div class="sidebar_title">Dialyse</div>
							<div class="categories">
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/dialyse.png" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="http://www.fondation-du-rein.org/comprendre-votre-maladie/quest-ce-que-la-dialyse.html">Les causes de l'insuffisance rénale chronique</a></div>
										
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
								<a href="#">Fo Nekk Docteur<span>+</span></a>	
							</div>
							
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
								Page facebook<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								</ul>
							</div>
	
						</div>
					</div>
					
					<!-- Footer Contact -->
					<div class="col-lg-5 footer_col">
						<div class="footer_contact">
							<div class="footer_contact_title">Nous Contacter</div>
							<div class="footer_contact_form_container">
								<form action="#" class="footer_contact_form" id="footer_contact_form">
									<div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
										<input type="text" class="footer_contact_input" placeholder="Nom" required="required">
										<input type="email" class="footer_contact_input" placeholder="E-mail" required="required">
									</div>
									<textarea class="footer_contact_input footer_contact_textarea" placeholder="Message" required="required"></textarea>
									<button class="footer_contact_button">Envoyer Message</button>
								</form>
							</div>
						</div>
					</div>

					<!-- Footer Hours -->
					<div class="col-lg-4 footer_col">
						<div class="footer_hours">
							<div class="footer_hours_title">Disponibilité</div>
							<ul class="hours_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Lundi – Jeudi</div>
									<div class="ml-auto">8.00 – 19.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Vendredi</div>
									<div class="ml-auto">8.00 - 19.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Samedi</div>
									<div class="ml-auto">9.00 – 17.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Dimanche</div>
									<div class="ml-auto">9.00 – 15.00</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
							<nav class="footer_nav">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
								<li class="active"><a href="index.html">Accueil</a></li>
									<li><a href="hopitaux">Hopitaux</a></li>
									<li><a href="maladies">Maladies</a></li>
									<li><a href="contact">Contact</a></li>
									<li><a href="dondesang">Don-De-Sang</a></li>
									<li><a href="docteurs">Docteurs</a></li>
								</ul>
							</nav>
							<div class="footer_links">
								
							</div>
							<div class="footer_phone ml-lg-auto">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>77 677 25 49</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{URL::asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{URL::asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{URL::asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{URL::asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{URL::asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{URL::asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{URL::asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{URL::asset('plugins/easing/easing.js')}}"></script>
<script src="{{URL::asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{URL::asset('js/news.js')}}"></script>
</body>
</html>