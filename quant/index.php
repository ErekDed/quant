<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="img/quant.png" type="image/x-icon">
    <title> Кванториум Владикавказ </title>
    <style>
        .header {
            position: relative;
            background: url('img/space.jpg') no-repeat fixed 50% 50%;
            background-size: cover;
            width: 100%;
            height: 100vh;
        }

        .footer {
            max-width: 100%;
            height: 520px;
            background: url('img/bottom/footer.jpg') no-repeat fixed 50% 50%;
            background-size: cover;
        }

        .footer__icon_img_first {
            background: url('img//bottom/phone.png') no-repeat 0 0;
            background-size: contain;
        }

        .footer__icon_img_second {
            background: url('img/bottom/location.png') no-repeat 0 0;
            background-size: contain;
        }

        .footer__icon_img_third {
            background: url('img/bottom/mail.png') no-repeat 0 0;
            background-size: contain;
        }
    </style>
</head>
<body class="body_hide">
    <header class="header">
        <section class="header__top-nav">
            <div>
                Menu
            </div>
            <input id="header__menu-toggle" type="checkbox" />
            <label class='header__button-container' for="header__menu-toggle">
                <div class='header__menu-button'></div>
            </label>
            <ul class="header__menu">
                <li class="header__li"><a class="header__links header__links_mobile" href="#scroll__first">О нас</a></li>
                <li class="header__li"><a class="header__links header__links_mobile" href="#scroll__second">Направления</a></li>
                <li class="header__li"><a class="header__links header__links_mobile" href="#">Расписание</a></li>
                <li class="header__li"><a class="header__links header__links_mobile" href="#">Запись в Кванториум</a></li>
                <li class="header__li"><a class="header__links header__links_mobile" href="#">Новости</a></li>
                <li class="header__li"><a class="header__links header__links_mobile" href="#">Мероприятия</a></li>
                <li class="header__li"><a class="header__links header__links_mobile" href="#">Проекты</a></li>
                <li class="header__li"><a class="header__links header__links_mobile" href="#">Команда</a></li>
                <li class="header__li"><a class="header__links header__links_mobile" href="#">Контакты</a></li>
            </ul>
        </section>
        <nav class="header__container">
            <ul class="header__nav">
                <li class="header__li"><a class="header__links" href="#scroll__first">О нас</a></li>
                <li class="header__li"><a class="header__links" href="#scroll__second">Направления</a></li>
                <li class="header__li"><a class="header__links" href="#">Расписание</a></li>
                <li class="header__li"><a class="header__links" href="#">Запись в Кванториум</a></li>
                <li class="header__li"><a class="header__links" href="#">Новости</a></li>
                <li class="header__li"><a class="header__links" href="#">Мероприятия</a></li>
                <li class="header__li"><a class="header__links" href="#">Проекты</a></li>
                <li class="header__li"><a class="header__links" href="#">Команда</a></li>
                <li class="header__li"><a class="header__links" href="#">Контакты</a></li>
            </ul>
        </nav>
        <div class="header__content">
            <div class="header__imgBlock">
                <img class="header__img" src="img/quant.png" alt="Логотип сайта">
            </div>
            <div class="header__poloska"></div>
            <div class="header__text">
                <a class="header__link" href="https://drive.google.com/file/d/1uOsB2pqkOxUsrNb5EZfxwFz5z5cidipx/view"><u>СПИСКИ ОБУЧАЮЩИХСЯ НА ФЕВРАЛЬ 2022 ГОДА</u></a>
                <h3 class="header__h3">КВАНТОРИУМ-15</h3>
            </div>
        </div>
        <a href="#scroll__first" class="header__down">
            <div class="header__arrow"></div>
        </a>
    </header>
    <main>
        <div class="entry">
            <div class="entry__center">
                <a href="#" class="entry__link">ЗАПИСАТЬСЯ В КВАНТОРИУМ</a>
                <a href="https://kvantorium15.ru/kvantorium15/documents/instrukcia_pfdo.pdf" class="entry__link">КАК ПОЛУЧИТЬ СЕРТИФИКАТ ПФДО</a>
            </div>
        </div>

        <div id="scroll__first" class="info">
            <div class="info__double">
                <div class="info__img">
                    <img class="info__image" src="img/house.jpg">
                </div>
                <div class="info__information">
                    <h2 class="info__h2">#КВАНТОРИУМ_15</h2>
                    <div class="header__poloska"></div>
                    <ul>
                        <li class="info__listItem">бесплатное инженерно-техническое дополнительное образование для 5-11 классов</li>
                        <li class="info__listItem">среда развития технических способностей и изобретательского мышления</li>
                        <li class="info__listItem">молодые преподаватели, прошедшие обучение в Сколково</li>
                        <li class="info__listItem">площадка с высокотехнологичным оборудованием</li>
                        <li class="info__listItem">проектное обучение</li>
                        <li class="info__listItem">проблемно-ориентированный подход</li>
                        <li class="info__listItem">внедрение разработок в действующий бизнес</li>
                        <li class="info__listItem"><a href="#" class="info__link">сведения об образовательной организации</a></li>
                        <li class="info__listItem"><a href="https://kvantorium15.ru/documents/itogi2020_light.pdf" class="info__link">отчет о работе за 2020 год</a></li>
                        <li class="info__listItem"><a href="https://kvantorium15.ru/documents/itogi2021_light.pdf" class="info__link">отчет о работе за 2021 год</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="scroll__second" class="directions">
            <h4 class="directions__h4">НАПРАВЛЕНИЯ ПОДГОТОВКИ</h4>
            <div class="header__poloska"></div>
            <div class="directions__Allchoice">
                <div class="directions__choice">
                    <img src="img/choice/1.png" width="200" height="140">
                    <p class="directions__description directions__description_margin">5-11 класс</p>
                    <p class="directions__description">Как сделать автоматическую кормушку для рыбок?</p>
                    <p class="directions__description">Как написать свою собственную мобильную игру?</p>
                    <p class="directions__description">Как выращивать растения без участия человека?</p><br>
                    <p class="directions__description">Разработка приложений и сайтов, создание устройств <br> интернета вещей, облачные сервисы</p>
                    <a href="#" class="directions__link">подробности</a>
                </div>
                <div class="directions__choice">
                    <img src="img/choice/2.png" width="110" height="130">
                    <p class="directions__description directions__description_margin">6-11 класс (12+)</p>
                    <p class="directions__description">Как собрать "капсулу жизни" для десантников?</p>
                    <p class="directions__description">Как разработать собственную головоломку?</p>
                    <p class="directions__description">Как сделать идеальные шины?</p><br>
                    <p class="directions__description">Работа с 3D-принтерами, лазерными и фрезерными <br> станками c ЧПУ, паяльными станциями</p>
                    <a href="#" class="directions__link">подробности</a>
                </div>
                <div class="directions__choice">
                    <img src="img/choice/3.png">
                    <p class="directions__description directions__description_margin">6-11 класс (12+)</p>
                    <p class="directions__description">Как собрать свой квадрокоптер?</p>
                    <p class="directions__description">Как запрограммировать беспилотник?</p>
                    <p class="directions__description">Как с помощью дрона помогать людям при ЧП?</p><br>
                    <p class="directions__description">Аэродинамика, конструирование, радиоэлектроника,<br> схемотехника, программирование</p>
                    <a href="#" class="directions__link">подробности</a>
                </div>
                <div class="directions__choice">
                    <img src="img/choice/4.png" class="directions__imgFirst">
                    <p class="directions__description directions__description_margin">5-11 класс</p>
                    <p class="directions__description">Как сделать чистку зубов более удобной и приятной?</p>
                    <p class="directions__description">Как построить космическую станцию из кубиков?</p>
                    <p class="directions__description">Как будет выглядеть самокат будущего?</p><br>
                    <p class="directions__description">Техническое рисование, создание макетов, 3D-моделирование,<br> эргономика и конструирование</p>
                    <a href="#" class="directions__link">подробности</a>
                </div>
                <div class="directions__choice">
                    <img src="img/choice/5.png" class="directions__imgSecond">
                    <p class="directions__description directions__description_margin">5-11 класс</p>
                    <p class="directions__description">Как научить манипулятор сортировать носки по цвету?</p>
                    <p class="directions__description">Как заставить робота вскапывать грядки?</p>
                    <p class="directions__description">Как научиться работать на промышленном роботе?</p><br>
                    <p class="directions__description">Конструирование и программирование роботов,<br> электроника, мехатроника, программирование</p>
                    <a href="#" class="directions__link">подробности</a>
                </div>
                <div class="directions__choice">
                    <img src="img/choice/6.png">
                    <p class="directions__description directions__description_margin">5-11 класс</p>
                    <p class="directions__description">Как вырастить свой микросад?</p>
                    <p class="directions__description">Как улитки ползают?</p>
                    <p class="directions__description">Кто живет в луже?</p><br>
                    <p class="directions__description">Биология, биотехнология, генная и клеточная инженерия,<br> экология, природоподобные технологии</p>
                    <a href="#" class="directions__link">подробности</a>
                </div>
                <div class="directions__choice">
                    <img src="img/choice/7.png" width="275" height="130">
                    <p class="directions__description directions__description_margin">7-11 класс</p>
                    <p class="directions__description">Как работает виртуальная реальность?</p>
                    <p class="directions__description">Как оживить фотографии на бумаге?</p>
                    <p class="directions__description">Как написать собственный Pokemon Go?</p><br>
                    <p class="directions__description">3d-моделирование в Blender, работа на движке <br> Unity, тестирование в HTC Vive</p>
                    <a href="#" class="directions__link">подробности</a>
                </div>
                <div class="directions__choice">
                    <img src="img/choice/8.png" width="270" height="130">
                    <p class="directions__description directions__description_margin">5-11 класс</p>
                    <p class="directions__description">Как писать качественные новости?</p>
                    <p class="directions__description">Какие видео нужно снимать в современном мире?</p>
                    <p class="directions__description">Почему медиа в XXI веке - это про каждого из нас?</p><br>
                    <p class="directions__description">Работа с текстом и дикцией, фото- и видеосъемка, обработка фото, <br> видеомонтаж, создание контента для соцсетей</p>
                    <a href="#" class="directions__link">подробности</a>
                </div>
                <div class="directions__choice">
                    <img src="img/choice/9.png" width="160" height="125">
                    <p class="directions__description directions__description_margin">7-11 класс</p>
                    <p class="directions__description">Как спутниковый навигатор решает системы уравнений?</p>
                    <p class="directions__description">Зачем велосипедному отражателю знать сумму углов треугольника?</p>
                    <p class="directions__description">Почему в основу современной музыки Бах положил геометрическую прогрессию?</p><br>
                    <p class="directions__description">Работа с математическими конструкторами, базами знаний <br> и вычислительными алгоритмами. Основы программирования</p>
                    <a href="#" class="directions__link">подробности</a>
                </div>
            </div>

            <h4 class="directions__h4">ДОПОЛНИТЕЛЬНО</h4>
            <div class="header__poloska"></div>
            <div class="directions__Allextra">
                <div class="directions__extra">
                    <img class="directions__first" src="img/extra/1.png" width="60" height="135">
                    <h3 class="directions__h3">АНГЛИЙСКИЙ ЯЗЫК</h3>
                    <p class="directions__text">Технический английский язык необходим <br> инженерам, программистам и проектировщикам.<br> Это дополнительные занятия для кванторианцев</p>
                    <a href="#" class="directions__link">подробности</a>
                </div>
                <div class="directions__extra">
                    <img class="directions__second" src="img/extra/2.png" width="135" height="135">
                    <h3 class="directions__h3">ШАХМАТЫ</h3>
                    <p class="directions__text">Шахматы - универсальный тренажер мозга:<br> они развивают логику, анализ и умение планировать.<br> Это дополнительные занятия для кванторианцев</p>
                    <a href="#" class="directions__link">подробности</a>
                </div>
                <div class="directions__extra">
                    <img class="directions__third" src="img/extra/3.png" width="135" height="135">
                    <h3 class="directions__h3">ИНЖЕНЕРНАЯ МАТЕМАТИКА</h3>
                    <p class="directions__text">Практическая математика с основами<br> программирования. Это дополнительные<br> занятия для кванторианцев.</p>
                    <a href="#" class="directions__link">подробности</a>
                </div>
            </div>
        </div>

        <div class="application">
            <div class="application__block">
                <h4 class="application__h4"><a href="">ЗАПИСЬ В КВАНТОРИУМ</a></h4>
                <h4 class="application__h4Mini">ПРИНИМАЕМ ЗАЯВКИ НА НОВЫЙ МОДУЛЬ С СЕНТЯБРЯ 2021 ГОДА</h4>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__triaple">
            <div class="footer__block">
                <div class="footer__underBlock">
                    <div class="footer__icon footer__icon_img_first"></div>
                    <h4 class="footer__h4">ТЕЛЕФОН</h4>
                </div>
                <p class="footer__text">администратор</p>
                <p class="footer__text">+7 (918) 832-42-56</p>
                <p class="footer__text">пн-пт с 10 до 18 часов</p>
            </div>
            <div class="footer__block">
                <div class="footer__underBlock">
                    <div class="footer__icon footer__icon_img_second"></div>
                    <h4 class="footer__h4">АДРЕС</h4>
                </div>
                <p class="footer__text">Владикавказ</p>
                <p class="footer__text">ул. Минина, 15</p>
                <p class="footer__text">вход с Цаликова</p>
            </div>
            <div class="footer__block">
                <div class="footer__underBlock">
                    <div class="footer__icon footer__icon_img_third"></div>
                    <h4 class="footer__h4">EMAIL</h4>
                </div>
                <p class="footer__text">kvantorium15@gmail.com</p>
            </div>
        </div>
        <div class="footer__social">
            <a href="https://vk.com/kvantorium15"><img src="img/bottom/vk.png" alt="" width="35" height="35"></a>
            <a href="https://t.me/kvantorium15_news"><img src="img/bottom/telegram.png" alt="" width="30" height="30"></a>
            <a href="https://discord.com/invite/ezh7gENCQ5"><img src="img/bottom/discord.png" alt="" width="30" height="30"></a>
        </div>
    </footer>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>