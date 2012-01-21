<!-- Home page del sito -->
<!-- Autore: Marco Pavan - pavan.marco@email.it -->
<!-- Data: 28 sett 2010 -->
<?php
//Imposto due variabili di uso generale
$titolo_pagina = "Template - Il nostro menu";
$pagina = "il_nostro_menu";
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
					<!--<div id="quickSummary">
						<p class="p1"><span>Quick summary titolo</span></p>
						<p class="p2"><span>Quick summary testo</span></p>
					</div>-->
					<!-- Fine riassunto degli argomenti o avvisi -->		
					<div class="clear_both"></div>
				</div>
				<div id="intro_inner2">	
					<?php include('../includes/menu_orizzontale.php'); ?>									
					<?php include('../includes/pageHeader.php'); ?>
					<!-- Breadcrums -->
					<div id="breadcrums">	
						<p id="sei_in"><span>Sei in:</span></p>
						<ul id="listaBreadcrums">
							<li id="bread_1"><a title="Vai in home page" href="../index.php">Home</a></li>
							<li id="bread_2"><a title="Vai alla pagina 2" href="#">&gt;&gt; Pagina 2</a></li>
							<li id="bread_3"><a title="Vai alla pagina 2" href="#">&gt;&gt; Pagina 3</a></li>
						</ul>
					</div>
					<!-- Fine breadcrums -->
					<!-- Breve preambolo -->
					<!-- Breve preambolo -->
					<!--<div id="preamble"> 
						<h3><span>Titolo preambolo</span></h3>
						<p class="p1"><span>Preambolo paragrafo 1</span></p>
						<p class="p2"><span>Preambolo paragrafo 2</span></p>
						<p class="p3"><span>Preambolo paragrafo 3</span></p>
					</div>-->			
					<!-- Fine preambolo -->
				</div>
			</div>			
			<!-- Fine introduzione -->
			<div id="separator_1"><div id="inner1"></div></div>
			<div id="separator_2"><div id="inner2"></div></div>
			<!-- Wrapper corpo principale -->
			<div id="wrapper_corpo_principale">
				<div id="wrapper_inner">
					<?php /*include('../includes/colonnaSx.php');*/ ?>	
					<?php include('../includes/colonnaDx_proposte.php'); ?>	
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
							<h3>Bar</h3>
							<h3><span>Titolo 1</span></h3>
							<p class="p1">
							<span>Piatto 1<br />
							<a href="#"><img id="foto1" class="" alt="Lorem ipsum dolor sit amet" src="img/1ico.jpg" /></a>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper orci eget sem dignissim nec ultrices ligula elementum. Donec justo nisi, vulputate non luctus eu, laoreet in nulla. Donec eros massa, accumsan vel auctor accumsan, pretium at odio. Sed rutrum iaculis nisl id viverra. Phasellus lorem turpis, suscipit eget elementum id, feugiat bibendum erat. Nullam ornare mauris vitae lacus commodo convallis. Etiam in orci ligula. Proin vel elit quis mi tincidunt malesuada malesuada vitae nisl. Aenean gravida tincidunt diam, vel ornare velit dignissim sit amet. Praesent urna metus, convallis nec commodo egestas, posuere non mauris. Pellentesque ac tellus non ligula sagittis vulputate. 
							</span>
							</p>
							<p class="p2">
							<span>Piatto 2<br />
							<a href="#"><img id="foto2" class="" alt="Lorem ipsum dolor sit amet" src="img/1ico.jpg" /></a>
							Maecenas in eros quam, a cursus ante. Cras sem elit, sodales ut rhoncus vel, fermentum vel elit. Sed ac facilisis elit. Cras ut metus sapien, congue hendrerit quam. Fusce vel nibh et ante rutrum suscipit at nec lacus. Donec rutrum congue nunc vitae vehicula. Nam vitae feugiat enim. In laoreet, libero quis luctus sollicitudin, ligula sapien commodo ligula, in malesuada nisl est nec neque. In dapibus sem a ligula lacinia egestas. Aliquam suscipit gravida pulvinar. Cras at tortor dolor. Sed rhoncus leo sed sem convallis viverra. Nam et justo justo, sed posuere nibh. Aliquam a diam neque, laoreet fringilla odio. Aliquam sit amet enim elementum libero molestie suscipit. Morbi eu diam nunc, nec vulputate elit. Vivamus pulvinar diam in dolor condimentum dictum. Mauris vel risus id eros facilisis rutrum quis at orci. Integer sapien orci, hendrerit non accumsan quis, mollis vel nibh. Cras ac scelerisque lorem.<br />
							<a class="torna_in_alto" href="#supportingText">Torna in alto</a>
							</span>
							</p>
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