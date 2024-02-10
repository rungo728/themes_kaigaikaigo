<?php
/**
 * Functions
 */


/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );


/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
// function my_script_init()
// {
// 	// jQueryの読み込み
// 	wp_deregister_script('jquery');
// 	wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', "", "1.0.1");
// 	wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0.1', 'all');
// 	wp_enqueue_style( 'my', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0.1', 'all' );
// 	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array( 'jquery' ), '1.0.1', true );
// 	wp_enqueue_script( 'my', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.1', true );
// }
// add_action('wp_enqueue_scripts', 'my_script_init');


/**
 * アーカイブタイトル書き換え
 *
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */
function my_archive_title( $title ) {

	if ( is_home() ) { /* ホームの場合 */
		$title = 'ブログ';
	} elseif ( is_category() ) { /* カテゴリーアーカイブの場合 */
		$title = '' . single_cat_title( '', false ) . '';
	} elseif ( is_tag() ) { /* タグアーカイブの場合 */
		$title = '' . single_tag_title( '', false ) . '';
	} elseif ( is_post_type_archive() ) { /* 投稿タイプのアーカイブの場合 */
		$title = '' . post_type_archive_title( '', false ) . '';
	} elseif ( is_tax() ) { /* タームアーカイブの場合 */
		$title = '' . single_term_title( '', false );
	} elseif ( is_search() ) { /* 検索結果アーカイブの場合 */
		$title = '「' . esc_html( get_query_var( 's' ) ) . '」の検索結果';
	} elseif ( is_author() ) { /* 作者アーカイブの場合 */
		$title = '' . get_the_author() . '';
	} elseif ( is_date() ) { /* 日付アーカイブの場合 */
		$title = '';
		if ( get_query_var( 'year' ) ) {
			$title .= get_query_var( 'year' ) . '年';
		}
		if ( get_query_var( 'monthnum' ) ) {
			$title .= get_query_var( 'monthnum' ) . '月';
		}
		if ( get_query_var( 'day' ) ) {
			$title .= get_query_var( 'day' ) . '日';
		}
	}
	return $title;
};
add_filter( 'get_the_archive_title', 'my_archive_title' );


/**
 * 投稿タイプごとに異なるアーカイブの表示件数を指定
 *
 * 参考：https://webcreatetips.com/coding/152/
 */
// function change_posts_per_page($query) {
//   if ( is_admin() || ! $query->is_main_query() )
//   return;
//   if ( $query->is_post_type_archive('works') ) {
//     $query->set( 'posts_per_page', '6' );
//   }
// 	if ( $query->is_tax('works_category') ) {
// 		$query->set( 'posts_per_page', '6' );
// 	}
// }
// add_action( 'pre_get_posts', 'change_posts_per_page' );


/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
// function my_menu_init() {
// 	register_nav_menus(
// 		array(
// 			'global'  => 'ヘッダーメニュー',
// 			'utility' => 'ユーティリティメニュー',
// 			'drawer'  => 'ドロワーメニュー',
// 		)
// 	);
// }
// add_action( 'init', 'my_menu_init' );


/**
 * 管理メニューの「投稿」に関する表示を「NEWS（任意）」に変更
 *
 * 参考：https://wordpress-web.and-ha.com/change-management-screen-post/
 */
// function change_post_menu_label()
// {
// 	global $menu;
// 	global $submenu;
// 	$menu[5][0] = 'NEWS';
// 	$submenu['edit.php'][5][0] = 'NEWS一覧';
// 	$submenu['edit.php'][10][0] = '新しいNEWS';
// 	$submenu['edit.php'][16][0] = 'タグ';
// }


/**
 * 管理画面上の「投稿」に関する表示を「NEWS」に変更
 *
 * 参考：https://wordpress-web.and-ha.com/change-management-screen-post/
 */
// function change_post_object_label()
// {
// 	global $wp_post_types;
// 	$labels = &$wp_post_types['post']->labels;
// 	$labels->name = 'NEWS';
// 	$labels->singular_name = 'NEWS';
// 	$labels->add_new = _x('追加', 'NEWS');
// 	$labels->add_new_item = 'NEWSの新規追加';
// 	$labels->edit_item = 'NEWSの編集';
// 	$labels->new_item = '新規NEWS';
// 	$labels->view_item = 'NEWSを表示';
// 	$labels->search_items = 'NEWSを検索';
// 	$labels->not_found = '記事が見つかりませんでした';
// 	$labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';
// }
// add_action('init', 'change_post_object_label');
// add_action('admin_menu', 'change_post_menu_label');
/*
 * breadcrumb for category
 */
