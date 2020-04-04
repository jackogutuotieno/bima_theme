<?php include 'header.php' ?>
    <!-- admin-panel -->
    <section class="admn-panel">
        <!-- container-fluid -->
        <div class="container-fluid h-100">
            <!-- row-->
            <div class="row dashboard-panels">
                <!-- col -->
                <div class="col-md-12 col-lg-2 p-0 left-col">
                    <!-- user-wrap -->
                    <div class="user-wrap">
                        <i class="fas fa-user-circle mb-2"></i>
                        <h2>User Bima Dashboard</h2>
                        <p><a href="#">View Profile</a></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                            <li><a href="#"><i class="fas fa-power-off"></i></a></li>
                        </ul>
                    </div>
                    <!-- ./user-wrap -->
                    <!-- side-bar-menu -->
                    <div class="side-bar-menu">
                        <ul>
                            <h3>main</h3>
                            <li class="active"><a href="dashboard.php"><i class="fas fa-tachometer-alt"></i>dashboard</a></li>
                        </ul>
                        <ul>
                            <h3>assets</h3>
                            <li><a href="new-policy.php"> <i class="fas fa-user-friends"></i> new policy</a></li>
                            <li><a href="renew-policy.php"> <i class="fas fa-clipboard-check"></i> renew policy</a></li>
                            <li><a href="claims.php"> <i class="fas fa-clipboard-list"></i> claims</a></li>
                            <li><a href="e-vault.php"><i class="fas fa-tachometer-alt"></i>e-vault</a></li>
                        </ul>
                    </div>
                    <!-- ./side-bar-menu -->
                </div>
                <!-- ./col -->
                <!-- col -->
                <div class="col-md-12 col-lg-10 right-col p-0">
                    <?php include 'admin-menu.php' ?>
                    <!-- nav-tabs -->
                    <ul class="nav nav-tabs mt-3" role="tablist">
                        <li class="nav-item col-sm-12 col-md-3 p-2">
                            <a class="nav-link p-0 bg-white d- active" href="#icea-lion-insurance" role="tab" data-toggle="tab">
                                <img src="images/tabs/icea-lion.png" class="img-fluid w-100" alt="">
                            </a>
                        </li>
                        <li class="nav-item col-sm-12 col-md-3 p-2">
                            <a class="nav-link p-0 bg-white d-flex" href="#madison-insurance" role="tab" data-toggle="tab">
                                <img src="images/tabs/madison.png" class="img-fluid w-100" alt="">
                            </a>
                        </li>
                        <li class="nav-item col-sm-12 col-md-3 p-2">
                            <a class="nav-link p-0 bg-white d-flex" href="#apa-insurance" role="tab" data-toggle="tab">
                                <img src="images/tabs/apa.png" class="img-fluid w-100" alt="">
                            </a>
                        </li>
                        <li class="nav-item col-sm-12 col-md-3 p-2">
                            <a class="nav-link p-0 bg-white d-flex" href="#jubilee-insurance" role="tab" data-toggle="tab">
                                <img src="images/tabs/jubilee.png" class="img-fluid w-100" alt="">
                            </a>
                        </li>
                    </ul>
                    <!-- ./nav-tabs -->
                    <!-- tab-content -->
                    <div class="tab-content mb-4">
                        <!-- tab-pane -->
                        <div role="tabpanel" class="tab-pane active" id="icea-lion-insurance">
                            <!-- row -->
                            <div class="row m-0">
                                <!-- col -->
                                <div class="col-md-12 col-lg-8">
                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-md-12 col-lg-5">
                                            <h3 class="title-block--6">My Policies</h3>
                                            <!-- admn-cont-scroller -->
                                            <div class="admn-cont-scroller owl-carousel owl-theme bg-white">
                                                <!-- card -->
                                                <div class="card p-3 m-0 border-0">
                                                    <img class="card-img-top" src="images/icea-lion.png" alt="">
                                                    <!-- card-body -->
                                                    <div class="card-body">
                                                        <i class="fas fa-umbrella"></i>
                                                        <h4 class="card-title">Health Insurance</h4>
                                                        <p class="card-text">Insured 4 members in total due for renewal <strong>23/ 02/ 2018</strong></p>
                                                    </div>
                                                    <!-- ./card-body -->
                                                </div>
                                                <!-- ./card -->
                                                <!-- card -->
                                                <div class="card p-3 m-0 border-0">
                                                    <img class="card-img-top" src="images/icea-lion.png" alt="">
                                                    <!-- card-body -->
                                                    <div class="card-body">
                                                        <i class="fas fa-umbrella"></i>
                                                        <h4 class="card-title">Health Insurance</h4>
                                                        <p class="card-text">Insured 4 members in total due for renewal <strong>23/ 02/ 2018</strong></p>
                                                    </div>
                                                    <!-- ./card-body -->
                                                </div>
                                                <!-- ./card -->
                                                <!-- card -->
                                                <div class="card p-3 m-0 border-0">
                                                    <img class="card-img-top" src="images/icea-lion.png" alt="">
                                                    <!-- card-body -->
                                                    <div class="card-body">
                                                        <i class="fas fa-umbrella"></i>
                                                        <h4 class="card-title">Health Insurance</h4>
                                                        <p class="card-text">Insured 4 members in total due for renewal <strong>23/ 02/ 2018</strong></p>
                                                    </div>
                                                    <!-- ./card-body -->
                                                </div>
                                                <!-- ./card -->
                                            </div>
                                            <!-- ./admn-cont-scroller -->
                                        </div>
                                        <!-- ./col -->
                                        <!-- col -->
                                        <div class="col-md-12 col-lg-7 pl-0">
                                            <h3 class="title-block--6">Notifications</h3>
                                            <!-- notifications-wrap -->
                                            <div class="notifications-wrap bg-white">
                                                <ul>
                                                    <li>
                                                        <i class="fas fa-check-circle"></i>
                                                        <h3>Motor vehicle claim approved</h3>
                                                        <p>Your claim has been approved. Contact your agent</p>
                                                        <p class="date">23/ 02/ 2018</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle"></i>
                                                        <h3>Health Policy set to expire in 2 Days</h3>
                                                        <p>Your health policy set to expire, please renew to enjoy</p>
                                                        <p class="date">23/ 02/ 2018</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-times-circle"></i>
                                                        <h3>Travel Insurance Expired</h3>
                                                        <p>Your health policy set to expire, please renew to enjoy</p>
                                                        <p class="date">23/ 02/ 2018</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- ./notifications-wrap -->
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- ./row -->
                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-sm-12 col-md-12">
                                            <h3 class="title-block--6">Claims</h3>
                                            <!-- btmWrap -->
                                            <div class="btmWrap bg-white">
                                                <!-- claims-list -->
                                                <ul class="claims-list bg-white m-0 row">
                                                    <li class="col-sm-12 col-md-4">
                                                        <h4>claim</h4>
                                                        <p>Your Claim: 100, 000 Ksh</p>
                                                        <p>Date Claimed: 23/ 02/ 2018</p>
                                                    </li>
                                                    <li class="col-sm-12 col-md-4">
                                                        <h4>assessor</h4>
                                                        <p>Assessor’s Value: 70, 000 Ksh</p>
                                                        <p>Excess Value: 30, 000 Ksh</p>
                                                        <p>Date Acessed: 25/ 02/ 2018</p>
                                                    </li>
                                                    <li class="col-sm-12 col-md-4">
                                                        <h4>garage</h4>
                                                        <p>Garage Name: Okode Fundi</p>
                                                        <p>Collection Date: 28/ 02/ 2018</p>
                                                    </li>
                                                </ul>
                                                <!-- ./claims-list -->
                                            </div>
                                            <!-- ./btmWrap -->
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- ./row -->
                                </div>
                                <!-- ./col -->
                                <!-- col -->
                                <div class="col-md-12 col-lg-4 splash-msg bg-white">
                                    <!-- text-wrap -->
                                    <div class="text-wrap">
                                        <h3>We are always ahead</h3>
                                        <p class="text-uppercase">Personal service and discounts upto 40%</p>
                                    </div>
                                    <!-- ./text-wrap -->
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- ./row -->
                        </div>
                        <!-- ./tab-pane -->
                        <!-- tab-pane -->
                        <div role="tabpanel" class="tab-pane fade" id="madison-insurance">
                            <!-- row -->
                            <div class="row m-0">
                                <!-- col -->
                                <div class="col-md-12 col-lg-8">
                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-md-12 col-lg-5">
                                            <h3 class="title-block--6">My Policies</h3>
                                            <!-- admn-cont-scroller -->
                                            <div class="admn-cont-scroller owl-carousel owl-theme bg-white">
                                                <!-- card -->
                                                <div class="card p-3 m-0 border-0">
                                                    <img class="card-img-top" src="images/icea-lion.png" alt="">
                                                    <!-- card-body -->
                                                    <div class="card-body">
                                                        <i class="fas fa-umbrella"></i>
                                                        <h4 class="card-title">Health Insurance</h4>
                                                        <p class="card-text">Insured 4 members in total due for renewal <strong>23/ 02/ 2018</strong></p>
                                                    </div>
                                                    <!-- ./card-body -->
                                                </div>
                                                <!-- ./card -->
                                                <!-- card -->
                                                <div class="card p-3 m-0 border-0">
                                                    <img class="card-img-top" src="images/icea-lion.png" alt="">
                                                    <!-- card-body -->
                                                    <div class="card-body">
                                                        <i class="fas fa-umbrella"></i>
                                                        <h4 class="card-title">Health Insurance</h4>
                                                        <p class="card-text">Insured 4 members in total due for renewal <strong>23/ 02/ 2018</strong></p>
                                                    </div>
                                                    <!-- ./card-body -->
                                                </div>
                                                <!-- ./card -->
                                                <!-- card -->
                                                <div class="card p-3 m-0 border-0">
                                                    <img class="card-img-top" src="images/icea-lion.png" alt="">
                                                    <!-- card-body -->
                                                    <div class="card-body">
                                                        <i class="fas fa-umbrella"></i>
                                                        <h4 class="card-title">Health Insurance</h4>
                                                        <p class="card-text">Insured 4 members in total due for renewal <strong>23/ 02/ 2018</strong></p>
                                                    </div>
                                                    <!-- ./card-body -->
                                                </div>
                                                <!-- ./card -->
                                            </div>
                                            <!-- ./admn-cont-scroller -->
                                        </div>
                                        <!-- ./col -->
                                        <!-- col -->
                                        <div class="col-md-12 col-lg-7 pl-0">
                                            <h3 class="title-block--6">Notifications</h3>
                                            <!-- notifications-wrap -->
                                            <div class="notifications-wrap bg-white">
                                                <ul>
                                                    <li>
                                                        <i class="fas fa-check-circle"></i>
                                                        <h3>Motor vehicle claim approved</h3>
                                                        <p>Your claim has been approved. Contact your agent</p>
                                                        <p class="date">23/ 02/ 2018</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle"></i>
                                                        <h3>Health Policy set to expire in 2 Days</h3>
                                                        <p>Your health policy set to expire, please renew to enjoy</p>
                                                        <p class="date">23/ 02/ 2018</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-times-circle"></i>
                                                        <h3>Travel Insurance Expired</h3>
                                                        <p>Your health policy set to expire, please renew to enjoy</p>
                                                        <p class="date">23/ 02/ 2018</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- ./notifications-wrap -->
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- ./row -->
                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-sm-12 col-md-12">
                                            <h3 class="title-block--6">Claims</h3>
                                            <!-- btmWrap -->
                                            <div class="btmWrap bg-white">
                                                <!-- claims-list -->
                                                <ul class="claims-list bg-white m-0 row">
                                                    <li class="col-sm-12 col-md-4">
                                                        <h4>claim</h4>
                                                        <p>Your Claim: 100, 000 Ksh</p>
                                                        <p>Date Claimed: 23/ 02/ 2018</p>
                                                    </li>
                                                    <li class="col-sm-12 col-md-4">
                                                        <h4>assessor</h4>
                                                        <p>Assessor’s Value: 70, 000 Ksh</p>
                                                        <p>Excess Value: 30, 000 Ksh</p>
                                                        <p>Date Acessed: 25/ 02/ 2018</p>
                                                    </li>
                                                    <li class="col-sm-12 col-md-4">
                                                        <h4>garage</h4>
                                                        <p>Garage Name: Okode Fundi</p>
                                                        <p>Collection Date: 28/ 02/ 2018</p>
                                                    </li>
                                                </ul>
                                                <!-- ./claims-list -->
                                            </div>
                                            <!-- ./btmWrap -->
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- ./row -->
                                </div>
                                <!-- ./col -->
                                <!-- col -->
                                <div class="col-md-12 col-lg-4 splash-msg bg-white">
                                    <!-- text-wrap -->
                                    <div class="text-wrap">
                                        <h3>We are always ahead</h3>
                                        <p class="text-uppercase">Personal service and discounts upto 40%</p>
                                    </div>
                                    <!-- ./text-wrap -->
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- ./row -->
                        </div>
                        <!-- ./tab-pane -->
                        <div role="tabpanel" class="tab-pane fade" id="apa-insurance">
                            <!-- row -->
                            <div class="row m-0">
                                <!-- col -->
                                <div class="col-md-12 col-lg-8">
                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-md-12 col-lg-5">
                                            <h3 class="title-block--6">My Policies</h3>
                                            <!-- admn-cont-scroller -->
                                            <div class="admn-cont-scroller owl-carousel owl-theme bg-white">
                                                <!-- card -->
                                                <div class="card p-3 m-0 border-0">
                                                    <img class="card-img-top" src="images/icea-lion.png" alt="">
                                                    <!-- card-body -->
                                                    <div class="card-body">
                                                        <i class="fas fa-umbrella"></i>
                                                        <h4 class="card-title">Health Insurance</h4>
                                                        <p class="card-text">Insured 4 members in total due for renewal <strong>23/ 02/ 2018</strong></p>
                                                    </div>
                                                    <!-- ./card-body -->
                                                </div>
                                                <!-- ./card -->
                                                <!-- card -->
                                                <div class="card p-3 m-0 border-0">
                                                    <img class="card-img-top" src="images/icea-lion.png" alt="">
                                                    <!-- card-body -->
                                                    <div class="card-body">
                                                        <i class="fas fa-umbrella"></i>
                                                        <h4 class="card-title">Health Insurance</h4>
                                                        <p class="card-text">Insured 4 members in total due for renewal <strong>23/ 02/ 2018</strong></p>
                                                    </div>
                                                    <!-- ./card-body -->
                                                </div>
                                                <!-- ./card -->
                                                <!-- card -->
                                                <div class="card p-3 m-0 border-0">
                                                    <img class="card-img-top" src="images/icea-lion.png" alt="">
                                                    <!-- card-body -->
                                                    <div class="card-body">
                                                        <i class="fas fa-umbrella"></i>
                                                        <h4 class="card-title">Health Insurance</h4>
                                                        <p class="card-text">Insured 4 members in total due for renewal <strong>23/ 02/ 2018</strong></p>
                                                    </div>
                                                    <!-- ./card-body -->
                                                </div>
                                                <!-- ./card -->
                                            </div>
                                            <!-- ./admn-cont-scroller -->
                                        </div>
                                        <!-- ./col -->
                                        <!-- col -->
                                        <div class="col-md-12 col-lg-7 pl-0">
                                            <h3 class="title-block--6">Notifications</h3>
                                            <!-- notifications-wrap -->
                                            <div class="notifications-wrap bg-white">
                                                <ul>
                                                    <li>
                                                        <i class="fas fa-check-circle"></i>
                                                        <h3>Motor vehicle claim approved</h3>
                                                        <p>Your claim has been approved. Contact your agent</p>
                                                        <p class="date">23/ 02/ 2018</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle"></i>
                                                        <h3>Health Policy set to expire in 2 Days</h3>
                                                        <p>Your health policy set to expire, please renew to enjoy</p>
                                                        <p class="date">23/ 02/ 2018</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-times-circle"></i>
                                                        <h3>Travel Insurance Expired</h3>
                                                        <p>Your health policy set to expire, please renew to enjoy</p>
                                                        <p class="date">23/ 02/ 2018</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- ./notifications-wrap -->
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- ./row -->
                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-sm-12 col-md-12">
                                            <h3 class="title-block--6">Claims</h3>
                                            <!-- btmWrap -->
                                            <div class="btmWrap bg-white">
                                                <!-- claims-list -->
                                                <ul class="claims-list bg-white m-0 row">
                                                    <li class="col-sm-12 col-md-4">
                                                        <h4>claim</h4>
                                                        <p>Your Claim: 100, 000 Ksh</p>
                                                        <p>Date Claimed: 23/ 02/ 2018</p>
                                                    </li>
                                                    <li class="col-sm-12 col-md-4">
                                                        <h4>assessor</h4>
                                                        <p>Assessor’s Value: 70, 000 Ksh</p>
                                                        <p>Excess Value: 30, 000 Ksh</p>
                                                        <p>Date Acessed: 25/ 02/ 2018</p>
                                                    </li>
                                                    <li class="col-sm-12 col-md-4">
                                                        <h4>garage</h4>
                                                        <p>Garage Name: Okode Fundi</p>
                                                        <p>Collection Date: 28/ 02/ 2018</p>
                                                    </li>
                                                </ul>
                                                <!-- ./claims-list -->
                                            </div>
                                            <!-- ./btmWrap -->
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- ./row -->
                                </div>
                                <!-- ./col -->
                                <!-- col -->
                                <div class="col-md-12 col-lg-4 splash-msg bg-white">
                                    <!-- text-wrap -->
                                    <div class="text-wrap">
                                        <h3>We are always ahead</h3>
                                        <p class="text-uppercase">Personal service and discounts upto 40%</p>
                                    </div>
                                    <!-- ./text-wrap -->
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- ./row -->
                        </div>
                        <!-- ./tab-pane -->
                        <!-- tab-pane -->
                        <div role="tabpanel" class="tab-pane fade" id="jubilee-insurance">
                            <!-- row -->
                            <div class="row m-0">
                                <!-- col -->
                                <div class="col-md-12 col-lg-8">
                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-md-12 col-lg-5">
                                            <h3 class="title-block--6">My Policies</h3>
                                            <!-- admn-cont-scroller -->
                                            <div class="admn-cont-scroller owl-carousel owl-theme bg-white">
                                                <!-- card -->
                                                <div class="card p-3 m-0 border-0">
                                                    <img class="card-img-top" src="images/icea-lion.png" alt="">
                                                    <!-- card-body -->
                                                    <div class="card-body">
                                                        <i class="fas fa-umbrella"></i>
                                                        <h4 class="card-title">Health Insurance</h4>
                                                        <p class="card-text">Insured 4 members in total due for renewal <strong>23/ 02/ 2018</strong></p>
                                                    </div>
                                                    <!-- ./card-body -->
                                                </div>
                                                <!-- ./card -->
                                                <!-- card -->
                                                <div class="card p-3 m-0 border-0">
                                                    <img class="card-img-top" src="images/icea-lion.png" alt="">
                                                    <!-- card-body -->
                                                    <div class="card-body">
                                                        <i class="fas fa-umbrella"></i>
                                                        <h4 class="card-title">Health Insurance</h4>
                                                        <p class="card-text">Insured 4 members in total due for renewal <strong>23/ 02/ 2018</strong></p>
                                                    </div>
                                                    <!-- ./card-body -->
                                                </div>
                                                <!-- ./card -->
                                                <!-- card -->
                                                <div class="card p-3 m-0 border-0">
                                                    <img class="card-img-top" src="images/icea-lion.png" alt="">
                                                    <!-- card-body -->
                                                    <div class="card-body">
                                                        <i class="fas fa-umbrella"></i>
                                                        <h4 class="card-title">Health Insurance</h4>
                                                        <p class="card-text">Insured 4 members in total due for renewal <strong>23/ 02/ 2018</strong></p>
                                                    </div>
                                                    <!-- ./card-body -->
                                                </div>
                                                <!-- ./card -->
                                            </div>
                                            <!-- ./admn-cont-scroller -->
                                        </div>
                                        <!-- ./col -->
                                        <!-- col -->
                                        <div class="col-md-12 col-lg-7 pl-0">
                                            <h3 class="title-block--6">Notifications</h3>
                                            <!-- notifications-wrap -->
                                            <div class="notifications-wrap bg-white">
                                                <ul>
                                                    <li>
                                                        <i class="fas fa-check-circle"></i>
                                                        <h3>Motor vehicle claim approved</h3>
                                                        <p>Your claim has been approved. Contact your agent</p>
                                                        <p class="date">23/ 02/ 2018</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle"></i>
                                                        <h3>Health Policy set to expire in 2 Days</h3>
                                                        <p>Your health policy set to expire, please renew to enjoy</p>
                                                        <p class="date">23/ 02/ 2018</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-times-circle"></i>
                                                        <h3>Travel Insurance Expired</h3>
                                                        <p>Your health policy set to expire, please renew to enjoy</p>
                                                        <p class="date">23/ 02/ 2018</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- ./notifications-wrap -->
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- ./row -->
                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-sm-12 col-md-12">
                                            <h3 class="title-block--6">Claims</h3>
                                            <!-- btmWrap -->
                                            <div class="btmWrap bg-white">
                                                <!-- claims-list -->
                                                <ul class="claims-list bg-white m-0 row">
                                                    <li class="col-sm-12 col-md-4">
                                                        <h4>claim</h4>
                                                        <p>Your Claim: 100, 000 Ksh</p>
                                                        <p>Date Claimed: 23/ 02/ 2018</p>
                                                    </li>
                                                    <li class="col-sm-12 col-md-4">
                                                        <h4>assessor</h4>
                                                        <p>Assessor’s Value: 70, 000 Ksh</p>
                                                        <p>Excess Value: 30, 000 Ksh</p>
                                                        <p>Date Acessed: 25/ 02/ 2018</p>
                                                    </li>
                                                    <li class="col-sm-12 col-md-4">
                                                        <h4>garage</h4>
                                                        <p>Garage Name: Okode Fundi</p>
                                                        <p>Collection Date: 28/ 02/ 2018</p>
                                                    </li>
                                                </ul>
                                                <!-- ./claims-list -->
                                            </div>
                                            <!-- ./btmWrap -->
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- ./row -->
                                </div>
                                <!-- ./col -->
                                <!-- col -->
                                <div class="col-md-12 col-lg-4 splash-msg bg-white">
                                    <!-- text-wrap -->
                                    <div class="text-wrap">
                                        <h3>We are always ahead</h3>
                                        <p class="text-uppercase">Personal service and discounts upto 40%</p>
                                    </div>
                                    <!-- ./text-wrap -->
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- ./row -->
                        </div>
                        <!-- ./tab-pane -->
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- ./row-->
        </div>
        <!-- ./container-fluid -->
    </section>
    <!-- ./admin-panel -->
<?php include 'footer.php' ?>