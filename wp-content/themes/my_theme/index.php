<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- De onderstaande regel code gebruikt de WordPress-functies bloginfo() welke de naam en de omschrijving van de applicatie ophaalt -->
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

    <!-- De onderstaande regel code gebruikt de WordPress-functie get_stylesheet_uri() om de URL van het huidige thema's style.css-bestand op te halen en dit te koppelen aan het stijlblad van je website. -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    
</head>

<body>
    <header>

        <!-- De onderstaande regel code gebruikt de WordPress-functie  -->
        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        <nav>

            <!-- De onderstaande regel code gebruikt de WordPress-functie  -->
            <ul><li><?php
                 wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'site-navigation'));
            ?></li></ul>
        </nav>
    </header>

    <main>
    <!-- De onderstaande regels code kijkt of en hoeveel posts er zijn en plaatst deze op de pagina.  -->
    <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2 class="entry-title"><a class="posts-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-content">
                        <?php the_content(); ?>
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="Post Image" width="200">
                        <?php endif; ?>
                    </div>
                </article>

                <?php
            endwhile;
        else :
            ?>
            <p>Geen berichten gevonden.</p>
        <?php endif; ?>
    </main>

    <!-- <footer> -->
    <footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
     <!-- De onderstaande regel code gebruikt de WordPress-functie  -->
     <li><?php
                 wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'site-navigation'));
            ?></li>

    </ul>
    <p>&copy;2023 Abbi Sinnathamby | All Rights Reserved</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- </footer> -->
</body>
</html>