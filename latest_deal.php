<?php 
	require 'views/layouts/header.php';
 ?>
<main id="mainContent" class="main-content">
            <div class="page-container ptb-10">
                <div class="container">
                    <section class="section deals-area ptb-30">

                        <!-- Page Control -->
                        <header class="page-control panel ptb-15 prl-20 pos-r mb-30">

                            <!-- List Control View -->
                            <ul class="list-control-view list-inline">
                                <li><a href="deals_list.html"><i class="fa fa-bars"></i></a>
                                </li>
                                <li><a href="deals_grid.html"><i class="fa fa-th"></i></a>
                                </li>
                            </ul>
                            <!-- End List Control View -->

                            <div class="right-10 pos-tb-center">
                                <select class="form-control input-sm">
                                    <option>SORT BY</option>
                                    <option>Newest items</option>
                                    <option>Best sellers</option>
                                    <option>Best rated</option>
                                    <option>Price: low to high</option>
                                    <option>Price: high to low</option>
                                </select>
                            </div>
                        </header>
                        <!-- End Page Control -->
                        <div class="row row-masnory row-tb-20">

                            <div class="col-sm-6 col-lg-4">
                                <div class="deal-single panel">
                                    <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="assets/images/deals/deal_01.jpg" style="background-image: url(&quot;assets/images/deals/deal_01.jpg&quot;);">
                                        <div class="label-discount left-20 top-15">-50%</div>
                                        <ul class="deal-actions top-15 right-20">
                                            <li class="like-deal">
                                                <span>
		                                <i class="fa fa-heart"></i>
		                            </span>
                                            </li>
                                            <li class="share-btn">
                                                <div class="share-tooltip fade">
                                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                </div>
                                                <span><i class="fa fa-share-alt"></i></span>
                                            </li>
                                            <li>
                                                <span>
		                                <i class="fa fa-camera"></i>
		                            </span>
                                            </li>
                                        </ul>
                                        <div class="time-left bottom-15 right-20 font-md-14">
                                            <span>
		                            <i class="ico fa fa-clock-o mr-10"></i>
		                            <span class="t-uppercase" data-countdown="2019/09/01 01:30:00">34 Weeks 04 Days 07 : 35 : 30</span>
		                        </span>
                                        </div>
                                        <div class="deal-store-logo">
                                            <img src="assets/images/brands/brand_01.jpg" alt="">
                                        </div>
                                    </figure>
                                    <div class="bg-white pt-20 pl-20 pr-15">
                                        <div class="pr-md-10">
                                            <div class="rating mb-10">
                                                <span class="rating-stars rate-allow" data-rating="5">
		                        		<i class="fa fa-star-o star-active"></i>
		                        		<i class="fa fa-star-o"></i>
		                        		<i class="fa fa-star-o"></i>
		                        		<i class="fa fa-star-o"></i>
		                        		<i class="fa fa-star-o"></i>
		                        	</span>
                                                <span class="rating-reviews">
		                        		( <span class="rating-count">241</span> Reviews )
                                                </span>
                                            </div>
                                            <h3 class="deal-title mb-10">
		                            <a href="deal_single.html">The Crash Bad Instant Folding Twin Bed</a>
		                        </h3>
                                            <ul class="deal-meta list-inline mb-10 color-mid">
                                                <li><i class="ico fa fa-map-marker mr-10"></i>United State</li>
                                                <li><i class="ico fa fa-shopping-basket mr-10"></i>120 Bought</li>
                                            </ul>
                                            <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                        </div>
                                        <div class="deal-price pos-r mb-15">
                                            <h3 class="price ptb-5 text-right"><span class="price-sale">$300.00</span>$150.00</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
						 </div>


                        <!-- Page Pagination -->
                        <div class="page-pagination text-center mt-30 p-10 panel">
                            <nav>
                                <!-- Page Pagination -->
                                <ul class="page-pagination">
                                    <li><a class="page-numbers previous" href="#">Previous</a>
                                    </li>
                                    <li><a href="#" class="page-numbers">1</a>
                                    </li>
                                    <li><span class="page-numbers current">2</span>
                                    </li>
                                    <li><a href="#" class="page-numbers">3</a>
                                    </li>
                                    <li><a href="#" class="page-numbers">4</a>
                                    </li>
                                    <li><span class="page-numbers dots">...</span>
                                    </li>
                                    <li><a href="#" class="page-numbers">20</a>
                                    </li>
                                    <li><a href="#" class="page-numbers next">Next</a>
                                    </li>
                                </ul>
                                <!-- End Page Pagination -->
                            </nav>
                        </div>
                        <!-- End Page Pagination -->

                    </section>

                </div>
            </div>


        </main>


<?php 		require 'views/layouts/footer.php'; ?>        