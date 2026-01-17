<link rel="stylesheet" href="assets/css/custom.css">
<div class="container-fluid section h-scroll" id="main">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-light" id="dash-daterange">
                            <span class="input-group-text bg-primary border-primary text-white">
                                <i class="mdi mdi-calendar-range font-13"></i>
                            </span>
                        </div>
                        <a href="javascript: void(0);" class="btn btn-primary ms-2">
                            <i class="mdi mdi-autorenew"></i>
                        </a>
                        <a href="javascript: void(0);" class="btn btn-primary ms-1">
                            <i class="mdi mdi-filter-variant"></i>
                        </a>
                    </form>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-5 col-lg-6">

            <div class="row">
                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-account-multiple widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Categories</h5>
                            <h3 class="mt-3 mb-3">
                                <?php
                                $total = $co->getCount("SELECT COUNT(*) FROM Categories");
                                echo $total;
                                ?>
                            </h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                <span class="text-nowrap">Since last month</span>  
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-cart-plus widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Orders</h5>
                            <h3 class="mt-3 mb-3">
                                <?php
                                $total = $co->getCount("SELECT COUNT(*) FROM Authors");
                                echo $total;
                                ?>
                            </h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 1.08%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-currency-usd widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Book</h5>
                            <h3 class="mt-3 mb-3">
                                <?php
                                $total = $co->getCount("SELECT COUNT(*) FROM Books");
                                echo $total;
                                ?>
                            </h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 7.00%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-pulse widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Growth">Borrow Books</h5>
                            <h3 class="mt-3 mb-3">
                                <?php
                                $total = $co->getCount("SELECT COUNT(*) FROM barrow_book");
                                echo $total;
                                ?>
                            </h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

        </div> <!-- end col -->

        <div class="col-xl-7 col-lg-6">
            <div class="card card-h-100">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title mb-3">Projections Vs Actuals</h4>

                    <div dir="ltr">
                        <div id="high-performing-product" class="apex-charts" data-colors="#727cf5,#e3eaef"></div>
                    </div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->

        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title mb-3">Revenue</h4>

                    <div class="chart-content-bg">
                        <div class="row text-center">
                            <div class="col-md-6">
                                <p class="text-muted mb-0 mt-3">Current Week</p>
                                <h2 class="fw-normal mb-3">
                                    <small class="mdi mdi-checkbox-blank-circle text-primary align-middle me-1"></small>
                                    <span>$58,254</span>
                                </h2>
                            </div>
                            <div class="col-md-6">
                                <p class="text-muted mb-0 mt-3">Previous Week</p>
                                <h2 class="fw-normal mb-3">
                                    <small class="mdi mdi-checkbox-blank-circle text-success align-middle me-1"></small>
                                    <span>$69,524</span>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="dash-item-overlay d-none d-md-block" dir="ltr">
                        <h5>Today's Earning: $2,562.30</h5>
                        <p class="text-muted font-13 mb-3 mt-2">Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                        Etiam rhoncus...</p>
                        <a href="javascript: void(0);" class="btn btn-outline-primary">View Statements
                            <i class="mdi mdi-arrow-right ms-2"></i>
                        </a>
                    </div>
                    <div dir="ltr">
                        <div id="revenue-chart" class="apex-charts mt-3" data-colors="#727cf5,#0acf97"></div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title">Revenue By Location</h4>
                    <div class="mb-4 mt-4">
                        <div id="world-map-markers" style="height: 224px"></div>
                    </div>

                    <h5 class="mb-1 mt-0 fw-normal">New York</h5>
                    <div class="progress-w-percent">
                        <span class="progress-value fw-bold">72k </span>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <h5 class="mb-1 mt-0 fw-normal">San Francisco</h5>
                    <div class="progress-w-percent">
                        <span class="progress-value fw-bold">39k </span>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <h5 class="mb-1 mt-0 fw-normal">Sydney</h5>
                    <div class="progress-w-percent">
                        <span class="progress-value fw-bold">25k </span>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <h5 class="mb-1 mt-0 fw-normal">Singapore</h5>
                    <div class="progress-w-percent mb-0">
                        <span class="progress-value fw-bold">61k </span>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">
            <div class="card">
                <div class="card-body">
                    <a href="" class="btn btn-sm btn-link float-end">Export
                        <i class="mdi mdi-download ms-1"></i>
                    </a>
                    <h4 class="header-title mt-2 mb-3">Top Selling Products</h4>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-hover mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">ASOS Ridley High Waist</h5>
                                        <span class="text-muted font-13">07 April 2018</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$79.49</h5>
                                        <span class="text-muted font-13">Price</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">82</h5>
                                        <span class="text-muted font-13">Quantity</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$6,518.18</h5>
                                        <span class="text-muted font-13">Amount</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">Marco Lightweight Shirt</h5>
                                        <span class="text-muted font-13">25 March 2018</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$128.50</h5>
                                        <span class="text-muted font-13">Price</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">37</h5>
                                        <span class="text-muted font-13">Quantity</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$4,754.50</h5>
                                        <span class="text-muted font-13">Amount</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">Half Sleeve Shirt</h5>
                                        <span class="text-muted font-13">17 March 2018</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$39.99</h5>
                                        <span class="text-muted font-13">Price</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">64</h5>
                                        <span class="text-muted font-13">Quantity</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$2,559.36</h5>
                                        <span class="text-muted font-13">Amount</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">Lightweight Jacket</h5>
                                        <span class="text-muted font-13">12 March 2018</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$20.00</h5>
                                        <span class="text-muted font-13">Price</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">184</h5>
                                        <span class="text-muted font-13">Quantity</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$3,680.00</h5>
                                        <span class="text-muted font-13">Amount</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">Marco Shoes</h5>
                                        <span class="text-muted font-13">05 March 2018</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$28.49</h5>
                                        <span class="text-muted font-13">Price</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">69</h5>
                                        <span class="text-muted font-13">Quantity</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$1,965.81</h5>
                                        <span class="text-muted font-13">Amount</span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-3 col-lg-6 order-lg-1">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title">Total Sales</h4>

                    <div id="average-sales" class="apex-charts mb-4 mt-4"
                    data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>


                    <div class="chart-widget-list">
                        <p>
                            <i class="mdi mdi-square text-primary"></i> Direct
                            <span class="float-end">$300.56</span>
                        </p>
                        <p>
                            <i class="mdi mdi-square text-danger"></i> Affilliate
                            <span class="float-end">$135.18</span>
                        </p>
                        <p>
                            <i class="mdi mdi-square text-success"></i> Sponsored
                            <span class="float-end">$48.96</span>
                        </p>
                        <p class="mb-0">
                            <i class="mdi mdi-square text-warning"></i> E-mail
                            <span class="float-end">$154.02</span>
                        </p>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-3 col-lg-6 order-lg-1">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title mb-2">Recent Activity</h4>

                    <div data-simplebar style="max-height: 419px;"> 
                        <div class="timeline-alt pb-0">
                            <div class="timeline-item">
                                <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-info fw-bold mb-1 d-block">You sold an item</a>
                                    <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">5 minutes ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-primary fw-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                    <small>Dave Gamache added
                                        <span class="fw-bold">Admin Dashboard</span>
                                    </small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">30 minutes ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-info fw-bold mb-1 d-block">Robert Delaney</a>
                                    <small>Send you message
                                        <span class="fw-bold">"Are you there?"</span>
                                    </small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">2 hours ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-primary fw-bold mb-1 d-block">Audrey Tobey</a>
                                    <small>Uploaded a photo
                                        <span class="fw-bold">"Error.jpg"</span>
                                    </small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">14 hours ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-info fw-bold mb-1 d-block">You sold an item</a>
                                    <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">16 hours ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-primary fw-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                    <small>Dave Gamache added
                                        <span class="fw-bold">Admin Dashboard</span>
                                    </small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">22 hours ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-info fw-bold mb-1 d-block">Robert Delaney</a>
                                    <small>Send you message
                                        <span class="fw-bold">"Are you there?"</span>
                                    </small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">2 days ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end timeline -->
                    </div> <!-- end slimscroll -->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card-->
        </div>
        <!-- end col -->

    </div>
    <!-- end row -->
