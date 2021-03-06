<?php get_header(); ?>

<div class="sticky-register-footer">
	<div class="container">
		<div class="pull-left">
			<p>
				Register to <span class="italic-text">stay updated</span>
				<a href="javascript:void(0)" class="subscribe-stf">Subscribe <i class="fa fa-chevron-right"></i>&nbsp;</a>
			</p>
		</div>
		<div class="pull-right">
			<p>
				Chat <span class="italic-text">with us</span>
				<a class="link-rm-default launch-chatbox" href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/chat.png" alt=""></a>
			</p>
		</div>
	</div>
</div>


<section class="about-us-cover">
	<img src="<?php bloginfo('template_url'); ?>/images/practices/header-pic.jpg" alt="about us">
</section>


<section class="about-sinclair-wt">
	<div class="container">
		<div class="row">
			<?php
			while(have_posts()):
			the_post();
			$content = split_content();
			?>
			<div class="col-sm-4">
				<?php echo wpautop($content[0]); ?>
			</div>
			<div class="col-sm-4">
				<?php echo wpautop($content[1]); ?>
			</div>
			<div class="col-sm-4">
				<?php echo wpautop($content[2]); ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<section class="practices">
	<div class="container">




		<?php
		$args = array(
			'post_type' => 'practice_post'
		);

		$post_query = new WP_Query($args);
		if($post_query->have_posts() ) {
		$post_counter = 0;
		while($post_query->have_posts() ) :
		$post_counter++;
		$post_query->the_post();
		?>

			<div class="row <?php if($post_counter%2 == 0){echo "practice-item-l";}else{echo "practice-item-r";} ?>" >
				<div class="col-sm-4 text-box ">
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>
					<div class="text-box-read-more">
						<a href="<?php the_permalink(); ?>">Find out more</a>
					</div>
				</div>
				<div class="col-sm-8 practice-image pad0">
					<?php the_post_thumbnail('full'); ?>
				</div>
			</div>

		<?php  endwhile; } ?>


	</div>
</section>

<?php get_footer(); ?>
