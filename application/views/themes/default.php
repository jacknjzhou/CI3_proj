<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
Version: 3.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Jackson | Monitor And Management Platform</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/> -->
<link href=<?=base_url().'static/public/plugins/font-awesome/css/font-awesome.min.css' ?> rel="stylesheet" type="text/css"/>
<link href=<?=base_url().'static/public/plugins/simple-line-icons/simple-line-icons.min.css'?> rel="stylesheet" type="text/css"/>
<link href=<?=base_url().'static/public/plugins/bootstrap/css/bootstrap.min.css'?> rel="stylesheet" type="text/css"/>
<link href=<?=base_url().'static/public/plugins/uniform/css/uniform.default.css'?> rel="stylesheet" type="text/css"/>
<link href=<?=base_url().'static/public/plugins/bootstrap-switch/css/bootstrap-switch.min.css'?> rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href=<?=base_url().'static/public/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css'?> rel="stylesheet" type="text/css"/>
<link href=<?=base_url().'static/public/plugins/fullcalendar/fullcalendar.min.css'?> rel="stylesheet" type="text/css"/>
<link href=<?=base_url().'static/public/plugins/jqvmap/jqvmap/jqvmap.css'?> rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<link href=<?=base_url().'static/public/plugins/select2/select2.css'?> rel="stylesheet" type="text/css"  />
<link  href=<?=base_url().'static/public/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css'?> rel="stylesheet" type="text/css" />
<!-- BEGIN PAGE STYLES -->
<link href=<?=base_url().'static/assets/admin/pages/css/tasks.css'?> rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href=<?=base_url().'static/public/css/components.css'?> id="style_components" rel="stylesheet" type="text/css"/>
<link href=<?=base_url().'static/public/css/plugins.css'?> rel="stylesheet" type="text/css"/>
<link href=<?=base_url().'static/assets/admin/layout/css/layout.css'?> rel="stylesheet" type="text/css"/>
<link href=<?=base_url().'static/assets/admin/layout/css/themes/darkblue.css'?> rel="stylesheet" type="text/css" id="style_color"/>
<link href=<?=base_url().'static/assets/admin/layout/css/custom.css'?> rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content page-style-square"> 
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="javascript:;">
			<img src=<?=base_url()."static/assets/admin/layout/img/logo.png"?> alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="icon-bell"></i>
					<span class="badge badge-default">
					7 </span>
					</a>
					<ul class="dropdown-menu">
						<li class="external">
							<h3><span class="bold">12 pending</span> notifications</h3>
							<a href=javascript:;>view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
								<li>
									<a href="javascript:;">
									<span class="time">just now</span>
									<span class="details">
									<span class="label label-sm label-icon label-success">
									<i class="fa fa-plus"></i>
									</span>
									New user registered. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">10 mins</span>
									<span class="details">
									<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell-o"></i>
									</span>
									Server #2 not responding. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">14 hrs</span>
									<span class="details">
									<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
									</span>
									Application error. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">5 days</span>
									<span class="details">
									<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
									</span>
									System Error. </span>
									</a>
								</li>
								
							</ul>
						</li>
					</ul>
				</li>
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="icon-calendar"></i>
					<span class="badge badge-default">
					3 </span>
					</a>
					<ul class="dropdown-menu extended tasks">
						<li class="external">
							<h3>You have <span class="bold">12 pending</span> tasks</h3>
							<a href="page_todo.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
								
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Application deployment</span>
									<span class="percent">65%</span>
									</span>
									<span class="progress">
									<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Mobile app release</span>
									<span class="percent">98%</span>
									</span>
									<span class="progress">
									<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
									</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src=<?=base_url()."static/assets/admin/layout/img/avatar3_small.jpg"?> />
					<span class="username username-hide-on-mobile">
					Nick </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="extra_profile.html">
							<i class="icon-user"></i> My Profile </a>
						</li>
						<li>
							<a href="inbox.html">
							<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
							3 </span>
							</a>
						</li>
						<li>
							<a href="page_todo.html">
							<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
							7 </span>
							</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="extra_lock.html">
							<i class="icon-lock"></i> Lock Screen </a>
						</li>
						<li>
							<a href="login.html">
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-quick-sidebar-toggler">
					<a href="javascript:;" class="dropdown-toggle">
					<i class="icon-logout"></i>
					</a>
				</li>
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
<!-- 				<li class="sidebar-search-wrapper"> -->
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
<!-- 					<form class="sidebar-search " action="extra_search.html" method="POST"> -->
<!-- 						<a href="javascript:;" class="remove"> -->
<!-- 						<i class="icon-close"></i> -->
<!-- 						</a> -->
<!-- 						<div class="input-group"> -->
<!-- 							<input type="text" class="form-control" placeholder="Search..."> -->
<!-- 							<span class="input-group-btn"> -->
<!-- 							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a> -->
<!-- 							</span> -->
<!-- 						</div> -->
<!-- 					</form> -->
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
<!-- 				</li> -->
				<li class="start active open">
					<a href="javascript:;">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="active">
							<a href="/index.php/main/index">
							<i class="icon-bar-chart"></i>
							概览</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-basket"></i>
					<span class="title">资源投放</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							<i class="icon-basket"></i>
							设备需求单</a>
						</li>
						<li>
							<a href="javascript:;">
							<i class="icon-tag"></i>
							需求单详情</a>
						</li>
						<li>
							<a href="javascript:;">
							<i class="icon-handbag"></i>
							投放详情</a>
						</li>
						<li>
							<a href="javascript:;">
							<i class="icon-pencil"></i>
							编辑产品</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;">
					<i class="icon-diamond"></i>
					<span class="title">任务跟踪</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							需求任务</a>
						</li>
						<li>
							<a href="javascript:;">
							母机任务</a>
						</li>
						<li>
							<a href="javascript:;">
							投放任务 </a>
						</li>
						<li>
							<a href="ui_icons.html">
							<span class="badge badge-roundless badge-danger">new</span>Font Icons</a>
						</li>
						<li>
							<a href="ui_page_progress_style_1.html">
							<span class="badge badge-roundless badge-warning">new</span>Page Progress Bar</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-puzzle"></i>
					<span class="title">配置管理</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							步骤管理</a>
						</li>
						<li>
							<a href="javascript:;">
							<span class="badge badge-roundless badge-warning">NUM</span>灰度版本管理</a>
						</li>
					</ul>
				</li>
				<!-- BEGIN ANGULARJS LINK -->
				<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="其它">
					<a href="javascript:;" target="_blank">
					<i class="icon-paper-plane"></i>
					<span class="title">
					其它 </span>
					</a>
				</li>
				<!-- END ANGULARJS LINK -->
				<li class="heading">
					<h3 class="uppercase">工具</h3>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="title">工具</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							清理固资</a>
						</li>
						<li>
							<a href="javascript:;">
							清理IP</a>
						</li>
						<li>
							<a href="javascript:;">
							健康检查</a>
						</li>
						<li>
							<a href="javascript:;">
							<span class="badge badge-roundless badge-warning">new</span>新功能</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-briefcase"></i>
					<span class="title">表格汇总</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							资源监控报表</a>
						</li>
						<li>
							<a href="javascript:;">
							任务监控报表</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-wallet"></i>
					<span class="title">Portlets</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="/index.php/demo/index">
							General Portlets</a>
						</li>
						
						<li>
							<a href="javascript:;">
							<span class="badge badge-roundless badge-danger">new</span>New Portlets #2</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-bar-chart"></i>
					<span class="title">相关图表</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							图表</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-docs"></i>
					<span class="title">详情相关</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
								<i class="icon-paper-plane"></i>
								<span class="badge badge-warning">2</span>
								需求相关
							</a>
						</li>
						<li>
							<a href="javascript:;">
							<i class="icon-envelope"></i>
							<span class="badge badge-danger">4</span>任务相关</a>
						</li>
						<li>
							<a href="javascript:;">
							<i class="icon-calendar"></i>
							<span class="badge badge-danger">14</span>人员相关</a>
						</li>
						
					</ul>
				</li>
				
				<li>
					<a href="javascript:;">
					<i class="icon-folder"></i>
					<span class="title">任务详情跟踪</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							<i class="icon-settings"></i>投放匹配任务<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="/index.php/match_task/index"><i class="icon-camera"></i>匹配任务</a>
								</li>
								<li>
									<a href="javascript:;">
									<i class="icon-user"></i>
									初始化任务 <span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="#"><i class="icon-power"></i>预检查</a>
										</li>
										<li>
											<a href="#"><i class="icon-paper-plane"></i>初始化</a>
										</li>
										<li>
											<a href="#"><i class="icon-star"></i> Sample Link 1</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">
									<i class="icon-user"></i>
									投放任务 <span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="#"><i class="icon-power"></i>组件安装</a>
										</li>
										<li>
											<a href="#"><i class="icon-paper-plane"></i>投放</a>
										</li>
										<li>
											<a href="#"><i class="icon-star"></i> Sample Link 1</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-link"></i>下线<a>
								</li>
