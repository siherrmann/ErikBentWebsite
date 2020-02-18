<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $secretkey = '6Lc31q4UAAAAAI4UiRxWGqFHDgA_5uCwLKG0joNs';

  $antwortJSON = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretkey.'&response='.$_POST['g-recaptcha-response']);
  $antwortDaten = json_decode($antwortJSON);

  if (!$antwortDaten->success) {
    # ReCaptcha error, set a 403 (forbidden) response code.
    http_response_code(403);
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
        # Set a 200 (okay) response code.
        http_response_code(200);
        echo "Thank you for contacting us, $name. We will try to reply within 24 hours.";
    } else {
        # Set a 500 (internal server error) response code.
        http_response_code(500);
        echo "We are sorry but the email did not go through.";
    }

    $subjectResponse = 'Vielen Dank für Ihre Nachricht';
    $messageResponse = 'Vielen Dank für Ihre Nachricht, wir werden uns schnellstmöglich bei Ihnen melden.';
    // für HTML-E-Mails muss der 'Content-type'-Header gesetzt werden
    $headerResponse[] = 'MIME-Version: 1.0';
    $headerResponse[] = 'Content-type: text/plain; charset=utf-8';
    $headerResponse[] = 'To: $email';
    $headerResponse[] = 'From: Simon <contact@erikbent.de>';

    $success = mail($email, $subjectResponse, $messageResponse, implode("\r\n", $headerResponse));
    if ($success) {
        # Set a 200 (okay) response code.
        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } else {
        # Set a 500 (internal server error) response code.
        http_response_code(500);
        echo "Oops! Something went wrong, we couldn't send your message.";
    }
  }
} else {
  # No POST error, set a 403 (forbidden) response code.
  http_response_code(403);
  echo "There was a problem with your submission, please try again.";
}
?>
