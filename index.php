<?php
/*
Template Name: Portfolio Main
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset') ?>" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Портфолио</title>

   <?php wp_head(); ?>

   <link rel="stylesheet" href=" <?php echo get_template_directory_uri()  ?>/assets/css/main.css" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>



   <header class="header">
      <div class="container">
         <div class="header__burger-menu">
            <span></span>
         </div>
         <nav>
            <ul class="header__list">
               <div class="header__close" style="background-image:url('<?php echo get_template_directory_uri()  ?>/assets/img/closebtn.svg');"></div>

               <li class="header__item"> <img src="<?php echo get_template_directory_uri()  ?>/assets/img/telegram.webp" alt=""> <a
                     href="https://t.me/@Merkslets">Telegram</a>
               </li>
               <li class="header__item"> <span>Whatsap: </span> <a href="tel:89023118617">8-902-311-86-17</a></li>
               <li class="header__item"><span>E-mail:</span><a
                     href="mailto:gettefaust240@gmail.com">gettefaust240@gmail.com</a></li>
               <li class="header__item spec-item">
                  <a href="#">Биржи</a>
                  <div class="header__item_decor"></div>
                  <ul class="header__pod-list">
                     <li class="header__item-brg"><img src="<?php echo get_template_directory_uri()  ?>/assets/img/kwork.webp" alt=""> <a
                           href="https://kwork.ru/user/slecker">K-work</a></li>
                     <li class="header__item-brg"><img src="<?php echo get_template_directory_uri()  ?>/assets/img/weblanser.webp" alt=""><a
                           href="https://www.weblancer.net/users/Slecker/">Weblancer</a></li>
                  </ul>
               </li>
               <li class="header__item"><img src="<?php echo get_template_directory_uri()  ?>/assets/img/github.webp" alt=""><a
                     href="https://github.com/merk228?tab=repositories">Github</a>
               </li>
            </ul>
         </nav>

      </div>
   </header>

   <main>
      <section class="skils">
         <div class="container">
            <div class="skils__title">
               <h1>Навыки</h1>
               <div class="skils__txt">
                  <p>#css, #html, #JS-Основы, #Git #WordPress</p>
               </div>
            </div>
            <div style="background-image: url('<?php echo get_template_directory_uri()  ?>/assets/img/poro.jpg');" class="skils__img"></div>
            <div class="skils__txt2">
               <p>
                  Практиковал и использовал в своих работах при верстке:
                  сборщик Gulp, немного css фреймворк Tailwind,
                  Js библиотеки, умение их подключать, простые скрипты(табы, pop-up, акардеоны),
                  адаптивная верстка, Git-commit, посадка верстки на WordPress.

               </p>
            </div>
         </div>
      </section>

      <section class="work">
         <div class="container">
            <div class="work__title">
               <h2>Примеры работ</h2>
            </div>
            <div class="myswiper">
               <!-- Additional required wrapper -->
               <div class="swiper-wrapper">
                  <!-- Slides -->

                  <?php 

// параметры по умолчанию
$my_posts = get_posts( array(
	'numberposts' => -1,
	'category_name'    => 'works',
	'orderby'     => 'date',
	'order'       => 'ASC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $my_posts as $post ){
	setup_postdata( $post );
?>

        <div class="swiper-slide">
        <div class="work__bloc">
                  <a href="<?php the_field('link-href') ?>" class="work__bloc-link" style="background-image:url('<?php the_field('bg_img') ?>')">
                     <div class="work__bloc-txt">
                        <p>Перейти</p>
                     </div>
                  </a>
                  <div class="work__bloc-description">
                     <p><?php the_field('Name_wrk') ?></p>
                  </div>
               </div>
                  </div>

<?php 

}

wp_reset_postdata(); 
?>



               </div>
               <!-- If we need pagination -->
               <div class="swiper-pagination"></div>

               <!-- If we need navigation buttons -->
               <div class="button-prev">
                  <img src="<?php echo get_template_directory_uri()  ?>/assets/img/arrow-next.webp" alt="">
               </div>
               <div class="button-next">
                  <img src="<?php echo get_template_directory_uri()  ?>/assets/img/arrow-next.webp">
               </div>
            </div>
            <div class="work__blocs">

<?php 

// параметры по умолчанию
$my_posts = get_posts( array(
	'numberposts' => -1,
	'category_name'    => 'works',
	'orderby'     => 'date',
	'order'       => 'ASC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $my_posts as $post ){
	setup_postdata( $post );
?>

<div class="work__bloc">
                  <a href="<?php the_field('link-href') ?>" class="work__bloc-link" style="background-image:url('<?php the_field('bg_img') ?>')">
                     <div class="work__bloc-txt">
                        <p>Перейти</p>
                     </div>
                  </a>
                  <div class="work__bloc-description">
                     <p><?php the_field('Name_wrk') ?></p>
                  </div>
               </div>

<?php 

}

wp_reset_postdata(); 
?>

         
            </div>
         </div>
         </div>
      </section>
   </main>

   <script src="<?php echo get_template_directory_uri()  ?>/assets/js/index.bundle.js"></script>
   <?php wp_footer(); ?>
</body>

</html>