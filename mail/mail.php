<?php

require_once ("class.phpmailer.php");
require_once ('class.smtp.php');

class mail {
    private $nombre, $apellido, $mail, $tel, $dir, $mensaje, $asunto;

    function __construct($nombre, $apellido, $mail, $tel, $dir, $mensaje, $asunto) {

        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setMail($mail);
        $this->setTel($tel);
        $this->setDir($dir);
        $this->setMensaje($mensaje);
        $this->setAsunto($asunto);

    }
    
   //______________________________________________

    public function setNombre($x) {
        $this->nombre = $x;
    }

    public function getNombre() {
        return $this->nombre;
    } 
        
   //______________________________________________

    public function setApellido($x) {
        $this->apellido = $x;
    }

    public function getApellido() {
        return $this->apellido;
    } 
            
   //______________________________________________

    public function setMail($x) {
        $this->mail = $x;
    }

    public function getMail() {
        return $this->mail;
    }
                
   //______________________________________________

    public function setTel($x) {
        $this->tel = $x;
    }

    public function getTel() {
        return $this->tel;
    }
                    
   //______________________________________________

    public function setDir($x) {
        $this->dir = $x;
    }

    public function getDir() {
        return $this->dir;
    }
                        
   //______________________________________________

    public function setMensaje($x) {
        $this->mensaje = $x;
    }

    public function getMensaje() {
        return $this->mensaje;
    }
                            
   //______________________________________________

    public function setAsunto($x) {
        $this->asunto = $x;
    }

    public function getAsunto() {
        return $this->asunto;
    }
    
    public function enviar() {
        $mail = new PHPMailer();
        
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "mail.roca.com.mx:587";
        $mail->Username = "ccardenas@roca.com.mx";
        $mail->Password = "300313cc";
        $mail->Mailer = "smtp";
        $mail->SetFrom("ceciliacrdz@hotmail.com", "Contacto Recicladora");
        $mail->IsHTML(true);
        $mail->Subject = $this->asunto;
        
        $mail->Body = 'Hola Lulu!'. '<br/><br/>'. 'Nombre: '.$this->nombre.'<br>'.'Apellidos: '.$this->apellido.'<br/>'.'Telefono: '.$this->tel.'<br/>'.'E-mail: '.$this->mail.'<br/>'.'Direccione: '.$this->dir.'<br><br>'.'Mensaje: <br/>'.$this->mensaje;
        
        $mail->AddAddress("ceciliacrdz@hotmail.com");
//        $mail->AddAddress("ceciliacrdz@hotmail.com");
//        $mail->AddBCC("ceciliacrdz@hotmail.com");

        $mail->Send();  // or die("No se envio el correo " . mssql_get_last_message())

    }

}
?>
