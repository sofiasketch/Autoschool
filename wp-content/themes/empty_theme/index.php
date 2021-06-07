<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package empty_theme

 */


?>
<html <?php language_attributes(); ?>>
<!DOCTYPE HTML>
<HTML>
<HEAD>
    <TITLE>Автошкола Five speed</TITLE>
    <meta charset="utf-8">
    <LINK rel="stylesheet" href="<?php _e(get_stylesheet_directory_uri()) ?>/style.css">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>" type="text/javascript"></script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Подключаем CSS слайдера -->
    <link rel="stylesheet" href="<?php _e(get_stylesheet_directory_uri()) ?>/simple-adaptive-slider.min.css">
    <!-- Подключаем JS слайдера -->
    <script defer src="<?php _e(get_stylesheet_directory_uri()) ?>/simple-adaptive-slider.min.js"></script>
<!--    --><?php /*wp_head(); */?>
</HEAD>

<?php

$path_to_img = get_stylesheet_directory_uri() . '/img/';

?>

<BODY>
    <section id="citySelector" class="nm">

    </section>
    <section class="firstPage com">
        <div class="fheader white nm fheader__shadow">
            <ul>
                <li class="active"><a href="#Newss" class="com">Новости</a></li>
                <li><a href="#WhyWe" class="com">Наши услуги</a></li>
                <li><a href="#mapNadpis" class="com">Наши школы</a></li>
                <li><a href="#SheduleNadpis" class="com">Расписание занятий</a></li>
                <li><a href="#InsrtuctNadpis" class="com">Преподаватели</a></li>
                <li><a href="#ReviewNadpis" class="com">Отзывы</a></li>
                <li><a href="#footerr" class="com">Контакты</a></li>
                <div class="gorod">
                    <img src="<?php _e($path_to_img) ?>location.png" class="citySelectImg">
                    <p id="gorod_p" class="com"></p>
                </div>
            </ul>
        </div>
            <div class="pc__main">
                <div class="pc__sl_container vlg white">
                    <p class="pc__slogan com"><span class="pc__slogan_white">Мы делаем все, чтобы</span> вы.. </p>
                    <section>
                        <p class="com"><b>+7 (4693) 33-83-15</b> </p>
                        <p class="com">Пн-Пт с 10:00 до 18:00</p>
                    </section>
                </div>
                <div class="pc__texts texts lg">
                    <img src="<?php _e($path_to_img) ?>car.png" alt="">
                    <p class="texts__title com"> Научились мастерски водить</p>
                    <img src="<?php _e($path_to_img) ?>speed.png">
                    <p class="texts__title com">Сделали это в кратчайшие сроки</p>
                    <img src="<?php _e($path_to_img) ?>key.png">
                    <p class="texts__title com">Наконец завладели собственной машиной</p>
                    <p class="vlg white com">Выберите свой план обучения</p>
                    <p class="yellow com">Всего за пару кликов </p>
                    <a href="#categorii" class="downarrow__container">
                        <img id="downarrow" src="<?php _e($path_to_img) ?>down arrow.png">
                    </a>
                </div>
                <div class="pc__logo">
                    <img src="<?php _e($path_to_img) ?>logotip.png" alt="logo">
                </div>
            </div>

    </section>


<!--    Меню для мобилок и планшетов-->

    <div id="mobile__menu">
        <ul class="nm">
            <li><a href="#Newss" class="com">Новости</a></li>
            <li><a href="#WhyWe" class="com">Наши услуги</a></li>
            <li><a href="#mapNadpis" class="com">Наши школы</a></li>
            <li><a href="#SheduleNadpis" class="com">Расписание занятий</a></li>
            <li><a href="#InsrtuctNadpis" class="com">Преподаватели</a></li>
            <li><a href="#ReviewNadpis" class="com">Отзывы</a></li>
            <li><a href="#footerr" class="com">Контакты</a></li>
        </ul>
    </div>

   <!-- Для планшетов-->
    <section class="tablet">
        <div class="tablet__header fheader__shadow">
            <div id="tablet__menu_trigger" class="table__menu_trigger">
                <svg height="384pt" viewBox="0 -53 384 384" width="384pt" xmlns="http://www.w3.org/2000/svg"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/></svg>
