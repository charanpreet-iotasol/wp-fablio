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

<div class="page">

        <header id="masthead" class="header ttm-header-style-03">
            
            <!-- topbar -->
            <div class="top_bar">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-xl-12 d-flex flex-row align-items-center">
                            <div class="top_bar_contact_item">
                                <a href="">216 E. First Street</a>
                            </div>
                            <div class="top_bar_contact_item">
                                <a href="">Corning, NY 14830</a>
                            </div>
                            
                            <div class="top_bar_contact_item">
                                <div class="header_search">
                                    <a href="#" class="btn-default search_btn"><i class="fa fa-search"></i></a>
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
                            </div>
                            <div class="top_bar_contact_item top_bar_social ml-auto p-0">
                                <ul class="social-icons list-inline">
                                    <li><a class="tooltip-top" href="https://www.facebook.com" rel="noopener" aria-label="facebook" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a></li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- topbar end -->

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
                                    <div class="d-flex flex-row m-auto">
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
                                                        <a href="<?php echo $menu->url ?>" class="mega-menu-link">
                                                            <?php echo $menu->title ?>
                                                        </a>
                                                        <?php if($menu->child_items): ?>
                                                            <ul class="mega-submenu">
                                                                <?php foreach($menu->child_items as $cMenu): ?>
                                                                    <li class="">
                                                                        <a href="<?php echo $cMenu->url ?>">
                                                                            <?php echo $cMenu->title ?>
                                                                        </a>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </nav> 
                                    </div><!-- site-navigation end-->
                                    <!--menu end  -->
                                    <div class="widget_info d-flex flex-row align-items-center">
                                        <div class="widget_icon ttm-textcolor-skincolor"><i class="flaticon-chat"></i></div>
                                        <div class="widget_content">
                                            <h3 class="widget_title"><a href="tel:+91-98966-71704">+91-98966-71704</a></h3>
                                            <p class="widget_desc">Have any Questions?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>