<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Plateforme Prise de Rendez Vous Médicaux">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{URL::asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{URL::asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{URL::asset('styles/contact.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('styles/contact_responsive.css')}}">
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>

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
											<span>77 677  25 49</span>
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
													<li><a href="Maladies">Maladies</a></li>
													<li><a href="contact">Contact</a></li>
													<li><a href="dondesang">Don-De-Sang</a></li>
													<li><a href="rendezvous">Rendez-Vous</a></li>
												
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
							<div class="home_title">Contact</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact form -->
				<div class="col-lg-8 contact_col">
					<div class="contact_form">
						<div class="contact_title">Entrer en Contact</div>
						<div class="contact_form_container">
							<form action="#" id="contact_form" class="contact_form">
								<input type="text" id="contact_input" class="contact_input" placeholder="Votre Nom" name="name" required="required">
								<input type="email" id="contact_email" class="contact_input" placeholder="Votre E-mail" name="email" required="required">
								<textarea class="contact_input contact_textarea" id="contact_textarea" placeholder="Message"  name="message" required="required"></textarea>
								<button class="contact_button" id="contact_button">Envoyer message</button>
							</form>
						</div>
					</div>
				</div>

				<!-- Make an Appointment -->
				<div class="col-lg-4 contact_col">
					<div class="info_form_container">
						<div class="info_form_title">Espace Partenariat</div>
						<form action="#" class="info_form" id="info_form">
							<select name="info_form_dep" id="info_form_dep" class="info_form_dep info_input info_select">
								<option>Medecin</option>
								<option>Structure Santé</option>
								<option>Entreprise</option>
							</select>
							<select name="info_form_doc" id="info_form_doc" class="info_form_doc info_input info_select">
								<option>Doctor</option>
								<option>Doctor</option>
								<option>Doctor</option>
							</select>
							<input type="text" class="info_input" placeholder="Votre Nom" required="required">
							<input type="text" class="info_input" placeholder="Votre Téléphone">
							<button class="info_form_button">Envoyer</button>
						</form>
					</div>
				</div>

				<!-- contact info -->
				<div class="contact_info">
					<div class="row">
						<div class="col-lg-3 offset-lg-1">
							<div class="contact_info_list">
								<div class="contact_info_title">Contact Info</div>
								<ul>
									<li><span>Address: </span>Station Pharmacie Patte D'oie</li>
									<li><span>Email: </span>networksouleymanen@gmail.com</li>
									<li><span>Phone: </span>77 677 25 49</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="contact_info_list contact_info_list_2">
								
							</div>
						</div>
						<div class="col-lg-3">
							<div class="contact_info_list">
								<div class="contact_info_title">Disponibilité</div>
								<ul>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Lundi-Jeudi</div>
										<div class="ml-auto">8.00 - 19.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Vendredi</div>
										<div class="ml-auto">8.00 - 19.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Samedi</div>
										<div class="ml-auto">9.00 - 17.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Dimanche</div>
										<div class="ml-auto">9.00 - 15.00</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Google Map -->

	<div class="contact_map">
		<!-- Google Map -->
		<div class="map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map"></div>
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
								<a href="index">Fo Nekk Docteur<span>+</span></a>	
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
<script src="{{URL::asset('plugins/easing/easing.js')}}"></script>
<script src="{{URL::asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{URL::asset('https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA')}}"></script>
<script src="{{URL::asset('js/contact.js')}}"></script>
</body>
</html>