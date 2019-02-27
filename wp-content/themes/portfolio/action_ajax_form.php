<?
if((isset($_POST['email'])&&$_POST['email']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
    $to = $_POST['email']; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'Привет кентюрик'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Эндрю</p>
                        <p>HY friend</p>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: Отправитель <semerenko.and@yandex.ua>\r\n"; //Наименование и почта отправителя
    mail($to, $subject, $message, $headers) && die('error!'); //Отправка письма с помощью функции mail
}
