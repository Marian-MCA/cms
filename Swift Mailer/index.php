<?php
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.sendgrid.net', 465, 'ssl'))
  ->setUsername('apikey')
  ->setPassword('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')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$body = 'Hello, <p>Email sent through <span style="color:red;">Swift Mailer</span>.</p>';

$message = (new Swift_Message('Email Through Swift Mailer'))
  ->setFrom(['jeraldjacob10@gmail.com' => 'Jerald'])
  ->setTo(['ajilraju2@gmail.com'])
  ->setBody($body)
  ->setContentType('text/html')
;

// Send the message
$mailer->send($message);
?>
