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
                            <li class="active"><a href="new-policy.php"> <i class="fas fa-user-friends"></i> new policy</a></li>
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
                    <!-- col -->
                    <div class="col-sm-12 col-md-12">
                        <!-- title-header -->
                        <div class="title-header">
                            <h2>Buy new policy</h2>
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
                                                <h2>Vehicle Details</h2>
                                            </div>
                                            <!-- ./title-header -->
                                            <!-- form -->
                                            <form action="#">
                                                <!-- form-group -->
                                                <div class="form-group">
                                                <label for="vehicle-type">Type</label>
                                                <input type="text" class="form-control" name="vehicle-type" placeholder="Toyota Rav 4">
                                                </div>
                                                <!-- ./form-group -->
                                                <!-- form-group -->
                                                <div class="form-group">
                                                <label for="year">Year of manufacture</label>
                                                <input type="text" class="form-control" name="year" placeholder="Year of manufacture">
                                                </div>
                                                <!-- ./form-group -->
                                                <!-- form-group -->
                                                <div class="form-group">
                                                <label for="logbook-number">Logbook Number</label>
                                                <input type="text" class="form-control" name="logbook-number" placeholder="123e45677456">
                                                </div>
                                                <!-- ./form-group -->
                                                <!-- form-group -->
                                                <div class="form-group">
                                                <label for="id-number">ID Number</label>
                                                <input type="number" class="form-control" name="id-number" placeholder="292136789">
                                                </div>
                                                <!-- ./form-group -->
                                                <!-- form-group -->
                                                <div class="form-group">
                                                <label for="kra-pin">KRA Pin</label>
                                                <input type="text" class="form-control" name="id-number" placeholder="KRA Pin">
                                                </div>
                                                <!-- ./form-group -->
                                                <!-- form-group -->
                                                <div class="form-group">
                                                <label for="registration-number">Registration Number</label>
                                                <input type="number" class="form-control" name="registration-number" placeholder="1234567899">
                                                </div>
                                                <!-- ./form-group -->
                                            </form>
                                            <!-- ./form -->
                                        </div>
                                        <!-- ./cont-inner-wrap -->
                                    </div>
                                    <!-- ./col -->
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
                                        <!-- row -->
                                        <div class="row mt-3">
                                            <!-- cont-inner -->
                                            <div class="cont-inner policy-type w-100 bg-white">
                                                <!-- title-header -->
                                                <div class="title-header">
                                                    <h2>Coverage</h2>
                                                    <div class="policy-select">
                                                        <label>Comprehensive<input type="radio" name="colorRadio" value="comprehensive"></label>
                                                        <label>Third party<input type="radio" name="colorRadio" value="third-party"></label>
                                                    </div>                                                    
                                                </div>
                                                <!-- ./title-header -->
                                            </div>
                                            <!-- ./cont-inner -->
                                        </div>
                                        <!-- ./row -->
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- ./row -->
                                <!-- row -->
                                <div class="row m-0">
                                    <!-- col -->
                                    <div class="col-md-12 col-lg-12">
                                        <!-- box -->
                                        <div class="comprehensive box">
                                            <!-- row -->
                                            <div class="row">
                                                <!-- form -->
                                                <form action="#" class="w-100 row m-0">
                                                    <!-- col -->
                                                    <div class="col-md-12 col-lg-6">
                                                        <!-- cont-inner -->
                                                        <div class="cont-inner policy-type w-100 bg-white">
                                                            <!-- title-header -->
                                                            <div class="title-header">
                                                                <h2>Coverage and policies</h2>                                                 
                                                            </div>
                                                            <!-- ./title-header -->
                                                            <!-- table -->
                                                            <table class="table table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <td scope="row"><img src="images/tabs/jubilee.png" class="img-fluid" alt=""></td>
                                                                        <td>14,000</td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row"><img src="images/tabs/apa.png" class="img-fluid" alt=""></td>
                                                                        <td>23,500</td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row"><img src="images/tabs/madison.png" class="img-fluid" alt=""></td>
                                                                        <td>27,000</td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row"><img src="images/tabs/icea-lion.png" class="img-fluid" alt=""></td>
                                                                        <td>67,500</td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- ./table -->
                                                        </div>
                                                        <!-- ./cont-inner -->

                                                        <!-- cont-inner -->
                                                        <div class="cont-inner policy-type w-100 bg-white">
                                                            <!-- title-header -->
                                                            <div class="title-header">
                                                                <h2>More details</h2>                                                 
                                                            </div>
                                                            <!-- ./title-header -->
                                                            <!-- accordianId -->
                                                            <div id="accordianId" role="tablist" aria-multiselectable="true">
                                                                <!-- card -->
                                                                <div class="card">
                                                                    <!-- card-header -->
                                                                    <div class="card-header" role="tab" id="section1HeaderId">
                                                                        <h5 class="mb-0">
                                                                            <a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId" aria-expanded="false" aria-controls="section1ContentId">Features</a>
                                                                        </h5>
                                                                    </div>
                                                                    <!-- ./card-header -->
                                                                    <!-- collapse -->
                                                                    <div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="section1HeaderId">
                                                                        <div class="card-body">Features content</div>
                                                                    </div>
                                                                    <!-- ./collapse -->
                                                                </div>
                                                                <!-- ./card -->
                                                                <!-- card -->
                                                                <div class="card">
                                                                    <!-- card-header -->
                                                                    <div class="card-header" role="tab" id="section2HeaderId">
                                                                        <h5 class="mb-0">
                                                                            <a data-toggle="collapse" data-parent="#accordianId" href="#section2ContentId" aria-expanded="false" aria-controls="section2ContentId">What is covered</a>
                                                                        </h5>
                                                                    </div>
                                                                    <!-- ./card -->
                                                                    <!-- collapse -->
                                                                    <div id="section2ContentId" class="collapse in" role="tabpanel" aria-labelledby="section2HeaderId">
                                                                        <div class="card-body">What is covered content</div>
                                                                    </div>
                                                                    <!-- ./collapse -->
                                                                </div>
                                                                <!-- ./card -->
                                                                <!-- card -->
                                                                <div class="card">
                                                                    <!-- card-header -->
                                                                    <div class="card-header" role="tab" id="section3HeaderId">
                                                                        <h5 class="mb-0">
                                                                            <a data-toggle="collapse" data-parent="#accordianId" href="#section3ContentId" aria-expanded="false" aria-controls="section3ContentId">What is not covered</a>
                                                                        </h5>
                                                                    </div>
                                                                    <!-- ./card-header -->
                                                                    <!-- collapse -->
                                                                    <div id="section3ContentId" class="collapse in" role="tabpanel" aria-labelledby="section3HeaderId">
                                                                        <div class="card-body">What is not covered content</div>
                                                                    </div>
                                                                    <!-- ./collapse -->
                                                                </div>
                                                                <!-- ./card -->
                                                                <!-- card -->
                                                                <div class="card">
                                                                    <!-- card-header -->
                                                                    <div class="card-header" role="tab" id="section4HeaderId">
                                                                        <h5 class="mb-0">
                                                                            <a data-toggle="collapse" data-parent="#accordianId" href="#section4ContentId" aria-expanded="false" aria-controls="section4ContentId">Others</a>
                                                                        </h5>
                                                                    </div>
                                                                    <!-- ./card-header -->
                                                                    <!-- collapse -->
                                                                    <div id="section4ContentId" class="collapse in" role="tabpanel" aria-labelledby="section4HeaderId">
                                                                        <div class="card-body">Others content</div>
                                                                    </div>
                                                                    <!-- ./collapse -->
                                                                </div>
                                                                <!-- card -->     
                                                            </div>
                                                            <!-- ./accordianId -->
                                                        </div>
                                                        <!-- ./cont-inner -->
                                                    </div>
                                                    <!-- ./col -->
                                                    <!-- col -->
                                                    <div class="col-md-12 col-lg-6 pl-0">
                                                        <!-- cont-inner -->
                                                        <div class="cont-inner policy-type w-100 bg-white">
                                                            <!-- title-header -->
                                                            <div class="title-header">
                                                                <h2>Add more benefits</h2>                                                 
                                                            </div>
                                                            <!-- ./title-header -->
                                                            <!-- table -->
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td scope="row" class="text-left">Basic Premium</td>
                                                                        <td>53, 155</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- ./table -->
                                                            <h3 class="text-uppercase title-block--7 pl-3 pb-3">select benefits</h3>
                                                            <!-- table -->
                                                            <table class="table benefits mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td scope="row" class="text-left">
                                                                            <div class="form-check">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                                    Windscreen
                                                                                </label>
                                                                                <div class="form-group">
                                                                                  <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="50,000">
                                                                                  <button class="btn btn-primary edit-btn">edit</button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Free</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row" class="text-left">
                                                                            <div class="form-check">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                                    Car/DVD Equipment
                                                                                </label>
                                                                                <div class="form-group">
                                                                                  <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="50,000">
                                                                                  <button class="btn btn-primary edit-btn">edit</button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Free</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row" class="text-left">
                                                                            <div class="form-check">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                                    Riot, Strike and civil commotion
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                        <td>Free</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row" class="text-left">
                                                                            <div class="form-check">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                                    Excess Rotector
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                        <td>-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row" class="text-left">
                                                                            <div class="form-check">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                                    24 hour road rescue fees (AA Kenya)
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                        <td>-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row" class="text-left">
                                                                            <div class="form-check">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                                    Political violence and terrorism
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                        <td>-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row" class="text-left">
                                                                            <div class="form-check">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                                    Courtesy Car Benefit
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                        <td>-</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- table -->
                                                            <table class="table table-borderless sumTotal">
                                                                <tbody>
                                                                    <tr>
                                                                        <td scope="row" class="text-left"><p><strong>Sub Total</strong></p></td>
                                                                        <td><p><strong>53,155</strong></p></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row" class="text-left"><p><strong>PHCF & Other Levies</strong></p></td>
                                                                        <td><p><strong>239</strong></p></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row" class="text-left"><p><strong>Stamp Duty</strong></p></td>
                                                                        <td><p><strong>40</strong></p></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row" class="text-left"><p><strong>Total</strong></p></td>
                                                                        <td><p><strong>53,434</strong></p></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- ./table -->
                                                        </div>
                                                        <!-- ./cont-inner -->
                                                        <!-- ctn-btn-group -->
                                                        <div class="cnt-btn-group">
                                                            <p><a href="#" class="btn btn-primary line--type">paygo</a></p>
                                                            <p><a href="#" class="btn btn-primary">pay now</a></p>
                                                        </div>
                                                        <!-- ./ctn-btn-group -->
                                                    </div>
                                                    <!-- ./col -->
                                                </form>
                                                <!-- ./form -->
                                            </div>
                                            <!-- ./row -->
                                        </div>
                                        <!-- ./box -->
                                        <!-- box -->
                                        <div class="third-party box">
                                            <!-- form -->
                                            <form class="row" action="#">
                                                <!-- col -->
                                                <div class="col-md-12 col-lg-6">
                                                    <!-- cont-inner -->
                                                    <div class="cont-inner policy-type w-100 bg-white">
                                                        <!-- title-header -->
                                                        <div class="title-header">
                                                            <h2>Coverage and policies</h2>                                                 
                                                        </div>
                                                        <!-- ./title-header -->
                                                        <!-- table -->
                                                        <table class="table table-borderless">
                                                            <tbody>
                                                                <tr>
                                                                    <td scope="row"><img src="images/tabs/jubilee.png" class="img-fluid" alt=""></td>
                                                                    <td>14,000</td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row"><img src="images/tabs/apa.png" class="img-fluid" alt=""></td>
                                                                    <td>23,500</td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row"><img src="images/tabs/madison.png" class="img-fluid" alt=""></td>
                                                                    <td>27,000</td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row"><img src="images/tabs/icea-lion.png" class="img-fluid" alt=""></td>
                                                                    <td>67,500</td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- ./table -->
                                                    </div>
                                                    <!-- ./cont-inner -->
                                                </div>
                                                <!-- ./col -->
                                                <!-- col -->
                                                <div class="col-md-12 col-lg-6 pl-0">
                                                    <!-- cont-inner -->
                                                    <div class="cont-inner policy-type w-100 bg-white">
                                                        <!-- title-header -->
                                                        <div class="title-header">
                                                            <h2>More details</h2>                                                 
                                                        </div>
                                                        <!-- ./title-header -->
                                                        <!-- accordianId -->
                                                        <div id="accordianId" role="tablist" aria-multiselectable="true">
                                                            <!-- card -->
                                                            <div class="card">
                                                                <!-- card-header -->
                                                                <div class="card-header" role="tab" id="section1HeaderId">
                                                                    <h5 class="mb-0">
                                                                        <a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId" aria-expanded="false" aria-controls="section1ContentId">Features</a>
                                                                    </h5>
                                                                </div>
                                                                <!-- ./card-header -->
                                                                <!-- collapse -->
                                                                <div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="section1HeaderId">
                                                                    <div class="card-body">Features content</div>
                                                                </div>
                                                                <!-- ./collapse -->
                                                            </div>
                                                            <!-- ./card -->
                                                            <!-- card -->
                                                            <div class="card">
                                                                <!-- card-header -->
                                                                <div class="card-header" role="tab" id="section2HeaderId">
                                                                    <h5 class="mb-0">
                                                                        <a data-toggle="collapse" data-parent="#accordianId" href="#section2ContentId" aria-expanded="false" aria-controls="section2ContentId">What is covered</a>
                                                                    </h5>
                                                                </div>
                                                                <!-- ./card -->
                                                                <!-- collapse -->
                                                                <div id="section2ContentId" class="collapse in" role="tabpanel" aria-labelledby="section2HeaderId">
                                                                    <div class="card-body">What is covered content</div>
                                                                </div>
                                                                <!-- ./collapse -->
                                                            </div>
                                                            <!-- ./card -->
                                                            <!-- card -->
                                                            <div class="card">
                                                                <!-- card-header -->
                                                                <div class="card-header" role="tab" id="section3HeaderId">
                                                                    <h5 class="mb-0">
                                                                        <a data-toggle="collapse" data-parent="#accordianId" href="#section3ContentId" aria-expanded="false" aria-controls="section3ContentId">What is not covered</a>
                                                                    </h5>
                                                                </div>
                                                                <!-- ./card-header -->
                                                                <!-- collapse -->
                                                                <div id="section3ContentId" class="collapse in" role="tabpanel" aria-labelledby="section3HeaderId">
                                                                    <div class="card-body">What is not covered content</div>
                                                                </div>
                                                                <!-- ./collapse -->
                                                            </div>
                                                            <!-- ./card -->
                                                            <!-- card -->
                                                            <div class="card">
                                                                <!-- card-header -->
                                                                <div class="card-header" role="tab" id="section4HeaderId">
                                                                    <h5 class="mb-0">
                                                                        <a data-toggle="collapse" data-parent="#accordianId" href="#section4ContentId" aria-expanded="false" aria-controls="section4ContentId">Others</a>
                                                                    </h5>
                                                                </div>
                                                                <!-- ./card-header -->
                                                                <!-- collapse -->
                                                                <div id="section4ContentId" class="collapse in" role="tabpanel" aria-labelledby="section4HeaderId">
                                                                    <div class="card-body">Others content</div>
                                                                </div>
                                                                <!-- ./collapse -->
                                                            </div>
                                                            <!-- card -->     
                                                        </div>
                                                        <!-- ./accordianId -->
                                                    </div>
                                                    <!-- ./cont-inner -->
                                                    <!-- ctn-btn-group -->
                                                    <div class="cnt-btn-group mt-3">
                                                        <p><a href="#" class="btn btn-primary line--type">paygo</a></p>
                                                        <p><a href="#" class="btn btn-primary">pay now</a></p>
                                                    </div>
                                                    <!-- ./ctn-btn-group -->
                                                </div>
                                                <!-- ./col -->
                                            </form>
                                            <!-- form -->
                                        </div>
                                        <!-- ./box -->
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- ./row -->
                            </div>
                            <!-- ./tab-pane -->
                            <!-- tab-pane -->
                            <div role="tabpanel" class="tab-pane fade" id="health-insurance">
                                <!-- cont-inner-wrap -->
                                <div class="cont-inner-wrap">
                                    <!-- form -->
                                    <form class="row m-0 pr-3" action="#">
                                        <!-- col -->
                                        <div class="col-md-12 col-lg-6">
                                            <!-- cont-inner-wrap -->
                                            <div class="cont-inner-wrap bg-white p-4">
                                                <!-- title-header -->
                                                <div class="title-header p-2">
                                                    <h2>Family Details</h2>
                                                </div>
                                                <!-- ./title-header -->
                                                <!-- form-row -->
                                                <div class="form-row w-100 mb-3">
                                                    <!-- form-group -->
                                                    <div class="form-group w-100">
                                                    <label for="vehicle-type">Name</label>
                                                    <input type="text" class="form-control" name="vehicle-type" placeholder="Edward Kaburu">
                                                    </div>
                                                    <!-- ./form-group -->
                                                    <!-- form-group -->
                                                    <div class="form-group w-100">
                                                    <label for="logbook-number">Age</label>
                                                    <input type="text" class="form-control" name="logbook-number" placeholder="34">
                                                    </div>
                                                    <!-- ./form-group -->
                                                    <!-- form-group -->
                                                    <div class="form-group w-100">
                                                    <label for="id-number">ID Number</label>
                                                    <input type="number" class="form-control" name="id-number" placeholder="292136789">
                                                    </div>
                                                    <!-- ./form-group -->
                                                </div>
                                                <!-- ./form-row -->
                                            </div>
                                            <!-- ./cont-inner-wrap -->
                                            <!-- cont-inner-wrap -->
                                            <div class="cont-inner-wrap bg-white p-4 mt-3">
                                                <!-- title-header -->
                                                <div class="title-header p-2">
                                                    <h2>Wife</h2>
                                                </div>
                                                <!-- ./title-header -->
                                                <!-- form-row -->
                                                <div class="form-row w-100 mb-3">
                                                    <!-- form-group -->
                                                    <div class="form-group w-100">
                                                    <label for="vehicle-type">Name</label>
                                                    <input type="text" class="form-control" name="vehicle-type" placeholder="Edward Kaburu">
                                                    </div>
                                                    <!-- ./form-group -->
                                                    <!-- form-group -->
                                                    <div class="form-group w-100">
                                                    <label for="logbook-number">Age</label>
                                                    <input type="text" class="form-control" name="logbook-number" placeholder="34">
                                                    </div>
                                                    <!-- ./form-group -->
                                                    <!-- form-group -->
                                                    <div class="form-group w-100">
                                                    <label for="id-number">ID Number</label>
                                                    <input type="number" class="form-control" name="id-number" placeholder="292136789">
                                                    </div>
                                                    <!-- ./form-group -->
                                                </div>
                                                <!-- ./form-row -->
                                            </div>
                                            <!-- ./cont-inner-wrap -->
                                            <!-- cont-inner-wrap -->
                                            <div class="cont-inner-wrap bg-white p-4 mt-3">
                                                <!-- form-row -->
                                                <div class="form-row w-100 mb-3">
                                                    <!-- form-group -->
                                                    <div class="form-group w-100">
                                                    <label for="vehicle-type">Children</label>
                                                    <input type="text" class="form-control" name="vehicle-type" placeholder="4">
                                                    </div>
                                                    <!-- ./form-group -->
                                                    <!-- form-group -->
                                                    <div class="form-group w-100">
                                                    <label for="logbook-number">Pre-existing Condition</label>
                                                    <input type="text" class="form-control" name="logbook-number" placeholder="None">
                                                    </div>
                                                    <!-- ./form-group -->
                                                </div>
                                                <!-- ./form-row -->
                                            </div>
                                            <!-- ./cont-inner-wrap -->
                                        </div>
                                        <!-- row -->
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <!-- col -->
                                            <div class="col-md-12 col-lg-6">
                                                <!-- cont-inner -->
                                                <div class="cont-inner policy-type w-100 bg-white">
                                                    <!-- title-header -->
                                                    <div class="title-header">
                                                        <h2>Coverage and policies</h2>                                                 
                                                    </div>
                                                    <!-- ./title-header -->
                                                    <!-- table -->
                                                    <table class="table table-borderless table-alt">
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row"><img src="images/tabs/jubilee.png" class="img-fluid" alt=""></td>
                                                                <td>14,000</td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row"><img src="images/tabs/apa.png" class="img-fluid" alt=""></td>
                                                                <td>23,500</td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row"><img src="images/tabs/madison.png" class="img-fluid" alt=""></td>
                                                                <td>27,000</td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row"><img src="images/tabs/icea-lion.png" class="img-fluid" alt=""></td>
                                                                <td>67,500</td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- ./table -->
                                                </div>
                                                <!-- ./cont-inner -->
                                            </div>
                                            <!-- ./col -->
                                            <!-- col -->
                                            <div class="col-md-12 col-lg-6 pl-0">
                                                <!-- cont-inner -->
                                                <div class="cont-inner policy-type w-100 bg-white">
                                                    <!-- title-header -->
                                                    <div class="title-header">
                                                        <h2>More details</h2>                                                 
                                                    </div>
                                                    <!-- ./title-header -->
                                                    <!-- accordianId -->
                                                    <div id="accordianId" role="tablist" aria-multiselectable="true">
                                                        <!-- card -->
                                                        <div class="card">
                                                            <!-- card-header -->
                                                            <div class="card-header" role="tab" id="section1HeaderId">
                                                                <h5 class="mb-0">
                                                                    <a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId" aria-expanded="false" aria-controls="section1ContentId">Features</a>
                                                                </h5>
                                                            </div>
                                                            <!-- ./card-header -->
                                                            <!-- collapse -->
                                                            <div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="section1HeaderId">
                                                                <div class="card-body">Features content</div>
                                                            </div>
                                                            <!-- ./collapse -->
                                                        </div>
                                                        <!-- ./card -->
                                                        <!-- card -->
                                                        <div class="card">
                                                            <!-- card-header -->
                                                            <div class="card-header" role="tab" id="section2HeaderId">
                                                                <h5 class="mb-0">
                                                                    <a data-toggle="collapse" data-parent="#accordianId" href="#section2ContentId" aria-expanded="false" aria-controls="section2ContentId">What is covered</a>
                                                                </h5>
                                                            </div>
                                                            <!-- ./card -->
                                                            <!-- collapse -->
                                                            <div id="section2ContentId" class="collapse in" role="tabpanel" aria-labelledby="section2HeaderId">
                                                                <div class="card-body">What is covered content</div>
                                                            </div>
                                                            <!-- ./collapse -->
                                                        </div>
                                                        <!-- ./card -->
                                                        <!-- card -->
                                                        <div class="card">
                                                            <!-- card-header -->
                                                            <div class="card-header" role="tab" id="section3HeaderId">
                                                                <h5 class="mb-0">
                                                                    <a data-toggle="collapse" data-parent="#accordianId" href="#section3ContentId" aria-expanded="false" aria-controls="section3ContentId">What is not covered</a>
                                                                </h5>
                                                            </div>
                                                            <!-- ./card-header -->
                                                            <!-- collapse -->
                                                            <div id="section3ContentId" class="collapse in" role="tabpanel" aria-labelledby="section3HeaderId">
                                                                <div class="card-body">What is not covered content</div>
                                                            </div>
                                                            <!-- ./collapse -->
                                                        </div>
                                                        <!-- ./card -->
                                                        <!-- card -->
                                                        <div class="card">
                                                            <!-- card-header -->
                                                            <div class="card-header" role="tab" id="section4HeaderId">
                                                                <h5 class="mb-0">
                                                                    <a data-toggle="collapse" data-parent="#accordianId" href="#section4ContentId" aria-expanded="false" aria-controls="section4ContentId">Others</a>
                                                                </h5>
                                                            </div>
                                                            <!-- ./card-header -->
                                                            <!-- collapse -->
                                                            <div id="section4ContentId" class="collapse in" role="tabpanel" aria-labelledby="section4HeaderId">
                                                                <div class="card-body">Others content</div>
                                                            </div>
                                                            <!-- ./collapse -->
                                                        </div>
                                                        <!-- card -->     
                                                    </div>
                                                    <!-- ./accordianId -->
                                                </div>
                                                <!-- ./cont-inner -->
                                                <!-- ctn-btn-group -->
                                                <div class="cnt-btn-group mt-3">
                                                    <p><a href="#" class="btn btn-primary line--type">paygo</a></p>
                                                    <p><a href="#" class="btn btn-primary">pay now</a></p>
                                                </div>
                                                <!-- ./ctn-btn-group -->
                                            </div>
                                            <!-- ./col -->
                                            </div>
                                        </div>
                                        <!-- row -->
                                    </form>
                                    <!-- ./form -->
                                </div>
                                <!-- ./cont-inner-wrap -->
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