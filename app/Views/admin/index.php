<?= $this->extend('admin/layouts/default') ?>
<?= $this->section('content') ?>

<div class="content-overlay"></div>
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- eCommerce statistic -->
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="info">850</h3>
                                    <h6>Products Sold</h6>
                                </div>
                                <div>
                                    <i class="icon-basket-loaded info font-large-2 float-right"></i>
                                </div>
                            </div>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="warning">$748</h3>
                                    <h6>Net Profit</h6>
                                </div>
                                <div>
                                    <i class="icon-pie-chart warning font-large-2 float-right"></i>
                                </div>
                            </div>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="success">146</h3>
                                    <h6>New Customers</h6>
                                </div>
                                <div>
                                    <i class="icon-user-follow success font-large-2 float-right"></i>
                                </div>
                            </div>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="danger">99.89 %</h3>
                                    <h6>Customer Satisfaction</h6>
                                </div>
                                <div>
                                    <i class="icon-heart danger font-large-2 float-right"></i>
                                </div>
                            </div>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ eCommerce statistic -->

        <!-- Products sell and New Orders -->
        <div class="row match-height">
            <div class="col-xl-8 col-12" id="ecommerceChartView">
                <div class="card card-shadow">
                    <div class="card-header card-header-transparent py-20">
                        <div class="btn-group dropdown">
                            <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>
                            <div class="dropdown-menu animate" role="menu">
                                <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                                <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                                <a class="dropdown-item" href="#" role="menuitem">profit</a>
                            </div>
                        </div>
                        <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                            <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
                        </ul>
                    </div>
                    <div class="widget-content tab-content bg-white p-20">
                        <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
                        <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
                        <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">New Orders</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div id="new-orders" class="media-list position-relative">
                            <div class="table-responsive">
                                <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Product</th>
                                            <th class="border-top-0">Customers</th>
                                            <th class="border-top-0">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-truncate">iPhone X</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-19.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-18.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joseph Weaver" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-17.png" alt="Avatar">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <span class="badge badge-info">+4 more</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-truncate">$8999</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Pixel 2</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Alice Scott" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-16.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Charles Miller" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-15.png" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-truncate">$5550</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">OnePlus</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Christine Ramos" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-11.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Thomas Brewer" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-10.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Alice Chapman" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-9.png" alt="Avatar">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <span class="badge badge-info">+3 more</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-truncate">$9000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Galaxy</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Ryan Schneider" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-14.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Tiffany Oliver" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-13.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joan Reid" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-12.png" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-truncate">$7500</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Moto Z2</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-8.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-7.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-6.png" alt="Avatar">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <span class="badge badge-info">+1 more</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-truncate">$8500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Products sell and New Orders -->

        <!-- Recent Transactions -->
        <div class="row">
            <div id="recent-transactions" class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Transactions</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="invoice-summary.html" target="_blank">Invoice Summary</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table id="recent-orders" class="table table-hover table-xl mb-0">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Invoice#</th>
                                        <th class="border-top-0">Customer Name</th>
                                        <th class="border-top-0">Products</th>
                                        <th class="border-top-0">Categories</th>
                                        <th class="border-top-0">Shipping</th>
                                        <th class="border-top-0">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                                        <td class="text-truncate"><a href="#">INV-001001</a></td>
                                        <td class="text-truncate">
                                            <span class="avatar avatar-xs">
                                                <img class="box-shadow-2" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-4.png" alt="avatar">
                                            </span>
                                            <span>Elizabeth W.</span>
                                        </td>
                                        <td class="text-truncate p-1">
                                            <ul class="list-unstyled users-list m-0">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="<?= base_url() ?>/assets/modern/app-assets/images/portfolio/portfolio-1.jpg" alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="<?= base_url() ?>/assets/modern/app-assets/images/portfolio/portfolio-2.jpg" alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="<?= base_url() ?>/assets/modern/app-assets/images/portfolio/portfolio-4.jpg" alt="Avatar">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge badge-info">+1 more</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                                        </td>
                                        <td>
                                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-truncate">$ 1200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate"><i class="la la-dot-circle-o danger font-medium-1 mr-1"></i> Declined</td>
                                        <td class="text-truncate"><a href="#">INV-001002</a></td>
                                        <td class="text-truncate">
                                            <span class="avatar avatar-xs">
                                                <img class="box-shadow-2" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-5.png" alt="avatar">
                                            </span>
                                            <span>Doris R.</span>
                                        </td>
                                        <td class="text-truncate p-1">
                                            <ul class="list-unstyled users-list m-0">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="<?= base_url() ?>/assets/modern/app-assets/images/portfolio/portfolio-5.jpg" alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="<?= base_url() ?>/assets/modern/app-assets/images/portfolio/portfolio-6.jpg" alt="Avatar">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge badge-info">+2 more</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-warning round">Electronics</button>
                                        </td>
                                        <td>
                                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-truncate">$ 1850.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate"><i class="la la-dot-circle-o warning font-medium-1 mr-1"></i> Pending</td>
                                        <td class="text-truncate"><a href="#">INV-001003</a></td>
                                        <td class="text-truncate">
                                            <span class="avatar avatar-xs">
                                                <img class="box-shadow-2" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-6.png" alt="avatar">
                                            </span>
                                            <span>Megan S.</span>
                                        </td>
                                        <td class="text-truncate p-1">
                                            <ul class="list-unstyled users-list m-0">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="<?= base_url() ?>/assets/modern/app-assets/images/portfolio/portfolio-2.jpg" alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="<?= base_url() ?>/assets/modern/app-assets/images/portfolio/portfolio-5.jpg" alt="Avatar">
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-success round">Groceries</button>
                                        </td>
                                        <td>
                                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-truncate">$ 3200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                                        <td class="text-truncate"><a href="#">INV-001004</a></td>
                                        <td class="text-truncate">
                                            <span class="avatar avatar-xs">
                                                <img class="box-shadow-2" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-7.png" alt="avatar">
                                            </span>
                                            <span>Andrew D.</span>
                                        </td>
                                        <td class="text-truncate p-1">
                                            <ul class="list-unstyled users-list m-0">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="<?= base_url() ?>/assets/modern/app-assets/images/portfolio/portfolio-6.jpg" alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="<?= base_url() ?>/assets/modern/app-assets/images/portfolio/portfolio-1.jpg" alt="Avatar">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge badge-info">+1 more</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-info round">Apparels</button>
                                        </td>
                                        <td>
                                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-truncate">$ 4500.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                                        <td class="text-truncate"><a href="#">INV-001005</a></td>
                                        <td class="text-truncate">
                                            <span class="avatar avatar-xs">
                                                <img class="box-shadow-2" src="<?= base_url() ?>/assets/modern/app-assets/images/portrait/small/avatar-s-9.png" alt="avatar">
                                            </span>
                                            <span>Walter R.</span>
                                        </td>
                                        <td class="text-truncate p-1">
                                            <ul class="list-unstyled users-list m-0">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="<?= base_url() ?>/assets/modern/app-assets/images/portfolio/portfolio-5.jpg" alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="<?= base_url() ?>/assets/modern/app-assets/images/portfolio/portfolio-3.jpg" alt="Avatar">
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                                        </td>
                                        <td>
                                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-truncate">$ 1500.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Recent Transactions -->

        <!--Recent Orders & Monthly Sales -->
        <div class="row match-height">
            <div class="col-xl-8 col-lg-12">
                <div class="card">
                    <div class="card-content ">
                        <div id="cost-revenue" class="height-250 position-relative"></div>
                    </div>
                    <div class="card-footer">
                        <div class="row mt-1">
                            <div class="col-3 text-center">
                                <h6 class="text-muted">Total Products</h6>
                                <h2 class="block font-weight-normal">18.6 k</h2>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <h6 class="text-muted">Total Sales</h6>
                                <h2 class="block font-weight-normal">64.54 M</h2>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <h6 class="text-muted">Total Cost</h6>
                                <h2 class="block font-weight-normal">24.38 B</h2>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <h6 class="text-muted">Total Revenue</h6>
                                <h2 class="block font-weight-normal">36.72 M</h2>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body sales-growth-chart">
                            <div id="monthly-sales" class="height-250"></div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="chart-title mb-1 text-center">
                            <h6>Total monthly Sales.</h6>
                        </div>
                        <div class="chart-stats text-center">
                            <a href="#" class="btn btn-sm btn-danger box-shadow-2 mr-1">Statistics <i class="ft-bar-chart"></i></a> <span class="text-muted">for the last year.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Recent Orders & Monthly Sales -->
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script type="text/javascript">

    $(window).on("load", function(){
        var new_orders = new PerfectScrollbar('#recent-buyers, #new-orders',{
            wheelPropagation: true
        });
        
        /********************************************
        *               Monthly Sales               *
        ********************************************/
        Morris.Bar.prototype.fillForSeries = function(i) {
        var color;
        return "0-#fff-#f00:20-#000";
        };

        Morris.Bar({
            element: 'monthly-sales',
            data: [{month: 'Jan', sales: 1835 }, {month: 'Feb', sales: 2356 }, {month: 'Mar', sales: 1459 }, {month: 'Apr', sales: 1289 }, {month: 'May', sales: 1647 }, {month: 'Jun', sales: 2156 }, {month: 'Jul', sales: 1835 }, {month: 'Aug', sales: 2356 }, {month: 'Sep', sales: 1459 }, {month: 'Oct', sales: 1289 }, {month: 'Nov', sales: 1647 }, {month: 'Dec', sales: 2156 }],
            xkey: 'month',
            ykeys: ['sales'],
            labels: ['Sales'],
            barGap: 4,
            barSizeRatio: 0.3,
            gridTextColor: '#bfbfbf',
            gridLineColor: '#E4E7ED',
            numLines: 5,
            gridtextSize: 14,
            resize: true,
            barColors: ['#FF394F'],
            hideHover: 'auto',
        });
        
    });
    (function(window, document, $) {
        'use strict';    
        /*************************************************
        *               Score Chart                      *
        *************************************************/
        (function () {
        var scoreChart = function scoreChart(id, labelList, series1List) {
            var scoreChart = new Chartist.Line('#' + id, {
            labels: labelList,
            series: [series1List]
            }, {
            lineSmooth: Chartist.Interpolation.simple({
                divisor: 2
            }),
            fullWidth: true,
            chartPadding: {
                right: 25
            },
            series: {
                "series-1": {
                showArea: false
                }
            },
            axisX: {
                showGrid: false
            },
            axisY: {
                labelInterpolationFnc: function labelInterpolationFnc(value) {
                return value / 1000 + 'K';
                },
                scaleMinSpace: 40
            },
            plugins: [Chartist.plugins.tooltip()],
            low: 0,
            showPoint: false,
            height: 300
            });

            scoreChart.on('created', function (data) {
            var defs = data.svg.querySelector('defs') || data.svg.elem('defs');
            var width = data.svg.width();
            var height = data.svg.height();

            var filter = defs.elem('filter', {
                x: 0,
                y: "-10%",
                id: 'shadow' + id
            }, '', true);

            filter.elem('feGaussianBlur', { in: "SourceAlpha",
                stdDeviation: "24",
                result: 'offsetBlur'
            });
            filter.elem('feOffset', {
                dx: "0",
                dy: "32"
            });

            filter.elem('feBlend', { in: "SourceGraphic",
                mode: "multiply"
            });

            defs.elem('linearGradient', {
                id: id + '-gradient',
                x1: 0,
                y1: 0,
                x2: 1,
                y2: 0
            }).elem('stop', {
                offset: 0,
                'stop-color': 'rgba(225, 145, 73, 1)'
            }).parent().elem('stop', {
                offset: 1,
                'stop-color': 'rgba(239, 175, 132, 1)'
            });

            return defs;
            }).on('draw', function (data) {
            if (data.type === 'line') {
                data.element.attr({
                filter: 'url(#shadow' + id + ')'
                });
            } else if (data.type === 'point') {

                var parent = new Chartist.Svg(data.element._node.parentNode);
                parent.elem('line', {
                x1: data.x,
                y1: data.y,
                x2: data.x + 0.01,
                y2: data.y,
                "class": 'ct-point-content'
                });
            }
            if (data.type === 'line' || data.type == 'area') {
                data.element.animate({
                d: {
                    begin: 1000 * data.index,
                    dur: 1000,
                    from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                    to: data.path.clone().stringify(),
                    easing: Chartist.Svg.Easing.easeOutQuint
                }
                });
            }
            });
        };

        var DayLabelList = ["1st", "2nd", "3rd", "4th", "5th", "6th", "7th", "8th"];
        var DaySeries1List = {
            name: "series-1",
            data: [0, 4500, 2600, 6100, 2600, 6500, 3200, 6800]
        };

        var WeekLabelList = ["W1", "W2", "W4", "W5", "W6", "W7", "W8"];
        var WeekSeries1List = {
            name: "series-1",
            data: [77000, 18000, 61000, 26000, 58000, 32000, 70000, 45000]
        };

        var MonthLabelList = ["AUG", "SEP", "OTC", "NOV", "DEC", "JAN", "FEB"];
        var MonthSeries1List = {
            name: "series-1",
            data: [100000, 500000, 300000, 700000, 100000, 200000, 700000, 50000]
        };

        var createChart = function createChart(button) {
            var btn = button || $("#ecommerceChartView .chart-action").find(".active");

            var chartId = btn.attr("href");
            switch (chartId) {
            case "#scoreLineToDay":
                scoreChart("scoreLineToDay", DayLabelList, DaySeries1List);
                break;
            case "#scoreLineToWeek":
                scoreChart("scoreLineToWeek", WeekLabelList, WeekSeries1List);
                break;
            case "#scoreLineToMonth":
                scoreChart("scoreLineToMonth", MonthLabelList, MonthSeries1List);
                break;
            }
        };

        createChart();
        $(".chart-action li a").on("click", function () {
            createChart($(this));
        });
        })();

        /*************************************************
        *               Cost Revenue Stats               *
        *************************************************/
        new Chartist.Line('#cost-revenue', {
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
            series: [
                [
                    {meta:'Revenue', value: 5},
                    {meta:'Revenue', value: 3},
                    {meta:'Revenue', value: 6},
                    {meta:'Revenue', value: 3},
                    {meta:'Revenue', value: 8},
                    {meta:'Revenue', value: 5},
                    {meta:'Revenue', value: 8},
                    {meta:'Revenue', value: 12},
                    {meta:'Revenue', value: 7},
                    {meta:'Revenue', value: 14},
                
                ]
            ]
        }, {
            low: 0,
            high: 18,
            fullWidth: true,
            showArea: true,
            showPoint: true,
            showLabel: false,
            axisX: {
                showGrid: false,
                showLabel: false,
                offset: 0
            },
            axisY: {
                showGrid: false,
                showLabel: false,
                offset: 0
            },
            chartPadding: 0,
            plugins: [
                Chartist.plugins.tooltip()
            ]
        }).on('draw', function(data) {
            if (data.type === 'area') {
                data.element.attr({
                    'style': 'fill: #28D094; fill-opacity: 0.2'
                });
            }
            if (data.type === 'line') {
                data.element.attr({
                    'style': 'fill: transparent; stroke: #28D094; stroke-width: 4px;'
                });
            }
            if (data.type === 'point') {
                var circle = new Chartist.Svg('circle', {
                cx: [data.x], cy:[data.y], r:[7],
                }, 'ct-area-circle');
                data.element.replace(circle);
            }
        });
    })(window, document, jQuery);

</script>
<?= $this->endSection() ?>