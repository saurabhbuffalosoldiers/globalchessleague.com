<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- custom styles  -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Saira:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css" integrity="sha512-UiVP2uTd2EwFRqPM4IzVXuSFAzw+Vo84jxICHVbOA1VZFUyr4a6giD9O3uvGPFIuB2p3iTnfDVLnkdY7D/SJJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.css" integrity="sha512-jxGmKjC/OykrTklkNK2NgnhNtKtUAADFY+rvSi3nA7dbaPRfjrSXYxHqX8iq5N6WTOntqEQZrEwW3L84sirfKQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FBJE4HLYNJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FBJE4HLYNJ');
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SportsOrganization",
  "name": "Global Chess League",
  "url": "https://globalchessleague.com/",
  "logo": "



https://globalchessleague.com/wp-content/uploads/2023/05/Final-Logo_22-May-copy_White.svg
 ",
  "sameAs": [
    "https://twitter.com/GCLlive",
    "https://www.facebook.com/OfficialGlobalChessLeague",
    "https://www.instagram.com/officialglobalchessleague/",
    "https://www.linkedin.com/company/officialglobalchessleague/",
    "https://www.youtube.com/@OfficialGCL"
  ]
}
</script> 
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
