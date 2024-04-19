<?php wp_footer() ?>


<footer id="footer">

<?php $con = get_field("contactme"); ?>
<?php $mal = get_field("footermail"); ?>
<?php $pho = get_field("footerphone"); ?>
<?php $ic = get_field("footericon"); ?>

<div class="footicon" > 
<img src="<?php echo $ic["url"]; ?>" alt="">
<div class="foottext">
<div class="reachme"><?php echo $con; ?></div>
<div class="email">Mail:  <?php echo $mal; ?></div>
<div class="phone">Phone:  <?php echo $pho; ?></div>
</div>

</div>

</footer>



</body>
</html>