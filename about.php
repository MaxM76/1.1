<?php
$userName = 'Максим';
$userAge = 41;
$userEMail = 'm.v.markelov@mail.ru';
$userCity = 'Moscow';
$userInfo = 'главный специалист инженер-эколог';
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашнее задание к лекции 1.1 «Введение в PHP»</title>
    <style>
      body {
        font-family: sans-serif;  
      }
           
      dl {
        display: table-row;
      }
           
      dt, dd {
        display: table-cell;
        padding: 5px 10px;
      }
    </style>
  </head>
  
  <body>
    <h1>Данные пользователя</h1>
    <dl>
      <dt>Имя</dt>
      <dd><?php echo $userName ?></dd>
    </dl>
    <dl>
      <dt>Возраст</dt>
      <dd><?php echo $userAge ?></dd>
    </dl>
    <dl>
      <dt>Адрес электронной почты</dt>
      <dd><?php echo '<a href="mailto:' . $userEMail . '">' . $userEMail . '</a>' ?></dd>
    </dl>
    <dl>
      <dt>Город</dt>
      <dd><?php echo $userCity ?></dd>
    </dl>
    <dl>
      <dt>О себе</dt>
      <dd><?php echo $userInfo ?></dd>
    </dl>
  </body>
</html>
