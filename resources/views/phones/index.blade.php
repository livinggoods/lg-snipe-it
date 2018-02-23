
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        Dashboard


        :: LG Assets Management System
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="http://127.0.0.1/snipe/public/assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://127.0.0.1/snipe/public/assets/css/font-awesome.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="http://127.0.0.1/snipe/public/assets/js/plugins/select2/select2.min.css">

    <link rel="stylesheet" href="http://127.0.0.1/snipe/public/assets/js/plugins/datepicker/bootstrap-datepicker.css">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="http://127.0.0.1/snipe/public/assets/js/plugins/iCheck/all.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="http://127.0.0.1/snipe/public/assets/css/skins/skin-blue.css">

    <!-- bootstrap tables CSS -->
    <link rel="stylesheet" href="http://127.0.0.1/snipe/public/assets/css/bootstrap-table.css">

    <link rel="stylesheet" href="http://127.0.0.1/snipe/public/build/assets/css/app-de75b6d10a.css">

    <link rel="shortcut icon" type="image/ico" href="http://127.0.0.1/snipe/public/favicon.ico">

    <style>

        @media (max-width: 400px) {
            .navbar-left {
                margin: 2px;
            }

            .nav::after {
                clear: none;
            }
        }
    </style>

    <script>
        window.snipeit = {
            settings: {
                "per_page": 20
            }
        };
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>


    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->


        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button above the compact sidenav -->
            <a href="#" style="color: white" class="sidebar-toggle btn btn-white" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <ul class="nav navbar-nav navbar-left">
                <li class="left-navblock">
                    <a class="logo no-hover" href="">
                        LG Assets Management System
                    </a>
                </li>
            </ul>

            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li >
                        <a href="http://127.0.0.1/snipe/public/hardware">
                            <i class="fa fa-barcode"></i>
                        </a>
                    </li>
                    <li >
                        <a href="http://127.0.0.1/snipe/public/admin/licenses">
                            <i class="fa fa-floppy-o"></i>
                        </a>
                    </li>
                    <li >
                        <a href="http://127.0.0.1/snipe/public/admin/accessories">
                            <i class="fa fa-keyboard-o"></i>
                        </a>
                    </li>
                    <li >
                        <a href="http://127.0.0.1/snipe/public/admin/consumables">
                            <i class="fa fa-tint"></i>
                        </a>
                    </li>
                    <li >
                        <a href="http://127.0.0.1/snipe/public/admin/components">
                            <i class="fa fa-hdd-o"></i>
                        </a>
                    </li>

                    <form class="navbar-form navbar-left form-horizontal" role="search" action="http://127.0.0.1/snipe/public/hardware/bytag" method="get">
                        <div class="col-xs-12 col-md-12">
                            <div class="col-xs-12 form-group">
                                <label class="sr-only" for="tagSearch">Lookup by Asset Tag</label>
                                <input type="text" class="form-control" id="tagSearch" name="assetTag" placeholder="Lookup by Asset Tag">
                                <input type="hidden" name="topsearch" value="true">
                            </div>
                            <div class="col-xs-1">
                                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Create New                      <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li >
                                <a href="http://127.0.0.1/snipe/public/hardware/create">
                                    <i class="fa fa-barcode fa-fw"></i>
                                    Asset</a>
                            </li>
                            <li >
                                <a href="http://127.0.0.1/snipe/public/admin/licenses/create">
                                    <i class="fa fa-floppy-o fa-fw"></i>
                                    License</a>
                            </li>
                            <li >
                                <a href="http://127.0.0.1/snipe/public/admin/accessories/create">
                                    <i class="fa fa-keyboard-o fa-fw"></i>
                                    Accessory</a>
                            </li>
                            <li >
                                <a href="http://127.0.0.1/snipe/public/admin/consumables/create">
                                    <i class="fa fa-tint fa-fw"></i>
                                    Consumable</a>
                            </li>
                            <li >
                                <a href="http://127.0.0.1/snipe/public/admin/users/create">
                                    <i class="fa fa-user fa-fw"></i>
                                    User</a>
                            </li>
                            <li >
                                <a href="http://127.0.0.1/snipe/public/admin/components/create">
                                    <i class="fa fa-hdd-o"></i>
                                    Component</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Tasks: style can be found in dropdown.less -->

                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 0 items below or almost below minimum quantity levels</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">

                                </ul>
                            </li>
                        </ul>
                    </li>


                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="//gravatar.com/avatar/41012115c70164057d2c1536f6f0c84d" class="user-image" alt="User Image">

                            <span class="hidden-xs">Patrick <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li >
                                <a href="http://127.0.0.1/snipe/public/account/view-assets">
                                    <i class="fa fa-check fa-fw"></i> View Assigned Assets                       </a>
                                <a href="http://127.0.0.1/snipe/public/account/profile">
                                    <i class="fa fa-user fa-fw"></i> Edit Your Profile                         </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="http://127.0.0.1/snipe/public/logout">
                                    <i class="fa fa-sign-out fa-fw"></i>
                                    Logout                         </a>
                            </li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-wrench fa-fw"></i> Admin                       <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li >
                                <a href="http://127.0.0.1/snipe/public/admin/settings/companies">
                                    <i class="fa fa-building-o fa-fw"></i> Companies                           </a>
                            </li>
                            <li >
                                <a href="http://127.0.0.1/snipe/public/hardware/models">
                                    <i class="fa fa-th fa-fw"></i> Asset Models                           </a>
                            </li>
                            <li >
                                <a href="http://127.0.0.1/snipe/public/admin/settings/categories">
                                    <i class="fa fa-check fa-fw"></i> Categories                           </a>
                            </li>
                            <li >
                                <a href="http://127.0.0.1/snipe/public/admin/settings/manufacturers">
                                    <i class="fa fa-briefcase fa-fw"></i> Manufacturers                           </a>
                            </li>
                            <li >
                                <a href="http://127.0.0.1/snipe/public/admin/settings/suppliers">
                                    <i class="fa fa-credit-card fa-fw"></i> Suppliers                           </a>
                            </li>
                            <li >
                                <a href="http://127.0.0.1/snipe/public/admin/settings/statuslabels">
                                    <i class="fa fa-list fa-fw"></i> Status Labels                           </a>
                            </li>
                            <li >
                                <a href="http://127.0.0.1/snipe/public/admin/settings/depreciations">
                                    <i class="fa fa-arrow-down fa-fw"></i> Depreciation                           </a>
                            </li>
                            <li >
                                <a href="http://127.0.0.1/snipe/public/admin/settings/locations">
                                    <i class="fa fa-globe fa-fw"></i> Locations                           </a>
                            </li>
                            <li >
                                <a href="http://127.0.0.1/snipe/public/admin/groups">
                                    <i class="fa fa-group fa-fw"></i> Groups                           </a>
                            </li>
                            <li >
                                <a href="http://127.0.0.1/snipe/public/admin/settings/backups">
                                    <i class="fa fa-download fa-fw"></i> Backups                           </a>
                            </li>
                            <li >
                                <a href="http://127.0.0.1/snipe/public/admin/custom_fields">
                                    <i class="fa fa-wrench fa-fw"></i> Custom Fields                           </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="http://127.0.0.1/snipe/public/admin/settings/app">
                                    <i class="fa fa-cog fa-fw"></i> Settings                           </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <a href="#" style="float:left" class="sidebar-toggle-mobile visible-xs btn" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-bars"></i>
        </a>
        <!-- Sidebar toggle button-->
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li  class="active">
                    <a href="http://127.0.0.1/snipe/public">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-barcode"></i>
                        <span>Assets</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="http://127.0.0.1/snipe/public/hardware">List All</a>
                        </li>



                        <li>
                            <a href="http://127.0.0.1/snipe/public/hardware?status=Deployed">Deployed                    </a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1/snipe/public/hardware?status=RTD">
                                Ready to Deploy</a>
                        </li>
                        <li><a href="http://127.0.0.1/snipe/public/hardware?status=Pending">Pending</a></li>
                        <li ><a href="http://127.0.0.1/snipe/public/hardware?status=Undeployable">Un-deployable</a></li>
                        <li><a href="http://127.0.0.1/snipe/public/hardware?status=Archived">Archived</a></li>
                        <li><a href="http://127.0.0.1/snipe/public/hardware?status=Requestable">Requestable</a></li>

                        <li class="divider">&nbsp;</li>
                        <li>
                            <a href="http://127.0.0.1/snipe/public/hardware/bulkcheckout">
                                Bulk Checkout</a>
                        </li>

                        <li><a href="http://127.0.0.1/snipe/public/hardware/models">Asset Models</a></li>
                        <li><a href="http://127.0.0.1/snipe/public/admin/settings/categories"  >Categories</a></li>
                        <li><a href="http://127.0.0.1/snipe/public/hardware?status=Deleted">Deleted</a></li>
                        <li><a href="http://127.0.0.1/snipe/public/admin/asset_maintenances"  >Asset Maintenances </a></li>
                        <li><a href="http://127.0.0.1/snipe/public/hardware/import">Import </a></li>
                        <li><a href="http://127.0.0.1/snipe/public/hardware/history">Import History </a></li>
                    </ul>
                </li>
                <li>
                    <a href="http://127.0.0.1/snipe/public/admin/licenses">
                        <i class="fa fa-floppy-o"></i>
                        <span>Licenses</span>
                    </a>
                </li>
                <li>
                    <a href="http://127.0.0.1/snipe/public/admin/accessories">
                        <i class="fa fa-keyboard-o"></i>
                        <span>Accessories</span>
                    </a>
                </li>
                <li>
                    <a href="http://127.0.0.1/snipe/public/admin/consumables">
                        <i class="fa fa-tint"></i>
                        <span>Consumables</span>
                    </a>
                </li>
                <li>
                    <a href="http://127.0.0.1/snipe/public/admin/components">
                        <i class="fa fa-hdd-o"></i>
                        <span>Components</span>
                    </a>
                </li>
                <li>
                    <a href="http://127.0.0.1/snipe/public/admin/users">
                        <i class="fa fa-users"></i>
                        <span>People</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="http://127.0.0.1/snipe/public/reports"  class="dropdown-toggle">
                        <i class="fa fa-bar-chart"></i>
                        <span>Reports</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="http://127.0.0.1/snipe/public/reports/activity"  >Activity Report</a></li>

                        <li><a href="http://127.0.0.1/snipe/public/reports/depreciation"  >Depreciation Report</a></li>
                        <li><a href="http://127.0.0.1/snipe/public/reports/licenses"  >License Report</a></li>
                        <li><a href="http://127.0.0.1/snipe/public/reports/asset_maintenances"  >Asset Maintenance Report</a></li>
                        <li><a href="http://127.0.0.1/snipe/public/reports/assets"  >Asset Report</a></li>
                        <li><a href="http://127.0.0.1/snipe/public/reports/unaccepted_assets"  >Unaccepted Assets</a></li>
                        <li><a href="http://127.0.0.1/snipe/public/reports/accessories"  >Accessory Report</a></li>
                        <li><a href="http://127.0.0.1/snipe/public/reports/custom" >Custom Asset Report</a></li>
                    </ul>
                </li>
                <li>
                    <a href="http://127.0.0.1/snipe/public/account/requestable-assets">
                        <i class="fa fa-laptop"></i>
                        <span>Requestable</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">


        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding-bottom: 30px;">
            <h1 class="pull-left">
                Dashboard



            </h1>
            <div class="pull-right">
            </div>



        </section>


        <section class="content">
            <!-- Notifications -->
            <div class="row">

            </div>


            <!-- Content -->

            <link rel="stylesheet" type="text/css" href="http://127.0.0.1/snipe/public/assets/css/morris.css">
            <div class="row">

                <!-- panel -->
                <div class="col-lg-2 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h3>211</h3>
                            <p>total assets</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-barcode"></i>
                        </div>
                        <a href="http://127.0.0.1/snipe/public/hardware" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->

                <div class="col-lg-2 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-maroon">
                        <div class="inner">
                            <h3>41</h3>
                            <p>total licenses</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-floppy-o"></i>
                        </div>
                        <a href="http://127.0.0.1/snipe/public/admin/licenses" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->

                <div class="col-lg-2 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-orange">
                        <div class="inner">
                            <h3> 0</h3>
                            <p>total accessories</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-keyboard-o"></i>
                        </div>
                        <a href="http://127.0.0.1/snipe/public/admin/accessories" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->

                <div class="col-lg-2 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <h3> 0</h3>
                            <p>total consumables</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-tint"></i>
                        </div>
                        <a href="http://127.0.0.1/snipe/public/admin/consumables" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>

                </div><!-- ./col -->

                <div class="col-lg-2 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <h3> 0</h3>
                            <p>total Phones</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-tint"></i>
                        </div>
                        <a href="http://127.0.0.1/snipe/public/admin/consumables" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>

                </div><!-- ./col -->

                <div class="col-lg-2 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <h3> 0</h3>
                            <p>total Sim-cards</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-tint"></i>
                        </div>
                        <a href="http://127.0.0.1/snipe/public/admin/consumables" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>

                </div><!-- ./col -->

            </div>


            <!-- recent activity -->
            <div class="row">
                <div class="col-md-9">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Recent Activity</h3>
                            <div class="box-tools pull-right">
                                <a href="http://127.0.0.1/snipe/public/reports/activity"><i class="fa fa-ellipsis-h"></i></a>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table
                                                class="table table-striped"
                                                name="activityReport"
                                                id="table"
                                                data-url="http://127.0.0.1/snipe/public/reports/activity/json?limit=20">
                                            <thead>
                                            <tr>
                                                <th data-field="icon" style="width: 40px;" class="hidden-xs"></th>
                                                <th class="col-sm-2" data-field="created_at">Date</th>
                                                <th class="col-sm-2" data-field="admin">Admin</th>
                                                <th class="col-sm-2" data-field="action_type">Action</th>
                                                <th class="col-sm-4" data-field="item">Item</th>
                                                <th class="col-sm-2" data-field="target">To</th>
                                            </tr>
                                            </thead>

                                        </table>
                                    </div><!-- /.responsive -->
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- ./box-body -->
                    </div><!-- /.box -->
                </div>
                <div class="col-md-3">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">Assets</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="chart-responsive">
                                        <canvas id="statusPieChart" height="150"></canvas>
                                    </div>
                                    <!-- ./chart-responsive -->
                                </div>

                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>





        </section>

    </div><!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> v3.6.6  build 1 (gee2c67a)
            <a target="_blank" class="btn btn-default btn-xs" href="https://snipe-it.readme.io">Documentation</a>
            <a target="_blank" class="btn btn-default btn-xs" href="https://snipe-it-manual.readme.io">User's Manual</a>
            <a target="_blank" class="btn btn-default btn-xs" href="https://snipeitapp.com/support/">Report a Bug</a>
        </div>
        <a target="_blank" href="https://snipeitapp.com">Snipe-IT</a> is an open source
        project, made with <i class="fa fa-heart" style="color: #a94442; font-size: 10px"></i> by <a href="https://twitter.com/snipeyhead">@snipeyhead</a>.
    </footer>



