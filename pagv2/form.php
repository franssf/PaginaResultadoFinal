<?php
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    if(!empty($name) && !empty($lastname) && !empty($email) && !empty($tel) && !empty($asunto) && !empty($mensaje)){

        $destino = 'frannssf@hotmail.com';
        //$cuerpo = 'Nombre: '.$nombre.' Apellido: '.$lastname.' Correo: '.$email.' Telefono: '.$tel.' Mensaje: '.$mensaje;

        $cuerpo = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <style>
                    body{
                        margin:0;
                        padding: 0;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        text-align: center;
                        
                    }
                    .correo{
                        width: 500px;
                    }
                    .fondotitulo{
                        background-color: rgb(17, 17, 17);
                        height: 40px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        
                    }
                    img{
                        width: 5em;
                    }
                    .encabezado{
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        background-color: rgb(225, 45, 78);
                        border-bottom-left-radius: 20px;
                        border-bottom-right-radius: 20px;
                        margin-bottom: 35px;

                    }
                    .encabezado img{
                        width: 19px;
                        height: 13px;
                        margin-right: 10px;
                    }
                    .encabezado p{
                        font-family:Arial;
                        color: white;
                        font-size: 14px;
                    }
                    h1{
                        background-color: rgb(42, 130, 192);
                        color:white;
                        display: inline;
                        padding: 10px;
                        padding-left: 186px;
                        padding-right: 186px;
                        padding-top: 15px;
                        padding-bottom: 15px;
                        font-size: 13px;
                        font-family:"Arial Narrow Bold", sans-serif;
                        border-bottom-left-radius: 15px;
                        border-bottom-right-radius: 15px;
                        
                    }
                    .datos{
                        padding-left: 50px;
                        padding-right: 50px;
                    }
                    .izq{
                        float:left;
                        color: rgb(17, 17, 17);
                    }
                    .der{
                        float:right;
                        color: rgb(34, 34, 34);
                        font-size: 15px;
                    }
                    label{
                        font-family: Calibri;
                        color: rgb(17, 17, 17);
                    }
                    .mensaje{
                        padding-top: 15px;
                        padding-bottom: 20px;
                        padding-left: 15px;
                        padding-right: 15px;
                        font-size: 14px;
                        border-width: 1px;
                        border-style: solid;
                        border-color: rgb(192, 192, 192);
                        border-radius: 10px;
                        background-color: white;
                    }
                </style>
                <title>Correo</title>
            </head>
            <body>
                <div class="correo">
                    <div class="fondotitulo">
                        <img src="https://i.ibb.co/svZtZTy/banner.png">
                        
                    </div>
                    <div class="encabezado">
                        <img src="https://i.ibb.co/R6YtJgZ/correo.png">
                        <p>Solicitud de servicio</p>
                    </div>
                    <div class="datos">
                        <div class="nombres">
                            <label class="izq">Nombre y Apellido:</label>
                            <label class="der">'.$name.' '.$lastname.'</label>
                        </div>
                        <br>
                        <hr>
                        <div class="correos">
                            <label class="izq">Correo:</label>
                            <label class="der">'.$email.'</label>
                        </div>
                        <br>
                        <hr>
                        <div class="telefono">
                            <label class="izq">Telefono de contacto:</label>
                            <label class="der">'.$tel.'</label>
                        </div>
                        <br>
                        <hr>
                        <label class="titulomensaje">Mensaje: </label>
                        <div class="mensaje">
                            <label>'.$mensaje.'</label>
                        </div>
                    </div>
                    
                
                </div>
            </body>
            </html>
        ';

        //Datos para poder enviar en html
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";

        $headers .= "From: $name <$email>\r\n";

        $headers .= "Return-path: $destino\r\n";

        mail($destino,$asunto,$cuerpo,$headers);

        header("Location: formok.html");
        exit();

    }

    else{
        
        header("Location: formno.html");
        exit();
        
    }

































    //$header = 'From: ' . $email . "\r\n";
    //$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    //$header .= "Mime-Version: 1.0 \r\n";
    //$header .= "Content-Type: text/plain";

    //$message = "Formulario enviado por: " . $name . "\r\n";
    //$message .= "Email: " . $email . "\r\n";
    //$message .= "Teléfono: " . $tel . "\r\n";
    //$message .= "Asunto: " . $asunto . "\r\n";
    //$message .= "Mensaje: " . $_POST['mensaje'] . "\r\n";
    
    //$message = "hola"; 

    //$destinatario = 'frannssf@hotmail.com';
    //$asunto = $asunto;
    
    //mail($destinatario, $asunto, utf8_decode($message), $header);
    
    //header("Location:servicios.html");

?>