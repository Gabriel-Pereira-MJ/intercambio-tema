<?php
get_header(); ?>
<div class="container">
    <?php include('titleblog.php'); ?>
    <?php
    // Start the Loop.
    while (have_posts()) : the_post();
    // Include the page content template.
    get_template_part('content', 'single');
    comments_template();
    endwhile;
    ?>
    <?php get_sidebar(); ?>
</div>
<?php
get_footer();