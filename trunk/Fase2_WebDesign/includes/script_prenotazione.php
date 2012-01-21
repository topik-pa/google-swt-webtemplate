<!-- Form per prenotare (script)-->
<!-- Autore: Marco Pavan - pavan.marco@email.it -->
<!-- Data: 28 sett 2010 -->
<?php

function escape_data($data) {		# Funzione per la gestione dei dati ricevuti dalle form HTML

	if (ini_get('magic_quotes_gpc')) {	# Controllo se è attivata la modaltà Magic Quotes (che immette dei caratteri "|" prima di eventuali apici
		$data=stripslashes($data);	# Tolgo i caratteri "|" inseriti da Magic Quotes con la funzione stripslashes
		}
	return $data; # Ritorno la stringa formattata correttamente
	}


if (isset($_POST['invia_prenotazione'])) {		# Verifico l'attivazione del pulsante "Registrati" della form
	
	if (eregi ("^[[:alpha:].' -]{2,15}$", stripslashes(trim($_POST['nome_offerta'])))) {	# Validazione dei dati in input tramite espressioni regolari e funzioni apposite di PHP
		$fn=escape_data($_POST['nome_offerta']);						# Passaggio dei dati in input alla funzione escape_data per l'elaborazione
		}
	else {
		$fn=FALSE;									# Nel caso i dati non siano validi
		echo '<p class="msg_errore">Attenzione: NOME non valido<br /></p>';
		}
		
	if (eregi ("^[[:alpha:].' -]{2,30}$", stripslashes(trim($_POST['cognome_offerta'])))) {		# Last name
		$ln=escape_data($_POST['cognome_offerta']);
		}
	else {
		$ln=FALSE;
		echo '<p class="msg_errore">Attenzione: COGNOME non valido<br /></p>';
		}
	
	if (eregi ("^[[:alpha:].' -]{2,30}$", stripslashes(trim($_POST['azienda_offerta'])))) {		# Company
		$cn=escape_data($_POST['azienda_offerta']);
		}
	else {
		$cn=FALSE;
		echo '<p class="msg_errore">Attenzione: AZIENDA non valida<br /></p>';
		}

	if (eregi ("^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$", stripslashes(trim($_POST['email_offerta'])))) {	# E-mail
		$e=escape_data($_POST['email_offerta']);
		}
	else {
		$e=FALSE;
		echo '<p class="msg_errore">Attenzione: E-MAIL non valida<br /></p>';
		}

	if (eregi ("^[[:alnum:].' -]{2,30}$", stripslashes(trim($_POST['telefono_offerta'])))) {		# Telefono
		$tel=escape_data($_POST['telefono_offerta']);
		}
	else {
		$tel=FALSE;
		echo '<p class="msg_errore">Attenzione: NUMERO DI TELEFONO non valido<br /></p>';
		}

	if (eregi ("^[[:alnum:].' -/]{2,30}$", stripslashes(trim($_POST['indirizzo_offerta'])))) {		# Address
		$address=escape_data($_POST['indirizzo_offerta']);
		}
	else {
		$address=FALSE;
		echo '<p class="msg_errore">Attenzione: INDIRIZZO non valida<br /></p>';
		}

	if (eregi ("^[[:alpha:].' -]{2,250}$", stripslashes(trim($_POST['note_offerta'])))) {	#  Eventuali note
		$note=escape_data($_POST['note_offerta']);						
		}
	else {
		$note='nessuna nota aggiuntiva';							# Nel caso non ci siano altre note
		}

	if ($fn && $ln && $cn && $e && $tel && $address) {					# Se i dati obbligatori sono stati inseriti correttamente...

     		$ref = $_SERVER['HTTP_REFERER'];	# Raccolgo dati generali
     		$ua = $_SERVER['HTTP_USER_AGENT'];
     		$ip = $_SERVER['REMOTE_ADDR'];
     		$sn = $_SERVER['SERVER_NAME'];
			     
     		$obj = 'TRICARDI: nuova offeerta!';	# Compongo il messaggio
     		$msg = 'Nuova offerta da un utente del sito' . "\n\r";
    	 	$msg .= 'NOME e COGNOME:' . "\n" . $fn . " " . $ln . "\n\r";
		$msg .= 'AZIENDA:' . "\n" . $cn . "\n\r";
     		$msg .= 'EMAIL:' . "\n" . $e . "\n\r\n\r";
     		$msg .=  'TELEFONO:' . $tel . "\n\r\n\r";
		$msg .=  'INDIRIZZO:' . $address . "\n\r\n\r";
		$msg .=  'ALTRE NOTE:' . $note . "\n\r\n\r";
     		$msg .= 'ip address: ' . $ip . "\n";
     		$msg .= 'user-agent: ' . $ua . "\n";
     		$msg .= 'http referer: ' . $ref . "\n\r";

		$replyto = $e;
			     
     		$headers = 'From: ' . $replyto . "\r\n";
     		$headers .= 'Reply-To:' . $replyto . "\r\n";
     		$headers .= 'X-Mailer: PHP/' . phpversion();

     		$mail = 'marcopavan.mp@gmail.com'; //indirizzi a cui spedire 
		$mail2 = '';
		$mail3 = '';
		$mail4 = '';

     		$wmsg =  wordwrap($msg, 70);
     		mail($mail,$obj,$wmsg,$headers); // invia la mail
		//mail($mail2,$obj,$wmsg,$headers); // invia la mail
		//mail($mail3,$obj,$wmsg,$headers); // invia la mail
		//mail($mail4,$obj,$wmsg,$headers); // invia la mail

     		$exitMessage = '<p class="msg_errore">Messaggio inviato, grazie!</p>';
		echo $exitMessage;	
	}
	
}

?>
<!-- Fine script prenotazione -->
