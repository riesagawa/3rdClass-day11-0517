<?php if (is_home() || is_front_page()) : ?>
	<h1 class="header-logo">
		<a href="<?php echo esc_url(home_url('/')); ?>">
			<?php bloginfo('name'); ?>
		</a>
	</h1>
<?php else : ?>
	<div class="header-logo">
		<a href="<?php echo esc_url(home_url('/')); ?>">
			<?php  ?>
		</a>
	</div>
<?php endif; ?>
<div class="header-sub"><?php bloginfo('discription'); ?></div>


<!-- drawer-content -->
<div class="drawer-content">
	<nav class="drawer-nav">
		<ul class="drawer-list">
			<li class="m_icon1 menu-item"><a href="#">メニュー1</a></li>
			<li class="m_icon2 menu-item"><a href="#">メニュー2</a></li>
			<li class="m_icon3 menu-item"><a href="#">メニュー3</a></li>
			<li class="m_icon4 menu-item"><a href="#">メニュー4</a></li>
			<li class="m_icon5 menu-item"><a href="#">メニュー5</a></li>
		</ul>
	</nav>
</div><!-- /drawer-content -->
<div class="drawer-content">
	<?php wp_nav_menu(array(
		'depth' => 1,
		'theme_location' => 'drawer',
		'container' => 'nav',
		'container_class' => 'drawer-nav',
		'menu_class' => 'drawer-list',
	)); ?>
</div>
<!-- ドロワー終了 -->

<!-- header-nav -->
<nav class="header-nav">
    <div class="inner">
      <ul class="header-list">
        <li class="m_icon1 menu-item"><a href="#">メニュー11</a></li>
        <li class="m_icon2 menu-item"><a href="#">メニュー2</a></li>
        <li class="m_icon3 menu-item"><a href="#">メニュー3</a></li>
        <li class="m_icon4 menu-item"><a href="#">メニュー4</a></li>
        <li class="m_icon5 menu-item"><a href="#">メニュー5</a></li>
      </ul>
    </div><!-- /inner -->
	</nav><!-- header-nav -->
	
	<nav class="header-nav">
		<div class="inner">
			<?php wp_nav_menu(
				array(
					'depth' => 1,
					'theme_location' => 'global',
					'container' => 'false',
					'menu_class' => 'header-list',
				)); ?>
		</div>
	</nav>
	<!-- --------------------------------------------------->
	<div id="footer-menu">
		<div class="inner">
			<div class="footer-logo"><a href="/">TF-30</a></div><!-- /footer-logo -->
			<div class="footer-sub">サブタイトルが入りますサブタイトルが入ります</div><!-- /footer-sub -->

			<nav class="footer-nav">
				<ul class="footer-list">
					<li class="menu-item"><a href="#">メニュー1</a></li>
					<li class="menu-item"><a href="#">メニュー2</a></li>
					<li class="menu-item"><a href="#">メニュー3</a></li>
					<li class="menu-item"><a href="#">メニュー4</a></li>
					<li class="menu-item"><a href="#">メニュー5</a></li>
				</ul>
			</nav>

		</div><!-- /inner -->
	</div><!-- /footer-menu -->
	<!-- --------------------------------------------------->
  <div id="footer-menu">
		<div class="inner">
			<div class="footer-logo">
				<a href="<?php echo esc_url(home_url('/')); ?>">
				<?php bloginfo('name'); ?></a>
			</div>
			<div class="footer-sub">
				<?php bloginfo('description'); ?>
			</div>
			<nav class="footer-nav">
				<?php wp_nav_menu(
					array(
						'depth' => 1,
						'theme_location' => 'foot',
						'container' => 'false',
						'menu_class' => 'footer-list',
					)
				); ?>
			</nav>
		</div>
	</div><!-- /footer-menu -->
