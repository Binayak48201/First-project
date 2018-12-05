<?php 
     $allproducts = $query->selectAll('products');
?>
       <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
        <main id="mainContent" class="main-content">
            <div class="page-container ptb-10">
                <div class="container">
                    
                    <?php 
                        include 'views/master/upperbody.php';
                     ?>

                    <section class="section latest-deals-area ptb-30">
                        <header class="panel ptb-15 prl-20 pos-r mb-30">
                            <h3 class="section-title font-18">Latest Deals</h3>
                            <a class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
                        </header>

                        <div class="row row-masnory row-tb-20">
                            <div class="col-sm-6 col-lg-4">

                            <?php foreach ($allproducts as $asd) : ?>
                                <div class="deal-single panel">
                                    <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" 
                                        data-bg-img="assets/images/deals/deal_06.jpg">
                                        <div class="label-discount left-20 top-15">
                                            <?= $asd->discount; ?>
                                        </div>
                                        <div class="time-left bottom-15 right-20 font-md-14">
                                            <span>
                                                <i class="ico fa fa-clock-o mr-10"></i>
                                                <span class="t-uppercase" data-countdown="<?= $asd->count_down; ?>"></span>
                                            </span>
                                        </div>
                                        <div class="deal-store-logo">
                                            <img src="assets/images/brands/brand_06.jpg" alt="">
                                        </div>
                                    </figure>
                                    <div class="bg-white pt-20 pl-20 pr-15">
                                        <div class="pr-md-10">
                                            <h3 class="deal-title mb-10">
                                                <a href="/views/master/product.php?show=<?php echo $asd['id']; ?>">
                                                    <?= $asd->title; ?>
                                                </a>
                                            </h3>
                                            <ul class="deal-meta list-inline mb-10 color-mid">
                                                <li><i class="ico fa fa-map-marker mr-10"></i>United Kingdom</li>
                                                <li><i class="ico fa fa-shopping-basket mr-10"></i>134 Bought</li>
                                            </ul>
                                            <p class="text-muted mb-20"><?= $asd->body; ?></p>
                                        </div>
                                        <div class="deal-price pos-r mb-15">
                                            <h3 class="price ptb-5 text-right">
                                                <span class="price-sale">
                                                    <?= $asd->previous_price; ?>
                                                         
                                                </span>
                                                <?= $asd->current_price; ?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </section>

                    <section class="section latest-coupons-area ptb-30">
                        <header class="panel ptb-15 prl-20 pos-r mb-30">
                            <h3 class="section-title font-18">Latest Deals</h3>
                            <a class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
                        </header>

                        <div class="latest-coupons-slider owl-slider" data-autoplay-hover-pause="true" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="30" data-nav-speed="false" data-items="1" data-xxs-items="1" data-xs-items="2" data-sm-items="2" data-md-items="3" data-lg-items="4">
                            <div class="coupon-item">
                                <div class="coupon-single panel t-center">
                                    <div class="ribbon-wrapper is-hidden-xs-down">
                                        <div class="ribbon">Featured</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="assets/images/coupons/coupon_01.jpg" alt="">
                                            </div>
                                            <!-- end media -->
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="deal-meta list-inline mb-10">
                                                    <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>125 Used</li>
                                                </ul>
                                                <h4 class="color-green mb-10 t-uppercase">10% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                <a href="#">10% off select XPS & Alienware laptops</a>
                            </h5>
                                                <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 01/01/2018</p>
                                                <div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_01">Get Coupon Code</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                            <div class="coupon-item">
                                <div class="coupon-single panel t-center">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="assets/images/coupons/coupon_02.jpg" alt="">
                                            </div>
                                            <!-- end media -->
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="deal-meta list-inline mb-10">
                                                    <li class="color-muted"><i class="ico fa fa-map-marker mr-5"></i>California</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>13 Used</li>
                                                </ul>
                                                <h4 class="color-green mb-10 t-uppercase">15% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                <a href="#">15% off 2 select Amazon Fire cases</a>
                            </h5>
                                                <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 05/02/2018</p>
                                                <div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_02">Show Code</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                            <div class="coupon-item">
                                <div class="coupon-single panel t-center">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="assets/images/coupons/coupon_03.jpg" alt="">
                                            </div>
                                            <!-- end media -->
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="deal-meta list-inline mb-10">
                                                    <li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>425 Used</li>
                                                </ul>
                                                <h4 class="color-green mb-10 t-uppercase">20% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                <a href="#">Flat 40% off hotel bookings in 10 cities</a>
                            </h5>
                                                <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 15/01/2018</p>
                                                <div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_03">See Sale</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                            <div class="coupon-item">
                                <div class="coupon-single panel t-center">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="assets/images/coupons/coupon_04.jpg" alt="">
                                            </div>
                                            <!-- end media -->
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="deal-meta list-inline mb-10">
                                                    <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>230 Used</li>
                                                </ul>
                                                <h4 class="color-green mb-10 t-uppercase">30% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                <a href="#">There is no place like home 25% off</a>
                            </h5>
                                                <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 02/03/2018</p>
                                                <div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_04">Print Code</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                            <div class="coupon-item">
                                <div class="coupon-single panel t-center">
                                    <div class="ribbon-wrapper is-hidden-xs-down">
                                        <div class="ribbon">Featured</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="assets/images/coupons/coupon_05.jpg" alt="">
                                            </div>
                                            <!-- end media -->
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="deal-meta list-inline mb-10">
                                                    <li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>86 Used</li>
                                                </ul>
                                                <h4 class="color-green mb-10 t-uppercase">10% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                <a href="#">10% off $399+ refurbished laptops</a>
                            </h5>
                                                <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 20/02/2018</p>
                                                <div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_05">Show Code</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                            <div class="coupon-item">
                                <div class="coupon-single panel t-center">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="assets/images/coupons/coupon_06.jpg" alt="">
                                            </div>
                                            <!-- end media -->
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="deal-meta list-inline mb-10">
                                                    <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>24 Used</li>
                                                </ul>
                                                <h4 class="color-green mb-10 t-uppercase">25% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                <a href="#">There is no place like home 25% off</a>
                            </h5>
                                                <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 14/01/2018</p>
                                                <div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_06">Show Coupon</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section stores-area stores-area-v1 ptb-30">
                        <header class="panel ptb-15 prl-20 pos-r mb-30">
                            <h3 class="section-title font-18">Popular Stores</h3>
                            <a href="stores_01.html" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">All Stores</a>
                        </header>
                        <div class="popular-stores-slider owl-slider" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="20" data-items="2" data-xxs-items="2" data-xs-items="2" data-sm-items="3" data-md-items="5" data-lg-items="6">
                            <div class="store-item t-center">
                                <a href="store_single_01.html" class="panel is-block">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <div class="store-logo">
                                            <img src="assets/images/brands/brand_01.jpg" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name ptb-10">Amazon</h6>
                                </a>
                            </div>
                            <div class="store-item t-center">
                                <a href="store_single_01.html" class="panel is-block">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <div class="store-logo">
                                            <img src="assets/images/brands/brand_02.jpg" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name ptb-10">Ashford</h6>
                                </a>
                            </div>
                            <div class="store-item t-center">
                                <a href="store_single_01.html" class="panel is-block">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <div class="store-logo">
                                            <img src="assets/images/brands/brand_03.jpg" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name ptb-10">DELL</h6>
                                </a>
                            </div>
                            <div class="store-item t-center">
                                <a href="store_single_01.html" class="panel is-block">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <div class="store-logo">
                                            <img src="assets/images/brands/brand_04.jpg" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name ptb-10">Card Cash</h6>
                                </a>
                            </div>
                            <div class="store-item t-center">
                                <a href="store_single_01.html" class="panel is-block">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <div class="store-logo">
                                            <img src="assets/images/brands/brand_05.jpg" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name ptb-10">Finish Line</h6>
                                </a>
                            </div>
                            <div class="store-item t-center">
                                <a href="store_single_01.html" class="panel is-block">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <div class="store-logo">
                                            <img src="assets/images/brands/brand_06.jpg" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name ptb-10">JC Penny</h6>
                                </a>
                            </div>
                            <div class="store-item t-center">
                                <a href="store_single_01.html" class="panel is-block">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <div class="store-logo">
                                            <img src="assets/images/brands/brand_07.jpg" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name ptb-10">Callaway Golf</h6>
                                </a>
                            </div>
                            <div class="store-item t-center">
                                <a href="store_single_01.html" class="panel is-block">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <div class="store-logo">
                                            <img src="assets/images/brands/brand_08.jpg" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name ptb-10">Car Toys</h6>
                                </a>
                            </div>
                        </div>
                    </section>


                    <section class="section latest-news-area blog-area blog-grid blog-3-col ptb-30">
                        <header class="panel ptb-15 prl-20 pos-r mb-30">
                            <h3 class="section-title font-18">Latest News</h3>
                            <a href="blog_classic_right_sidebar.html" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">Visit Blog</a>
                        </header>

                        <div class="row row-tb-20">

                            <!-- Blog Post -->
                            <div class="blog-post col-xs-12 col-sm-6 col-md-4">
                                <article class="entry panel">
                                    <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="assets/images/blog/post_01.jpg">
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>
                                    </figure>
                                    <div class="entry-wrapper pt-20 pb-10 prl-20">
                                        <header class="entry-header">
                                            <h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
							<a href="blog_single_standard.html">Restaurant Employer Read Clients Orders On His iPad</a>
						</h4>
                                            <div class="entry-meta mb-10">
                                                <ul class="tag-info list-inline">
                                                    <li><i class="icon fa fa-user"></i> By : John Doe</li>
                                                    <li><i class="icon fa fa-comments"></i>14 Comments </li>
                                                </ul>
                                            </div>
                                        </header>
                                        <div class="entry-content">
                                            <p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                        </div>
                                        <footer class="entry-footer text-right">
                                            <a href="blog_single_standard.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </article>
                            </div>
                            <!-- End Blog Post -->

                            <!-- Blog Post -->
                            <div class="blog-post col-xs-12 col-sm-6 col-md-4">
                                <article class="entry panel">
                                    <figure class="entry-media embed-responsive embed-responsive-16by9">
                                        <iframe src="https://player.vimeo.com/video/28786762?portrait=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>
                                    </figure>
                                    <div class="entry-wrapper pt-20 pb-10 prl-20">
                                        <header class="entry-header">
                                            <h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
                    							<a href="blog_single_vimeo.html">Amazing Classic Interior Design With Perfect Lighting</a>
                    						</h4>
                                            <div class="entry-meta mb-10">
                                                <ul class="tag-info list-inline">
                                                    <li><i class="icon fa fa-user"></i> By : John Doe</li>
                                                    <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                </ul>
                                            </div>
                                        </header>
                                        <div class="entry-content">
                                            <p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                        </div>
                                        <footer class="entry-footer text-right">
                                            <a href="blog_single_vimeo.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </article>
                            </div>
                            <!-- End Blog Post -->

                            <!-- Blog Post -->
                            <div class="blog-post col-xs-12 col-sm-6 col-md-4">
                                <article class="entry panel">
                                    <figure class="entry-media embed-responsive embed-responsive-16by9">
                                        <iframe src="https://www.youtube.com/embed/mcixldqDIEQ?v=mcixldqDIEQ" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>
                                    </figure>
                                    <div class="entry-wrapper pt-20 pb-10 prl-20">
                                        <header class="entry-header">
                                            <h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
							<a href="blog_single_youtube.html">English Breakfast Tea With Tasty Donut Desserts</a>
						</h4>
                                            <div class="entry-meta mb-10">
                                                <ul class="tag-info list-inline">
                                                    <li><i class="icon fa fa-user"></i> By : John Doe</li>
                                                    <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                </ul>
                                            </div>
                                        </header>
                                        <div class="entry-content">
                                            <p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                        </div>
                                        <footer class="entry-footer text-right">
                                            <a href="blog_single_youtube.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </article>
                            </div>
                            <!-- End Blog Post -->

                        </div>
                    </section>


                    <section class="section subscribe-area ptb-40 t-center">
                        <div class="newsletter-form">
                            <h4 class="mb-20"><i class="fa fa-envelope-o color-green mr-10"></i>Sign up for our weekly email newsletter</h4>
                            <p class="mb-20 color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi animi magni accusantium architecto possimus.</p>
                            <form method="post" action="#">
                                <div class="input-group mb-10">
                                    <input type="email" class="form-control bg-white" placeholder="Email Address" required="required">
                                    <span class="input-group-btn">
                                        <button class="btn" type="submit">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                            <p class="color-muted"><small>We’ll never share your email address with a third-party.</small> </p>
                        </div>
                    </section>
                </div>
            </div>


        </main>
        <!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->