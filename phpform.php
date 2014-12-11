

<? php

$category = $name = $email = $country = $problem = $why = $who = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $category = test_input($_POST["category"]);
   $name = test_input($_POST["name"]);
   $email = test_input($_POST["email"]);
   $country = test_input($_POST["country"])
   $problem = test_input($_POST["problem"]);
   $who = test_input($_POST["who"]);
   $why = test_input($_POST["why"])
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
 <? php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $country;
echo "<br>";
echo $problem;
echo "<br>";
echo $why;


	/* if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "isabellewigselius@gmail.com";
 
    $email_subject = "Solution Tree Form";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }

    if(!isset($_POST['problem']) ||
 
        !isset($_POST['who']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['why'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }

 	$email = $_POST['email']; // required
 
    $who = $_POST['who']; // required
 
    $why = $_POST['why']; // required
 
    $name = $_POST['name']; // not required
 
    $country = $_POST['country']; // not required

    $problem = $_POST['problem']; // required 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$country)) {
 
    $error_message .= 'The Country you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($who) < 2) {
 
    $error_message .= 'The who you entered do not appear to be valid.<br />';
 
  }

   if(strlen($problem) < 2) {
 
    $error_message .= 'The problem you entered do not appear to be valid.<br />';
 
  }

   if(strlen($why) < 2) {
 
    $error_message .= 'The why you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }

  $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Country: ".clean_string($country)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Problem: ".clean_string($problem)."\n";
 
    $email_message .= "Why: ".clean_string($why)."\n";

     $email_message .= "Who: ".clean_string($who)."\n";

 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email."\r\n".
 
'Reply-To: '.$email."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
 

*/ 

?> 