<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package velflock
 */

get_header('inner');
?>
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
    <div class="site-main">
        <section class="ttm-row project-single-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row ttm-pf-single-related-wrapper margin_top50 mb_15">
                            <?php
                            while ( have_posts() ) :the_post();
                                get_template_part( 'template-parts/content', get_post_type() );
                                the_post_navigation(
                                    array(
                                        'prev_text' => '<span class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark">' . esc_html__( 'Previous Category:', 'velflock' ) . '</span> <span class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark">%title</span>',
                                        'next_text' => '<span class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark">' . esc_html__( 'Next Category:', 'velflock' ) . '</span> <span class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark">%title</span>',
                                    )
                                );
                                endwhile; // End of the loop.
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	</div>


<?php get_footer();?>