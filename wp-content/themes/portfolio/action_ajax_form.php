<?
echo $_POST['email'];die;
require_once('SMTP.php');
require_once('PHPMailer.php');
if ((isset($_POST['email']) && $_POST['email'] != "")) {
    $email = $_POST['email'];

} else {
    echo "1";
    die;
}
$name = 'andrew';
$number = 'voker';

// Настройки
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->Priority = 3;
$mail->CharSet = 'UTF-8';
$mail->Encoding = '8bit';
$mail->Username = 'semerenko.and@gmail.com';
$mail->Password = 'nurivu1111121234'; // Ваш пароль
$mail->SMTPSecure = 'ssl';
$mail->Port = "465";
$mail->setFrom('semerenko.and@gmail.com'); // Ваш Email
$mail->addAddress($email); // Email получателя
// Прикрепление файлов


// Письмо
$mail->isHTML(true);
$mail->Subject = 'Письмо бро'; // Заголовок письма
$mail->Body = 'Имя' . $name . 'Телефон ' . $number . 'Почта ' . $email; // Текст письма
// Результат
if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'ok';
}