<!-- --------------------------------------------------->
<?php if( have_posts() ): ?>
<div class="entries m_horizontal">
<!-- 記事の数だけループ -->
<?php while( have_posts() ):the_post() ?>
<!-- entry-item -->
<a href="<?php the_permalink(); //記事のリンクを表示 ?>"
class="entry-item">
	<!-- entry-item-img -->
	<div class="entry-item-img">
		<?php if(has_post_thumbnail()){
			//アイキャッチ画像が設定されていれば大サイズで表示
			the_post_thumbnail('large');
		}else{
			//なければnoimage画像をデフォ表示とする
			eho '<img src="
			'. esc_url(get_template_directory_uri()) .'
			/img/noimg.png" alt="">';
		} ?>
	</div><!-- entry-item-img -->
	<!-- entry-item-body -->
	<div class="entry-item-body">
		<div class="entry-item-meta">
			<?php $category = get_the_category(); ?>
			


		</div>
	</div>

</a><!-- /entry-item -->



	</div>




<!-- --------------------------------------------------->
<!-- --------------------------------------------------->
<?php get_header(); ?>

<!-- pickup -->
<div id="pickup">
	<div class="inner">

		<div class="pickup-items">

			<a href="#" class="pickup-item">
				<div class="pickup-item-img">
					<img src="<?php echo get_template_directory_uri() ?>/img/pickup1.png" alt="">
					<div class="pickup-item-tag">カテゴリ名</div><!-- /pickup-item-tag -->
				</div><!-- /pickup-item-img -->
				<div class="pickup-item-body">
					<h2 class="pickup-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /pickup-item-title -->
				</div><!-- /pickup-item-body -->
			</a><!-- /pickup-item -->

			<a href="#" class="pickup-item">
				<div class="pickup-item-img">
					<img src="<?php echo get_template_directory_uri() ?>/img/pickup2.png" alt="">
					<div class="pickup-item-tag">カテゴリ名</div><!-- /pickup-item-tag -->
				</div><!-- /pickup-item-img -->
				<div class="pickup-item-body">
					<h2 class="pickup-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /pickup-item-title -->
				</div><!-- /pickup-item-body -->
			</a><!-- /pickup-item -->

			<a href="#" class="pickup-item">
				<div class="pickup-item-img">
					<img src="<?php echo get_template_directory_uri() ?>/img/pickup3.png" alt="">
					<div class="pickup-item-tag">カテゴリ名</div><!-- /pickup-item-tag -->
				</div><!-- /pickup-item-img -->
				<div class="pickup-item-body">
					<h2 class="pickup-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /pickup-item-title -->
				</div><!-- /pickup-item-body -->
			</a><!-- /pickup-item -->

		</div><!-- /pickup-items -->

	</div><!-- /inner -->
</div><!-- /pickup -->


