<?php
if (isset($_POST['Submit'])) {
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
    <link rel="stylesheet" href="css/style-index.css">
    <script defer src="js/script.js"></script>
    <title>Главная</title>
</head>

<body>
    <div class="greeting-container">
        <header>
            <a href="index.php"><img src="images/logo.svg" alt="Логотип" class="logo"></a>
            <ul class="links">
                <li><a href="aboutds.html">О нас</a></li>
                <li><a href="typesofdance.html">Направления</a></li>
                <li><a href="tеachers.html">Преподаватели</a></li>
                <li><a href="subscrition.php">Абонементы</a></li>
            </ul>
            <button class="burger" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </header>
        <div class="lending-group">
            <h1>Хореография</h1>
            <h2>Аллы Сигаловой</h2>
            <p>Хореограф. Заслуженная артистка России. Окончила Ленинградское хореографическое училище
                им. Вагановой,
                затем режиссерский факультет и ассистентуру по специальности педагог-хореограф Российской академии
                театрального искусства (ГИТИС).</p>
            <a href="#form-appointment"><button class="btn-appointment">Запись</button></a>
        </div>
    </div>
    <div class="quotation">
        <p class="txt-q">“Танец — это тайный язык души”</p>
        <p class="atr-q"> - Марта Грэм</p>
    </div>
    <div class="aboutus">
        <div class="txt-about">
            <h2>О НАС</h2>
            <p style="padding-top: 15%;">Танцевальная студия “Вихрь” существует в Мосвке с 2018 года. На данный момент в
                коллективе занимается
                более
                300 человек в возрасте от 8 до 46 лет по 3 направлениям. За весь период существования студии количество
                исполнителей перевалило за 1000 человек.</p>
            <br>

            <p>Наши танцоры принимают участие в развлекательных, концертных и конкурсных программах по всей России.</p>
        </div>
        <div class="img-about">
            <img src="images/image 2.png" alt="Фото занятий">
        </div>
    </div>
    <div class="typesof">
        <h1>Ведущие направления</h1>
        <div class="type-card">

            <div class="right-img"><img src="images/image 3 1.png" alt="Современная хореография"></div>
            <div class="left-txt">

                <h2>Современная хореография</h2>
                <p>Современная хореография – это хореография, у которой отсутствуют обязательные движения и позы,
                    основная
                    ее цель – формирование и раскрытие индивидуальности и особенных черт каждого танцора.</p>
                <a href="#form-appointment"><button class="btn-appointment">Запись</button></a>
            </div>
        </div>
        <div class="type-card" id="neo">
            <div><img src="images/Рисунок1 (1) 1.png" alt="Современная хореография"></div>
            <div class="left-txt">
                <h2>Балет</h2>
                <p>Удивительный вид сценического искусства, увлекающий изяществом и грациозностью артистов, с волнением
                    следим за сюжетом постановки, завидуем мастерству балерин, а нередко и хотим хоть немного
                    приблизиться к
                    этому завораживающему искусству, научиться самим делать головокружительные па.</p>
                <a href="#form-appointment"><button class="btn-appointment">Запись</button></a>
            </div>
        </div>
        <div class="type-card">
            <div class="right-img"><img src="images/image 4 1.png" alt="Современная хореография"></div>
            <div class="left-txt">
                <h2>Бальные танцы</h2>
                <p>Танец двух партнеров состоит из единства музыки, внутреннего пространства, движений тела и
                    эмоциональной
                    насыщенности. Бальный танец — танец, в котором сочетаются художественная образность, эмоциональное
                    содержание музыки, выразительность и пластичность человеческого тела и физические качества танцоров.
                </p>
                <a href="#form-appointment"><button class="btn-appointment">Запись</button></a>
            </div>
        </div>
    </div>
    <div class="appoiment-form" style="background-color: #CBC2AD;">
        <form action="" id="form-appointment" method="post">
            <h1 style="color: #040404; padding: 50px;">Первое пробное занятие</h1>
            <input type="text" placeholder="Имя" name="name" required>
            <input type="email" placeholder="E-mail" name="email" required>
            <input type="submit" value="Записаться" name="Submit">
        </form>
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