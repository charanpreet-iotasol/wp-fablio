<?php /** Template Name: Velflock-Collection */?>
<?php get_header('inner');?>
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
        <div class="ttm-row sidebar ttm-sidebar-left clearfix">
            <div class="container">
            <?php if( have_rows('collection') ): ?>
                <div class="row">
                    <div class="col-lg-4 widget-area sidebar-left">
                        <aside class="widget widget-nav-menu">
                            <?php while( have_rows('collection') ): the_row(); 
                                $SubLinks = get_sub_field('links');
                                $SubText = get_sub_field('text');
                                ?>
                                <ul>
                                    <li class="active"><a href="<?php echo $SubLinks;?>"><?php echo $SubText;?></a></li>
                                </ul>
                                <?php endwhile; ?>
                            </aside>
                            <!-- <aside class="widget widget-download with-title">
                                <div class="d-flex download_block">
                                    <div class="download_img_icon">
                                        <img class="img-fluid auto_size" width="46" height="53" src="images/download-pdf.png" alt="download-pdf-img" />
                                    </div>
                                    <div class="padding_left20">
                                        <p class="ttm-textcolor-skincolor margin_bottom0">Case Studies</p>
                                        <h2 class="fs-18">Audit &amp; Assuarance</h2>
                                        <a class="ttm-btn ttm-btn-size-md btn-inline ttm-btn-color-dark ttm-icon-btn-left" href="#"><i class="ti ti-arrow-right"></i> Download (3.5 MB)</a>
                                    </div>
                                </div>
                            </aside> -->
                            <aside class="widget widget-banner">
                                <div class="ttm-col-bgcolor-yes ttm-bgcolor-darkgrey col-bg-img-seven ttm-col-bgimage-yes ttm-bg">
                                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                        <div class="ttm-col-wrapper-bg-layer-inner"></div>
                                    </div>
                                    <div class="layer-content">
                                        <div class="widget-banner-inner">
                                            <h3 class="ttm-textcolor-skincolor">Have Questions?</h3>
                                            <p>Our Client Care Managers Are On Call 24/7 To Answer Your Question.</p>
                                            <ul>
                                                <li><i class="flaticon flaticon-phone-call"></i>+1800 200 4567</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <aside class="widget contact-widget with-title">
                                <h3 class="widget-title">Get in touch</h3>      
                                <ul class="contact-widget-wrapper">
                                    <li><i class="ttm-textcolor-skincolor ti ti-location-pin"></i>Honey Business Center 24 Fifth st., Los Angeles, USA</li>
                                    <li><i class="ttm-textcolor-skincolor ti ti-email"></i><a href="mailto:info@example.com" target="_blank">info@example.com</a></li>
                                    <li><i class="ttm-textcolor-skincolor ti ti-mobile"></i>(+01) 123 456 7890</li>
                                    <li><i class="ttm-textcolor-skincolor ti ti-alarm-clock"></i>Mon to Sat - 9:00am to 6:00pm <br> (Sunday Closed)</li>
                                </ul>
                            </aside>
                        </div>
                        <?php $newCollection = get_field('collection_sub_heading') ;?>
                    <div class="col-lg-8 content-area">
                        <div class="ttm-service-single-content-area">
                            <div class="ttm-service-description">
                                <h3><?php echo $newCollection['heading'];?></h3>
                                <p><?php echo $newCollection['desc'];?></p>
                                <div class="padding_top20 padding_bottom20">
                                    <div class="ttm_fatured_image-wrapper">
                                        <img class="img-fluid" src="<?php echo $newCollection['image']['url'];?>" alt="services-1">
                                    </div>
                                </div>
                                <div class="padding_top15 padding_bottom5">
                                    <h3>The rayon fabrics wholesaler</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor margin_top15">
                                                <li><i class="ti ti-check"></i>
                                                    <div class="ttm-list-li-content">Lorem ipsum dolor sit amet</div>
                                                </li>
                                                <li><i class="ti ti-check"></i>
                                                    <div class="ttm-list-li-content">Lorem ipsum dolor sit amet, consectetur</div>
                                                </li>
                                                <li><i class="ti ti-check"></i>
                                                    <div class="ttm-list-li-content">Cursus metus aliquam eleifend mi in.</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor margin_top15">
                                                <li><i class="ti ti-check"></i>
                                                    <div class="ttm-list-li-content">Maecenas volutpat blandit aliquam etiam erat</div>
                                                </li>
                                                <li><i class="ti ti-check"></i>
                                                    <div class="ttm-list-li-content">Lorem ipsum dolor sit amet, consectetur</div>
                                                </li>
                                                <li><i class="ti ti-check"></i>
                                                    <div class="ttm-list-li-content">Donec et odio pellentesque diam volutpat</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="padding_top30 padding_bottom15">
                                    <h3>Provide In-house trainings</h3>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="ttm_single_image-wrapper text-left padding_top15">
                                                <img class="img-fluid" src="https://via.placeholder.com/623x319?text=623x319+single_img10.jpg" alt="single-img-10">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="ttm_single_image-wrapper text-left padding_top15">
                                                <img class="img-fluid" src="https://via.placeholder.com/622x319?text=622x319+single_img11.jpg" alt="single-img-11">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="padding_top30 mb_15">
                                    <h3>Understand your business</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,&nbsp;<u>when an unknown printer took a galley</u>&nbsp;of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
                <?php endif; ?>
            </div>
        </div>
    </div><!--site-main end-->
        
<?php get_footer();?>
        
        
 