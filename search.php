<?php theme_include('header'); ?>

<h1 class="wrap">Pesquisa: &ldquo;<?php echo search_term(); ?>&rdquo;</h1>

<?php if(has_search_results()): ?>
	<ul class="items content">
		<?php $i = 0; while(search_results()): $i++; ?>
		<li>
			
			<article>
					<h1>
						<a href="<?php echo search_item_url(); ?>" title="<?php echo search_item_title(); ?>"><?php echo search_item_title(); ?></a>
					</h1>

					<div class="content">
						<?php
						$mythumb = search_item_custom_field('thumbnail');
						$hasthumb = (isset($mythumb) && !empty($mythumb) && strpos($mythumb, "content/content") === false);
						if($hasthumb): ?>
							<div class="mc-thumbnail">
								<img src="<?php echo $mythumb ?>" />
							</div>
						<?php endif; ?>
						<div id="aaabb" class="mc-description <?php echo ($hasthumb) ? 'mc-short' : ''; ?>" onclick="location.href = '<?php echo search_item_url(); ?>';">
							<?php echo search_item_description(); ?>
						</div>
					</div>

					<footer>
						Publicado á <time datetime="<?php echo date(DATE_W3C, search_item_time()); ?>"><?php echo relative_time(search_item_time()); ?></time> por <?php echo search_item_author('real_name'); ?>.
					</footer>
				</article>
		</li>
		<?php endwhile; ?>
	</ul>

	<?php if(has_search_pagination()): ?>
	<nav class="pagination">
		<div class="wrap">
			<?php echo search_prev(); ?>
			<?php echo search_next(); ?>
		</div>
	</nav>
	<?php endif; ?>

<?php else: ?>
	<p class="wrap">Infelizmente, não há resultados para &ldquo;<?php echo search_term(); ?>&rdquo;.</p>
<?php endif; ?>

<?php theme_include('footer'); ?>