<?php
 
 $name=$_REQUEST['name'];
 $email=$_REQUEST['email'];
 $subject=$_REQUEST['subject'];
 $message=$_REQUEST['message'];
 if(empty($name)|| empty($email) || empty($subject)|| empty($message))
 {
   echo "Please fill all the fields";
 }
 else{
   mail("tuyizerediane02@gmail.com",$subject,$message,"From:$name<$email>");
   echo "<script type='text/javascript'>alert('Dear $name, Your message has been sent,Our team will get back to you in 24 hours Thank you');
   window.history.log(-1)</script>";
 }

  
 
  

 
?>
