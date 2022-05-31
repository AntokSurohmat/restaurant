<?= $this->extend('admin/layouts/default') ?>
<?= $this->section('content') ?>

<div class="content-overlay"></div>
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title"><?= $title ?></h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active"><?= $title ?>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="javascript:void(0)" >Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
            </div>
        </div> -->
    </div>
    <div class="content-body">
        <div class="shopping-cart">

            <div class="row match-height">
                <div class="col-md-4 order-md-2 mb-4">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Your cart (4)</h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form class="form">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label for="kodeOrderForm">Kode Order</label>
                                            <input class="form-control" type="text" placeholder="Kode Order" id="kodeOrderForm" name="kodeOrderFormAdd">
                                        </div>

                                        <div class="form-group">
                                            <label for="namaOrderForm">Atas Nama</label>
                                            <input class="form-control" type="email" placeholder="Atas Nama" id="namaOrderForm" name="namaOrderFormAdd">
                                        </div>

                                        <div class="form-group">
                                            <label for="waktuOrderForm">Waktu</label>
                                            <input class="form-control" type="text" placeholder="Waktu" id="waktuOrderForm" name="waktuOrderFromAdd">
                                        </div>

                                        <div class="form-group">
                                            <label for="mejaOrderForm">Meja</label>
                                            <input class="form-control" type="text" placeholder="Meja" id="mejaOrderForm" name="waktuOrderFromAdd">
                                        </div>

                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Price Details</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="price-detail">Price (4 items) <span class="float-right">$2800</span></div>
                                <div class="price-detail">Delivery Charges <span class="float-right">$100</span></div>
                                <div class="price-detail">TAX / VAT <span class="float-right">$0</span></div>
                                <hr>
                                <div class="price-detail">Payable Amount <span class="float-right">$2900</span></div>
                                <div class="total-savings">Your Total Savings on this order $550</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 order-md-1">
                    <div class="card">
                        <div class="card-body">
                            <div class="search">
                                <input id="basic-search" type="text" placeholder="Search here..." class="basic-search">
                                <i class="ficon ft-search"></i>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">List pesanan</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Details</th>
                                                <th>Price</th>
                                                <th width=200px class="text-center">No. Of Products</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="product-img d-flex align-items-center">
                                                        <img class="img-fluid" src="<?= base_url() ?>/assets/modern/app-assets/images/elements/fitbit-watch.png" alt="Card image cap">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-title">Fitbit Alta HR Special Edition</div>
                                                    <div class="product-color"><strong>Color : </strong> Pink</div>
                                                    <div class="product-size"><strong>Size : </strong> Medium</div>
                                                </td>
                                                <td>
                                                    <div class="product-price">$250</div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="text" class="text-center count touchspin" value="1" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="total-price">$250</div>
                                                </td>
                                                <td>
                                                    <div class="product-action">
                                                        <a href="#"><i class="ft-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="product-img d-flex align-items-center">
                                                        <img class="img-fluid" src="<?= base_url() ?>/assets/modern/app-assets/images/elements/13.png" alt="Card image cap">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-title">Mackbook pro 19''</div>
                                                    <div class="product-color"><strong>Color : </strong> Grey</div>
                                                    <div class="product-size"><strong>Size : </strong> Pro</div>
                                                </td>
                                                <td>
                                                    <div class="product-price">$1150</div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="text" class="text-center count touchspin" value="1" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="total-price">$1150</div>
                                                </td>
                                                <td>
                                                    <div class="product-action">
                                                        <a href="#"><i class="ft-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="product-img d-flex align-items-center">
                                                        <img class="img-fluid" src="<?= base_url() ?>/assets/modern/app-assets/images/elements/vr.png" alt="Card image cap">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-title">VR Headset</div>
                                                    <div class="product-color"><strong>Color : </strong> Grey</div>
                                                    <div class="product-size"><strong>Size : </strong> Freesize</div>
                                                </td>
                                                <td>
                                                    <div class="product-price">$175</div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="text" class="text-center count touchspin" value="2" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="total-price">$350</div>
                                                </td>
                                                <td>
                                                    <div class="product-action">
                                                        <a href="#"><i class="ft-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="product-img d-flex align-items-center">
                                                        <img class="img-fluid" src="<?= base_url() ?>/assets/modern/app-assets/images/carousel/25.jpg" alt="Card image cap">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-title">Smart Watch with LED</div>
                                                    <div class="product-color"><strong>Color : </strong> Black</div>
                                                    <div class="product-size"><strong>Size : </strong> Medium</div>
                                                </td>
                                                <td>
                                                    <div class="product-price">$700</div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="text" class="text-center count touchspin" value="1" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="total-price">$700</div>
                                                </td>
                                                <td>
                                                    <div class="product-action">
                                                        <a href="#"><i class="ft-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="product-img d-flex align-items-center">
                                                        <img class="img-fluid" src="<?= base_url() ?>/assets/modern/app-assets/images/elements/fitbit-watch.png" alt="Card image cap">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-title">Fitbit Alta HR Special Edition</div>
                                                    <div class="product-color"><strong>Color : </strong> Pink</div>
                                                    <div class="product-size"><strong>Size : </strong> Medium</div>
                                                </td>
                                                <td>
                                                    <div class="product-price">$250</div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="text" class="text-center count touchspin" value="2" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="total-price">$250</div>
                                                </td>
                                                <td>
                                                    <div class="product-action">
                                                        <a href="#"><i class="ft-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-12 order-md-3">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="text-right">
                                    <a href="ecommerce-checkout.html" class="btn btn-info mr-2">Continue Shopping</a>
                                    <a href="ecommerce-checkout.html" class="btn btn-warning">Place Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script type="text/javascript">
    $(document).ready(() => {

    })
</script>
<?= $this->endSection() ?>