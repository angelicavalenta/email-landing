<?php
if (isset($_POST['send'])) {
  $to = 'angelica@seaworthy.tech';
  $subject = 'web site inquiry';
  // $header = 'MIME-Version: 1.0' . "\r\n";
  $message = 'Name: ' .$_POST['name'] . "\r\n\r\n";
  $message .= 'Email: ' .$_POST['email'];
  $success = mail($to, $subject, $message, $headers);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php if (isset($success) && $success) { ?>
    <h1>Thanks</h1>
    We are processing your request.
  <?php } else { ?>
    <h1>Oops</h1>
    Sorry, there was a problem with your request
  <?php } ?>
  </body>
</html>
