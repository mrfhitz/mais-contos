<?php theme_include('header'); ?>

<section class="content">

	<?php if(has_posts()): ?>
		<ul class="items">
			<?php while(posts()): ?>
			<li>
				<article>
					<h1>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					</h1>

					<div class="content">
						<?php
						$mythumb = article_custom_field('thumbnail');
						$hasthumb = (isset($mythumb) && !empty($mythumb) && strpos($mythumb, "content/content") === false);
						if($hasthumb): ?>
							<div class="mc-thumbnail">
								<img src="<?php echo $mythumb ?>" />
							</div>
						<?php endif; ?>
						<div id="aaabb" class="mc-description <?php echo ($hasthumb) ? 'mc-short' : ''; ?>" onclick="location.href = '<?php echo article_url(); ?>';">
							<?php echo article_description(); ?>
						</div>
					</div>

					<footer>
						Publicado há <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> por <?php echo article_author('real_name'); ?>.
					</footer>
				</article>
			</li>
			<?php endwhile; ?>
		</ul>

		<?php if(has_pagination()): ?>
		<nav class="pagination">
			<div class="wrap">
				<div class="previous">
					<?php echo posts_prev(); ?>
				</div>
				<div class="next">
					<?php echo posts_next(); ?>
				</div>
			</div>
		</nav>
		<?php endif; ?>

	<?php else: ?>
		<div class="wrap">
			<h1>Página sem artigos!</h1>
			<p>Looks like you have some writing to do!</p>
		</div>
	<?php endif; ?>

</section>

<?php theme_include('footer'); ?>
