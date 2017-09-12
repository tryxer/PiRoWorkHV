<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Piro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- ronan -->
	<meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost:8888/SiteHerve/wp-content/themes/piro/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="http://localhost:8888/SiteHerve/wp-content/themes/piro/css/materialize.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="http://localhost:8888/SiteHerve/wp-content/themes/piro/css/style.css">
	
	<script type="text/javascript" src="http://localhost:8888/SiteHerve/wp-content/themes/piro/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="http://localhost:8888/SiteHerve/wp-content/themes/piro/js/materialize.js"></script>
    <script type="text/javascript" src="http://localhost:8888/SiteHerve/wp-content/themes/piro/js/script.js"></script>
	<!-- ronan -->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site ">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'piro' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="navbar-fixed ">
            <nav>
                <div class="nav-wrapper row white">
					<a id="logo" href="#accueil" class="brand-logo col l1 offset-l1"></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse">
						<i class="material-icons">menu</i>
                    </a>
					
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu nav-mobile',
								'menu_class'	 =>	'right hide-on-med-and-down',
							) );
						?>
                    <ul class="side-nav" id="mobile-demo">
                        <li class="user-details cyan darken-2">
                            <div class="row">
                                <div class="col col s4 m4 l4">
                                    <div id="imageMobile">
                                        <img src="http://localhost:8888/SiteHerve/wp-content/uploads/2017/09/herveeTEST.png" alt="Accueil" class="circle responsive-img valign profile-image">
                                    </div>
                                </div>
                                <div class="col col s8 m8 l8">
                                    <p class="user-roal">Faîtes votre choix !</p>
                                </div>
                            </div>
						</li>
                        <?php
							wp_nav_menu( array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'secondary-menu',
								
							) );
						?>
                        <div class="divider grey"></div>
                        <a target="_blank" href="https://www.facebook.com/herve.vilard.officielle/"><i class="fa fa-3x fa-facebook-official" aria-hidden="true"></i></a>
                    </ul>
                </div>
            </nav>
		</div>
		
		<section id="accueil" class="scrollspy">
					<img id="imageAccueil"  data-caption="Hervé Vilard" class="responsive-img" src="http://localhost:8888/SiteHerve/wp-content/uploads/2017/09/14.jpg" alt="#" />
				
				<div id="accueilExpand" class="show-on-large">
					<a id="accueilExpandLink" href="#textHv"><i class="medium material-icons">expand_more</i></a>
				</div>
		
        </section>
	</header><!-- #masthead -->

	
