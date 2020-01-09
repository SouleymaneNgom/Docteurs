<!DOCTYPE html>
<html lang="en">
<head>
<title>Docteurs</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{URL::asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{URL::asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{URL::asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('styles/about.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('styles/about_responsive.css')}}">
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
		<!-- <div class="background_image" style="background-image:url(images/about.jpg)"></div> -->
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>

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
													<li><a href="index">Accueil</a></li>
													<li class="active"><a href="hopitaux">Hopitaux</a></li>
													<li><a href="maladies">Maladies</a></li>
													<li><a href="contact">Contact</a></li>
													<li><a href="dondesang">Don-De-Sang</a></li>
													<li><a href="rendezvous">Rendez-Vous</a></li>
												
												</ul>
											</nav>
											<div>
											
											<ul>
											@guest
														<li class="nav-item" >
															<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
														</li>
														@if (Route::has('register'))
															<li class="nav-item">
																<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
															</li>
														@endif
													@else
													<ul>
														
													</ul>
														<li class="nav-item dropdown">
															<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
																{{ Auth::user()->name }} <span class="caret"></span>
															</a>
																
															<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
																<a class="dropdown-item" href="{{ route('logout') }}"
																onclick="event.preventDefault();
																				document.getElementById('logout-form').submit();">
																	{{ __('se déconnecter') }}
																</a>

																<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																	@csrf
																</form>
															</div>
														</li>
													@endguest
											</ul>
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
							<div class="home_title">Rendez-Vous</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">DR DAOUDA NDIAYE</div>
					<div class="section_subtitle">Inventeur du test du paludisme dénommé "illumigene Malaria"</div>
				</div>
			</div>
			<div class="row about_row row-eq-height">
				<div class="col-lg-4">
					<div class="logo">
						<a href="#">Fo Nekk Docteur<span>+</span></a>	
					</div>
					<div class="about_text_highlight"> UN BRILLANT PROFESSEUR À LA DÉCOUVERTE "RÉVOLUTIONNAIRE" DANS LA LUTTE CONTRE LE PALUDISME</div>
					<div class="about_text">
						<p>Chef de l’unité de Parasitologie-Mycologie du Centre hospitalier universitaire (CHU) de l’hôpital Aristide Le Dantec, Daouda Ndiaye, un scientifique humble au commerce facile a la parternité d’une découverte "révolutionnaire" appelée "illumigene Malaria" qui va permettre de faire des avancées significatives dans la lutte contre le paludisme, une des trois principales causes de mortalité infantile dans le monde, ravissant une vie à chaque minute.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="about_text_2">
						<p>Eu égard à cette grande découverte pour la médecine sénégalaise, africaine et mondiale, on serait tenté de croire que son concepteur, riche d’une expérience professionnelle enviable et digne des grands savants, est un homme d’âge avancé. Oh que non !, Daouda Ndiaye, l’air jovial et avec une allure de sportif, a obtenu son premier diplôme universitaire (Baccalauréat, série D) il y a juste 24 ans. 
 
 Le jeune étudiant quitte alors son Pikine natal et se fond dans la masse estudiantine de l’Université Cheikh Anta Diop de Dakar (UCAD) où il obtient, en 1999, son Certificat d’Etudes Spécialisées en Parasitologie et Mycologie.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="about_image"><img src="images/ndiaye1.jpg" alt=""></div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="button about_button ml-auto mr-auto"><a href="https://www.dakaractu.com/DAOUDA-NDIAYE-UN-BRILLANT-PROFESSEUR-A-LA-DECOUVERTE-REVOLUTIONNAIRE-DANS-LA-LUTTE-CONTRE-LE-PALUDISME_a106164.html"><span>lire la suite</span><span>lire la suite</span></a></div>
				</div>
			</div>
		</div>
	</div>

	<div class="cta">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/cta_1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
						<div class="cta_content text-xl-left text-center">
							<div class="cta_title">Si j'étais médecin, je prescrirais des vacances à tous les patients qui considèrent que leur travail est important.</div>
							<div class="cta_subtitle">Il n'est pas de meilleur médecin qu'un véritable ami</div>
						</div>
						<div class="button cta_button ml-xl-auto"><a href="https://www.mon-poeme.fr/citations-medecin/"><span>lire la suite</span><span>lire la suite</span></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Milestones -->
	<div class="doctors">
		<div class="doctors_image"><img src="images/groupe.jpg" alt=""></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Nos Doctors</div>
				</div>
			</div>
			<div class="row doctors_row">
				
				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><a href="datepicker"><img src="images/mbaye.jpeg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a href="#">Mbaye Fall</a></div>
							<div class="doctor_title">Churgicien dentiste</div>
						
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><a href="datepicker"><img src="images/doc4.jpeg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a href="#">Pape Malick Ndiaye</a></div>
							<div class="doctor_title">Pediatre</div>
							
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><a href="datepicker"><img src="images/doc8.jpeg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a href="#">Thierno Sow</a></div>
							<div class="doctor_title">Medecin généraliste</div>
						
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><a href="datepicker"><img src="images/doc2.jpeg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a href="#">Mamadel Bassoum</a></div>
							<div class="doctor_title">Cardiologue</div>
						
						</div>
					</div>
				</div>

				<!-- Doctor -->
			
				<!-- Doctor -->
				
				<!-- Doctor -->
				
			
				
			</div>
			
			
			<div class="row">
				<div class="col">
					<div class="button doctors_button ml-auto mr-auto"><a href="http://fmpos.ucad.sn/"><span>FMPO</span><span>FMPO</span></a></div> <br> <br> <br>
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
<script src="{{URL::asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{URL::asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{URL::asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{URL::asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{URL::asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{URL::asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{URL::asset('plugins/easing/easing.js')}}"></script>
<script src="{{URL::asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{URL::asset('js/about.js')}}"></script>
</body>
</html>