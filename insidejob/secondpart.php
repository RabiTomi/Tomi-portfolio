<div class="dottedline"></div>

<?php $bigt = get_field("designprojects"); ?>
<div class="designwork" id="secondpart"><?php echo $bigt; ?></div>

<div class="fourcards">
<?php $designcardLoop = new WP_Query(array(
        "post_type" => "designcard",
        "posts_per_page" => -1
    )); ?>

<?php if($designcardLoop->have_posts()): $designcardLoop -> the_post() ?>
<?php while($designcardLoop->have_posts()): $designcardLoop -> the_post() ?>

<?php $tit = get_field("title"); ?>
<?php $im = get_field("image"); ?>
<?php $des = get_field("description"); ?>
  

<div class="outcard">
    <div class="card">

        <div class="outpic"> <div class="picture"> <img src="<?php echo $im["url"]; ?>" alt="">       </div></div>
 
         <div class="circle">
 
         </div>
         <div class="text">
            <div class="title"><?php echo $tit; ?></div> 
             <div class="description"><?php echo $des; ?></div>
             
         </div>
     </div>
</div>





<?php endwhile ?>
    <?php endif ?>

    </div>
    <?php wp_reset_postdata() ?>
