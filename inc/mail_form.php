<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "hayley@north2southtraining.co.uk";
 
    $email_subject = "Web Enquiry form North2SouthTraining.co.uk";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "<h4>We are very sorry, but there were error(s) found with the form you submitted.</h4> ";
 
        echo "<h4>These errors appear below.</h4><br /><br />";
 
        echo "<h4>".$error."</h4><br /><br />";
 
        echo "<h4>Please go back and fix these errors.</h4><br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['message'])) {
 
        died('<p>We are sorry, but there appears to be a problem with the form you submitted.</p>');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $email_from = $_POST['email']; // required
 
    $message = $_POST['message']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The email address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($message) < 2) {
 
    $error_message .= 'The message you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Email from ".clean_string($name).".";
 
    $email_message .= " There contact email should you wish to reply is ".clean_string($email_from).".\n\nMessage recieved is as follows:\n";
 
    $email_message .= "Message: ".clean_string($message)."\n\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
<h5>Thank you for contacting us. We will be in touch with you very soon.</h5>
 
 
 
<?php
}
 
?>