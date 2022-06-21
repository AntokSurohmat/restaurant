<?= $this->extend('customer/layouts/default') ?>
<?= $this->section('content-customer') ?>

<div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">    
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block"><?= $title ?></h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('/customer') ?>">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active"><?= $title ?>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                    <button class="btn btn-info dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
                </div>
            </div>
        </div>
        <div class="content-detached content-right">
            <div class="content-body">
                <div class="product-shop">
                    <div class="card">
                        <div class="card-body">
                            <span class="shop-title">Products</span>
                            <span class="float-right">
                                <span class="result-text mr-1"> Showing 12 of 203 results</span>
                                <span class="display-buttons">
                                    <a href="#" class="active"><i class="ft-grid font-medium-2"></i></a>
                                    <a href="#"><i class="ft-list font-medium-2"></i></a>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <div class="badge badge-success round">-50%</div>
                                                <img class="img-fluid mb-1" src="<?= base_url() ?>/assets/modern/app-assets/images/elements/07.png" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="<?= base_url() ?>/assets/modern/app-assets/images/elements/fitbit-watch.png" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="<?= base_url() ?>/assets/modern/app-assets/images/elements/air-jordan.png" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="<?= base_url() ?>/assets/modern/app-assets/images/elements/13.png" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="<?= base_url() ?>/assets/modern/app-assets/images/elements/apple-watch.png" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <div class="badge badge-success badge-right">Sale</div>
                                                <img class="img-fluid mb-1" src="<?= base_url() ?>/assets/modern/app-assets/images/elements/vr.png" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="<?= base_url() ?>/assets/modern/app-assets/images/carousel/23.jpg" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="<?= base_url() ?>/assets/modern/app-assets/images/carousel/24.png" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="<?= base_url() ?>/assets/modern/app-assets/images/carousel/26.jpg" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="<?= base_url() ?>/assets/modern/app-assets/images/carousel/25.jpg" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-1" src="<?= base_url() ?>/assets/modern/app-assets/images/carousel/27.jpg" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$250</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="ecommerce-product-detail.html">
                                            <div class="product-img d-flex align-items-center">
                                                <div class="badge badge-success">-55%</div>
                                                <img class="img-fluid mb-1" src="<?= base_url() ?>/assets/modern/app-assets/images/elements/samsung-gear.png" alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">Card title</h4>
                                            <div class="price-reviews">
                                                <span class="price-box">
                                                    <span class="price">$225</span>
                                                    <span class="old-price">$500</span>
                                                </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ft-heart"></i></a><span class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="ft-sliders"></i></a><span class="saperator">|</span>
                                            <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <ul class="pagination justify-content-center pagination-separate pagination-flat">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-detached sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content d-none d-lg-block sidebar-shop">
                    <div class="card">
                        <div class="card-body">
                            <div class="search">
                                <input id="basic-search" type="text" placeholder="Search here..." class="basic-search">
                                <i class="ficon ft-search"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="categories-list">
                                <div class="category-title pb-1">
                                    <h4 class="card-title mb-0">Categories</h4>
                                    <hr>
                                </div>
                                <div class="product-cat" id="categories">
                                    <ul class="treeview">
                                        <li class="open"><span>Makan</span>
                                            <ul>
                                                <li><span>Apple Watch</span></li>
                                                <li><span>Fitbit</span></li>
                                            </ul>
                                        </li>
                                        <li><span>Minuman</span>
                                            <ul>
                                                <li><span>iPad</span></li>
                                                <li><span>iPad Pro</span></li>
                                            </ul>
                                        </li>
                                        <li><span>Laptops</span>
                                            <ul>
                                                <li class="active"><span>Mac</span></li>
                                                <li><span>Mac Pro</span></li>
                                            </ul>
                                        </li>
                                        <li><span>Phone</span>
                                            <ul>
                                                <li><span>iPhone 9</span></li>
                                                <li><span>iPhone X</span></li>
                                                <li><span>iPhone Pro</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Categories List -->

                            <!-- /Price Range -->
                            <div class="price-range">
                                <div class="category-title mt-3 pb-1">
                                    <h4 class="card-title mb-0">Price</h4>
                                    <hr>
                                </div>
                                <div class="price-slider">
                                    <div class="price_slider_amount mb-2">
                                        <div class="range-amt"><strong>Price Range : </strong> <span class="range-val" id="lower-value"></span>
                                            - <span class="range-val" id="upper-value"></span></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="slider-sm slider-success my-1" id="small-slider"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Price Range -->



                            <!-- Featured Image -->
                            <div class="featured">
                                <div class="category-title mt-3 pb-1">
                                    <h4 class="card-title mb-0">Terbaru</h4>
                                    <hr>
                                </div>
                                <div class="featured-image bg-success bg-lighten-2">
                                    <a href="ecommerce-product-detail.html">
                                        <div class="badge badge-danger">Best Deal</div>
                                        <img src="<?= base_url() ?>/assets/modern/app-assets/images/elements/samsung-gear.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- /Featured Image -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script type="text/javascript">
    $(document).ready(function() {

       
    });
</script>
<?= $this->endSection() ?>