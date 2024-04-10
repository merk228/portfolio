

<?php 

// Template Name: Test

?>

<?php
// Подключение стилей к шаблону
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/test/css/main.css' );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/test/js/index-bundle.js', array(), '1.0.0', true );
});
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset') ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>тестовое</title>
  <?php wp_head(); ?>
</head>

<body>


  <header>
    <div class="container">

      <div class="header__wrapper">
        <div class="header__allv2">
          <img class="header__btn" src="<?php echo get_template_directory_uri()  ?>/assets/test/img/btn.svg" alt="">
          <img class="header__btn-close" src="<?php echo get_template_directory_uri()  ?>/assets/test/img/close.svg" alt="">
          <img src="<?php echo get_template_directory_uri()  ?>/assets/test/img/logo.svg" class="header__logo">
          <div class="header__bx2-info">
            <a href="tel:" class="header__tel">
              +7(863) 000 00 00
            </a>
            <p>Ростов-на-Дону</p>
          </div>
        </div>

        <div class="header__bx1">
          <img src="<?php echo get_template_directory_uri()  ?>/assets/test/img/logo.svg" class="header__logo">
          <div class="header__info">
            <img src="<?php echo get_template_directory_uri()  ?>/assets/test/img/Vector.svg" alt="" class="header__image">
            <div class="header__info-txt">
              <span class="header__txt">
                Ростов-на-Дону
              </span>
              <span class="header__adress">
                ул. Ленина, 2Б
              </span>
            </div>
          </div>
        </div>
        <div class="header__bx2">
          <div class="header__bx2-info">
            <img src="<?php echo get_template_directory_uri()  ?>/assets/test/img/tel1.svg" alt="">
            <a href="tel:" class="header__tel">
              +7(863) 000 00 00
            </a>
          </div>
          <button class="header__button ">
            Записаться на прием
          </button>
        </div>
      </div>
    </div>

    <nav class="nav-mob">
      <div class="container">
        <div class="nav-mob__wrapper">
          <ul class="nav-mob__list">
            <li class="nav-mob__list-item"><a href="#">
                О клинике
              </a></li>
            <li class="nav-mob__list-item">
              <a href="#">
                Услуги
              </a>
            </li>
            <li class="nav-mob__list-item">
              <a href="#">
                Специалисты
              </a>
            </li>
            <li class="nav-mob__list-item">
              <a href="#">
                Цены
              </a>
            </li>
            <li class="nav-mob__list-item">
              <a href="#">
                Контакты
              </a>
            </li>
          </ul>

          <button class="nav-mob__btn-item">
            Записаться на прием
          </button>
        </div>
      </div>
    </nav>

    </div>
    <nav class="nav">
      <div class="container">
        <div class="nav__wrapper">
          <ul class="nav__list">
            <li class="nav__list-item"><a href="#">
                О клинике
              </a></li>
            <li class="nav__list-item">
              <a href="#">
                Услуги
              </a>
            </li>
            <li class="nav__list-item">
              <a href="#">
                Специалисты
              </a>
            </li>
            <li class="nav__list-item">
              <a href="#">
                Цены
              </a>
            </li>
            <li class="nav__list-item">
              <a href="#">
                Контакты
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="main">
    <div class="bloc1">
      <div class="container">
        <div class="bloc1__wrapper">
          <div class="bloc1__maintxt">
            <div class="bloc1__title">
              <h1>
                Многопрофильная клиника для детей
                и взрослых
              </h1>
            </div>
            <div class="bloc1__txt">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua
              </p>
            </div>
          </div>
          <div class="bloc1__img">
            <img src="<?php echo get_template_directory_uri()  ?>/assets/test/img/room.png" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="bloc2">
      <div class="container">

        <div class="bloc2__swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->

            <?php
$slides = CFS()->get('add_slide');

