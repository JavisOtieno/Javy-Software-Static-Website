  <?php
				 			       //PHP MAIL DOES NOT WORK ON LOCALHOST. UNCOMMENT ON UPLOAD
				 			  if($_POST){

				 			  	$name=$_POST['name'];
				 			  	$email=$_POST['email'];
				 			  	$phone=$_POST['phone'];
				 			  	$message=$_POST['message'];

									$to      = 'javisotieno@gmail.com';
									$subject = 'CONTACT ON TONE TECHNOLOGIES from'.$name;
									$message = 'Name: '.$name.'
									'.'Email: '.$email.'
									'.'Phone: '.$phone.'
									'.'Message: '.$message;
									$headers = 'From: info@javytech.co.ke' .'
									'.
									    'Reply-To: info@javytech.co.ke' .'
									    '.
									    'X-Mailer: PHP/' . phpversion();
									   
									if(mail($to, $subject, $message, $headers)){
										$valid['success'] = true;
										$valid['messages'] = "We've received your message. We'll get back to you.";
									}
									else{
										$valid['success'] = false;
										$valid['messages'] = "Error submitting message.";

									}

									

									echo json_encode($valid);
									}

									?>