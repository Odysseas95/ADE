
<?php if ($ask > 1) { ?>
<a href= <?php echo "../ask_",$ask-1 ; ?>>
<img src="../back.png"></a>
<?php }?>
<a href="../index.html">
<img src="../house.png"></a>

<?php if ($ask+1 < 8) { ?>
<a href="<?php echo "../ask_",$ask+1 ; ?>">
<img src="../next.png"></a>
<?php } ?>

