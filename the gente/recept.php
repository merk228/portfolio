<?php 
// Template Name: recept
?>


<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset') ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Рецепты</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/css/main.css" />
  <?php wp_head(); ?>
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
            <a class="header__link" href="http://portfolio/recept">Рецепты</a>
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
    <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/close.svg" alt="close">
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
            <div class="katalog1__wrapper recept__wrapper">
              <div class="katalog1__title">
                <h1>
                  рецепты с the gentle nut
                </h1>
              </div>
              <ul class="katalog1__list">
                <li class="katalog1__list-item bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                  <button type="button" class="katalog1__list-link">
                    Все рецепты
                </li>
                <li class="katalog1__list-item bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                  <button type="button" class="katalog1__list-link">
                    Смузи
                </li>
                <li class="katalog1__list-item bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                  <button type="button" class="katalog1__list-link">
                    Десерты
                </li>
                <li class="katalog1__list-item bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                  <button type="button" class="katalog1__list-link">
                    Завтраки
                </li>
                <li class="katalog1__list-item bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                  <button type="button" class="katalog1__list-link">
                    Блюда для поста
                </li>
                <li class="katalog1__list-item bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                  <button type="button" class="katalog1__list-link">
                    Алкогольная карта
                </li>
              </ul>
            </div>
          </div>

        </section>

        <div class="bloc3"></div>

        <section class="bloc3 active">
          <div class="container katalog2v">
            <picture class="recept-lemon">
              <img class="lem1" src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/recept-lemon.svg" alt="">
              <img class="lemmob" src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/lemmob.svg" alt="">
              <div class="bloc3__title">
                <h2>Смузи!</h2>
              </div>
            </picture>
            <div class="recept__txt">
              <p>
                Рецепты смузи на основе орехового молока The gentle nut
                порадуют даже людей с отрофированными
                вкусовыми сосочками
              </p>
            </div>

            <div class="swiper-recept">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/byxich.png" alt="">
                    </div>
                    <div class="bloc3__name recept__name1">
                      <h5>
                        Смузи Фундук с апельсиноми яблоком
                      </h5>
                    </div>
                    <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/bliny.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи цукини
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/tykva.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи Шпинати миндальное молоко Зелёный
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/byxich.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи Фундук с апельсиноми яблоком
                      </h5>
                    </div>
                    <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/bliny.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи цукини
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/tykva.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи Шпинати миндальное молоко Зелёный
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="button-recn1">
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/right-arrow.png" alt="">
            </div>
            <div class="button-recb1">
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/left-arrow.png" alt="">
            </div>
          </div>
        </section>

        <section class="bloc3 active" style="background-image:url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/recept-bg1.png');">
          <div class="container katalog1v1">
            <picture class="recept-lemon">
              <img class="lem1" src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/recept-green.svg" alt="">
              <img class="lemmob" src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/greenvob.svg" alt="">
              <div class="bloc3__title">
                <h2>десерты</h2>
              </div>
            </picture>

            <div class="recept__txt2">
              <p>
                Десерты на основе орехового молока The gentle nut такие вкусные,
                что ваши дети ради них съедят брокколи и даже печеночные оладьи! Viva шантаж!
              </p>
            </div>

            <div class="swiper-recept1">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/byxich.png" alt="">
                    </div>
                    <div class="bloc3__name recept__name2">
                      <h5>
                        Смузи Фундук с апельсиноми яблоком
                      </h5>
                    </div>
                    <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/bliny.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи цукини
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/tykva.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи Шпинати миндальное молоко Зелёный
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/byxich.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи Фундук с апельсиноми яблоком
                      </h5>
                    </div>
                    <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/bliny.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи цукини
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/tykva.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи Шпинати миндальное молоко Зелёный
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="button-recn2">
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/right-arrow.png" alt="">
            </div>
            <div class="button-recb2">
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/left-arrow.png" alt="">
            </div>
          </div>
        </section>
        <section class="bloc3 active" style="background-image:url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/recept-bg2.png');">
          <div class="container katalog1v1">
            <picture class="recept-lemon">
              <img class="lem1" src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/recept-blue.svg" alt="">
              <img class="lemmob" src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/bluemob.svg" alt="">
              <div class="bloc3__title">
                <h2>Завтраки</h2>
              </div>
            </picture>

            <div class="recept__txt3">
              <p>
                Проснись и пой, проснись и пой. Попробуй в жизни хоть ра
                —не выпускать улыбку из открытых глаз. The gentle nut мне в этом поможет!
              </p>
            </div>

            <div class="swiper-recept2">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/byxich.png" alt="">
                    </div>
                    <div class="bloc3__name recept__name3">
                      <h5>
                        Смузи Фундук с апельсиноми яблоком
                      </h5>
                    </div>
                    <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/bliny.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи цукини
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/tykva.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи Шпинати миндальное молоко Зелёный
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/byxich.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи Фундук с апельсиноми яблоком
                      </h5>
                    </div>
                    <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/bliny.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи цукини
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/tykva.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи Шпинати миндальное молоко Зелёный
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="button-recn3">
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/right-arrow.png" alt="">
            </div>
            <div class="button-recb3">
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/left-arrow.png" alt="">
            </div>
          </div>
        </section>
        <section class="bloc3 active" style="background-image:url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/recept-bg3.png');">
          <div class="container katalog1v1">
            <div class="recept-bgdecor" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/big-post.svg');">
              <div class="bloc3__title">
                <h2>блюда для поста</h2>
              </div>
            </div>

            <div class="recept__txt4">
              <p>
                «Если бы в посте все дело было в еде, то святыми были бы коровы» — Иоанн Дамаскин.
                Кушайте вкусно и одухотворяйтесь!
              </p>
            </div>

            <div class="swiper-recept3">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/byxich.png" alt="">
                    </div>
                    <div class="bloc3__name recept__name4">
                      <h5>
                        Смузи Фундук с апельсиноми яблоком
                      </h5>
                    </div>
                    <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/bliny.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи цукини
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/tykva.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи Шпинати миндальное молоко Зелёный
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/byxich.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи Фундук с апельсиноми яблоком
                      </h5>
                    </div>
                    <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/bliny.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи цукини
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/tykva.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи Шпинати миндальное молоко Зелёный
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="button-recn4">
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/right-arrow.png" alt="">
            </div>
            <div class="button-recb4">
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/left-arrow.png" alt="">
            </div>
          </div>
        </section>
        <section class="bloc3 active" style="background-image:url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/recept-bg4.png');">
          <div class="container katalog3v">
            <div class="recept-bgdecor" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/big-alko.svg');">
              <div class="bloc3__title">
                <h2>Алкогольная карта</h2>
              </div>
            </div>

            <div class="recept__txt5">
              <p>
                Этот раздел должен был идти первым! Тут есть коктейль «Горячий фаэтон»! Наверное от него
                взмываешь в небо, мечешься огненным конём, а в конце ползком добираешься домой.
              </p>
            </div>

            <div class="swiper-recept4">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/byxich.png" alt="">
                    </div>
                    <div class="bloc3__name recept__name5">
                      <h5>
                        Смузи Фундук с апельсиноми яблоком
                      </h5>
                    </div>
                    <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/bliny.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи цукини
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/tykva.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи Шпинати миндальное молоко Зелёный
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/byxich.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи Фундук с апельсиноми яблоком
                      </h5>
                    </div>
                    <div class="bloc3__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/bliny.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи цукини
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide recept">
                  <div class="bloc3__item recept__item">
                    <div class="bloc3__img">
                      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/recept/big-img/tykva.png" alt="">
                    </div>
                    <div class="bloc3__name">
                      <h5>
                        Смузи Шпинати миндальное молоко Зелёный
                      </h5>
                    </div>
                    <div class="bloc3__item-link bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                      <a class="bloc3__link" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
                        Узнать подробнее
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="button-recn5">
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/right-arrow.png" alt="">
            </div>
            <div class="button-recb5">
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/left-arrow.png" alt="">
            </div>
          </div>
        </section>

        <section class="bloc6" style="background-image:url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/bg6.png');">
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
        <a class="bloc6__item1" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
          <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/ozon.png" alt="" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
        </a>
        <a href="#" class="bloc6__link">OZON</a>
      </div>

      <div class="bloc6__all-item">
        <a class="bloc6__item2" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
          <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/perekrestok.png" alt="" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
        </a>
        <a href="#" class="bloc6__link">Перекресток</a>
      </div>

      <div class="bloc6__all-item">
        <a class="bloc6__item3" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
          <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/wb.png" alt="" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
        </a>
        <a href="#" class="bloc6__link">Wildberries</a>
      </div>

      <div class="bloc6__all-item">
        <a class="bloc6__item4" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
          <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/5ochka.png" alt="" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
        </a>
        <a href="#" class="bloc6__link">Пятерочка </a>
      </div>

      <div class="bloc6__all-item">
        <a class="bloc6__item5" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
          <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/ozon (2).png" alt="" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
        </a>
        <a href="#" class="bloc6__link">OZON</a>
      </div>

      <div class="bloc6__all-item">
        <a class="bloc6__item6" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
          <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/perekrestok.png" alt="" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
        </a>
        <a href="#" class="bloc6__link">Перекресток</a>
      </div>

      <div class="bloc6__all-item">
        <a class="bloc6__item7" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
          <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/wb.png" alt="" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
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
          <a class="bloc6__item" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
            <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/ozon.png" alt="" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
          </a>
          <a href="#" class="bloc6__link">OZON</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="bloc6__all-item">
          <a class="bloc6__item" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
            <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/perekrestok.png" alt="" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
          </a>
          <a href="#" class="bloc6__link">Перекресток</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="bloc6__all-item">
          <a class="bloc6__item" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
            <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/wb.png" alt="" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
          </a>
          <a href="#" class="bloc6__link">Wildberries</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="bloc6__all-item">
          <a class="bloc6__item" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
            <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/5ochka.png" alt="" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
          </a>
          <a href="#" class="bloc6__link">Пятерочка </a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="bloc6__all-item">
          <a class="bloc6__item" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
            <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/ozon (2).png" alt="" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
          </a>
          <a href="#" class="bloc6__link">OZON</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="bloc6__all-item">
          <a class="bloc6__item" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
            <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/perekrestok.png" alt="" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/#">
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
      <a class="footer__logo" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/index/html">
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
  <?php wp_footer(); ?>
</body>

</html>