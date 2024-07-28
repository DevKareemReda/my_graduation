


    <!-- Sidebar -->
   
<?php
session_start();

if (!isset($_SESSION['login_id'])) {
header("location: Login.php");

exit();
}
 ?>

    <?php
        
        include "incloud/sedbar.php ";
        
        
        
        
        ?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    

      <!-- Main Content -->
     

        <!-- Topbar nav -->
        



      
      


<div class="all-content-wrapper">
        

<?php
        
        include "incloud/header.php ";
        
        
        
        
        ?>

<!-- end hader -->
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Orders</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">10,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Tax Deduction</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red">15% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">5,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Revenue</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">$70,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Yearly Sales</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-purple">80% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">$100,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-purple"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject text-uppercase"><b>Product Sales</b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-grey active">
													<input type="radio" name="options" class="toggle" id="option1" checked="">Today</label>
                                                <label class="btn btn-grey">
													<input type="radio" name="options" class="toggle" id="option2">Week</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="curved-line-chart" class="flot-chart-sts flot-chart curved-chart-statistic" style="padding: 0px; position: relative;"><canvas class="flot-base" width="787" height="432" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 787px; height: 432px;"></canvas><canvas class="flot-overlay" width="787" height="432" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 787px; height: 432px;"></canvas></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="white-box analytics-info-cs mg-b-30 res-mg-t-30">
                            <h3 class="box-title">Total Visit</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas></div>
                                </li>
                                <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">8659</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-30">
                            <h3 class="box-title">Total Page Views</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash2"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">7469</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-30">
                            <h3 class="box-title">Unique Visitor</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash3"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">6011</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs">
                            <h3 class="box-title">Bounce Rate</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash4"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="sales-sts-ctn">18%</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="traffic-analysis-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="white-box tranffic-als-inner">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success last-month-sc cl-one"><i class="fa fa-sort-asc"></i> 18% last month</small> Site Traffic</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6>
                                    <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6>
                                    <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6>
                                    <b>5.50%</b></div>
                            </div>
                            <div id="sparkline8"><canvas width="304" height="50" style="display: inline-block; width: 304px; height: 50px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="white-box tranffic-als-inner res-mg-t-30">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-danger last-month-sc cl-two"><i class="fa fa-sort-desc"></i> 18% last month</small>Site Traffic</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6>
                                    <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6>
                                    <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6>
                                    <b>5.50%</b></div>
                            </div>
                            <div id="sparkline9"><canvas width="304" height="50" style="display: inline-block; width: 304px; height: 50px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="white-box tranffic-als-inner res-mg-t-30">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success last-month-sc cl-three"><i class="fa fa-sort-asc"></i> 18% last month</small>Site Traffic</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6>
                                    <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6>
                                    <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6>
                                    <b>5.50%</b></div>
                            </div>
                            <div id="sparkline10"><canvas width="304" height="50" style="display: inline-block; width: 304px; height: 50px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-new-list-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="single-new-trend mg-t-30">
                            <a href="#"><img src="img/new-product/5.png" alt=""></a>
                            <div class="overlay-content">
                                <a href="#">
                                    <h2>$280</h2>
                                </a>
                                <a href="#" class="btn-small">Now</a>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Shopping"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Quick view"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a class="pro-tlt" href="#">
                                    <h4>Princes Diamond</h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="icon nalika-half-filled-rating-star color"></i>
                                    <i class="icon nalika-half-filled-rating-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="single-new-trend mg-t-30">
                            <a href="#"><img src="img/new-product/5.png" alt=""></a>
                            <div class="overlay-content">
                                <a href="#">
                                    <h2>$280</h2>
                                </a>
                                <a href="#" class="btn-small">Now</a>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Shopping"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Quick view"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#">
                                    <h4>Princes Diamond</h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="icon nalika-half-filled-rating-star color"></i>
                                    <i class="icon nalika-half-filled-rating-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="single-new-trend mg-t-30">
                            <a href="#"><img src="img/new-product/5.png" alt=""></a>
                            <div class="overlay-content">
                                <a href="#">
                                    <h2>$280</h2>
                                </a>
                                <a href="#" class="btn-small">Now</a>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Shopping"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Quick view"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#">
                                    <h4>Princes Diamond</h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="icon nalika-half-filled-rating-star color"></i>
                                    <i class="icon nalika-half-filled-rating-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="single-new-trend mg-t-30">
                            <a href="#"><img src="img/new-product/5.png" alt=""></a>
                            <div class="overlay-content">
                                <a href="#">
                                    <h2>$280</h2>
                                </a>
                                <a href="#" class="btn-small">Now</a>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Shopping"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Quick view"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#">
                                    <h4>Princes Diamond</h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="icon nalika-half-filled-rating-star color"></i>
                                    <i class="icon nalika-half-filled-rating-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject text-uppercase"><b>Order Statistic</b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp">
                                            <a href="#" class="btn btn-dark-blue btn-circle active tip-top" data-toggle="tooltip" title="" data-original-title="Upload">
													<i class="fa fa-cloud-download" aria-hidden="true"></i>
												</a>
                                            <a href="#" class="btn btn-dark btn-circle active tip-top" data-toggle="tooltip" title="" data-original-title="Refresh">
													<i class="fa fa-reply" aria-hidden="true"></i>
												</a>
                                            <a href="#" class="btn btn-blue-grey btn-circle active tip-top" data-toggle="tooltip" title="" data-original-title="Delete">
													<i class="fa fa-trash-o" aria-hidden="true"></i>
												</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="line-chart" class="flot-chart flot-chart-sts line-chart-statistic" style="padding: 0px; position: relative;"><canvas class="flot-base" width="787" height="362" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 787px; height: 362px;"></canvas><canvas class="flot-overlay" width="787" height="362" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 787px; height: 362px;"></canvas></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="analytics-rounded mg-b-30 res-mg-t-30">
                            <div class="analytics-rounded-content">
                                <h5>Percentage distribution</h5>
                                <h2><span class="counter">60</span>/20</h2>
                                <div class="text-center">
                                    <div id="sparkline51"><canvas width="116" height="116" style="display: inline-block; width: 116px; height: 116px; vertical-align: top;"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="analytics-rounded">
                            <div class="analytics-rounded-content">
                                <h5>Percentage division</h5>
                                <h2><span class="counter">150</span>/<span class="counter">54</span></h2>
                                <div class="text-center">
                                    <div id="sparkline52"><canvas width="116" height="116" style="display: inline-block; width: 116px; height: 116px; vertical-align: top;"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="author-area-pro">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="personal-info-wrap">
                            <div class="widget-head-info-box">
                                <div class="persoanl-widget-hd">
                                    <h2>Jon Royita</h2>
                                    <p>Founder of Uttara It Park</p>
                                </div>
                                <img src="img/notification/5.jpg" class="img-circle circle-border m-b-md" alt="profile">
                                <div class="social-widget-result">
                                    <span>100 Tweets</span> |
                                    <span>350 Following</span> |
                                    <span>610 Followers</span>
                                </div>
                            </div>
                            <div class="widget-text-box">
                                <h4>Jhon Royita</h4>
                                <p>To all the athaists attacking me right now, I can't make you believe in God, you have to have faith.</p>
                                <div class="text-right like-love-list">
                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                    <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="author-widgets-single res-mg-t-30">
                            <div class="author-wiget-inner">
                                <div class="perso-img">
                                    <img src="img/notification/6.jpg" class="img-circle circle-border m-b-md" alt="profile">
                                </div>
                                <div class="persoanl-widget-hd persoanl1-widget-hd">
                                    <h2>Fire Foxy</h2>
                                    <p>Founder of Uttara It House</p>
                                </div>
                                <div class="social-widget-result social-widget1-result">
                                    <span>100 Tweets</span> |
                                    <span>350 Following</span> |
                                    <span>610 Followers</span>
                                </div>
                            </div>
                            <div class="widget-text-box">
                                <h4>Fire Foxy</h4>
                                <p>To all the athaists attacking me right now, I can't make you believe in God, you have to have faith.</p>
                                <div class="text-right like-love-list">
                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                    <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="personal-info-wrap personal-info-ano res-mg-t-30">
                            <div class="widget-head-info-box">
                                <div class="persoanl-widget-hd">
                                    <h2>Jon Royita</h2>
                                    <p>Founder of Uttara It Park</p>
                                </div>
                                <img src="img/contact/2.jpg" class="img-circle circle-border m-b-md" alt="profile">
                                <div class="social-widget-result">
                                    <span>100 Tweets</span> |
                                    <span>350 Following</span> |
                                    <span>610 Followers</span>
                                </div>
                            </div>
                            <div class="widget-text-box">
                                <h4>Jhon Royita</h4>
                                <p>To all the athaists attacking me right now, I can't make you believe in God, you have to have faith.</p>
                                <div class="text-right like-love-list">
                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                    <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="calender-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="calender-inner">
                            <div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default">day</button><button type="button" class="fc-listWeek-button fc-button fc-state-default fc-corner-right">list</button></div></div><div class="fc-center"><h2>May 2021</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 756px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 108px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2021-04-25"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2021-04-26"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2021-04-27"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2021-04-28"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2021-04-29"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2021-04-30"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2021-05-01"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2021-04-25"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-04-25&quot;,&quot;type&quot;:&quot;day&quot;}">25</a></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2021-04-26"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-04-26&quot;,&quot;type&quot;:&quot;day&quot;}">26</a></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2021-04-27"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-04-27&quot;,&quot;type&quot;:&quot;day&quot;}">27</a></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2021-04-28"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-04-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2021-04-29"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-04-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a></td><td class="fc-day-top fc-fri fc-other-month fc-past" data-date="2021-04-30"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-04-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a></td><td class="fc-day-top fc-sat fc-past" data-date="2021-05-01"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a></td></tr></thead><tbody><tr><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-not-end fc-draggable" style="background-color:#f3c30b;border-color:#f3c30b;color:#1f2e86"><div class="fc-content"> <span class="fc-title">Conference</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" style="background-color:#e91e63;border-color:#e91e63;color:#1f2e86"><div class="fc-content"> <span class="fc-title">All Day Event</span></div><div class="fc-resizer fc-end-resizer"></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-today " data-date="2021-05-02"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-05-03"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2021-05-04"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-05-05"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-05-06"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-05-07"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-05-08"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-today " data-date="2021-05-02"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a></td><td class="fc-day-top fc-mon fc-future" data-date="2021-05-03"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a></td><td class="fc-day-top fc-tue fc-future" data-date="2021-05-04"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a></td><td class="fc-day-top fc-wed fc-future" data-date="2021-05-05"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a></td><td class="fc-day-top fc-thu fc-future" data-date="2021-05-06"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a></td><td class="fc-day-top fc-fri fc-future" data-date="2021-05-07"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a></td><td class="fc-day-top fc-sat fc-future" data-date="2021-05-08"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-08&quot;,&quot;type&quot;:&quot;day&quot;}">8</a></td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-not-start fc-end fc-draggable fc-resizable" style="background-color:#f3c30b;border-color:#f3c30b;color:#1f2e86"><div class="fc-content"> <span class="fc-title">Conference</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td class="fc-event-container" rowspan="6"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#FF5722;border-color:#FF5722;color:#1f2e86"><div class="fc-content"><span class="fc-time">7a</span> <span class="fc-title">Birthday Party</span></div></a></td><td rowspan="6"></td><td rowspan="6"></td><td rowspan="6"></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-not-end fc-draggable" style="background-color:#59e0c5;border-color:#59e0c5;color:#1f2e86"><div class="fc-content"> <span class="fc-title">Long Event</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#1f2e86;border-color:#1f2e86;color:#1f2e86"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td><td rowspan="5"></td><td rowspan="5"></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#0D4CFF;border-color:#0D4CFF;color:#1f2e86"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#1f2e86;border-color:#1f2e86;color:#1f2e86"><div class="fc-content"><span class="fc-time">2:30p</span> <span class="fc-title">Meeting</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#AA00FF;border-color:#AA00FF;color:#1f2e86"><div class="fc-content"><span class="fc-time">5:30p</span> <span class="fc-title">Happy Hour</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#00BCD4;border-color:#00BCD4;color:#1f2e86"><div class="fc-content"><span class="fc-time">8p</span> <span class="fc-title">Dinner</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 108px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-05-09"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-05-10"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2021-05-11"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-05-12"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-05-13"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-05-14"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-05-15"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2021-05-09"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-09&quot;,&quot;type&quot;:&quot;day&quot;}">9</a></td><td class="fc-day-top fc-mon fc-future" data-date="2021-05-10"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-10&quot;,&quot;type&quot;:&quot;day&quot;}">10</a></td><td class="fc-day-top fc-tue fc-future" data-date="2021-05-11"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-11&quot;,&quot;type&quot;:&quot;day&quot;}">11</a></td><td class="fc-day-top fc-wed fc-future" data-date="2021-05-12"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-12&quot;,&quot;type&quot;:&quot;day&quot;}">12</a></td><td class="fc-day-top fc-thu fc-future" data-date="2021-05-13"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-13&quot;,&quot;type&quot;:&quot;day&quot;}">13</a></td><td class="fc-day-top fc-fri fc-future" data-date="2021-05-14"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-14&quot;,&quot;type&quot;:&quot;day&quot;}">14</a></td><td class="fc-day-top fc-sat fc-future" data-date="2021-05-15"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-15&quot;,&quot;type&quot;:&quot;day&quot;}">15</a></td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-not-start fc-end fc-draggable fc-resizable" style="background-color:#59e0c5;border-color:#59e0c5;color:#1f2e86"><div class="fc-content"> <span class="fc-title">Long Event</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#FF5370;border-color:#FF5370;color:#1f2e86"><div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 108px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-05-16"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-05-17"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2021-05-18"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-05-19"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-05-20"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-05-21"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-05-22"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2021-05-16"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-16&quot;,&quot;type&quot;:&quot;day&quot;}">16</a></td><td class="fc-day-top fc-mon fc-future" data-date="2021-05-17"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-17&quot;,&quot;type&quot;:&quot;day&quot;}">17</a></td><td class="fc-day-top fc-tue fc-future" data-date="2021-05-18"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-18&quot;,&quot;type&quot;:&quot;day&quot;}">18</a></td><td class="fc-day-top fc-wed fc-future" data-date="2021-05-19"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-19&quot;,&quot;type&quot;:&quot;day&quot;}">19</a></td><td class="fc-day-top fc-thu fc-future" data-date="2021-05-20"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-20&quot;,&quot;type&quot;:&quot;day&quot;}">20</a></td><td class="fc-day-top fc-fri fc-future" data-date="2021-05-21"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-21&quot;,&quot;type&quot;:&quot;day&quot;}">21</a></td><td class="fc-day-top fc-sat fc-future" data-date="2021-05-22"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-22&quot;,&quot;type&quot;:&quot;day&quot;}">22</a></td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#FF5370;border-color:#FF5370;color:#1f2e86"><div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div></a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 108px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-05-23"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-05-24"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2021-05-25"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-05-26"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-05-27"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-05-28"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-05-29"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2021-05-23"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-23&quot;,&quot;type&quot;:&quot;day&quot;}">23</a></td><td class="fc-day-top fc-mon fc-future" data-date="2021-05-24"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-24&quot;,&quot;type&quot;:&quot;day&quot;}">24</a></td><td class="fc-day-top fc-tue fc-future" data-date="2021-05-25"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-25&quot;,&quot;type&quot;:&quot;day&quot;}">25</a></td><td class="fc-day-top fc-wed fc-future" data-date="2021-05-26"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-26&quot;,&quot;type&quot;:&quot;day&quot;}">26</a></td><td class="fc-day-top fc-thu fc-future" data-date="2021-05-27"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-27&quot;,&quot;type&quot;:&quot;day&quot;}">27</a></td><td class="fc-day-top fc-fri fc-future" data-date="2021-05-28"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a></td><td class="fc-day-top fc-sat fc-future" data-date="2021-05-29"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" href="http://google.com/" style="background-color:#323232;border-color:#323232;color:#1f2e86"><div class="fc-content"> <span class="fc-title">Click for Google</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 112px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-05-30"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-05-31"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2021-06-01"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2021-06-02"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2021-06-03"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2021-06-04"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2021-06-05"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2021-05-30"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a></td><td class="fc-day-top fc-mon fc-future" data-date="2021-05-31"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-05-31&quot;,&quot;type&quot;:&quot;day&quot;}">31</a></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2021-06-01"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-06-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2021-06-02"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-06-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2021-06-03"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-06-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2021-06-04"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-06-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2021-06-05"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2021-06-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
  <!-- foter -->

  <?php
        
        include "incloud/footer.php ";
         
        
        ?>

 <!-- foter --> 
    </div>


 