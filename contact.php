<?php
$name = $_POST['Name'];
$email .= $_POST['E-Mail'];
$message .= $_POST['Message'];
$tel .= $_POST['Tel'];

/* change the email address on line 10 to match yours */
/* you can change the text on line 11, 'Message from ' to whatever you wish. This will be displayed in the subject line of your email*/

$mail_to = 'tylerhalldesigns@gmail.com';
$subject = 'Message from '.$name;

$body_message = 'From: '.$name."\r\n";
$body_message .= 'E-mail: '.$email."\r\n";
$body_message .= 'Tel: '.$tel."\r\n";
$body_message .= 'Message: '.$message;

$mail_status = mail($mail_to, $subject, $body_message);

if ($mail_status) { ?>
 <script language="javascript" type="text/javascript">
  alert('Thank you for the message. I will contact you shortly.');
  window.location = '../contact.html';
 </script>
<?php
}
else { ?>
 <script language="javascript" type="text/javascript">
  alert('Message sending failed. Please, send an email to tylerhalldesigns@gmail.com');
  window.location = '../contact.html';
 </script>
<?php
}
?>
