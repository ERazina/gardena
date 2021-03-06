<?
    Yii::app()->less->register('gardena');
    Yii::app()->less->registerAll();
    $clientScript = Yii::app()->clientScript;
    $clientScript->registerScriptFile("/res/base/js/gardena/owl.carousel.min.js", ClientScript::POS_END);
    $clientScript->registerScriptFile("/res/js/fancybox2/jquery.fancybox.pack.js", ClientScript::POS_END);
    $clientScript->registerScriptFile("/res/base/js/gardena/gardena.js", ClientScript::POS_END);
    $clientScript->registerScriptFile("/res/base/js/gardena/green.js", ClientScript::POS_END);
?>
 <header class="header">
    <div class="container">
        <a href="/" class="header__logo">
            <img src="/res/base/img/gardena/logo.svg" width="216" height="43">
        </a>
        <a class="header__link" href="/">Перейти на&nbsp;основой сайт</a>
    </div>
</header>
<div class="gardena-preview">
    <img class="gardena-preview__logo" src="/res/base/img/gardena/logo_gardena.png">
    <h1 class="gardena-preview__title">ГАЗОНОКОСИЛКА-РОБОТ</h1>
    <h2 class="gardena-preview__subtitle"><span class="gardena-preview__lawnmower-model">GARDENA R50Li</span>Идеален для любых газонов</h2>
    <div class="gardena-preview__button">
        <a href="http://www.tehnosila.ru/catalog/instrumenty_santehnika_sad/vse_dlya_sada/gazonokosilki_senokosilki/-/309206" class="button">купить</a>
    </div>
    <a href="#advantage_ankor" class="pulse-button">
        <div class="pulse-button__circle"></div>
        <div class="pulse-button__circle_2"></div>
        <div class="pulse-button__center">
            <span class="pulse-button__text pulse-button__text_m">ПОЧЕМУ</span>
            <span class="pulse-button__text pulse-button__text_s">ГАЗОНОКОСИЛКА-РОБОТ</span>
            <span class="pulse-button__text pulse-button__text_l">GARDENA?</span>
        </div>
    </a>
</div>
<!-- <a href="https://www.youtube.com/embed/GPWeXBzSRZQ" data-fancybox-type="iframe" class="gardena-video fancybox-media" target="_blank"> -->
   <!--  <div class="gardena-video__title">Узнайте больше о&nbsp;работе <span class="gardena-video__lawnmower-model">GARDENA R50Li</span></div>
    <div class="gardena-video__play"></div> -->
</a>
 <div class="what-advantage" id="advantage_ankor">
    <div class="container">
        <div class="row">
            <div class="what-advantage__item col-sm-4 col-md-4 col-lg-4">
                <div class="what-advantage__title what-advantage__title_1">Свободное время&nbsp;для&nbsp;себя</div>
                <p class="what-advantage__text">Посвятите время себе, семье и&nbsp;друзьям, пока газонокосилка-робот GARDENA будет почти бесшумно поддерживать газон в&nbsp;идеальном состоянии. Наслаждайтесь отдыхом на&nbsp;даче теперь это так легко!</p>
            </div>
            <div class="what-advantage__item what-advantage__item_center col-sm-4 col-md-4 col-lg-4">
                <div class="what-advantage__title what-advantage__title_2">Газон мечты</div>
                <p class="what-advantage__text">Мечтали&nbsp;ли Вы&nbsp;прогуляться босиком по&nbsp;насыщенно зеленому, мягкому и&nbsp;здоровому ковру из&nbsp;травы? Это расслабляет! Мы&nbsp;вложили наш многолетний опыт и&nbsp;знания в&nbsp;разработку газонокосилки-робота GARDENA R50Li и&nbsp;предлагаем современные технические решения для Вашего удобства. Система SensorCut не&nbsp;пропустит ни&nbsp;одной травинки и&nbsp;гарантирует идеальный результат кошения.</p>
            </div>
            <div class="what-advantage__item col-sm-4 col-md-4 col-lg-4">
                <div class="what-advantage__title what-advantage__title_3">Полное расслабление</div>
                <p class="what-advantage__text">Представьте: Вы&nbsp;приезжаете на&nbsp;дачу или загородный дом, а&nbsp;газон уже идеально под- стрижен! С&nbsp;газонокосилкой- роботом GARDENA, Ваш прекрасный и&nbsp;аккуратный газон станет еще более ухоженным на&nbsp;всем участке, включая периметр вокруг дома! Сохраните это время для более интересных дел!</p>
            </div>
        </div>
    </div>