</div>

<div id="user" class="section" style="display:none;">
  <div class="col-md-6" style="margin-top:20px;">
    <button type="button" class="btn btn-primary" id="btn-new-user" data-bs-toggle="modal" data-bs-target="#usermodal" style="border-radius: 20px;">
    Add New
    </button>
  </div> 
  <div class="col-md-12" style="margin-top:10px;">
    <div class="tbl_cat" id="tbl_id_user" >
      <?php $co->viewTable("select * from user_info", "user"); ?>
    </div>
  </div>  
</div>
<div id="category" class="section" style="display:none;">
  <div class="col-md-6" style="margin-top:20px;">
    <button type="button" class="btn btn-primary" id="btn-new-cat" data-bs-toggle="modal" data-bs-target="#catmodal" style="border-radius: 20px;">
    Add New
    </button>
  </div> 
  <div class="col-md-12" style="margin-top:10px;">
    <div class="tbl_cat" id="tbl_id_cat" >
      <?php $co->viewTable("select cat_no \"Category ID\", cat_name as \"Category Name\" from categories", "category"); ?>
    </div>
  </div>  
</div>

<div id="author" class="section" style="display:none;">
  <div class="col-md-6" style="margin-top:20px;">
    <button type="button" class="btn btn-primary" id="btn-new-aut" data-bs-toggle="modal" data-bs-target="#autmodal" style="border-radius: 20px;">
    Add New
    </button>
  </div> 
  <div class="col-md-12">
    <div class="tbl_cat" id="tbl_id_aut" style="margin-top:10px;">
      <?php $co->viewTable("select aut_no ID, author_name 'Author Name',description Title from authors", "author"); ?>
    </div>
  </div>  
