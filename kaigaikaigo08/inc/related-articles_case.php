<div class="l-connect">
    <div class="l-connect__block">
        <div class="sec__inner">
            <div class="item_wrapper">
                <div class="headArea">
                    <div class="ttl">関連事例</div>
                </div>
                <?php $args = array(
                    'numberposts' => 2,
                    'post_type' => 'case',
                    'taxonomy' => 'case',
                    'paged' => $paged,
                    'orderby' => 'rand'
                );
                $posts = get_posts($args);
                $count = 1;
                if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>

                        <div class="item_box">
                        <p class="<?php
                                            $terms = get_the_terms($post->ID, 'cases');
                                            foreach ($terms as $term) {
                                                if ($term->name == "やさしい日本語研修") {
                                                    echo "sp tag blue";
                                                } elseif ($term->name == "日本語教育プログラム") {
                                                    echo  "sp tag green";
                                                } elseif ($term->name == "海外人材紹介") {
                                                    echo  "sp tag orange";
                                                }
                                            }
                                            ?>">
                                    <?php
                                    //タクソノミーの表示
                                    foreach ($terms as $term) {
                                        echo $term->name;
                                    }
                                    ?>
                                </p>
                            <div class="img_box">
                                <img  src="<?php
                                                        //アイキャッチ画像があれば表示
                                                        if (has_post_thumbnail()) {
                                                            $image_id = get_post_thumbnail_id();
                                                            $image_url = wp_get_attachment_image_src($image_id, true);
                                                            echo $image_url[0];
                                                        } else {
                                                            echo "https://placehold.jp/500x300.png";
                                                        }
                                                        ?>
										?>" alt="<?php
                                                    the_title();
                                                    ?>のサムネイル">
                            </div>
                            <div class="box-body">
                                <p class="<?php
                                            $terms = get_the_terms($post->ID, 'cases');
                                            foreach ($terms as $term) {
                                                if ($term->name == "やさしい日本語研修") {
                                                    echo "pc tag blue";
                                                } elseif ($term->name == "日本語教育プログラム") {
                                                    echo  "pc tag green";
                                                } elseif ($term->name == "海外人材紹介") {
                                                    echo  "pc tag orange";
                                                }
                                            }
                                            ?>">
                                    <?php
                                    //タクソノミーの表示
                                    foreach ($terms as $term) {
                                        echo $term->name;
                                    }
                                    ?>
                                </p>
                                <p class="catch">
                                    <?php the_title(); ?>
                                </p>
                                <p class="companyName">
                                    <?php
                                    //フィールド名を指定する。
                                    $field = get_field('導入事例クライアント名');
                                    if ($field) {
                                        echo $field;
                                    }
                                    ?>
                                </p>
                                <p class="btn-internal page-in">
                                    <a href="
                                    <?php
                                    the_permalink()
                                    ?>
                                    ">詳しく見る</a>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                <?php else : ?>
                    <li>記事はまだありません。</li>
                <?php endif;
                wp_reset_postdata();
                ?>
            </div>
            <div class="caseBtn">
                <a href="/case">事例一覧へ</a>
            </div>
        </div>
    </div>
</div>