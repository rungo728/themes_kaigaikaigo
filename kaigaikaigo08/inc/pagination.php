<?php
//変数の読み込み
global $pages_num;
// echo $pages_num;

//最大表示件数
global $max_pagesNum;
// echo $max_pagesNum;
?>

<?php
if ($pages_num > $max_pagesNum) : ?>
  <div class="pagination">
    <span class="prev page-numbers prevBtn">前へ</span>
    <?php
    //max_pagesNum記事ごとにページネーションを表示(導入一覧・コラム一覧は12件ごと、タグ一覧は10件ごと)
    $pages = ceil($pages_num / $max_pagesNum);
    for ($i = 1; $i <= $pages; $i++) : ?>
        <span class="<?php
                      //1ページ目の時はcurrentを付与
                      if ($i == 1) {
                        echo 'page-numbers current numBtn';
                      } else {
                        echo 'page-numbers numBtn';
                      }
                      ?>"><?php echo $i; ?></span>
    <?php endfor; ?>

    <span class="next page-numbers nextBtn">次へ</span>
  </div>
<?php endif; ?>