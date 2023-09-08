@extends('master')
@section('content')
    <div class="section-header">
        <h1>Product Detail Page</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card">
                    {{-- <div class="card-header">
                        <h4>Navigation &amp; Indicator</h4>
                    </div> --}}
                    <div class="card-body">
                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" style="text-align:center">
                                <div class="carousel-item active" >
                                    <img style=" height: 400px; width: auto;" src="https://www.wine-searcher.com/images/labels/56/99/10435699.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item" >
                                    <img style=" height: 400px; width: auto;" src="https://www.wine-searcher.com/images/labels/28/50/10702850.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item" >
                                    <img style=" height: 400px; width: auto;" src="https://www.wine-searcher.com/images/labels/63/51/10456351.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Chateau Rieussec 'Les Carmes de Rieussec'</h3>
                    </div>
                    <div class="card-body">
                        <p>Sauternes, France</p>
                        <div class="row" style="margin: 0px 16px; justify-content: space-between; align-items: center">
                            <div class="row">
                                <h1>423,180</h1>
                                {{-- <p style="margin: 0px 8px;"><del>500,00</del></p> --}}
                                <span style="margin: 0px 8px;" class="text-muted"><span class="text-success"><i
                                            class="fas fa-caret-up"></i></span> 19%</span>
                            </div>
                            <div style="text-align: right;">
                                <h6>3.5 from 74 User Ratings</h6>
                                <h4><span class="badge badge-info">90/100</span></h4>
                            </div>

                            {{-- <div class="media"  style="margin: 0px 16px;">
                                  <div class="media-body">
                                      <div class="row" style="align-items: flex-end;">
                                          <h1>423,180</h1>
                                          <p><del>500,00</del></p>

                                      </div>
                                  </div>
                                  <img class="ml-3" src="assets/img/example-image-50.jpg" alt="Generic placeholder image">
                                </div> --}}




                        </div>
                        <p><i class="fas fa-wine-glass-alt"></i><span style="margin-left: 2%">Dessert - Lush and
                                Balanced</span></p>
                        <p>Second label of Chateau Rieussec</p>
                        <div id="accordion">
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-1" aria-expanded="true">
                                    <h4>Learn more</h4>
                                </div>
                                <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                                    <p class="mb-0">Critic tasting note: (2017 vintage) "Almost entirely Sémillon, this
                                        wine is rich but not heavy. Lightness comes with the surprisingly intense acidity
                                        that balances the rich apricot and honey flavors. For a second wine, this has
                                        impressive quality, ready to drink from 2022. Roger Voss" - 92/100, Wine Enthusiast
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                    {{-- <div class="card-footer">
                        Footer Card
                    </div> --}}
                </div>
            </div>
            {{-- <div class="col-md-2">
                
                <div class="card">
                    <div class="card-header">
                        <h4>Card Title</h4>
                    </div>
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                    <div class="card-footer">
                        Footer Card
                    </div>
                </div>
            </div> --}}
        </div>

        <div class="card">

            <div class="card-body">
                <ul class="nav nav-pills" id="myTab3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" id="home-tab3" data-toggle="tab" href="#home3" role="tab"
                            aria-controls="home" aria-selected="false">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="profile-tab3" data-toggle="tab" href="#profile3" role="tab"
                            aria-controls="profile" aria-selected="true">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab"
                            aria-controls="contact" aria-selected="false">Analytics</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent2">
                    <div class="tab-pane fade active show" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card card-primary" style="box-shadow: 0px 0px 0px rgba(0, 0, 0, 0);">
                                    <div class="card-header">
                                        <h4>Highlights</h4>
                                    </div>
                                    <div class="card-body">
                                        <p><i class="fas fa-flag"></i><span style="margin-left: 2%">From
                                                Sauternes, France</span></p>
                                        <p><i class="fas fa-utensils"></i><span style="margin-left: 2%">Dessert Wine
                                                – Lush and Balanced</span></p>
                                        <p><i class="fas fa-apple-alt"></i><span style="margin-left: 2%">Sauvignon
                                                Blanc - Semillon</span></p>
                                        <p><i class="fas fa-equals"></i><span style="margin-left: 2%">Pairs well
                                                with Blue Cheeses</span></p>
                                        <div class="alert alert-info" style="background-color: #fef1d2; color: #6c757d">
                                            This wine has won many awards: the 2011 vintage was awarded Gold from the The
                                            TEXSOM International Wine Awards, and the 2010 vintage was awarded Gold from the
                                            Berlin Wine Trophy.
                                        </div>
                                        <div class="alert alert-info" style="background-color: #fef1d2; color: #6c757d">
                                            This Sauternes wine has received good scores from various critics.
                                        </div>
                                        <div class="alert alert-info" style="background-color: #fef1d2; color: #6c757d">
                                            One of the more sought-after wines from this region. Greater numbers of users
                                            have been searching for this wine compared to a year ago.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card card-primary" style="box-shadow: 0px 0px 0px rgba(0, 0, 0, 0);">
                                    <div class="card-header">
                                        <h4>Details</h4>
                                    </div>
                                    <div class="card-body">

                                        <h5><span class="badge badge-secondary" style="margin-right: 2%"><i class="fas fa-wine-bottle"></i></span>About the Product</h5>
                                        <li class="media">
                                            <div class="media-body" style="margin: 4% 0">
                                                <div class="text-small text-muted">Region or Appellation</div>
                                                <div class="media-title"><a>Sauternes</a></div>
                                                <div class="text-small text-muted">Bordeaux / France</div>
                                            </div>
                                     
                                        </li>
                                        <li class="media" style="margin: 4% 0">
                                            <div class="media-body">
                                                <div class="text-small text-muted">Producer Notes</div>
                                                <div class="media-title"><a>Château Rieussec’s second wine is selected according to the same standards as the first wine. Its character consistently reveals a beautiful aromatic range dominated by citrus flavours. Carmes de Rieussec’s name is a reference to the Carmelite monks in Langon, who owned the Rieussec estate in the 18th century.</a></div>
                                            </div>
                                        </li>

                                        <h5><span class="badge badge-secondary" style="margin-right: 2%"><i class="fas fa-chart-line"></i></span>Analytical Data</h5>
                                        <li class="media" style="margin: 4% 0">
                                            <div class="media-body">
                                                <div class="text-small text-muted">Alcohol ABV</div>
                                                <div class="media-title"><a>13.5%</a></div>
                                            </div>
                                        </li>
                                        <li class="media" style="margin: 4% 0">
                                            <div class="media-body">
                                                <div class="text-small text-muted">Sweetness</div>
                                                <div class="media-title"><a>Dry</a></div>
                                            </div>
                                        </li>
                                        <li class="media" style="margin: 4% 0">
                                            <div class="media-body">
                                                <div class="text-small text-muted">Blend</div>
                                                <div class="media-title"><a>Semillon & Sauvignon Blanc</a></div>
                                            </div>
                                        </li>

                                        <h5><span class="badge badge-secondary" style="margin-right: 2%"><i class="fas fa-industry"></i></span>Production Attributes</h5>
                                        <li class="media" style="margin: 4% 0">
                                            <div class="media-body">
                                                <div class="text-small text-muted">Maturation</div>
                                                <div class="media-title"><a>Oaked</a></div>
                                            </div>
                                        </li>
                                        <li class="media" style="margin: 4% 0">
                                            <div class="media-body">
                                                <div class="text-small text-muted">Ownership</div>
                                                <div class="media-title"><a>Domaines Barons de Rothschild</a></div>
                                            </div>
                                        </li>
                                        <li class="media" style="margin: 4% 0">
                                            <div class="media-body">
                                                <div class="text-small text-muted">Closure Type</div>
                                                <div class="media-title"><a>Can</a></div>
                                            </div>
                                        </li>
                                        <li class="media" style="margin: 4% 0">
                                            <div class="media-body">
                                                <div class="text-small text-muted">Ageing</div>
                                                <div class="media-title"><a>Ageing in oak barrels 18 months.</a></div>
                                            </div>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4>Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled list-unstyled-border list-unstyled-noborder">
                                            <li class="media">
                                                <img alt="image" class="mr-3 rounded-circle" width="70"
                                                    src="assets/img/avatar/avatar-1.png">
                                                <div class="media-body">

                                                    <div class="media-title mb-1">Rizal Fakhri</div>
                                                    <div class="text-time">Yesterday</div>
                                                    <div class="media-description text-muted">Duis aute irure dolor in
                                                        reprehenderit in voluptate velit esse
                                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                                        cupidatat non
                                                        proident, sunt in culpa qui officia deserunt mollit anim id est
                                                        laborum.</div>

                                                </div>
                                            </li>
                                            <li class="media">
                                                <img alt="image" class="mr-3 rounded-circle" width="70"
                                                    src="assets/img/avatar/avatar-2.png">
                                                <div class="media-body">

                                                    <div class="media-title mb-1">Bambang Uciha</div>
                                                    <div class="text-time">Yesterday</div>
                                                    <div class="media-description text-muted">Duis aute irure dolor in
                                                        reprehenderit in voluptate velit esse
                                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                                        cupidatat non
                                                        proident, sunt in culpa qui officia deserunt mollit anim id est
                                                        laborum.</div>

                                                </div>
                                            </li>
                                            <li class="media">
                                                <img alt="image" class="mr-3 rounded-circle" width="70"
                                                    src="assets/img/avatar/avatar-3.png">
                                                <div class="media-body">

                                                    <div class="media-title mb-1">Ujang Maman</div>
                                                    <div class="text-time">Yesterday</div>
                                                    <div class="media-description text-muted">Duis aute irure dolor in
                                                        reprehenderit in voluptate velit esse
                                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                                        cupidatat non
                                                        proident</div>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                        <div class="card">
                            <div class="card-header">
                                <h4>Statistics</h4>
                                <div class="card-header-action">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-primary">Week</a>
                                        <a href="#" class="btn">Month</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chartjs-size-monitor"
                                    style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                    <div class="chartjs-size-monitor-expand"
                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink"
                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                    </div>
                                </div>
                                <canvas id="myChart" height="423" width="700"
                                    style="display: block; height: 339px; width: 560px;"
                                    class="chartjs-render-monitor"></canvas>
                                <div class="statistic-details mt-sm-4">
                                    <div class="statistic-details-item">
                                        <span class="text-muted"><span class="text-success"><i
                                                    class="fas fa-caret-up"></i></span> 7%</span>
                                        <div class="detail-value">$243</div>
                                        <div class="detail-name">Today's Sales</div>
                                    </div>
                                    <div class="statistic-details-item">
                                        <span class="text-muted"><span class="text-danger"><i
                                                    class="fas fa-caret-down"></i></span> 23%</span>
                                        <div class="detail-value">$2,902</div>
                                        <div class="detail-name">This Week's Sales</div>
                                    </div>
                                    <div class="statistic-details-item">
                                        <span class="text-muted"><span class="text-success"><i
                                                    class="fas fa-caret-up"></i></span>9%</span>
                                        <div class="detail-value">$12,821</div>
                                        <div class="detail-name">This Month's Sales</div>
                                    </div>
                                    <div class="statistic-details-item">
                                        <span class="text-muted"><span class="text-success"><i
                                                    class="fas fa-caret-up"></i></span> 19%</span>
                                        <div class="detail-value">$92,142</div>
                                        <div class="detail-name">This Year's Sales</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            
          </div> --}}
    </div>
@endsection
