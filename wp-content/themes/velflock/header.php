<?php 
	$menuLocations = get_nav_menu_locations();
	$navbar_items = wp_get_nav_menu_items('Navigation_Menu');
	$child_items = [];
	foreach ($navbar_items as $key => $item) {
		if ($item->menu_item_parent) {
			array_push($child_items, $item);
			unset($navbar_items[$key]);
		}
	}
	foreach ($navbar_items as $item) {
		foreach ($child_items as $key => $child) {			
			if ($child->menu_item_parent == $item->ID) {
				if (!$item->child_items) {
					$item->child_items = [];
				}
				array_push($item->child_items, $child);
				unset($child_items[$key]);
			}
		}
	}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo(); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>	
	<div class="page"><!--Page started Header 1 -->
		<header id="masthead" class="header ttm-header-style-01"><!--header start-->
			<!-- site-header-menu -->
			<div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
				<div class="site-header-menu-inner ttm-stickable-header">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<!--site-navigation -->
								<div class="site-navigation d-flex flex-row align-items-center justify-content-between">
									<!-- site-branding -->
									<div class="site-branding ">
										<a class="home-link" href="<?php echo get_home_url(); ?>" title="Fablio" rel="home">
											<img id="logo-img" height="70" width="210" class="img-fluid auto_size" src="<?php echo get_template_directory_uri(); ?>/images/logo-img.png"  alt="logo-img">
										</a>
									</div><!-- site-branding end -->
									<div class="site-description mr-auto">
										<h2>For tomorrow’s people.</h2>
									</div>
									<div class="d-flex flex-row">
										<div class="btn-show-menu-mobile menubar menubar--squeeze">
											<span class="menubar-box">
												<span class="menubar-inner"></span>
											</span>
										</div>
										<!-- menu -->
										<nav class="main-menu menu-mobile" id="menu">
											<ul class="menu">
												<?php foreach($navbar_items as $menu): ?>
													<li class="mega-menu-item">
														<a href="<?php echo $menu->url ?>" class="mega-menu-link"><?php echo $menu->title ?></a>
														<?php if($menu->child_items):?>
															<ul class="mega-submenu">
																<?php foreach($menu->child_items as $cMenu):?>
																	<li><a href="<?php echo $cMenu->url ?>"><?php echo $cMenu->title ?></a></li>
																<?php endforeach; ?>
															</ul>
														<?php endif; ?>
													</li>
												<?php endforeach; ?>
											</ul>
										</nav> 
										<!--menu end  -->
										<!-- header_extra -->
										<div class="header_extra d-flex flex-row align-items-center justify-content-end">
											<div class="header_search">
												<a href="#" class="btn-default search_btn"><i class="ti ti-search"></i></a>
												<div class="header_search_content">
													<div class="header_search_content_inner">
														<a href="#" class="close_btn"><i class="ti ti-close"></i></a>
														<form id="searchbox" method="get" action="#">
															<input class="search_query" type="text" id="search_query_top" name="s" placeholder="Enter Keyword" value="">
															<button type="submit" class="btn close-search"><i class="ti ti-search"></i></button>
														</form>
													</div>
												</div>
											</div>
										</div><!-- header_extra end -->
									</div>
								</div><!-- site-navigation end-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- site-header-menu end-->
		</header>
		<!--header end-->

        <!-- Banner -->
		<?php if(is_front_page()): ?>
		<?php if( have_rows('banner') ): ?>
			<div class="banner_slider_wrapper">
            	<div class="slider-textarea"><h4>Enquiry Call: +91-98966-71704</h4></div>
            	<div class="slider-social-links-wrapper">
					<ul class="social-icons">
						<li class="tm-social-facebook"><a target="_blank" href="https://m.facebook.com/pages/category/Jewelry---Watches-Store/Diamond-Velflock-233659876649521/"><i class="fa fa-facebook"></i></a></li>
						<!-- <li class="tm-social-twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li> -->
						<li class="tm-socail-instagram"><a target="_blank" href="https://www.instagram.com/velflock/"><i class="fa fa-instagram"></i></a></li>
						<!-- <li class="tm-social-linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li> -->
					</ul>
            	</div>
				<div class="banner_slider banner_slider_wide">
					<?php while( have_rows('banner') ): the_row(); 
						$small_text = get_sub_field('small_text');
						$heading = get_sub_field('heading');
						$subheading = get_sub_field('subheading');
						$imageArray = get_sub_field('image');
						$imageURL = $imageArray['url'];
						$linkPage1 = get_sub_field('link_1');
						$linkPage2 = get_sub_field('link_2');
					?>
					<div class="slide">
						<div class="slide_img" style="background-image: url(<?php echo $imageURL; ?>)" ></div>
						<div class="slide__content">
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<div class="slide__content--headings ttm-textcolor-white text-center">
											<h3  data-animation="fadeInDown"><?php echo $small_text;?></h3>
											<h2  data-animation="fadeInDown"><?php echo $heading;?></h2>
											<p  data-animation="fadeInDown"><?php echo $subheading;?></p>
											<div class="d-inline-block margin_top30 res-767-margin_top20" data-animation="fadeInUp" data-delay="1.4">
												<a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor margin_right15" href="<?php echo $linkPage1;?>">more details</a>
												<a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white" href="<?php echo $linkPage2;?>">get a quote</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
			</div><!-- Banner end-->
		<?php endif; ?>
		<?php endif; ?>
