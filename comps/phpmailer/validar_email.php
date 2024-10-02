<?php
// include SMTP Email Validation Class
//require_once('SMTP_validateEmail.php');

// the email to validate
$email = $mail_contacto->getEmail();

// an optional sender
$sender = 'dbenviomailing@gmail.com';

// instantiate the class
$SMTP_Validator = new SMTP_validateEmail();

// turn on debugging if you want to view the SMTP transaction
$SMTP_Validator->debug = true;

// do the validation
$results = $SMTP_Validator->validate(array($email), $sender);

// view results
print_r($results);
if($results[$email]){
	$email_existe = true;
}else{
	$email_existe = false;
}


/*
VALIDACION MASIVA
// include SMTP Email Validation Class
require_once('smtp_validateEmail.class.php');

// the email to validate
$emails = array('user@example.com', 'user2@example.com');
// an optional sender
$sender = 'user@yourdomain.com';
// instantiate the class
$SMTP_Validator = new SMTP_validateEmail();
// turn on debugging if you want to view the SMTP transaction
$SMTP_Validator->debug = true;
// do the validation
$results = $SMTP_Validator->validate($emails, $sender);

// view results
foreach($results as $email=>$result) {
        // send email? 
  if ($result) {
    //mail($email, 'Confirm Email', 'Please reply to this email to confirm', 'From:'.$sender."\r\n"); // send email
  } else {
    echo 'The email address '. $email.' is not valid';
  }
}

*/

?>