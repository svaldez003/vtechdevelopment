<?php 
    

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    
    $email_form = 'VTech Development';
    $email_subject = 'New Message From Contact';
    $email_body = "Name: $name.\n".
                   "Email: $email.\n".
                    "Message: $message.\n";
    
    
    $to = "vtechdevelopment2020@gmail.com";
    $headers = "from: $email_form \r\n";
    $headers .= "Reply-To: $email  \r\n";
    
    mail($to,$email-subject,$email_body,$headers);
    
    header("location: sent.html");
    
 


?>