<?php //-1-D�clarer un menu ?>
<?php wp_nav_menu(array('theme_location'=>'primary')); ?>

<?php //-2-R�cup�rer une image cl� (dans le loop) ?>
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id(),array(750,200),false,''); ?>
<img src="<?php echo $src[0]; ?>" />






