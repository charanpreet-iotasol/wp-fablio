<?php /**Template Name: Velflock-Product-Detail*/?>
<?php 
    get_header('inner');
    $page = get_post();
?>

    <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="ttm-page-title-row-inner">
                        <div class="page-title-heading">
                            <h2 class="title"><?php the_title(); ?></h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="<?php echo get_home_url(); ?>">Home</a>
                            </span>
                            <span><?php the_title(); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $productGallery = get_field('product_gallery'); ?>
<div class="site-main">
    <section class="ttm-row project-single-section clearfix">
        <div class="container">
            <div class="row"> <!-- row -->
                <div class="col-lg-12">
                    <div class="ttm-pf-single-content-wrapper ttm-pf-view-left-image">
                        <div class="ttm-pf-single-content-wrapper-innerbox">
                            <div class="ttm-pf-detail-box">
                                <div class="row">
                                    <div class="col-md-12 col-lg-8">
										<div class="velflock_content">
											<?php echo $page->post_content ?>	
										</div>
										<div class="col-md-12 col-lg-8" style="display:contents;"> 
                                        	<div class="ttm_pf_image-wrapper gallery" style="padding-top: 20px;">
                                            	<?php if ($productGallery) : ?>
                                                	<?php foreach ($productGallery as $gallery) : ?>
                                                    	<a href="<?php echo $gallery['sizes']['large']; ?>"  title="<?php  echo $gallery['title'];  ?>">
                                                        	<img class="img-fluid" src="<?php echo $gallery['sizes']['medium']; ?>" style="width: 340px; height: 250px; margin:1%;" alt="image">
                                                    	</a>
													<?php endforeach; ?>
                                            	<?php endif; ?>
                                        	</div><!-- ttm_pf_image-wrapper end -->
                                    	</div>
                                     </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="ttm-pf-single-detail-box ">
                                            <div class="ttm-pf-single-title ttm-bgcolor-skincolor">
                                                <h3><?php echo $page->post_title; ?></h3>
                                            </div>
                                            <div class="featured-content ttm-short-desc">
                                                <div class="page-content">
                                                    <?php echo $page->post_content ?>
                                                </div>
                                            </div>
                                            <ul class="ttm-pf-detailbox-list">
                                                <li><span>Product: </span><span><?php echo $page->post_title; ?> </span></li>          
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--site-main end-->

<?php get_footer();?>