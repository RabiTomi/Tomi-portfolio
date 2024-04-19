<div class="aboutpage" id="hero">

    <div class="sidebox" >
            <?php $intro = get_field("sayinghi"); ?>
            <?php $name = get_field("something"); ?>
            <?php $about = get_field("aboutme"); ?>
            <?php $pdf = get_field("cv-download"); ?>
            <?php $pdflink = get_field("pdflink"); ?>
            <?php $vid = get_field("video-download"); ?>
            <?php $videolink = get_field("videolink"); ?>
            <?php $meh = get_field("bigart"); ?>
        


        <div class="sayinghi" ><?php echo $intro; ?></div>
        <div class="something"><?php echo $name; ?></div>
        <div class="aboutme"><?php echo $about; ?></div>

            <div class="cv-download">
                <a href="<?php echo $pdflink ["url"]?>" download><?php echo $pdf; ?></a>
            </div>

            <div class="video-download">
                <a href="<?php echo $videolink ["url"]?>" download><?php echo $vid; ?></a>
            </div>

        </div>




<div class="rightsidebox" >

    <div class="ball1"></div>
    <div class="ball2"></div>
    <div class="ball3"></div>
    
   
    <img src="<?php echo $meh["url"]; ?>" alt="">

</div>
</div>