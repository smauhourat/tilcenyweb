<?php
  require("class.phpmailer.php");
  require("class.smtp.php");

  echo "------------------ ENVIADOS ------------------ \n";
  if(isset($_POST["name"]))
        echo $_POST["name"] . "\n";
  if(isset($_POST["email"]))
        echo $_POST["email"] . "\n";
  if(isset($_POST["subject"]))
        echo $_POST["subject"] . "\n";
  if(isset($_POST["message"]))
        echo $_POST["message"] . "\n";

  // $receiving_email_address = 'info@tilceny.com';
  // echo $receiving_email_address . "\n";
  echo "------------------ FIN ------------------ \n";


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 465; 
$mail->SMTPSecure = 'ssl';
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = 'server377.dinamichosting.com'; 
$mail->Username = 'webmaster@tilceny.uy'; 
$mail->Password = 'Tacho555_';

$mail->From = 'webmaster@tilceny.com'; // Email desde donde envío el correo.
$mail->FromName = 'Contacto-Web';
$mail->AddAddress('info@tilceny.com'); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = "Tilceny.uy - Contacto Web"; // Este es el titulo del email.
$Body = "";
$Body .= "Name: ";
$Body .= $_POST["name"];
$Body .= "\n";
$Body .= "Email: ";
$Body .= $_POST["email"];
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $_POST["subject"];
$Body .= "\n";
$Body .= "Message: ";
$Body .= $_POST["message"];
$Body .= "\n";
$mensajeHtml = nl2br($Body);
$mail->Body = "{$mensajeHtml} <br /><br />{$name}<br />{$email}"; // Texto del email en formato HTML
$mail->AltBody = "{$Body} \n\n"; // Texto sin formato <HTML></HTML>


// FIN - VALORES A MODIFICAR //

$success = $mail->Send(); 


// redirect to success page
if ($success && $errorMSG == ""){
   echo "OK";
}else{
    if($errorMSG == ""){
        echo "Ha ocurrido un error :(";
    } else {
        echo $errorMSG;
    }
}


  // echo "------------------ RECIBIDOS ------------------ \n";
  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   echo $php_email_form . "\n";
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }
  
  // $contact = new PHP_Email_Form;
  // // //$contact->ajax = true;
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];
  // $contact->message = $_POST['message'];

  // $contact->smtp_host = 'server377.dinamichosting.com';
  // $contact->smtp_username = 'webmaster@tilceny.uy';
  // $contact->smtp_password = 'Tacho555_';
  // $contact->smtp_port = '465';

  // $contact->send();
  // echo "------------------ FIN ------------------ \n";



 

  //$contact->add_message( $_POST['name'], 'From');
  //$contact->add_message( $_POST['email'], 'Email');
  //$contact->add_message( $_POST['message'], 'Message', 10);

  //echo $contact->send();
?>
