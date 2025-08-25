<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'stmp.gmail.com';
            $mail->SMTPAuth = true; 
            $mail->Username = "munirah@gmail.com";
            $mail->Password = ""
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;


            $mail->setFrom('munirahseif8@gmail.com', 'Contact Form');
            $mail->addAddress('munirahseif8@gmail.com','Munirah Seif')
            $mail->addReplyTo($email, $name);

            // Content
            $mail->isHTML(true);
            $mail->Subject = "New Contact Form Message";
            $mail->Body = ""
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {}"
        }

    } else {
        Invalid request;
    }
?>