<!-- 								<li> -->
<!-- 									<a href="#"><i class="icon-pointer"></i> Sample Link 3</a> -->
<!-- 								</li> -->
							</ul>
						</li>
						
					</ul>
				</li>
				
				<li class="heading">
					<h3 class="uppercase">更多</h3>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-logout"></i>
					<span class="title">其它</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							XXOO</a>
						</li>
					</ul>
				</li>
				
				<li class="last ">
					<a href="javascript:;">
					<i class="icon-pointer"></i>
					<span class="title">网站地图</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							Maps</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Dashboard(主页) <small>报表 & 统计</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="javascript:;">主页</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="javascript:;">索引</a>
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<?php print $this->getBlock('content');?>
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
	<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
	<div class="page-quick-sidebar-wrapper">
		<div class="page-quick-sidebar">
			<div class="nav-justified">
				<ul class="nav nav-tabs nav-justified">
					<li class="active">
						<a href="#quick_sidebar_tab_1" data-toggle="tab">
						Users <span class="badge badge-danger">2</span>
						</a>
					</li>
					<li>
						<a href="#quick_sidebar_tab_2" data-toggle="tab">
						Alerts <span class="badge badge-success">7</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						更多<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-bell"></i> Alerts </a>
							</li>
							
						</ul>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
						<div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
							<h3 class="list-heading">Staff</h3>
							<ul class="media-list list-items">
								<li class="media">
									<div class="media-status">
										<span class="badge badge-success">8</span>
									</div>
									<img class="media-object" src=<?=base_url()."static/assets/admin/layout/img/avatar3.jpg"?> alt="...">
									<div class="media-body">
										<h4 class="media-heading">Bob Nilson</h4>
										<div class="media-heading-sub">
											 Project Manager
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src=<?=base_url()."static/assets/admin/layout/img/avatar1.jpg"?> alt="...">
									<div class="media-body">
										<h4 class="media-heading">Nick Larson</h4>
										<div class="media-heading-sub">
											 Art Director
										</div>
									</div>
								</li>
								
							</ul>
							
						</div>
						<div class="page-quick-sidebar-item">
							<div class="page-quick-sidebar-chat-user">
								<div class="page-quick-sidebar-nav">
									<a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
								</div>
								<div class="page-quick-sidebar-chat-user-messages">
									<div class="post out">
										<img class="avatar" alt="" src=<?=base_url()."static/assets/admin/layout/img/avatar3.jpg"?>/>
										<div class="message">
											<span class="arrow"></span>
											<a href="#" class="name">Bob Nilson</a>
											<span class="datetime">20:15</span>
											<span class="body">
											When could you send me the report ? </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src=<?=base_url()."static/assets/admin/layout/img/avatar2.jpg"?>/>
										<div class="message">
											<span class="arrow"></span>
											<a href="#" class="name">Ella Wong</a>
											<span class="datetime">20:15</span>
											<span class="body">
											Its almost done. I will be sending it shortly </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src=<?=base_url()."static/assets/admin/layout/img/avatar3.jpg"?>/>
										<div class="message">
											<span class="arrow"></span>
											<a href="#" class="name">Bob Nilson</a>
											<span class="datetime">20:15</span>
											<span class="body">
											Alright. Thanks! :) </span>
										</div>
									</div>
									
									<div class="post out">
										<img class="avatar" alt="" src=<?=base_url()."static/assets/admin/layout/img/avatar3.jpg"?>/>
										<div class="message">
											<span class="arrow"></span>
											<a href="#" class="name">Bob Nilson</a>
											<span class="datetime">20:17</span>
											<span class="body">
											No probs. Just take your time :) </span>
										</div>
									</div>
									
								</div>
								<div class="page-quick-sidebar-chat-user-form">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Type a message here...">
										<div class="input-group-btn">
											<button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
						<div class="page-quick-sidebar-alerts-list">
							<h3 class="list-heading">General</h3>
							<ul class="feeds list-items">
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 Just now
										</div>
									</div>
								</li>
								
								<li>
									<a href="#">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-default">
													<i class="fa fa-briefcase"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 IPO Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
							</ul>
							<h3 class="list-heading">System</h3>
							<ul class="feeds list-items">
								
								<li>
									<a href="#">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-danger">
													<i class="fa fa-bar-chart-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Finance Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-default">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2016 &copy; Powered by jackson.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src=<?=base_url()."static/public/plugins/jquery.min.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/public/plugins/jquery-migrate.min.js"?> type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src=<?=base_url()."static/public/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/public/plugins/bootstrap/js/bootstrap.min.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/public/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/public/plugins/jquery-slimscroll/jquery.slimscroll.min.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/public/plugins/jquery.blockui.min.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/public/plugins/jquery.cokie.min.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/public/plugins/uniform/jquery.uniform.min.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/public/plugins/bootstrap-switch/js/bootstrap-switch.min.js"?> type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->

