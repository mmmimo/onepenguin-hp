<?php
/**
 * Version    : 1.2.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# <?php echo ( is_single() || is_page() ) ? 'fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#' : 'fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#' ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script type="text/javascript">
    ( function( $ ) {
	$(function(){
		$(".accordion .q-part").click(function(){
		    $(this).next(".a-part").slideToggle();
		    $(this).children("span").toggleClass("open");
		});
	});
} )( jQuery );
		
		
		  ( function( $ ) {
	$(function(){
		$(".menu-btn").click(function(){
		    $(this).next(".menu").slideToggle();
		    $(this).children("span").toggleClass("is-active");
		});
	});
} )( jQuery );
		
	  ( function( $ ) {
		  $(function () {
  $('a[href^="#"]').click(function () {
    let speed = 500;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    let position = target.offset().top;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});

	  })( jQuery );
		
		

		
		
		
</script>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'habakiri_before_container' ); ?>
<div id="container">
	<?php
	$header_classes     = Habakiri::get_header_classses();
	$site_branding_size = Habakiri::get_site_branding_size();
	$gnav_size          = Habakiri::get_gnav_size();
	?>
	<header id="header" class="header <?php echo esc_attr( implode( ' ', $header_classes ) ); ?>">
	
		<?php do_action( 'habakiri_before_header_content' ); ?>
		
			<img src="https://onepenguin.jp/wp-content/uploads/2020/07/humbarger@2x.png" alt="写真"　width="41" class="menu-btn">
    <div class="menu">
      <div class="menu__item">SERVICE</div>
      <div class="menu__item">ABOUT US</div>
      <div class="menu__item">PRICE</div>
      <div class="menu__item">WORKS</div>
		<div class="menu__item">COMPANY</div>
		<div class="menu__item">CONTACT</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"></script>
		
		<a href="tel:0120-897-417"><img src="https://onepenguin.jp/wp-content/uploads/2020/08/tel@2x.png" alt="写真"　width="141" class="header-tel"></a>
		<a href="tel:0120-897-417"><img src="https://onepenguin.jp/wp-content/uploads/2020/09/アセット-87@2x.png" alt="写真" class="header-tel-sp"></a>
		
		<div class="container">
			
			<div class="row header__content">
				<div class="col-xs-10 <?php echo esc_attr( $site_branding_size ); ?> header__col">
					<?php get_template_part( 'modules/site-branding' ); ?>
				<!-- end .header__col --></div>

				<div class="col-xs-2 <?php echo esc_attr( $gnav_size ); ?> header__col global-nav-wrapper clearfix">
					<?php get_template_part( 'modules/gnav' ); ?>
					<div id="responsive-btn"></div>
				<!-- end .header__col --></div>
			<!-- end .row --></div>
		<!-- end .container --></div>
		<?php do_action( 'habakiri_after_header_content' ); ?>
		
	<!-- end #header --></header>
	
	<div id="contents">
		<?php do_action( 'habakiri_before_contents_content' ); ?>
