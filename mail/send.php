
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

   //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'minexlimited.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'support@minexlimited.com';                     //SMTP username
    $mail->Password   = 'candbf1cd9';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('support@minexlimited.com', 'Minexlimited');
    //foreach ($recipients as $recipient) {
        $mail->addAddress('$email');
         //$mail->addAddress('classic44life@gmail.com');
    //}
         //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('no-reply@minexlimited.com', 'no-reply');
    //$mail->addCC('cc@example.com');
    $mail->addBCC('trillztech34@gmail.com');

    $message ="<html>
    <head>
      <title>Email Confirmation  </title>
      <style type='text/css'>
          * {
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      font-family:ubuntu,'san-serif';
     }
      body{
          margin: 0px;
          background-color:#f2f2f2;
        }
      
        h1{
          text-align:center;
          margin-top:2%;
          padding:2%;
          box-sizing:border-box;
          font-size:1.1em;
          text-transform:capitalize;
        }
    
        h3,p{
          text-transform:capitalize;
          font-size:1em;
          text-align:center;
          padding:3%;
          box-sizing:border-box;
          line-height:26px;
        }
    
        p{
          text-align:left;
        }
    
      </style>
    </head>
    <body>
    
      <h1>Hi 🖐️ we are minexlimited team</h1>
      <p>hello ".$user." </p>
      <p>
      Thanks for registering on our site you are Welcome to our community and We are happy to have you on board. </p>
      <p>
    here are your login details <br>
    Login: ".$email." <br>
    Password: ".$pastx. " <br>
    
      Click to login:<a href='https://minexlimited.com/login.php'>corexinvest.com/login.php</a><br>
      
      contact us immediately if you did not authorize this registration.<br>
      
      Thank You
      </p>
    
    </body>
    </html>";

// $
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject ='no-reply';
    $mail->Body    = '<html><body>'.$message.'</body></html>';

    $mail->send();
   // echo 'Message has been sent';
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// }