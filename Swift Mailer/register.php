<?php
function gmailbody()
{
	echo"<h2>hai Jerald chanhe your pasasword<h2>";
}


require_once 'vendor/autoload.php';

$email_id=$_GET['email'];
$remark=$_GET['remark'];
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
$body = "<h1>$remark</h1>";

$message = (new Swift_Message("body of the mail"))
  ->setFrom(['ajilraju2@gmail.com' => 'Stop Crime'])
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


