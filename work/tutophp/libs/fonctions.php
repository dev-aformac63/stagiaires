<?php
require_once 'vendor/autoload.php';



/**
 *
 */
function renderTemplate($tpl,$params)
{
	/*
	initialiser le type de chargeur à utiliser, ici le charger de fichiers.
	indiquer en paramètre, le répertoire où sont stockés les templates (gabarits)
	*/
	$loader=new Twig_Loader_Filesystem(dirname(__FILE__).'/../templates/');

	/*
	initialiser l'environnement d'exécution de twig
	*/
	$twig=new Twig_Environment($loader,array('cache'=>false));

	/*
	afficher le code html généré par le moteur twig
	*/
	return $twig->render($tpl,$params);
}

/**
 *
 */
function sendMail()
{
/*
  if(filter_var($_POST['txtMail'],FILTER_VALIDATE_EMAIL))
  {
    $mail=new PHPMailer;

    $mail->isSMTP();
    $mail->SMTPDebug=0;

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

    //$mail->addAttachment('')


    if(!$mail->send())
  	{
      echo 'send() KO';
  	}
  	else
  	{
      echo 'send() OK';
    }
  }
*/
}
