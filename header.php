<?php 
$templDir = get_template_directory();
$templURI = get_template_directory_uri();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>STOFF &#8211; Gratismagasin for unge i Bergen</title>
	<link rel="pingback" href="<?php echo $templURI . "/xmlrpc.php" ?>"  />

	<?php wp_head(); ?>

</head>

<body <?php body_class(""); ?>>

<?php
wp_body_open();
?>

<div id="page">