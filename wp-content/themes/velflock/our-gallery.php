<?php /**Template Name:Velflock-Gallery*/?>
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
                    <?php if( have_rows('our_gallery') ): ?>
                        <div class="row">
                            <?php while( have_rows('our_gallery') ): the_row(); 
                                $galleryImageArray  = get_sub_field('image');
                                $galleryImage       = $galleryImageArray['url'];
                                $gallaryName        = get_sub_field('name');
                                $links              = get_sub_field('links');
                                $raw_content 	    = get_sub_field( 'text' );
                                $trimmed_content	= wp_trim_words( $raw_content, '12' );
                                $clean_excerpt		= apply_filters( 'the_excerpt', $trimmed_content );
                                ?>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <!-- featured-imagebox-team -->
                                    <div class="featured-imagebox featured-imagebox-team style1">
                                        <div class="ttm-team-box-view-overlay">
                                            <div class="featured-thumbnail">
                                                <img style="width:400px; height:250px;" src="<?php echo $galleryImage;?>" alt="image">
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5><a href="<?php echo $links;?>"><?php echo $gallaryName;?></a></h5>
                                            </div>
                                            <p class="team-position"><?php echo $clean_excerpt ;?></p>
                                        </div>
                                    </div><!-- featured-imagebox-team end-->
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
            
    </div><!--site-main end-->
<?php get_footer();?>
