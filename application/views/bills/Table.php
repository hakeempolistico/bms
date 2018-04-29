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
    #add-link{
        margin-top: -15px;
    }
    #add-link:hover{
        color: white !important;
        cursor: pointer;
    }
</style>
<body>
    <div class="wrapper">
        <?=$sidebar?>
        <div class="main-panel">
            <?=$topnav?>
            <div class="content">
                <div class="container-fluid">
                    <?php if(isset($_SESSION['fd'])) { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>MESSAGE!</strong> <?php echo $_SESSION['fd'] ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <a type="button" class="btn btn-info btn-round pull-right" data-toggle="modal" data-target="#modal-add">
                                <i class="material-icons" >add</i> Add<div class="ripple-container"></div>
                            </a>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">receipt</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">No of Bills</p>
                                    <h3 class="title"><?php echo $count_bills; ?>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">info</i> Overall number of bills
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">clear</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">No of Unpaid</p>
                                    <h3 class="title"><?php echo $count_unpaid; ?>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">info</i> Overall number of unpaid bills
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Monthly Total</p>
                                    <h3 class="title"><?php echo $monthly_amount; ?>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">info</i> Month of <?php echo date('F') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Yearly Total</p>
                                    <h3 class="title"><?php echo $yearly_amount; ?>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">info</i> Year of <?php echo date('Y') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade modal-margin" id="modal-add" role="dialog">
                        <div class="modal-dialog">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Add bill</h4>
                                    <p class="category">Complete bill information</p>
                                </div>
                                <div class="card-content">
                                    <form action="<?php echo base_url('bills/insert'); ?>" method="post">
                                        <div class="row padding-row">
                                            <div class="col-md-6">
                                                <div class="form-group is-empty">
                                                    <label class="control-label">Invoice Number</label>
                                                    <input type="text" class="form-control" name="invoice_number" value="<?php echo set_value('invoice_number'); ?>" required>
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group is-empty">
                                                    <label class="control-label">Amount</label>
                                                    <input type="number" class="form-control" name="amount" value="<?php echo set_value('amount'); ?>" required>
                                                <span class="material-input"></span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group is-empty">
                                                    <label class="control-label">Company/Person</label>
                                                    <input type="text" class="form-control" name="company" value="<?php echo set_value('company'); ?>" required>
                                                <span class="material-input"></span></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group is-empty">
                                                    <label class="control-label">Service</label>
                                                    <select class="form-control" name="service" required>
                                                        <option></option>
                                                        <option <?php if(set_value('service')=='Water') echo 'selected'; ?>>Water</option>
                                                        <option <?php if(set_value('service')=='Electricity') echo 'selected'; ?>>Electricity</option>
                                                        <option <?php if(set_value('service')=='House Rent') echo 'selected'; ?>>House Rent</option>
                                                        <option <?php if(set_value('service')=='Internet') echo 'selected'; ?>>Internet</option>
                                                    </select>
                                                <span class="material-input"></span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group is-empty">
                                                    <label class="control-label">Bill Period Start</label>
                                                    <input type="text" class="form-control pull-right datepicker" name="period_start" value="<?php echo set_value('period_start'); ?>" required>
                                                <span class="material-input"></span></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group is-empty">
                                                    <label class="control-label">Bill Period End</label>
                                                    <input type="text" class="form-control pull-right datepicker" name="period_end" value="<?php echo set_value('period_end'); ?>" required>
                                                <span class="material-input"></span></div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h7 class="text-success">IF BILL IS PAID, FILL UP BOTTOM FORM!</h7>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group is-empty">
                                                    <label class="control-label">Date Paid</label>
                                                    <input type="text" class="form-control pull-right datepicker" name="date_paid" value="<?php echo set_value('date_paid'); ?>">
                                                <span class="material-input"></span></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group is-empty">
                                                    <label class="control-label">Amount Paid</label>
                                                    <input type="text" class="form-control" name="amount_paid" value="<?php echo set_value('amount_paid'); ?>">
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info pull-right">Add<div class="ripple-container"></div></button>
                                        <div class="clearfix"></div>
                                    </form>
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
                                    <form action="<?php echo base_url('bills/pay');?>" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group is-empty">
                                                    <label class="control-label">Invoice Number</label>
                                                    <input id="pay-invoice" type="text" name="invoice_number" class="form-control" readonly>
                                                    <span class="material-input" required></span>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group is-empty">
                                                        <label class="control-label">Amount Paid</label>
                                                        <input type="text" class="form-control" name="amount_paid" value="<?php echo set_value('amount_paid'); ?>">
                                                        <span class="material-input"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group is-empty">
                                                        <label class="control-label">Date Paid</label>
                                                        <input type="text" name="date_paid" class="form-control pull-right datepicker" required>
                                                        <span class="material-input" required></span>
                                                    </div>
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
                                    <h4 class="title">Bills</h4>                                    
                                    <p id="add-link" class="category pull-right"><i class="material-icons" data-toggle="modal" data-target="#modal-add">add_circle</i></p>
                                    <p class="category">List of bills information</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table id="table-bills" class="table" style="font-size: 12px">
                                        <thead class="text-primary">
                                            <th>Invoice No</th>
                                            <th>Company</th>
                                            <th>Service</th>
                                            <th>Period Start</th>
                                            <th>Period End</th>
                                            <th>Amount</th>
                                            <th>Date Paid</th>
                                            <th>Amount Paid</th>
                                            <th>Paid</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            
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
  $('#table-bills').DataTable({
        "processing" : true,
        "ajax" : {
            "url" : "<?php echo base_url('bills/populatetable'); ?>",
            dataSrc : ''
        },
        "columns" : [ {
            "data" : "invoice_number"
        }, {
            "data" : "company"
        }, {
            "data" : "service"
        }, {
            "data" : "period_start"
        }, {
            "data" : "period_end"
        }, {
            "data" : "amount"
        }, {
            "data" : "date_paid"
        }, {
            "data" : "amount_paid"
        }, {
            "data" : "paid"
        }, {
            "data" : 'action'
        }],
        "initComplete": function( settings, json ) {
            $('#table-bills').on('click', '.btn-pay', function(){
                $('#pay-invoice').val($(this).closest('tr').find('td:first').text())
            })
        }
    });
    //Date picker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd"
    })
    $(".month-year").datepicker( {
        format: "mm-yyyy",
        startView: "months", 
        minViewMode: "months"
    })

    
    
</script>

</html>