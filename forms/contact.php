<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */


  if(isset($_POST["name"]))
        echo $_POST["name"];
  echo "\n";
  if(isset($_POST["email"]))
        echo $_POST["email"];
        echo "\n";
  if(isset($_POST["subject"]))
        echo $_POST["subject"];
        echo "\n";
  if(isset($_POST["message"]))
        echo $_POST["message"];
  echo "\n";

  $receiving_email_address = 'info@tilceny.com';
  echo $receiving_email_address;
  echo "\n";
  echo "FIN";
  echo "\n";

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    echo $php_email_form;
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  echo "FIN2";

  // $contact = new PHP_Email_Form;
  // //$contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  // $contact->smtp = array(
  //   'host' => 'server377.dinamichosting.com',
  //   'username' => 'webmaster@tilceny.uy',
  //   'password' => 'Tacho555_',
  //   'port' => '465'
  // );
  

  //$contact->add_message( $_POST['name'], 'From');
  //$contact->add_message( $_POST['email'], 'Email');
  //$contact->add_message( $_POST['message'], 'Message', 10);

  //echo $contact->send();
?>
