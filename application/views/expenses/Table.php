<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Bills</title>
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
      <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
</head>

<style>
    .form-group.form-group-sm{
        padding-bottom: 10px;
        margin: 10px 0 0 10px !important;
    }
    .form-group{
        margin-top: -5px !important;
    }
    .form-group label.control-label{
        font-size: 15px !important;
    }
    .form-control{
        font-size: 15px !important;
    }
    .modal-margin{
        margin-top: -70px;
    }
</style>
<body>
    <div class="wrapper">
        <?=$sidebar?>
        <div class="main-panel">
            <?=$topnav?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <a type="button" class="btn btn-success btn-round pull-right" data-toggle="modal" data-target="#modal-add">
                                <i class="material-icons" >add</i> Add<div class="ripple-container"></div>
                            </a>
                        </div>
                    </div>
                    <div class="modal fade modal-margin" id="modal-add" role="dialog">
                        <div class="modal-dialog">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="green">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Tasks:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#with" data-toggle="tab">
                                                        <i class="material-icons">check</i> With Receipt
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#without" data-toggle="tab">
                                                        <i class="material-icons">close</i> Without Receipt
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="with">
                                                <form>
                                                    <div class="row padding-row">
                                                        <div class="col-md-12">
                                                            <div class="form-group is-empty">
                                                                <label class="control-label">Invoice Number</label>
                                                                <input type="text" class="form-control" required>
                                                                <span class="material-input"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group is-empty">
                                                                <label class="control-label">Company/Person</label>
                                                                <input type="text" class="form-control" required>
                                                            <span class="material-input"></span></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group is-empty">
                                                                <label class="control-label">Service/Product</label>
                                                                <input type="text" class="form-control" required>
                                                            <span class="material-input"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group is-empty">
                                                                <label class="control-label">Date Paid</label>
                                                                <input type="text" class="form-control pull-right datepicker" required>
                                                            <span class="material-input"></span></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group is-empty">
                                                                <label class="control-label">Amount Paid</label>
                                                                <input type="text" class="form-control" required>
                                                                <span class="material-input"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-success pull-right">Add<div class="ripple-container"></div></button>
                                                    <div class="clearfix"></div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="without">
                                                <form>
                                                    <div class="row padding-row">
                                                        <div class="col-md-12">
                                                            <div class="form-group is-empty">
                                                                <label class="control-label">Service/Product</label>
                                                                <input type="text" class="form-control" required>
                                                                <span class="material-input"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group is-empty">
                                                                <label class="control-label">Date Paid</label>
                                                                <input type="text" class="form-control pull-right datepicker" required>
                                                            <span class="material-input"></span></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group is-empty">
                                                                <label class="control-label">Amount Paid</label>
                                                                <input type="text" class="form-control" required>
                                                                <span class="material-input"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-success pull-right">Add<div class="ripple-container"></div></button>
                                                    <div class="clearfix"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>


                    <div class="modal fade modal-margin" id="modal-pay" role="dialog">
                        <div class="modal-dialog">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Pay bill</h4>
                                    <p class="category">Complete date paid input</p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group is-empty">
                                                    <label class="control-label">Invoice Number</label>
                                                    <input type="text" class="form-control" value="123123123" disabled>
                                                    <span class="material-input" required></span>
                                                </div>
                                                <div class="form-group is-empty">
                                                    <label class="control-label">Date Paid</label>
                                                    <input type="text" class="form-control pull-right month-year" required>
                                                    <span class="material-input" required></span>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Update<div class="ripple-container"></div></button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">                           
                                    <h4 class="title">Expenses</h4>                                    
                                    <p class="category">List of expense information</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table id="table-bills" class="table">
                                        <thead class="text-primary">
                                            <th>Invoice No</th>
                                            <th>Company/Person</th>
                                            <th>Service/Product</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>123456789</td>
                                                <td>ASUS</td>
                                                <td>Laptop</td>
                                                <td>January 15, 2018</td>
                                                <td>5 000</td>
                                                <td>
                                                    <center>
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-pay">
                                                            <i class="material-icons">delete</i>
                                                            <div class="ripple-container"></div>
                                                        </button>                                                        
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>Meals</td>
                                                <td>January 15, 2018</td>
                                                <td>1 500</td>
                                                <td>
                                                    <center>
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-pay">
                                                            <i class="material-icons">delete</i>
                                                            <div class="ripple-container"></div>
                                                        </button>                                                        
                                                    </center>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables.net-bs/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables.net-bs/js/dataTables.responsive.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
  $('#table-bills').DataTable();
    //Date picker
    $('.datepicker').datepicker({
      autoclose: true,
      format: "yyyy-mm-dd"
    })
    $(".month-year").datepicker( {
    format: "mm-yyyy",
    startView: "months", 
    minViewMode: "months"
});
</script>

</html>