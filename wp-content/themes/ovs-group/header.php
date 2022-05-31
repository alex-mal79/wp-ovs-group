<!DOCTYPE html>
<html lang="ru" class="page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная ОВС-ГРУПП</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/swiper.min.css?_v=20220531123418">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css?_v=20220531123418">
    <script defer src="<?php echo get_template_directory_uri();?>/assets/js/swiper.min.js?_v=20220531123418"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/assets/js/app.min.js?_v=20220531123418"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/assets/js/main.min.js?_v=20220531123418"></script>
    <?php wp_head();?> 
</head>
<body class="page__body">
    <div class="site-container">

        <header class="header" data-scroll="150">
            <div class="header__container container">
                <div class="header__wrap">
                    <div class="header__logo logo">
                        <a href="index.html" class="logo__link">
                            <div class="logo__img img">
                                <picture>
                                  <!-- <source srcset="img/logo.avif" type="image/avif"> -->
                                  <source srcset="img/logo.webp" type="image/webp">
                                  <img loading="lazy" src="img/logo.jpg" class="image" alt="Логотип ООО ОВС-ГРУПП">
                                </picture>
                            </div>
                            <div class="logo__text">ОВС-ГРУПП</div>
                        </a>
                    </div>
                    <div class="header__menu menu">
                        <nav class="menu__body" data-menu-body data-drop-mainBlock>
                            <ul class="menu__list">
                                <li class="menu__item">
                                    <a href="##" class="menu__link">
                                        <span class="menu__text">О компании</span>
                                    </a>
                                </li>
                                <li class="menu__item" data-drop-parent>
                                    <button class="menu__button btn-reset" data-drop-btn>
                                        <span class="menu__text">Услуги</span>
                                        <span class="menu__arrow img">
                                            <picture>
                                              <source srcset="img/icons/arrow-menu.avif" type="image/avif">
                                              <source srcset="img/icons/arrow-menu.webp" type="image/webp">
                                              <img loading="lazy" src="img/icons/arrow-menu.png" alt="Стрелка меню">
                                            </picture>
                                        </span>
                                    </button>
                                    <div class="menu__dropdown dropdown">
                                        <ul class="dropdown__list">
                                            <li class="dropdown__item">
                                                <a href="##" class="dropdown__link">
                                                    <span class="dropdown__icon img">
                                                        <img loading="lazy" src="img/icons/arrow.svg" alt="Стрелка меню">
                                                    </span>
                                                    <span class="dropdown__text">
                                                        Техническое обслуживание оборудования АЗС
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="dropdown__item">
                                                <a href="##" class="dropdown__link">
                                                    <span class="dropdown__icon img">
                                                        <img loading="lazy" src="img/icons/arrow.svg" alt="Стрелка меню">
                                                    </span>
                                                    <span class="dropdown__text">
                                                        Ремонт и замена оборудования АЗС
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="dropdown__item">
                                                <a href="##" class="dropdown__link">
                                                    <span class="dropdown__icon img">
                                                        <img loading="lazy" src="img/icons/arrow.svg" alt="Стрелка меню">
                                                    </span>
                                                    <span class="dropdown__text">
                                                        Монтаж пластиковых и металло-трубопроводов
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="dropdown__item">
                                                <a href="##" class="dropdown__link">
                                                    <span class="dropdown__icon img">
                                                        <img loading="lazy" src="img/icons/arrow.svg" alt="Стрелка меню">
                                                    </span>
                                                    <span class="dropdown__text">
                                                        Внедрение автоматизированных систем управления АЗС
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu__item" data-drop-parent>
                                    <button class="menu__button btn-reset" data-drop-btn>
                                        <span class="menu__text">Каталог</span>
                                        <span class="menu__arrow img">
                                            <picture>
                                              <source srcset="img/icons/arrow-menu.avif" type="image/avif">
                                              <source srcset="img/icons/arrow-menu.webp" type="image/webp">
                                              <img loading="lazy" src="img/icons/arrow-menu.png" alt="Стрелка меню">
                                            </picture>
                                        </span>
                                    </button>
                                    <div class="menu__dropdown dropdown">
                                        <ul class="dropdown__list">
                                            <li class="dropdown__item">
                                                <a href="##" class="dropdown__link">
                                                    <span class="dropdown__icon img">
                                                        <img loading="lazy" src="img/icons/arrow.svg" alt="Стрелка меню">
                                                    </span>
                                                    <span class="dropdown__text">
                                                        Метрология
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="dropdown__item">
                                                <a href="##" class="dropdown__link">
                                                    <span class="dropdown__icon img">
                                                        <img loading="lazy" src="img/icons/arrow.svg" alt="Стрелка меню">
                                                    </span>
                                                    <span class="dropdown__text">
                                                        Топливо-раздаточные краны
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu__item">
                                    <a href="##" class="menu__link">
                                        <span class="menu__text">Контакты</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__contacts contacts-header" data-da=".menu__body, 768, last">
                        <a href="tel:+30713028604" class="contacts-header__link">
                            <span class="contacts-header__icon-phone img">
                                <picture>
                                  <source srcset="img/icons/icon-phone.avif" type="image/avif">
                                  <source srcset="img/icons/icon-phone.webp" type="image/webp">
                                  <img loading="lazy" src="img/icons/icon-phone.png" alt="Иконка телефона">
                                </picture>
                            </span>
                            <span class="contacts-header__text">+3 (071) 302-86-04</span>
                        </a>
                        <a href="mailto:info@ovs-group.ru" class="contacts-header__link">
                            <span class="contacts-header__icon-mail img">
                                <picture>
                                  <source srcset="img/icons/icon-mail.avif" type="image/avif">
                                  <source srcset="img/icons/icon-mail.webp" type="image/webp">
                                  <img loading="lazy" src="img/icons/icon-mail.png" alt="Иконка телефона">
                                </picture>
                            </span>
                            <span class="contacts-header__text">info@ovs-group.ru</span>
                        </a>
                    </div>
                    <div class="header__bureger">
                        <button type="button" class="icon-menu btn-reset" data-icon-menu>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </header>