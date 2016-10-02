<?php
//Contact Subject
$subject = "subject";

//Details
$message = "detail";

//Mail of sender
$mail_from = "customer_mail";

//From
$header = "from: name <$mail_from>";

//Enter your email address
$to = "alongkar.hajoary@gmail.com";

$send_contact = mail($to,$subject,$message,$header);

//Check
if($send_contact){
	echo "We recieved ";
}
else{
	echo "Failed";
}

?>
