<?php /**Template Name: Velflock-Listing */?>
<?php get_header('inner');?>

    <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="ttm-page-title-row-inner">
                        <div class="page-title-heading">
                            <h2 class="title"><?php the_title();?></h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="<?php echo get_home_url();?>">Home</a>
                            </span>
                            <span><?php the_title();?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--site-main start-->
    <div class="site-main">
        
        <!--grid-section-->
        <section class="ttm-row grid-section clearfix">
            <div class="container">
                <?php $pages = get_pages(['parent' => get_the_ID()]); 
                    if( count($pages) > 0 ): ?>
                    <div class="row">
                        <?php foreach($pages as $page): ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <!-- featured-imagebox-team -->
                                <div class="featured-imagebox featured-imagebox-team style1">
                                    <div class="ttm-team-box-view-overlay">
                                        <div class="featured-thumbnails ">
                                            <?php echo get_the_post_thumbnail($page->ID, 'full' ); ?>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5><a href="<?php echo get_page_link().$page->post_name?>"><?php echo $page->post_title;?></a></h5>
                                        </div>
                                        <div class="page-content"><?php echo $page->post_content ;?></div>
                                    </div>
                                </div><!-- featured-imagebox-team end-->
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>

    </div><!--site-main end-->
    
<?php get_footer();?>