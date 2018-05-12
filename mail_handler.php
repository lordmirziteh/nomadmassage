<?php 

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

/* $sixty_status = 'unchecked';
$nintey_status = 'unchecked'; */
	
if(isset($_REQUEST['submit'])){
	
	$selected_radio = $_REQUEST['service'];
/* 	if ($selected_radio == 'sixty'){
		$sixty_status = 'checked';
	}
	else if ($selected_radio == 'nintey') {
		$nintey_status = 'checked';
	} */

	
    $to = "seattlenomadmassage@gmail.com"; 
    $email = $_REQUEST['Email']; 
	$name = $_REQUEST['Name'];
	$number = $_REQUEST['tele'];
	$date = $_REQUEST['date'];
    $subject = "Appointment Request";
    $message = $name . " is requesting a " . $selected_radio . " on " . $date . "\n\n" . $Email . "\n" . $tele . "\n" . "message: " . $_POST['message'];
    

/*     $headers = "From:" . $from;
    $headers2 = "From:" . $to; */
	$from = "From: $name<$email>\r\nReturn-path: $email";
    mail("seattlenomadmassage@gmail",$subject,$message,$from);
    // mail($from,$subject2,$message2,$headers2); 
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>