</div> 

<div class="about clearfix">
    <div class="about-text-align">ГАЗОНОКОСИЛКА-РОБОТ</div>
    <div class="about-subtitle">GARDENA R50Li</div>
    <div class="main-block">Для газона<br>площадью<br>до&nbsp;500&nbsp;м2.</div>
    <div class="advantigies clearfix">
        <div class="advantage-left">
            <div class="item arrow1 item1">
                <h3>Простое и интуитивное<br>управление</h3>
                <p class="item-text">Большой ЖК-дисплей<br> и удобные кнопки меню</p>
            </div>
            <div class="item arrow2 item2">
                <h3>Энергоэффективная работа</h3>
                <p class="item-text">Низкий уровень<br>потребления энергии</p>
            </div>
            <div class="item arrow3 item3">
                <h3>Надежный и&nbsp;долговечный</h3>
                <p class="item-text">Современный литий-ионный аккумулятор</p>
            </div>
        </div>
        <div class="advantage-right">
                <div class="item arrow4 item4">
                    <h3>Тихая работа</h3>
                    <p class="item-text">60 дБ (А) – не будет беспокоить Вас или Ваших соседей</p>
                </div>
                <div class="item arrow5 item5">
                    <h3>Безопасность</h3>
                    <p class="item-text">Двойная защита от кражи при помощи PIN кода и сигнализации</p>
                </div>
                <div class="item arrow6 item6">
                    <h3>Максимальный уклон</h3>
                    <p class="item-text">До 25%</p>
                </div>
                    <div class="item arrow7 item7">
                    <h3>Регулировка высоты кошения</h3>
                    <p class="item-text">от 20 до 50 мм</p>
                </div>
            </div>
    </div>

     <img src="res/base/img/gardena/gardena.jpg" class="gardena-image" alt="gardena">
</div>  
 <div class="garden">
    <div class="more-time__title">Уcаживайтесь поудобнее<br>и&nbsp;наслаждайтесь отдыхом в&nbsp;саду</div>
    <p class="more-time__subtitle">Интеллектуальная газонокосилка-робот работает, пока Вы отдыхаете.</p>
    <div class="slider owl-carousel">
        <div class="slider__item-wrapp">
            <div class="slider__item slider__item_1">
                <div class="slider__title">Интуитивная настройка<div class="slider__subtitle">Установите, настройте и&nbsp;запрограммируйте газонокосилку-робот за один раз легко и&nbsp;быстро.</div></div>
            </div>
        </div>
        <div class="slider__item-wrapp">
            <div class="slider__item slider__item_2">
                <div class="slider__title">Автоматическая зарядка<div class="slider__subtitle">Газонокосилка-робот самостоятельно возвращается на зарядную станцию при минимальном уровне заряда.</div></div>
            </div>
        </div>
        <div class="slider__item-wrapp">
            <div class="slider__item slider__item_3">
                <div class="slider__title">Косит траву на узких участках с&nbsp;легкостью<div class="slider__subtitle">Благодаря направляющему проводу, газонокосилка-робот без труда проходит вдоль узких мест шириной 1.5 м</div></div>
            </div>
        </div>
        <div class="slider__item-wrapp">
            <div class="slider__item slider__item_6">
                <div class="slider__title">Система SensorCut<div class="slider__subtitle">Благодаря свободному движению
газонокосилки-робота в разные стороны в пределах ограничительного провода, газон становится идеальным.</div></div>
            </div>
        </div>
        <div class="slider__item-wrapp">
            <div class="slider__item slider__item_7">
                <div class="slider__title">Регулировка высоты кошения<div class="slider__subtitle">Вы легко можете регулировать высоту кошения при помощи удобного переключателя.</div></div>
            </div>
        </div>
        <div class="slider__item-wrapp">
            <div class="slider__item slider__item_8">
                <div class="slider__title">Направляющий провод<div class="slider__subtitle">Благодаря запатентованному уникальному направляющему проводу, газонокосилка-робот находит путь из отдаленных участков сада к
