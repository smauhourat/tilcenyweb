<?php
  require("class.phpmailer.php");
  require("class.smtp.php");


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 465; 
$mail->SMTPSecure = 'ssl';
//$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = 'server377.dinamichosting.com'; 
$mail->Username = 'webmaster@tilceny.uy'; 
$mail->Password = 'Tacho555_';

$mail->From = 'webmaster@tilceny.uy'; // Email desde donde envío el correo.
$mail->FromName = 'Contacto-Web';
$mail->AddAddress('info@tilceny.uy'); // Esta es la dirección a donde enviamos los datos del formulario

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

?>
