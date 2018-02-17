<?php
function gmailbody()
{
	echo"<h2>hai Jerald chanhe your pasasword<h2>";
}


require_once 'vendor/autoload.php';

$email_id=$_GET['email'];

echo "$email_id";
echo "$user_id";
// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.sendgrid.net', 465, 'ssl'))
  ->setUsername('apikey')
  ->setPassword('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')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$body = "<h1>your complaint has be processed</h1>";

$message = (new Swift_Message("body of the mail"))
  ->setFrom(['jeraldjacob10@gmail.com' => 'Stop Crime'])
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
}?>
<script type="text/javascript">
window.close();
</script>


