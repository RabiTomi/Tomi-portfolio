<?php get_header() ?>

<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post() ?>



           <?php get_template_part("insidejob/hero") ?>
            <?php get_template_part("insidejob/secondpart") ?>
            <?php get_template_part("insidejob/downworks") ?>
        


    




<?php endwhile ?>
 <?php endif ?>


<?php get_footer() ?>