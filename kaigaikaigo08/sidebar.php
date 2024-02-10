<div id="side">
  <?php include(STYLESHEETPATH . '/inc/sidebar_top.php'); ?>
  <div class="date-tag-wrap">
    <div class="sec__inner">
      <div class="date-title">キーワード</div>
      <div class="date-tags">
        <div class="tags-inline">
          <!-- <div class="tags-inline-list">＃タグ</div>
          <div class="tags-inline-list">＃タグタグタグタグ</div>
          <div class="tags-inline-list">＃タグタグ</div>
          <div class="tags-inline-list">＃タグ</div>
          <div class="tags-inline-list">＃タグ</div>
          <div class="tags-inline-list">＃タグタグタグタグ</div>
          <div class="tags-inline-list">＃タグタ</div>
          <div class="tags-inline-list">＃タグ</div>
          <div class="tags-inline-list">＃タグタグ</div>
          <div class="tags-inline-list">＃タグタグ</div> -->
          <?php
          $taxonomy = 'column_tag';
          $args = array(
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => false,
            'parent' => 0
          );
          $terms = get_terms($taxonomy, $args);
          foreach ($terms as $term) {
            echo '<div class="tags-inline-list"><a href="' . get_term_link($term->slug, $taxonomy) . '">' . $term->name . '</a></div>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <!-- widget_recent -->
  <div class="l-recent recent">
    <div class="sec__inner">
      <div class="l-recent__wrapper">
        <div class="recent__title">新着記事</div>

        <div class="recent__items">
          <?php $recent_query = new WP_Query(
            array(
              'post_type' => 'column',
              'posts_per_page' => 5,
              'orderby' => 'date',
              'order' => 'DESC',
            )
          );
          ?>
          <?php if ($recent_query->have_posts()) : ?>
            <?php while ($recent_query->have_posts()) : ?>
              <?php $recent_query->the_post(); ?>
              <!-- recent__item -->
              <a class="recent__item" href="<?php the_permalink(); ?>">
                <div class="recent__item-img">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/entry.png" alt="">
                  <?php endif; ?>
                </div>
                <div class="recent__item-body">
                  <div class="recent__item-title"><?php the_title(); ?></div>
                </div><!-- /recent__item-body -->
              </a><!-- /recent__item -->

            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div><!-- /recent__items -->
      </div>

    </div>

  </div><!-- /l-recent -->
  <div class="l-popular popular">
    <div class="sec__inner">
      <div class="l-popular__wrapper">
        <div class="popular__title">よく読まれている記事</div>
        <?php
        if (function_exists('wpp_get_mostpopular')) {
          $arg = array(
            'limit' => 5,
            'range' => 'last24hours',
            'thumbnail_width' => 109,
            'thumbnail_height' => 77,
            'stats_views' => 0,
            'post_type' => 'column',
            'post_html' => '<div class="popular__item">
                <div class="popular__item-img">
                  {thumb}
                </div>
                <div class="popular__item-body">
                  <div class="popular__item-title">{title}</div>
                </div>
                </div>'
          );
          echo '<div class="popular__items m_ranking">';
           wpp_get_mostpopular($arg);//リストの出力
          echo '</div>'; 
        }
        ?>
      </div>
    </div>
  </div><!-- /l-popular -->
</div>
<!-- /#side -->