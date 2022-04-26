<?php get_header();?>
<!--site-main start-->
<div class="site-main">
    
	<!--services-section-->
	<section class="ttm-row services-section clearfix">
		<div class="container">
			<!-- row -->
            <?php $groupSection=get_field('section_group');?>
			<div class="row">
				<div class="col-lg-5">
					<div class="margin_right30 res-991-margin_right0">
					<div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-grey ttm-bg spacing-1">
						<div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
							<div class="ttm-col-wrapper-bg-layer-inner"></div>
						</div>
						<div class="layer-content">
							<!-- section title -->
							<div class="section-title">
								<div class="title-header">
									<h2 class="title"><?php echo $groupSection['title'];?></h2>
								</div>
								<div class="title-desc">    
									<p><?php echo $groupSection['description'];?></p>
								</div>
							</div><!-- section title end -->
							<div class="ttm_single_image-wrapper ttm_single_image_hover ml_70 mr_70">
								<img class="img-fluid" src="<?php echo $groupSection['image']['url'];?>" alt="single-01">
								<div class="ttm-play-icon-btn text-center">
									<!-- <div class="ttm-play-icon-animation ttm-play-icon-animation-skincolor">
										<a href="https://youtu.be/7e90gBu4pas" target="_self" class="ttm_prettyphoto">
											<div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-sm ttm-icon_element-style-rounded">
												<i class="fa fa-play ttm-textcolor-skincolor"></i>
											</div>
										</a>
									</div> -->
								</div>
							</div>
							<p class="text-center padding_top30">A Quality Home of <a href="#"><u class="ttm-textcolor-skincolor">Furnishing</u></a></p>
						</div>
					</div></div>
				</div>
  
                <?php if( have_rows('ultimate_quality_section_2') ): ?>
                    <div class="col-lg-7">
                        <div class="row ttm-vertical_sep">
                            <?php while( have_rows('ultimate_quality_section_2') ) : the_row();
                                $heading = get_sub_field('heading');
                                $description = get_sub_field('description');
                                $link = get_sub_field('link');
                                $icon = get_sub_field('icon');
                            ?> 
                            <div class="col-md-6 col-sm-6">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-top-content style1">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <div class="icon">
                                                <?php echo $icon;?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><?php echo $heading;?></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p><?php echo $description;?></p>
                                        </div>
                                        <?php if($link):?>
                                        <a class="ttm-btn btn-inline ttm-btn-size-md ttm-btn-color-skincolor" href="<?php echo $link; ?>">Read More</a>
                                        <?php endif; ?>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div><!-- row end -->
                <?php endif; ?>
			</div>
		</div>
	</section>
	<!--services-section end-->

    <!--padding_top_zero-section end-->
    <section class="ttm-row padding_top_zero-section margin_top90 res-991-margin_top0 bg-layer-equal-height ttm-bgcolor-grey clearfix">
        <div class="container">
            <?php $aboutSection = get_field('about'); ?>
            <?php if( have_rows('about_multiple') ):?>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="padding_top90 res-991-padding_top60">
                            <div class="section-title"> <!-- section title -->
                                <div class="title-header">
                                    <h3><?php echo $aboutSection['small_text'];?></h3>
                                    <h2 class="title"><?php echo $aboutSection['heading'];?></h2>
                                </div>
                                <div class="title-desc">
                                    <p><?php echo $aboutSection['description'];?></p>
                                </div>
                            </div><!-- section title end -->
                            <div class="row">
                            <?php while( have_rows('about_multiple') ) : the_row();  
                                $subText = get_sub_field('text');
                                $subLink1 = get_sub_field('link1');
                                $subLink2 = get_sub_field('link2');
                            ?>
                            <div class="col-sm-6">
                                <ul class="ttm-list ttm-bordered-lists ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                    <li><i class="ti ti-check"></i><span class="ttm-list-li-content"><?php echo $subText;?></span></li>
                                </ul>
                            </div>
                            <?php endwhile; ?>
                            </div>
                            <div class="margin_top20">
                                <div class="d-inline-block">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor margin_right20 margin_top15" href="<?php echo $subLink1;?>">view more</a>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark  margin_top15" href="<?php echo $subLink2;?>">contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-8">
                        <div class="mt_160 text-md-right res-991-margin_top40">
                            <div class="ttm_single_image-wrapper ttm_single_image_hover imagestyle-one res-991-margin_right0">
                                <img class="img-fluid auto_size" src="<?php echo $aboutSection['image']['url'];?>" alt="single-02" height="663" width="504">
                            </div>
                        </div>
                    </div>
                </div>
          <?php endif; ?>
        </div>
    </section>
    <!--padding_top_zero-section end-->

	<!--fid-section-->
	<section class="ttm-row fid-section ttm-bgimage-yes bg-img1 ttm-bg ttm-bgcolor-darkgrey clearfix">
		<div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
		<div class="container">
			<!-- row -->
            <?php $gallerySection = get_field('gallery_section');?>
            <?php if( have_rows('gallery_repeat') ): ?>
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h2 class="title"><?php echo $gallerySection['heading'];?></h2>
                                <div class="margin_top35 text-center">
                                    <p><?php echo $gallerySection['small_text'];?></p>
                                </div>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <div class="row">
                    <?php while( have_rows('gallery_repeat') ): the_row(); 
                        $galleryIcon = get_sub_field('icon');
                        $gallerySpanText = get_sub_field('span_text');
                        $galleryHeadingTitle = get_sub_field('heading_title');
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="ttm-fid inside ttm-fid-with-icon style1">
                                <div class="ttm-fid-icon-wrapper">
                                   <div class="font"><?php echo $galleryIcon;?></div>
                                </div>
                                <div class="ttm-fid-contents">
                                    <h4 class="ttm-fid-inner">
                                        <span   data-appear-animation="animateDigits" 
                                                data-from="0" 
                                                data-to="<?php echo $gallerySpanText;?>" 
                                                data-interval="15" 
                                                data-before="" 
                                                data-before-style="sup" 
                                                data-after=""
                                                data-after-style="sub" 
                                                class="numinate"><?php echo $gallerySpanText;?></span>
                                    </h4>
                                    <h3 class="ttm-fid-title"><?php echo $galleryHeadingTitle;?></h3>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div><!-- row end -->
                <div class="row" style="margin-bottom: 10%;">
                    <div class="col-lg-12 text-center">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark margin_top30" href="<?php echo $gallerySection['button_link'];?>">View More</a>
                    </div>
                    <div class="padding_bottom90 res-991-padding_bottom0"></div>
                </div>
            <?php endif; ?> 
		</div>
	</section>
	<!--fid-section end-->

    <!--padding_zero-section-->
    <?php $sectionTitle4 = get_field('industries_section'); ?>
    <section class="ttm-row padding_zero-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ttm-bg ttm-col-bgcolor-yes ttm-bg ttm-col-bgimage-yes col-bg-img-one ttm-left-span spacing-2">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                            <div class="ttm-col-wrapper-bg-layer-inner"></div>
                        </div>
                        <div class="layer-content">
                            <!-- section title -->
                            <div class="section-title style2">
                                <div class="title-header">
                                    <h3><?php echo $sectionTitle4['heading'];?></h3>
                                    <h2 class="title"><?php echo $sectionTitle4['sub_heading'];?></p></h2>
                                </div>
                                <div class="title-desc"><p><?php echo $sectionTitle4['description'];?></p></div>
                            </div><!-- section title end -->
                        </div>
                    </div><!-- row end -->
                </div>
            </div>
        </div>
    </section>
    <!--padding_zero-section end-->

    <section class="ttm-row padding_top_zero-section mt_210 res-991-margin_top_30 position-relative z-index-2 clearfix">
        <div class="container">
            <?php if( have_rows('slider_section') ): ?>
                <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":840,"settings":{"slidesToShow": 2}},{"breakpoint":650,"settings":{"slidesToShow": 1}}]}'>
                    <?php while( have_rows('slider_section') ) : the_row(); 
                        $imageArray = get_sub_field('image');
                        $imageURL = $imageArray['url'];
                        $sectionHeading = get_sub_field('heading');
                        $sectionDescription = get_sub_field('description');
                        $sectionLink = get_sub_field('link');
                        $buttonLink = get_sub_field('button_link');
                    ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="featured-imagebox featured-imagebox-services style1">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="<?php echo $imageURL;?>" alt="image">
                                </div><!-- featured-thumbnail end-->
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="<?php echo $sectionLink;?>"><?php echo $sectionHeading;?></a></h3>
                                        <div class="ttm-details-link">
                                            <?php if($sectionLink): ?>
                                            <a href="<?php echo $sectionLink;?>"><i class="themifyicon ti-arrow-top-right"></i></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="featured-desc">
                                        <p><?php echo $sectionDescription;?></p>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox end-->
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark margin_top30" href="<?php echo $buttonLink;?>">View More Services!</a>
                </div>
            </div>
        </div>
    </section>

    <!--padding_zero-section-->
    <!-- <section class="ttm-row padding_zero-section ttm-bgcolor-skincolor bg-layer-equal-height clearfix">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                    
                            <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-two ttm-left-span z-index-2">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content">
                                </div>
                            </div>
                            <img class="img-fluid ttm-equal-height-image w-100" src="https://via.placeholder.com/1097x754?text=1097x754+col-bgimage-2.jpg" alt="bg-image">
                        </div>
                        <div class="col-lg-5">
                            <div class="padding_top30 padding_bottom30 text-lg-right res-1199-padding_right15 res-991-padding_left15">
                                <div class="fs-26">Fablio is Operating In The Textile</div>
                                <div class="fs-26"><b>Market Manufacture</b></div>
                            </div>
                            <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-darkgrey ttm-bg ttm-right-span spacing-3 z-index-2 h-auto res-1199-padding_right15">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-col-wrapper-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                       
                                    <div class="section-title">
                                        <div class="title-header">
                                            <h3>MEASUREMENTS</h3>
                                            <h2 class="title">We Take Occupational Health & <b>Safety Measurements </b></h2>
                                        </div>
                                        <div class="title-desc">
                                            <p>Our health experts initiate health promotion solutions that are tailored to working conditions and based on participation.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                           
                                            <div class="featured-icon-box icon-align-before-title style2 padding_right10">
                                                <div class="featured-icon">
                                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-rounded ttm-icon_element-color-skincolor ttm-icon_element-size-xs">
                                                        <div class="fa fa-check"></div>
                                                    </div>
                                                </div>
                                                <div class="featured-title">
                                                    <h3>Safety At Work</h3>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-desc">
                                                        <p>We make workplace safe any aspects for employees</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                           
                                            <div class="featured-icon-box icon-align-before-title style2 padding_left15 res-767-padding_left0">
                                                <div class="featured-icon">
                                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-rounded ttm-icon_element-color-skincolor ttm-icon_element-size-xs">
                                                        <div class="fa fa-check"></div>
                                                    </div>
                                                </div>
                                                <div class="featured-title">
                                                    <h3>Healthy Place</h3>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-desc">
                                                        <p>Activities are perform by experts at enterprise level</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                             
                                    </div>
                                    <div class="ttm-horizontal_sep width-100 margin_top20 margin_bottom20"></div>
                                    <div class="padding_top15">
                                       
                                        <div class="ttm-progress-bar" data-percent="90%">
                                            <div class="progressbar-title">Textile</div>
                                            <div class="progress-bar-inner">
                                                <div class="progress-bar progress-bar-color-bar_skincolor">
                                                    <div class="progress-bar-percent ttm-bgcolor-skincolor" data-percentage="90">90%</div>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <div class="ttm-progress-bar clearfix" data-percent="80%">
                                            <div class="progressbar-title">Manufacture</div>
                                            <div class="progress-bar-inner">
                                                <div class="progress-bar progress-bar-color-bar_skincolor">
                                                    <div class="progress-bar-percent ttm-bgcolor-skincolor" data-percentage="80">80%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--padding_bottom_zero-section end-->

    <!--testimonial-section-->
    <!-- <section class="ttm-row testimonial-section bg-img2 ttm-bg ttm-bgimage-yes clearfix">
        <div class="container">
            <?php //$upper_section = get_field('testimonial_upper_section');?>
            <?php //if( have_rows('testimonial') ): ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="padding_top70 res-991-padding_top0"></div>
                      
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h3><?php// echo $upper_section['title_heading'];?></h3>
                                <h2 class="title"><?php //echo $upper_section['title_title']; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-9 col-lg-10 m-auto">
                        <div class="slick_slider slick-arrows-style1" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":true, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 1}},{"breakpoint":840,"settings":{"slidesToShow": 1}}]}'>
                            <?php //while( have_rows('testimonial') ) : the_row();
                                // $testimonialImageArray = get_sub_field('image');
                                // $testimonialImage = $testimonialImageArray['url'];
                                // $testimonialText = get_sub_field('testimonial_text');
                                // $testimonialCaptionHeading = get_sub_field('testimonial_caption_heading');
                                // $testimonialCaptionLabel = get_sub_field('testimonial_caption_label');
                             ?>
                            <div class="testimonials ttm-testimonial-box-view-style1">
                                <div class="testimonial-avatar">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="<?php //echo $testimonialImage;?>" alt="testimonial-img">
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <blockquote class="testimonial-text"><?php //echo $testimonialText;?></blockquote>
                                    <div class="testimonial-bottom">
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-caption">
                                            <h5><?php// echo $testimonialCaptionHeading;?></h5>
                                            <label><?php //echo $testimonialCaptionLabel;?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php// endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php //endif; ?>
        </div>
    </section> -->
    <!--testimonial-section end-->
    
    <!--blog-section-->
    <section class="ttm-row blog-section clearfix">
        <div class="container">
            <?php $blogUpperSection = get_field('blog_upper_section');  ?>
            <?php if( have_rows('blog') ): ?>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title style2">
                            <div class="title-header">
                                <h3><?php echo $blogUpperSection['blog_title'];?></h3>
                                <h2 class="title"><?php echo $blogUpperSection['blog_heading'];?></h2>
                            </div>
                            <div class="title-desc">
                                <p><?php echo $blogUpperSection['blog_description'];?></p>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <div class="row slick_slider mb_15" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 3}} , {"breakpoint":900,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                    <?php while( have_rows('blog') ) : the_row();
                        $title = get_sub_field('title');
                        // $titleDesc = get_sub_field('title_desc');

                        $raw_content 	    = get_sub_field( 'title_desc' );
                        $trimmed_content	= wp_trim_words( $raw_content, '10' );
                        $clean_excerpt		= apply_filters( 'the_excerpt', $trimmed_content );

                        $titleArray = get_sub_field('link');
                        $titleLink = $titleArray['url'];
                        $blogImageArray = get_sub_field('image');
                        $blogImage = $blogImageArray['url'];
                        ?>
                        <div class="col-lg-4">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post style1">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="<?php echo $blogImage;?>" alt="">
                                </div>
                                <div class="featured-content">
                                    <!-- ttm-box-post-date -->
                                    <!-- <div class="ttm-box-post-date">
                                        <span class="ttm-entry-date">
                                            <time class="entry-date" datetime="2021-03-18T04:16:25+00:00">18<span class="entry-month entry-year">Mar</span></time>
                                        </span>
                                    </div> -->
                                    <!-- ttm-box-post-date end -->
                                    <!-- <div class="post-meta">
                                        <span class="ttm-meta-line byline">John Doe</span>
                                        <span class="ttm-meta-line comments-link">0 Comments</span>
                                    </div> -->
                                    <div class="featured-title">
                                    <?php if( $titleLink ): ?>
                                        <h3><a href="<?php echo esc_url($titleLink);?>"><?php echo $title;?></a></h3>
                                    <?php endif; ?>
                                    </div>
                                    <div class="featured-desc">
                                        <p><?php echo $clean_excerpt;?></p>
                                    </div>
                                    <?php if( $titleLink ): ?>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline" href="<?php echo esc_url($titleLink);?>" tabindex="-1">Read More</a>
                                    <?php endif; ?>
                                </div>
                            </div><!-- featured-imagebox-post end -->
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!--blog-section end-->

    <!--client-section-->
    <!-- <section class="ttm-row client-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <?php //if( have_rows('slider_image') ): ?>
                <div class="row slick_slider" data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "arrows":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 5}}, {"breakpoint":1024,"settings":{"slidesToShow": 4}}, {"breakpoint":777,"settings":{"slidesToShow": 3}},{"breakpoint":575,"settings":{"slidesToShow": 2}},{"breakpoint":400,"settings":{"slidesToShow": 1}}]}'>
                    <?php //while( have_rows('slider_image') ) : the_row();
                        //$sliderArray = get_sub_field('image');
                        //$sliderImage = $sliderArray['url'];
                    ?>
                        <div class="col-lg-12">
                            <div class="client-box">
                                <div class="ttm-client-logo-tooltip" data-tooltip="client-01">
                                    <div class="client-thumbnail">
                                        <img class="img-fluid auto_size" width="160" height="98" src="<?php //echo $sliderImage;?>" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php //endwhile; ?>
                </div>
            <?php //endif; ?>
        </div>
    </section> -->
    <!--client-section end-->

</div><!--site-main end-->

<?php get_footer(); ?>