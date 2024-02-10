<div class="sidebar-sns">
  <div class="inner">
    <div class="sidebar-sns-head">このページをシェアする</div>
    <!-- /footer-sns-head -->
    <div class="sidebar-sns-buttons">
      <ul>
        <li>
          <a class="m_twitter" href="https://twitter.com/share?url=<?php echo  (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI']; ?>" rel="nofollow" target="_blank">
            <p class="name">X<br class="sp_br"><span class="sm">（旧Twitter）</span></p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-twitter.png" alt="" />
          </a>
        </li>
        <li>
          <a class="m_facebook" href="https://www.facebook.com/share.php?u=<?php echo  (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI']; ?>" rel="nofollow" target="_blank">
            <p class="name">Facebook</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook.png" alt="" />
          </a>
        </li>
        <li>
          <a class="m_line" href="https://social-plugins.line.me/lineit/share?url=<?php echo  (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI']; ?>" rel="nofollow" target="_blank">
            <p class="name">Line</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-line.png" alt="" />
          </a>
        </li>
				<li class="m_url">
          <button type="button" id="copy-page">
            <p id="cAction">URLをコピーする</p>
					  <img src="<?php echo get_template_directory_uri(); ?>/img/icon-copy.png" alt="" />
					</button>
				</li>
      </ul>

    </div>
    <!-- /sidebar-sns-buttons -->
  </div>
  <!-- /inner -->
</div>
<!-- /sidebar-sns -->
