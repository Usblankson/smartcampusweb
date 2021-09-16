<!-- begin::main-content -->
 <div class="main-content">

    <!-- begin::container -->
    <div class="container">

        <div class="page-header">
                <h4>Quiz Dashboard</h4>
            <small class="">Welcome, <span class="text-primary"><?= $user->name ?></span></small>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- first row -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                    <span class="text-primary">Learn CSS</span>
                                    <span class="avatar">
                                        <span class="avatar-title bg-info text-white rounded-circle">
                                            <i class="fa fa-css3"></i>
                                        </span>
                                    </span>
                                </h6>
                                <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                    <small class="mb-0 mr-2">You think you're good in CSS?, Try this out.</small>
                                    <p class="small text-muted mb-0 line-height-20">
                                        <span class="text-success"></span> 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                    <span class="text-secondary">Learn PHP</span>
                                    <span class="avatar">
                                        <span class="avatar-title bg-secondary text-white rounded-circle">
                                            <i class="fa fa-code"></i>
                                        </span>
                                    </span>
                                </h6>
                                <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                    <small class="mb-0 mr-2">Program the web with PHP quizzes</small>
                                    <p class="small text-muted mb-0 line-height-20">
                                        <span class="text-danger"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                    <span class="text-danger">Linear Algebra</span>
                                    <span class="avatar">
                                        <span class="avatar-title bg-danger text-white rounded-circle">
                                            <i class="fa fa-th"></i>
                                        </span>
                                    </span>
                                </h6>
                                <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                    <small class="mb-0 mr-2">Stimulate your Arithmetic interest</small>
                                    <p class="small text-muted mb-0 line-height-20">
                                        <span class="text-success"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 <!-- ============================================= -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title d-md-flex justify-content-between">
                                    In Progress 
                                  <!--  <br><span class="text-secondary">Recent Quizzes</span>  -->
                                    <span class="reportrange btn btn-outline-light btn-sm mt-3 mt-md-0">
                                        <i class="ti-calendar mr-2"></i>
                                        <span class="text"></span>
                                        <i class="ti-angle-down ml-2"></i>
                                    </span>
                                </h6>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="card border mb-3">
                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-block mr-3 icon-block-lg icon-block-outline-success text-success">
                                                        <i class="fa fa-bar-chart"></i>
                                                    </div>
                                                    <div>
                                                        <h6 class="text-uppercase font-size-11">Gross Earnings</h6>
                                                        <h4 class="mb-0">$1,958,104</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border mb-3">
                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-block mr-3 icon-block-lg icon-block-outline-danger  text-danger">
                                                        <i class="fa fa-hand-lizard-o"></i>
                                                    </div>
                                                    <div>
                                                        <h6 class="text-uppercase font-size-11">Tax Withheld</h6>
                                                        <h4 class="mb-0">$234,769</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border mb-3">
                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-block mr-3 icon-block-lg icon-block-outline-warning text-warning">
                                                        <i class="fa fa-dollar"></i>
                                                    </div>
                                                    <div>
                                                        <h6 class="text-uppercase font-size-11">Net Earnings</h6>
                                                        <h4 class="mb-0">$1,608,469</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Sales Count</th>
                                                    <th>Gross Earnings</th>
                                                    <th>Tax Withheld</th>
                                                    <th class="text-right">Net Earnings</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>03/15/2018</td>
                                                    <td>1,050</td>
                                                    <td class="text-success">+ $32,580.00</td>
                                                    <td class="text-danger">- $3,023.10</td>
                                                    <td class="text-right">$28,670.90</td>
                                                </tr>
                                                <tr>
                                                    <td>03/14/2018</td>
                                                    <td>780</td>
                                                    <td class="text-success">+ $30,065.10</td>
                                                    <td class="text-danger">- $2,780.00</td>
                                                    <td class="text-right">$26,930.40</td>
                                                </tr>
                                                <tr>
                                                    <td>03/13/2018</td>
                                                    <td>1.980</td>
                                                    <td class="text-success">+ $30,065.10</td>
                                                    <td class="text-danger">- $2,780.00</td>
                                                    <td class="text-right">$26,930.40</td>
                                                </tr>
                                                <tr>
                                                    <td>03/12/2018</td>
                                                    <td>300</td>
                                                    <td class="text-success">+ $30,065.10</td>
                                                    <td class="text-danger">- $2,780.00</td>
                                                    <td class="text-right">$26,930.40</td>
                                                </tr>
                                                <tr>
                                                    <td>03/11/2018</td>
                                                    <td>940</td>
                                                    <td class="text-success">+ $30,065.10</td>
                                                    <td class="text-danger">- $2,780.00</td>
                                                    <td class="text-right">$26,930.40</td>
                                                </tr>
                                                <tr>
                                                    <td>03/10/2018</td>
                                                    <td>1.280</td>
                                                    <td class="text-success">+ $30,065.10</td>
                                                    <td class="text-danger">-$2,780.00</td>
                                                    <td class="text-right">$26,930.40</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>
        </div>

    </div>
    <!-- end::container -->

</div>
<!-- end::main-content -->