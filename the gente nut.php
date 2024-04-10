<?php 
// Template Name: The gente
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset') ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Главная</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/css/main.css" />
  <?php wp_head(); ?>
</head>

<body data-barba="wrapper">
  <div class="wrapper">
    <header class="header">
      <div class="container">
        <div class="header__row">
          <a class="logo" href="index.html">
            <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/logo.png" alt="">
          </a>

          <nav class="header__nav">
            <ul class="header__list">
              <li>
                <a class="header__link" href="http://portfolio/gente-product/">О продукте</a>
              </li>
              <li>
                <a class="header__link" href="http://portfolio/katalog/">Каталог </a>
              </li>
              <li>
                <a class="header__link" href="http://portfolio/recept/">Рецепты</a>
              </li>
              <li>
                <a class="header__link" href="http://portfolio/kontact/">Контакты</a>
              </li>
            </ul>
          </nav>

          <button class="mobile-nav-btn">
            <div class="nav-icon">
              <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/mobbtn.jpg" alt="">
            </div>
          </button>
        </div>
      </div>
    </header>
    <div class="mobile__nav-overlay"></div>
    <div class="mobile-nav">
      <button class="mobile__close">
        <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/close.svg" alt="close">
      </button>
      <ul class="mobile-nav__list">
        <li><a href="about-product.html">О продукте</a></li>
        <li><a href="katalog.html">Каталог </a></li>
        <li><a href="recept.html">Рецепты</a></li>
        <li><a href="kontact.html">Контакты</a></li>
      </ul>
    </div>
    <div class="inner" data-barba="container" data-barba-namespace="main">

      <main>
        <section class="bloc1">
          <!-- Slider main container -->
          <div class="swiper1">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <div class="bloc1__slide" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/bg1.png');">
                  <div class="container">
                    <div class="bloc1__bloctext">
                      <div class="bloc1__title" data-swiper-parallax-x="-300">
                        <h1>ореховое молоко </h1>
                      </div>
                      <div class="bloc1__text" data-swiper-parallax-x="-200">
                        <p>
                          Потрясающее ореховое молоко
                          The gentle nut — лучший усилитель
                          вкуса жизни.
                        </p>
                      </div>

                      <div class="bloc1__link bloc-lemon" data-swiper-parallax-y="-300"
                        style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/katalog-bg.png');">
                        <a href="katalog.html" class="bloc1__href-btn">
                          В каталог
                        </a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="bloc1__slide" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/bg1.png');">
                  <div class="container">
                    <div class="bloc1__bloctext">
                      <div class="bloc1__title" data-swiper-parallax-x="-200">
                        <h1>ореховое молоко </h1>
                      </div>
                      <div class="bloc1__text" data-swiper-parallax-x="-80">
                        <p> Потрясающее ореховое молоко
                          The gentle nut — лучший усилитель
                          вкуса жизни.</p>
                      </div>

                      <div class="bloc1__link" data-swiper-parallax-y="-300"
                        style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/katalog-bg.png');">
                        <a href="katalog.html" class="bloc1__href-btn">
                          В каталог
                        </a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="bloc1__slide" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/bg1.png');">
                  <div class="container">
                    <div class="bloc1__bloctext">
                      <div class="bloc1__title" data-swiper-parallax-x="-200">
                        <h1>ореховое молоко </h1>
                      </div>
                      <div class="bloc1__text" data-swiper-parallax-x="-80">
                        <p>
                          Потрясающее ореховое молоко
                          The gentle nut — лучший усилитель
                          вкуса жизни.
                        </p>
                      </div>

                      <div class="bloc1__link" data-swiper-parallax-y="-300"
                        style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/katalog-bg.png');">
                        <a href="katalog.html" class="bloc1__href-btn">
                          В каталог
                        </a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="myswiper-pagination"></div>
        </section>

        <section class="bloc2" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/bg2.png');">
          <div class="container">
            <div class="bloc2__all">
              <div class="bloc2__left">
                <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/left-info.png" alt="">
              </div>
              <div class="bloc2__right">
                <div class="container">
                  <div class="bloc2__title">
                    <h2>
                      новый вид
                      молока
                    </h2>
                  </div>
                  <div class="bloc2__txt">
                    <p>
                      Для тех, кто не боится пробовать что-то новое!
                      Нежный ореховый вкус для поддержания
                      здоровья пищеварительной системы.
                      С клетчаткой, пребиотиками, витаминами
                      и растительными компонентами.
                      Налетай, торопись, покупай the gentle nut!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="bloc3" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/bg3.png');">

          <div class="container">
            <div class="bloc3__title">
              <h2>Бестселлеры!</h2>
            </div>
            <div class="bloc3__products">
              <div class="bloc3__item">
                <div class="bloc3__img">
                  <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/mindal.png" alt="">
                </div>
                <div class="bloc3__name">
                  <h5>
                    кешью бариста
                  </h5>
                </div>
                <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/katalog-bg.png');">
                  <a class="bloc3__link" href="#">
                    Узнать подробнее
                  </a>
                </div>
              </div>
              <div class="bloc3__item">
                <div class="bloc3__img">
                  <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/kokos.png" alt="">
                </div>
                <div class="bloc3__name">
                  <h5>
                    кокос бариста
                  </h5>
                </div>
                <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/katalog-bg.png');">
                  <a class="bloc3__link" href="#">
                    Узнать подробнее
                  </a>
                </div>
              </div>
              <div class="bloc3__item">
                <div class="bloc3__img">
                  <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/funduk.png" alt="">
                </div>
                <div class="bloc3__name">
                  <h5>
                    Кешью фундук
                  </h5>
                </div>
                <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/katalog-bg.png');">
                  <a class="bloc3__link" href="#">
                    Узнать подробнее
                  </a>
                </div>
              </div>
              <div class="bloc3__item">
                <div class="bloc3__img">
                  <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/banan.png" alt="">
                </div>
                <div class="bloc3__name">
                  <h5>Кешью банан</h5>
                </div>
                <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/katalog-bg.png');">
                  <a class="bloc3__link" href="#">
                    Узнать подробнее
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper2">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <div class="bloc3__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/mindal.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        кешью бариста
                      </h5>
                    </div>
                    <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="bloc3__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/kokos.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        кокос бариста
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="bloc3__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/funduk.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Кешью фундук
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="bloc3__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/banan.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      Кешью банан
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="#">
                        <h5>
                          Узнать подробнее
                        </h5>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="button-prev2">
              <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/left-arrow.png" alt="">
            </div>
            <div class="button-next2">
              <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/right-arrow.png" alt="">
            </div>

        </section>

        <section class="bloc4" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/bg4.png');">
          <div class="container">

            <div class="bloc4__all">
              <div class="bloc4__textleft">
                <div class="bloc4__title">
                  <h2>Смузи</h2>
                  <span>Кокос с клубникой</span>
                </div>
                <div class="bloc4__time">
                  <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/clock 1.png" alt="">
                  <div class="bloc4__txt">
                    10 минут
                  </div>
                </div>

                <ol class="bloc4__list">
                  <li>Все ингредиенты порезать кубиками и
                    добавить в блендер.</li>
                  <li>Смешать в блендере в течение 1–2 минут
                    до однородной массы.</li>
                  <li>Перелить в стакан.</li>
                </ol>

                <div class="bloc4__item-link link-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/katalog-bg.png');">
                  <a class="bloc4__link" href="recept.html">
                    Больше рецептов
                  </a>
                </div>
              </div>

              <div class="bloc4__rightimg">
                <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/kokospng.png" alt="">
              </div>
            </div>

          </div>
        </section>


        <section class="bloc5" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/bg5.png');">
          <div class="container-sw3">

            <!-- Slider main container -->
            <div class="swiper3">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">

                  <div class="bloc5__slide">
                    <div class="bloc5__img">
                      <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/konst.png" alt="">
                    </div>
                    <div class="bloc5__title title1">
                      <h3>
                        Константин
                        Константинович
                        Константинопольский
                      </h3>
                    </div>

                    <div class="bloc5__info info1">
                      <p>
                        Бариста в кофейне
                        «Шоколадница»
                      </p>
                    </div>

                    <div class="bloc5__txt txt1">
                      <p>
                        Горько осознавать, что все эти
                        годы я растратил впустую!
                        Теперь пью The gentle nut
                        КАЖДЫЙ ДЕНЬ!
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="bloc5__slide">
                    <div class="bloc5__img">
                      <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/ira.png" alt="">
                    </div>
                    <div class="bloc5__title title2">
                      <h3>
                        Ирина
                        Робустовна
                        Толькотурка
                      </h3>
                    </div>

                    <div class="bloc5__info info2">
                      <p>
                        Бариста в кофейне
                        «Surf coffee»
                      </p>
                    </div>

                    <div class="bloc5__txt txt2">
                      <p>
                        Кофе — моя страсть! Без
                        него не могу проснуться и
                        начать жить эту жизнь.
                        Теперь кофе как десерт!
                      </p>
                    </div>

                  </div>
                </div>
                <div class="swiper-slide">

                  <div class="bloc5__slide ">
                    <div class="bloc5__img">
                      <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/anya.png" alt="">
                    </div>
                    <div class="bloc5__title title3">
                      <h3>
                        Анечка
                        Магистратуровна
                        Дипломова
                      </h3>
                    </div>

                    <div class="bloc5__info info2">
                      <p>
                        Студентка,
                        кофеман со стажем
                      </p>
                    </div>

                    <div class="bloc5__txt txt3">
                      <p>
                        С The gentle nut даже самый
                        дешевый гранулированный
                        кофе становится вкусным!
                        Спасибо!
                      </p>
                    </div>

                  </div>
                </div>

                <div class="swiper-slide">

                  <div class="bloc5__slide">
                    <div class="bloc5__img">
                      <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/konst.png" alt="">
                    </div>
                    <div class="bloc5__title title1">
                      <h3>
                        Константин
                        Константинович
                        Константинопольский
                      </h3>
                    </div>

                    <div class="bloc5__info info1">
                      <p>
                        Бариста в кофейне
                        «Шоколадница»
                      </p>
                    </div>

                    <div class="bloc5__txt txt1">
                      <p>
                        Горько осознавать, что все эти
                        годы я растратил впустую!
                        Теперь пью The gentle nut
                        КАЖДЫЙ ДЕНЬ!
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="bloc5__slide">
                    <div class="bloc5__img">
                      <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/ira.png" alt="">
                    </div>
                    <div class="bloc5__title title2">
                      <h3>
                        Ирина
                        Робустовна
                        Толькотурка
                      </h3>
                    </div>

                    <div class="bloc5__info info2">
                      <p>
                        Бариста в кофейне
                        «Surf coffee»
                      </p>
                    </div>

                    <div class="bloc5__txt txt2">
                      <p>
                        Кофе — моя страсть! Без
                        него не могу проснуться и
                        начать жить эту жизнь.
                        Теперь кофе как десерт!
                      </p>
                    </div>

                  </div>
                </div>
                <div class="swiper-slide">

                  <div class="bloc5__slide ">
                    <div class="bloc5__img">
                      <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/anya.png" alt="">
                    </div>
                    <div class="bloc5__title title3">
                      <h3>
                        Анечка
                        Магистратуровна
                        Дипломова
                      </h3>
                    </div>

                    <div class="bloc5__info info2">
                      <p>
                        Студентка,
                        кофеман со стажем
                      </p>
                    </div>

                    <div class="bloc5__txt txt3">
                      <p>
                        С The gentle nut даже самый
                        дешевый гранулированный
                        кофе становится вкусным!
                        Спасибо!
                      </p>
                    </div>

                  </div>
                </div>

              </div>
            </div>
            <div class="button-prev1">
              <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/left-arrow.png" alt="">
            </div>
            <div class="button-next1">
              <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/right-arrow.png" alt="">
            </div>
          </div>



        </section>
        <section class="bloc6" style="background-image:url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/bg6.png');">
          <div class="container">

            <div class="bloc6__title">
              <h2> Где купить the gentle nut?</h2>
            </div>

            <div class="bloc6__txt">
              <p>
                На полках с молочными продуктами в любимых магазинах
              </p>
            </div>

            <div class="bloc6__markets">
              <div class="bloc6__all-item">
                <a class="bloc6__item1" href="#">
                  <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/ozon.png" alt="" href="#">
                </a>
                <a href="#" class="bloc6__link">OZON</a>
              </div>

              <div class="bloc6__all-item">
                <a class="bloc6__item2" href="#">
                  <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/perekrestok.png" alt="" href="#">
                </a>
                <a href="#" class="bloc6__link">Перекресток</a>
              </div>

              <div class="bloc6__all-item">
                <a class="bloc6__item3" href="#">
                  <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/wb.png" alt="" href="#">
                </a>
                <a href="#" class="bloc6__link">Wildberries</a>
              </div>

              <div class="bloc6__all-item">
                <a class="bloc6__item4" href="#">
                  <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/5ochka.png" alt="" href="#">
                </a>
                <a href="#" class="bloc6__link">Пятерочка </a>
              </div>

              <div class="bloc6__all-item">
                <a class="bloc6__item5" href="#">
                  <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/ozon (2).png" alt="" href="#">
                </a>
                <a href="#" class="bloc6__link">OZON</a>
              </div>

              <div class="bloc6__all-item">
                <a class="bloc6__item6" href="#">
                  <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/perekrestok.png" alt="" href="#">
                </a>
                <a href="#" class="bloc6__link">Перекресток</a>
              </div>

              <div class="bloc6__all-item">
                <a class="bloc6__item7" href="#">
                  <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/wb.png" alt="" href="#">
                </a>
                <a href="#" class="bloc6__link">Wildberries</a>
              </div>

            </div>


          </div>

          <div class="swiper-mobile2">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <div class="bloc6__all-item">
                  <a class="bloc6__item" href="#">
                    <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/ozon.png" alt="" href="#">
                  </a>
                  <a href="#" class="bloc6__link">OZON</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="bloc6__all-item">
                  <a class="bloc6__item" href="#">
                    <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/perekrestok.png" alt="" href="#">
                  </a>
                  <a href="#" class="bloc6__link">Перекресток</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="bloc6__all-item">
                  <a class="bloc6__item" href="#">
                    <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/wb.png" alt="" href="#">
                  </a>
                  <a href="#" class="bloc6__link">Wildberries</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="bloc6__all-item">
                  <a class="bloc6__item" href="#">
                    <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/5ochka.png" alt="" href="#">
                  </a>
                  <a href="#" class="bloc6__link">Пятерочка </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="bloc6__all-item">
                  <a class="bloc6__item" href="#">
                    <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/ozon (2).png" alt="" href="#">
                  </a>
                  <a href="#" class="bloc6__link">OZON</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="bloc6__all-item">
                  <a class="bloc6__item" href="#">
                    <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/perekrestok.png" alt="" href="#">
                  </a>
                  <a href="#" class="bloc6__link">Перекресток</a>
                </div>
              </div>
            </div>
          </div>

        </section>

      </main>
      <footer class="footer" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/footerbg.png');">
        <div class="container">
          <div class="footer__inner">
            <a class="footer__logo" href="index/html">
              <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/logo.png" alt="">
            </a>

            <div class="footer__right">
              <div class="footer__rgc">
                <img src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/lcg.png" alt="">
              </div>
              <div class="footer__txt">
                <p>
                  Эксклюзивный дистрибьютер: ООО «Фаворит»
                </p>
              </div>
              <div class="footer__info">
                <a href="tel:">
                  8 800 733 75 75
                </a>
                <a href="mailto:">
                  gtn@favoritfood.ru
                </a>
                <a href="favoritfood.ru">
                  favoritfood.ru
                </a>
              </div>

            </div>

          </div>

        </div>
      </footer>
    </div>
  </div>

  <script src="<?php echo get_template_directory_uri()  ?>/assets/the gente nut/js/index.bundle.js"></script>
  <?php wp_footer(); ?>
</body>

</html>