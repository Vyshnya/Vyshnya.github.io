<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer-6.8.0/src/Exception.php';
    require 'PHPMailer-6.8.0/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('uk', 'PHPMailer-6.8.0/language/');
    $mail->isHTML(true);

    // Від кого лист
    $mail->setFrom('euroritual@kiev.ua.com', 'Євроритуал');
    // Кому відправити
    $mail->addAddress('dimchuk2002@icloud.com');
    // Тема листа
    $mail->Subject = 'Євроритуал: заявка клієнта для дзвінка';

    // Тіло листа
    $body = '<h1>Дані клієнта</h1>';

    if(trim(!empty($_POST['name']))) {
        $body = '<p><strong>Ім^я:</strong> '.$_POST['name'].'</p>';
    }
    if(trim(!empty($_POST['email']))) {
        $body = '<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
    }
    if(trim(!empty($_POST['subject']))) {
        $body = '<p><strong>Телефон:</strong> '.$_POST['subject'].'</p>';
    }
    if(trim(!empty($_POST['message']))) {
        $body = '<p><strong>Повідомлення:</strong> '.$_POST['message'].'</p>';
    }

    // Відправлення
    if (!$mail->send()) {
        $message = 'Помилка!';
    } else {
        $message = 'Дані відправлені успішно!';
    }

    $response = ['message' => $message];

    header(('Content-type: application/json'));
    echo json_encode($response);
?>