<!--                <img src="<?php /*_e($path_to_img) */?>menu_mobile_tablet.svg" alt="menu">-->
            </div>
            <div class="tablet__info nm">
                <p class="com">+7 (4693) 33-83-15 </p>
                <img src="<?php _e($path_to_img) ?>location.png" class="citySelectImg">
                <p id="gorod_plan" class="com"></p>
            </div>
        </div>
        <div class="tablet__main com">
            <p class="pc__slogan com" ><span class="pc__slogan_white">Мы делаем все, чтобы</span> вы.. </p>
            <div class="pc__texts texts lg com">
                <img src="<?php _e($path_to_img) ?>car.png" alt="">
                <p class="texts__title com"> Научились мастерски водить</p>
                <img src="<?php _e($path_to_img) ?>speed.png">
                <p class="texts__title com">Сделали это в кратчайшие сроки</p>
                <img src="<?php _e($path_to_img) ?>key.png">
                <p class="texts__title com">Наконец завладели собственной машиной</p>
                <p class="vlg white tac com">Выберите свой план обучения</p>
                <p class="yellow com">Всего за пару кликов </p>
                <a href="#categorii" class="downarrow__container">
                    <img id="downarrow" src="<?php _e($path_to_img) ?>down arrow.png">
                </a>
            </div>
            <div class="tablet__logo">
                <img src="<?php _e($path_to_img) ?>logotip.png" alt="logo">
            </div>
        </div>
    </section>

<!--    Для телефонов-->
    <section class="mobile">
        <div class="mobile__header nm fheader__shadow">
            <div id="mobile__menu_trigger">
                <svg height="384pt" viewBox="0 -53 384 384" width="384pt" xmlns="http://www.w3.org/2000/svg">
                <path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                <path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                <path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                </svg>
