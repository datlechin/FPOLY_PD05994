<?php

/**
 * Dự án mẫu PHP - WEB2041
 * Ngô Quốc Đạt PD05994
 */

require_once 'bootstrap.php';

require_once 'includes/header.php';

$products = $db->select(PRODUCT_TABLE, '*');
?>

<!--== Start Slider Area ==-->
<section id="slider-area-wrap" class="sliderTwo">
    <div class="slider-carousel-wrap">
        <!-- Start Single Slide Item -->
        <div class="single-slide-wrap slideBg3">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slide-content-wrap">
                            <h2 class="fadeInLeft animated">RUN STRONGER <br/> BETTER & HEALTHIER </h2>
                            <h3 class="fadeInLeft animated two">World’s First Fully Cushioned, Foot - Shaped <br/> Shoe
                                without an Elevated Hell </h3>
                            <a href="shop.html" class="fadeInLeft animated three btn btn-transparent">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide Item -->

        <!-- Start Single Slide Item -->
        <div class="single-slide-wrap slideBg4">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slide-content-wrap">
                            <h2 class="fadeInLeft animated">HAPPY FEET RUN <br/> BETTER & HEALTHIER </h2>
                            <h3 class="fadeInLeft animated two">Female Spectific Shoes Built <br> Just For Your Awesome
                                Body</h3>
                            <a href="shop.html" class="fadeInLeft animated three btn btn-transparent">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide Item -->
    </div>
</section>
<!--== End Slider Area ==-->

<?php if ($products) : ?>
<!--== Start Top Interesting Product Area ==-->
<section id="products-area-wrapper">
    <div class="container">
        <!-- Start Section Title Area -->
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="section-title-wrap">
                    <h2>Sản phẩm mới nhất</h2>
                    <p>Browse the collection of our best selling and top interesting products. You’ll definitely find what you are looking for.</p>
                </div>
            </div>
        </div>
        <!-- End Section Title Area -->

        <!-- Start Products Content Wrapper -->
        <div class="row">
            <div class="col-lg-12">
                <div class="products-wrapper">
                    <div class="products-carousel-wrap">
                        <?php foreach ($products as $product) : ?>
                            <!-- Start Single Product -->
                            <div class="single-product-item">
                                <!-- Product Thumbnail -->
                                <figure class="product-thumbnail">
                                    <a href="<?= site_url("/detail.php?slug={$product['slug']}&id={$product['id']}") ?>" class="d-block">
                                        <img src="<?= upload_path($product['thumbnail']) ?>" style="min-height: 140px" alt="<?= $product['name'] ?>"/>
                                    </a>
                                    <figcaption class="product-hvr-content">
                                        <a href="wishlist.html" class="btn-wishlist" data-toggle="tooltip" data-placement="left" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="<?= site_url("/detail.php?slug={$product['slug']}&id={$product['id']}") ?>" class="btn btn-brand btn-quickView">Xem chi tiết</a>
                                    </figcaption>
                                </figure>

                                <!-- Product Details -->
                                <div class="product-details">
                                    <a href="shop.html" class="product-cat-name"><?= category_name($product['category_id']) ?></a>
                                    <h2 class="product-name">
                                        <a href="single-product-carousel.html"><?= $product['name'] ?></a>
                                    </h2>
                                    <div class="product-prices">
                                        <del class="oldPrice"><?= number_format($product['price']) ?>đ</del>
                                        <span class="price"><?= number_format($product['price']) ?>đ</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Products Content Wrapper -->
    </div>
</section>
<!--== End Top Interesting Product Area ==-->
<?php endif; ?>

<!--== Start Brand Carousel Area ==-->
<div class="brand-logo-area layout-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-logo-wrapper">
                    <div class="brand-logo-carousel">
                        <!-- Single Brand Logo Start -->
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand-logo/brand1.png" alt="brand"/></a>
                        </div>
                        <!-- Single Brand Logo End -->

                        <!-- Single Brand Logo Start -->
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand-logo/brand2.png" alt="brand"/></a>
                        </div>
                        <!-- Single Brand Logo End -->

                        <!-- Single Brand Logo Start -->
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand-logo/brand3.png" alt="brand"/></a>
                        </div>
                        <!-- Single Brand Logo End -->

                        <!-- Single Brand Logo Start -->
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand-logo/brand4.png" alt="brand"/></a>
                        </div>
                        <!-- Single Brand Logo End -->

                        <!-- Single Brand Logo Start -->
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand-logo/brand5.png" alt="brand"/></a>
                        </div>
                        <!-- Single Brand Logo End -->

                        <!-- Single Brand Logo Start -->
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand-logo/brand6.png" alt="brand"/></a>
                        </div>
                        <!-- Single Brand Logo End -->

                        <!-- Single Brand Logo Start -->
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand-logo/brand7.png" alt="brand"/></a>
                        </div>
                        <!-- Single Brand Logo End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Brand Carousel Area ==-->

<?php
require_once 'includes/footer.php';
?>