<html>
 <head>
 <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAX43S/1+N0/8XLlL/LFqg/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACxaoP8hRHj/Fi1R/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAiQ3ksYI/V/yxaoP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACtXm/8WLVD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA7ZE/wSoEP8Dvwf/A9QD/yxaoP8hRHn/X43T/yZMmQMAAAAAAAAAAAO+S/8A5uYBAAAAAAAAAAAAAAAAA7ZE/wO2RP8DtkT/LVii/wO+S/9ejdP/J1GO/yxaoP8hQ3f/N3HI/zdyyP8sW6D/N8hx/zfIcf8AAAAAAAAAAAO2RP8Dhzb/A7ZE/1+N0/8DwEz/A75L/yFEef8FeyD/IUR4/wV7IP8ahnT/MMVq/zfIcf8DtkT/AAAAAAO2RP8DtkX/A7dJ/wO6S/8DtkT/A2Em/1+N0/8hRHj/OHDM/wSZMv8ErD3/BLZF/wOXPP8DtkT/A7ZE/wO2RP8AAAAAA7ZE/wPUVf8D1FX/YI3U/wNzLf83csf/BXsg/wV7IP8Dvkj/A5E6/wOiQf8DtEj/A8ZP/wPUVf8AJAgBAAAAAAAAAAADtkT/A5M4/wOMNf8GwEf/EMRU/xfKW/8f0GP/N3HI/wOuRv8DwE3/A9JU/wPUVf8D1FX/AAAAAAAAAAAAAAAAAAAAAAOmPv8Dnzz/A5k6/w3BUf8Vxlr/Gc9Y/yLTZv8FeyD/BXsg/wPUVf8D1FX/AAAAAAAAAAAAAAAAAAAAAAAAAAADtkT/A7JD6wOwC/8Jvk3/EMRU/xfKW/8e0GL/BXsg/wOcO/8DrED/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADuR//AAAAAA3BUbILpms+AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//8AAPw/AAD8fwAA/n8AAP5/AADAdwAAgAEAAIABAAAAAAAAgAEAAMABAADgAwAA4AcAAPr/AAD//wAA//8AAA==" rel="icon" type="image/x-icon" />
 <link href="treestyle.css" type="text/css" rel="stylesheet"></link>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
 <script src="javascriptet.js"></script>
  <title>Problem form</title>
 </head>
 <body>
 <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WHK3PW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHK3PW');</script>
<!-- End Google Tag Manager -->


<?php
 
if(isset($_POST['email'])) {
 
     
 

 
    $email_to = "isabellewigselius@gmail.com";
 
    $email_subject = "Problem";
 
     
 
     
 
 /*   function died($error) {
 
     
        echo "<p style='color:red;font-size:30px; margin-top:10px'> $error </p>";
        
        
 
    }*/

       function died($error) {
 
        // your error code can go here
 
 
        echo "<p style ='font-size:20px; font-family:segoe ui; padding-top:30px'>Your form could not be submitted:<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go <a href='problem.php'>back</a> and fill in these required fields.</p><br /><br />";
 
        die();
 
    }
 

 
    if
 
        (!isset($_POST['category']) ||
 
        !isset($_POST['email']) ||

        !isset($_POST['country']) ||
 
        !isset($_POST['problem']))
 
         {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.'); 
            
 
    }
    
    $first_name = $_POST['name'];
    
    $category = $_POST['category'];
    
    $country = $_POST['country'];
    
    $problem = $_POST['problem'];
    
    $who = $_POST['who'];
    
    $why = $_POST['why'];
    
    $email_from = $_POST['email'];

    
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
 if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
  if (strlen($category) <= 0) {
    $error_message .= 'Please fill in category<br />';
   
  }

   if (strlen($country) <= 0) {
    $error_message .= 'Please fill in you country<br />';
 
  }

   if (strlen($problem) <= 0) {
    $error_message .= 'Please fill in you problem <br />';
   
  }

   if (strlen($who) <= 0) {
    $error_message .= 'Please fill in you who the problem affect. <br />';
 
  }

   if (strlen($why) <= 0) {
    $error_message .= 'Please fill in you why this is a problem <br />';

  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
   

  $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }


 
    $email_message .= "Name: ".clean_string($first_name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Category: ".clean_string($category)."\n";
 
    $email_message .= "Country: ".clean_string($country)."\n";

     $email_message .= "Problem: ".clean_string($problem)."\n";

     $email_message .= "Why is this a problem: ".clean_string($why)."\n";

     $email_message .= "Who is effected: ".clean_string($who)."\n";
 
     
 
     
 

 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 

?>
 
 
Thank you for contacting us. We will be in touch with you very soon.
 
 
 
<?php
}
 
?>



   <div id="container">
      <div id="content2">

      <a href = "index.html" id="sharelink">
                            <img src="back.png">
           </a>

      <h1>PROBLEM</h1>

<div id='form'>

                <form method="post" name="myForm" id="formen">
                <span>* Required fields</span><br>

                  <p class="formtext">Category (ex racism):*</p>

                  

                  <input type="text" name="category" id="category">

                  <br><br>

                   <p class="formtext">Your name (optional):</p>
                    
                    <input type="text" name="name" id="name">

                  <br><br>

                    <p class="formtext">Email(will not be shown)*:</p>
                    
                   <input type="text" name="email" id="email">
                        
                                <br><br>

                                <p class="formtext">Country:*</p>
                                
                   <input type="text" name="country" id="country">
                                
                                <br><br>

                    <p class="formtext2">Problem (please give an explanation of your problem, if it's original and suiting we will contact you further about publishing it on the site)

                                <br>

                     <p class="formtext">What is the problem?*</p>
                                
                     <textarea type="text" cols="50" rows="5" name="problem" id="problem"></textarea>

                                <br><br>

                                <p class="formtext">Why is this a problem?*</p>

                                
                    <textarea type="text" cols="50" rows="5" name="why" id="why"></textarea>

                                <br><br>

                                <p class="formtext">Who is effected?*</p>

                                
                    <textarea type="text" cols="50" rows="5" name="who" id="who"></textarea>
                                <br><br>
                    <input type="submit" value="Submit" id="submitknapp">
                    
                        
                        </form>
      
                    </div>

     

  

 </body>
</html>