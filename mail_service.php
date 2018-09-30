<?php
$name_service = $_POST['name_service'];
$s_name = $_POST['s_name'];
$s_phone = $_POST['s_phone'];
$to = 'a.vasyukov97@gmail.com';
$subject = 'Заказ услуги ' . $name_service;
$message = '
                <html>
                    <head>
                        <title>' . $name_service . '</title>
                    </head>
                    <body>
                        <p>Имя: ' . $s_name . '</p>
                        <p>Телефон: ' . $s_phone . '</p>                        
                    </body>
                </html>';
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Отправитель <from@example.com>\r\n";
mail($to, $subject, $message, $headers);
?>