</div>

<div id="shelf" class="section" style="display:none;">
  <div class="col-md-6" style="margin-top:20px;">
    <button type="button" class="btn btn-primary" id="btn-new-sh" data-bs-toggle="modal" data-bs-target="#shelfmodal" style="border-radius: 20px;">
    Add New
    </button>
  </div> 
  <div class="col-md-12">
    <div class="table-scrollable">
        <div class="tbl_cat" id="tbl_id_shelf" style="margin-top:10px;">
        <?php $co->viewTable("select * from shelves", "shelf"); ?>
        </div>
    </div>
  </div>  
</div>

<!-- Book -->
<div id="book" class="section" style="display:none;">
  <div class="col-md-6" style="margin-top:20px;">
    <button type="button" class="btn btn-primary" id="btn-new-book" data-bs-toggle="modal" data-bs-target="#bookmodal" style="border-radius: 20px;">
    Add New
    </button>
  </div>
  <div class="col-md-12">
    <div class="table-scrollable">
        <div class="tbl_cat" id="tbl_id_book" style="margin-top:10px;">
        <?php $co->viewTable("select book_no as book, book_name Book, author_name Author, cat_name Category, pages, qty, version, book_date 'Book Date', vailable_qty availableQty, shelf_name Shelf from books b, authors a, categories c, shelves sh where b.aut_no=a.aut_no and b.cat_no=c.cat_no and b.sh_no=sh.sh_no order by book_no", "book"); ?>
        </div>
    </div>
  </div>   
</div>
<!-- People -->
<div id="people" class="section" style="display:none;">
  <div class="col-md-6" style="margin-top:20px;">
    <button type="button" class="btn btn-primary" id="btn-new-peo" data-bs-toggle="modal" data-bs-target="#peomodal" style="border-radius: 20px;">
    Add New
    </button>
  </div>
  <div class="col-md-12">
    <div class="tbl_cat" id="tbl_id_people" style="margin-top:10px;">
      <?php $co->viewTable("select * from people order by p_no", "people"); ?>
    </div>
  </div>   
</div>

<!-- Readers -->
<div id="read" class="section" style="display:none;">
  <div class="col-md-6" style="margin-top:20px;">
    <button type="button" class="btn btn-primary" id="btn-new-read" data-bs-toggle="modal" data-bs-target="#readmodal" style="border-radius: 20px;">
    Add New
    </button>
  </div>
  <div class="col-md-12">
    <div class="tbl_cat" id="tbl_id_read" style="margin-top:10px;">
      <?php $co->viewTable("select rd_no ID, name, rd_date 'Reading Date', time_in 'Time In', time_out 'Time Out' from reading r, people p where r.p_no=p.p_no order by rd_no", "read"); ?>
    </div>
  </div>   
</div>

<!-- Borrow -->
<div id="borrow" class="section" style="display:none;">
  <div class="col-md-6" style="margin-top:20px;">
    <button type="button" class="btn btn-primary" id="btn-new-bar" data-bs-toggle="modal" data-bs-target="#barmodal" style="border-radius: 20px;">
    Add New
    </button>
  </div>
  <div class="col-md-12">
    <div class="tbl_cat" id="tbl_id_borrow" style="margin-top:10px;">
      <?php $co->viewTable("select bar_no ID, book_name 'Book Name', name, bar_date 'Borrow Date', promise_date 'Promise Date', status from barrow_book bb, books b, people p where bb.book_no=b.book_no and bb.p_no=p.p_no", "borrow"); ?>
    </div>
  </div>   
</div>
<!-- Return -->
<div id="return" class="section" style="display:none;">
  <div class="col-md-6" style="margin-top:20px;">
    <button type="button" class="btn btn-primary" id="btn-new-ret" data-bs-toggle="modal" data-bs-target="#retmodal" style="border-radius: 20px;">
    Add New
    </button>
  </div>
  <div class="col-md-12">
    <div class="tbl_cat" id="tbl_id_return" style="margin-top:10px;">
      <?php $co->viewTable("select * from return_book", "return"); ?>
    </div>
  </div>   
