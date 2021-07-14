<?php
 
 $name=$_REQUEST['name'];
 $company=$_REQUEST['company'];
 $email=$_REQUEST['email'];
 $country=$_REQUEST['country'];
 $phone=$_REQUEST['phone'];
 $quote=$_REQUEST['quote'];
 $message=$_REQUEST['message'];

 if(empty($name)|| empty($email) || empty($company)|| empty($email)|| 
 empty($country)|| empty($phone)|| empty($quote)|| empty($message))
 {
   echo "Please fill all the fields";
 }
 else{
 $company=$_REQUEST['company'];
   mail("tuyizerediane02@gmail.com",$subject,"$company+$country+$phone+$quote+$message","From:$name<$email>");
   echo "<script type='text/javascript'>alert('Dear $name, Your message has been sent,Our team will get back to you in 24 hours Thank you');
   window.history.log(-1)</script>";
 }

  
 
  

 
?>