<!doctype html>
<html>
<head>
    <title>Demo</title>
</head>
<body>


<?php //get_header();  ?>

<?php while (have_posts()) : the_post(); ?>
    <!-- Content -->
    <div class="grid-container wrapper opacity90">
        <div class="grid-100">
            <h1><?php the_title(); ?></h1>
            <div class="clear marginTop10"></div>
            <?php the_content(); ?>
        </div>
    </div>

<?php endwhile; ?>

<?php //get_footer(); ?>

</body>
</html>