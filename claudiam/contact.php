<?php 
	
		session_start();
	
	
	include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';

	$securimage = new Securimage();
	
	
	if(isset($_POST['submit'])) {

		if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['captcha_code'])) {

			if ($securimage->check($_POST['captcha_code']) == false) {
			
				$error = "Please verify that you typed in the correct code.";
				

			} else {
				// send email
				$message = 'From: '.$_POST['name'].'\n';
				$message .= 'Email: '.$_POST['email'].'\n';
				$message .= 'Message: <br />'.wordwrap($_POST['message'],70);
			
				mail('myers.claudia@gmail.com','Message From Claudia Myers Website', $message); 
				
				
				$accept = "Thank you for contacting me.";
				
 
			}

		} else {

			$error = "Please fill out the entire form.";

		}

	}

	
	
	$page_title = 'Contact';
	require_once('header.php');?>




									<div id="page-home">
										<h2>Contact</h2>
										<div class="span4"><br />
										<h3>	<a href="mailto:myers.claudia@gmail.com">myers.claudia@gmail.com</a> </h3>
											
											
											</div>
										<div class="span5 offset1">
											<?php if(!empty($error)) echo '<div class="error">'.$error.'</div><br />'; ?>
											<?php if(!empty($accept)) echo '<div class="accept">'.$accept.'</div><br />'; ?>
											
											<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
												<p>Name:<br /><input type="text" name="name" /> </p>
												<p>Email:<br /><input type="text" name="email" /></p>
												<p>Message:<br /><textarea name="message" rows="4" cols="4"></textarea></p> <br />
												
											    
									<p>Captcha:</p>	
										<img id="captcha" src="/securimage/securimage_show.php" alt="CAPTCHA Image" /><br /><br />
										<input type="text" name="captcha_code" size="10" maxlength="6" />
									<br />	<a href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a> 	
									<br /> <br />
									<p style=" width: 220px; text-align: right;"><input type="submit" name="submit" value="Send" class="btn" /></p>  
									</form> 
										
										</div>
										</div> 
									
									
									
									<?php require_once('footer.php');?>