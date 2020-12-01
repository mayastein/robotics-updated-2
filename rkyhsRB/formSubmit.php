<?php
    if(isset($_POST['send'])){
        $to= "rkyhsrobotics@gmail.com";
        $subject = "New Form Submission";

        $attend = ($_POST['yes']);
        $name= $_POST['name'];
        $visitor_email=$_POST['email'];
        $msg=$_Post['message'];

        $message = 'Name: ' . $name . "\r\n\r\n";
        $message .= 'Email: ' . $visitor_email . "\r\n\r\n";
        $message .= 'Will be there: ' . $attend . "\r\n\r\n";
        $message .= 'Comments: ' . $msg ;
        //$email_body = "Name: $name .\n".
                    //"User Email: $visitor_email .\n".
                        //"Will be there: $attend .\n".
                            //"User Message: $message .\n";

        
        $headers = "From: $email_from \r\n";
        $headers .= 'Content-Type: text/plain; charset=utf-8'; 
        
        
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if($email){
            $headers .= "\r\nRely-To: $email";
        }
        $success = mail($to, $subject, $message, $headers);

    }

?>

<body>
    <?php if(isset($success) && $success) { ?>
    <h1>Thank You</h1>
    Yourmessage has been sent
    <?php } else { ?>
        <h1>Oops!</h1>
        Sorry, there was a problem sending your message
    <?php } ?>
</body>