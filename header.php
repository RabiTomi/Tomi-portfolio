<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo("Frontpage") ?></title>
    <?php wp_head() ?>

</head>


<body>

<header>

<div class="navbar">

<?php $hic = get_field("headericon"); ?>
<div class="icon" > 
<a href="#footer"><img src="<?php echo $hic["url"]; ?>" alt=""/></a>

</div>

<div class="lista">
  <div class="nav">
    <div class="Nb"><a href="#hero">About</a></div> 
    <div class="Nb"><a href="#secondpart">Design Projects</a></div> 
    <div class="Nb"><a href="#otherart">Other Art</a></div> 
  </div>
</div>


  </div>

</header>
    
