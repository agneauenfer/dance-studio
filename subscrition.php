<?php
if (isset($_POST['Subm'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $name = urldecode($name);
    $email = urldecode($email);
    $name = trim($name);
    $email = trim($email);
    if (mail("example@mail.ru", "Заявка с сайта", "Имя:" . $name . ". E-mail: " . $email, "From: example2@mail.ru \r\n")) {
        echo '<div id="myModal" class="modal">
        <div class="modal-content">
            <h2>Вы записаны!</h2>
            <p>На Вашу почту отправлено сообщение с приглашением на первое пробное занятие студии
                танцев "Вихрь"</p>
        </div>
    </div>';
    } else {
        echo "При отправке сообщения возникли ошибки";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-subscription.css">
    <script defer src="js/script.js"></script>
    <title>Абонементы</title>
</head>

<body>
    <div class="greeting-container">
        <header>
            <a href="index.php"><img src="images/logo.svg" alt="Логотип" class="logo"></a>
            <ul class="links">
                <li><a href="aboutds.html">О нас</a></li>
                <li><a href="typesofdance.html">Направления</a></li>
                <li><a href="tеachers.html">Преподаватели</a></li>
                <li><a href="subscrition.php"><strong>Абонементы</strong></a></li>
            </ul>
            <button class="burger" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </header>
        <div class="appoiment-form" style="background-color: #CBC2AD;">
            <form action="" id="form-appointment" method="post">
                <h1 style="color: #040404; padding: 50px;">Первое пробное занятие</h1>
                <input type="text" placeholder="Имя" name="name" required>
                <input type="email" placeholder="E-mail" name="email" required>
                <input type="submit" value="Записаться" name="Subm">
            </form>
            <div class="sale-container">
                <div class="sale-new">
                    <p class="num">15%</p>
                    <p class="txt">Скидка на абонементы на 6 месяцев</p>
                </div>
                <div class="sale-new">
                    <p class="txt">Кэшбек при продлении </p>
                </div>
                <div class="sale-new">
                    <p class="num">10%</p>
                    <p class="txt">На подарочные абонементы</p>
                </div>
            </div>
        </div>
    </div>
    <div class="price">
        <p class="tlt">Стоимость</p>
        <div class="ex">
            <table class="iksweb">
                <thead>
                    <tr>
                        <th></th>
                        <th>Взрослый</th>
                        <th>Детский(7-17лет)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 месяц</td>
                        <td>3500₽</td>
                        <td>2500₽</td>
                    </tr>
                    <tr>
                        <td>3 месяца</td>
                        <td>6000₽</td>
                        <td>4000₽</td>
                    </tr>
                    <tr>
                        <td>6 месяцев</td>
                        <td>8500₽</td>
                        <td>6500₽</td>
                    </tr>
                    <tr>
                        <td>Индивидуальный план </td>
                        <td> от 3500₽</td>
                        <td>от 4000₽</td>
                    </tr>
                </tbody>
            </table>
            <p class="bottom">*Абонемент можно заморозить или продлить в случаях: — болезни (при наличии справки); —
                отъезда (билеты). <br>
                По всем вопросам обращайтесь к менеджеру</p>
        </div>
        <div class="buy-my"> <a href="subscription-form.php" class="buy-btn">Оформить абонемент</a></div>
    </div>
    <footer>
        <div class="link-cntr">
            <div class="links-cntr1">
                <a href="#">Политика Конфиденциальности</a>
                <a href="#">Файлы Cookies</a>
                <p>ИНН 1324364758</p>
            </div>
            <div class="img-footer">
                <img src="images/logo-footer.svg" alt="Логотип">
            </div>
            <div class="links-cntr2">
                <p>+7-900-970-4800</p>
                <p>г. Москва, ул. Ветреная, д. 13 корп. 1</p>
                <p>info@vihrstudio.ru</p>
            </div>
        </div>
        <div class="icons-links">
            <a href="https://vk.com/agneeau"><img src="images/vk_reproductor_2ow5urjj3v8n 1.png" alt="Вконтанке"></a>
            <a href="https://t.me/agneeau"><img src="images/telegram_uwxjj914cuk3 1.png" alt="Телеграмм"></a>
            <a href="#"><img src="images/youtube_evjp85nsf41x 1.png" alt="Ютуб"></a>
        </div>
    </footer>
</body>

</html>