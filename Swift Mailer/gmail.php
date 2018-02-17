<?php
function gmailbody()
{
	echo"<h2>hai Jerald chanhe your pasasword<h2>";
}


require_once 'vendor/autoload.php';

$email_id=$_POST['email'];

/*
$db = mysqli_connect("localhost", "root", "", "onlinecrime");
$opt=uniqid();
  $check_user_email = mysqli_query($db, "SELECT * FROM users where email='$email_id'");
  if ($row = mysqli_fetch_array($check_user_email)) {


$usr_sql="UPDATE  users set otp='$opt' where email='$email_id'";
        mysqli_query($db, $usr_sql);



*/

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.sendgrid.net', 465, 'ssl'))
  ->setUsername('apikey')
  ->setPassword('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')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message

$body = "<h1>$opt</h1>";

$message = (new Swift_Message("body of the mail"))
  ->setFrom(['jeraldjacob10@gmail.com' => 'Jerald'])
  ->setTo([$email_id])
  ->setBody($body)
  ->setContentType('text/html')
;

// Send the message
$mailer->send($message);
  
if(!$mailer->send($message)) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
     ?>
     <script type="text/javascript">
window.close();
</script>
<?php

}
}
else

{
  echo 'Note  sent';
 
}
?>