</div><!-- ./wrapper -->


<!-- end main container -->

<div class="modal  modal-danger fade" id="dataConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default  pull-left" data-dismiss="modal">Close</button>
                <a class="btn btn-outline" id="dataConfirmOK">Yes</a>
            </div>
        </div>
    </div>
</div>


<script src="http://127.0.0.1/snipe/public/build/assets/js/all-5ba6978224.js"></script>

<script>
    $(function () {
        //Initialize Select2 Elements
        var iOS = /iPhone|iPad|iPod/.test(navigator.userAgent)  && !window.MSStream;
        if(!iOS)
        {
            $(".select2").select2();
        }
        $('.datepicker').datepicker();
    });

    //Flat blue color scheme for iCheck
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {

        $('.slideout-menu-toggle').on('click', function(event){
            console.log('clicked');
            event.preventDefault();
            // create menu variables
            var slideoutMenu = $('.slideout-menu');
            var slideoutMenuWidth = $('.slideout-menu').width();

            // toggle open class
            slideoutMenu.toggleClass("open");

            // slide menu
            if (slideoutMenu.hasClass("open")) {
                slideoutMenu.show();
                slideoutMenu.animate({
                    right: "0px"
                });
            } else {
                slideoutMenu.animate({
                    right: -slideoutMenuWidth
                }, "-350px");
                slideoutMenu.fadeOut();
            }
        });
    });
</script>


<script src="http://127.0.0.1/snipe/public/assets/js/plugins/chartjs/Chart.min.js"></script>
<script>


    var pieChartCanvas = $("#statusPieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var ctx = document.getElementById("statusPieChart");


    $.get('http://127.0.0.1/snipe/public/api/statuslabels/assets', function (data) {
        var myPieChart = new Chart(ctx,{

            type: 'doughnut',
            data: data,
            options: pieOptions
        });
        // document.getElementById('my-doughnut-legend').innerHTML = myPieChart.generateLegend();
    });





</script>

<script src="http://127.0.0.1/snipe/public/assets/js/bootstrap-table.js"></script>
<script src="http://127.0.0.1/snipe/public/assets/js/extensions/mobile/bootstrap-table-mobile.js"></script>
<script type="text/javascript">
    $('#table').bootstrapTable({
        classes: 'table table-responsive table-no-bordered',
        undefinedText: '',
        iconsPrefix: 'fa',
        showRefresh: false,
        search: false,
        pagination: false,
        sidePagination: 'server',
        sortable: false,
        showMultiSort: false,
        cookie: false,
        mobileResponsive: true,
    });

</script>
<script>
    $("#tagSearch").focus();
</script>

</body>
</html>
