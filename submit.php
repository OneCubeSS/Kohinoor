<?php

use PHPMailer\PHPMailer\PHPMailer; 
  
    require_once 'phpmailer/Exception.php';
    require_once 'phpmailer/PHPMailer.php';
    require_once 'phpmailer/SMTP.php';
    
     $mail = new PHPMailer(true);

     $alert = ''; 
  
    if(isset($_POST['submit'])){
        $name = $_POST['name']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $mobile_no = $_POST['mobile']; // Get Mobile No
        $msg = $_POST['message']; // Get Message Value          
          

        try{
          
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com'; // Your Domain Name
          
        $mail->SMTPAuth = true;
       
        $mail->Username = "onecubesolutions00@gmail.com"; // Your Email ID which you want to use as SMTP server
        $mail->Password = "OneCubess07"; // Password of your email id 

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';


          
        $mail->setFrom ('onecubsolutions00@gmail.com');  // which Email Id you want to send from 
       
        $mail->AddAddress ("frakhangi@gmail.com"); // blissrealtywakad@gmail.com On which email id you want to get the message
        
          
        $mail->IsHTML(true);
          
        $mail->Subject = "Enquiry from Website submitted by $name"; // This is your subject you can change
          
        // body Message Starts here
          
        $mail->Body = "
        <html>
            <body>
                <table>
                    <tbody>
                        <tr>
                            <td><strong>Name: </strong></td>
                            <td>$name</td>
                        </tr>
                        <tr>
                            <td><strong>Email ID: </strong></td>
                            <td>$email_id</td>
                        </tr>
                        <tr>
                            <td><strong>Mobile No: </strong></td>
                            <td>$mobile_no</td>
                        </tr>
                        <tr>
                            <td><strong>Message: </strong></td>
                            <td>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        //  Ends here
          
              $mail->send();
              $alert = '<div class="alert-success">
                        <span>Send Successfully Thank you for contacting us!! </span> </div>';
                    }
                    catch(Exception $e)
                    {
                        $alert = '<div class="alert-error">
                        <span>'.$e->getMessage().'</span> </div>'; 
                    }       
  
    }
?>