//パンくずリスト
function the_breadcrumb(){
    global $post;
    $str = '';
        $a1 = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="';
        $a2 = '"><span itemprop="name">';
        $a3 = '</span></a><meta itemprop="position" content="';
        $b1 = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">';
        $b2 = '</span><meta itemprop="position" content="';
    if(!is_home()&&!is_admin()){ /* !is_admin は管理ページ以外という条件分岐 */
        $str.= '<div id="pankuzu" itemscope itemtype="http://schema.org/BreadcrumbList">';
        $str.= $a1 . home_url() . $a2 . get_bloginfo('name') . $a3 . '1" /></span>&nbsp;&raquo;&nbsp;';
        if(is_category()) {                             //カテゴリーのアーカイブページ
            $cat = get_queried_object();
            if($cat -> parent != 0){
                $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
                                $positionNum = 2;
                foreach($ancestors as $ancestor){
                                        $str.= $a1 . get_category_link($ancestor) . $a2 .get_cat_name($ancestor) . $a3 . $positionNum . '" /></span>&nbsp;&raquo;&nbsp;';
                                        $positionNum++;
                }
            }
                        $ancestors = null;
                        $position = is_countable($ancestors)?count($ancestors):+2;
            $str.= $b1 . $cat -> name . $b2 . $position . '" /></span>';
        } elseif(is_single()){                          //ブログの個別記事ページ
            $categories = get_the_category($post->ID);
            // $cat = $categories[0];
						$cat = get_queried_object();
            if($cat -> parent != 0){
                $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
                                $positionNum = 2;
                foreach($ancestors as $ancestor){
                    $str.= $a1 . get_category_link($ancestor) . $a2 . get_cat_name($ancestor) . $a3 . $positionNum . '" /></span>&nbsp;&raquo;&nbsp;';
                                        $positionNum++;
                }
            }
                        $ancestors = null;
                        $position = is_countable($ancestors)?count($ancestors):+2;
                        $str.= $a1 . get_category_link($cat -> term_id). $a2 . $cat-> cat_name . $a3 . $position . '" /></span>&nbsp;&raquo;&nbsp;';
                        $position = is_countable($ancestors)?count($ancestors):+3;
            $str.= $b1 . $post -> post_title . $b2 . $position.'" /></span>';
        } elseif(is_page()){                            //固定ページ
            if($post -> post_parent != 0 ){
                $ancestors = array_reverse(get_post_ancestors( $post->ID ));
                                $positionNum = 2;
                foreach($ancestors as $ancestor){
                    $str.= $a1 . get_permalink($ancestor) . $a2 . get_the_title($ancestor) . $a3 . $positionNum . '" /></span>&nbsp;&raquo;&nbsp;';
                                        $positionNum++;
                }
            }
                        $ancestors = null;
                        $position = is_countable($ancestors)?count($ancestors):+2;
            $str.= $b1 . $post -> post_title . $b2 . $position.'" /></span>';
        }elseif(is_post_type_archive()){                            //カスタム投稿ページ
          $cat = get_queried_object();
					if($post -> post_parent != 0 ){
							$ancestors = array_reverse(get_post_ancestors( $post->ID ));
															$positionNum = 2;
							foreach($ancestors as $ancestor){
									$str.= $a1 . get_permalink($ancestor) . $a2 . get_the_title($ancestor) . $a3 . $positionNum . '" /></span>&nbsp;&raquo;&nbsp;';
																			$positionNum++;
							}
					}
                        $ancestors = null;
                        $position = is_countable($ancestors)?count($ancestors):+2;
            $str.= $b1 . $cat -> label . $b2 . $position . '" /></span>';
				}elseif(is_date()){                            //日付ベースのアーカイブページ
            if(get_query_var('day') != 0){              //年月日別アーカイブ
            $str.= $a1 . get_year_link(get_query_var('year')). $a2 . get_query_var('year') . '年' . $a3 . '2" /></span>&nbsp;&raquo;&nbsp;';
                $str.= $a1 . get_month_link(get_query_var('year'), get_query_var('monthnum')). $a2 . get_query_var('monthnum') . '月' . $a3 . '3" /></span>&nbsp;&raquo;&nbsp;';
                $str.= $b1 . get_query_var('day'). '日' . $b2 . '4" />';
            } elseif(get_query_var('monthnum') != 0){   //年月別アーカイブ
                $str.= $a1 . get_year_link(get_query_var('year')) . $a2 . get_query_var('year') .'年' . $a3 . '2" /></span>&nbsp;&raquo;&nbsp;';
                $str.= $b1 . get_query_var('monthnum') . '月' . $b2 . '3" />';
            } else {                                     //年別アーカイブ
                $str.= $b1 . get_query_var('year') . '年' .  $b2 . '2" />';
            }
                        $str.= '</span>';
        } else {                                                                         //上記以外
             if(is_search()) {                                          //検索結果表示ページ                    
                        $str.= $b1 . '検索結果';
        }elseif(is_author()){                           //投稿者のアーカイブページ
                        $str.= $b1 . '投稿者 : '. get_the_author_meta('display_name', get_query_var('author'));
        } elseif(is_tag()){                             //タグのアーカイブページ
                        $str.= $b1 . 'タグ : '. single_tag_title( '' , false );
        } elseif(is_attachment()){                      //添付ファイルページ
                        $str.= $b1 . $post -> post_title;
        } elseif(is_404()){                             //404 Not Found ページ
                        $str.= $b1 . '404 Not found';                  
        } else{                                     //その他
            $str.= $b1 . wp_title('', true) ;
                }
                        $str.= $b2  . '2" /></span>';
        }
        $str.= "\n".'</div><!-- /#pankuzu -->'."\n";
    }
    echo $str;
}
// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
} 