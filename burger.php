<?php 

// Template Name: Burger
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/css/style.css">
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Док111а</title>

  <!--fontfamily-->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Archivo&family=Calistoga&family=Montserrat:wght@400;500;600;700&family=Nunito:wght@400;600&family=Poppins:wght@600&display=swap"
    rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

  <!-- firstbloc-->

  <div class="firstbloc" style="background-image: url('<?php the_field('Backraund_1page') ?>')" ;>
    <div class="firstbloc__mobfon">
      <header class="firstbloc__header">
        <div class="container">
          <nav class="firstbloc__nav">
            <div class="firstbloc__logo">
              <img src="<?php the_field('logo_img') ?>" alt="">
            </div>

            <div class="header__burger">
              <span></span>
            </div>

            <ul class="nav">
              <li><a href="#"><?php the_field('nav1') ?></a></li>
              <li><a href="#"><?php the_field('nav2') ?></a></li>
              <li><a href="#"><?php the_field('nav3') ?></a></li>
              <li><a href="#"><?php the_field('nav4') ?></a></li> 
              <li><a href="#"><?php the_field('nav5') ?></a></li>
            </ul>

            <ul class="nav1">

              <div>
                <span class="close">+</span>
              </div>

              <li><a href="#"><?php the_field('nav1') ?></a></li>
              <li><a href="#"><?php the_field('nav2') ?></a></li>
              <li><a href="#"><?php the_field('nav3') ?></a></li>
              <li><a href="#"><?php the_field('nav4') ?></a></li>
              <li><a href="#"><?php the_field('nav5') ?></a></li>
            </ul>

          </nav>
        </div>
      </header>

      <div class="container">
        <div class="firstbloc__textone">
          <h1><?php the_field('pag1_title') ?></h1>
        </div>
        <div class="firstbloc__texttwo">
          <p><?php the_field('one-page_text') ?></p>
        </div>
        <div class="firstbloc__button">
          <form action="#">
            <button type="submit">
            <?php the_field('button_txt') ?>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!--twobloc-->


  <section class="twobloc" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/Group-2.jpg');">
    <div class="container">
      <div class="twobloc__alltext">
        <div class="twobloc__title">
          <h2>Our Chef</h2>
        </div>
        <div class="twobloc__text">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vi- vamus lacinia odio vitae vestibulum
            vestibulum.</p>
        </div>
      </div>
      <div class="twobloc__img">
        <ul>
          <li class="twobloc__img-img">
            <img src="<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/aiden.jpg" alt="">
          </li>
          <li class="twobloc__img-name">
            <h3>Aiden Hunter</h3>
          </li>
          <li class="twobloc__img-remeslo">
            <p>Founder</p>
          </li>
        </ul>

        <ul>
          <li class="twobloc__img-img">
            <img src="<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/ethel.jpg">
          </li>
          <li class="twobloc__img-name">
            <h3>Ethel Ramsey</h3>
          </li>
          <li class="twobloc__img-remeslo">
            <p>Co-Founder</p>
          </li>
        </ul>

        <ul>
          <li class="twobloc__img-img">
            <img src="<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/fanne.jpg" alt="">
          </li>
          <li class="twobloc__img-name">
            <h3>Fannie Stewart</h3>
          </li>
          <li class="twobloc__img-remeslo">
            <p>Co-Founder</p>
          </li>
        </ul>
      </div>
    </div>
  </section>


  <!--three bloc-->


  <section class="threebloc">
    <div class="container">
      <div class="threebloc__photo">
        <img src="<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/burger.jpg" alt="">
      </div>
      <div class="threebloc__right">
        <div class="threebloc__title">
          <h2>Best Burger</h2>
        </div>
        <div class="threebloc__text">
          <p>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Vivamus lacinia odio vitae
            vestibulum vestibulum.</p>
        </div>
        <div class="threebloc__button">
          <form action="#">
            <button type="submit">
              Order Now
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!--fourbloc-->


  <section class="fourbloc" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/Group\ 4.jpg');">
    <div class="container">
      <div class="fourbloc__left">
        <div class="fourbloc__title">
          <h2>Big Burger</h2>
        </div>
        <div class="fourbloc__text">
          <p>Lorem ipsum dolor sit amet, consecte-
            tur adipiscing elit. Vivamus lacinia
            odio vitae vestibulum vestibulum.</p>
        </div>
        <div class="fourbloc__button">
          <form action="#">
            <button type="submit">
              Order Now
            </button>
          </form>
        </div>
      </div>
      <div class="fourbloc__img">
        <img src="<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/right burger (convert.io).jpg" alt="">
      </div>
    </div>
  </section>


  <!--fivebloc-->


  <section class="fivebloc">
    <div class="container">
      <div class="fivebloc__title">
        <h2>Statistics</h2>
      </div>
      <div class="fivebloc__text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Vivamus lacinia odio vitae vestibulum vestibulum.</p>
      </div>
      <div class="fivebloc__info">
        <div class="fivebloc__info-circl">
          <h2>7k</h2>
          <p>Customer</p>
        </div>

        <div class="fivebloc__info-circl">
          <h2>109</h2>
          <p>Outlets</p>
        </div>

        <div class="fivebloc__info-circl">
          <h2>35</h2>
          <p>Country</p>
        </div>

      </div>
    </div>
  </section>



  <!--sixbloc-->



  <section class="sixbloc" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/Design.jpg');">
    <div class="container">
      <div class="sixbloc__title">
        <h2>Popular Package</h2>
      </div>
      <div class="sixbloc__infocart">
        <ul>
          <li>
            <div class="sixbloc__package">
              <div class="sixbloc__package-title">Package I</div>
              <div class="sixbloc__package-icon"><img src="<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/Icon.png" alt=""></div>
              <div class="sixbloc__package-order">$10.00</div>
              <div class="sixbloc__package-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
              <div class="sixbloc__package-button">
                <form action="#">
                  <button type="submit">
                    Order Now
                  </button>
                </form>
              </div>
            </div>
          </li>
          <li>
            <div class="sixbloc__package">
              <div class="sixbloc__package-title">Package II</div>
              <div class="sixbloc__package-icon"><img src="<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/Icon.png" alt=""></div>
              <div class="sixbloc__package-order">$20.00</div>
              <div class="sixbloc__package-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
              <div class="sixbloc__package-button">
                <form action="#">
                  <button type="submit">
                    Order Now
                  </button>
                </form>
              </div>
            </div>
          </li>
          <li>
            <div class="sixbloc__package">
              <div class="sixbloc__package-title">Package III</div>
              <div class="sixbloc__package-icon"><img src="<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/Icon.png" alt=""></div>
              <div class="sixbloc__package-order">$30.00</div>
              <div class="sixbloc__package-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
              <div class="sixbloc__package-button">
                <form action="#">
                  <button type="submit">
                    Order Now
                  </button>
                </form>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>




  <!--seven bloc-->


  <section class="sevenbloc" style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/Group\ 6.jpg');">
    <div class="container">
      <div class="sevenbloc__text">
        <blockquote>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vivamus lacinia odio vitae
          vestibulum vestibulum.</blockquote>
      </div>
      <div class="sevenbloc__aftor">
        <p>Barry Henderson</p>
      </div>
    </div>
  </section>




  <!--eightbloc-->


  <section class="eightbloc" style="background-image:url('<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/sloay8.jpg');">
    <div class="container">
      <div class="eightbloc__title">
        <h2>Don’t miss Our Update</h2>
      </div>
      <div class="eightbloc__text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Vivamus lacinia odio vitae vestibulum vestibulum.</p>
      </div>
      <div class="eightbloc__form">
        <form action="index.html" method="post">
          <input type="email" placeholder="  Your Email" name="student_bio">
          </input>
          <button type="button">
            Subscribe
          </button>
        </form>
      </div>
    </div>
  </section>




  <!--ninebloc-->




  <footer class="ninebloc">
    <div class="container">
      <div class="ninebloc__left">
        <div class="ninebloc__title">
          <h3>Title Here</h3>
        </div>
        <div class="ninebloc__text">
          <p>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Aliquam at dignissim nunc,
            id maximus ex. Etiam nec dignissim elit, at
            dignissim enim.</p>
        </div>
        <div class="ninebloc__link">
          <ul>
            <a href="#">
              <li><img src="<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/Instagram.png" alt=""></li>
            </a>
            <a href="#">
              <li><img src="<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/Facebook.png" alt=""></li>
            </a>
            <a href="#">
              <li><img src="<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/Twitter.png" alt=""></li>
            </a>
            <a href="#">
              <li><img src="<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/img/WhatsApp.png" alt=""></li>
            </a>
          </ul>
        </div>
      </div>

      <div class="ninebloc__right">
        <ul>
          <h2>About</h2>
          <li href="#"><a href="#">History</a></li>
          <li href="#"><a href="#">Our Team</a></li>
          <li href="#"><a href="#">Brand Guidelines</a></li>
          <li href="#"><a href="#">Terms & Condition</a></li>
          <li href="#"><a href="#"> Privacy Policy</a></li>
        </ul>

        <ul>
          <h2>Services</h2>
          <li href="#"><a href="#">How to Order</a></li>
          <li href="#"><a href="#">Our Product</a></li>
          <li href="#"><a href="#">Order Status</a></li>
          <li href="#"><a href="#">Promo</a></li>
          <li href="#"><a href="#">Payment Method</a></li>
        </ul>

        <ul>
          <h2>Other</h2>
          <li href="#"><a href="#">Contact</a></li>
          <li href="#"><a href="#">Us Help</a></li>
          <li href="#"><a href="#">Privacy</a></li>
        </ul>

      </div>
    </div>
  </footer>

  <script src="<?php echo get_template_directory_uri()  ?>/assets/fud psdbm/js/main.js"></script>
  <?php wp_footer(); ?>
</body>

</html>