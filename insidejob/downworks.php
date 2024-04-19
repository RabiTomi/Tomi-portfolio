<div class="lastthings">

<?php $bigg = get_field("otherart"); ?>
    <div class="otherart" id="otherart"><?php echo $bigg; ?></div>

    <div class="lasttwocards">
        <?php 
        $secondarycardLoop = new WP_Query(array(
            "post_type" => "secondarycard",
            "posts_per_page" => -1
        )); 

        if ($secondarycardLoop->have_posts()): 
            while ($secondarycardLoop->have_posts()): $secondarycardLoop->the_post(); 

                $titl = get_field("title"); 
                $desc = get_field("description"); 
                $ima = get_field("image"); 
                $imap = get_field("imagephone"); 
        ?>
        <div class="outcard2">
            <div class="card2">
                <div class="outpic2">
                    <div class="picture2">
                        <img class="fullsize" src="<?php echo $ima["url"]; ?>" alt="sds">
                        <img class="mobile" src="<?php echo $imap["url"]; ?>" alt="sds">
                    </div>
                </div>
                <div class="circle2"></div>
                <div class="text2">
                    <div class="title2"><?php echo $titl; ?></div> 
                    <div class="description2"><?php echo $desc; ?></div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>

    <div class="goth"> <img src="<?php echo get_template_directory_uri()?>/pictures/gothi.svg" alt=""/></div>
</div>
    






  






