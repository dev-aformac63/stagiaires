<?php
require_once 'libs/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

dump($_POST);
if(isset($_POST['submit']))
{

  if(filter_var($_POST['txtMail'],FILTER_VALIDATE_EMAIL))
  {
    $mail=new PHPMailer;

    $mail->isSMTP();
    $mail->SMTPDebug=2;

    //authentification
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPSecure ='tls';
    $mail->SMTPAuth=true;
    $mail->Username='';
    $mail->Password='';

    $mail->setFrom('');
    //$mail->addReplyTo();

    $mail->Subject=$_POST['txtSubject'];
    $mail->IsHTML(true);

    $mail->addAddress($_POST['txtMail']);
  	//$mail->addCC();

  	$mail->Body=$_POST['txtContent'];

    if(!$mail->send())
  	{
      echo 'send() KO';
  	}
  	else
  	{
      echo 'send() OK';
    }
  }

}
