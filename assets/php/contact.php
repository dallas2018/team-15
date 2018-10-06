<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];


	$to      = 'yasinehsan11@gmail.com';
	$subject = 'Site Contact Form';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){
		$res['sendstatus'] = 'done';

		//Edit your message here
		$res['message'] = 'Form Submission Successful';
    }
	else{
		$res['message'] = 'Failed to send mail. Please mail me to yasinehsan11@gmail.com';
	}


	echo json_encode($res);
}

?>
