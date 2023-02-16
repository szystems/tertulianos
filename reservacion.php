<?php
    $field_name = $_POST['name'];
    $field_email = $_POST['email'];
    $field_phone = $_POST['phone'];
    $field_date = $_POST['date'];
    $field_time = $_POST['time'];
    $field_people = $_POST['people'];
    $field_message = $_POST['message'];

    $mail_to = 'szotto18@hotmail.com';

    $subject = 'Mensaje desde www.grupoculinariotertulianos.com (Reservacion): ' . $field_name;

    $body_message = 'De: '.$field_name."\n";
    $body_message .= 'E-mail: '.$field_email."\n";
    $body_message .= 'Telefono: '.$field_phone."\n";
    $body_message .= 'Fecha: '.$field_date."\n";
    $body_message .= 'Hora: '.$field_time."\n";
    $body_message .= 'Personas: '.$field_people."\n";
    $body_message .= 'Mensaje: '.$field_message;
    $subject = 'Mensaje del visitante: ' . $field_name;

    $body_message = 'De: '.$field_name."\n";
    $body_message .= 'E-mail: '.$field_email."\n";
    $body_message .= 'Mensaje: '.$field_message;

    $headers = "De: $cf_email\r\n";
    $headers .= "Copiar a: $cf_email\r\n";

    $mail_status = mail($mail_to, $subject, $body_message, $headers);

    if ($mail_status) { ?>
        <script language="javascript" type="text/javascript">
            // Print a message
            alert('Gracias por comunicarte, pronto un agente se comunicara contigo.');
            // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
            window.location = 'reservaciones.html';
        </script>
    <?php
    }

    else { ?>
        <script language="javascript" type="text/javascript">
            // Print a message
            alert('Error en el mensaje, intenta de nuevo');
            // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
            window.location = 'reservaciones.html';
        </script>
    <?php
    }
?>