<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$number= $_REQUEST['contact'];
$type = $_REQUEST['type'];
//save name for 'contact us' and 'book a service'
$subject = $_REQUEST['subject'];

//is set only if the form submit is from book a service
$address = $_REQUEST['address'];



$to      = 'support@technokraft.co';
$message = 'customer message: '.$subject;
if(isset($address) && $address){
	$subject = $name.' wants to contact you. number: '.$number;
}else{
	$subject = $name.' wants to book a service. number: '.$number;
	$message = $message.'<br> customer address:'.$address;
}

mail($to, $subject, $message);
?> 
