<?php
//description
global $description;
$description = "";

//bodyに定義するページID
global $pageID;
$pageID = "case";

//cssファイル名
global $css;
$css = "case.css";
/**
 * 記事取得事前処理
 */
//URLから現在のページスラッグを取得
$page_slug = $_SERVER['REQUEST_URI'];
// echo $page_slug;
//スラッシュで分割
$page_slug = explode('/', $page_slug);
// var_dump($page_slug);
//カラの要素を削除
$page_slug = array_filter($page_slug, "strlen");
// var_dump($page_slug);
//最後の要素を取得
$page_slug = end($page_slug);
// echo $page_slug;

//現在のページスラッグと一致する記事を取得
$args = array(
    'numberposts' => -1,
    'post_type' => 'case',
    'taxonomy' => 'cases',
    'paged' => $paged,
    'name' => $page_slug,
);
$the_query = new WP_Query($args);

//title　記事名
global $title;
if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post();
        $title = get_the_title();
    endwhile;
else:
    $title = "404 not found";
endif;


?>

<?php get_header(); ?>

<div class="pankuzu-wrapper">
    <div id="pankuzu" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <span>
            <a href="<?php echo esc_url(home_url('/')); ?>" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <span itemprop="name"><?php
                                        //サイト名
                                        $site_name = get_bloginfo('name');
                                        echo $site_name;
                                        ?></span>
                <meta itemprop="position" content="1">
            </a>
        </span>
        &nbsp;»&nbsp;
        <?php
        if ($the_query->have_posts()) :
        ?>

            <span>
                <a href="<?php echo esc_url(home_url('/case')); ?>" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <span itemprop="name">導入事例</span>
                    <meta itemprop="position" content="2">
                </a>
            </span>
            &nbsp;»&nbsp;
            <span>
                <?php
                //事例のカテゴリーを取得
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                        //タクソノミーの表示
                        $terms = get_the_terms($post->ID, 'cases');
                        foreach ($terms as $term) {
                            echo '<a href="' . esc_url(home_url('/case/' . $term->slug)) . '" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">';
                            echo '<span itemprop="name">' . $term->name . '</span>';
                            echo '</a>';
                        }
                    endwhile;
                endif;
                ?>
                <meta itemprop="position" content="3">
            </span>
            &nbsp;»&nbsp;
            <span itemprop="name">
                <?php
                //記事名
                echo $title;
                ?>
                <meta itemprop="position" content="4">
            </span>
        <?php else :?>
            <span itemprop="name">404 not found</span>

        <?php
        endif;
        ?>
    </div>
</div>

<div id="contents-wrapper" class="content-case">
    <div class="contents">
        <?php
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
        ?>
                <div class="l-point">
                    <div class="sec__inner">
                        <div class="sec__head">
                            <div class="flowArea__wrapper">
                                <div class="txtArea">
                                    <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
                                    <div class="<?php
                                                $terms = get_the_terms($post->ID, 'cases');
                                                foreach ($terms as $term) {
                                                    if ($term->name == "やさしい日本語研修") {
                                                        echo "tag blue";
                                                    } elseif ($term->name == "日本語教育プログラム") {
                                                        echo  "tag green";
                                                    } elseif ($term->name == "海外人材紹介") {
                                                        echo  "tag orange";
                                                    }
                                                }
                                                ?>">
                                        <?php
                                        //タクソノミーの表示
                                        foreach ($terms as $term) {
                                            echo $term->name;
                                        }
                                        ?></div>
                                    <h1>
                                        <div class="siteTit"><?php echo get_the_title(); ?></div>
                                    </h1>
                                    <p class="siteName pc">
                                        <?php
                                        //フィールド名を指定する。
                                        $field = get_field('導入事例クライアント名');
                                        if ($field) {
                                            echo $field;
                                        }
                                        ?>
                                    </p>
                                </div>
                                <div class="imgArea">
                                    <img src="<?php
                                                //アイキャッチ画像があれば表示
                                                if (has_post_thumbnail()) {
                                                    $image_id = get_post_thumbnail_id();
                                                    $image_url = wp_get_attachment_image_src($image_id, true);
                                                    echo $image_url[0];
                                                } else {
                                                    echo "https://placehold.jp/500x300.png";
                                                }
                                                ?>" alt="<?php
                                                            the_title();
                                                            ?>のサムネイル" />
                                </div>
                                <p class="siteName sp">
                                    <?php
                                    //フィールド名を指定する。
                                    $field = get_field('導入事例クライアント名');
                                    if ($field) {
                                        echo $field;
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php include(STYLESHEETPATH . '/inc/related-articles_case.php'); ?>
        <?php else : ?>
            <div class="l-point">
                <div class="sec__inner">
                    お探しのページは見つかりませんでした。
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php include(STYLESHEETPATH . '/inc/sidebar_top.php'); ?>
<?php include(STYLESHEETPATH . '/inc/lower_bottom.php'); ?>
<?php get_footer(); ?>
<?php wp_footer(); ?>