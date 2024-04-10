<?php 
// Template Name: kontact
?>


<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset') ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Контакты</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>./assets/the gente nut/css/main.css"/>
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
    <li><a href="http://portfolio/recept">Рецепты</a></li>
    <li><a href="http://portfolio/kontact/">Контакты</a></li>
  </ul>
</div>
    <div class="inner" data-barba="container" data-barba-namespace="katalog">


      <main class="content_box">

        <section class="kontact" style="background-image:url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/kontact/kontactbg.png');">
          <div class="container container_margin">
            <div class="kontact__title">
              <h1>
                остались вопросы?
              </h1>
            </div>
            <div class="kontact__txt-info">
              <p>
                Заполните форму ниже, или напишите нам по адресу <a class="kontact__mail"
                  href="mailto:">info@favoritfood.ru</a>
              </p>
              <p>
                Телефон: <a class="kontact__tel" href="tel:">+7 495 822-08-21</a>
              </p>
              <p>
                Адрес: г. Смоленск, ул. Кашена, д. 1, ком. 308.
              </p>
            </div>
            <form action="#" class="kontact__form">
              <div class="kontact__input-all">
                <input class="kontact__form-input" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/kontact/big img/input.svg');"
                  type="name" placeholder="Ваше имя" name="username">
                <input class="kontact__form-input" name="tel"
                  style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/kontact/big img/input.svg');" type="tel" placeholder="Телефон">
                <input class="kontact__form-input" name="email"
                  style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/kontact/big img/input.svg');" type="email" placeholder="E-mail">
              </div>
              <textarea class="kontact__textarea" style="background-image:url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/kontact/big img/textarea.svg');"
                placeholder="Комментарий" name="textarea" id="" cols="30" rows="10">
</textarea>

              <textarea class="kontact__textarea-mob"
                style="background-image:url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/kontact/big img/textarea-mob.svg');" placeholder="Комментарий"
                name="textarea" id="" cols="30" rows="10">
</textarea>
            </form>
          </div>
        </section>


      </main>
      <footer class="footer" style="background-image: url('<?php echo get_template_directory_uri()  ?>./assets/the gente nut/img/kontact/footer-bg.png');">
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