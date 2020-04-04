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
                    <!-- col -->
                    <div id="payOptions" class="row m-0 justify-content-center pt-5">
                        <!-- col -->
                        <div class="col-md-2 side-bar">
                            <h3>pay with</h3>
                            <!-- nav-pills -->
                            <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="mpesa-express" data-toggle="tab" href="#mpesa-express" role="tab" aria-controls="mpesa-express" aria-selected="true">Mpesa Express</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="mpesa" data-toggle="tab" href="#mpesa" role="tab" aria-controls="mpesa" aria-selected="false">Mpesa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="debit-credit" data-toggle="tab" href="#debit-credit" role="tab" aria-controls="debit-credit" aria-selected="false">Debit/Credit Card</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="mvisa" data-toggle="tab" href="#mvisa" role="tab" aria-controls="mvisa" aria-selected="false">Mvisa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="airtel" data-toggle="tab" href="#airtel" role="tab" aria-controls="airtel" aria-selected="false">Airtel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="kipochi-agent" data-toggle="tab" href="#kipochi-agent" role="tab" aria-controls="kipochi-agent" aria-selected="false">Kipochi Agent</a>
                                </li>
                            </ul>
                            <!-- ./nav-pills -->
                        </div>
                        <!-- ./col -->
                        <!-- col -->
                        <div class="col-md-6 bg-white main-cont">
                            <!-- tab-content -->
                            <div class="tab-content payment-options p-3 pt-4" id="myTabContent">
                                <!-- tab-pane -->
                                <div class="tab-pane fade show active" id="mpesa-express" role="tabpanel" aria-labelledby="mpesa-express">
                                    <!-- header -->
                                    <div class="header">
                                        <!-- figure -->
                                        <figure class="figure w-100">
                                            <img src="../images/mpesa-logo.png" class="figure-img img-fluid m-0" alt="">
                                            <!-- figcaption -->
                                            <figcaption class="figure-caption text-right">
                                                <p>chinedumwongera@yahoo.com</p>
                                                <p>Order: 306898745</p>
                                                <p>Amount: <strong>KES 33999.00</strong></p>
                                            </figcaption>
                                            <!-- ./figcaption -->
                                        </figure>
                                        <!-- ./figure -->
                                    </div>
                                    <!-- ./header -->
                                    <ul class="mt-4">
                                        <li>Select &lsquo;Pay Bill&rsquo; from your M-PESA menu (customer should ensure they have the correct amount required to cover the payment amount and to send the payment)</li>
                                        <li>Enter the &nbsp;&lsquo;Business Number&rsquo; - &nbsp;( the tenant&rsquo;s &nbsp;respective housing agent/landlord will &nbsp;provide this paybill number.)</li>
                                        <li>Enter the &lsquo;Account Number&rsquo; (This is the housing unit&rsquo;s unique account number on the Lipa Kodi service and the respective housing agent will share this with their tenants.)</li>
                                        <li>Enter the amount you wish to pay.</li>
                                        <li>Enter your M-PESA PIN.</li>
                                        <li>Confirm that all the details are correct and press OK</li>
                                        <li>The customer will receive a confirmation SMS from M-PESA immediately.</li>
                                        <li>The Housing Agent/landlord will have access to M-PESA system to track transactions on their PayBill service and reconcile records for their administrative purposes.</li>
                                        <li>The Housing Agent/Landlord will notify the customer on the receipt of the payment.</li>
                                    </ul>
                                </div>
                                <!-- ./tab-pane -->
                                <!-- tab-pane -->
                                <div class="tab-pane fade" id="mpesa" role="tabpanel" aria-labelledby="mpesa">
                                    <!-- header -->
                                    <div class="header">
                                        <!-- figure -->
                                        <figure class="figure w-100">
                                            <img src="../images/mpesa-logo.png" class="figure-img img-fluid m-0" alt="">
                                            <!-- figcaption -->
                                            <figcaption class="figure-caption text-right">
                                                <p>chinedumwongera@yahoo.com</p>
                                                <p>Order: 306898745</p>
                                                <p>Amount: <strong>KES 33999.00</strong></p>
                                            </figcaption>
                                            <!-- ./figcaption -->
                                        </figure>
                                        <!-- ./figure -->
                                    </div>
                                    <!-- ./header -->
                                    <ul class="mt-4">
                                        <li>Select &lsquo;Pay Bill&rsquo; from your M-PESA menu (customer should ensure they have the correct amount required to cover the payment amount and to send the payment)</li>
                                        <li>Enter the &nbsp;&lsquo;Business Number&rsquo; - &nbsp;( the tenant&rsquo;s &nbsp;respective housing agent/landlord will &nbsp;provide this paybill number.)</li>
                                        <li>Enter the &lsquo;Account Number&rsquo; (This is the housing unit&rsquo;s unique account number on the Lipa Kodi service and the respective housing agent will share this with their tenants.)</li>
                                        <li>Enter the amount you wish to pay.</li>
                                        <li>Enter your M-PESA PIN.</li>
                                        <li>Confirm that all the details are correct and press OK</li>
                                        <li>The customer will receive a confirmation SMS from M-PESA immediately.</li>
                                        <li>The Housing Agent/landlord will have access to M-PESA system to track transactions on their PayBill service and reconcile records for their administrative purposes.</li>
                                        <li>The Housing Agent/Landlord will notify the customer on the receipt of the payment.</li>
                                    </ul>
                                </div>
                                <!-- ./tab-pane -->
                                <!-- tab-pane -->
                                <div class="tab-pane fade" id="debit-credit" role="tabpanel" aria-labelledby="debit-credit">
                                    <!-- header -->
                                    <div class="header">
                                        <!-- figure -->
                                        <figure class="figure w-100">
                                            <img src="../images/mpesa-logo.png" class="figure-img img-fluid m-0" alt="">
                                            <!-- figcaption -->
                                            <figcaption class="figure-caption text-right">
                                                <p>chinedumwongera@yahoo.com</p>
                                                <p>Order: 306898745</p>
                                                <p>Amount: <strong>KES 33999.00</strong></p>
                                            </figcaption>
                                            <!-- ./figcaption -->
                                        </figure>
                                        <!-- ./figure -->
                                    </div>
                                    <!-- ./header -->
                                    <ul class="mt-4">
                                        <li>Select &lsquo;Pay Bill&rsquo; from your M-PESA menu (customer should ensure they have the correct amount required to cover the payment amount and to send the payment)</li>
                                        <li>Enter the &nbsp;&lsquo;Business Number&rsquo; - &nbsp;( the tenant&rsquo;s &nbsp;respective housing agent/landlord will &nbsp;provide this paybill number.)</li>
                                        <li>Enter the &lsquo;Account Number&rsquo; (This is the housing unit&rsquo;s unique account number on the Lipa Kodi service and the respective housing agent will share this with their tenants.)</li>
                                        <li>Enter the amount you wish to pay.</li>
                                        <li>Enter your M-PESA PIN.</li>
                                        <li>Confirm that all the details are correct and press OK</li>
                                        <li>The customer will receive a confirmation SMS from M-PESA immediately.</li>
                                        <li>The Housing Agent/landlord will have access to M-PESA system to track transactions on their PayBill service and reconcile records for their administrative purposes.</li>
                                        <li>The Housing Agent/Landlord will notify the customer on the receipt of the payment.</li>
                                    </ul>
                                </div>
                                <!-- ./tab-pane -->
                                <!-- tab-pane -->
                                <div class="tab-pane fade" id="mvisa" role="tabpanel" aria-labelledby="mvisa">
                                    <!-- header -->
                                    <div class="header">
                                        <!-- figure -->
                                        <figure class="figure w-100">
                                            <img src="../images/mpesa-logo.png" class="figure-img img-fluid m-0" alt="">
                                            <!-- figcaption -->
                                            <figcaption class="figure-caption text-right">
                                                <p>chinedumwongera@yahoo.com</p>
                                                <p>Order: 306898745</p>
                                                <p>Amount: <strong>KES 33999.00</strong></p>
                                            </figcaption>
                                            <!-- ./figcaption -->
                                        </figure>
                                        <!-- ./figure -->
                                    </div>
                                    <!-- ./header -->
                                    <ul class="mt-4">
                                        <li>Select &lsquo;Pay Bill&rsquo; from your M-PESA menu (customer should ensure they have the correct amount required to cover the payment amount and to send the payment)</li>
                                        <li>Enter the &nbsp;&lsquo;Business Number&rsquo; - &nbsp;( the tenant&rsquo;s &nbsp;respective housing agent/landlord will &nbsp;provide this paybill number.)</li>
                                        <li>Enter the &lsquo;Account Number&rsquo; (This is the housing unit&rsquo;s unique account number on the Lipa Kodi service and the respective housing agent will share this with their tenants.)</li>
                                        <li>Enter the amount you wish to pay.</li>
                                        <li>Enter your M-PESA PIN.</li>
                                        <li>Confirm that all the details are correct and press OK</li>
                                        <li>The customer will receive a confirmation SMS from M-PESA immediately.</li>
                                        <li>The Housing Agent/landlord will have access to M-PESA system to track transactions on their PayBill service and reconcile records for their administrative purposes.</li>
                                        <li>The Housing Agent/Landlord will notify the customer on the receipt of the payment.</li>
                                    </ul>
                                </div>
                                <!-- ./tab-pane -->
                                <!-- tab-pane -->
                                <div class="tab-pane fade" id="airtel" role="tabpanel" aria-labelledby="airtel">
                                    <!-- header -->
                                    <div class="header">
                                        <!-- figure -->
                                        <figure class="figure w-100">
                                            <img src="../images/mpesa-logo.png" class="figure-img img-fluid m-0" alt="">
                                            <!-- figcaption -->
                                            <figcaption class="figure-caption text-right">
                                                <p>chinedumwongera@yahoo.com</p>
                                                <p>Order: 306898745</p>
                                                <p>Amount: <strong>KES 33999.00</strong></p>
                                            </figcaption>
                                            <!-- ./figcaption -->
                                        </figure>
                                        <!-- ./figure -->
                                    </div>
                                    <!-- ./header -->
                                    <ul class="mt-4">
                                        <li>Select &lsquo;Pay Bill&rsquo; from your M-PESA menu (customer should ensure they have the correct amount required to cover the payment amount and to send the payment)</li>
                                        <li>Enter the &nbsp;&lsquo;Business Number&rsquo; - &nbsp;( the tenant&rsquo;s &nbsp;respective housing agent/landlord will &nbsp;provide this paybill number.)</li>
                                        <li>Enter the &lsquo;Account Number&rsquo; (This is the housing unit&rsquo;s unique account number on the Lipa Kodi service and the respective housing agent will share this with their tenants.)</li>
                                        <li>Enter the amount you wish to pay.</li>
                                        <li>Enter your M-PESA PIN.</li>
                                        <li>Confirm that all the details are correct and press OK</li>
                                        <li>The customer will receive a confirmation SMS from M-PESA immediately.</li>
                                        <li>The Housing Agent/landlord will have access to M-PESA system to track transactions on their PayBill service and reconcile records for their administrative purposes.</li>
                                        <li>The Housing Agent/Landlord will notify the customer on the receipt of the payment.</li>
                                    </ul>
                                </div>
                                <!-- ./tab-pane -->
                                <!-- tab-pane -->
                                <div class="tab-pane fade" id="kipochi-agent" role="tabpanel" aria-labelledby="kipochi-agent">
                                    <!-- header -->
                                    <div class="header">
                                        <!-- figure -->
                                        <figure class="figure w-100">
                                            <img src="../images/mpesa-logo.png" class="figure-img img-fluid m-0" alt="">
                                            <!-- figcaption -->
                                            <figcaption class="figure-caption text-right">
                                                <p>chinedumwongera@yahoo.com</p>
                                                <p>Order: 306898745</p>
                                                <p>Amount: <strong>KES 33999.00</strong></p>
                                            </figcaption>
                                            <!-- ./figcaption -->
                                        </figure>
                                        <!-- ./figure -->
                                    </div>
                                    <!-- ./header -->
                                    <ul class="mt-4">
                                        <li>Select &lsquo;Pay Bill&rsquo; from your M-PESA menu (customer should ensure they have the correct amount required to cover the payment amount and to send the payment)</li>
                                        <li>Enter the &nbsp;&lsquo;Business Number&rsquo; - &nbsp;( the tenant&rsquo;s &nbsp;respective housing agent/landlord will &nbsp;provide this paybill number.)</li>
                                        <li>Enter the &lsquo;Account Number&rsquo; (This is the housing unit&rsquo;s unique account number on the Lipa Kodi service and the respective housing agent will share this with their tenants.)</li>
                                        <li>Enter the amount you wish to pay.</li>
                                        <li>Enter your M-PESA PIN.</li>
                                        <li>Confirm that all the details are correct and press OK</li>
                                        <li>The customer will receive a confirmation SMS from M-PESA immediately.</li>
                                        <li>The Housing Agent/landlord will have access to M-PESA system to track transactions on their PayBill service and reconcile records for their administrative purposes.</li>
                                        <li>The Housing Agent/Landlord will notify the customer on the receipt of the payment.</li>
                                    </ul>
                                </div>
                                <!-- ./tab-pane -->
                            </div>
                            <!-- ./tab-content -->
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- ./col -->
                </div>
                <!-- ./col -->
            </div>
            <!-- ./row-->
        </div>
        <!-- ./container-fluid -->
    </section>
    <!-- ./admin-panel -->
<?php include 'footer.php' ?>