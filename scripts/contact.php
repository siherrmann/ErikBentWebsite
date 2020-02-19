<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $secretkey = '6Lc31q4UAAAAAI4UiRxWGqFHDgA_5uCwLKG0joNs';

  $antwortJSON = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretkey.'&response='.$_POST['g-recaptcha-response']);
  $antwortDaten = json_decode($antwortJSON);

  if (!$antwortDaten->success) {
    http_response_code(403); #403=forbidden
    echo "There was a problem with your submission, please try again.";
    exit;
  } else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail_to = "contact@erikbent.de";

    $success = mail($mail_to, "$subject - Nachricht von $name", $message, "From: $email");
    if ($success) {
        http_response_code(200); #200=okay
        echo "Thank you for contacting us, $name. We will try to reply within 24 hours.";
    } else {
        http_response_code(500); #500=internal server error
        echo "We are sorry but the email did not go through.";
        exit;
    }

    $subjectResponse = 'Ihre Nachricht an Erik Bent';
    $messageResponse = 'Vielen Dank für Ihre Nachricht, wir werden uns schnellstmöglich bei Ihnen melden.';
    // für HTML-E-Mails muss der 'Content-type'-Header gesetzt werden
    $headerResponse[] = 'MIME-Version: 1.0';
    $headerResponse[] = 'Content-type: text/plain; charset=utf-8';
    $headerResponse[] = 'To: $email';
    $headerResponse[] = 'From: Simon <contact@erikbent.de>';

    mail($email, $subjectResponse, $messageResponse, implode("\r\n", $headerResponse));
  }
} else {
  http_response_code(403); #403=forbidden
  echo "There was a problem with your submission, please try again.";
}
?>