</div>

<!-- Reports -->
<div class="section" id="report" style="display:none;">
<!-- <div class="tab-pane fade" id="autrep"> -->
  <div class="col-md-6">
    <div class="card-body">
        <h5 class="card-title text-center text-dark mb-3">Authors Report</h5>
         <?php $coder->fillCombo("SELECT aut_no,author_name from authors;", "cbm_author_print", "Select author"); ?>
        <div class="btn-group-vertical w-100">
            <button class="btn btn-sm btn-dark  mb-2 mt-2 btn_author_all">All reports</button>
            <button class="btn btn-sm btn-outline-success btn_author_single">Single report</button>
        </div>
      </div>
  </div>    
<!-- </div> -->
<!-- <div class="tab-pane fade" id="bookrep"> -->
  <div class="col-md-6">
    <div class="card-body">
        <h5 class="card-title text-center text-dark mb-3">Books Report</h5>
         <?php $coder->fillCombo("SELECT book_no,book_name from books;", "cbm_book_print", "Select book"); ?>
        <div class="btn-group-vertical w-100">
            <button class="btn btn-sm btn-dark  mb-2 mt-2 btn_book_all">All reports</button>
            <button class="btn btn-sm btn-outline-success btn_book_single">Single report</button>
        </div>
      </div>
  </div>    
<!-- </div> -->
<!-- <div class="tab-pane fade" id="barrowrep"> -->
  <div class="col-md-6">
    <div class="card-body">
        <h5 class="card-title text-center text-dark mb-3">Barrow Books Report</h5>
         <?php $coder->fillCombo("SELECT  bb.bar_no,concat(b.book_name,'- ',p.name) FROM people p, books b, barrow_book bb WHERE bb.p_no = p.p_no AND bb.book_no = b.book_no and bb.status='borrowed';", "cbm_barrow_print", "Select barrow book"); ?>
        <div class="btn-group-vertical w-100">
            <button class="btn btn-sm btn-dark  mb-2 mt-2 btn_barrow_all">All reports</button>
            <button class="btn btn-sm btn-outline-success btn_barrow_single">Single report</button>
        </div>
      </div>
  </div>    
<!-- </div> -->
<!-- <div class="tab-pane fade" id="returnrep"> -->
  <div class="col-md-6">
    <div class="card-body">
        <h5 class="card-title text-center text-dark mb-3">Return Books Report</h5>
         <?php $coder->fillCombo("SELECT  bb.bar_no,concat(b.book_name, '- ',p.name) FROM people p, books b, barrow_book bb WHERE bb.p_no = p.p_no AND bb.book_no = b.book_no and bb.status='returned';", "cbm_return_print", "Select Return book"); ?>
        <div class="btn-group-vertical w-100">
            <button class="btn btn-sm btn-dark  mb-2 mt-2 btn_return_all">All reports</button>
            <button class="btn btn-sm btn-outline-success btn_return_single">Single report</button>
        </div>
      </div>
  </div>
    <div class="col-md-6">
    <div class="card-body">
        <h5 class="card-title text-center text-dark mb-3">Readers Report</h5>
         <?php $coder->fillCombo("select rd_no, name from reading r, people p where r.p_no=p.p_no", "cbm_read_print", "Select Return book"); ?>
        <div class="btn-group-vertical w-100">
            <button class="btn btn-sm btn-dark  mb-2 mt-2 btn_read_all">All reports</button>
            <button class="btn btn-sm btn-outline-success btn_read_single">Single report</button>
        </div>
      </div>
  </div>
  <!-- <div class="col-md-6">
    <div class="card-body">
        <h5 class="card-title text-center text-dark mb-3">Readers Report</h5>
         <?php $coder->fillCombo("select rd_no, name from reading r, people p where r.p_no=p.p_no", "cbm_read_print", "Select Return book"); ?>
        <div class="btn-group-vertical w-100">
            <button class="btn btn-sm btn-dark  mb-2 mt-2 btn_read_all">All reports</button>
            <button class="btn btn-sm btn-outline-success btn_read_single">Single report</button>
        </div>
      </div>
  </div> -->               
</div>

<!--  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on("click", "a[href^='#']", function(e){
    e.preventDefault();

    let target = $(this).attr("href"); // ex: #category, #author, #shelf, #book, #main

    // marka hore qariso dhammaan sections
    $(".section").hide();

    // muuji kan la doortay
    $(target).show();
});

</script>