зарядной стации, когда необходимо подзарядить аккумулятор. В то же время, газонокосилка-робот не оставляет колеи на газоне, так как он всегда двигается на разном расстоянии от направляющего провода.</div></div>
            </div>
        </div>
                <div class="slider__item-wrapp">
            <div class="slider__item slider__item_9">
                <div class="slider__title">Прецизионная заточка<div class="slider__subtitle">Кончики травинок срезаются
газонокосилкой-роботом равномерно в одном направлении.</div></div>
            </div>
        </div>
                <div class="slider__item-wrapp">
            <div class="slider__item slider__item_10">
                <div class="slider__title">Мульчирование – натуральное удобрение для газона<div class="slider__subtitle">Газонокосилка-робот GARDENA распределяет скошенную траву по поверхности, обогащая почву полезными элементами. Мульчирование - эффективный способ поддержания здоровья газона.</div></div>
            </div>
        </div>
                <div class="slider__item-wrapp">
            <div class="slider__item slider__item_4">
                <div class="slider__title">Косит траву в&nbsp;любую погоду<div class="slider__subtitle">Газонокосилка-робот GARDENA технологически на шаг впереди многих устройств и поэтому может подстригать газон в любую погоду. Больше не нужно покупать дополнительный датчик дождя и останавливать работу газонокосилки в дождливую погоду.</div></div>
            </div>
        </div>
        <div class="slider__item-wrapp">
            <div class="slider__item slider__item_5">
                <div class="slider__title">Невероятно тихая&nbsp;работа<div class="slider__subtitle">Благодаря технологии Silent Drive газонокосилка-робот GARDENA работает настолько тихо, что Вы можете быть уверены, что этот маленький помощник не побеспокоит Ваших соседей.</div></div>
            </div>
        </div>
    </div>
</div> 
<div class="more-time">
    <div class="more-time__img-wrapp">
        <div class="more-time__img"></div>
    </div>
    <div class="container">
        <div class="more-time__title">Больше свободного времени</div>
        <p class="more-time__subtitle">Наконец-то больше свободного времени!<br>Это значит&nbsp;&mdash; больше времени для семьи, друзей и&nbsp;себя.</p>
        <div class="guide">
            <div class="guide__pulse js-greener">
                <div class="pulse">
                    <div class="pulse__circle"></div>
                    <div class="pulse__circle_2"></div>
                </div>
            </div>
            <table class="guide__item js-greener">
                <tr>
                    <td class="guide__text">Определите место для зарядной станции</td>
                    <td class="guide__center"><span class="guide__circle">1</span></td>
                    <td class="guide__img"><img src="res/base/img/gardena/more-time/1.png"></td>
                </tr>
            </table>
            <table class="guide__item js-greener">
                <tr>
                    <td class="guide__img guide__img_reverse"><img src="res/base/img/gardena/more-time/2.png"></td>
                    <td class="guide__center"><span class="guide__circle">2</span></td>
                    <td class="guide__text guide__text_reverse">Проложите ограничитель&shy;ный провод</td>
                </tr>
            </table>
            <table class="guide__item js-greener">
                <tr>
                    <td class="guide__text">Проложите направляющий провод</td>
                    <td class="guide__center"><span class="guide__circle">3</span></td>
                    <td class="guide__img"><img src="res/base/img/gardena/more-time/3.png"></td>
                </tr>
            </table>
            <table class="guide__item js-greener">
                <tr>
                    <td class="guide__img guide__img_reverse"><img src="res/base/img/gardena/more-time/4.png"></td>
                    <td class="guide__center"><span class="guide__circle">4</span></td>
                    <td class="guide__text guide__text_reverse">Подсоедините провода к зарядной станции</td>
                </tr>
            </table>
            <table class="guide__item js-greener">
                <tr>
                    <td class="guide__text">Настройте газоно&shy;косилку-робот</td>
                    <td class="guide__center"><span class="guide__circle">5</span></td>
                    <td class="guide__img"><img src="res/base/img/gardena/more-time/5.png"></td>
                </tr>
            </table>
            <table class="guide__item js-greener">
                <tr>
                    <td class="guide__img guide__img_reverse"><img src="res/base/img/gardena/more-time/6.png"></td>
                    <td class="guide__center"><span class="guide__circle">6</span></td>
                    <td class="guide__text guide__text_reverse">Запустите газонокосилку-робот</td>
                </tr>
            </table>
            <div class="guide__pulse guide__pulse_2 js-greener">
                <div class="pulse pulse_white">
                    <div class="pulse__circle"></div>
                    <div class="pulse__circle_2"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="full-autonom">
        <div class="container">
            <div class="full-autonom__title">Полностью<br> автоматическое&nbsp;кошение</div>
            <p class="full-autonom__text">Газонокосилка-робот GARDENA работает самостоятельно и&nbsp;охватывает только участок в&nbsp;пределах ограничительного провода.</p>
            <div class="full-autonom__button">
                <a href="http://www.tehnosila.ru/catalog/instrumenty_santehnika_sad/vse_dlya_sada/gazonokosilki_senokosilki/-/309206" class="button">купить</a>
            </div>
        </div>
    </div>
