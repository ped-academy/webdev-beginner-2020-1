<?php
/*
Template Name: Le mie ricette
*/

get_header();

$posts = get_posts_that_belongs_to_recipes_category();
?>

<?php foreach ($posts as $post): ?>
    <div>
        <img src="<?php echo get_the_post_thumbnail_url($post) ?>" alt="">
        <h1>
            <a href="<?php echo get_the_permalink($post) ?>">
                <?php echo $post->post_title; ?>
            </a>
        </h1>
        <p><?php echo $post->post_content; ?></p>
    </div>
<?php endforeach; ?>

<?php
get_footer();
?>