<!-- content -->
<div id="content">
	<div class="inner">

		<!-- primary -->
		<main id="primary">

			<!-- entries -->
			<div class="entries">

				<!-- entry-item -->
				<a href="#" class="entry-item">
					<!-- entry-item-img -->
					<div class="entry-item-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/entry1.png" alt="">
					</div><!-- /entry-item-img -->

					<!-- entry-item-body -->
					<div class="entry-item-body">
						<div class="entry-item-meta">
							<div class="entry-item-tag">カテゴリ名</div><!-- /entry-item-tag -->
							<time class="entry-item-published" datetime="2019-01-01">2019/1/1</time><!-- /entry-item-published -->
						</div><!-- /entry-item-meta -->
						<h2 class="entry-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /entry-item-title -->
						<div class="entry-item-excerpt">
							<p>文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入…</p>
						</div><!-- /entry-item-excerpt -->
					</div><!-- /entry-item-body -->
				</a><!-- /entry-item -->

				<!-- entry-item -->
				<a href="#" class="entry-item">
					<!-- entry-item-img -->
					<div class="entry-item-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/entry2.png" alt="">
					</div><!-- /entry-item-img -->

					<!-- entry-item-body -->
					<div class="entry-item-body">
						<div class="entry-item-meta">
							<div class="entry-item-tag">カテゴリ名</div><!-- /entry-item-tag -->
							<time class="entry-item-published" datetime="2019-01-01">2019/1/1</time><!-- /entry-item-published -->
						</div><!-- /entry-item-meta -->
						<h2 class="entry-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /entry-item-title -->
						<div class="entry-item-excerpt">
							<p>文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入…</p>
						</div><!-- /entry-item-excerpt -->
					</div><!-- /entry-item-body -->
				</a><!-- /entry-item -->

				<!-- entry-item -->
				<a href="#" class="entry-item">
					<!-- entry-item-img -->
					<div class="entry-item-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/entry3.png" alt="">
					</div><!-- /entry-item-img -->

					<!-- entry-item-body -->
					<div class="entry-item-body">
						<div class="entry-item-meta">
							<div class="entry-item-tag">カテゴリ名</div><!-- /entry-item-tag -->
							<time class="entry-item-published" datetime="2019-01-01">2019/1/1</time><!-- /entry-item-published -->
						</div><!-- /entry-item-meta -->
						<h2 class="entry-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /entry-item-title -->
						<div class="entry-item-excerpt">
							<p>文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入…</p>
						</div><!-- /entry-item-excerpt -->
					</div><!-- /entry-item-body -->
				</a><!-- /entry-item -->

				<!-- entry-item -->
				<a href="#" class="entry-item">
					<!-- entry-item-img -->
					<div class="entry-item-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/entry4.png" alt="">
					</div><!-- /entry-item-img -->

					<!-- entry-item-body -->
					<div class="entry-item-body">
						<div class="entry-item-meta">
							<div class="entry-item-tag">カテゴリ名</div><!-- /entry-item-tag -->
							<time class="entry-item-published" datetime="2019-01-01">2019/1/1</time><!-- /entry-item-published -->
						</div><!-- /entry-item-meta -->
						<h2 class="entry-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /entry-item-title -->
						<div class="entry-item-excerpt">
							<p>文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入…</p>
						</div><!-- /entry-item-excerpt -->
					</div><!-- /entry-item-body -->
				</a><!-- /entry-item -->

				<!-- entry-item -->
				<a href="#" class="entry-item">
					<!-- entry-item-img -->
					<div class="entry-item-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/entry5.png" alt="">
					</div><!-- /entry-item-img -->

					<!-- entry-item-body -->
					<div class="entry-item-body">
						<div class="entry-item-meta">
							<div class="entry-item-tag">カテゴリ名</div><!-- /entry-item-tag -->
							<time class="entry-item-published" datetime="2019-01-01">2019/1/1</time><!-- /entry-item-published -->
						</div><!-- /entry-item-meta -->
						<h2 class="entry-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /entry-item-title -->
						<div class="entry-item-excerpt">
							<p>文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入…</p>
						</div><!-- /entry-item-excerpt -->
					</div><!-- /entry-item-body -->
				</a><!-- /entry-item -->

				<!-- entry-item -->
				<a href="#" class="entry-item">
					<!-- entry-item-img -->
					<div class="entry-item-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/entry6.png" alt="">
					</div><!-- /entry-item-img -->

					<!-- entry-item-body -->
					<div class="entry-item-body">
						<div class="entry-item-meta">
							<div class="entry-item-tag">カテゴリ名</div><!-- /entry-item-tag -->
							<time class="entry-item-published" datetime="2019-01-01">2019/1/1</time><!-- /entry-item-published -->
						</div><!-- /entry-item-meta -->
						<h2 class="entry-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /entry-item-title -->
						<div class="entry-item-excerpt">
							<p>文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入…</p>
						</div><!-- /entry-item-excerpt -->
					</div><!-- /entry-item-body -->
				</a><!-- /entry-item -->

				<!-- entry-item -->
				<a href="#" class="entry-item">
					<!-- entry-item-img -->
					<div class="entry-item-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/entry7.png" alt="">
					</div><!-- /entry-item-img -->

					<!-- entry-item-body -->
					<div class="entry-item-body">
						<div class="entry-item-meta">
							<div class="entry-item-tag">カテゴリ名</div><!-- /entry-item-tag -->
							<time class="entry-item-published" datetime="2019-01-01">2019/1/1</time><!-- /entry-item-published -->
						</div><!-- /entry-item-meta -->
						<h2 class="entry-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /entry-item-title -->
						<div class="entry-item-excerpt">
							<p>文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入…</p>
						</div><!-- /entry-item-excerpt -->
					</div><!-- /entry-item-body -->
				</a><!-- /entry-item -->

				<!-- entry-item -->
				<a href="#" class="entry-item">
					<!-- entry-item-img -->
					<div class="entry-item-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/entry8.png" alt="">
					</div><!-- /entry-item-img -->

					<!-- entry-item-body -->
					<div class="entry-item-body">
						<div class="entry-item-meta">
							<div class="entry-item-tag">カテゴリ名</div><!-- /entry-item-tag -->
							<time class="entry-item-published" datetime="2019-01-01">2019/1/1</time><!-- /entry-item-published -->
						</div><!-- /entry-item-meta -->
						<h2 class="entry-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /entry-item-title -->
						<div class="entry-item-excerpt">
							<p>文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入…</p>
						</div><!-- /entry-item-excerpt -->
					</div><!-- /entry-item-body -->
				</a><!-- /entry-item -->

				<!-- entry-item -->
				<a href="#" class="entry-item">
					<!-- entry-item-img -->
					<div class="entry-item-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/entry9.png" alt="">
					</div><!-- /entry-item-img -->

					<!-- entry-item-body -->
					<div class="entry-item-body">
						<div class="entry-item-meta">
							<div class="entry-item-tag">カテゴリ名</div><!-- /entry-item-tag -->
							<time class="entry-item-published" datetime="2019-01-01">2019/1/1</time><!-- /entry-item-published -->
						</div><!-- /entry-item-meta -->
						<h2 class="entry-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /entry-item-title -->
						<div class="entry-item-excerpt">
							<p>文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入…</p>
						</div><!-- /entry-item-excerpt -->
					</div><!-- /entry-item-body -->
				</a><!-- /entry-item -->

				<!-- entry-item -->
				<a href="#" class="entry-item">
					<!-- entry-item-img -->
					<div class="entry-item-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/entry10.png" alt="">
					</div><!-- /entry-item-img -->

					<!-- entry-item-body -->
					<div class="entry-item-body">
						<div class="entry-item-meta">
							<div class="entry-item-tag">カテゴリ名</div><!-- /entry-item-tag -->
							<time class="entry-item-published" datetime="2019-01-01">2019/1/1</time><!-- /entry-item-published -->
						</div><!-- /entry-item-meta -->
						<h2 class="entry-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /entry-item-title -->
						<div class="entry-item-excerpt">
							<p>文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入…</p>
						</div><!-- /entry-item-excerpt -->
					</div><!-- /entry-item-body -->
				</a><!-- /entry-item -->

			</div><!-- /entries -->

			<!-- pagenation -->
			<div class="pagenation">
				<span class="page-numbers current">1</span>
				<a class="page-numbers" href="#">2</a>
				<a class="page-numbers" href="#">3</a>
				<a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
			</div><!-- /pagenation -->

		</main><!-- /primary -->

		<!-- secondary -->
		<aside id="secondary">

			<!-- widget -->
			<div class="widget widget_text widget_custom_html">
				<div class="widget-title">プロフィール</div>

				<div class="wprofile">
					<div class="wprofile-img"><img src="<?php echo get_template_directory_uri() ?>/img/profile.png" alt=""></div>
					<div class="wprofile-content">
						<p>
							テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						</p>
					</div>
					<!-- /wprofile-content -->
					<nav class="wprofile-sns">
						<div class="wprofile-sns-item m_twitter"><a href="" rel="noopener noreferrer" target="_blank"><i class="fab fa-twitter"></i></a></div>
						<div class="wprofile-sns-item m_facebook"><a href="" rel="noopener noreferrer" target="_blank"><i class="fab fa-facebook-f"></i></a></div>
						<div class="wprofile-sns-item m_instagram"><a href="" rel="noopener noreferrer" target="_blank"><i class="fab fa-instagram"></i></a></div>
					</nav>
				</div><!-- /wprofile -->
			</div><!-- /widget -->


			<!-- widget -->
			<div class="widget widget_search">
				<div class="widget-title">検索</div>
				<!-- search-form -->
				<form method="get" class="search-form" action="#">
					<input type="search" class="search-field" value="" placeholder="キーワード" name="s" id="s">
					<button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
				</form><!-- /search-form -->
			</div><!-- /widget -->


			<!-- widget -->
			<div class="widget widget_popular">
				<div class="widget-title">人気記事</div>

				<div class="wpost-items m_ranking">

					<!-- wpost-item -->
					<a class="wpost-item" href="#">
						<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry2.png" alt=""></div>
						<div class="wpost-item-body">
							<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
						</div><!-- /wpost-item-body -->
					</a><!-- /wpost-item -->

					<!-- wpost-item -->
					<a class="wpost-item" href="#">
						<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry1.png" alt=""></div>
						<div class="wpost-item-body">
							<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
						</div><!-- /wpost-item-body -->
					</a><!-- /wpost-item -->

					<!-- wpost-item -->
					<a class="wpost-item" href="#">
						<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry3.png" alt=""></div>
						<div class="wpost-item-body">
							<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
						</div><!-- /wpost-item-body -->
					</a><!-- /wpost-item -->

					<!-- wpost-item -->
					<a class="wpost-item" href="#">
						<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry4.png" alt=""></div>
						<div class="wpost-item-body">
							<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
						</div><!-- /wpost-item-body -->
					</a><!-- /wpost-item -->

					<!-- wpost-item -->
					<a class="wpost-item" href="#">
						<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry5.png" alt=""></div>
						<div class="wpost-item-body">
							<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
						</div><!-- /wpost-item-body -->
					</a><!-- /wpost-item -->

				</div><!-- /wpost-items -->
			</div><!-- /widget -->



			<!-- widget -->
			<div class="widget widget_recent">
				<div class="widget-title">新着記事</div>

				<div class="wpost-items">

					<!-- wpost-item -->
					<a class="wpost-item" href="#">
						<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry7.png" alt=""></div>
						<div class="wpost-item-body">
							<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
						</div><!-- /wpost-item-body -->
					</a><!-- /wpost-item -->

					<!-- wpost-item -->
					<a class="wpost-item" href="#">
						<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry6.png" alt=""></div>
						<div class="wpost-item-body">
							<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
						</div><!-- /wpost-item-body -->
					</a><!-- /wpost-item -->

					<!-- wpost-item -->
					<a class="wpost-item" href="#">
						<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry10.png" alt=""></div>
						<div class="wpost-item-body">
							<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
						</div><!-- /wpost-item-body -->
					</a><!-- /wpost-item -->

					<!-- wpost-item -->
					<a class="wpost-item" href="#">
						<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry7.png" alt=""></div>
						<div class="wpost-item-body">
							<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
						</div><!-- /wpost-item-body -->
					</a><!-- /wpost-item -->

					<!-- wpost-item -->
					<a class="wpost-item" href="#">
						<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry9.png" alt=""></div>
						<div class="wpost-item-body">
							<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
						</div><!-- /wpost-item-body -->
					</a><!-- /wpost-item -->

				</div><!-- /wpost-items -->
			</div><!-- /widget -->

			<div class="widget widget_archive">
				<div class="widget-title">アーカイブ</div>
				<ul>
					<li><a href="#">テキストテキストテキスト</a></li>
					<li><a href="#">テキストテキストテキスト</a></li>
					<li><a href="#">テキストテキストテキスト</a></li>
				</ul>
			</div><!-- /widget -->

		</aside><!-- secondary -->


	</div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>