<script src=<?=base_url()."static/public/plugins/flot/jquery.flot.min.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/public/plugins/flot/jquery.flot.resize.min.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/public/plugins/flot/jquery.flot.categories.min.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/public/plugins/jquery.pulsate.min.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/public/plugins/bootstrap-daterangepicker/moment.min.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/public/plugins/bootstrap-daterangepicker/daterangepicker.js"?> type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src=<?=base_url()."static/public/plugins/fullcalendar/fullcalendar.min.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/public/plugins/jquery-easypiechart/jquery.easypiechart.min.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/public/plugins/jquery.sparkline.min.js"?> type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script type="text/javascript" src=<?=base_url()."static/public/plugins/select2/select2.min.js"?>></script>
<script type="text/javascript" src=<?=base_url()."static/public/plugins/datatables/media/js/jquery.dataTables.min.js"?>></script>
<script type="text/javascript" src=<?=base_url()."static/public/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"?>></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=<?=base_url()."static/public/scripts/metronic.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/assets/admin/layout/scripts/layout.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/assets/admin/layout/scripts/quick-sidebar.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/assets/admin/layout/scripts/demo.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/assets/admin/pages/scripts/index.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/assets/admin/pages/scripts/tasks.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/assets/admin/pages/scripts/table-managed.js"?> ></script>
<script src=<?=base_url()."static/js/main.js"?> type="text/javascript"></script>
<script src=<?=base_url()."static/js/match_task.js"?> type="text/javascript"></script>


<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
   Demo.init(); // init demo features 
   Index.init();   
   Index.initDashboardDaterange();
   //Index.initJQVMAP(); // init index page's custom scripts
   //Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Tasks.initDashboardWidget();
   TableManaged.init();
   //get_info_ajax();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>