<?php

//$connection =mysqli_connect("localhost","root","","eindiaca_site") or die("cant connect to database");


//include('includes/include.inc.php');
 
if(isset($_POST['submit'])) {
	
	 function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
	
	
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
   // $email_to = "hello@freelancewebdesigners.co.in";
 
    $email_subject = "Contact From Veloxn.com";
 
 
    $your_name = $_POST['name']; // required
 
    $your_email = $_POST['email']; // required
	
	$your_contact = $_POST['message']; // required
  
    $fld_address = $_POST['subject']; // not required
 
	 $user_ip = $_SERVER['REMOTE_ADDR'];
	 
	$location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
           $json = json_decode($location, true);
		   extract($json);
	$user_location="$country_code.$country_name.,.$region_name.,.$city";
 
			 $ip = $_SERVER['REMOTE_ADDR'];
			 $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
    if($query && $query['status'] == 'success')
    {
        $Locationaddress = $query['city'] . "-" . $query['zip'];
    }
  echo $Locationaddress;
			

 
    $email_message .= "Phone: ".clean_string($your_name)."\n";
  
    $email_message .= "Email: ".clean_string($your_email)."\n";
	
	$email_message .= "Message: ".clean_string($your_contact)."\n";
 
    $email_message .= "Subject: ".clean_string($fld_address)."\n";
	
	$email_message .= "Location: ".clean_string($Locationaddress)."\n";
	
 
     

 
// create email headers
 
$headers = 'From: '.$your_email."\r\n".
 
'Reply-To: '.$your_email."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
//mail($email_to, $email_subject, $email_message, $headers);  
//mail("joshi.shankar@vapoursoft.com", $email_subject, $email_message, $headers);  
mail("veloxnsales@gmail.com", $email_subject, $email_message, $headers);  
//mail("email@veloxn.com", $email_subject, $email_message, $headers); 


 header( 'Location:https://veloxn.com/index.html#contact' );

}
 
?>
<script type="text/javascript">location.href = 'https://veloxn.com/index.html#contact';</script>