<?php
  if(isset($_POST['submit'])){
    $to = "rowhitswami1@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $email_id = $_POST['email'];
    $phone_no = $_POST['phone'];
    $message = $_POST['email'];

    $subject = "Form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
    

    $headers = "From:" . $from;
    $headers.= "From:" . $to;
    $headers.="Content-type: text/html; charset=utf-8";
    $headers.="MIME-version: 1.0\r\n";

    $send = mail($to,$subject,$phone_no,$message,$headers);
    
    if ($send) {
    echo "Thanks For Submitting. We will shortly contact you.";
    }else{
    	echo "error";
    }
}
    
?>
