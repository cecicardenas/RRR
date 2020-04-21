<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <?php
        require_once ("mail.php");

        $com = new mail($nombre, $apellido, $mail, $tel, $dir, $mensaje, $asunto);
        $com->enviar();
        

        require_once("index.php");
        ?>

    </head>     
</html>

