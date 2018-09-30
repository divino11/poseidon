<?php
$name_service = $_POST['name_service'];
$s_name = $_POST['c_name'];
$s_phone = $_POST['c_phone'];
$s_email = $_POST['c_email'];
$s_message = $_POST['c_message'];
$to = 'a.vasyukov97@gmail.com';
$subject = 'Обращение со страницы контактов ' . $name_service;
$message = '
                <html>
                    <head>
                        <title>Сообщение со страницы контактов</title>
                    </head>
                    <body>
                        <p>Имя: ' . $s_name . '</p>
                        <p>Телефон: ' . $s_phone . '</p>                        
                        <p>Email: ' . $s_email . '</p>                        
                        <p>Сообщение: ' . $s_message . '</p>                        
                    </body>
                </html>';
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Отправитель <from@example.com>\r\n";
mail($to, $subject, $message, $headers);
?>