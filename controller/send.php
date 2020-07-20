<?php

use PHPMailer\PHPMailer\PHPMailer;
require 'dependencies/phpmailer/src/Exception.php';
require 'dependencies/phpmailer/src/PHPMailer.php';
require 'dependencies/phpmailer/src/SMTP.php';

class send extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
    }

    function render(){
        $this->view->render('Mail/mail');
    }

    function sendMail(){

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.office365.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'enzoarauco83@hotmail.com';
    $mail->Password = 'PASSWORD';
    $mail->SMTPSecure = 'tls';
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );
    $mail->setFrom('enzoarauco83@hotmail.com', 'Contacto');
    $mail->addAddress('enzoarauco@gmail.com', 'Contacto');
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'Formulario de contacto';
        $mail->isHTML(false);
        $mail->Body = <<<EOT
            Correo: {$_POST['email']}
            Nombre: {$_POST['name']}
            Mensaje: {$_POST['message']}
            EOT;
        if (!$mail->send()) {
            $mensaje = 'Algo ha salido mal. Intentelo nuevamente';
        } else {
            $mensaje = 'Mensaje enviado gracias por contactarme';
        }
    } else {
        $mensaje = 'Direccion de correo invalido';
    }

    $this->view->mensaje = $mensaje;
    $this->render();

    }
}
