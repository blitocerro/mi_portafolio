<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    require '../config/mail.php';

    $configMail = new Mail();
    $mail = $configMail->configurar();
    $mail->Subject = 'Contacto - Pablo Yarzon';
    $mail->Body = "
        <p>Hola Pablo.</p>
        <p><strong>{$nombre}</strong> te ha enviado un mensaje desde tu formulario de contacto:</p>
        <blockquote>{$mensaje}</blockquote>
        <p>Correo de contacto: {$email}</p>
    ";

    try {
        // Enviar correo al administrador
        $mail->addAddress('pabloyarzon2004@gmail.com'); // Cambia a tu correo real
        $mail->send();
        echo json_encode(['status' => 'success', 'message' => 'Correo enviado correctamente al administrador']);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'No se pudo enviar el correo al administrador', 'error' => $e->getMessage()]);
    }

    // Crear el correo de confirmación para el remitente
    $mail->clearAddresses(); // Limpiar la dirección del administrador
    $mail->addAddress($email); // Correo del remitente
    $mail->Subject = 'Confirmación de recepción - Pablo Yarzon';
    $mail->Body = "
        <p>Hola {$nombre},</p>
        <p>Gracias por contactarte conmigo. Tu correo fue recibido con éxito, te responderé lo más pronto posible.</p>
        <p>Saludos cordiales,<br> Pablo Yarzon</p>
    ";

    try {
        // Enviar correo de confirmación al remitente
        $mail->send();
        echo json_encode(['status' => 'success', 'message' => 'Correo de confirmación enviado correctamente']);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'No se pudo enviar el correo de confirmación', 'error' => $e->getMessage()]);
    }
}
?>
