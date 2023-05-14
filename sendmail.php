<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    //$mail->setLanguage('uk', 'phpmailer/language/');
    //$mail->IsHTML(true);

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["subject"];
    $message = $_POST["message"];

    $body = $name . '' . $email . '' . $phone . '' . $message;
    $theme = "[Exampl]";

    $mail->addAddress("dimchuk2002.dv@gmail.com");

    $mail->Subject = $theme;
    $mail->Body = $body;

    $mail->send();

    /*
    // Від кого лист
    //$mail->setFrom('euroritual@kiev.ua.com', 'Євроритуал');
    // Кому відправити
    
    // Тема листа
    //$mail->Subject = 'Євроритуал: заявка клієнта для дзвінка';

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

    header('Content-type: application/json');
    echo json_encode($response);
    */
?>

