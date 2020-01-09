<!DOCTYPE html>
<html lang="en">
<head>
<title>Fo Nekk Docteur</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{URL::asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{URL::asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{URL::asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('styles/responsive.css')}}">
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
				<li class="menu_item"><a href="maladies">Maladies</a></li>
				<li class="menu_item"><a href="contact">Contact</a></li>
				<li class="menu_item"><a href="dondesang">Don-De-Sang</a></li>
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
		<div class="background_image" style="background-image:url(images/page.jpg)"></div>

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
													<li class="active"><a href="index">Accueil</a></li>
													<li><a href="hopitaux">Hopitaux</a></li>
													<li><a href="maladies">Maladies</a></li>
													<li><a href="contact">Contact</a></li>
													<li><a href="dondesang">Don-De-Sang</a></li>
													<li><a href="rendezvous">Rendez-Vous</a></li>
													
												</ul>
											</nav>
											<div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto" >
											<style>
												.search_container_form{
													margin-right: -40px;
												</style>
												<form action="#" id="search_container_form" class="search_container_form">
													<input  type="text" class="search_container_input" placeholder="Search" required="required">
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
							<h1><font color="blue">Plateforme de Prise de Rendez Vous Médicaux</font></h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Info Boxes -->

	<div class="info">
		<div class="container">
			<div class="row row-eq-height">

				<!-- Info Box -->
				<div class="col-lg-4 info_box_col">
					<div class="info_box">
						<div class="info_image"><img src="images/rela.jpg" alt=""></div>
						<div class="info_content">
							<div class="info_title">Relation médecin-patient : Droits et devoirs</div>
							<div class="info_text">Toute personne a le droit d’être informée sur son état de santé. Cette information porte sur les différentes investigations, traitements ou actions qui lui sont proposés, leur utilité, leur urgence éventuelle, leurs conséquences, les risques fréquents ou graves normalement prévisibles qu’ils comportent ainsi que les autres solutions possibles et les conséquences prévisibles en cas de refus. Seule l’urgence ou l’impossibilité d’informer peut dispenser le professionnel de santé de cette obligation.</div>
							<div class="button info_button"><a href="https://www.lequotidiendumedecin.fr/liberal/exercice/relation-medecin-patient-droits-et-devoirs"><span>lire la suite</span><span>lire la suite</span></a></div>
						</div>
					</div>
				</div>

				<!-- Info Box -->
				<div class="col-lg-4 info_box_col">
					<div class="info_box">
						<div class="info_image"><img src="images/ministre.jpg" alt=""></div>
						<div class="info_content">
							<div class="info_title">Abdoulaye Diouf SARR </div>
							<div class="info_text">APS : Le ministre de la Santé et de l’Action sociale préconise un "diagnostic profond du service des urgences dans les hôpitaux pour proposer des solutions appropriées".

"La question des urgences est une grande préoccupation à la fois du gouvernement du Sénégal et des autres acteurs’’, a-t-il dit à l’endroit des participants à la concertation nationale sur les urgences.
Selon Abdoulaye Diouf Sarr, ces échanges sont nécessaires "pour bien analyser la problématique et poser un diagnostic profond".</div>
							<div class="button info_button"><a href="http://www.sante.gouv.sn/activites/le-ministre-de-la-sant%C3%A9-et-de-l%E2%80%99action-sociale-abdoulaye-diouf-sarr-pr%C3%A9conise-un"><span>lire la suite</span><span>lire la suite</span></a></div>
						</div>
					</div>
				</div>

				<!-- Info Form -->
				<div class="col-lg-4 info_box_col">
					<div class="info_box">
						<div class="info_image"><img src="images/cmu.jpg" alt=""></div>
						<div class="info_content">
							<div class="info_title">La Couverture Maladie Universelle</div>
							<div class="info_text">La Couverture Maladie Universelle (CMU) offre la possibilité aux personnes les plus démunies de bénéficier d’une couverture du risque maladie. Cette initiative permet, en effet, aux personnes ayant souvent de faibles revenus (monde rural et secteur informel), d’être affiliées à un régime d’assurance maladie et de bénéficier des mêmes soins que les personnes affiliées aux autres régimes de sécurité sociale que sont les imputations budgétaires et les Instituts de Prévoyance Maladie (IPM).</div>
							<div class="button info_button"><a href="http://agencecmu.sn/"><span>lire la suite</span><span>lire la suite</span></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CTA -->

	<div class="cta">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/cta_1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
						<div class="cta_content text-xl-left text-center">
							<div class="cta_title">Qui jouit d'une santé parfaite possède un trésor.</div>
							<div class="cta_subtitle"></div>
						</div>
						<div class="button cta_button ml-xl-auto"><a href="https://www.mon-poeme.fr/citations-medecin/"><span>parole santé</span><span>parole santé</span></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Services</div>
					
				</div>
			</div>
			<div class="row icon_boxes_row">
				
				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/cardio.jpg" alt=""></div>
							<div class="icon_box_title">cardiologie</div>
						</div>
						<div class="icon_box_text">Qu'est-ce que la cardiologie ?
La cardiologie concerne l'étude du fonctionnement de l'appareil cardiovasculaire (cœur et vaisseaux) et des maladies qui l'affectent.

Quelles sont les maladies que traite le cardiologue ?
Les maladies cardiovasculaires sont très nombreuses. Sans prétendre à l'exhaustivité, on peut néanmoins citer les principales :

L'hypercholestérolémie ;
L'insuffisance cardiaque ;
L'hypertension artérielle ; 
L'infarctus du myocarde ; 
La péricardite ; 
L'endocardite ; 
L'embolie pulmonaire ; 
Les troubles du rythme… </div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/gastro.jpg" alt=""></div>
							<div class="icon_box_title">Gastroentérologie</div>
						</div>
						<div class="icon_box_text">Qu'est-ce que la gastro-entérologie ?
La gastro-entérologie est la spécialité médicale qui se consacre à l’étude de l’appareil digestif, à ses troubles et anomalies, ainsi qu’à leur traitement. La discipline s’intéresse ainsi à différents organes (l’œsophage, l’intestin grêle, le côlon, le rectum, l’anus), mais aussi aux glandes digestives (le foie, les voies biliaires, le pancréas).

Notons que la gastro-entérologie englobe deux principales sous-spécialités (que certains médecins exercent spécifiquement) : l’hépatologie (qui concerne les pathologies du foie) et la proctologie (qui s’intéresse aux pathologies de l’anus et du rectum).</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/labo.jpg" alt=""></div>
							<div class="icon_box_title">Laboratoire médical</div>
						</div>
						<div class="icon_box_text">Le  technicien de laboratoire est responsable du bon déroulement de la fabrication d'un produit, qu'il s'agisse d'un nouveau médicament ou d'un nouveau yaourt, par exemple.

Quel que soit le produit envisagé, sa mise au point demande de nombreuses manipulations : il faut réaliser des analyses physico-chimiques pour s'assurer que le produit répond aux normes, contrôler l'acidité et la texture…

Bref, analyser le produit à chaque étape de sa fabrication. Telle est la mission du technicien de laboratoire, qui doit également assurer la maintenance des appareils et la mise au point des protocoles.

Le technicien de laboratoire travaille essentiellement dans les entreprises pharmaceutiques ou cosmétiques, les laboratoires de biologie médicale et les entreprises agroalimentaires.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/dent.jpg" alt=""></div>
							<div class="icon_box_title">Soins dentaires</div>
						</div>
						<div class="icon_box_text">Pas de corps en bonne santé sans une bouche saine ! En respectant certaines règles d’hygiène, il est possible de garder toute sa vie une bonne santé bucco-dentaire et de tenir à distance les caries et autres soucis dentaires. Brosse à dents et fil dentaire doivent devenir vos meilleurs amis. Un brossage minutieux, deux fois par jour pendant deux minutes, est de rigueur pour toute la famille. Autre geste essentiel : utiliser un fil dentaire chaque soir afin de nettoyer les espaces entre les dents. Pour compléter l’hygiène bucco-dentaire, le bain de bouche rafraichit l’haleine. Il réduit la plaque qui se forme sur les dents et prévient l’apparition de la gingivite, une maladie des gencives. N’oubliez pas que la bonne habitude du brossage doit se mettre en place dès l’apparition des dents de lait de votre enfant, car la plaque bactérienne se forme aussi à ce moment-là.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/chirurgie.jpg" alt=""></div>
							<div class="icon_box_title">Chirurgie</div>
						</div>
						<div class="icon_box_text">Les chirurgiens sont des médecins qui ont reçu une formation complémentaire les rendant aptes à pratiquer des interventions chirurgicales. Il existe de nombreuses spécialités chirurgicales chacune nécessitant une formation propre : gynécologie-obstétrique, urologie, chirurgie cardiaque, chirurgie viscérale, orthopédie, chirurgie pédiatrique, ORL, ophtalmologie, chirurgie vasculaire…

La chirurgie peut servir à soigner une affection en pratiquant une intervention chirurgicale, à rechercher les causes d’une maladie (chirurgie exploratrice) et, parfois, à traiter sans intervention à proprement parler : mise en place de plâtre ou d’attelle pour les chirurgiens orthopédistes, de sonde pour les urologues, accouchement pour les obstétriciens…</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/neurone.jpg" alt=""></div>
							<div class="icon_box_title">Neurologie</div>
						</div>
						<div class="icon_box_text">La neurologie est la spécialité consacrée à l'étude de l'anatomie et au fonctionnement du système nerveux central (cerveau et moelle épinière) ou périphérique (racines et nerfs) et au traitement des maladies qui peuvent le toucher. Le diagnostic neurologique repose sur un interrogatoire minutieux et un examen des réflexes et des différentes fonctions du système nerveux. Il fait aussi appel à des examens complémentaires : imagerie (IRM ou scanner), électroencéphalogramme (EEG), électroneuromyogramme (ENMG), ponction lombaire, tests neuro-psychologiques.

La neurologie prend en charge les troubles de la motricité – paralysies d'origine cérébrale ou liées à une lésion de la moelle épinière ou des nerfs périphériques, ou encore à une maladie musculaire (myopathie), mouvements anormaux (tremblements, tics, torticolis par exemple), crampes – et de la sensibilité : fourmillements, engourdissements, insensibilité, certains troubles de l'équilibre mais aussi les douleurs névralgiques, les migraines, les céphalées.</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col">
					<div class="button services_button ml-auto mr-auto"><a href="http://www.ilocis.org/fr/documents/ilo097.htm"><span>lire la suite</span><span>lire la suite</span></a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Departments -->

	<div class="departments">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Departements</div>
				</div>
			</div>
			<div class="row dept_row">
				<div class="col">
					<div class="dept_slider_container_outer">
						<div class="dept_slider_container">

							<!-- Slider -->
							<div class="owl-carousel owl-theme dept_slider">
								
								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="images/bebe.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title">néonatologie</div>
										<div class="dept_link"><a href="https://hopitalsaintjeandedieusn.wordpress.com/pediatrie-neonatologie/">lire la suite</a></div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="images/dent.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title">Dentisterie</div>
										<div class="dept_link"><a href="https://www.starofservice.sn/demandes/dakar/soin-dentaire">lire la suite</a></div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="images/fracture.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title">Orthopédie</div>
										<div class="dept_link"><a href="https://www.passeportsante.net/fr/specialites-medicales/Fiche.aspx?doc=orthopedie">lire la suite</a></div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="images/biologie.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title">Laboratoire</div>
										<div class="dept_link"><a href="https://labobio24.com/">lire la suite</a></div>
									</div>
								</div>

							</div>
							
						</div>

						<!-- Dept Slider Nav -->
						<div class="dept_slider_nav"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

					</div>
						
				</div>
			</div>
		</div>
	</div>

	<!-- FAQ & News -->

	<div class="stuff">
		<div class="container">
			<div class="row">

				<!-- FAQ -->
				<div class="col-lg-7">
					<div class="faq">
						<div class="faq_title">Maladies infectieuses</div>
						<div class="elements_accordions">
							<div class="accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div>Panaris</div></div>
									<div class="accordion_panel">
										<div>
											<p>
Dans la plupart des cas, le panaris est une infection bactérienne survenant sur le pourtour ou le dessous de l’ongle. Il se déclenche surtout chez les sujets qui rongent leurs ongles ou qui présentent des ongles coupés trop courts. En principe, les doigts des mains sont plus affectés que les orteils des pieds.</p>
										<img src="/images/panaris.jpg" alt="">
										</div>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Tuberculose</div></div>
									<div class="accordion_panel">
										<div>
											<p>La tuberculose est une maladie contagieuse d’origine bactérienne. Il s’agit de la deuxième maladie infectieuse la plus mortelle après le Virus de l’Immunodéficience Humaine (VIH/SIDA).

												Malgré les traitements et le vaccin disponibles, la tuberculose n’est toujours pas éradiquée. Cette maladie cause la mort d’environ d’1.5 millions de personnes chaque année à travers le monde.</p>
										<img src="/images/tuberculeuse.jpg" alt="">
										</div>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Sinusite</div></div>
									<div class="accordion_panel">
										<div>
											<p>La sinusite correspond à une inflammation des sinus. Les sinus sont des cavités osseuses recouvertes d’une muqueuse et réparties en quatre paires situées dans les os du visage. Chaque sinus communique avec les fosses nasales grâce à de petites ouvertures à travers lesquelles s’écoulent normalement le mucus.</p>
											<img src="/images/sunisit.jpg" alt="">
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Latest News -->
				<div class="col-lg-5">
					<div class="news">
						<div class="news_title">Dernières Infos</div>
						<div class="news_container">

							<!-- Latest News Post -->
							<div class="latest d-flex flex-row align-items-start justify-content-start">
								<div><div class="latest_image"><img src="images/pilule.jpg" alt=""></div></div>
								<div class="latest_content">
									<div class="latest_title"><a href="http://sante.lefigaro.fr/medecine">Contraception: non, la pilule ne fait pas rétrécir le cerveau des femmes</a></div>
								</div>
							</div>

							<!-- Latest News Post -->
							<div class="latest d-flex flex-row align-items-start justify-content-start">
								<div><div class="latest_image"><img src="images/avortement.jpg" alt=""></div></div>
								<div class="latest_content">
									<div class="latest_title"><a href="https://partenariatouaga.org/debat-lavortement-medicalise-senegal-entre-lobbying-resistance/">Débat sur l’avortement médicalisé au Sénégal: Entre lobbying et résistance</a></div>
									
									
								</div>
							</div>

							<!-- Latest News Post -->
							<div class="latest d-flex flex-row align-items-start justify-content-start">
								<div><div class="latest_image"><img src="images/violl.jpg" alt=""></div></div>
								<div class="latest_content">
									<div class="latest_title"><a href="news.html">Une loi criminalisant le viol et la pédophilie votée au Sénégal</a></div>
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
									<li><a href="rendezvous">Rendez-Vous</a></li>
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
<script src="{{URL::asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{URL::asset('plugins/easing/easing.js')}}"></script>
<script src="{{URL::asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{URL::asset('js/custom.js')}}"></script>
</body>
</html>