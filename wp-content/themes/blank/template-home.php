<?php /* Template Name: Home */ ?>

<?php get_header(); ?>


<section class="page-slider">
	<div class="page-flexslider flexslider">
		<ul class="slides">
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider1.jpg" alt=""></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider2.jpg" alt=""></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider3.jpg" alt=""></li>
		</ul>
	</div>
	<p class="lead">THIS IS WONDERFUL. WONDER IS A BEAUTIFUL MULTIPURPOSE HTML/CSS THEME.</p>
	<p>For us, the product package represents the core media within shopper marketing.</p>

	<div class="clear"></div>
</section>

<section class="work">
	<h2 class="title"><span class="title-focus">TAKE A LOOK</span> AT OUR WORK</h2>
	<ul class="work-items">
		<li class="work-item">
			<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/work-1.jpg" alt=""></a>
			<div class="work-item-content">
				<h3><a href="#" title="">Bad Dinausor</a></h3>
				<p>Not so bad really.</p>
			</div>
		</li>
		<li class="work-item">
			<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/work-2.jpg" alt=""></a>
			<div class="work-item-content">
				<h3><a href="#" title="">Bad Dinausor</a></h3>
				<p>Not so bad really.</p>
			</div>
		</li>
		<li class="work-item">
			<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/work-3.jpg" alt=""></a>
			<div class="work-item-content">
				<h3><a href="#" title="">Bad Dinausor</a></h3>
				<p>Not so bad really.</p>
			</div>
		</li>
		<li class="work-item">
			<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/work-4.jpg" alt=""></a>
			<div class="work-item-content">
				<h3><a href="#" title="">Bad Dinausor</a></h3>
				<p>Not so bad really.</p>
			</div>
		</li>
	</ul>
	<div class="clear"></div>
</section>

<div class="halves-block">
	<section class="blog half-block">
		<h2 class="title"><span class="title-focus">FROM THE BLOG</span> ALL THE LATEST NEWS</h2>
		<div class="blog-flexslider flexslider">
			<ul class="slides">
				<li class="blog-slide">
					<div class="blog-slide-img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-1.jpg" alt="">
					</div>
					<h3 class="blog-slide-title">YOU ARE SUPER AWESOME</h3>
					<p class="blog-slide-info">
						Posted on: Aug 14, 2013<br>
						Posted by: Admin
					</p>
					<p class="blog-slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. <a href="#" title="">Read more</a></p>
				</li>
				<li class="blog-slide">
					<div class="blog-slide-img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-2.jpg" alt="">
					</div>
					<h2 class="blog-slide-title">HAN SHOT FIRST!</h2>
					<p class="blog-slide-info">
						Posted on: Aug 14, 2013<br>
						Posted by: Admin
					</p>
					<p class="blog-slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. <a href="#" title="">Read more</a></p>
				</li>
			</ul>
		</div>
	</section>
	<section class="videos half-block">
		<h2 class="title"><span class="title-focus">RECENT VIDEO</span> CREATED BY US</h2>
		<div class="video-item">
			<iframe src="http://player.vimeo.com/video/877053?color=ef4f1d" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		</div>
	</section>
	<div class="clear"></div>
</div>






<?php get_footer(); ?>
