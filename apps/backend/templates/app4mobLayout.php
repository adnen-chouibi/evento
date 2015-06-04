<?php if ($sf_user->isAuthenticated()): ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">

            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="ThemeBucket">
            <link rel="shortcut icon" href="/app4mobTheme/images/favicon.png">

            <title>>>> EVENTO <<<</title>

            <!--Core CSS -->
            <link href="/app4mobTheme/bs3/css/bootstrap.min.css" rel="stylesheet">
            <link href="/app4mobTheme/css/bootstrap-reset.css" rel="stylesheet">
            <link href="/app4mobTheme/font-awesome/css/font-awesome.css" rel="stylesheet" />
            <link rel="stylesheet" type="text/css" href="/app4mobTheme/js/select2/select2.css" />
            <link rel="stylesheet" type="text/css" href="/app4mobTheme/js/bootstrap-datetimepicker/css/datetimepicker.css" />

            <!-- Custom styles for this template -->
            <link href="/app4mobTheme/css/style.css" rel="stylesheet">
            <link href="/app4mobTheme/css/style-responsive.css" rel="stylesheet" />
            <script src="/app4mobTheme/js/jquery.js"></script>
            <script type="text/javascript" src="/js/tiny_mce/tiny_mce.js"></script>
            <!--Morris Chart-->
            <script src="/app4mobTheme/js/morris-chart/morris.js"></script>
            <script src="/app4mobTheme/js/morris-chart/raphael-min.js"></script>
            <script type="text/javascript" src="/app4mobTheme/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
            <script type="text/javascript" src="/ahDoctrineEasyEmbeddedRelationsPlugin/js/ahDoctrineEasyEmbeddedRelationsPlugin.jQuery.js"></script>
            <!-- Just for debugging purposes. Don't actually copy this line! -->
            <!--[if lt IE 9]>
            <script src="/app4mobTheme/js/ie8-responsive-file-warning.js"></script><![endif]-->

            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            <script src="/app4mobTheme/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="/app4mobTheme/https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
            <![endif]-->
            <style>
                .minInput{
                    width: 30px
                }
            </style>
        </head>

        <body>
            <p class="fadeBody" id="back-top" style=""> <i style="margin-top: 7px;" class="fa fa-angle-up"></i></p>
            <section id="container" >
                <!--header start-->
                <header class="header fixed-top clearfix">
                    <!--logo start-->
                    <div class="brand">

                        <a href="<?php echo url_for('homepage'); ?>" class="logo">
                            <img src="/images/logo.png" />
                        </a>
                        <div class="sidebar-toggle-box">
                            <div class="fa fa-bars"></div>
                        </div>
                    </div>
                    <!--logo end-->


                    <div class="top-nav clearfix">
                        <!--search & user info start-->
                        <ul class="nav pull-right top-menu">
                            <li>
                                <input type="text" class="form-control search" placeholder=" Search">
                            </li>
                            <!-- user login dropdown start-->
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="/app4mobTheme/#">
                                    <img alt="" src="/app4mobTheme/images/avatar.png">
                                    <span class="username"><?php echo $sf_user->getUsername() ?> </span>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu extended logout">
                                    <?php if ($sf_user->isSuperAdmin()): ?> 

                                        <li><a href="<?php echo url_for(@sf_guard_user); ?>"><i class=" fa fa-user"></i> Users</a></li>
                                        <li><a href="<?php echo url_for(@sf_guard_user_new) ?>"><i class=" fa fa-plus"></i> Add user</a></li>
                                        <li class="divider"></li>

                                    <?php endif; ?>


                                    <li><a href="<?php echo url_for(@sf_guard_signout) ?>"><i class="fa  fa-power-off"></i> Log Out</a></li>
                                </ul>
                            </li>
                            <!-- user login dropdown end -->
                            <li>
                                <div class="toggle-right-box">
                                    <div class="fa fa-bars"></div>
                                </div>
                            </li>
                        </ul>
                        <!--search & user info end-->
                    </div>
                </header>
                <!--header end-->
                <aside>
                    <div id="sidebar" class="nav-collapse">
                        <!-- sidebar menu start-->            <div class="leftside-navigation">
                            <ul class="sidebar-menu" id="nav-accordion">
                                <li>
                                    <a href="<?php echo url_for('homepage') ?>">
                                        <i class="fa fa-bar-chart-o"></i>
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo url_for('client') ?>">
                                        <i class="fa fa-bar-chart-o"></i>
                                        <span>Gestion des clients</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo url_for('prestataire') ?>">
                                        <i class="fa fa-bar-chart-o"></i>
                                        <span>Gestion des prestataires</span>
                                    </a>
                                </li>
                               
                                
                            </ul></div>        
                        <!-- sidebar menu end-->
                    </div>
                </aside>
                <!--sidebar end-->
                <!--main content start-->
                <section id="main-content">
                    <section class="wrapper">
                        <!-- page start-->
                        <?php echo $sf_content; ?>
                        <!-- page end-->
                    </section>
                </section>
                <!--main content end-->
                <!--right sidebar start-->
                <div class="right-sidebar">
                    <div class="search-row">
                        <input type="text" placeholder="Search" class="form-control">
                    </div>
                    <div class="right-stat-bar">
                        <ul class="right-side-accordion">
                            <li class="widget-collapsible">
                                <a href="/app4mobTheme/#" class="head widget-head red-bg active clearfix">
                                    <span class="pull-left">work progress (5)</span>
                                    <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
                                </a>
                                <ul class="widget-container">
                                    <li>
                                        <div class="prog-row side-mini-stat clearfix">
                                            <div class="side-graph-info">
                                                <h4>Target sell</h4>
                                                <p>
                                                    25%, Deadline 12 june 13
                                                </p>
                                            </div>
                                            <div class="side-mini-graph">
                                                <div class="target-sell">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="prog-row side-mini-stat">
                                            <div class="side-graph-info">
                                                <h4>product delivery</h4>
                                                <p>
                                                    55%, Deadline 12 june 13
                                                </p>
                                            </div>
                                            <div class="side-mini-graph">
                                                <div class="p-delivery">
                                                    <div class="sparkline" data-type="bar" data-resize="true" data-height="30" data-width="90%" data-bar-color="#39b7ab" data-bar-width="5" data-data="[200,135,667,333,526,996,564,123,890,564,455]">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="prog-row side-mini-stat">
                                            <div class="side-graph-info payment-info">
                                                <h4>payment collection</h4>
                                                <p>
                                                    25%, Deadline 12 june 13
                                                </p>
                                            </div>
                                            <div class="side-mini-graph">
                                                <div class="p-collection">
                                                    <span class="pc-epie-chart" data-percent="45">
                                                        <span class="percent"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="prog-row side-mini-stat">
                                            <div class="side-graph-info">
                                                <h4>delivery pending</h4>
                                                <p>
                                                    44%, Deadline 12 june 13
                                                </p>
                                            </div>
                                            <div class="side-mini-graph">
                                                <div class="d-pending">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="prog-row side-mini-stat">
                                            <div class="col-md-12">
                                                <h4>total progress</h4>
                                                <p>
                                                    50%, Deadline 12 june 13
                                                </p>
                                                <div class="progress progress-xs mtop10">
                                                    <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                                                        <span class="sr-only">50% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="widget-collapsible">
                                <a href="/app4mobTheme/#" class="head widget-head terques-bg active clearfix">
                                    <span class="pull-left">contact online (5)</span>
                                    <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
                                </a>
                                <ul class="widget-container">
                                    <li>
                                        <div class="prog-row">
                                            <div class="user-thumb">
                                                <a href="/app4mobTheme/#"><img src="/app4mobTheme/images/avatar1_small.jpg" alt=""></a>
                                            </div>
                                            <div class="user-details">
                                                <h4><a href="/app4mobTheme/#">Jonathan Smith</a></h4>
                                                <p>
                                                    Work for fun
                                                </p>
                                            </div>
                                            <div class="user-status text-danger">
                                                <i class="fa fa-comments-o"></i>
                                            </div>
                                        </div>
                                        <div class="prog-row">
                                            <div class="user-thumb">
                                                <a href="/app4mobTheme/#"><img src="/app4mobTheme/images/avatar1.jpg" alt=""></a>
                                            </div>
                                            <div class="user-details">
                                                <h4><a href="/app4mobTheme/#">Anjelina Joe</a></h4>
                                                <p>
                                                    Available
                                                </p>
                                            </div>
                                            <div class="user-status text-success">
                                                <i class="fa fa-comments-o"></i>
                                            </div>
                                        </div>
                                        <div class="prog-row">
                                            <div class="user-thumb">
                                                <a href="/app4mobTheme/#"><img src="/app4mobTheme/images/chat-avatar2.jpg" alt=""></a>
                                            </div>
                                            <div class="user-details">
                                                <h4><a href="/app4mobTheme/#">John Doe</a></h4>
                                                <p>
                                                    Away from Desk
                                                </p>
                                            </div>
                                            <div class="user-status text-warning">
                                                <i class="fa fa-comments-o"></i>
                                            </div>
                                        </div>
                                        <div class="prog-row">
                                            <div class="user-thumb">
                                                <a href="/app4mobTheme/#"><img src="/app4mobTheme/images/avatar1_small.jpg" alt=""></a>
                                            </div>
                                            <div class="user-details">
                                                <h4><a href="/app4mobTheme/#">Mark Henry</a></h4>
                                                <p>
                                                    working
                                                </p>
                                            </div>
                                            <div class="user-status text-info">
                                                <i class="fa fa-comments-o"></i>
                                            </div>
                                        </div>
                                        <div class="prog-row">
                                            <div class="user-thumb">
                                                <a href="/app4mobTheme/#"><img src="/app4mobTheme/images/avatar1.jpg" alt=""></a>
                                            </div>
                                            <div class="user-details">
                                                <h4><a href="/app4mobTheme/#">Shila Jones</a></h4>
                                                <p>
                                                    Work for fun
                                                </p>
                                            </div>
                                            <div class="user-status text-danger">
                                                <i class="fa fa-comments-o"></i>
                                            </div>
                                        </div>
                                        <p class="text-center">
                                            <a href="/app4mobTheme/#" class="view-btn">View all Contacts</a>
                                        </p>
                                    </li>
                                </ul>
                            </li>
                            <li class="widget-collapsible">
                                <a href="/app4mobTheme/#" class="head widget-head purple-bg active">
                                    <span class="pull-left"> recent activity (3)</span>
                                    <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
                                </a>
                                <ul class="widget-container">
                                    <li>
                                        <div class="prog-row">
                                            <div class="user-thumb rsn-activity">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="rsn-details ">
                                                <p class="text-muted">
                                                    just now
                                                </p>
                                                <p>
                                                    <a href="/app4mobTheme/#">Jim Doe </a>Purchased new equipments for zonal office setup
                                                </p>
                                            </div>
                                        </div>
                                        <div class="prog-row">
                                            <div class="user-thumb rsn-activity">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="rsn-details ">
                                                <p class="text-muted">
                                                    2 min ago
                                                </p>
                                                <p>
                                                    <a href="/app4mobTheme/#">Jane Doe </a>Purchased new equipments for zonal office setup
                                                </p>
                                            </div>
                                        </div>
                                        <div class="prog-row">
                                            <div class="user-thumb rsn-activity">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="rsn-details ">
                                                <p class="text-muted">
                                                    1 day ago
                                                </p>
                                                <p>
                                                    <a href="/app4mobTheme/#">Jim Doe </a>Purchased new equipments for zonal office setup
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="widget-collapsible">
                                <a href="/app4mobTheme/#" class="head widget-head yellow-bg active">
                                    <span class="pull-left"> shipment status</span>
                                    <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
                                </a>
                                <ul class="widget-container">
                                    <li>
                                        <div class="col-md-12">
                                            <div class="prog-row">
                                                <p>
                                                    Full sleeve baby wear (SL: 17665)
                                                </p>
                                                <div class="progress progress-xs mtop10">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="prog-row">
                                                <p>
                                                    Full sleeve baby wear (SL: 17665)
                                                </p>
                                                <div class="progress progress-xs mtop10">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                        <span class="sr-only">70% Completed</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--right sidebar end-->

            </section>

            <!-- Placed js at the end of the document so the pages load faster -->

            <!--Core js-->
            <script src="/app4mobTheme/js/select2/select2.js"></script>

            <script src="/app4mobTheme/bs3/js/bootstrap.min.js"></script>
            <script class="include" type="text/javascript" src="/app4mobTheme/js/jquery.dcjqaccordion.2.7.js"></script>
            <script src="/app4mobTheme/js/jquery.scrollTo.min.js"></script>
            <script src="/app4mobTheme/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
            <script src="/app4mobTheme/js/jquery.nicescroll.js"></script>




            <!--common script init for all pages-->
            <script src="/app4mobTheme/js/scripts.js"></script>

        </body>
    </html>

<?php else: ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">
            <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
            <link rel="shortcut icon" href="img/favicon.png">

            <title>EVENTO</title>

            <!-- Bootstrap core CSS -->
            <link href="/app4mobTheme/bs3/css/bootstrap.min.css" rel="stylesheet">
            <link href="/app4mobTheme/css/bootstrap-reset.css" rel="stylesheet">
            <!--external css-->
            <link href="/app4mobTheme/font-awesome/css/font-awesome.css" rel="stylesheet" />
            <!-- Custom styles for this template -->
            <link href="/app4mobTheme/css/style.css?1" rel="stylesheet">
            <link href="/app4mobTheme/css/style-responsive.css" rel="stylesheet" />

            <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
            <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
            <![endif]-->
        </head>

        <body class="login-body" >

            <div class="container">


                <?php echo $sf_content; ?>

            </div>

        </body>
    </html>

<?php endif; ?>
