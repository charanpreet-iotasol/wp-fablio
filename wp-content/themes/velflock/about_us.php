<?php /**Template Name: Velflock-About-Us */ ?>
<?php get_header('inner'); ?>
       
        <!-- page-title -->
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
        <!-- page-title end -->

        <!--site-main start-->
        <div class="site-main">
            
            <!--about-section-->
            <?php $aboutUs = get_field('about_us_info');?>
            <section class="ttm-row about-section clearfix">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="padding_top20 res-991-padding_top40">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3><?php echo $aboutUs['about_header'];?></h3>
                                        <h2 class="title"><?php echo $aboutUs['about_title'];?></h2>
                                    </div>
                                    <div class="title-desc">
                                        <span><?php echo $aboutUs['about_description'];?></span>
                                    </div>
                                </div><!-- section title end -->
                                <div class="ttm-highlight-quote margin_top35 clearfix">
                                    <!-- <blockquote class=" ttm-bgcolor-grey"><p><?php echo $aboutUs['hightlight_description'];?></p></blockquote> -->
                                    <div class="d-flex align-items-center">   
                                        <!-- <div class="d-inline-block">                                             
                                            <img class="img-fluid auto_size" width="90" height="89" src="https://via.placeholder.com/90x90?text=90x90+author-quote.png" alt="author-quote">
                                        </div> -->
                                        <!-- <div class="d-inline-block padding_left30">                                             
                                            <h2 class="fs-20 mb-0">Jhon Martin</h2>
                                            <label>Chairnan and founder</label>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="ttm_single_image-wrapper text-left">
                                <img class="img-fluid" src="<?php echo $aboutUs['image']['url'];?>" alt="single-09">
                            </div>
                        </div>
                    </div><!-- row end -->                
                </div>
            </section>
            <!--about-section end-->   

            <!--about-section-->
            <?php $aboutPage = get_field('about');?>
            <section class="ttm-row about-section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="ttm_single_image-wrapper text-left">
                                <img class="img-fluid" src="<?php echo $aboutPage['image']['url'];?>" alt="single-09">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="padding_top20 res-991-padding_top40">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3><?php echo $aboutPage['about_header'];?></h3>
                                        <h2 class="title"><?php echo $aboutPage['about_title'];?></h2>
                                    </div>
                                    <div class="title-desc">
                                        <span><?php echo $aboutPage['about_description'];?></span>
                                    </div>
                                </div><!-- section title end -->
                                <div class="ttm-highlight-quote margin_top35 clearfix">
                                    <!-- <blockquote class=" ttm-bgcolor-grey"><p><?php //echo $aboutPage['hightlight_description'];?></p></blockquote> -->
                                    <div class="d-flex align-items-center">   
                                        <!-- <div class="d-inline-block">                                             
                                            <img class="img-fluid auto_size" width="90" height="89" src="https://via.placeholder.com/90x90?text=90x90+author-quote.png" alt="author-quote">
                                        </div> -->
                                        <!-- <div class="d-inline-block padding_left30">                                             
                                            <h2 class="fs-20 mb-0">Jhon Martin</h2>
                                            <label>Chairnan and founder</label>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row end -->                
                </div>
            </section>
            <!--about-section end-->

            <!-- padding_zero-section -->
            <section class="ttm-row padding_zero-section clearfix">
                <div class="container">
                    <?php if( have_rows('about_third_section') ): ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="featuredbox-number mb_90 res-991-margin_bottom0 mt_15 res-991-margin_top0">
                                    <div class="row">
                                        <?php while( have_rows('about_third_section') ): the_row(); 
                                                $image = get_sub_field('image');
                                                $heading = get_sub_field('heading');
                                                $desc = get_sub_field('desc');
                                                ?>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <!--featured-icon-box-->
                                                    <div class="featured-icon-box icon-align-top-content style7">
                                                        <div class="featured-icon">
                                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-size-sm ttm-icon_element-color-skincolor ttm-icon_element-style-square">
                                                                <span class="fea_num">
                                                                    <i class="ttm-num ti-info"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content">
                                                            <div class="featured-title">
                                                                <h3><?php echo $heading;?></h3>
                                                            </div>
                                                            <div class="featured-desc">
                                                                <span><?php echo $desc;?></span>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-icon-box end-->
                                                </div>
                                            <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div><!-- row end -->  
                    <?php endif; ?>
                </div>
            </section>
            <!-- padding_zero-section end -->
            
            <!--services-section-->
            <section class="ttm-row services-section ttm-bgcolor-grey clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="padding_top75 res-991-padding_top0"></div>
                        
                            <div class="section-title title-style-center_text">
                                <div class="title-header">
                                    <h3>BUSINESS GROW</h3>
                                    <h2 class="title">Your Business <b>Grow & Successful </b></h2>
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="row slick_slider mb_15  " data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":840,"settings":{"slidesToShow": 2}},{"breakpoint":650,"settings":{"slidesToShow": 1}}]}'>
                        <!-- <div class="col-md-4 col-sm-6">
                          
                            <div class="featured-imagebox featured-imagebox-services style1">
                                
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="https://via.placeholder.com/768x512?text=768x512+services-01.jpg" alt="image">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="fabric-printing.html">Fabric Printing</a></h3>
                                        <div class="ttm-details-link">
                                            <a href="fabric-printing.html"><i class="themifyicon ti-arrow-top-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Have been engaged with modern units for all requirements of continuous bleach.</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
            <!--services-section end -->
          
        </div><!--site-main end-->

<?php get_footer();?>