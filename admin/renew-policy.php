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
                            <li class="active"><a href="renew-policy.php"> <i class="fas fa-clipboard-check"></i> renew policy</a></li>
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
                    <!-- col -->
                    <div class="col-sm-12 col-md-12">
                        <!-- title-header -->
                        <div class="title-header">
                            <h2>Renew policy</h2>
                            <ul class="nav nav-tabs btn-tabs ml-0 border-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-info type-1 active" href="#motor-insurance" role="tab" data-toggle="tab">Motor Insurance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-info type-2" href="#health-insurance" role="tab" data-toggle="tab">Health Insurance</a>
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
                                <!-- row -->
                                <div class="row m-0 pr-3">
                                    <!-- col -->
                                    <div class="col-md-12 col-lg-6">
                                        <!-- cont-inner-wrap -->
                                        <div class="cont-inner-wrap bg-white p-4">
                                            <!-- title-header -->
                                            <div class="title-header p-2">
                                                <h2>Renew</h2>
                                            </div>
                                            <!-- ./title-header -->
                                            <!-- form -->
                                            <form action="#">
                                                <!-- form-group -->
                                                <div class="form-group">
                                                    <label for="vehicle-type">My Policy</label>
                                                    <input type="text" class="form-control bg-white" name="motorInsurance" placeholder="" value="Motor Insurance" readonly>
                                                </div>
                                                <!-- ./form-group -->
                                                <!-- form-group -->
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" name="name" placeholder="Edward Mwongera">
                                                </div>
                                                <!-- ./form-group -->
                                                <!-- ctn-btn-group -->
                                                <div class="cnt-btn-group mt-3">
                                                    <p><a href="#" class="btn btn-primary line--type">paygo</a></p>
                                                    <p><a href="#" class="btn btn-primary">pay now</a></p>
                                                </div>
                                                <!-- ./ctn-btn-group -->
                                            </form>
                                            <!-- ./form -->
                                        </div>
                                        <!-- ./cont-inner-wrap -->
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- ./row -->
                            </div>
                            <!-- ./tab-pane -->
                            <!-- tab-pane -->
                            <div role="tabpanel" class="tab-pane active" id="health-insurance">
                                <!-- row -->
                                <div class="row m-0 pr-3">
                                    <!-- col -->
                                    <div class="col-md-12 col-lg-6">
                                        <!-- cont-inner-wrap -->
                                        <div class="cont-inner-wrap bg-white p-4">
                                            <!-- title-header -->
                                            <div class="title-header p-2">
                                                <h2>Renew</h2>
                                            </div>
                                            <!-- ./title-header -->
                                            <!-- form -->
                                            <form action="#">
                                                <!-- form-group -->
                                                <div class="form-group">
                                                    <p>2 Children</p>
                                                    <input type="text" class="form-control bg-white" name="name" placeholder="" value="Eva Wangechi" readonly>
                                                </div>
                                                <!-- ./form-group -->
                                                <!-- form-group -->
                                                <div class="form-group">
                                                <input type="text" class="form-control bg-white" name="name" placeholder="" value="Chris Muga" readonly>
                                                </div>
                                                <!-- ./form-group -->
                                                <!-- ctn-btn-group -->
                                                <div class="cnt-btn-group mt-3">
                                                    <p><a href="#" class="btn btn-primary line--type">paygo</a></p>
                                                    <p><a href="#" class="btn btn-primary">pay now</a></p>
                                                </div>
                                                <!-- ./ctn-btn-group -->
                                            </form>
                                            <!-- ./form -->
                                        </div>
                                        <!-- ./cont-inner-wrap -->
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- ./row -->
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