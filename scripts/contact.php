<?php

function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

if(isset($_POST['send'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  console_log("$name, $email, $subject, $message");
  $secretkey = '6Lc31q4UAAAAAI4UiRxWGqFHDgA_5uCwLKG0joNs';

  $antwortJSON = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretkey.'&response='.$_POST['g-recaptcha-response']);
  $antwortDaten = json_decode($antwortJSON);

  if($antwortDaten->success){
    // mail("contact@erikbent.de", "$subject - Nachricht von $name", $message, "From: $email");
	if(mail("contact@erikbent.de", "$subject - Nachricht von $name", $message, "From: $email")) {
		echo "<p>Thank you for contacting us, $name. You will get a reply within 24 hours.</p>";
    } else {
		echo '<p>We are sorry but the email did not go through.</p>';
    }

    // Betreff
    $subjectResponse = 'Vielen Dank für Ihre Nachricht';

    // Nachricht
    $messageResponse = 'Vielen Dank für Ihre Nachricht, wir werden uns schnellstmöglich bei Ihnen melden.';

    // für HTML-E-Mails muss der 'Content-type'-Header gesetzt werden
    $headerResponse[] = 'MIME-Version: 1.0';
    $headerResponse[] = 'Content-type: text/plain; charset=utf-8';

    // zusätzliche Header
    $headerResponse[] = 'To: $email';
    $headerResponse[] = 'From: Simon <contact@erikbent.de>';

    // verschicke die E-Mail
    // mail($email, $betreff, $nachricht, implode("\r\n", $header));
	if(mail($email, $subjectResponse, $messageResponse, implode("\r\n", $headerResponse))) {
        console_log("Automatic response sent succesfully");
    } else {
        console_log("Error sending automatic response");
    }
  }
}

?>
