<?php $recent = new WP_Query('pagename=nihongo');while($recent->have_posts()) : $recent->the_post();?>

<?php include_once("page-.php"); ?>

<?php endwhile; ?>

<?php wp_reset_postdata();?>