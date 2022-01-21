<?php 
//Load Composer's autoloader
require_once '../vendor/autoload.php';

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

if(isset($_GET['sendEmailButton'])){
$emailDestination=$_GET['receptionEmail'];
 
//declare personal var
$myEmail = 'makamfiliane01@gmail.com';
$myPassword='Juillet2001';
$myName='Filiane Marie MAKAM';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
// $mail->setLanguage('fr','../vendor/phpmailer/phpmailer/language/');

//declare void boby
$myBody;

try {
    //Server settings
    $mail->SMTPDebug  = 1;
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 25;
    $mail->Username   = $myEmail;                     //SMTP username
    $mail->Password   = $myPassword;                               //SMTP password
    //$mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );
      

    //Recipients eand content
    $mail->IsHTML(true);
    
    ob_start();
    require("dataMail.php");
    $myBody = ob_get_contents();
    ob_clean();


    $mail->Body = $myBody;
    $mail->AddAddress($emailDestination,$myName);
    $mail->SetFrom($myEmail,$myName);
    //$mail->AddReplyTo("reply-to-".$emailDestination);
    //$mail->AddCC("cc-recipient-".$emailDestination);
    $mail->Subject = "Curriculum Vitae de - MAKAM Marie Filiane";
    $content = '<b>Thi s is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>';

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    $mail->AddEmbeddedImage('image/photo_2021-11-22_21-35-24.jpg','testImage');
    

    $mail->MsgHTML($myBody); 
    $errorCode=$mail->getSMTPInstance()->getError();
    
        if(!$mail->Send()) {
             $_SESSION["sentedMail"]=false;
             if($mail->ErrorInfo == "You must provide at least one recipient email address." ){
                $_SESSION["feedBack"]="L'adresse entrée est invalide";
             }
             else if($mail->ErrorInfo == "SMTP Error: data not accepted.SMTP server error: DATA END command failed"){
                $_SESSION["feedBack"]="Une érreur est survenu lors de l'envoie";
             }
              else if($mail->ErrorInfo == "SMTP Error: The following recipients failed: $emailDestination:"){
                $_SESSION["feedBack"]="Le mail n'est pas parvenu au destinataire";
             }
             else if($mail->ErrorInfo =="SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting"){
                $_SESSION["feedBack"]="Vérifiez votre accès à internet";
             }
             else{
                $_SESSION["feedBack"]=$mail->ErrorInfo;
             }
             $_SESSION["resentMail"]=$emailDestination;
            header("location:../index.php");
        } else {
            $_SESSION["sentedMail"]=true;
            $_SESSION["feedBack"]=$mail->ErrorInfo;
            header("location:../index.php");
        }

    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        $_SESSION["sentedMail"]=false;
        header("location:../index.php");
    }
}
else{
    echo '<h1><b>WHAT THE HE*L ARE YOU LOOKING FOR HERE ?</b></h1>';
}
?>