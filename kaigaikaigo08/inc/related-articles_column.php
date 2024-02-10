<div class="l-item">
    <div class="l-item__block">
        <div class="sec__inner">
            <div class="headArea">
                <div class="ttl">関連記事</div>
            </div>
            <div class="boxArea">
                <?php
                $args = array(
                    'numberposts' => 3,
                    'post_type' => 'column',
                    'taxonomy' => 'column_tag',
                    'paged' => $paged,
                    'status' => 'publish',
                    'orderby' => 'rand'
                );
                $posts = get_posts($args);
                //記事数を取得
                $pages_num = count($posts);

                $count = 1;
                if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
                        <div class="box col3">
                            <a href="<?php the_permalink();?>"?>
                                <div class="itemBox">
                                    <div class="imgBox">
                                        <img class="thumbnail" src="<?php
                                                                    //アイキャッチ画像があれば表示
                                                                    if (has_post_thumbnail()) {
                                                                        $image_id = get_post_thumbnail_id();
                                                                        $image_url = wp_get_attachment_image_src($image_id, true);
                                                                        echo $image_url[0];
                                                                    } else {
                                                                        echo "https://placehold.jp/500x300.png";
                                                                    }
                                                                    ?>
																										" alt="<?php
                                                    the_title();
                                                    ?>のサムネイル">
                                    </div>
                                    <div class="box-body">
                                        <p class="boxTit">
                                            <?php the_title(); ?>
                                        </p>
                                        <p class="date">
                                            <?php echo get_the_date('Y.m.d'); ?>
                                        </p>
                                        <p class="btn-internal page-in sp">詳しく見る</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>記事はまだありません。</p>
                <?php endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <div class="caseBtn">
        <a href="/column">コラム一覧へ</a>
    </div>
</div>