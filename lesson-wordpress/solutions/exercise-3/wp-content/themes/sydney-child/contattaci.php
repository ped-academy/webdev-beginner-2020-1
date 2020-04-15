<?php
/*
Template Name: Contattaci
*/

get_header();
?>

<h1><?php echo $post->post_title; ?></h1>
<p><?php echo $post->post_content; ?></p>
<?php get_template_part('template-parts/contatti-azienda'); ?>

<?php
get_footer();
?>
