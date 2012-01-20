<!-- Home page del sito -->
<!-- Autore: Marco Pavan - pavan.marco@email.it -->
<!-- Data: 28 sett 2010 -->
<?php
//Imposto due variabili di uso generale
$titolo_pagina = "Template - Pagina eventi;";
$pagina = "eventi";
?>

<!-- Dichiarazione del DOCTYPE -->
<?php include('../includes/doctype.php'); ?>

<!-- Corpo del documento -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
	
	
	<?php include('../includes/tag_head.php'); ?>
	<body>	
		<!-- Link per raggiungere direttamente il contenuto principale saltando le voci del menù -->
		<p id="vaiAlCorpoCentrale"><a href="#supportingText">Vai al contenuto principale</a></p>	
		<!-- Wrapper del contenuto della pagina -->
		<div id="container">
			<!-- Introduzione -->
			<div id="intro"> 
				<div id="intro_inner1">
					<?php include('../includes/menu_servizio.php'); ?>			
					<?php include('../includes/searchEngine_interno.php'); ?>
					<!-- Breve riassunto degli argomenti o spazio per avvisi -->				
					<!--<div id="quickSummary">-->
						<!--<p class="p1"><span>Quick summary titolo</span></p>
						<p class="p2"><span>Quick summary testo</span></p>-->	
					<!--</div>-->
					<!-- Fine riassunto degli argomenti o avvisi -->		
					<div class="clear_both"></div>
				</div>
				<div id="intro_inner2">	
					<?php include('../includes/menu_orizzontale.php'); ?>									
					<?php include('../includes/pageHeader.php'); ?>
					<!-- Breadcrums -->
					<!--<div id="breadcrums">	
						<p id="sei_in"><span>Sei in:</span></p>
						<ul id="listaBreadcrums">
							<li id="bread_1"><a title="Vai in home page" href="index.php">Home</a></li>
							<li id="bread_2"><a title="Vai alla pagina 2" href="http://www.google.it">&gt;&gt; Pagina 2</a></li>
							<li id="bread_3"><a title="Vai alla pagina 2" href="http://www.google.it">&gt;&gt; Pagina 3</a></li>
						</ul>
					</div>-->	
					<!-- Fine breadcrums -->
					<!-- Breve preambolo -->
					<!--<div id="preamble"> -->
						<!--<h3><span>Titolo preambolo</span></h3>
						<p class="p1"><span>Preambolo paragrafo 1</span></p>
						<p class="p2"><span>Preambolo paragrafo 2</span></p>
						<p class="p3"><span>Preambolo paragrafo 3</span></p>-->
					<!--</div>-->			
					<!-- Fine preamble -->
				</div>
			</div>			
			<!-- Fine introduzione -->
			<div id="separator_1"><div id="inner1"></div></div>
			<div id="separator_2"><div id="inner2"></div></div>
			<!-- Wrapper corpo principale -->
			<div id="wrapper_corpo_principale">
				<div id="wrapper_inner">
					<?php /*include('../includes/colonnaSx.php');*/ ?>	
					<?php /*include('../includes/colonnaDx_eventi.php');*/ ?>	
					<!-- Testo principale del documento -->
					<div id="supportingText">
						<?php /*include('../includes/print_friendly.php');*/ ?>
						<!-- Indice argomenti del corpo centrale -->
						<!--<div id="indiceCorpoCentrale">-->
							<!--<ul id="listaIndiceCorpoCentrale">
								<li><a href="#explanation" title="Vai al paragrafo 1">Paragrafo 1</a></li>
								<li><a href="#participation" title="Vai al paragrafo 2">Paragrafo 2</a></li>
								<li><a href="#benefits" title="Vai al paragrafo 3">Paragrafo 3</a></li>
								<li><a href="#requirements" title="Vai al paragrafo 4">Paragrafo 4</a></li>
							</ul>-->
						<!--</div>-->
						<!-- Fine Indice argomenti del corpo centrale -->
						<!-- Lista Keywords -->
						<!--<div id="lista_keywords">
							<h6>Tag</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper orci eget sem dignissim nec ultrices ligula elementum</p>
						</div>-->
						<!-- Primo paragrafo -->
						<div id="explanation">
							<h3>Eventi</h3>
							<p>Fusce vel nibh et ante rutrum suscipit at nec lacus. Donec rutrum congue nunc vitae vehicula. Nam vitae feugiat enim. In laoreet, libero quis luctus sollicitudin, ligula sapien commodo ligula, in malesuada nisl est nec neque. In dapibus sem a ligula lacinia egestas. Aliquam suscipit gravida pulvinar. Cras at tortor dolor.<br /><br />
							Cras at tortor dolor. Sed rhoncus leo sed sem convallis viverra. Nam et justo justo, sed posuere nibh. Aliquam a diam neque, laoreet fringilla odio.
							</p>
							<hr/>
							<!-- Metodo ad inserimento dinamico delle news-->
							<?php
								// The file news.xml contains an XML document with a root element
									if (file_exists('news.xml')) {
										$xml = simplexml_load_file('news.xml');
										$evento = $xml->evento;
										for ($i = count($evento) - 1; $i >= 0; $i--) {
											$codice=$evento[$i]->codiceEvento;
											$titolo=$evento[$i]->titolo;
											$data=$evento[$i]->data;
											$ora=$evento[$i]->ora;
											$luogo=$evento[$i]->luogo;
											$contatto=$evento[$i]->contatto;
											$link1=$evento[$i]->link1;
											$descrizione=$evento[$i]->descrizione;
											$descrizioneBreve=$evento[$i]->descrizioneBreve;
											$immagine1=$evento[$i]->immagine1;
											$immagine2=$evento[$i]->immagine2;
											$immagine3=$evento[$i]->immagine3;
											$immagine4=$evento[$i]->immagine4;
											$immagine5=$evento[$i]->immagine5;
												
											//Scrivo la news
											echo '<div class="news">';
											echo '<div class="anteprima_descrizione_news">';
											echo "<a href=\"./pagine_evento/evento_$codice.php\"><img  class=\"img_preview_evento\" alt=\"\" src=\"./img/$immagine1\" /></a>";
											echo '</div>';
											echo '<div class="">';
											echo "<a href=\"./pagine_evento/evento_$codice.php\">";
											echo '<h3 id="' . $codice . '"><span>' . $titolo . '</span></h3>';
											echo "</a>";
											//echo '<p class="p1">';
											//echo '<br/>';
											//echo '<span><strong>Data:</strong>' . $data . '</span><br/>';
											//echo '<span><strong>Ora:</strong>' . $ora . '</span><br/>';
											//echo '<span><strong>Luogo:</strong>' . $luogo . '</span><br/>';
											//echo '</p>';
											echo '<p>';
											echo '<span>' . $descrizioneBreve . '</span<br/>';
											echo '</p>';
											echo '</div>';
											//echo '<p>';
											//echo '<span><strong>Contatto:</strong>' . $contatto . '</span><br/>';
											//echo '<span><strong>Link:</strong>' . $link1 . '</span><br/>';
											
											//echo '</p>';
											/*echo '<div class="galleria_immagini_evento">';
											if($immagine1!='') {
											echo '<a href="./gallery2.php?evento=' . $codice . '&img=' . $immagine1 . '&pagina=eventi"><img  class="immagini_evento" alt="" src="./img/' . $immagine1 . '" /></a>';
											}
											if($immagine2!='') {
											echo '<a href="./gallery2.php?evento=' . $codice . '&img=' . $immagine2 . '&pagina=eventi"><img  class="immagini_evento" alt="" src="./img/' . $immagine2 . '" /></a>';
											}
											if($immagine3!='') {
											echo '<a href="./gallery2.php?evento=' . $codice . '&img=' . $immagine3 . '&pagina=eventi"><img class="immagini_evento" alt="" src="./img/' . $immagine3 . '" /></a>';
											}
											if($immagine4!='') {
											echo '<a href="./gallery2.php?evento=' . $codice . '&img=' . $immagine4 . '&pagina=eventi"><img class="immagini_evento" alt="" src="./img/' . $immagine4 . '" /></a>';
											}
											if($immagine5!='') {
											echo '<a href="./gallery2.php?evento=' . $codice . '&img=' . $immagine5 . '&pagina=eventi"><img class="immagini_evento" alt="" src="./img/' . $immagine5 . '" /></a>';
											}
											echo '</div>';*/
											echo '<div class="clear_both"></div>';
											echo '</div>';

											
										}
									}

										// For each <evento> node
										/*foreach ($xml->evento as $evento) {
											//Inizializzo le variabili
											$codice = $evento->codiceEvento;
											$titolo = $evento->titolo;
											$data = $evento->data;
											$ora = $evento->ora;
											$luogo = $evento->luogo;
											$contatto = $evento->contatto;
											$link1 = $evento->link1;
											$descrizione = $evento->descrizione;
											$descrizioneBreve = $evento->descrizioneBreve;
											$immagine1 = $evento->immagine1;
											$immagine2 = $evento->immagine2;
											$immagine3 = $evento->immagine3;
											$immagine4 = $evento->immagine4;
											$immagine5 = $evento->immagine5;
		
											//Scrivo la news
											echo '<div class="news">';
											echo '<h3 id="' . $codice . '"><span>' . $titolo . '</span></h3>';
											echo '<p class="p1">';
											echo '<br/>';
											echo '<span><strong>Data:</strong>' . $data . '</span><br/>';
											echo '<span><strong>Ora:</strong>' . $ora . '</span><br/>';
											echo '<span><strong>Luogo:</strong>' . $luogo . '</span><br/>';
											echo '</p>';
											echo '<p>';
											echo '<span>' . $descrizione . '</span<br/>';
											echo '</p>';
											echo '<p>';
											echo '<span><strong>Contatto:</strong>' . $contatto . '</span><br/>';
											echo '<span><strong>Link:</strong>' . $link1 . '</span><br/>';	
											//echo '<a href="#"><img  class="img_preview_evento" alt="" src="./img/' . $immagine1 . '" /></a>';
											echo '</p>';
											echo '<div class="galleria_immagini_evento">';
											if($immagine1!='') {
											echo '<a href="./gallery2.php?evento=' . $codice . '&img=' . $immagine1 . '&pagina=eventi"><img  class="immagini_evento" alt="" src="./img/' . $immagine1 . '" /></a>';
											}
											if($immagine2!='') {
											echo '<a href="./gallery2.php?evento=' . $codice . '&img=' . $immagine2 . '&pagina=eventi"><img  class="immagini_evento" alt="" src="./img/' . $immagine2 . '" /></a>';
											}
											if($immagine3!='') {
											echo '<a href="./gallery2.php?evento=' . $codice . '&img=' . $immagine3 . '&pagina=eventi"><img class="immagini_evento" alt="" src="./img/' . $immagine3 . '" /></a>';
											}
											if($immagine4!='') {
											echo '<a href="./gallery2.php?evento=' . $codice . '&img=' . $immagine4 . '&pagina=eventi"><img class="immagini_evento" alt="" src="./img/' . $immagine4 . '" /></a>';
											}
											if($immagine5!='') {
											echo '<a href="./gallery2.php?evento=' . $codice . '&img=' . $immagine5 . '&pagina=eventi"><img class="immagini_evento" alt="" src="./img/' . $immagine5 . '" /></a>';
											}
											echo '</div>';
											//echo '<div class="clear_both"></div>';
											echo '</div>';											
											
											//Collegamenti a  facebook, l pagina deve essere su un server accessibile
											//Commenti
											echo '<div class="commenti_facebook_evento">';
											echo '<div id="fb-root">';
											echo '</div><script src="http://connect.facebook.net/en_US/all.js#appId=APP_ID&amp;amp;xfbml=1"></script>';
											echo '<fb:comments xid="100100100" numposts="5" width="425" publish_feed="true"></fb:comments>';
											echo '</div>';
											//Mi piace
											//echo '<div class="like_facebook_evento">';
											//echo '<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>';
											//echo '<fb:like href="' . 'http://www.127.0.0.5/eventi/eventi.php' . '#' . $codiceEvento . '"show_faces="true" width="450" action="recommend" font="arial"></fb:like>';
											//echo '</div>';
											//echo '</div>';
										}
									}*/
									else {
										exit('Apertura file XML fallita.');
									}
							?>
						</div>		
						<!-- Fine primo paragrafo -->
					</div>
					<!-- Fine div supportingText -->
					<div class="clear_both"></div>
				</div> <!--Fine wrapper inner-->
			</div> <!-- Fine wrapper coprpo centrale -->
			<div id="separator_3"><div id="inner3"></div></div>	
			<?php include('../includes/footer.php'); ?>
			<?php include('../includes/footer2.php'); ?>
		</div>		
		<!-- Fine container -->			
		<!-- Inserimento codice StatCounter -->
		<?php include('../includes/statCounterCode.php'); ?>
		<!-- Fine codice StatCounter -->
	</body>
</html>
<!--fine home page -->