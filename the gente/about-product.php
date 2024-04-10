<?php 
// Template Name: product
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset') ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>О продукте</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/css/main.css" />
  <?php wp_head(); ?>
</head>

<body data-barba="wrapper">
  <div class="wrapper">
    <header class="header">
  <div class="container">
    <div class="header__row">
      <a class="logo" href="http://portfolio/the-gente/">
        <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/logo.png" alt="">
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
    <div class="inner" data-barba="container" data-barba-namespace="about">

      <main>

        <section class="about1">
          <div class="about1__container">
            <div class="about1__wrapper">
              <div class="about1__left">
                <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/about-product/big-img/bulk.png" alt="">
              </div>
              <div class="about1__right">
                <div class="about1__title">
                  <h2>
                    ежедневная
                    польза
                  </h2>
                </div>
                <div class="about1__txt">
                  <p>
                    THE GENTLE NUT — это молоко на основе орехов кешью.
                    Молоко из кешью является отличной альтернативой обычному, обладает легкой кремовой
                    текстурой и тонким ореховым вкусом.
                    В нем витаминов больше, чем где бы то ни было!
                  </p>
                </div>

                <div class="about1__item-link  bloc-lemon" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/katalog-bg.png');">
                  <a class="about1__link" href="katalog.html">
                    В каталог
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="about2" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/bg2.png')">
          <div class="container">
            <div class="about2__wrapper">
              <div class="about2__left">
                <div class="about2__title">
                  <h2>
                    Для чего нужен
                    the gentle nut?
                  </h2>
                </div>
                <div class="about2__txt">
                  <p>
                    Оно идеально подходит для различных смузи
                    и может быть прекрасным дополнением к
                    утренней каше, мюсли или ежедневной
                    чашечке кофе. Независимо от того, веган вы
                    или нет, попробуйте разнообразить свой
                    рацион молоком из кешью.
                  </p>
                </div>
              </div>
              <div class="about2__right">
                <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/about-product/big-img/polyna.png " alt="">
              </div>
            </div>
          </div>




        </section>


        <section class="about3" style="background-image:url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/about-product/about-productbg3.png')">
          <div class="container">
            <div class="about3__wrapper">
              <div class="about3__left">
                <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/about-product/big-img/ryguxa.png" alt="">
              </div>
              <div class="about3__right">
                <div class="about3__title">
                  <h2>
                    Для кого the gentle nut?
                  </h2>
                </div>
                <div class="about3__txt">
                  <p>
                    THE GENTLE NUT — это 100% растительный
                    продукт для веганов и вегетарианцев.
                    Ореховое молоко также подойдет для людей с
                    лактазной недостаточностью и аллергией на
                    белок коровьего молока.
                  </p>
                  <p>
                    Интересный факт: пакистанские борцы кушти
                    называют ореховое молоко на основе кешью,
                    миндаля и фундука своим секретом силы и
                    выносливости. Пакистанские борцы ерунду не
                    посоветуют! Пейте THE GENTLE NUT и станете
                    сильными, смелыми, ловкими и умелыми!
                  </p>

                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="about4" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/about-product/bg4.png');">

          <div class="container">
            <div class="about4__all">
              <div class="about4__title">
                Технология производства
              </div>
              <div class="about4__img">
                <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/about-product/big-img/sxema.jpg" alt="">
              </div>
              <div class="about4__txt">
                <ul class="about4__list">
                  <li>
                    Каждый год летом веселые негритянки с песнями собирают
                    урожай орехов.
                  </li>
                  <li>
                    Мы отбираем только самые крупные орехи кешью для
                    нашего замечательного напитка!
                  </li>

                  <li>
                    Все орешки тщательно моют маленькие волшебные карлики
                    своими маленькими ручками. После чего перемалывают и
                    добавляют натуральные фруктовые добавки.

                  </li>
                </ul>
                <ul class="about4__list">
                  <li>
                    Затем все ингредиенты смешивают и взбивают в огромном
                    блендере.
                  </li>
                  <li>
                    Этап пастеризации и асептического розлива орехового
                    молока по коробкам тетрапак никак пропустить нелья.
                  </li>
                  <li>
                    Когда все разлито по коробкам товар сррррочно везут в
                    магазины и расставляют на полки.Только попробуйте теперь
                    не восхититься нашим ореховым молоком! Оно супер
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </section>
        <section class="bloc5" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/bg5.png');">
  <div class="container-sw3">

    <!-- Slider main container -->
    <div class="swiper3">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">

          <div class="bloc5__slide">
            <div class="bloc5__img">
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/konst.png" alt="">
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
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/ira.png" alt="">
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
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/anya.png" alt="">
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
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/konst.png" alt="">
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
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/ira.png" alt="">
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
              <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/anya.png" alt="">
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
      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/left-arrow.png" alt="">
    </div>
    <div class="button-next1">
      <img src="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/icon/right-arrow.png" alt="">
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
  <?php wp_footer(); ?>
</body>

</html>