<!--                <img src="<?php /*_e($path_to_img) */?>menu_mobile_tablet.svg" alt="menu">-->
            </div>
            <p id="topright" class="com" ><span class="pc__slogan_white">Мы делаем все, чтобы</span> вы.. </p>
            <div class="mobile__logo">
                <img src="<?php _e($path_to_img) ?>logotip.png" alt="logo">
            </div>
            <div class="mobile__functions">
                <p class="mobile__tel com">+7 (4693) 33-83-15 </p>
                <div class="functions__location">
                    <img src="<?php _e($path_to_img) ?>location.png" class="citySelectImg">
                    <span id="gorod_tel" class="com"></span>
                </div>
            </div>
        </div>
        <div class="mobile__main">

            <div class="mobile__texts texts nm">
                <div class="texts__item ">
                    <img src="<?php _e($path_to_img) ?>car.png">
                    <span class="texts__title com"> Научились мастерски водить</span>
                </div>
                <div class="texts__item">
                    <img src="<?php _e($path_to_img) ?>speed.png">
                    <span class="texts__title com">Сделали это в кратчайшие сроки</span>
                </div>
                <div class="texts__item">
                    <img src="<?php _e($path_to_img) ?>key.png">
                    <span class="texts__title com">Наконец завладели собственной машиной</p>
                </div>
                <p class="tablet__plan tac someLeft com">Выберите свой план обучения</p>
                <p class="tablet__click someLeft com">Всего за пару кликов </p>
                <a href="#categorii" class="downarrow__container">
                    <img id="downarrow" src="<?php _e($path_to_img) ?>down arrow.png">
                </a>
            </div>
            <div class="tablet__logo">

            </div>
        </div>
    </section>

        <section class="main">
            <section class="Nadpis">
                <section class="line1"></section>
                <p class="lg com">ВЫБЕРИТЕ КАТЕГОРИЮ</p>
                <section class="line2"></section>
            </section>

             <section id="categorii">
                <button class="rectangles nm M"> B </button>
                <button class="rectangles nm A"> B </button>
                <button class="rectangles nm"> A и A1 </button>
                <button class="rectangles nm"> C </button>
                <button class="rectangles nm"> D </button>
            </section>

            <section class="rect__nadpisi nm sans">
                <div>МКПП</div>
                <div>АКПП</div>
                <div></div>
                <div></div>
                <div></div>
            </section>

            <section class="rect">
                <div class="rect__header">
                    <div class="sans">
                        <h2 class="lg">Категория В (МКПП)</h2>
                        <p class="nm">Срок обучения (в месяц):</p>
                    </div>

                        <img src="<?php _e($path_to_img) ?>car2.png" id="carimg">

                </div>
                <div class="rect__cubes sans">
                    <button class="hours lg"> 16 ч. </button>
                    <button class="hours lg"> 24 ч. </button>
                    <button class="hours lg"> 32 ч. </button>
                </div>
                <div class="rect__prices sans">
                    <p class="lg">20 000 руб.<span class="nm"> 26 000 руб.</span></p>
                    <p class="lg">Акция до 30.06.2021</p>
                </div>
            </section>

            <section class="Nadpis">
                 <section class="line1"></section>
                 <p class="lg com">СТОИМОСТЬ ВАШЕГО ОБУЧЕНИЯ:</p>
                 <section class="line2"></section>
             </section>

            <section class="Stoimost sans">
                <section class="KategoriiHours lg"> B </section>
                <section class="KategoriiHours lg"> 32 ч. </section>
            </section>
            <section class="cena lg sans"> 24 000 руб.</section>
            <section class="Benzin nm sans">Бензин оплачивается отдельно:<br>  M, A, A1 - входит в стоимость обучения;<br>  B, ВС, CE, BD, CD - 200 руб. за каждое занятие</section>
        </section>

        <section class="Nadpis" id="mapNadpis">
            <section class="line1"></section>
            <p class="lg com">ФИЛИАЛЫ</p>
            <section class="line2"></section>
        </section>

        <section id="map"></section>

        <section id="WhyWe">
            <section id="WhyWeText" class="com"> Почему именно мы? </section>
            <section class="whyThree WhyWeFirst ibm">
                <div>
                    <div class="whyText_grey whyText m_fz">
                        Смотрите лекции<br>  и<br>  решайте билеты
                    </div>
                    <div class="whyText_yellow whyText m_fz">
                        Не выходя из дома!
                    </div>
                </div>
                <div>
                    <img src="<?php _e($path_to_img) ?>man.png">
                </div>
                <div>
                    <section class="whyText_grey whyText m_fz">
                        Мы приготовили<br>  уникальные<br>  методики
                    </section>
                    <section class="whyText_yellow whyText m_fz">
                        Только для вас!
                    </section>
                </div>
            </section>

            <section id="WhyWeTextSec" class="m_lfz WhyWeTextSec com"> Удобные и современные классы! </section>
            <section class="whyThree ibm">
                <div>
                    <div class="whyText_orange whyText m_fz">
                        Множество<br> филиалов
                    </div>
                    <div class="whyText_orange whyText m_fz">
                        Комфортный дизайн
                    </div>
                </div>
                <div>
                    <img src="<?php _e($path_to_img) ?>people.png">
                </div>
                <div>
                    <section class="whyText_orange whyText m_fz">
                        Современное оборудование
                    </section>
                </div>
            </section>

            <section id="WhyWeTextThird" class="m_lfz WhyWeTextThird com"> Индивидуальный график </section>
            <section class="whyThree WhyWeThird ibm">
                <div>
                    <div class="whyText_lgrey whyText m_fz">
                        Нет подходящего расписания?
                    </div>
                    <div class="whyText_lgrey whyText m_fz">
                        Тяжелый график?
                    </div>
                </div>
                <div>
                    <img src="<?php _e($path_to_img) ?>kalendar.png">
                </div>
                <div>
                    <section class="whyText_lgrey whyText m_fz">
                        Мы подберем вам индивидуальное время для занятий!
                    </section>
                </div>
            </section>

            <!--<section id = "WhyWeFirst">
                <section class="textone m_fz"> Смотрите лекции<br>  и<br>  решайте билеты </section>
                <img id="man" src="<?php /*_e($path_to_img) */?>man.png" >
                <section class="textTwo m_fz"> Мы приготовили<br>  уникальные<br>  методики</section>
                <section class="textThree m_fz"> Не выходя из дома!</section>
                <section class="textFour m_fz"> Только для вас!</section>
             </section>
            <section id="WhyWeTextSec" class="m_lfz"> Удобные и современные классы! </section>
            <section id = "WhyWeSec">
                <section class="textFive">
                    <p class="m_fz"> Множество филиалов </p>
                    <p class="m_fz"> Комфортный дизайн </p>
                </section>
                <img id="people" src="<?php /*_e($path_to_img) */?>people.png">
                <section class="textSix m_fz"> Современное оборудование</section>
            </section>
            <section id="WhyWeTextThird"> Индивидуальный график </section>
            <section id = "WhyWeThird">
                <section class="textSeven">
                    <p class="m_fz"> Нет подходящего расписания? </p>
                    <p class="m_fz"> Тяжелый график? </p>
                </section>
                <img id="kalendar" src="<?php /*_e($path_to_img) */?>kalendar.png">
                <section class="textEight m_fz">Мы подберем вам индивидуальное время для занятий! </section>
            </section>-->
        </section>

        <section id="ostalos" class="lg com"> Осталось всего лишь записаться! </section>
        <section id="zapis" class="sans">
            <section id="prepodavatel">
                <img src="<?php _e($path_to_img) ?>azimova.png" width="100%">
                <hr size=5%  width=100% align="left" color="black" bottom="5%">
                <p class="Prep lg">Азимова Людмила Сергеевна</p>
                <p class="Prep lg">свяжется с вами!</p>
            </section>

            <section id="registr" class="nm">
                <p class="lg"> ФИО </p>
                <input class="lg" type="text" width="100%">
                <p class="lg"> Телефон </p>
                <input class="lg" type="text" width="100%">
                <p class="lg"> E-mail </p>
                <input class="lg" type="text" width="100%">
                <p class="lg"> Возраст </p>
                <input class="lg" type="text" width="100%">
            </section>
        </section>

        <button id="but" class="lg ibm">ОТПРАВИТЬ</button>
        <section id="success" class="lg ibm">
            <p id="pushd"><b>Операция прошла успешно!</b></p>
        </section>

        <section class="Nadpis" id="Newss">
            <section class="line1"></section>
            <p class="lg com">НОВОСТИ</p>
            <section class="line2"></section>
        </section>