if ($slides) {
    foreach ($slides as $slide) {
        $services = isset($slide['service']) ? $slide['service'] : false;
        $background_left = isset($slide['bg_left']) ? $slide['bg_left'] : false;
        $background_image = isset($slide['bg_right']) ? $slide['bg_right'] : false;
        $background_mb = isset($slide['bg_leftmb']) ? $slide['bg_leftmb'] : false;
?>
    <div class="swiper-slide">
        <div class="bloc2__allbloc">
            <div class="bloc2__bloc1" style="background-image: url('<?php echo $background_left; ?>')">
                <div class="bloc2__title">
                    <h2>Check-UP</h2>
                </div>
                <span class="bloc2__txt">для мужчин</span>
                <ul class="bloc2__list">
                    <?php
                    if ($services) {
                        foreach ($services as $service) {
                    ?>
                            <li class="bloc2__list-item"><?= $service['description_service']; ?></li>
                    <?php
                        }
                    }
                    ?>
                </ul>
                <div class="bloc2__summ">
                    <span>Всего 2800₽</span>
                    <span>3500₽</span>
                </div>

                <div class="bloc2__buttons">
                    <button class="main2__sign-up">Записаться</button>
                    <button class="bloc2__more">Подробнее</button>
                </div>
            </div>

            <div class="bloc2__bloc1v2" style="background-image: url('<?php echo $background_mb; ?>')">
                <div class="bloc2__title">
                    <h2>Check-UP</h2>
                </div>
                <span class="bloc2__txt">для мужчин</span>
                <ul class="bloc2__list">
                    <?php
                    if ($services) {
                        foreach ($services as $service) {
                    ?>
                            <li class="bloc2__list-item"><?= $service['description_service']; ?></li>
                    <?php
                        }
                    }
                    ?>
                </ul>

                <div class="bloc2__summ">
                    <span>Всего 2800₽</span>
                    <span>3500₽</span>
                </div>

                <div class="bloc2__buttons">
                    <button class="main2__sign-up">Записаться</button>
                    <button class="bloc2__more">Подробнее</button>
                </div>
            </div>

            <div class="bloc2__bloc2-img">
                <img class="bloc2__bloc2-img1" src="<?php echo $background_image; ?>" alt="">
            </div>
        </div>
    </div>
<?php
    }
}
?>

          </div>

          <div class="control-sw">
            <div class="fraction"></div>
            <div class="btn-set">
              <div class="button-prev">
                <img src="<?php echo get_template_directory_uri()  ?>/assets/test/img/btn-prev.svg" alt="">
              </div>
              <div class="button-next">
                <img src="<?php echo get_template_directory_uri()  ?>/assets/test/img/btn-next.svg" alt="">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>

  <footer class="footer">
    <div class="container">
      <nav class="footer__nav">
        <img src="<?php echo get_template_directory_uri()  ?>/assets/test/img/LOGO-white.svg" alt="" class="footer__logo">
        <ul class="footer__list">
          <li class="footer__item"><a href="#">
              О клинике
            </a></li>
          <li class="footer__item"><a href="#">
              Услуги
            </a></li>
          <li class="footer__item"><a href="#">
              Специалисты
            </a></li>
          <li class="footer__item"><a href="#">
              Цены
            </a></li>

          <li class="footer__item"><a href="#">
              Контакты
            </a></li>
        </ul>

        <ul class="footer__soc">
          <li class="footer__item-soc"><a href="#">
              <img src="<?php echo get_template_directory_uri()  ?>/assets/test/img/instagram 4 1.svg" alt="">
            </a></li>
          <li class="footer__item-soc"><a href="#">
              <img src="<?php echo get_template_directory_uri()  ?>/assets/test/img/whatsap.svg" alt="">
            </a></li>
          <li class="footer__item-soc"><a href="#">
              <img src="<?php echo get_template_directory_uri()  ?>/assets/test/img/telegram 1.svg" alt="">
            </a></li>
        </ul>

      </nav>
    </div>
  </footer>



  <?php wp_footer(); ?>
</body>


</html>