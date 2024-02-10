<?php $recent = new WP_Query('pagename=top');while($recent->have_posts()) : $recent->the_post();?>

<?php include_once("page-nihongo.php"); ?>

<?php endwhile; ?>

<?php wp_reset_postdata();?>