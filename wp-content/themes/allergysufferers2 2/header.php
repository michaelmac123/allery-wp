<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title>Sublingual Immunotherapy | Allergy Drops | <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>
<?php
	$blog_title = get_bloginfo('name');
	if($blog_title !== "Allergy Allies"){
		$home_link = get_site_url('AllergyAllies');
	}else {
		$home_link = get_option('home');
	}
?>
<body <?php body_class(); ?>>

	<div id="page-wrap">
    <div id="container">
      <div class="main-header">
	      <a href="<?php echo $home_link; ?>/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Logo" border="0"></a>
	      <div class="top-nav">
	        <ul><?php
					function add_last_class($input) {
							if( !empty($input) ) {
								$pattern = '/<li class="(?!.*<li class=")/is';
								$replacement = '<li class="last ';
								$input = preg_replace($pattern, $replacement, $input);
								echo $input;
							}
						}
						/* the echo=0 parma is important here to prevent double menu */
						add_last_class(wp_list_pages('title_li=&sort_column=menu_order&depth=1&echo=0'));
					?></ul>
	      </div>
	      <div class="contact-number">
	      		<h4>(858) Allies1 <span class="small-text"/>(858-255-4371)</span></h4>
	      		<p>Sublingual Immunotherapy (Allergy Drops)</p>
	      </div>
	    </div>
	    <div class="main-content">
