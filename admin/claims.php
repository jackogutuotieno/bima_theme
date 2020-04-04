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
                            <li><a href="dashboard.php" class="active"><i class="fas fa-tachometer-alt"></i>dashboard</a></li>
                        </ul>
                        <ul>
                            <h3>assets</h3>
                            <li><a href="new-policy.php"> <i class="fas fa-user-friends"></i> new policy</a></li>
                            <li><a href="renew-policy.php"> <i class="fas fa-clipboard-check"></i> renew policy</a></li>
                            <li class="active"><a href="claims.php"> <i class="fas fa-clipboard-list"></i> claims</a></li>
                            <li><a href="e-vault.php"><i class="fas fa-tachometer-alt"></i>e-vault</a></li>
                        </ul>
                    </div>
                    <!-- ./side-bar-menu -->
                </div>
                <!-- ./col -->
                <!-- col -->
                <div class="col-md-12 col-lg-10 right-col p-0">
                    <?php include 'admin-menu.php' ?>
                    <!-- col -->
                    <div class="col-sm-12 col-md-12">
                        <!-- title-header -->
                        <div class="title-header">
                            <h2>Claims</h2>
                            <ul class="nav nav-tabs btn-tabs ml-0 border-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-info type-2" href="#health-insurance" role="tab" data-toggle="tab">Motor Insurance</a>
                                </li>
                            </ul>
                        </div>
                        <!-- ./title-header -->
                    </div>
                    <!-- ./col -->
                    <!-- row -->
                    <div class="row m-0">
                        <!-- tab-content-->
                        <div class="tab-content w-100">
                            <!-- tab-pane -->
                            <div role="tabpanel" class="tab-pane active" id="motor-insurance">
                                <!-- form -->
                                <form action="#">
                                    <!-- row -->
                                    <div class="row m-0 pl-3">
                                        <!-- col -->
                                        <div class="col-md-12 col-lg-6">
                                            <!-- row -->
                                            <div class="row">
                                                <!-- cont-inner -->
                                                <div class="cont-inner w-100 bg-white">
                                                    <!-- title-header -->
                                                    <div class="title-header">
                                                        <h2>Images</h2>
                                                    </div>
                                                    <!-- ./title-header -->
                                                    <img src="images/browse-files.png" class="img-fluid d-block m-auto" alt="">
                                                    <input type="file" id="addImages" class="filepond" name="filepond" multiple data-max-file-size="3MB" data-max-files="3" />
                                                </div>
                                                <!-- ./cont-inner -->
                                            </div>
                                            <!-- ./row -->
                                        </div>
                                        <!-- ./col -->
                                        <!-- col -->
                                        <div class="col-md-12 col-lg-6">
                                            <!-- cont-inner-wrap -->
                                            <div class="cont-inner-wrap bg-white p-4">
                                                    <!-- title-header -->
                                                    <div class="title-header p-2">
                                                        <h2>Description</h2>
                                                    </div>
                                                    <!-- ./title-header -->
                                                    <!-- form-group -->
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="" id="" rows="5"></textarea>
                                                    </div>
                                                    <!-- ./form-group -->
                                            </div>
                                            <!-- ./cont-inner-wrap -->
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- ./row -->
                                    <!-- ctn-btn-group -->
                                    <div class="cnt-btn-group mt-3">
                                        <p><a href="#" class="btn btn-primary line--type">paygo</a></p>
                                        <p><a href="#" class="btn btn-primary">pay now</a></p>
                                    </div>
                                    <!-- ./ctn-btn-group -->
                                </form>
                                <!-- ./form -->
                            </div>
                            <!-- ./tab-pane -->
                        </div>
                        <!-- ./tab-content-->
                    </div>
                    <!-- ./row -->
                </div>
                <!-- ./col -->
            </div>
            <!-- ./row-->
        </div>
        <!-- ./container-fluid -->
    </section>
    <!-- ./admin-panel -->
<?php include 'footer.php' ?>