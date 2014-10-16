<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Modulo contatti in PHP | Your Inspiration Web</title>
   <link rel="stylesheet" type="text/css" href="stile.css" />
</head>
<body>
<?php
require_once 'settings.php';
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
      ${$key} = htmlentities($temp); //in questo caso crea $nome, $email, $sito, $commento
    }
  }
  if ( empty($missing) ){
    //Se l'array missing è vuoto, vuol dire che sono stati inseriti i valori
    //obbligatori. Costruisco il messaggio    
    $contenuto_email = "Nome: $nome\n\n"; //Queste variabili sono create nel passaggio precedente
    $contenuto_email .= "Email: $email\n\n";
    $contenuto_email .= "Sito Web: $sito\n\n";
    $contenuto_email .= "Messaggio:\n $messaggio\n\n";
    //limita la lunghezza a 70 caratteri per la compatibilità
    $contenuto_email = wordwrap($contenuto_email,70);
    //invia l'email    
    $mail_sent = mail($email,$oggetto,$contenuto_email, 'From: '.$email);
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
   require_once 'form.php';
 ?>
</body>
</html>
