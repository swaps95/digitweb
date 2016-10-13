<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "digittweb@gmail.com";
  $email = $_REQUEST['Email'];
  $subject = $_REQUEST['Message'];
  $comment = $_REQUEST['Name'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  }
  
  //if "email" variable is not filled out, display the form
 
?>
 
  