</div>
<div class="video">
<!-- <div class="container"> -->
    <a href="https://www.youtube.com/embed/GPWeXBzSRZQ" data-fancybox-type="iframe" class="gardena-video fancybox-media" target="_blank"></a>
</div>
<!-- </div> -->
<div class="properties">
    <div class="container">

        <div class="properties__title">Газонокосилка-робот</div>
        <div class="properties__subtitle">GARDENA R50Li</div>
        <div class="raw">
            <table>
                <tr>
                    <td>Артикул</td>
                    <td>4077&ndash;32</td>
                </tr>
                <tr>
                    <td class="properties__painted">Рекомендованная площадь кошения</td>
                    <td class="properties__painted">До&nbsp;500&nbsp;м&sup2;</td>
                </tr>
                <tr>
                    <td>Время зарядки аккумулятора</td>
                    <td>90&nbsp;мин.</td>
                </tr>
                 <tr>
                    <td>Время кошения на одной зарядке, прибл.</td>
                    <td>60&nbsp;мин.</td>
                </tr>
                <tr>
                    <td>Принадлежности в&nbsp;комплекте</td>
                    <td>
                        <ul>
                            <li>150&nbsp;м ограничитель&shy;ного провода,</li>
                            <li>200 шт. фиксаторов&nbsp;для огран. провода,</li>
                            <li>7 шт. клеммы&#8209;соедини&shy;тели,</li>
                            <li>5 шт. муфты,</li>
                            <li>3 шт. ножи режущие двусторонние (сменные)</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Тип аккумулятора / Мощность</td>
                    <td>Литий-ионный аккумулятор 18 Вт&nbsp;/ 1.6 Ач</td>
                </tr>
                <tr>
                    <td>Зарядка аккумулятора</td>
                    <td>Автоматическая</td>
                </tr>
                <tr>
                    <td>Максимальный уклон</td>
                    <td>До&nbsp;25%</td>
                </tr>
                <tr>
                    <td>Регулировка высоты кошения, мин.-макс.</td>
                    <td>20&ndash;50&nbsp;мм</td>
                </tr>
                <tr>
                    <td>Дисплей</td>
                    <td>ЖК&nbsp;дисплей с&nbsp;
                        программируемым меню</td>
                </tr>
                <tr>
                    <td>Вес / Габариты (Д&nbsp;х&nbsp;Ш&nbsp;х&nbsp;В)</td>
                    <td>7.4 кг&nbsp;/ 58&times;46&times;25.5&nbsp;см</td>
                </tr>
                <tr>
                    <td>Защита от&nbsp;кражи</td>
                    <td>PIN код и&nbsp;сигнализация</td>
                </tr>
                <tr>
                    <td>Датчики</td>
                    <td>Столкновения, поднятия и&nbsp;наклона</td>
                </tr>
                <tr>
                    <td>Мульчирование</td>
                    <td>&bull;</td>
                </tr>
                <tr>
                    <td>Работа в&nbsp;дождь</td>
                    <td>&bull;</td>
                </tr>
                <tr>
                    <td>Режим энергосбережения</td>
                    <td>&bull;</td>
                </tr>
                <tr>
                    <td>Гарантированный уровень шума</td>
                    <td>60 дБ&nbsp;(А)</td>
                </tr>
                <tr>
                    <td>Максимальное количество часов работы в&nbsp;день</td>
                    <td>13 ч</td>
                </tr>
            </table>
            <img src="res/base/img/gardena/gardena_piece.jpg" alt="" class="properties__image">
        </div>
    </div>