<!--        	<section class="all">
        	<input checked type="radio" name="respond" id="desktop">
        		<article id="slider">
        				<input checked type="radio" name="slider" id="switch1">
        				<input type="radio" name="slider" id="switch2">
        				<input type="radio" name="slider" id="switch3">
        			<section id="slides">
        				<section id="overflow">
        					<section class="image">
        						<article><img src="<?php /*_e($path_to_img) */?>news1.png"></article>
        						<article><img src="<?php /*_e($path_to_img) */?>news2.png"></article>
        						<article><img src="<?php /*_e($path_to_img) */?>news3.png"></article>
        					</section>
        				</section>
        			</section>
        			<section id="controls">
        				<label for="switch1"></label>
        				<label for="switch2"></label>
        				<label for="switch3"></label>
        			</section>
        		</article>
        	</section>-->

<!--    Слайдер-->
            <div class="adaptivn-slayder">
                <div class="parag">
                    <img src="<?php _e($path_to_img) ?>news1.png">
                </div>

                <div class="parag">
                    <img src="<?php _e($path_to_img) ?>news2.png">
                </div>

                <div class="parag">
                    <img src="<?php _e($path_to_img) ?>news3.png">
                </div>

                <a class="prev" onclick="minusSlide()">❮</a>
                <a class="next" onclick="plusSlide()">❯</a>
            </div>

            <div class="uneizmen-akemada">
                <span class="noguma-pomoki-kadra" onclick="currentSlide(1)"></span>
                <span class="noguma-pomoki-kadra" onclick="currentSlide(2)"></span>
                <span class="noguma-pomoki-kadra" onclick="currentSlide(3)"></span>
            </div>



        	<section class="Nadpis" id="InsrtuctNadpis">
                <section class="line1"></section>
                <p class="lg com">НАШИ УЧИТЕЛЯ</p>
                <section class="line2"></section>
            </section>

        	<h1 class="vlg com">Инструкторы:</h1>
        	<section id="instr"></section>
        	<section class="container sans">
        		<section class="instructors">
        			<section class="instructors_item">
        				<img class="instructors_icon" src="<?php _e($path_to_img) ?>instructors1.png" alt="">
        				<section class="instructors_text nm">Афанасьев Михаил Петрович<br>Машина инструктора:<br>Peugot 206<br>Стаж: 16 лет<br>Стаж инструктором: 9 лет</section>
        			</section>

        			<section class="instructors_item">
        				<img class="instructors_icon" src="<?php _e($path_to_img) ?>instructors2.png" alt="">
        				<section class="instructors_text nm">Кузнецова Анна Антоновна<br>Машина инструктора:<br>Renault Sandero<br>Стаж: 13 лет<br>Стаж инструктором: 6 лет</section>
        			</section>

        			<section class="instructors_item">
        				<img class="instructors_icon" src="<?php _e($path_to_img) ?>instructors3.png" alt="">
        				<section class="instructors_text nm">Сорокин Марк Даниилович<br>Машина инструктора:<br>Volkswagen Polo<br>Стаж: 11 лет<br>Стаж инструктором: 3 года</section>
        			</section>
        		</section>
        	</section>

        	<h1 class="vlg com">Преподаватели теории:</h1>
        	<section class="container sans">
        		<section class="teachers">
        			<section class="teachers_item">
        				<img class="teachers_icon" src="<?php _e($path_to_img) ?>teachers1.png" alt="">
        				<section class="teachers_text nm">Беляева Злата Вячеславовна<br>Стаж преподавателем: 7 лет<br>Расскажет все об устройстве автомобиля!</section>
        			</section>

        			<section class="teachers_item">
        				<img class="teachers_icon" src="<?php _e($path_to_img) ?>teachers2.png" alt="">
        				<section class="teachers_text nm">Фадеева Екатерина Тимофеевна<br>Стаж преподавателем: 11 лет<br>Обучит вас ППД!</section>
        			</section>

        			<section class="teachers_item">
        				<img class="teachers_icon" src="<?php _e($path_to_img) ?>teachers3.png" alt="">
        				<section class="teachers_text nm">Климов Михаил Вадимович<br>Стаж преподавателем: 8 лет<br>Расскажет о ваших правах и обязанностях</section>
        			</section>
        		</section>
        	</section>

        	<section class="Nadpis" id="SheduleNadpis">
                <section class="line1"></section>
                <p class="lg com">РАСПИСАНИЕ ЗАНЯТИЙ</p>
                <section class="line2"></section>
            </section>

        	<section id="container" class="rasp">
        		<section class="schedule">
        			<section class="schedule_item sans">
        				<h4 class="schedule_title rasp-nm">Дневные<br>(12:00 - 14:00)</h4>
        					<section id="flexbox">
        					<section class="item rasp-nm">01.02</section>
        					<section class="item rasp-nm">03.02</section>
        					<section class="item rasp-nm">05.02</section>
        					</section>
        					<section id="flexbox2">
        					<section class="item rasp-nm">07.02</section>
        					<section class="item rasp-nm">11.02</section>
        					<section class="item rasp-nm">13.02</section>
        					</section>
        				<img class="schedule_icon" src="<?php _e($path_to_img) ?>afternoon.png" alt="">
        			</section>
        			<section class="schedule_month">
        			<section id="fb">
        			<section class="month rasp-nm ibm">Февраль</section>
        			</section>
        			</section>
        			<section class="schedule_item sans">
        				<h4 class="schedule_title rasp-nm">Вечерние<br>(18:30 - 20:30)</h4>
        				<section id="flexbox3">
        					<section class="item rasp-nm">04.02</section>
        					<section class="item rasp-nm">06.02</section>
        					<section class="item rasp-nm">08.02</section>
        					</section>
        					<section id="flexbox4">
        					<section class="item rasp-nm">10.02</section>
        					<section class="item rasp-nm">14.02</section>
        					<section class="item rasp-nm">16.02</section>
        					</section>
        				<img class="schedule_icon" src="<?php _e($path_to_img) ?>evening.png" alt="">
        			</section>
        		</section>
        	</section>

        	<section class="Nadpis" id="ReviewNadpis">
                <section class="line1"></section>
                <p class="lg com">ОТЗЫВЫ</p>
                <section class="line2"></section>
            </section>

            <section id="reviewid">
                <section class="review">
                    <div class="review__img">
                        <img src="<?php _e($path_to_img) ?>review1.png" alt="">
                    </div>
                    <div class="review__text">
                        <div class="djc review__title">
                            <p class="vlg sans">Татьяна</p>
                            <p class="lg sans">Инструктор: Кузнецова Анна Антоновна</p>
                        </div>

                        <section class="review__main lg ibm">Ура! 👏 Наконец-то я осуществила свою давнюю мечту!<br>Я сдала экзамен, причём, с первого раза! (хотя думала, что это нереально 😉)</section>
                    </div>
                </section>
            </section>

            <section class="review">
                <div class="review__img">
                    <img src="<?php _e($path_to_img) ?>review2.png" alt="">
                </div>
                <div class="review__text">
                    <div class="djc review__title">
                        <p class="vlg sans">Анна</p>
                        <p class="lg sans">Инструктор: Сорокин Марк Даниилович</p>
                    </div>
                    <section class="review__main lg ibm">Если сильно захотеть...🙌🏻<br>Вот и свершилось то, к чему я так долго шла (ну может не совсем долго, но мне показалось вечностью😀)<br>Теперь я полноправный водитель 🙃</section>
                </div>
            </section>

            <section class="review">
                <div class="review__img">
                    <img src="<?php _e($path_to_img) ?>review3.png" alt="">
                </div>
                <div class="review__text">
                    <div class="djc review__title">
                        <p class="vlg sans">Андрей</p>
                        <p class="lg sans">Инструктор: Афанасьев Михаил Петрович</p>
                    </div>
                    <section class="review__main lg ibm">Вот подошёл к концу и мой путь обучения в самой крутой автошколе FiveSpeeds💛<br>И путь этот был просто замечательным и интереснейшим. Были сложности, но они только закаляли!</section>
                </div>
            </section>

        	<hr id="footerr">
        	<footer>
        		<section class="container">
        			<section class="information">
        				<section class="information_item">
        					<img class="logo_icon" src="<?php _e($path_to_img) ?>RombLogo.png" >
        				</section>
        				<section class="information_item">
        					<section class="information_text vlg ibm">Автошкола Five Speeds<br>+7 (4693) 33-83-15<br>Пн-Пт с 10:00 до 18:00</section>
        					<ul class="social_information">
        						<li><a href="https://www.instagram.com/"><img src="<?php _e($path_to_img) ?>instagram.png" width="100%" ></a></li>
        						<li><a href="https://vk.com/login"><img src="<?php _e($path_to_img) ?>vkontakte.png" width="100%" ></a></li>
        						<li><a href="https://www.youtube.com/"><img src="<?php _e($path_to_img) ?>youtube.png" width="100%" ></a></li>
        					</ul>
        				</section>
        				<section class="information_item sans">
        					<section class="links lg">
        						<p><a href="#Newss" style="color: #000000" >Новости</a><br>
        						<a href="#WhyWe" style="color: #000000" >Наши услуги</a><br>
        						<a href="#mapNadpis" style="color: #000000" >Наши школы</a><br>
        						<a href="#SheduleNadpis" style="color: #000000" >Расписание</a><br>
        						<a href="#InsrtuctNadpis" style="color: #000000" >Преподаватели</a><br>
        						<a href="#ReviewNadpis" style="color: #000000" >Отзывы</a></p>
        					</section>
        					<section class="text nm">ООО "FiveSpeeds" ИНН 1810016425 / КПП 164109081 ОГРН<br>1961420006961 / ОКПО 19357863 011073,<br>Удмуртская Респ, г. Ижевск, ул. Максима Горького, д. 18</section>
        				</section>
        			</section>
        		</section>
        	</footer>

    <script src="main.js"></script>
    <script>

        let YMCities = {
            'Москва': [55.754155, 37.622552],
            'Санкт-Петербург' : [59.574211, 30.195521],
            'Казань' : [55.7887400, 49.1221400],
            'Ижевск' : [56.8497600, 53.2044800],
            'Пермь' : [58.0104600, 56.2501700]
        }

        function changeYMCity() {

            document.getElementById('map').innerHTML = ""

            let longitude = YMCities[currentCity][1]
            let latitude = YMCities[currentCity][0]

            // Москва
            // let longitude = 37.622552 1/37.605968 2/37.602957 3/37.636437 4/37.627702 5/37.601084
            // let latitude = 55.754155 1/55.759030 2/55.764141 3/55.761076 4/55.768078 5/55.747213

            var myMap = new ymaps.Map('map', {
                    center: [latitude, longitude],
                    zoom: 13
                }, {
                    searchControlProvider: 'yandex#search'
                }),

                // Создаём макет содержимого.
                MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                    '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                ),

                Placemark1 = new ymaps.Placemark(myMap.getCenter(), {
                    hintContent: 'первая метка',
                    balloonContent: 'местонахождение автошколы',
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: 'RombLogo.png',
                    // Размеры метки.
                    iconImageSize: [40, 40],
                    iconImageOffset: [-24, -24]
                }),

                Placemark2 = new ymaps.Placemark([latitude + 0.005, longitude - 0.17], {
                    hintContent: 'метка',
                    balloonContent: 'местонахождение автошколы',
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: 'RombLogo.png',
                    // Размеры метки.
                    iconImageSize: [40, 40],
                    iconContentLayout: MyIconContentLayout,
                    iconImageOffset: [-24, -24]
                }),

                Placemark3 = new ymaps.Placemark([latitude + 0.1, longitude - 0.20], {
                            hintContent: 'метка',
                            balloonContent: 'местонахождение автошколы',
                        }, {
                            // Опции.
                            // Необходимо указать данный тип макета.
                            iconLayout: 'default#imageWithContent',
                            // Своё изображение иконки метки.
                            iconImageHref: 'RombLogo.png',
                            // Размеры метки.
                            iconImageSize: [40, 40],
                            iconImageOffset: [-24, -24],
                            iconContentLayout: MyIconContentLayout
                        }),

                Placemark4 = new ymaps.Placemark([latitude + 0.1, longitude + 0.14], {
                            hintContent: 'метка',
                            balloonContent: 'местонахождение автошколы',
                        }, {
                            // Опции.
                            // Необходимо указать данный тип макета.
                            iconLayout: 'default#imageWithContent',
                            // Своё изображение иконки метки.
                            iconImageHref: 'RombLogo.png',
                            // Размеры метки.
                            iconImageSize: [40, 40],
                            iconImageOffset: [-24, -24],
                            iconContentLayout: MyIconContentLayout
                        }),

                Placemark5 = new ymaps.Placemark([latitude + 0.01, longitude + 0.05], {
                            hintContent: 'метка',
                            balloonContent: 'местонахождение автошколы',
                        }, {
                            // Опции.
                            // Необходимо указать данный тип макета.
                            iconLayout: 'default#imageWithContent',
                            // Своё изображение иконки метки.
                            iconImageHref: 'RombLogo.png',
                            // Размеры метки.
                            iconImageSize: [40, 40],
                            iconImageOffset: [-24, -24],
                            iconContentLayout: MyIconContentLayout
                        }),

                Placemark6 = new ymaps.Placemark([latitude - 0.01, longitude - 0.21], {
                            hintContent: 'метка',
                            balloonContent: 'местонахождение автошколы',
                        }, {
                            // Опции.
                            // Необходимо указать данный тип макета.
                            iconLayout: 'default#imageWithContent',
                            // Своё изображение иконки метки.
                            iconImageHref: 'RombLogo.png',
                            // Размеры метки.
                            iconImageSize: [40, 40],
                            iconImageOffset: [-24, -24],
                            iconContentLayout: MyIconContentLayout
                        });

            myMap.geoObjects
                .add(Placemark1)
                .add(Placemark2)
                .add(Placemark3)
                .add(Placemark4)
                .add(Placemark5)
                .add(Placemark6);
        }

        ymaps.ready(changeYMCity)



    </script>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlide() {
            showSlides(slideIndex += 1);
        }

        function minusSlide() {
            showSlides(slideIndex -= 1);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("parag");
            var dots = document.getElementsByClassName("noguma-pomoki-kadra");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace("deystvuyus", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " deystvuyus";
        }
    </script>
    </BODY>

</HTML>



<?php ?>



