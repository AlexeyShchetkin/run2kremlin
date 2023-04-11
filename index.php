<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="favicon.png?2" type="image/jpeg">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>от Кремля до Кремля</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css?4" rel="stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.pack.js"></script>
    <script type="text/javascript" src="js/jquery.tosrus.min.all.js"></script>
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css"/>

    <script type="text/javascript">
        jQuery(function ($) {
            $('#slider1 a').tosrus({
                buttons: 'inline',
                pagination: {
                    add: true,
                    type: 'bullets'
                }
            });
            $('#slider1').tosrus({
                infinite: true,
                buttons: {
                    next: true,
                    prev: true
                },
                pagination: {
                    add: false,
                    type: 'bullets'
                },
                slides: {
                    visible: 4
                }
            });
            $('#slider2').tosrus({
                infinite: true,
                buttons: {
                    next: true,
                    prev: true
                },
                slides: {
                    visible: 1,
                    scale: 'fill'
                }
            });
        });
    </script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Меню</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#" class="topLink">Главная</a></li>
                <li><a href="#about" class="topLink">О мероприятии</a></li>
                <li><a href="#map" class="topLink">Трасса</a></li>
                <li><a href="#media" class="topLink">Фото</a></li>
                <li><a href="#media" class="topLink">Видео</a></li>
                <li><a href="#rules" class="topLink">Информация</a></li>
                <li><a href="#registration" class="topLink">Регистрация</a></li>
                <li><a href="#contacts" class="topLink">Контакты</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="home">
    <div class="container">
        <div class="col-sm-3 home-partners">
        </div>
        <div class="col-sm-6">
            <div class="switcher">
                <ul class="lang">
                    <li></li>
                    <li class="active"></li>
                </ul>
            </div>
            <div class="logo">
                <h1>от Кремля<br/> до Кремля</h1>
                Долгожданный старт из Коломны в Зарайск
            </div>
            <div class="home-next">
                <a href="#about" class="topLink"><img src="images/arr-down.png"></a>
            </div>
        </div>
        <div class="col-sm-3 home-partners">
        </div>
    </div>
</div>
<div class="container" id="about">
    <div class="row">
        <div class="col-sm-1">
            <div class="rotate-header">О мероприятии</div>
        </div>
        <div class="col-sm-11">
            <div class="about-text">
                <div class="col-md-4 col-sm-12">
                    <h2 style="margin-top: 0;">Максимальное количество участников – 100 атлетов</h2>
                </div>
                <div class="col-md-4 col-sm-12">
                    <p>Общая длительность маршрута: около 65 км. Для эстафеты доступно 4 этапа длительностью от 12 до 20
                        км.</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2 style="margin-top: 0;">Лето в Подмосковье прекрасно</h2>
                    <p>Маршрут проходит в основном по грунтовым дорогам среди ухоженных сельско-хозяйственных полей,
                        сосновых и лиственных лесов.</p>
                </div>
            </div>
            <br clear="all">
            <div class="about-text">
                <div class="col-md-4 col-sm-12">
                    <h2 style="margin-top: 0;">Маршрут соединяет Зарайск и Коломну, древние города на юго-востоке
                        Подмосковья в 100 км от Москвы
                    </h2>
                </div>
                <div class="col-md-4 col-sm-12">
                    <p>Маршрут "от Кремля до Кремля" - линейная дистанция соединяющая Коломенский и Зарайские кремли.
                        Проходит по полевым и лесным дорогам Коломенского, Зарайского, Луховицкого и Озерского районов.
                    </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2 style="margin-top: 0;">Участникам откроется море красок восходящего солнца и переливы летней
                        росы.</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="map">
    <div class="container">
        <div class="row">
            <div class="col-sm-1 col-sm-1 pad">
                <div class="rotate-header">Трасса</div>
            </div>
            <div class="col-sm-4 pad">
                <a href="https://nakarte.me/#m=11/54.93181/38.81602&l=O&nktl=RTMjtxmR9K6DiwmMOfNlow" target="_blank"><h2>Трек 2022</h2></a>
            </div>
            <div class="col-sm-7">
                <img src="images/map/2022_sm.png?557" class="map-img"
                                                       style="max-width:800px">
            </div>

        </div>
    </div>
