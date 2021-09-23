﻿<?php
include('_inc.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo $base_url;?>images/favicon.ico">

    <title>Crypto Admin - Dashboard</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo $base_url;?>assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap-extend -->
	<link rel="stylesheet" href="css/bootstrap-extend.css">
	
	<!-- theme style -->
    <?php
        include('css/master_style.php');
    ?>
	
	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

     
  </head>

<body class="hold-transition skin-black sidebar-mini fixed">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="<?php echo $base_url;?>images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="<?php echo $base_url;?>images/logo-dark.png" alt="logo"></span>
	  </b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="<?php echo $base_url;?>images/logo-light-text.png" alt="logo" class="light-logo">
	  	  <img src="<?php echo $base_url;?>images/logo-dark-text.png" alt="logo" class="dark-logo">
	  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  
		  <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
			</form>
          </li>			
		  
          <!-- Messages -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-email"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">You have 5 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo $base_url;?>images/user2-160x160.png" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Lorem Ipsum
                          <small><i class="fa fa-clock-o"></i> 15 mins</small>
                         </h4>
                         <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                      </div>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo $base_url;?>images/user2-160x160.png" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Nullam tempor
                          <small><i class="fa fa-clock-o"></i> 4 hours</small>
                         </h4>
                         <span>Curabitur facilisis erat quis metus congue viverra.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo $base_url;?>images/user2-160x160.png" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Proin venenatis
                          <small><i class="fa fa-clock-o"></i> Today</small>
                         </h4>
                         <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo $base_url;?>images/user2-160x160.png" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Praesent suscipit
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                         </h4>
                         <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo $base_url;?>images/user2-160x160.png" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Donec tempor
                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                         </h4>
                         <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See all e-Mails</a></li>
            </ul>
          </li>
          <!-- Notifications -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">You have 7 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> Curabitur id eros quis nunc suscipit blandit.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> In gravida mauris et nisi
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Praesent eu lacus in libero dictum fermentum.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Nunc fringilla lorem 
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-message"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">You have 6 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Lorem ipsum dolor sit amet
                        <small class="pull-right">30%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 30%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">30% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Vestibulum nec ligula
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-danger" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Donec id leo ut ipsum
                        <small class="pull-right">70%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-light-blue" style="width: 70%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">70% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Praesent vitae tellus
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Nam varius sapien
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Nunc fringilla
                        <small class="pull-right">90%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-primary" style="width: 90%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">90% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
		  <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $base_url;?>images/user2-160x160.png" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $base_url;?>images/user2-160x160.png" class="float-left rounded-circle" alt="User Image">

                <p>
                  Romi Roy
                  <small class="mb-5">jb@gmail.com</small>
                  <a href="#" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters">
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-person"></i> My Profile</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-settings"></i> Setting</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="#"><i class="ti-settings"></i> Account Setting</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="#"><i class="fa fa-power-off"></i> Logout</a>
                  </div>				
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
  <!--
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
          </li>
  -->
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
		 <div class="ulogo">
			 <a href="index.html">
			  <!-- logo for regular state and mobile devices -->
			  <span><b>Crypto </b>Admin</span>
			</a>
		</div>
        <div class="image">
          <img src="<?php echo $base_url;?>images/user2-160x160.png" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
          <p>Admin Template</p>
			<a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
            <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ion ion-android-mail"></i></a>
            <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
        </div>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="nav-devider"></li>
        <li class="header nav-small-cap">PERSONAL</li>

        <li class="active">
          <a href="#">
            <i class="icon-home"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="active">
          <a href="#">
          <i class="fa fa-users" aria-hidden="true"></i> <span>Members</span>
          </a>
        </li>
        <li class="active">
          <a href="#">
            <i class="fa fa-sign-out" aria-hidden="true"></i> <span>Logout</span>
          </a>
        </li>
        
        <!--
        <li class="treeview">
          <a href="#">
            <i class="icon-chart"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/reports/transactions.html">Transactions</a></li>
            <li><a href="pages/reports/top-gainers-losers.html">Top Gainers/Losers</a></li>
            <li><a href="pages/reports/market-capitalizations.html">Market Capitalizations</a></li>
            <li><a href="pages/reports/crypto-stats.html">Crypto Stats</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-compass"></i>
            <span>Initial Coin Offering</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/ico/ico-distribution-countdown.html">Countdown</a></li>
            <li><a href="pages/ico/ico-roadmap-timeline.html">Roadmap/Timeline</a></li>
            <li><a href="pages/ico/ico-progress.html">Progress Bar</a></li>
            <li><a href="pages/ico/ico-details.html">Details</a></li>
            <li><a href="pages/ico/ico-listing.html">ICO Listing</a></li>
            <li><a href="pages/ico/ico-filter.html">ICO Listing - Filters</a></li>			  
          </ul>
        </li>
        <li>
          <a href="pages/currency-ex/exchange.html">
            <i class="icon-refresh"></i> <span>Currency Exchange</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-people"></i>
            <span>Members</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/members/members.html">Members Grid</a></li>
            <li><a href="pages/members/members-list.html">Members List</a></li>
            <li><a href="pages/members/member-profile.html">Member Profile</a></li>			  
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-equalizer"></i>
            <span>Tickers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tickers/tickers.html">Ticker</a></li>
            <li><a href="pages/tickers/crypto-live-pricing.html">Live Crypto Prices</a></li>		  
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-wallet"></i>
            <span>Transactions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/transactions/tables-transactions.html">Transactions Tables</a></li>
            <li><a href="pages/transactions/transaction-search.html">Transactions Search</a></li>	
            <li><a href="pages/transactions/transaction-details.html">Single Transaction</a></li>
            <li><a href="pages/transactions/counter-transactions.html">Transactions Counter</a></li>	  
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-graph"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html">ChartJS</a></li>
            <li><a href="pages/charts/flot.html">Flot</a></li>
            <li><a href="pages/charts/inline.html">Inline charts</a></li>
            <li><a href="pages/charts/morris.html">Morris</a></li>
            <li><a href="pages/charts/peity.html">Peity</a></li>
            <li><a href="pages/charts/chartist.html">Chartist</a></li>
            <li><a href="pages/charts/rickshaw-charts.html">Rickshaw Charts</a></li>
            <li><a href="pages/charts/nvd3-charts.html">NVD3 Charts</a></li>
			<li><a href="pages/charts/echart.html">eChart</a></li>
			<li><a href="pages/amcharts/amcharts.html">amCharts Charts</a></li>
			<li><a href="pages/amcharts/amstock-charts.html">amCharts Stock Charts</a></li>
			<li><a href="pages/amcharts/ammaps.html">amCharts Maps</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-grid"></i>
            <span>App</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/app/app-chat.html">Chat app</a></li>
            <li><a href="pages/app/project-table.html">Project</a></li>
            <li><a href="pages/app/app-contact.html">Contact / Employee</a></li>
            <li><a href="pages/app/app-ticket.html">Support Ticket</a></li>
			<li><a href="pages/app/calendar.html">Calendar</a></li>
            <li><a href="pages/app/profile.html">Profile</a></li>
            <li><a href="pages/app/userlist-grid.html">Userlist Grid</a></li>
			<li><a href="pages/app/userlist.html">Userlist</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/mailbox/mailbox.html">Inbox</a></li>
            <li><a href="pages/mailbox/compose.html">Compose</a></li>
            <li><a href="pages/mailbox/read-mail.html">Read</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-drop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/badges.html">Badges</a></li>
            <li><a href="pages/UI/border-utilities.html">Border</a></li>
            <li><a href="pages/UI/buttons.html">Buttons</a></li>
            <li><a href="pages/UI/bootstrap-switch.html">Bootstrap Switch</a></li>
            <li><a href="pages/UI/cards.html">User Card</a></li>
            <li><a href="pages/UI/color-utilities.html">Color</a></li>
			<li><a href="pages/UI/date-paginator.html">Date Paginator</a></li>
            <li><a href="pages/UI/dropdown.html">Dropdown</a></li>
            <li><a href="pages/UI/dropdown-grid.html">Dropdown Grid</a></li>
            <li><a href="pages/UI/general.html">General</a></li>
            <li><a href="pages/UI/icons.html">Icons</a></li>
            <li><a href="pages/UI/media-advanced.html">Advanced Medias</a></li>
			<li><a href="pages/UI/modals.html">Modals</a></li>
            <li><a href="pages/UI/nestable.html">Nestable</a></li>
            <li><a href="pages/UI/notification.html">Notification</a></li>
            <li><a href="pages/UI/portlet-draggable.html">Draggable Portlets</a></li>
            <li><a href="pages/UI/ribbons.html">Ribbons</a></li>
            <li><a href="pages/UI/sliders.html">Sliders</a></li>
            <li><a href="pages/UI/sweatalert.html">Sweet Alert</a></li>
            <li><a href="pages/UI/tab.html">Tabs</a></li>
            <li><a href="pages/UI/timeline.html">Timeline</a></li>
            <li><a href="pages/UI/timeline-horizontal.html">Horizontal Timeline</a></li>			  
          </ul>
        </li>
        <li class="header nav-small-cap">FORMS, TABLE & LAYOUTS</li>
		<li class="treeview">
          <a href="#">
            <i class="icon-puzzle"></i>
            <span>Widgets</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/widgets/blog.html">Blog</a></li>
            <li><a href="pages/widgets/chart.html">Chart</a></li>
            <li><a href="pages/widgets/list.html">List</a></li>
            <li><a href="pages/widgets/social.html">Social</a></li>
            <li><a href="pages/widgets/statistic.html">Statistic</a></li>
            <li><a href="pages/widgets/tiles.html">Tiles</a></li>
            <li><a href="pages/widgets/weather.html">Weather</a></li>
            <li><a href="pages/widgets/widgets.html">Widgets</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-layers"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/boxed.html">Boxed</a></li>
            <li><a href="pages/layout/fixed.html">Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html">Collapsed Sidebar</a></li>
          </ul>
        </li>		
		<li class="treeview">
          <a href="#">
            <i class="icon-loop"></i>
            <span>Box</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/box/advanced.html">Advanced</a></li>
            <li><a href="pages/box/basic.html">Boxed</a></li>
            <li><a href="pages/box/color.html">Color</a></li>
			<li><a href="pages/box/group.html">Group</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-note"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/advanced.html">Advanced Elements</a></li>
            <li><a href="pages/forms/code-editor.html">Code Editor</a></li>
            <li><a href="pages/forms/editor-markdown.html">Markdown</a></li>
            <li><a href="pages/forms/editors.html">Editors</a></li>
            <li><a href="pages/forms/form-validation.html">Form Validation</a></li>
            <li><a href="pages/forms/form-wizard.html">Form Wizard</a></li>
            <li><a href="pages/forms/general.html">General Elements</a></li>
            <li><a href="pages/forms/mask.html">Formatter</a></li>
            <li><a href="pages/forms/premade.html">Pre-made Forms</a></li>
            <li><a href="pages/forms/xeditable.html">Xeditable Editor</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-menu"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html">Simple tables</a></li>
            <li><a href="pages/tables/data.html">Data tables</a></li>
            <li><a href="pages/tables/editable-tables.html">Editable Tables</a></li>
            <li><a href="pages/tables/table-color.html">Table Color</a></li>
          </ul>
        </li>
		<li>
          <a href="pages/email/index.html">
            <i class="icon-envelope-open"></i> <span>Emails</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
		<li class="header nav-small-cap">EXTRA COMPONENTS</li>
        <li class="treeview">
          <a href="#">
            <i class="icon-map"></i> <span>Map</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/map/map-google.html">Google Map</a></li>
            <li><a href="pages/map/map-vector.html">Vector Map</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="icon-magnet"></i> <span>Extension</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/extension/fullscreen.html">Fullscreen</a></li>
          </ul>
        </li>        
		<li class="treeview">
          <a href="#">
            <i class="icon-folder-alt"></i> <span>Sample Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/samplepage/blank.html">Blank</a></li>
            <li><a href="pages/samplepage/coming-soon.html">Coming Soon</a></li>
            <li><a href="pages/samplepage/custom-scroll.html">Custom Scrolls</a></li>
			<li><a href="pages/samplepage/faq.html">FAQ</a></li>
			<li><a href="pages/samplepage/gallery.html">Gallery</a></li>
			<li><a href="pages/samplepage/invoice.html">Invoice</a></li>
			<li><a href="pages/samplepage/lightbox.html">Lightbox Popup</a></li>
			<li><a href="pages/samplepage/pace.html">Pace</a></li>
			<li><a href="pages/samplepage/pricing.html">Pricing</a></li>
            <li class="treeview">
              <a href="#">Authentication 
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/samplepage/login.html">Login</a></li>
                <li><a href="pages/samplepage/register.html">Register</a></li>
                <li><a href="pages/samplepage/lockscreen.html">Lockscreen</a></li>
                <li><a href="pages/samplepage/user-pass.html">Recover password</a></li>				  
              </ul>
            </li>            
			<li class="treeview">
              <a href="#">Error Pages 
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/samplepage/404.html">404</a></li>
                <li><a href="pages/samplepage/500.html">500</a></li>
                <li><a href="pages/samplepage/maintenance.html">Maintenance</a></li>		  
              </ul>
            </li> 
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-menu"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Level One</a></li>
            <li class="treeview">
              <a href="#">Level One
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Level Two</a></li>
                <li class="treeview">
                  <a href="#">Level Two
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#">Level Three</a></li>
                    <li><a href="#">Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Level One</a></li>
          </ul>
        </li> 
  -->       
        
      </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      
		<div class="row">
			<div class="col-12">
				<div class="box box-transparent no-shadow">
					<div class="box-body">
						<div class="d-md-flex justify-content-between align-items-center d-inline-block">
							<h2 class="my-0">ETH/BTC</h2>
							<div>
								<p class="mb-5 text-fade">Last Price</p>
								<h4 class="mb-0"><span class="text-success">0.0000245</span> <span class="ml-5">$1.25</span></h4>
							</div>
							<div class="d-lg-block d-none">
								<p class="mb-5 text-fade">24h Change</p>
								<h4 class="mb-0"><span class="text-success">0.0000045</span> <span class="ml-5 text-success">+0.25</span></h4>
							</div>
							<div class="d-lg-block d-none">
								<p class="mb-5 text-fade">24h High</p>
								<h4 class="mb-0"><span class="text-dark">0.0002154</span></h4>
							</div>
							<div class="d-lg-block d-none">
								<p class="mb-5 text-fade">24h Low</p>
								<h4 class="mb-0"><span class="text-danger">0.0001154</span></h4>
							</div>
							<div>
								<p class="mb-5 text-fade">24h Total</p>
								<h4 class="mb-0"><span class="text-dark">142.00002154 BTC</span></h4>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<div class="col-12">
				<div class="box">
				  <div class="box-body">
					  <ul id="webticker-1" class="tic-hover">
						<li>
						  <div class="coin-name">ETH/BTC</div>
						  <div><span class="text-danger">ask:</span> 0.01551</div>
						  <div><span class="text-success">bid:</span> 0.01548</div>
						</li> 
						<li>
						  <div class="coin-name">EOS/BTC</div>
						  <div><span class="text-danger">ask:</span> 0.32552</div>
						  <div><span class="text-success">bid:</span> 0.32550</div>
						</li> 
						<li>
						  <div class="coin-name">ZEC/BTC</div>
						  <div><span class="text-danger">ask:</span> 0.10015</div>
						  <div><span class="text-success">bid:</span> 0.10013</div>
						</li>
						<li>
						  <div class="coin-name">OMG/BTC</div>
						  <div><span class="text-danger">ask:</span> 0.02006</div>
						  <div><span class="text-success">bid:</span> 0.02004</div>
						</li> 
						<li>
						  <div class="coin-name">DSH/BTC</div>
						  <div><span class="text-danger">ask:</span> 0.04356</div>
						  <div><span class="text-success">bid:</span> 0.04354</div>
						</li> 
						<li>
						  <div class="coin-name">ZEC/BTC</div>
						  <div><span class="text-danger">ask:</span> 0.02286</div>
						  <div><span class="text-success">bid:</span> 0.02284</div>
						</li> 
						<li>
						  <div class="coin-name">LOT/BTC</div>
						  <div><span class="text-danger">ask:</span> 0.13355</div>
						  <div><span class="text-success">bid:</span> 0.13353</div>
						</li> 
						<li>
						  <div class="coin-name">LTC/BTC</div>
						  <div><span class="text-danger">ask:</span> 0.11011</div>
						  <div><span class="text-success">bid:</span> 0.11009</div>
						</li>   
					  </ul>
				  </div>
			  </div>
			</div>
			
			<div class="col-xl-3 col-12">
				<div class="box">
					<div class="box-header with-border">
				  		<h4 class="box-title">Time & Sales</h4>
					</div>
					<div class="box-body pt-0">
						<div class="table-responsive">
							<table class="table">
							  <thead>
								<tr>
								  <th scope="col">Time (UTC)</th>
								  <th scope="col">Price</th>
								  <th scope="col">Size</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td>10:26:41.119</td>
								  <td class="text-success">0.0000001234</td>
								  <td>7845</td>
								</tr>
								<tr>
								  <td>10:01:12.121</td>
								  <td class="text-danger">0.00000009853</td>
								  <td>8459</td>
								</tr>
								<tr>
								  <td>09:24:42.212</td>
								  <td class="text-success">0.0000001234</td>
								  <td>12459</td>
								</tr>
								<tr>
								  <td>09:12:52.120</td>
								  <td class="text-danger">0.00000009853</td>
								  <td>75496</td>
								</tr>
								<tr>
								  <td>08:26:41.119</td>
								  <td class="text-danger">0.00000009853</td>
								  <td>1235</td>
								</tr>
								<tr>
								  <td>08:12:12.123</td>
								  <td class="text-danger">0.00000009853</td>
								  <td>12596</td>
								</tr>
								<tr>
								  <td>08:10:12.159</td>
								  <td class="text-success">0.0000001234</td>
								  <td>54269</td>
								</tr>
								<tr>
								  <td>08:03:12.119</td>
								  <td class="text-danger">0.00000009853</td>
								  <td>9653</td>
								</tr>
								<tr>
								  <td>07:26:41.119</td>
								  <td class="text-danger">0.00000009853</td>
								  <td>1235</td>
								</tr>
								<tr>
								  <td>06:26:41.119</td>
								  <td class="text-success">0.0000001234</td>
								  <td>45216</td>
								</tr>
								<tr>
								  <td>05:26:41.119</td>
								  <td class="text-danger">0.00000009853</td>
								  <td>17000</td>
								</tr>
								<tr>
								  <td>04:26:41.119</td>
								  <td class="text-danger">0.00000009853</td>
								  <td>1200</td>
								</tr>
								<tr>
								  <td>10:26:41.119</td>
								  <td class="text-danger">0.00000009853</td>
								  <td>1236</td>
								</tr>
							  </tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Daly Analysis</h4>
					</div>
					<div class="box-body">
					  <div class="chart">
						<div id="e_chart_2" class="" style="height:285px;"></div>	
					  </div>
					</div>
			    </div>
			</div>
			<div class="col-xl-6 col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">BCN/BTC</h4>
				</div>
				<div class="box-body">
				  <div class="chart">
					<div id="bcn-btc"></div>	
				  </div>
				</div>
			  </div>
				
			  <div class="box">
				<div class="box-header with-border">
					<h4 class="box-title">Order Book BCN/BTN</h4>
				</div>
				<div class="box-body pt-0">
					<div class="table-responsive">
						<table class="table">
						  <thead>
							<tr>
							  <th colspan="2" class="text-center">Buying BCN</th>
							  <th colspan="2" class="text-center text-fade"><i class="fa fa-exchange"></i></th>
							  <th colspan="2" class="text-center">Selling BCN</th>
							</tr>
							<tr>
							  <th scope="col">Sum(BCN)</th>
							  <th scope="col">Size</th>
							  <th scope="col">Bid</th>
							  <th scope="col">Ask</th>
							  <th scope="col">Size</th>
							  <th scope="col">Sum(BCN)</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>103500</td>
							  <td>103475</td>
							  <td class="text-success">0.00002135</td>
							  <td class="text-danger">0.00001111</td>
							  <td>102458</td>
							  <td>103580</td>
							</tr>
							<tr>
							  <td>102356</td>
							  <td>102454</td>
							  <td class="text-success">0.00005161</td>
							  <td class="text-danger">0.00002354</td>
							  <td>125452</td>
							  <td>102356</td>
							</tr>
							<tr>
							  <td>102156</td>
							  <td>213589</td>
							  <td class="text-success">0.00002135</td>
							  <td class="text-danger">0.00002154</td>
							  <td>125400</td>
							  <td>102315</td>
							</tr>
							<tr>
							  <td>103500</td>
							  <td>103475</td>
							  <td class="text-success">0.00002135</td>
							  <td class="text-danger">0.00001111</td>
							  <td>102458</td>
							  <td>103500</td>
							</tr>
							<tr>
							  <td>103500</td>
							  <td>103475</td>
							  <td class="text-success">0.00002135</td>
							  <td class="text-danger">0.00008147</td>
							  <td>102458</td>
							  <td>103500</td>
							</tr>
							<tr>
							  <td>103500</td>
							  <td>103475</td>
							  <td class="text-success">0.00002135</td>
							  <td class="text-danger">0.00002154</td>
							  <td>102458</td>
							  <td>103500</td>
							</tr>
							<tr>
							  <td>103500</td>
							  <td>103475</td>
							  <td class="text-success">0.00002135</td>
							  <td class="text-danger">0.00002315</td>
							  <td>102458</td>
							  <td>103500</td>
							</tr>
							
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		    </div>
			<div class="col-xl-3 col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Buy BCN</h4>
				</div>
				<div class="box-body">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#market" role="tab">Market</a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#limit" role="tab">Limit</a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#stop" role="tab">Stop</a> </li>
					</ul>
					<div class="tab-content p-10 tabcontent-border">
						<div class="tab-pane active" id="market" role="tabpanel">
							<form class="dash-form">
								<div class="form-group">
								  <select class="form-control">
									<option>Good-Til-Canceled</option>
									<option>option 2</option>
									<option>option 3</option>
									<option>option 4</option>
									<option>option 5</option>
								  </select>
								</div>
								<p>Balance: <span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								<p>Best ask: <span class="font-weight-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
								<div class="input-group mb-10">
									<span class="input-group-addon">Amount</span>
									<input type="number" class="form-control" placeholder="0">
							    </div>
								<div class="input-group mb-10">
									<span class="input-group-addon">Price</span>
									<input type="number" class="form-control" placeholder="Bitcoin per 1">
							    </div>
								<div class="input-group mb-50">
									<span class="input-group-addon">Total</span>
									<input type="text" class="form-control" placeholder="Bitcoin">
							    </div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Fee: 0.1% </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Rebate: 0.01% </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Reserved </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<button type="submit" class="btn btn-block btn-success mt-20">Buy Limit</button>
							</form>
						</div>
						<div class="tab-pane" id="limit" role="tabpanel">
							<form class="dash-form">
								<div class="form-group">
								  <select class="form-control">
									<option>Good-Til-Canceled</option>
									<option>option 2</option>
									<option>option 3</option>
									<option>option 4</option>
									<option>option 5</option>
								  </select>
								</div>
								<p>Balance: <span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								<p>Best ask: <span class="font-weight-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
								<div class="input-group mb-10">
									<span class="input-group-addon">Amount</span>
									<input type="number" class="form-control" placeholder="0">
							    </div>
								<div class="input-group mb-10">
									<span class="input-group-addon">Price</span>
									<input type="number" class="form-control" placeholder="Bitcoin per 1">
							    </div>
								<div class="input-group mb-50">
									<span class="input-group-addon">Total</span>
									<input type="text" class="form-control" placeholder="Bitcoin">
							    </div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Fee: 0.1% </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Rebate: 0.01% </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Reserved </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<button type="submit" class="btn btn-block btn-success mt-20">Buy Limit</button>
							</form>
						</div>
						<div class="tab-pane" id="stop" role="tabpanel">
							<form class="dash-form">
								<div class="form-group">
								  <select class="form-control">
									<option>Good-Til-Canceled</option>
									<option>option 2</option>
									<option>option 3</option>
									<option>option 4</option>
									<option>option 5</option>
								  </select>
								</div>
								<p>Balance: <span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								<p>Best ask: <span class="font-weight-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
								<div class="input-group mb-10">
									<span class="input-group-addon">Amount</span>
									<input type="number" class="form-control" placeholder="0">
							    </div>
								<div class="input-group mb-10">
									<span class="input-group-addon">Price</span>
									<input type="number" class="form-control" placeholder="Bitcoin per 1">
							    </div>
								<div class="input-group mb-50">
									<span class="input-group-addon">Total</span>
									<input type="text" class="form-control" placeholder="Bitcoin">
							    </div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Fee: 0.1% </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Rebate: 0.01% </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Reserved </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<button type="submit" class="btn btn-block btn-success mt-20">Buy Limit</button>
							</form>
						</div>
					</div>
				</div>
			  </div>
				
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Sell BCN</h4>
				</div>
				<div class="box-body">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#market-sell" role="tab">Market</a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#limit-sell" role="tab">Limit</a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#stop-sell" role="tab">Stop</a> </li>
					</ul>
					<div class="tab-content p-10 tabcontent-border">
						<div class="tab-pane active" id="market-sell" role="tabpanel">
							<form class="dash-form">
								<div class="form-group">
								  <select class="form-control">
									<option>Good-Til-Canceled</option>
									<option>option 2</option>
									<option>option 3</option>
									<option>option 4</option>
									<option>option 5</option>
								  </select>
								</div>
								<p>Balance: <span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								<p>Best ask: <span class="font-weight-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
								<div class="input-group mb-10">
									<span class="input-group-addon">Amount</span>
									<input type="number" class="form-control" placeholder="0">
							    </div>
								<div class="input-group mb-10">
									<span class="input-group-addon">Price</span>
									<input type="number" class="form-control" placeholder="Bitcoin per 1">
							    </div>
								<div class="input-group mb-50">
									<span class="input-group-addon">Total</span>
									<input type="text" class="form-control" placeholder="Bitcoin">
							    </div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Fee: 0.1% </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Rebate: 0.01% </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Reserved </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<button type="submit" class="btn btn-block btn-danger mt-20">Sell Limit</button>
							</form>
						</div>
						<div class="tab-pane" id="limit-sell" role="tabpanel">
							<form class="dash-form">
								<div class="form-group">
								  <select class="form-control">
									<option>Good-Til-Canceled</option>
									<option>option 2</option>
									<option>option 3</option>
									<option>option 4</option>
									<option>option 5</option>
								  </select>
								</div>
								<p>Balance: <span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								<p>Best ask: <span class="font-weight-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
								<div class="input-group mb-10">
									<span class="input-group-addon">Amount</span>
									<input type="number" class="form-control" placeholder="0">
							    </div>
								<div class="input-group mb-10">
									<span class="input-group-addon">Price</span>
									<input type="number" class="form-control" placeholder="Bitcoin per 1">
							    </div>
								<div class="input-group mb-50">
									<span class="input-group-addon">Total</span>
									<input type="text" class="form-control" placeholder="Bitcoin">
							    </div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Fee: 0.1% </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Rebate: 0.01% </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Reserved </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<button type="submit" class="btn btn-block btn-danger mt-20">Sell Limit</button>
							</form>
						</div>
						<div class="tab-pane" id="stop-sell" role="tabpanel">
							<form class="dash-form">
								<div class="form-group">
								  <select class="form-control">
									<option>Good-Til-Canceled</option>
									<option>option 2</option>
									<option>option 3</option>
									<option>option 4</option>
									<option>option 5</option>
								  </select>
								</div>
								<p>Balance: <span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								<p>Best ask: <span class="font-weight-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
								<div class="input-group mb-10">
									<span class="input-group-addon">Amount</span>
									<input type="number" class="form-control" placeholder="0">
							    </div>
								<div class="input-group mb-10">
									<span class="input-group-addon">Price</span>
									<input type="number" class="form-control" placeholder="Bitcoin per 1">
							    </div>
								<div class="input-group mb-50">
									<span class="input-group-addon">Total</span>
									<input type="text" class="form-control" placeholder="Bitcoin">
							    </div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Fee: 0.1% </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Rebate: 0.01% </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="mb-5">Reserved </p>
									<p class="mb-5"><span class="font-weight-600">0 <i class="fa fa-bitcoin"></i></span></p>
								</div>
								<button type="submit" class="btn btn-block btn-danger mt-20">Sell Limit</button>
							</form>
						</div>
					</div>
				</div>
			  </div>
			</div>
		</div>
		
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2019 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development 
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="report_panel" class="chk-col-grey" >
			<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

            <p>
              general settings information
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="allow_mail" class="chk-col-grey" >
			<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="expose_author" class="chk-col-grey" >
			<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="show_me_online" class="chk-col-grey" >
			<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="off_notifications" class="chk-col-grey" >
			<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">              
              <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
              Delete chat history
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	  
	<!-- jQuery 3 -->
	<script src="<?php echo $base_url;?>assets/vendor_components/jquery/dist/jquery.js"></script>
	
	<!-- popper -->
	<script src="<?php echo $base_url;?>assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?php echo $base_url;?>assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>
	
	<!-- Slimscroll -->
	<script src="<?php echo $base_url;?>assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="<?php echo $base_url;?>assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- apexcharts -->
	<script src="<?php echo $base_url;?>assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
	<script src="<?php echo $base_url;?>assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="js/pages/ohlc.js"></script>	
	
	<!-- webticker -->
	<script src="<?php echo $base_url;?>assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js"></script>
	
	<!-- EChartJS JavaScript -->
	<script src="<?php echo $base_url;?>assets/vendor_components/echarts-master/dist/echarts-en.min.js"></script>
	<script src="<?php echo $base_url;?>assets/vendor_components/echarts-liquidfill-master/dist/echarts-liquidfill.min.js"></script>
	
	<!-- Crypto_Admin App -->
	<script src="js/template.js"></script>
	
	<!-- Crypto_Admin dashboard demo (This is only for demo purposes) -->
	<script src="js/pages/dashboard.js"></script>
	<script src="js/pages/dashboard-chart.js"></script>
	
	<!-- Crypto_Admin for demo purposes -->
	<script src="js/demo.js"></script>

	
</body>
</html>