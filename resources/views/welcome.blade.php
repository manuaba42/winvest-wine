@extends('master')
@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title">Order Statistics -
                        <div class="dropdown d-inline">
                            <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#"
                                id="orders-month">August</a>
                            <ul class="dropdown-menu dropdown-menu-sm">
                                <li class="dropdown-title">Select Month</li>
                                <li><a href="#" class="dropdown-item">January</a></li>
                                <li><a href="#" class="dropdown-item">February</a></li>
                                <li><a href="#" class="dropdown-item">March</a></li>
                                <li><a href="#" class="dropdown-item">April</a></li>
                                <li><a href="#" class="dropdown-item">May</a></li>
                                <li><a href="#" class="dropdown-item">June</a></li>
                                <li><a href="#" class="dropdown-item">July</a></li>
                                <li><a href="#" class="dropdown-item active">August</a></li>
                                <li><a href="#" class="dropdown-item">September</a></li>
                                <li><a href="#" class="dropdown-item">October</a></li>
                                <li><a href="#" class="dropdown-item">November</a></li>
                                <li><a href="#" class="dropdown-item">December</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-stats-items">
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">24</div>
                            <div class="card-stats-item-label">Pending</div>
                        </div>
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">12</div>
                            <div class="card-stats-item-label">Shipping</div>
                        </div> 
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">23</div>
                            <div class="card-stats-item-label">Completed</div>
                        </div>
                    </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Wine Invest</h4>
                    </div>
                    <div class="card-body">
                        47
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-chart">
                    <!-- <canvas id="balance-chart" height="80"></canvas> -->
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Balance</h4>
                    </div>
                    <div class="card-body">
                        $187,13
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-chart">
                    <!-- <canvas id="sales-chart" height="80"></canvas> -->
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Sales</h4>
                    </div>
                    <div class="card-body">
                        4,732
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4>Budget vs Sales</h4>
                </div>
                <div class="card-body">
                    <canvas id="myChart" height="158"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card gradient-bottom">
                <div class="card-header">
                    <h4>Top 5 Products</h4>
                    <div class="card-header-action dropdown">
                        <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Month</a>
                        <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <li class="dropdown-title">Select Period</li>
                            <li><a href="#" class="dropdown-item">Today</a></li>
                            <li><a href="#" class="dropdown-item">Week</a></li>
                            <li><a href="#" class="dropdown-item active">Month</a></li>
                            <li><a href="#" class="dropdown-item">This Year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body" id="top-5-scroll">
                    <ul class="list-unstyled list-unstyled-border">
                        <li class="media">
                            <img class="mr-3 rounded" width="20" src="assets/img/products/Cartuxa.png"
                                alt="product">
                            <div class="media-body">
                                <div class="float-right">
                                    <div class="font-weight-600 text-muted text-small">86 Sales</div>
                                </div>
                                <div class="media-title">Peramanca 2015</div>
                                <div class="mt-1">
                                    <div class="budget-price">
                                        <div class="budget-price-square bg-primary" data-width="64%"></div>
                                        <div class="budget-price-label">$68,714</div>
                                    </div>
                                    <div class="budget-price">
                                        <div class="budget-price-square bg-danger" data-width="43%"></div>
                                        <div class="budget-price-label">$38,700</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 rounded" width="20" src="assets/img/products/Cartuxa.png"
                                alt="product">
                            <div class="media-body">
                                <div class="float-right">
                                    <div class="font-weight-600 text-muted text-small">67 Sales</div>
                                </div>
                                <div class="media-title">Cartuxa 2011</div>
                                <div class="mt-1">
                                    <div class="budget-price">
                                        <div class="budget-price-square bg-primary" data-width="84%"></div>
                                        <div class="budget-price-label">$107,133</div>
                                    </div>
                                    <div class="budget-price">
                                        <div class="budget-price-square bg-danger" data-width="60%"></div>
                                        <div class="budget-price-label">$91,455</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 rounded" width="20" src="assets/img/products/Cartuxa.png"
                                alt="product">

                            <div class="media-body">
                                <div class="float-right">
                                    <div class="font-weight-600 text-muted text-small">63 Sales</div>
                                </div>
                                <div class="media-title">Javali 2013</div>
                                <div class="mt-1">
                                    <div class="budget-price">
                                        <div class="budget-price-square bg-primary" data-width="34%"></div>
                                        <div class="budget-price-label">$3,717</div>
                                    </div>
                                    <div class="budget-price">
                                        <div class="budget-price-square bg-danger" data-width="28%"></div>
                                        <div class="budget-price-label">$2,835</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 rounded" width="20" src="assets/img/products/Cartuxa.png"
                                alt="product">

                            <div class="media-body">
                                <div class="float-right">
                                    <div class="font-weight-600 text-muted text-small">28 Sales</div>
                                </div>
                                <div class="media-title">Chateau Clerc-Milon 2002</div>
                                <div class="mt-1">
                                    <div class="budget-price">
                                        <div class="budget-price-square bg-primary" data-width="45%"></div>
                                        <div class="budget-price-label">$13,972</div>
                                    </div>
                                    <div class="budget-price">
                                        <div class="budget-price-square bg-danger" data-width="30%"></div>
                                        <div class="budget-price-label">$9,660</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 rounded" width="20" src="assets/img/products/Cartuxa.png"
                                alt="product">

                            <div class="media-body">
                                <div class="float-right">
                                    <div class="font-weight-600 text-muted text-small">19 Sales</div>
                                </div>
                                <div class="media-title">Chateau Mouton Rothschild 2000</div>
                                <div class="mt-1">
                                    <div class="budget-price">
                                        <div class="budget-price-square bg-primary" data-width="35%"></div>
                                        <div class="budget-price-label">$7,391</div>
                                    </div>
                                    <div class="budget-price">
                                        <div class="budget-price-square bg-danger" data-width="28%"></div>
                                        <div class="budget-price-label">$5,472</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-footer pt-3 d-flex justify-content-center">
                    <div class="budget-price justify-content-center">
                        <div class="budget-price-square bg-primary" data-width="20"></div>
                        <div class="budget-price-label">Selling Price</div>
                    </div>
                    <div class="budget-price justify-content-center">
                        <div class="budget-price-square bg-danger" data-width="20"></div>
                        <div class="budget-price-label">Budget Price</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Best Products</h4>
                </div>
                <div class="card-body">
                    <div class="owl-carousel owl-theme" id="products-carousel">
                        <div>
                            <div class="product-item pb-3">
                                <div class="product-image">
                                    <img alt="image" src="assets/img/products/Cartuxa.png" class="img-fluid">
                                </div>
                                <div class="product-details">
                                    <div class="product-name">Cartuxa 2018</div>
                                    <div class="product-review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="text-muted text-small">67 Sales</div>
                                    <div class="product-cta">
                                        <a href="#" class="btn btn-primary">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img alt="image" src="assets/img/products/Cartuxa.png" class="img-fluid">
                                </div>
                                <div class="product-details">
                                    <div class="product-name">Peramanca 2015</div>
                                    <div class="product-review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <div class="text-muted text-small">86 Sales</div>
                                    <div class="product-cta">
                                        <a href="#" class="btn btn-primary">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img alt="image" src="assets/img/products/Cartuxa.png" class="img-fluid">
                                </div>
                                <div class="product-details">
                                    <div class="product-name">Javali 2011</div>
                                    <div class="product-review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="text-muted text-small">63 Sales</div>
                                    <div class="product-cta">
                                        <a href="#" class="btn btn-primary">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="owl-carousel owl-theme" id="users-carousel">
                      <div>
                        <div class="user-item">
                          <img alt="image" src="assets/img/avatar/avatar-1.png" class="img-fluid">
                          <div class="user-details">
                            <div class="user-name">Hasan Basri</div>
                            <div class="text-job text-muted">Web Developer</div>
                            <div class="user-cta">
                              <button class="btn btn-primary follow-btn" data-follow-action="alert('user1 followed');" data-unfollow-action="alert('user1 unfollowed');">Follow</button>
                            </div>
                          </div>  
                        </div>
                      </div>
                      <div>
                        <div class="user-item">
                          <img alt="image" src="assets/img/avatar/avatar-2.png" class="img-fluid">
                          <div class="user-details">
                            <div class="user-name">Kusnaedi</div>
                            <div class="text-job text-muted">Mobile Developer</div>
                            <div class="user-cta">
                              <button class="btn btn-primary follow-btn" data-follow-action="alert('user2 followed');" data-unfollow-action="alert('user2 unfollowed');">Follow</button>
                            </div>
                          </div>  
                        </div>
                      </div>
                      <div>
                        <div class="user-item">
                          <img alt="image" src="assets/img/avatar/avatar-3.png" class="img-fluid">
                          <div class="user-details">
                            <div class="user-name">Bagus Dwi Cahya</div>
                            <div class="text-job text-muted">UI Designer</div>
                            <div class="user-cta">
                              <button class="btn btn-danger following-btn" data-unfollow-action="alert('user3 unfollowed');" data-follow-action="alert('user3 followed');">Following</button>
                            </div>
                          </div>  
                        </div>
                      </div>
                      <div>
                        <div class="user-item">
                          <img alt="image" src="assets/img/avatar/avatar-4.png" class="img-fluid">
                          <div class="user-details">
                            <div class="user-name">Wildan Ahdian</div>
                            <div class="text-job text-muted">Project Manager</div>
                            <div class="user-cta">
                              <button class="btn btn-primary follow-btn" data-follow-action="alert('user4 followed');" data-unfollow-action="alert('user4 unfollowed');">Follow</button>
                            </div>
                          </div>  
                        </div>
                      </div>
                      <div>
                        <div class="user-item">
                          <img alt="image" src="assets/img/avatar/avatar-5.png" class="img-fluid">
                          <div class="user-details">
                            <div class="user-name">Deden Febriansyah</div>
                            <div class="text-job text-muted">IT Support</div>
                            <div class="user-cta">
                              <button class="btn btn-primary follow-btn" data-follow-action="alert('user5 followed');" data-unfollow-action="alert('user5 unfollowed');">Follow</button>
                            </div>
                          </div>  
                        </div>
                      </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Top Countries</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="text-title mb-2">July</div>
                            <ul class="list-unstyled list-unstyled-border list-unstyled-noborder mb-0">
                                <li class="media">
                                    <img class="img-fluid mt-1 img-shadow"
                                        src="assets/modules/flag-icon-css/flags/4x3/id.svg" alt="image"
                                        width="40">
                                    <div class="media-body ml-3">
                                        <div class="media-title">Indonesia</div>
                                        <div class="text-small text-muted">3,282 <i
                                                class="fas fa-caret-down text-danger"></i></div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="img-fluid mt-1 img-shadow"
                                        src="assets/modules/flag-icon-css/flags/4x3/my.svg" alt="image"
                                        width="40">
                                    <div class="media-body ml-3">
                                        <div class="media-title">Malaysia</div>
                                        <div class="text-small text-muted">2,976 <i
                                                class="fas fa-caret-down text-danger"></i></div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="img-fluid mt-1 img-shadow"
                                        src="assets/modules/flag-icon-css/flags/4x3/us.svg" alt="image"
                                        width="40">
                                    <div class="media-body ml-3">
                                        <div class="media-title">United States</div>
                                        <div class="text-small text-muted">1,576 <i
                                                class="fas fa-caret-up text-success"></i></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                            <div class="text-title mb-2">August</div>
                            <ul class="list-unstyled list-unstyled-border list-unstyled-noborder mb-0">
                                <li class="media">
                                    <img class="img-fluid mt-1 img-shadow"
                                        src="assets/modules/flag-icon-css/flags/4x3/id.svg" alt="image"
                                        width="40">
                                    <div class="media-body ml-3">
                                        <div class="media-title">Indonesia</div>
                                        <div class="text-small text-muted">3,486 <i
                                                class="fas fa-caret-up text-success"></i></div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="img-fluid mt-1 img-shadow"
                                        src="assets/modules/flag-icon-css/flags/4x3/ps.svg" alt="image"
                                        width="40">
                                    <div class="media-body ml-3">
                                        <div class="media-title">Palestine</div>
                                        <div class="text-small text-muted">3,182 <i
                                                class="fas fa-caret-up text-success"></i></div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="img-fluid mt-1 img-shadow"
                                        src="assets/modules/flag-icon-css/flags/4x3/de.svg" alt="image"
                                        width="40">
                                    <div class="media-body ml-3">
                                        <div class="media-title">Germany</div>
                                        <div class="text-small text-muted">2,317 <i
                                                class="fas fa-caret-down text-danger"></i></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Invoices</h4>
                    <div class="card-header-action">
                        <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive table-invoice">
                        <table class="table table-striped">
                            <tr>
                                <th>Invoice ID</th>
                                <th>Customer</th>
                                <th>Status</th>
                                <th>Due Date</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td><a href="#">INV-87239</a></td>
                                <td class="font-weight-600">Kusnadi</td>
                                <td>
                                    <div class="badge badge-warning">Unpaid</div>
                                </td>
                                <td>July 19, 2018</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">INV-48574</a></td>
                                <td class="font-weight-600">Hasan Basri</td>
                                <td>
                                    <div class="badge badge-success">Paid</div>
                                </td>
                                <td>July 21, 2018</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">INV-76824</a></td>
                                <td class="font-weight-600">Muhamad Nuruzzaki</td>
                                <td>
                                    <div class="badge badge-warning">Unpaid</div>
                                </td>
                                <td>July 22, 2018</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">INV-84990</a></td>
                                <td class="font-weight-600">Agung Ardiansyah</td>
                                <td>
                                    <div class="badge badge-warning">Unpaid</div>
                                </td>
                                <td>July 22, 2018</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">INV-87320</a></td>
                                <td class="font-weight-600">Ardian Rahardiansyah</td>
                                <td>
                                    <div class="badge badge-success">Paid</div>
                                </td>
                                <td>July 28, 2018</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-hero">
                <div class="card-header">
                    {{-- <div class="card-icon">
                <i class="far fa-question-circle"></i>
              </div> --}}
                    <h4>14</h4>
                    <div class="card-description">Customers need help</div>
                </div>
                <div class="card-body p-0">
                    <div class="tickets-list">
                        <a href="#" class="ticket-item">
                            <div class="ticket-title">
                                <h4>My order hasn't arrived yet</h4>
                            </div>
                            <div class="ticket-info">
                                <div>Laila Tazkiah</div>
                                <div class="bullet"></div>
                                <div class="text-primary">1 min ago</div>
                            </div>
                        </a>
                        <a href="#" class="ticket-item">
                            <div class="ticket-title">
                                <h4>Please cancel my order</h4>
                            </div>
                            <div class="ticket-info">
                                <div>Rizal Fakhri</div>
                                <div class="bullet"></div>
                                <div>2 hours ago</div>
                            </div>
                        </a>
                        <a href="#" class="ticket-item">
                            <div class="ticket-title">
                                <h4>Do you see my mother?</h4>
                            </div>
                            <div class="ticket-info">
                                <div>Syahdan Ubaidillah</div>
                                <div class="bullet"></div>
                                <div>6 hours ago</div>
                            </div>
                        </a>
                        <a href="features-tickets.html" class="ticket-item ticket-more">
                            View All <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