</div>
<div class="container" id="media">
    <div class="row">
        <div class="col-md-1 col-sm-2">
            <div class="rotate-header">Фото и видео</div>
        </div>
        <div class="col-md-10 col-sm-10">
            <div id="slider1" class="gallery" class="thumbs">
                <a href="images/photos/1.jpg?557"><img src="images/photos/sm/1.jpg?557"/></a>
                <a href="images/photos/2.jpg?557"><img src="images/photos/sm/2.jpg?557"/></a>
                <a href="images/photos/3.jpg?557"><img src="images/photos/sm/3.jpg?557"/></a>
                <a href="images/photos/4.jpg?557"><img src="images/photos/sm/4.jpg?557"/></a>
                <a href="images/photos/5.jpg?557"><img src="images/photos/sm/5.jpg?557"/></a>
                <a href="images/photos/6.jpg?557"><img src="images/photos/sm/6.jpg?557"/></a>
                <a href="images/photos/7.jpg?557"><img src="images/photos/sm/7.jpg?557"/></a>
                <a href="images/photos/8.jpg?557"><img src="images/photos/sm/8.jpg?557"/></a>
            </div>
            <div id="slider2" class="gallery" class="thumbs">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/KJbEjJmPGtk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div
			</div>
        <div class="col-md-1 hidden-sm"></div>
    </div>
</div>
<div id="rules">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-sm-2">
                <div class="rotate-header">Информация</div>
            </div>
            <div class="col-md-10 col-sm-10">
                <div class="" id="rules-1">
<p>Друзья!</p>
<p>Приглашаем вас принять участие в пробеге "от Кремля до Кремля".</p>
<p>Старт - в ночь с субботы на воскресенье от Пятницких ворот Коломенского кремля, финиш - утром в воскресенье у Зарайского кремля.</p>
<p>Общая длина маршрута -- около 65 км. Его можно пробежать полностью или в составе команды в виде эстафеты.</p>
<p>Этапы эстафеты:
<ul>
<li>Коломна (Пятницкие ворота) -- Щурово (около 12 км, асфальт);</li>
<li>Щурово -- Городна (около 14 км, лесные и полевые дороги);</li>
<li>Городна -- Протекино (около 20 км, асфальт, лесные и полевые дороги);</li>
<li>Протекино -- Зарайск (около 20 км, асфальт, полевые дороги).</li>
</ul>
<p>Дистанция будет частично размечена. Участники должны иметь устройство с записанным треком дистанции. Окончательные треки мы опубликуем за 2 недели до мероприятия.</p>
<p>В местах смены эстафеты мы организуем воду и питание. Просим участников иметь многоразовые стаканчики для воды.</p>
<p>Участники добираются до старта и перемещаются между местами смены эстафеты на своем транспорте. Часть дистанции будет проходить по дорогам общего пользования. Дороги перекрываться не будут, поэтому всем нужно будет соблюдать правила дорожного движения.</p>
<p>Для участия нужно будет зарегистрироваться на <a href="https://myrace.info/events/443" target="_blank">myrace.info</a> и оплатить организационный взнос.</p>
                    <p><a href="/uploads/run2kremlins_2023.pdf" target="_blank">Подробнее</a></p>
                </div>
            </div>
            <div class="col-md-1 hidden-sm"></div>
        </div>
    </div>
</div>
<div id="registration">
    <div class="row">
        <div class="col-md-1 col-sm-2">
            <div class="rotate-header">Регистрация</div>
        </div>
        <div class="col-md-10 col-sm-10" style="padding-top: 50px;">
            <p class="registration-wrapper">Перед регистрацией прочитайте, пожалуйста, <a href="/uploads/run2kremlins_2023.pdf" target="_blank">Положение</a></p>
            <p class="registration-wrapper">
                <a class="btn btn-registration" href="https://myrace.info/events/443" target="_blank">Регистрация</a>
            </p>
        </div>
        <div class="col-md-1 hidden-sm"></div>
    </div>
</div>
<div id="contacts">
    <div class="row">
        <div class="col-md-1 col-sm-2">
            <div class="rotate-header">Контакты</div>
        </div>
        <div class="col-md-10 col-sm-10">
            <ul>
                <li class="email"><a href="mailto:run2kremlins@gmail.com">run2kremlins@gmail.com</a></li>
            </ul>
        </div>
        <div class="col-md-1 hidden-sm"></div>
    </div>
</div>
<div id="footer">
    <div class="social">
        <a href="https://vk.com/run2kremlins" target="_blank">
            <img src="/images/icon-vk.svg" />
        </a>
        <a href="https://t.me/+885mnkeR7FwzYmVi" target="_blank">
            <img src="/images/icon-tg.svg" />
        </a>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
