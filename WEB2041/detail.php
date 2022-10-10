<?php

/**
 * Dự án mẫu PHP - WEB2041
 * Ngô Quốc Đạt PD05994
 */

require_once 'bootstrap.php';

require_once 'includes/header.php';

if (isset($_GET['slug'], $_GET['id'])) {
    $slug = $_GET['slug'];
    $id = $_GET['id'];

    $product = $db->get(PRODUCT_TABLE, '*', [
        'AND' => [
            'id' => $id,
            'slug' => $slug
        ]
    ]);

    if (!$product) {
        redirect('/');
    }
} else {
    redirect('/');
}
?>
    <div id="page-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="page-title-wrap">
                        <h1><?= category_name($product['category_id']) ?></h1>
                    </div>
                </div>

                <div class="col-6 m-auto">
                    <nav class="page-breadcrumb-wrap">
                        <ul class="nav justify-content-end">
                            <li><a href="index.php">Trang chủ</a></li>
                            <li><a href="shop.html">Cửa hàng</a></li>
                            <li><a href="shop.html" class="current"><?= category_name($product['category_id']) ?></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div id="single-product-page-wrapper" class="page-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-product-page-content">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="product-details" id="product-sticky-sidebar">
                                    <h2><?= $product['name'] ?></h2>

                                    <p class="pro-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                        <i class="fa fa-star-o"></i>
                                    </p>

                                    <div class="price-group">
                                        <span class="price"><?= number_format($product['price']) ?>đ</span>
                                        <del class="price sale-price"><?= number_format($product['price']) ?>đ</del>
                                    </div>

                                    <div class="product-info-stock-sku">
                                        <span class="product-stock-status text-success">Còn hàng</span>
                                        <span class="product-sku-status"><strong>SKU</strong> MH03</span>
                                    </div>

                                    <div class="shopping-option">
                                        <div class="shop-option-item">
                                            <h4>Kích thước:</h4>
                                            <select name="prod_size" id="prod_size">
                                                <?php for ($i = 39; $i <= 45; $i++) : ?>
                                                    <option value="<?= $i ?>"><?= $i ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>

                                        <div class="shop-option-item">
                                            <h4>Màu sắc:</h4>
                                            <ul class="product-color nav">
                                                <?php foreach (['red', 'green', 'black', 'yellow'] as $color) : ?>
                                                    <li class="color-item <?= $color ?>"><?= $color ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product-quantity d-sm-flex align-items-center">
                                        <div class="pro-quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1"/>
                                            </div>
                                        </div>

                                        <a href="cart.html" class="btn btn-transparent btn-semi-round">
                                            <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng
                                        </a>
                                    </div>

                                    <div class="product-btn-group">
                                        <a href="wishlist.html" class="btn btn-round btn-transparent"><i class="fa fa-heart-o"></i></a>
                                        <a href="compare.html" class="btn btn-round btn-transparent"><i class="fa fa-exchange"></i></a>
                                        <a href="single-product-gruop.html" class="btn btn-round btn-transparent"><i class="fa fa-envelope-o"></i></a>
                                    </div>

                                    <div class="product-share-area">
                                        <h3>Chia sẻ:</h3>
                                        <div class="share-btn">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-reddit"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 order-first order-lg-last">
                                <div class="product-thumbnail-wrap">
                                    <div class="product-thumb-sticky d-flex d-lg-block flex-wrap">
                                        <?php
                                        $images = json_decode($product['images']);
                                        if (count($images) > 0) :
                                            foreach ($images as $image) :
                                                ?>
                                                <div class="single-image-item">
                                                    <img class="img-fluid" src="<?= upload_path($image) ?>"
                                                         alt="<?= $product['name'] ?>"/>
                                                </div>
                                            <?php
                                            endforeach;
                                        else:
                                            echo '<img class="img-fluid" src="' . upload_path($product['thumbnail']) . '" alt="' . $product['name'] . '" />';
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-full-info-reviews">
                                    <nav class="nav" id="nav-tab">
                                        <a class="active" id="description-tab" data-toggle="tab" href="#description">Mô tả</a>
                                        <a id="reviews-tab" data-toggle="tab" href="#reviews">Đánh giá</a>
                                    </nav>

                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="description">
                                            <?= $product['description'] ?>
                                        </div>

                                        <div class="tab-pane fade" id="reviews">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <div class="product-ratting-wrap">
                                                        <div class="pro-avg-ratting">
                                                            <h4>4.5 <span>(Overall)</span></h4>
                                                            <span>Based on 9 Comments</span>
                                                        </div>
                                                        <div class="ratting-list">
                                                            <div class="sin-list float-left">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span>(5)</span>
                                                            </div>
                                                            <div class="sin-list float-left">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>(3)</span>
                                                            </div>
                                                            <div class="sin-list float-left">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>(1)</span>
                                                            </div>
                                                            <div class="sin-list float-left">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>(0)</span>
                                                            </div>
                                                        </div>
                                                        <div class="rattings-wrapper">

                                                            <div class="sin-rattings">
                                                                <div class="ratting-author">
                                                                    <h3>Cristopher Lee</h3>
                                                                    <div class="ratting-star">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <span>(5)</span>
                                                                    </div>
                                                                </div>
                                                                <p>enim ipsam voluptatem quia voluptas sit aspernatur
                                                                    aut
                                                                    odit aut fugit, sed quia res eos qui ratione
                                                                    voluptatem
                                                                    sequi Neque porro quisquam est, qui dolorem ipsum
                                                                    quia
                                                                    dolor sit amet, consectetur, adipisci veli</p>
                                                            </div>

                                                        </div>
                                                        <div class="ratting-form-wrapper">
                                                            <h3>Add your Comments</h3>
                                                            <form action="#" method="post">
                                                                <div class="ratting-form row">
                                                                    <div class="col-12 mb-4">
                                                                        <h5>Rating:</h5>
                                                                        <div class="ratting-star fix">
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-12 mb-4">
                                                                        <label for="name">Name:</label>
                                                                        <input id="name" placeholder="Name" type="text">
                                                                    </div>
                                                                    <div class="col-md-6 col-12 mb-4">
                                                                        <label for="email">Email:</label>
                                                                        <input id="email" placeholder="Email"
                                                                               type="text">
                                                                    </div>
                                                                    <div class="col-12 mb-4">
                                                                        <label for="your-review">Your Review:</label>
                                                                        <textarea name="review" id="your-review"
                                                                                  placeholder="Write a review"></textarea>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <input value="add review" type="submit">
                                                                    </div>
                                                                </div>
                                                            </form>
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
            </div>
        </div>
    </div>
<?php
require_once 'includes/footer.php';
?>