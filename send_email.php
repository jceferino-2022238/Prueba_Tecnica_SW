<?php
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sede = $_POST['sede-servicio'];
    $nombre_responsable = $_POST['nombre-responsable'];
    $telefono_responsable = $_POST['telefono-responsable'];
    $correo_responsable = $_POST['correo-responsable'];
    $razon_cancelacion = $_POST['razon-cancelacion'];
    $detalle_cancelacion = $_POST['detalle-cancelacion'];
    $recomedarias_waterproof = $_POST['recomedarias-waterproof'];
    $calificacion_waterproof = $_POST['calificacion-waterproof'];
    $que_hacer = $_POST['que-hacer'];
    $dejar_hacer = $_POST['dejar-hacer'];
    $seguir_haciendo = $_POST['seguir-haciendo'];
    $testimonial = $_POST['testimonial'];
    $mes_cancelacion = $_POST['mes-cancelacion'];
    $alumnos_cancelar = $_POST['alumnos-cancelar'];
    $alumnoName_1 = $_POST['alumnoName-1'];
    $alumnoName_2 = $_POST['alumnoName-2'];
    $alumnoName_3 = $_POST['alumnoName-3'];
    $alumnoName_4 = $_POST['alumnoName-4'];
    $alumnoName_5 = $_POST['alumnoName-5'];

    $emailBody = "
        <h2>Formulario de Cancelaciones</h2>
        <p><strong>Sede de tu servicio: </strong> $sede</p>
        <p><strong>Nombre del responsable: </strong> $nombre_responsable</p>
        <p><strong>Teléfono del responsable: </strong> $telefono_responsable</p>
        <p><strong>Correo del responsable: </strong> $correo_responsable</p>
        <p><strong>Razón de la cancelación: </strong> $razon_cancelacion</p>
        <p><strong>Detalle de la cancelación: </strong> $detalle_cancelacion</p>
        <p><strong>¿Recomendarías Waterproof?: </strong> $recomedarias_waterproof</p>
        <p><strong>Calificación a Waterproof: </strong> $calificacion_waterproof</p>
        <p><strong>¿Qué hacer?: </strong> $que_hacer</p>
        <p><strong>¿Qué dejar de hacer?: </strong> $dejar_hacer</p>
        <p><strong>¿Qué seguir haciendo?: </strong> $seguir_haciendo</p>
        <p><strong>Testimonial: </strong> $testimonial</p>
        <p><strong>Mes de la cancelación: </strong> $mes_cancelacion</p>
        <p><strong>Alumnos a cancelar: </strong> $alumnos_cancelar</p>
        <!-- Add other fields as needed -->
    ";

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';  
        $mail->SMTPAuth   = true;
        $mail->Username   = 'jceferino2006@gmail.com'; 
        $mail->Password   = 'gbsrxgyfksfjxguf';  
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465; 

        $mail->setFrom('jceferino2006@gmail.com', 'Waterproof');
        $mail->addAddress('cgarcia@solucionweb.com', 'Copia');  
        $mail->addCC('cgarcia@solucionweb.com');
        $mail->addAddress($correo_responsable, $nombre_responsable);  
        
        $mail->isHTML(true);  
        $mail->Subject = 'Cancelacion - ' . $nombre_responsable;
        $mail->Body    = $emailBody;

        $mail->send();
    } catch (Exception $e) {
        echo "El mensaje no se pudo enviar. Error del mailer: {$mail->ErrorInfo}";
    }
}