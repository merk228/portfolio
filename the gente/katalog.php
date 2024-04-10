<?php 
// Template Name: katalog
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset') ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Каталог</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/css/main.css" />
</head>

<body data-barba="wrapper">
  <div class="wrapper">
    <header class="header headerv2">
  <div class="container">
    <div class="header__row">
      <a class="logo" href="http://portfolio/the-gente/">
        <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/logo.png" alt="">
      </a>

      <nav class="header__nav">
        <ul class="header__list">
          <li>
            <a class="header__link" href="http://portfolio/gente-product/">О продукте
            </a>
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
          <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/mobbtn.jpg" alt="">
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
    <li><a href="http://portfolio/gente-product/">О продукте</a></li>
    <li><a href="http://portfolio/katalog/">Каталог </a></li>
    <li><a href="http://portfolio/recept/">Рецепты</a></li>
    <li><a href="http://portfolio/kontact/">Контакты</a></li>
  </ul>
</div>
    <div class="inner" data-barba="container" data-barba-namespace="katalog">


      <main class="content_box">
        <section class="katalog1" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/kt1.png');">

          <div class="container">
            <div class="katalog1__wrapper">
              <div class="katalog1__title">
                <h1>
                  продукты the gentle nut
                </h1>
              </div>
              <ul class="katalog1__list">
                <li class="katalog1__list-item bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/Vector 51.png');">
                  <button type="button" class="katalog1__list-link">
                    Все продукты
                </li>
                <li class="katalog1__list-item bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                  <button type="button" class="katalog1__list-link">
                    Classic
                </li>
                <li class="katalog1__list-item bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                  <button type="button" class="katalog1__list-link">
                    Barista
                </li>
                <li class="katalog1__list-item bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                  <button type="button" class="katalog1__list-link">
                    Sport
                </li>
              </ul>
            </div>
          </div>

        </section>

        <section class="bloc3 active">

          <div class="container katalog1v1">
            <div class="big-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/icon/biglemon.svg');">
              <div class="bloc3__title">
                <h2>Бестселлеры!</h2>
              </div>
            </div>

            <div class="bloc3__products">
              <div class="bloc3__item">
                <div class="bloc3__img">
                  <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/mindal.png" alt="">
                </div>
                <div class="bloc3__name">
                  <h5>
                    кешью бариста
                  </h5>
                </div>
                <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                  <a class="bloc3__link" href="#">
                    Узнать подробнее
                  </a>
                </div>
              </div>
              <div class="bloc3__item">
                <div class="bloc3__img">
                  <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/kokos.png" alt="">
                </div>
                <div class="bloc3__name">
                  <h5>
                    кокос бариста
                  </h5>
                </div>
                <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                  <a class="bloc3__link" href="#">
                    Узнать подробнее
                  </a>
                </div>
              </div>
              <div class="bloc3__item">
                <div class="bloc3__img">
                  <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/funduk.png" alt="">
                </div>
                <div class="bloc3__name">
                  <h5>
                    Кешью фундук
                  </h5>
                </div>
                <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                  <a class="bloc3__link" href="#">
                    Узнать подробнее
                  </a>
                </div>
              </div>
              <div class="bloc3__item">
                <div class="bloc3__img">
                  <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/banan.png" alt="">
                </div>
                <div class="bloc3__name">
                  Кешью банан
                </div>
                <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                  <a class="bloc3__link" href="#">
                    <h5>
                      Узнать подробнее
                    </h5>
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
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/mindal.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        кешью бариста
                      </h5>
                    </div>
                    <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                      <a class="bloc3__link" href="#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="bloc3__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/kokos.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        кокос бариста
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                      <a class="bloc3__link" href="#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="bloc3__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/funduk.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Кешью фундук
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                      <a class="bloc3__link" href="#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="bloc3__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/banan.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      Кешью банан
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
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
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/left-arrow.png" alt="">
            </div>
            <div class="button-next2">
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/right-arrow.png" alt="">
            </div>

        </section>

        <section class="bloc3 active" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/kt3.png');">
          <div class="container katalog">
            <div class="big-gente" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/green-big-decor.svg');">
              <div class="bloc3__title ">
                <h2>the gentle nut classic</h2>
              </div>
            </div>
            <div class="katalog3__txt">
              <p>
                Классическая линейка орехового молока The gentle nut
                для ценителей вечного и прекрасного
              </p>
            </div>
            <div class="bloc3__products katalog-products">
              <div class="bloc3__item">
                <div class="hit" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/icon/xit.svg');">
                  <span>хит</span>
                </div>
                <div class="bloc3__img">
                  <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/mindal.png" alt="">
                </div>
                <div class="bloc3__name">
                  <h5>
                    Кешью миндаль
                  </h5>
                </div>
                <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                  <a class="bloc3__link" href="#">
                    Узнать подробнее
                  </a>
                </div>
              </div>
              <div class="bloc3__item">
                <div class="hit" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/icon/xit.svg');">
                  <span>хит</span>
                </div>
                <div class="bloc3__img">

                  <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/funduk.png" alt="">
                </div>
                <div class="bloc3__name">
                  <h5>
                    Кешью фундук
                  </h5>
                </div>
                <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                  <a class="bloc3__link" href="#">
                    Узнать подробнее
                  </a>
                </div>
              </div>
              <div class="bloc3__item">
                <div class="bloc3__img">
                  <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/chocolate.png" alt="">
                </div>
                <div class="bloc3__name">
                  <h5>
                    Кешью шоколад
                  </h5>
                </div>
                <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                  <a class="bloc3__link" href="#">
                    Узнать подробнее
                  </a>
                </div>
              </div>
              <div class="bloc3__item">
                <div class="bloc3__img">
                  <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/kokos.png" alt="">
                </div>
                <div class="bloc3__name">
                  <h5>
                    Кешью кокос
                  </h5>
                </div>
                <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                  <a class="bloc3__link" href="#">
                    Узнать подробнее
                  </a>
                </div>
              </div>

              <div class="bloc3__item">
                <div class="bloc3__img">
                  <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/mango.png" alt="">
                </div>
                <div class="bloc3__name">
                  <h5>
                    Кешью манго
                  </h5>
                </div>
                <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                  <a class="bloc3__link" href="#">
                    Узнать подробнее
                  </a>
                </div>
              </div>

              <div class="bloc3__item">
                <div class="hit" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/icon/xit.svg');">
                  <span>хит</span>
                </div>
                <div class="bloc3__img">
                  <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/banan.png" alt="">
                </div>
                <div class="bloc3__name">
                  <h5>
                    Кешью банан
                  </h5>
                </div>
                <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                  <a class="bloc3__link" href="#">
                    Узнать подробнее
                  </a>
                </div>
              </div>

            </div>

            <div class="swiper2-v1">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <div class="bloc3__item">
                    <div class="hit" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/icon/xit.svg');">
                      <span>хит</span>
                    </div>
                    <div class="bloc3__img">
                      <img src="../img/katalog/big-img/mindal.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Кешью миндаль
                      </h5>
                    </div>
                    <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                      <a class="bloc3__link" href="#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="bloc3__item">
                    <div class="hit" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/icon/xit.svg');">
                      <span>хит</span>
                    </div>
                    <div class="bloc3__img">

                      <img src="../img/katalog/big-img/funduk.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Кешью фундук
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                      <a class="bloc3__link" href="#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="bloc3__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/chocolate.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Кешью шоколад
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                      <a class="bloc3__link" href="#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="bloc3__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/kokos.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Кешью кокос
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                      <a class="bloc3__link" href="#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="bloc3__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/mango.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Кешью манго
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                      <a class="bloc3__link" href="#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="bloc3__item">
                    <div class="hit" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/icon/xit.svg');">
                      <span>хит</span>
                    </div>
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/banan.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Кешью банан
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                      <a class="bloc3__link" href="#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="button-prev2-v1">
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/left-arrow.png" alt="">
            </div>
            <div class="button-next2-v1">
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/right-arrow.png" alt="">
            </div>
          </div>
        </section>

        <section class="bloc3 active" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/kt5.png');">

          <div class="container katalog-v2">
            <div class="big-gente" style='background-image: url(img/katalog/big-img/blue-big-decor.png);'>
              <div class="bloc3__title">
                <h2>the gentle nut barista</h2>
              </div>

            </div>
            <div class="katalog4__txt">
              <p>
                Линейка The gentle nut BARISTA предназначена специально для тех кто понимает чем отличается джиггер от
                демитаса. Не шейкером единым!
              </p>
            </div>

            <div class="bloc3__products katalog-products"">
        <div class=" bloc3__item">
              <div class="bloc3__img">
                <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/barista-minal.png" alt="">
              </div>
              <div class="bloc3__name">
                <h5>
                  миндаль бариста
                </h5>
              </div>
              <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                <a class="bloc3__link" href="#">
                  Узнать подробнее
                </a>
              </div>
            </div>
            <div class="bloc3__item">
              <div class="hit" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/icon/xit.svg');">
                <span>хит</span>
              </div>
              <div class="bloc3__img">
                <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/kesh-bar.png" alt="">
              </div>
              <div class="bloc3__name">
                <h5>
                  кешью бариста
                </h5>
              </div>
              <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                <a class="bloc3__link" href="#">
                  Узнать подробнее
                </a>
              </div>
            </div>
            <div class="bloc3__item">
              <div class="bloc3__img">
                <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/fun-bar.png" alt="">
              </div>
              <div class="bloc3__name">
                <h5>
                  фундук бариста
                </h5>
              </div>
              <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                <a class="bloc3__link" href="#">
                  Узнать подробнее
                </a>
              </div>
            </div>
            <div class="bloc3__item">
              <div class="bloc3__img">
                <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/banan-bar.png" alt="">
              </div>
              <div class="bloc3__name">
                <h5>
                  банан бариста
                </h5>
              </div>
              <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                <a class="bloc3__link" href="#">
                  <h5>
                    Узнать подробнее
                  </h5>
                </a>
              </div>
            </div>
            <div class="bloc3__item">
              <div class="hit" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/icon/xit.svg');">
                <span>хит</span>
              </div>
              <div class="bloc3__img">
                <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/kokos-bar.png" alt="">
              </div>
              <div class="bloc3__name">
                <h5>
                  кокос бариста
                </h5>
              </div>
              <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                <a class="bloc3__link" href="#">
                  Узнать подробнее
                </a>
              </div>
            </div>
          </div>

          <div class="swiper2-v2">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <div class=" bloc3__item">
                  <div class="bloc3__img">
                    <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/barista-minal.png" alt="">
                  </div>
                  <div class="bloc3__name">
                    <h5>
                      миндаль бариста
                    </h5>
                  </div>
                  <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                    <a class="bloc3__link" href="#">
                      Узнать подробнее
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="bloc3__item">
                  <div class="hit" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/icon/xit.svg');">
                    <span>хит</span>
                  </div>
                  <div class="bloc3__img">
                    <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/kesh-bar.png" alt="">
                  </div>
                  <div class="bloc3__name">
                    <h5>
                      кешью бариста
                    </h5>
                  </div>
                  <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                    <a class="bloc3__link" href="#">
                      Узнать подробнее
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="bloc3__item">
                  <div class="bloc3__img">
                    <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/fun-bar.png" alt="">
                  </div>
                  <div class="bloc3__name">
                    <h5>
                      фундук бариста
                    </h5>
                  </div>
                  <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                    <a class="bloc3__link" href="#">
                      Узнать подробнее
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="bloc3__item">
                  <div class="bloc3__img">
                    <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/banan-bar.png" alt="">
                  </div>
                  <div class="bloc3__name">
                    <h5>
                      банан бариста
                    </h5>
                  </div>
                  <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                    <a class="bloc3__link" href="#">
                      <h5>
                        Узнать подробнее
                      </h5>
                    </a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="bloc3__item">
                  <div class="hit" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/icon/xit.svg');">
                    <span>хит</span>
                  </div>
                  <div class="bloc3__img">
                    <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/katalog/big-img/kokos-bar.png" alt="">
                  </div>
                  <div class="bloc3__name">
                    <h5>
                      кокос бариста
                    </h5>
                  </div>
                  <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/the gente nut/img/icon/Vector 51.png');">
                    <a class="bloc3__link" href="#">
                      Узнать подробнее
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="button-prev2-v2">
            <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/left-arrow.png" alt="">
          </div>
          <div class="button-next2-v2">
            <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/right-arrow.png" alt="">
          </div>

        </section>


        <section class="bloc6" style="background-image:url('img/bg6.png');">
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
          <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/ozon.png" alt="" href="#">
        </a>
        <a href="#" class="bloc6__link">OZON</a>
      </div>

      <div class="bloc6__all-item">
        <a class="bloc6__item2" href="#">
          <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/perekrestok.png" alt="" href="#">
        </a>
        <a href="#" class="bloc6__link">Перекресток</a>
      </div>

      <div class="bloc6__all-item">
        <a class="bloc6__item3" href="#">
          <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/wb.png" alt="" href="#">
        </a>
        <a href="#" class="bloc6__link">Wildberries</a>
      </div>

      <div class="bloc6__all-item">
        <a class="bloc6__item4" href="#">
          <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/5ochka.png" alt="" href="#">
        </a>
        <a href="#" class="bloc6__link">Пятерочка </a>
      </div>

      <div class="bloc6__all-item">
        <a class="bloc6__item5" href="#">
          <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/ozon (2).png" alt="" href="#">
        </a>
        <a href="#" class="bloc6__link">OZON</a>
      </div>

      <div class="bloc6__all-item">
        <a class="bloc6__item6" href="#">
          <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/perekrestok.png" alt="" href="#">
        </a>
        <a href="#" class="bloc6__link">Перекресток</a>
      </div>

      <div class="bloc6__all-item">
        <a class="bloc6__item7" href="#">
          <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/wb.png" alt="" href="#">
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
            <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/ozon.png" alt="" href="#">
          </a>
          <a href="#" class="bloc6__link">OZON</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="bloc6__all-item">
          <a class="bloc6__item" href="#">
            <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/perekrestok.png" alt="" href="#">
          </a>
          <a href="#" class="bloc6__link">Перекресток</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="bloc6__all-item">
          <a class="bloc6__item" href="#">
            <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/wb.png" alt="" href="#">
          </a>
          <a href="#" class="bloc6__link">Wildberries</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="bloc6__all-item">
          <a class="bloc6__item" href="#">
            <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/5ochka.png" alt="" href="#">
          </a>
          <a href="#" class="bloc6__link">Пятерочка </a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="bloc6__all-item">
          <a class="bloc6__item" href="#">
            <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/ozon (2).png" alt="" href="#">
          </a>
          <a href="#" class="bloc6__link">OZON</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="bloc6__all-item">
          <a class="bloc6__item" href="#">
            <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/perekrestok.png" alt="" href="#">
          </a>
          <a href="#" class="bloc6__link">Перекресток</a>
        </div>
      </div>
    </div>
  </div>

</section>

      </main>
      <footer class="footer" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/footerbg.png');">
  <div class="container">
    <div class="footer__inner">
      <a class="footer__logo" href="index/html">
        <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/logo.png" alt="">
      </a>

      <div class="footer__right">
        <div class="footer__rgc">
          <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/lcg.png" alt="">
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

  <script src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/js/index.bundle.js"></script>
</body>

</html>