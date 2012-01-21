<!-- Tag head -->
	<!-- Autore: Marco Pavan - pavan.marco@email.it -->
	<!-- Data: 28 sett 2010 -->		
	<!-- Titolo pagina -->
	<!-- Inserimento del tag head -->
	<head>
		<title><?php echo $titolo_pagina; ?></title> <!-- il titolo della pagina viene impostato dinamicamente -->

		<!-- Autore e tipologia contenuto -->
		<meta name="author" content="Marco Pavan" />
		<meta http-equiv="Content-Type" content="application/xhtml+xml" />
		<meta content="UTF-8" />

		<!-- Metatag generici-->
		<meta name="msvalidate.01" content="000000000000000000000" />		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<meta http-equiv="Content-Style-Type" content="text/css" />

		<!-- Metatag specifici per pagina-->
		<?php 
			switch($pagina) {
				
				case 'home':
					echo '<meta name="robots" content="index,follow" />';
					echo '<meta name="keywords" content="friuli, friulano, doc, docg, colli, orientali, collio, produzione, vino, vini, italia" />';
					echo '<meta name="description" content="Vini Tricardi - Produzione e vendita di vino doc e docg dei Colli Orientali del Friuli – Italia. Visita il nostro sito." />';
					echo '<meta name="subject" content="Vini Tricardi - Produzione e vendita di vino doc e docg dei Colli Orientali del Friuli – Italia. Visita il nostro sito." />';
				break;
				
				
				
				case 'chi_siamo': 
					echo '<meta name="robots" content="index,follow" />';
					echo '<meta name="keywords" content="vino, vini, rosso, bianco, italiano, produzione, colli, orientali, friuli, venezia, giulia, italia, doc, docg" />';
					echo '<meta name="description" content="Vini Tricardi - Produzione e vendita di vino doc e docg dei Colli Orientali del Friuli – Italia. Visita il nostro sito." />';
					echo '<meta name="subject" content="Vini Tricardi - Produzione e vendita di vino doc e docg dei Colli Orientali del Friuli – Italia. Visita il nostro sito." />';
				break;
				
				
				
				case 'il_locale':
					echo '<meta name="robots" content="index,follow" />';
					echo '<meta name="keywords" content="produzione, distribuzione, produttori, vini, italiani, friulani, rossi, bianchi" />';
					echo '<meta name="description" content="L azienda italiana Tricardi produce e distribuisce vini rossi e bianchi del Collio Friulano. Visita il nostro sito." />';
					echo '<meta name="subject" content="L azienda italiana Tricardi produce e distribuisce vini rossi e bianchi del Collio Friulano. Visita il nostro sito." />';
				break;
				
				
				
				case 'eventi':
					echo '<meta name="robots" content="index,follow" />';
					echo '<meta name="keywords" content="vini, italia, vino, italiano" />';
					echo '<meta name="description" content="Vino italiano, vini prodotti in Italia – Tricardi – Contatti" />';
					echo '<meta name="subject" content="Vino italiano, vini prodotti in Italia – Tricardi – Contatti" />';
				break;
				
				
				
				case 'prenota':
					echo '<meta name="robots" content="index,follow" />';
					echo '<meta name="keywords" content="vino, vini, doc, docg, friuli, friulani, collio" />';
					echo '<meta name="description" content="Vini doc e docg del Collio Friuli Venezia Giulia" />';
					echo '<meta name="subject" content="Vini doc e docg del Collio Friuli Venezia Giulia" />';
				break;
				
				
				
				case 'mappa':
					echo '<meta name="robots" content="index,follow" />';
					echo '<meta name="keywords" content="azienda, tricardi" />';
					echo '<meta name="description" content="Azienda Tricardi, Friuli, Italia - Link suggeriti" />';
					echo '<meta name="subject" content="Azienda Tricardi produttori di vino in Friuli, Italia - Link suggeriti" />';
				break;
				
				
				
				case 'contatti':
					echo '<meta name="robots" content="index,follow" />';
					echo '<meta name="keywords" content="produttori, vini, distribuzione, vino, italia, friuli" />';
					echo '<meta name="description" content="Produttori di vini e distribuzione di vino dal Friuli (Italia). Visita il nostro sito." />';
					echo '<meta name="subject" content="Produttori di vini e distribuzione di vino dal Friuli (Italia). Visita il nostro sito." />';
				break;
				
				
				
				case 'il_nostro_menu':
					echo '';
				break;
				
				
				
				case 'specialita':
					echo '';
				break;
				
				
				
				case 'i_nostri_vini':
					echo '';
				break;
				
				
				
				case 'link_suggeriti':
					echo '';
				break;
				
				
				
				case 'mappa_del_sito':
					echo '';
				break;
				
				
				
				default:
					echo '';
				break;
				
					}
			?>
		
		<!-- Inserimento favicon -->
		<link rel="shortcut icon" href="img/favicon.png"  />

		<!-- JavaScript -->
		<script type="text/javascript" src="/javascript/script.js"></script>
		<script type="text/javascript" src="/javascript/core.js"></script>
		<script type="text/javascript" src="/javascript/accordion.js"></script>

		<!-- Regole di stile -->
		<link rel="stylesheet" type="text/css" href="/style/stile.css" media="screen" title="stile" />
		
		<!-- Regole di stile specifiche per ogni pagina -->
		<style type="text/css">
			<?php 
				switch($pagina) {
					case 'home':
						echo '#home_o {color: #FFFFFF; background: -moz-linear-gradient(bottom, #CC3333, #FF6666);
	background: -webkit-gradient(linear, center bottom, center top, from(#FF6666), to(#CC3333)); padding: 5px;}';
					break;
					
					case 'chi_siamo': 
						echo '#chi_siamo_o {color: #FFFFFF; background: -moz-linear-gradient(bottom, #CC3333, #FF6666);
	background: -webkit-gradient(linear, center bottom, center top, from(#FF6666), to(#CC3333)); padding: 5px;}';
					break;
					
					case 'il_locale':
						echo '#locale_o {color: #FFFFFF; background: -moz-linear-gradient(bottom, #CC3333, #FF6666);
	background: -webkit-gradient(linear, center bottom, center top, from(#FF6666), to(#CC3333)); padding: 5px;}';
					break;
					
					case 'eventi':
						echo '#eventi_o {color: #FFFFFF; background: -moz-linear-gradient(bottom, #CC3333, #FF6666);
	background: -webkit-gradient(linear, center bottom, center top, from(#FF6666), to(#CC3333)); padding: 5px;}';
					break;
					
					case 'prenota':
						echo '#prenota_o {color: #FFFFFF; background: -moz-linear-gradient(bottom, #CC3333, #FF6666);
	background: -webkit-gradient(linear, center bottom, center top, from(#FF6666), to(#CC3333)); padding: 5px;}';
					break;
					
					case 'mappa':
						echo '#mappa_o {color: #FFFFFF; background: -moz-linear-gradient(bottom, #CC3333, #FF6666);
	background: -webkit-gradient(linear, center bottom, center top, from(#FF6666), to(#CC3333)); padding: 5px;}';
					break;
					
					case 'contatti':
						echo '#contatti_o {color: #FFFFFF; background: -moz-linear-gradient(bottom, #CC3333, #FF6666);
	background: -webkit-gradient(linear, center bottom, center top, from(#FF6666), to(#CC3333)); padding: 5px;}';
					break;
					
					case 'il_nostro_menu':
						echo '';
					break;
					
					case 'specialita':
						echo '';
					break;
					
					case 'i_nostri_vini':
						echo '';
					break;
					
					case 'link_suggeriti':
						echo '';
					break;
					
					case 'mappa_del_sito':
						echo '';
					break;
					
					default:
						echo '';
					break;
						}
				?>
		</style> 

		<!-- Regole aggiuntive per browser Microsoft -->
		<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="/style/stile-ie.css" />
		<![endif]-->
		
	</head>
	<!-- fine tag head -->