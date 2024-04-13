<?php
namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($nombre, $email, $token){
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion(){
        //Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'a6cf844df59460';
        $mail->Password = 'c5fbcb6d689ee0';

        $mail->setFrom('cuantas@firmaelectronica.com');
        $mail->addAddress('cuantas@firmaelectronica.com', 'FirmaElecGt.com');
        $mail->Subject = 'Confirma tu cuenta';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " .$this->email. "</strong> has creado tu cuenta en Firma Electrónica GT, solo debes confirmala precionando el siguiente enlace</p>";
        $contenido .= "<p>Preciona aquí: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'> Confirmar Cuenta </a> </p>";
        $contenido .= "<p> Si tu no solicitaste esta cuenta, puedes ignorar el mensaje </p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        //Enviar el email
        $mail->send();

    }

    public function enviarInstrucciones(){
        //Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'a6cf844df59460';
        $mail->Password = 'c5fbcb6d689ee0';

        $mail->setFrom('cuantas@firmaelectronica.com');
        $mail->addAddress('cuantas@firmaelectronica.com', 'FirmaElecGt.com');
        $mail->Subject = 'Restablece tu Password';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " .$this->nombre. "</strong> has solicitado el restablecimiento de tu password sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p>Preciona aquí: <a href='http://localhost:3000/recuperar?token=" . $this->token . "'> Restablecer Password </a> </p>";
        $contenido .= "<p> Si tu no solicitaste este cambio, puedes ignorar el mensaje </p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        //Enviar el email
        $mail->send();
    }
}