</div>
<div class="beauti-lawn">
    <div class="container">
        <div class="raw">
            <div class="beauti-lawn__title">Все для прекрасного газона</div>
        </div>
        <div class="beauti-lawn__grid raw">
            <a href="http://www.tehnosila.ru/catalog/dom_i_dacha/silovaya_i_sadovaya_tehnika/uhod_za_gazonom/gazonokosilki/gazonokosilki_elektricheskie?update=1&price_region_1%5Bmin%5D=4960&price_region_1%5Bmax%5D=82799&price_region_1%5BprevMin%5D=4960&price_region_1%5BprevMax%5D=82799&prop_brand%5B0%5D=GARDENA" class="beauti-lawn__item beauti-lawn__item_1 col-md-3">
                <span class="beauti-lawn__text">Газонокосилки</span>
                <img class="beauti-lawn__img" src="res/base/img/gardena/beautiful-lawn/1.jpg">
            </a>
            <a href="http://www.tehnosila.ru/catalog/dom_i_dacha/silovaya_i_sadovaya_tehnika/uhod_za_gazonom/trimmery?update=1&price_region_1%5Bmin%5D=1262&price_region_1%5Bmax%5D=56040&price_region_1%5BprevMin%5D=1262&price_region_1%5BprevMax%5D=56040&prop_brand%5B0%5D=GARDENA" class="beauti-lawn__item beauti-lawn__item_2 col-md-3">
                <span class="beauti-lawn__text">Триммеры</span>
                <img class="beauti-lawn__img" src="res/base/img/gardena/beautiful-lawn/2.jpg">
            </a>
            <a href="http://www.tehnosila.ru/catalog/dom_i_dacha/silovaya_i_sadovaya_tehnika/obrabotka_pochvy/aerator_i_vertikutter?update=1&price_region_1%5Bmin%5D=9205&price_region_1%5Bmax%5D=26590&price_region_1%5BprevMin%5D=9205&price_region_1%5BprevMax%5D=26590&prop_brand%5B0%5D=GARDENA" class="beauti-lawn__item beauti-lawn__item_3 col-md-3">
                <span class="beauti-lawn__text">Аэраторы</span>
                <img class="beauti-lawn__img" src="res/base/img/gardena/beautiful-lawn/3.jpg">
            </a>
            <a href="http://www.tehnosila.ru/catalog/dom_i_dacha/silovaya_i_sadovaya_tehnika/uhod_za_rasteniyami/kustorezy?update=1&price_region_1%5Bmin%5D=662&price_region_1%5Bmax%5D=10620&price_region_1%5BprevMin%5D=662&price_region_1%5BprevMax%5D=10620&prop_brand%5B0%5D=GARDENA&prop_p0000004345%5B0%5D=2534143038" class="beauti-lawn__item beauti-lawn__item_4 col-md-3">
                <span class="beauti-lawn__text">Ножницы/Кусторезы</span>
                <img class="beauti-lawn__img" src="res/base/img/gardena/beautiful-lawn/4.jpg">
            </a>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="share-block">
                    <span class="share-block__title">Поделиться</span>
                    <span class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki"></span>
                </div>
            </div>
            <div class="footer__info col-sm-8 col-md-8 col-lg-8">
                <p class="footer__copyright">Copyright © Техносила, 2016</p>
                <p class="footer__tel"><a class="footer__number" href="tel:<?= Yii::app()->settings->global_phone ?>"><?= Yii::app()->settings->global_phone ?></a> — для звонков по России (бесплатно)</p>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">
    $(window).resize(function(){
        var getWrappHeight = $('.more-time__img-wrapp').css('height');
        var setWrappHeight = +getWrappHeight.substring(0, getWrappHeight.length - 2);
        $('.more-time__img-wrapp').css('height', s(vetWrappHeight + 1) + "px");
    });
</script>