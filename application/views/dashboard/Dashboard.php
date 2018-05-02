<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <?=$sidebar?>
        <div class="main-panel">
            <?=$topnav?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Rent</p>
                                    <h3 class="title">100 000
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">info</i> Total amount for the year
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Electricity</p>
                                    <h3 class="title">500 000</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">info</i> Total amount for the year
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Water</p>
                                    <h3 class="title">100 000</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">info</i> Total amount for the year
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Others</p>
                                    <h3 class="title">200 000</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">info</i> Total amount for the year
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">

                            <div class="card">
                                <div class="card-header card-chart" data-background-color="red">
                                    <div class="ct-chart" id="completedTasksChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Monthly Bills and Expense</h4>
                                    <p class="category">Monitoring chart for the year 2018.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="green">
                                    <div class="ct-chart" id="dailySalesChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Monthly Income</h4>
                                    <p class="category">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> updated 4 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="purple">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Tasks:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#house" data-toggle="tab">
                                                        <i class="material-icons">home</i> House Rent
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#electricity" data-toggle="tab">
                                                        <i class="material-icons">settings_input_composite</i> Electricity
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#water" data-toggle="tab">
                                                        <i class="material-icons">opacity</i> Water
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#others" data-toggle="tab">
                                                        <i class="material-icons">extension</i> Others
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#users" data-toggle="tab">
                                                        <i class="material-icons">supervisor_account</i> Users
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="house">
                                            <table class="table table-hover">
                                                <thead class="text-primary">
                                                    <th>Invoice Number</th>
                                                    <th>Company/Person</th>
                                                    <th>Month-Year</th>
                                                    <th>Amount</th>
                                                    <th>Paid</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>123456789</td>
                                                        <td>Hakeem Polistico</td>
                                                        <td>January-2018</td>
                                                        <td>5 000</td>
                                                        <td><i class="material-icons text-success">check</i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>123456788</td>
                                                        <td>Hakeem Polistico</td>
                                                        <td>February-2018</td>
                                                        <td>5 000</td>
                                                        <td><i class="material-icons text-success">check</i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>123456777</td>
                                                        <td>Hakeem Polistico</td>
                                                        <td>March-2018</td>
                                                        <td>5 000</td>
                                                        <td><i class="material-icons text-danger">clear</i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="electricity">
                                            <table class="table table-hover">
                                                <thead class="text-warning">
                                                    <th>Invoice Number</th>
                                                    <th>Company/Person</th>
                                                    <th>Month-Year</th>
                                                    <th>Amount</th>
                                                    <th>Paid</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>123456789</td>
                                                        <td>Meralco</td>
                                                        <td>January-2018</td>
                                                        <td>5 000</td>
                                                        <td><i class="material-icons text-success">check</i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>123456788</td>
                                                        <td>Meralco</td>
                                                        <td>February-2018</td>
                                                        <td>5 000</td>
                                                        <td><i class="material-icons text-success">check</i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>123456777</td>
                                                        <td>Meralco</td>
                                                        <td>March-2018</td>
                                                        <td>5 000</td>
                                                        <td><i class="material-icons text-danger">clear</i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="water">
                                            <table class="table table-hover">
                                                <thead class="text-warning">
                                                    <th>Invoice Number</th>
                                                    <th>Company/Person</th>
                                                    <th>Month-Year</th>
                                                    <th>Amount</th>
                                                    <th>Paid</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>123456789</td>
                                                        <td>Maynilad</td>
                                                        <td>January-2018</td>
                                                        <td>5 000</td>
                                                        <td><i class="material-icons text-success">check</i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>123456788</td>
                                                        <td>Maynilad</td>
                                                        <td>February-2018</td>
                                                        <td>5 000</td>
                                                        <td><i class="material-icons text-success">check</i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>123456777</td>
                                                        <td>Maynilad</td>
                                                        <td>March-2018</td>
                                                        <td>5 000</td>
                                                        <td><i class="material-icons text-danger">clear</i></td>
                                                    </tr>   
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="others">
                                            <table class="table table-hover">
                                                <thead class="text-warning">
                                                    <th>Invoice Number</th>
                                                    <th>Company/Person</th>
                                                    <th>Service</th>
                                                    <th>Month-Year</th>
                                                    <th>Amount</th>
                                                    <th>Paid</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>123456789</td>
                                                        <td>Sky Cable</td>
                                                        <td>TV Cable</td>
                                                        <td>January-2018</td>
                                                        <td>5 000</td>
                                                        <td><i class="material-icons text-success">check</i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>123456788</td>
                                                        <td>Sky Cable</td>
                                                        <td>TV Cable</td>
                                                        <td>February-2018</td>
                                                        <td>5 000</td>
                                                        <td><i class="material-icons text-success">check</i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>123456777</td>
                                                        <td>Sky Cable</td>
                                                        <td>TV Cable</td>
                                                        <td>March-2018</td>
                                                        <td>5 000</td>
                                                        <td><i class="material-icons text-danger">clear</i></td>
                                                    </tr>   
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="users">
                                            <table class="table table-hover">
                                                <thead class="text-warning">
                                                    <th>Name</th>
                                                    <th>Username</th>
                                                    <th>User Type</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Hakeem Polistico</td>
                                                        <td>hakeem.polistico</td>
                                                        <td>Admin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cherrie Polistico</td>
                                                        <td>cherrie.polistico</td>
                                                        <td>Member</td>
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
            <?=$footer?>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="<?php echo base_url(); ?>assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="<?php echo base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url(); ?>assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });


    demo = {
        initDashboardPageCharts: function() {

        /* ----------==========     Completed Tasks Chart initialization    ==========---------- */
            dataCompletedTasksChart = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                series: [
                    [13500, 12000, 13000, 14000, 11000, 12500, 12500, 12500, 12500, 12500, 12500, 12500]
                ]
            };

            optionsCompletedTasksChart = {
                lineSmooth: Chartist.Interpolation.cardinal({
                    tension: 0
                }),
                low: 0,
                high: 20000, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
                chartPadding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                }
            }

            var completedTasksChart = new Chartist.Line('#completedTasksChart', dataCompletedTasksChart, optionsCompletedTasksChart);

            // start animation for the Completed Tasks Chart - Line Chart
            md.startAnimationForLineChart(completedTasksChart);

        /* ----------==========     Completed Tasks Chart initialization    ==========---------- */
            dataCompletedTasksChart2 = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                series: [
                    [13500, 12000, 13000, 14000, 11000, 12500, 12500, 12500, 12500, 12500, 12500, 12500]
                ]
            };

            optionsCompletedTasksChart2 = {
                lineSmooth: Chartist.Interpolation.cardinal({
                    tension: 0
                }),
                low: 0,
                high: 24000, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
                chartPadding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                }
            }

            var dailySalesChart = new Chartist.Line('#dailySalesChart', dataCompletedTasksChart2, optionsCompletedTasksChart2);

            // start animation for the Completed Tasks Chart - Line Chart
            md.startAnimationForLineChart(dailySalesChart);
        }
    }
</script>

</html>