<!doctype html>
<html>
	<head>
		<title>Offerta siti web Verona, Offerta siti web Bovolone | Simowebdesigner</title>
		<meta charset="utf-8 ">
		<meta name="keywords" content="Siti Web Verona | Realizzazione Siti Internet | Web Designer | Responsive design"/>
		<meta name="description" content="Web Designer specializzato nella realizzazione di siti internet a Verona. Progetto e creo layout responsive adattabili a qualsiasi tipo di schermo e device"/>
		<meta name="Author" content="Simone Puliti" />
		<meta name="robots" content="Index,Follow" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/reset.css">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 9]>
			<style type="text/css">
			.form-row label {
			display:block;
			}
			</style>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if lt IE 10]>
			<style type="text/css">
			.form-row label {
			display:block;
			}
			</style>
		<![endif]-->
		<!--[if lte IE 7]>
			<link type="text/css" rel="stylesheet" href="css/ie7.css">
		<![endif]-->
		
		<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-11940567-6']);
			_gaq.push(['_trackPageview']);
			
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		<link rel="icon" type="image/png" href="http://www.simowebdesigner.it/images/favicon.png" />
	</head>
	<body class="page-price">
		<div class="wrapper">
			<header>
				<section class="brand-two">
					<div class="container"> 
						<!--logo-->
						<div class="column5 content-logo">
							<ul class="top-menu logo text-left">
								<li style="margin-left:0;"><img src="images/logo.png" alt="logo"/></li>
							</ul>
						</div>
						<!--/logo--> 
						<!--menu
							<div class="column7 content-menu text-right">
							<a class="intro-button contact text-center" target="_blank" href="http://www.simowebdesigner.it">VAI AL SITO</a>
						/menu--> 
					</div>
				</section>
				<figure>
					<figcaption>
						<div class="container">
							<div class="caption">
								<div class="column6">
									<h1 class="title">Il tuo sito web a prezzi incredibili!</h1>
									<p>Internet è la più importante vetrina per la tua azienda. Lascia che sia un professionista ad occuparsi della tua immagine</p>
									<ul class="pull-left unstyled">
										<li><i class="fa fa-check-square-o"></i> Grafica accattivante</li>
										<li><i class="fa fa-check-square-o"></i> Visibile su Desktop, Smartphone, Ipad</li>
										<li><i class="fa fa-check-square-o"></i> Ottimizzazione del sito sui motori di ricerca</li>
									</ul>
									<div class="clear"></div>
								<a href="#table" class="intro-button button-princing pull-left margin-top" style="background:#53c5d5; font-weight:500; margin-bottom:30px;">VEDI I PREZZI <i class="fa fa-level-down"></i></a> </div>
								<div class="column5 offset1 text-left">
									<div class="form-box">
										<div class="ancora" id="form"> </div>
										<div class="top">
											<p class="text-center"><i class="fa fa-pencil-square-o"></i> Chiedi informazioni senza impegno <br/>
											<small>Tutti i campi contrassegnati da <span>*</span> sono obbligatori</small></p>
										</div>
										<div class="bottom">
											
											<?php
												require_once 'php/settings.php';
												if(isset($_POST['submit'])){
													foreach ($_POST as $key => $value){
														//elimina eventuali spazi aggiuntivi
														$temp = $value ? trim($value) : '';
														//se è richiesta ma vuota aggiungila all'array missing
														if(!strlen ($temp) && in_array($key, $required)){
															array_push($missing, $key);
														}
														//se il campo è aspettato, setta la variabile associata
														elseif(in_array($key, $expected)){
															${$key} = $temp; //in questo caso crea $nome, $email, $sito, $commento
														}
													}
													if ( empty($missing) ){
														//Se l'array missing è vuoto, vuol dire che sono stati inseriti i valori
														//obbligatori. Costruisco il messaggio   
														$messaggio = stripslashes($messaggio);
														
														$contenuto_email = "Nome: $nome\n\n"; //Queste variabili sono create nel passaggio precedente
														$contenuto_email .= "Email: $email\n\n";
														$contenuto_email .= "Telefono: $sito\n\n";
														$contenuto_email .= "Messaggio:\n $messaggio\n\n";
														//limita la lunghezza a 70 caratteri per la compatibilità
														$contenuto_email = wordwrap($contenuto_email,70);
														//invia l'email    
														//$mail_sent = mail($destinatario,$oggetto,$contenuto_email, 'From: '.$email);
														$mail_sent = mail($destinatario,$oggetto,$contenuto_email, 'From: '.$email); 
														$info_message = '<p class="info">' . $info_mail_sent . '</p>';
														if($mail_sent){
															//Se l'email viene inviata l'array missing non serve più quindi lo svuoto
															unset($missing);
														}
													}
												}
												//se non sono stati immessi campi obbligatori
												if ( isset( $_POST['submit'] ) && isset($missing) && !empty($missing)) :
												$info_message = '<p class="error">' . $error_missing_fields . '</p>';
												elseif ($_POST['submit'] && !$mail_sent) :
												//se ci sono stati problemi con l'invio della mail da parte del server
												$info_message = '<p class="error">' . $error_mail_server . '</p>';
												endif;
												
												
												//Mostra una notifica sia d'errore che di conferma
												if ( isset( $info_message ) && strlen( $info_message ) ) echo $info_message;
												//Include il form
												require_once 'php/form.php';
											?>
										</div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</figcaption>
				</figure>
			</header>
			<div class="content"> 
				
				<!--table-->
				<div class="ancora" id="table"> </div>
				<section class="service service-intro">
					<div class="container">
						<div class="column10 offset1 text-center title-intro">
							<h2 class="title-body"><i class="fa fa-leaf"></i> Offerte siti web</h2>
							<h4 class="margin-bottom-none">Scegli il pacchetto che più si adatta alle tue esigenze.</h4>
						</div>
					</div>
				</section>
				<div class="triangle-content">
					<div class="triangle"></div>
					<div class="triangle-border"></div>
					<div class="triangle-border-white"></div>
				</div>
				<section class="princing-table margin-top">
					<div class="container">
						<div class="princing clear text-left">
							<div class="column4 easy fade-scroll-left margin-top-40">
								<div class="gray-color">
									<div class="content-text">
										<h3 class="pricing-title">Easy </h3>
										<h4 class="pricing-sub">Pagina singola</h4>
										<div class="price">
											<p> <i class="fa fa-eur"></i>119<sub>,00</sub> <span>a partire da</span></p>
										</div>
										<hr class="margin-top-none margin-bottom-none"/>
									</div>
									<div class="gray">
										<ul class="unstyled">
											<li><i class="fa fa-check"></i> Registrazione dominio/spazio web</li>
											<li><i class="fa fa-check"></i> Inserimento contenuti/immagini</li>
											<li><i class="fa fa-check"></i> Singola pagina</li>
											<li><i class="fa fa-check"></i> Visibile su desktop, tablet e smartphone</li>
										</ul>
										<div class="text-center"> <a data-fancybox-type="iframe" href="iframe/easy.html" class="intro-button button-princing various">DETTAGLI</a> </div>
									</div>
								</div>
							</div>
							<div class="column4 standard fade-scroll margin-top-40">
								<div class="gray-color">
									<div class="content-text">
										<h3 class="pricing-title">Standard</h3>
										<h4 class="pricing-sub">Sito istituzionale</h4>
										<div class="price">
											<p> <i class="fa fa-eur"></i>369<sub>,00</sub> <span>a partire da</span></p>
										</div>
										<hr class="margin-top-none margin-bottom-none"/>
									</div>
									<div class="gray">
										<ul class="unstyled">
											<li><i class="fa fa-check"></i> Registrazione dominio/spazio web</li>
											<li><i class="fa fa-check"></i> Inserimento contenuti/immagini</li>
											<li><i class="fa fa-check"></i> Pannello di amministrazione</li>
											<li><i class="fa fa-check"></i> 5 pagine</li>
											<li><i class="fa fa-check"></i> Visibile su desktop, tablet e smartphone</li>
											
										</ul>
										<div class="text-center"> <a data-fancybox-type="iframe" href="iframe/standard.html" class="intro-button button-princing various">DETTAGLI</a> </div>
									</div>
								</div>
							</div>
							<div class="column4 professional fade-scroll-right margin-top-40">
								<div class="gray-color">
									<div class="content-text">
										<h3 class="pricing-title">Premium</h3>
										<h4 class="pricing-sub">Sito professionale</h4>
										<div class="price">
											<p> <i class="fa fa-eur"></i>599<sub>,00</sub> <span>a partire da</span></p>
										</div>
										<hr class="margin-top-none margin-bottom-none"/>
									</div>
									<div class="gray">
										<ul class="unstyled">
											<li><i class="fa fa-check"></i> Registrazione dominio/spazio web</li>
											<li><i class="fa fa-check"></i> Inserimento contenuti/immagini</li>
											<li><i class="fa fa-check"></i> Pannello di amministrazione</li>
											<li><i class="fa fa-check"></i> 10 pagine</li>
											<li><i class="fa fa-check"></i> Visibile su desktop, tablet e smartphone</li>
										</ul>
										<div class="text-center"> <a data-fancybox-type="iframe" href="iframe/professional.html" class="intro-button button-princing various">DETTAGLI</a> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<section class="service service-intro" style="margin:40px 0; border-top:1px solid #ddd;">
					<div class="container">
						<div class="column10 offset1 text-center title-intro">
							<h4>Vuoi un sito web ma non sai da che parte iniziare?  Hai dubbi su prezzi o funzionalità?</h4>
						<h4> Contattami senza impegno dal <strong><a href="#form">modulo contatti <i class="fa fa-hand-o-up"></i></a></strong> in alto o dai <strong><a href="#contact">recapiti qui in basso <i class="fa fa-hand-o-down"></i></a></strong></h4>
						</div>
						</div>
						</section>
						
						<!--contatti-->
						<section class="contatti margin-top-none">
						<div class="container">
						<div class="column12 contact fade-scroll">
						<div class="ancora" id="contact"> </div>
						<div class="contact-me text-center">
						<h3 class="title-body margin-bottom-none">Say hello</h3>
						<h4 class="light">Contattami per un preventivo senza impegno</h4>
						<h4 class="light"><a href="tel:+393200789129">320 0789129</a></h4>
						<h4 class="light"><a href="mailto://simone.puliti@gmail.com">simone.puliti@gmail.com</a></h4>
						<h4 class="light"><a href="http://www.simowebdesigner.it" target="_blank">simowebdesigner.it</a></h4>
						<ul id="social">
						<li><a id="mailme" href="mailto:simone.puliti@gmail.com"><i class="fa fa-envelope"></i></a></li>
						<li><a id="fb" href="https://www.facebook.com/pula.shock" target="blank_"><i class="fa fa-facebook"></i></a></li>
						<li><a id="sky" href="skype:simone.puliti?call" target="blank_"><i class="fa fa-skype"></i></a></li>
						</ul>
						</div>
						</div>
						</div>
						</section>
						<!--/contatti--> 
						<!--footer-->
						<footer class="text-center">
						<p> © 2014 simowebdesigner All rights reserved.</p>
						<div class="bottom-footer">
						<div class="container">
						<p class="margin-bottom-none">Simo Web Designer di Simone Puliti - P.iva: 04269720233 - 
						<i class="fa fa-phone"></i> <a href="tel:+393200789129" style="color:#fff; text-decoration:none;">320 0789129</a> - <i class="fa fa-envelope"></i> <a href="mailto://simone.puliti@gmail.com" style="color:#fff;text-decoration:none;">simone.puliti@gmail.com</a> </p>
						<a href="/#" class="scrolltotop" title="Torna in cima"></a>
						</div>
						</div>
						</footer>
						<!--/footer--> 
						</div>
						</div>
						<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
						<script type="text/javascript" src="fancybox/source/jquery.fancybox.js"></script> 
						<script src="js/jquery.queryloader2.min.js"></script> 
						<script src="js/viewportchecker.js"></script> 
						<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script> 
						<script>
						//form
						$(document).ready(function() {
						$("#formswd").validate({
						messages: {
						email: {
						required: 'Inserisci la tua mail'
						},
						nome: {
						required: 'Inserisci il tuo nome',
						minlength : 'Minimo 3 caratteri'
						},
						sito: {
						minlength : 'Minimo 9 caratteri'
						}
						}
						});
						});
						//popup
						$(document).ready(function() {
						$(".various").fancybox({
						maxWidth	: 800,
						maxHeight	: 600,
						fitToView	: false,
						width		: '70%',
						height		: '70%',
						autoSize	: false,
						closeClick	: false,
						openEffect	: 'none',
						closeEffect	: 'none'
						});
						});
						</script> 
						<script src="js/custom.js"></script>
						</body>
						</html>
												