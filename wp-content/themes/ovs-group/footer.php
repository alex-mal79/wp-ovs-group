<footer class="footer">
            <section class="footer__top">
                <div class="top-footer container">
                    <ul class="top-footer__list">
                        <li class="top-footer__item footer-info">
                            <h2 class="footer-info__title title-footer">ИНФОРМАЦИЯ</h2>
                            <nav class="footer-info__menu menu-footer">
                                <ul class="menu-footer__list">
                                    <li class="menu-footer__item">
                                        <a href="##" class="menu-footer__link">
                                            <div class="menu-footer__icon img">
                                                <img loading="lazy" src="img/icons/arrow.svg" alt="Стрелка меню">
                                            </div>
                                            <span class="menu-footer__text">
                                                О компании
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu-footer__item">
                                        <a href="##" class="menu-footer__link">
                                            <div class="menu-footer__icon img">
                                                <img loading="lazy" src="img/icons/arrow.svg" alt="Стрелка меню">
                                            </div>
                                            <span class="menu-footer__text">
                                                Контакты
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </li>
                        <li class="top-footer__item footer-clients">
                            <ul class="menu-footer__list">
                                <li class="menu-footer__item">
                                    <h2 class="footer-clients__title title-footer">КЛИЕНТАМ</h2>
                                    <nav class="footer-clients__menu menu-footer" data-spoilers>
                                        <div class="menu-footer__items">
                                            <button class="menu-footer__button btn-reset" type="button" tabindex="-1" data-spoiler>
                                                <span class="menu-footer__button-icon"></span>
                                                <span class="menu-footer__button-text">Услуги</span>
                                            </button>
                                            <ul class="menu-footer__list menu-footer__list--pt">
                                                <li class="menu-footer__item">
                                                    <a href="##" class="menu-footer__link">
                                                        <div class="menu-footer__icon img">
                                                            <img loading="lazy" src="img/icons/arrow.svg" alt="Стрелка меню">
                                                        </div>
                                                        <span class="menu-footer__text">
                                                            Техническое обслуживание оборудования АЗС
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="menu-footer__item">
                                                    <a href="##" class="menu-footer__link">
                                                        <div class="menu-footer__icon img">
                                                            <img loading="lazy" src="img/icons/arrow.svg" alt="Стрелка меню">
                                                        </div>
                                                        <span class="menu-footer__text">
                                                            Ремонт и замена оборудования АЗС
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="menu-footer__item">
                                                    <a href="##" class="menu-footer__link">
                                                        <div class="menu-footer__icon img">
                                                            <img loading="lazy" src="img/icons/arrow.svg" alt="Стрелка меню">
                                                        </div>
                                                        <span class="menu-footer__text">
                                                            Монтаж пластиковых и металло-трубопроводов
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="menu-footer__item">
                                                    <a href="##" class="menu-footer__link">
                                                        <div class="menu-footer__icon img">
                                                            <img loading="lazy" src="img/icons/arrow.svg" alt="Стрелка меню">
                                                        </div>
                                                        <span class="menu-footer__text">
                                                            Внедрение автоматизированных систем управления АЗС
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="menu-footer__items">
                                            <button class="menu-footer__button btn-reset" type="button" tabindex="-1" data-spoiler>
                                                <span class="menu-footer__button-icon"></span>
                                                <span class="menu-footer__button-text">Катлог</span>
                                            </button>
                                            <ul class="menu-footer__list menu-footer__list--pt">
                                                <li class="menu-footer__item">
                                                    <a href="##" class="menu-footer__link">
                                                        <div class="menu-footer__icon img">
                                                            <img loading="lazy" src="img/icons/arrow.svg" alt="Стрелка меню">
                                                        </div>
                                                        <span class="menu-footer__text">
                                                            Метрология
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="menu-footer__item">
                                                    <a href="##" class="menu-footer__link">
                                                        <div class="menu-footer__icon img">
                                                            <img loading="lazy" src="img/icons/arrow.svg" alt="Стрелка меню">
                                                        </div>
                                                        <span class="menu-footer__text">
                                                            Топливо-раздаточный краны
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </li>
                                <li class="menu-footer__item">
                                </li>
                            </ul>
                        </li>
                        <li class="top-footer__item footer-address">
                            <h2 class="footer-address__title title-footer">КОНТАКТЫ </h2>
                            <adress class="footer-address__address address">
                                <div class="address__item">
                                    <div class="address__icons img">
                                        <img src="img/icons/phone.png" alt="Иконка телефона">
                                    </div>
                                    <div class="address__wrap">
                                        <div class="address__inner">
                                            <a href="tel:<?php echo $GLOBALS['ovs_group']['phone_nomask_main'];?>" class="address__link address__link--mr">
                                                <?php echo $GLOBALS['ovs_group']['phone_main'];?>
                                            </a>
                                            <?php if($GLOBALS['ovs_group']['phone_additional']):?>
                                                <a href="tel:<?php echo $GLOBALS['ovs_group']['phone_nomask_additional'];?>" class="address__link">
                                                    <?php echo $GLOBALS['ovs_group']['phone_additional'];?>
                                                </a>
                                            <?php endif;?>
                                        </div>
                                        <p class="address__descr">
                                            Режим работы:&nbsp;
                                            <?php echo $GLOBALS['ovs_group']['work_time'];?>
                                        </p>
                                    </div>
                                </div>
                                <div class="address__item">
                                    <div class="address__icons img">
                                        <img src="img/icons/mail.png" alt="Иконка Email">
                                    </div>
                                    <div class="address__wrap">
                                        <p class="address__descr">Email:</p>
                                        <div class="address__inner">
                                            <a href="mailto:<?php echo $GLOBALS['ovs_group']['email_main'];?>" class="address__link">
                                                <?php echo $GLOBALS['ovs_group']['email_main'];?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="address__item">
                                    <div class="address__icons img">
                                        <img src="img/icons/location.png" alt="Иконка Email">
                                    </div>
                                    <div class="address__wrap">
                                        <div class="address__inner">
                                            <a href="##" class="address__link address__link--mw">
                                                <?php echo $GLOBALS['ovs_group']['address'];?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </adress>
                        </li>
                    </ul>
                </div>
            </section>
            <div class="footer__bottom bottom-footer">
                <div class="bottom-footer__container container">
                    <div class="bottom-footer__logo logo">
                    <?php if(is_front_page()):?>
                            <div class="logo__img img">
                                <picture>
                                  <source srcset="<?php echo get_template_directory_uri();?>/assets/img/logo.avif" type="image/avif">
                                  <source srcset="<?php echo get_template_directory_uri();?>/assets/img/logo.webp" type="image/webp">
                                  <img loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/img/logo.jpg" class="image" alt="Логотип ООО ОВС-ГРУПП">
                                </picture>
                            </div>
                            <div class="logo__text">
                                <?php if($GLOBALS['ovs_group']['logo_text']):?>
                                    <?php echo $GLOBALS['ovs_group']['logo_text'];?>
                                <?php endif;?>
                            </div>
                        <?php else:?>
                            <a href="index.html" class="logo__link">
                                <div class="logo__img img">
                                    <picture>
                                        <source srcset="assets/img/logo.avif" type="image/avif">
                                        <source srcset="assets/img/logo.webp" type="image/webp">
                                        <img loading="lazy" src="assets/img/logo.jpg" class="image" alt="Логотип ООО ОВС-ГРУПП">
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
                    <div class="bottom-footer__copy copy-footer">
                        <p class="copy-footer__year">
                            2021-<?php echo date('Y');?> &nbsp;&nbsp;
                            &copy;  &nbsp;&nbsp;
                            <?php echo $GLOBALS['ovs_group']['main_name'];?>
                        </p>
                        <p class="copy-footer__guard">Все права защищены.</p>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <?php wp_footer();?>
</body>
</html>