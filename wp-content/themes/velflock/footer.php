<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package velflock
 */
?> 
    <footer class="footer widget-footer ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
        <div class="first-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 widget-area">
                        <div class="widget widget_text clearfix">
                            <div class="d-sm-flex align-items-center">
                                <div class="site-branding ">
                                    <a class="home-link" href="<?php echo get_home_url(); ?>" title="Fablio" rel="home"><br>
                                        <img id="logo-img" height="70" width="210" class="img-fluid auto_size" src="<?php echo get_template_directory_uri(); ?>/images/logo-img.png" alt="logo-img"><br>
                                    </a>
                                </div>
                                <p><!-- site-branding end --></p>
                                <div class="textwidget widget-text">
                                    <!--<p>Fablio is operating in the textile market, as the manufacture and trader. As years go by the range of produced textiles products has increased.</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 widget-area">
                        <div class="widget widget_social clearfix">
                            <div class="social-icons text-lg-right">
                                <ul class="social-icons list-inline">
                                    <li><a class="tooltip-top" href="https://m.facebook.com/pages/category/Jewelry---Watches-Store/Diamond-Velflock-233659876649521/" rel="noopener" aria-label="facebook" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="tooltip-top" href="https://www.instagram.com/velflock/" rel="noopener" aria-label="Instagram" data-tooltip="Instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_text margin_right10 clearfix">
                            <h3 class="widget-title">Get Free Estimate</h3>
                            <div class="textwidget widget-text">
                                <div class="call_detail">
                                    <h3 class="fs-24"><a href="tel:+9896671704">+91-98966-71704</a></h3>
                                    <div class="padding_top10 padding_bottom10">
                                        <p>Our online scheduling and payment system is safe.</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white w-100 text-center" href="http://localhost/fablio/contact-us/">Request Online Form</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                            <h3 class="widget-title">Products</h3>
                            <ul id="menu-footer-quick-links" class="menu">
                                <?php
                                if (is_active_sidebar('second-footer-widget-area')) {
                                    dynamic_sidebar( 'second-footer-widget-area' );
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget-recent-post clearfix">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul class="widget-post ttm-recent-post-list">

                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget-latest-tweets clearfix">
                            <h3 class="widget-title">Contact Us</h3>
                            <ul class="widget_contact_wrapper">
                                <li><i class="ttm-textcolor-skincolor fa fa-map-marker"></i>Barsat Rd, Cheema Enclave, Noorwala, Panipat, Haryana 132103, India</li>
                                <li><i class="ttm-textcolor-skincolor fa fa-phone"></i><a href="tel:+9896671704">+91-98966-71704</a></li>
                                <li><i class="ttm-textcolor-skincolor fa fa-envelope-o"></i><a href="mailto:info@example.com">info@velflock.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 widget-area">
                        <div class="widget newsletter_widget clearfix">
                            <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                                <div class="mailchimp-inputbox clearfix" id="subscribe-content"> 
                                    <input type="text" name="NAME" id="txtname" placeholder="Your Name *" required="">
                                    <input type="email" name="EMAIL" id="txtemail" placeholder="Your Email *" required="">
                                    <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Subscribe us<i class="fa fa-caret-right" aria-hidden="true"></i></button>
                                </div>
                                <div id="subscribe-msg"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <span class="cpy-text">Copyright © 2022 <a href="<?php echo get_home_url(); ?>" class="ttm-textcolor-skincolor font-weight-500">Velflock Limited</a> All rights reserved.</span>
                            <ul class="footer-nav-menu">
                                <li><a href="http://localhost/fablio/about-us/">About Us</a></li>
                                <li><a href="http://localhost/fablio/contact-us/">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->
</div><!-- page end -->

<?php wp_footer(); ?>
</body>
</html>
