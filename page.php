<?php get_header(); ?>

<main style="padding:20px;">
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        the_title('<h1>', '</h1>');
        the_content();
    endwhile;
endif;
?>
</main>

<?php get_footer(); ?>
