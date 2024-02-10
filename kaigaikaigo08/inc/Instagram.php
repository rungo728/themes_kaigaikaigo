        <div class="insta-area container">
            <a href="https://www.instagram.com/zenken.care.kaigo/" target="_blank" rel="nofollow" class="insta-title">
                <img src="<?= get_template_directory_uri() ?>/img/instagram_title.png" alt="" width="315" height="64" loading="lazy">
                <h2 class="visually-hidden">Instagram zenken.care.kaigo</h2>
            </a>
            <div class="insta-text">
                <img src="<?= get_template_directory_uri() ?>/img/instagram_text.png" alt="" width="582" height="124" loading="lazy">
                <p class="visually-hidden">当社が運営する介護施設で働く海外介護人材の日々を<br>インスタグラムで配信中！</p>
            </div>
            <div class="insta-box">
                <?php
                    // PHPエラーを非表示
                    error_reporting(0);
                    
                    // Instagram埋め込み用PHP
                    // 
                    // 参考サイト：インスタグラムのタイムライン(一覧)を埋め込む最新の方法Instagram Graph APIの使い方
                    // https://arts-factory.net/insta_api/
                    $instagram = null;
                    $id = '17841453912567935'; // ビジネスアカウントID 
                    $token = 'EAAIBsPodSEIBADt9zDOMYIH7vBBmwVjcOSlmXciKFIZBNY1XAkXctJB0JbrFCvQOnSDwSbU0dNAnVZCZCZAdu0piXlxg1oUs8fdl3MIX4SR1Xe4HVXLDHPAMLBp6mybMctkG3EKkvC8g0Qfpwg9vUVTgoz9wpL3PyNKgljz7qF5wdwEdIpjpSCZAbpvi5KqXvQug79hToPwZDZD'; // 無制限トークン
                    $count = '12'; // 表示する画像数
                    $url = 'https://graph.facebook.com/v14.0/' . $id . '?fields=name,media.limit(' . $count. '){caption,media_url,thumbnail_url,permalink,like_count,comments_count,media_type}&access_token=' . $token;
                    $curl = curl_init();
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    $response = curl_exec($curl);
                    curl_close($curl);
                    if($response){
                        $instagram = json_decode($response);
                        if(isset($instagram->error)){
                        $instagram = null;
                        }
                    }
                ?>
                <div class="container">
                    <ul class="row instagram-list list-unstyled">
                    <?php
                        foreach($instagram->media->data as $value){
                            if($value->media_type=='VIDEO'){
                                $src=$value->thumbnail_url;
                                $video = '<span class="video"></span>';
                            }
                            else{
                                $src=$value->media_url;
                                $video = "";
                            }
                            $link = $value->permalink;
                            $caption = $value->caption;
                            $caption = str_replace(array("\r\n", "\r", "\n"), '', $caption); // 改行削除
                            $caption = mb_substr($caption,0,30,'utf-8'); // 最初の30文字のみ表示
                            $like_count = $value->like_count;
                            $comments_count = $value->comments_count; 
        
                            echo '
                                <li class="my-col">
                                <a href="'.$link.'" target="_blank" rel="nofollow">
                                <img src="'.$src.'" alt="'.$caption.'" width="160" height="160" loading="lazy">'.$video.'
                                <span class="instagram-list-inner">
                                <span class="instagram-list-like">'.$like_count.'</span>
                                <span class="instagram-list-comment">'.$comments_count.'</span>
                                </span>
                                </a>
                                </li> 
                                ';
                        }
                    ?>
                    </ul>
                </div>
            </div>
            <a href="https://www.instagram.com/zenken.care.kaigo/" target="_blank" rel="nofollow" class="insta-btn">
                <img src="<?= get_template_directory_uri() ?>/img/instagram_btn.png" alt="" width="239" height="69" loading="lazy">
                <p class="visually-hidden">zenken.care.kaigoをフォローする</p>
            </a>
                    </div>