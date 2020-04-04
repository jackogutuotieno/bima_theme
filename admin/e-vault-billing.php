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
                            <li><a href="claims.php"> <i class="fas fa-clipboard-list"></i> claims</a></li>
                            <li class="active"><a href="e-vault.php"><i class="fas fa-tachometer-alt"></i>e-vault</a></li>
                        </ul>
                    </div>
                    <!-- ./side-bar-menu -->
                </div>
                <!-- ./col -->
                <!-- col -->
                <div class="col-md-12 col-lg-10 right-col p-0">
                    <?php include 'admin-menu.php' ?>
                    <!-- row -->
                    <div class="row justify-content-center m-0">
                        <!-- col -->
                        <div class="col-md-6 bg-white mt-3">
                            <!-- title-header -->
                            <div class="title-header p-2">
                                <h2>Client Address</h2>
                                <h3>Edward Mwongera</h3>
                                <p>Makuyu Lane, Lenana Road, westlands - Central, Nairobi 0722328513</p>
                            </div>
                            <!-- ./title-header -->
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- ./row -->
                     <!-- row -->
                     <div class="row justify-content-center m-0">
                        <!-- col -->
                        <div class="col-md-6 bg-white mt-3 mb-2">
                            <!-- cont-inner -->
                            <div class="cont-inner policy-type w-100 bg-white">
                                <!-- title-header -->
                                <div class="title-header p-2">
                                    <h2>Delivery method</h2>                                                 
                                </div>
                                <!-- ./title-header -->
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input type="radio" class="form-check-input" value="checkedValue" checked>
                                        <h4>Delivery to your home or oce</h4>
                                        <p>Delivered on Tuesday 11 Dec between 8am and 6pm for Ksh 200</p>
                                  </label>
                                  <div class="form-check">
                                      <label class="form-check-label">
                                      <input type="radio" class="form-check-input" value="checkedValue">
                                        <h4>Pickup Station</h4>
                                        <p>Ready for pick up between Tuesday 11 Dec and Saturday 15 Dec Free in Nairobi,Cheaper than Delivery</p>
                                    </label>
                                  </div>
                                </div>
                                <!-- accordianId -->
                                <div id="accordianId" role="tablist" aria-multiselectable="true">
                                    <!-- card -->
                                    <div class="card">
                                        <!-- card-header -->
                                        <div class="card-header" role="tab" id="section1HeaderId">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId" aria-expanded="false" aria-controls="section1ContentId">SELECT PICKUP LOCATION</a>
                                            </h5>
                                        </div>
                                        <!-- ./card-header -->
                                        <!-- collapse -->
                                        <div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="section1HeaderId">
                                            <div class="card-body">
                                                <p>ICEA LION, Motor Vehicle Insurance,Comprehensive. Landcruiser V8 KCK 222K, KSh 32,500</p>
                                            </div>
                                        </div>
                                        <!-- ./collapse -->
                                    </div>
                                    <!-- ./card -->
                                </div>
                                <!-- ./accordianId -->
                                <!-- table -->
                                <table class="table table-borderless sumTotal table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td scope="row" class="text-left"><p class="hidden visible animated fadeInUp full-visible"><strong>Sub Total</strong></p></td>
                                            <td><p class="text-right"><strong>53,155</strong></p></td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-left"><p><strong>PHCF &amp; Other Levies</strong></p></td>
                                            <td><p class="text-right"><strong>239</strong></p></td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-left"><p><strong>Stamp Duty</strong></p></td>
                                            <td><p class="text-right"><strong>40</strong></p></td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-left"><p><strong>Total</strong></p></td>
                                            <td><p class="text-right"><strong>53,434</strong></p></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- ./table -->
                            </div>
                            <!-- ./cont-inner -->
                        </div>
                        <!-- ./col -->
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