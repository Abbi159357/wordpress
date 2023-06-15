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
            <div id="navbar">
                <a href=" <?php
                            wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'site-navigation'));
                            ?>" id="logo">CompanyLogo</a>
                <div id="navbar-right">
                <?php
             wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'site-navigation'));
            ?>
                </div>
            </div>
            <script>
                // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
                window.onscroll = function() {
                    scrollFunction()
                };

                function scrollFunction() {
                    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                        document.getElementById("navbar").style.padding = "30px 10px";
                        document.getElementById("logo").style.fontSize = "25px";
                    } else {
                        document.getElementById("navbar").style.padding = "80px 10px";
                        document.getElementById("logo").style.fontSize = "35px";
                    }
                }
            </script>
            <!-- De onderstaande regel code gebruikt de WordPress-functie  -->
            <?php
            // wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'site-navigation'));
            ?>
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
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php
            endwhile;
        else :
            ?>
            <p>Geen berichten gevonden.</p>
        <?php endif; ?>
    </main>

    <footer>
        <!-- Voeg hier je footerinhoud toe -->
    </footer>
</body>

</html>