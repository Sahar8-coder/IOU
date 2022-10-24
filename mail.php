<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Квадратные Уравнения</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    
    <script type="text/javascript" id="MathJax-script" async
    src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
    </script>
</head>
<body>
        <div class="container">

            <div class="row">
                <div class="col-sm-4">
                    <form action="mail.php" method="POST">
                        <legend>Заголовок формы</legend>
      
                        <div class="form-group">
                            <label for="">Введите ваше имя</label>
                            <input type="text" class="form-control" id="" name="user_name" placeholder="Например, Иван">
                        </div>
                    
                        <div class="form-group">
                            <label for="">Введите номер телефона</label>
                            <input type="text" class="form-control" id="" name="user_phone" placeholder="+7 (999) 99 99 999">
                        </div>
                    
                        <div class="form-group">
                            <label for="">Введите email</label>
                            <input type="text" class="form-control" id="" name="user_email" placeholder="mail@mail.ru">
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Отправить форму</button>
                    </form>
                </div><!-- .col-sm-4 -->
            </div> <!-- .row -->
      
          </div><!-- /.container -->
    </main>
</body>
</html>

<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ze.kirilov@gmail.com'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '815@.LJKC'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('ze.kirilov@gmail.com'); // от кого будет уходить письмо?
$mail->addAddress('ze.kirilov@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. '<br>Почта этого пользователя: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>