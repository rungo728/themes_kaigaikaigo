<?php
/*
Template Name: nihongo
*/
// Rest of code
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php get_header();?>
</head>
<body>
<div id="contents-wrapper" class="top">


<div class="contents">
<?php echo replace_body(add_img_size($post->post_content)); ?>
</div><!-- / .contents page -->

</div><!-- / #contents-wrapper -->

<?php get_footer(); ?>
</body>
</html>