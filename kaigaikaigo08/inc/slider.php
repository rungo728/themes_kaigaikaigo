<div class="sec07">
	<div class="sec07_block">
		<div class="sec__inner">
			<div class="headArea">

				<?php if (is_home() || is_front_page()) : ?>
					<h2 class="ttl">
						事例
					</h2>
				<?php else : ?>
					<h2 class="ttl">
						<span class="visually-hidden">ZENKENNIHONGO介護の活用事例</span>
						<img src="<?= get_template_directory_uri() ?>/img/logo.png" class="logo-img" loading="lazy" alt="ZENKENNIHONGO介護の活用事例"><br class="sp_br">の活用事例
					</h2>
				<?php endif; ?>
			</div>
			<div class="sec07_slider">
					<?php 
						$args = array(
							'numberposts' => 6,
							'post_type' => 'case',
							'taxonomy' => 'case',
							'paged' => $paged,
							'status' => 'publish',
							'orderby' => 'rand'
						);
						$posts = get_posts($args);
						//記事数を取得
						$pages_num = count($posts);
						$count = 1;
						if ($posts) : foreach ($posts as $post) : setup_postdata($post); 
					?>
				<div class="item slick-slide">

					<a href="<?php the_permalink();?>">
						<div class="item_box">
							<div class="img_box">
								<img src="<?php
														//アイキャッチ画像があれば表示
														if (has_post_thumbnail()) {
																$image_id = get_post_thumbnail_id();
																$image_url = wp_get_attachment_image_src($image_id, true);
																echo $image_url[0];
														} else {
																echo "https://placehold.jp/500x300.png";
														}
														?>" alt="<?php the_title();?>のサムネイル">
							</div>
							<div class="box-body">

								<p class="<?php
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
														?>
								</p>
								<p class="catch"><?php the_title(); ?></p>
								<p class="companyName">                                    
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
					</a>
				</div>
				<?php endforeach; ?>
				<?php else : ?>
						<p>記事はまだありません。</p>
				<?php endif;
				wp_reset_postdata();
				?>
			</div>
			<div class="caseBtn">
					<a href="<?php echo home_url(); ?>/case">導入事例をもっと見る</a>
			</div>
		</div>
	</div>
</div>