<!DOCTYPE html>
<html lang="ru" class="page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная ОВС-ГРУПП</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicon.ico"/>
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
            <?php 
                $site_img_logo =  carbon_get_theme_option('site_logo');
                $site_img_src_logo =  wp_get_attachment_image_url($site_img_logo, 'full');
                $site_img_src_webp_logo = convertToWebpSrc($site_img_src_logo);

                $icon_phone_header =  carbon_get_theme_option('site_icon_phone_header');
                $icon_phone_header_src =  wp_get_attachment_image_url($icon_phone_header, 'full');
                $icon_phone_header_src_webp = convertToWebpSrc($icon_phone_header_src);

                $icon_email_header =  carbon_get_theme_option('site_icon_email_header');
                $icon_email_header_src =  wp_get_attachment_image_url($icon_email_header, 'full');
                $icon_email_header_src_webp = convertToWebpSrc($icon_email_header_src);
            ?>
            <div class="header__container container">
                <div class="header__wrap">
                    <div class="header__logo logo">
                        <?php if(is_front_page()):?>
                            <div class="logo__img img">
                                <picture>
                                  <!-- <source srcset="logo.avif" type="image/avif"> -->
                                  <source srcset="<?php echo $site_img_src_webp_logo;?>" type="image/webp">
                                  <img loading="lazy" src="<?php echo $site_img_src_logo;?>" class="image" alt="Логотип ООО ОВС-ГРУПП">
                                </picture>
                            </div>
                            <div class="logo__text">
                                <?php if($GLOBALS['ovs_group']['logo_text']):?>
                                    <?php echo $GLOBALS['ovs_group']['logo_text'];?>
                                <?php endif;?>
                            </div>
                        <?php else:?>
                            <a href="/" class="logo__link">
                                <div class="logo__img img">
                                    <picture>
                                        <!-- <source srcset="logo.avif" type="image/avif"> -->
                                        <source srcset="<?php echo $site_img_src_webp_logo;?>" type="image/webp">
                                        <img loading="lazy" src="<?php echo $site_img_src_logo;?>" class="image" alt="Логотип ООО ОВС-ГРУПП">
                                    </picture>
                                </div>
                                <div class="logo__text">
                                    <?php if($GLOBALS['ovs_group']['logo_text']):?>
                                        <?php echo $GLOBALS['ovs_group']['logo_text'];?>
                                    <?php endif;?>
                                </div>
                            </a>
                        <?php endif;?>
                    </div>
                    <div class="header__menu menu">
                        <nav class="menu__body" data-menu-body data-drop-mainBlock>
                            <ul class="menu__list">
                                <li class="menu__item">
                                    <a href="http://ovs-group.local/about" class="menu__link">
                                        <span class="menu__text">О компании</span>
                                    </a>
                                </li>
                                <li class="menu__item" data-drop-parent>
                                    <button class="menu__button btn-reset" data-drop-btn>
                                        <span class="menu__text">Услуги</span>
                                        <span class="menu__arrow img">
                                            <picture>
                                              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow-menu.avif" type="image/avif">
                                              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow-menu.webp" type="image/webp">
                                              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow-menu.png" alt="Стрелка меню">
                                            </picture>
                                        </span>
                                    </button>
                                    <div class="menu__dropdown dropdown">
                                        <ul class="dropdown__list">
                                            <li class="dropdown__item">
                                                <a href="##" class="dropdown__link">
                                                    <span class="dropdown__icon img">
                                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow.svg" alt="Стрелка меню">
                                                    </span>
                                                    <span class="dropdown__text">
                                                        Техническое обслуживание оборудования АЗС
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="dropdown__item">
                                                <a href="##" class="dropdown__link">
                                                    <span class="dropdown__icon img">
                                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow.svg" alt="Стрелка меню">
                                                    </span>
                                                    <span class="dropdown__text">
                                                        Ремонт и замена оборудования АЗС
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="dropdown__item">
                                                <a href="##" class="dropdown__link">
                                                    <span class="dropdown__icon img">
                                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow.svg" alt="Стрелка меню">
                                                    </span>
                                                    <span class="dropdown__text">
                                                        Монтаж пластиковых и металло-трубопроводов
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="dropdown__item">
                                                <a href="##" class="dropdown__link">
                                                    <span class="dropdown__icon img">
                                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow.svg" alt="Стрелка меню">
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
                                              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow-menu.avif" type="image/avif">
                                              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow-menu.webp" type="image/webp">
                                              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow-menu.png" alt="Стрелка меню">
                                            </picture>
                                        </span>
                                    </button>
                                    <div class="menu__dropdown dropdown">
                                        <ul class="dropdown__list">
                                            <li class="dropdown__item">
                                                <a href="##" class="dropdown__link">
                                                    <span class="dropdown__icon img">
                                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow.svg" alt="Стрелка меню">
                                                    </span>
                                                    <span class="dropdown__text">
                                                        Метрология
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="dropdown__item">
                                                <a href="##" class="dropdown__link">
                                                    <span class="dropdown__icon img">
                                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow.svg" alt="Стрелка меню">
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
                        <a href="tel:tel:<?php echo $GLOBALS['ovs_group']['phone_nomask_main'];?>" class="contacts-header__link">
                            <span class="contacts-header__icon-phone img">
                                <picture>
                                  <!-- <source srcset="icon-phone.avif" type="image/avif"> -->
                                  <source srcset="<?php echo $icon_phone_header_src_webp;?>" type="image/webp">
                                  <img loading="lazy" src="<?php echo $icon_phone_header_src;?>" alt="Иконка телефона">
                                </picture>
                            </span>
                            <span class="contacts-header__text">
                                <?php echo $GLOBALS['ovs_group']['phone_main'];?>
                            </span>
                        </a>
                        <a href="mailto:<?php echo $GLOBALS['ovs_group']['email_main'];?>" class="contacts-header__link">
                            <span class="contacts-header__icon-mail img">
                                <picture>
                                  <!-- <source srcset="icon-mail.avif" type="image/avif"> -->
                                  <source srcset="<?php echo $icon_email_header_src_webp;?>" type="image/webp">
                                  <img loading="lazy" src="<?php echo $icon_email_header_src;?>" alt="Иконка телефона">
                                </picture>
                            </span>
                            <span class="contacts-header__text">
                                <?php echo $GLOBALS['ovs_group']['email_main'];?>
                            </span>
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