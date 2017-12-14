		<div class="wrap">
	            <footer id="bottom">
	                <small><span onclick="location.href = '/index.php/admin';">&copy;</span> <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</small>

	                <ul role="navigation">
	                    <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
	                    <?php if(twitter_account()): ?>
	                    <li><a href="<?php echo twitter_url(); ?>">@Twitter</a></li>
						<?php endif; ?>
						<li><a href="https://www.goodreads.com/mrfhitz ">#GoodReads</a></li>
						<li><a href="http://mariogarrido.pt">WebSite</a></li>
	                </ul>
	            </footer>
	        </div>
        </div>
    </body>
</html>
