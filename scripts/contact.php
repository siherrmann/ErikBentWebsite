<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $lastname = $_POST['lastname'];

  if (strlen($lastname)>0) {
    http_response_code(403); #403=forbidden
    echo "There was a problem with your submission, please try again.";
    exit;
  } else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (strpos($email, '@') == false) {
      http_response_code(403); #403=forbidden
      echo "You have to put in a valid eamil address.";
      exit;
    }
    if (strlen($message)<10) {
      http_response_code(403); #403=forbidden
      echo "Do you really want to send me such a short message?";
      exit;
    }

    $mail_to = "contact@erikbent.de, $email";
	  $messageResponse = '
  		<html>
  		<head>
  			<title>Your message to Simon Herrmann/Erik Bent</title>
  		</head>
  		<body>
  		  <p>Thank you for your message, I will get back to you as soon as possible.</p>
  		  <p>Your message to Simon Herrmann/Erik Bent: '.$message.'</p>
  		  <p>With friendly regards,<br/>Simon Herrmann</p>
  		</body>
  		</html>';

    $headerResponse[] = 'MIME-Version: 1.0';
    $headerResponse[] = 'Content-type: text/html; charset=utf-8';
	  $headerResponse[] = 'From: Simon Herrmann <contact@erikbent.de>';

    $success = mail($mail_to, "$subject - Message by $name", "$messageResponse", implode("\r\n", $headerResponse));
    if ($success) {
        http_response_code(200); #200=okay
        echo "Thank you for your message, $name. I will contact you as soon as possible.";
    } else {
        http_response_code(500); #500=internal server error
        echo "I'm sorry but the email did not go through.";
        exit;
    }
  }
} else {
  http_response_code(403); #403=forbidden
  echo "There was a problem with your submission, please try again.";
}
?>
