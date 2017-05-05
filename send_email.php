<?php


	function sendEmail($email, $subject,$body)
	{
		
		
		require_once 'lib/swift_required.php';
		$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
				->setUsername('tutorsfromdu@gmail.com')
				->setPassword('(tutorsfromdu)')
				->setEncryption('ssl');

			$mailer = Swift_Mailer::newInstance($transport);

			$message = Swift_Message::newInstance($subject)
				->setFrom(array('noreply@tutorsfromdu.com' => 'Tutors From DU'))
				->setTo(array($email))
				->setBody($body);

			$result = $mailer->send($message);
	}
	
	
?>