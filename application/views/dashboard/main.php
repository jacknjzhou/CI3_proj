<?php 
?>
<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat blue-madison">
			<div class="visual">
				<i class="fa fa-comments"></i>
			</div>
			<div class="details">
				<div class="number">
					 1349
				</div>
				<div class="desc">
					 新增反馈量
				</div>
			</div>
			<a class="more" href="#">
			查看更多 <i class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat red-intense">
			<div class="visual">
				<i class="fa fa-bar-chart-o"></i>
			</div>
			<div class="details">
				<div class="number">
					 12,5M$
				</div>
				<div class="desc">
					 总体利润
				</div>
			</div>
			<a class="more" href="#">
			查看更多 <i class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat green-haze">
			<div class="visual">
				<i class="fa fa-shopping-cart"></i>
			</div>
			<div class="details">
				<div class="number">
					 549
				</div>
				<div class="desc">
					 新需求单量
				</div>
			</div>
			<a class="more" href="#">
			查看更多 <i class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat purple-plum">
			<div class="visual">
				<i class="fa fa-globe"></i>
			</div>
			<div class="details">
				<div class="number">
					 +89%
				</div>
				<div class="desc">
					 关注度
				</div>
			</div>
			<a class="more" href="#">
			查看更多 <i class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
</div>
	<!-- END DASHBOARD STATS -->
	<div class="clearfix">
	</div>
	<div class="row">
		<div class="col-md-6 col-sm-6">
			<!-- BEGIN PORTLET-->
			<div class="portlet solid bordered grey-cararra">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-bar-chart-o"></i>访问量
					</div>
					<!-- <div class="actions">
						<div class="btn-group" data-toggle="buttons">
							<label class="btn grey-steel btn-sm active">
							<input type="radio" name="options" class="toggle" id="option1">New</label>
							<label class="btn grey-steel btn-sm">
							<input type="radio" name="options" class="toggle" id="option2">Returning</label>
						</div>
					</div> -->
				</div>
				<div class="portlet-body">
					<div id="site_statistics_loading">
						<img src=<?=base_url()."static/assets/admin/layout/img/loading.gif"?> alt="loading"/>
					</div>
					<div id="site_statistics_content" class="display-none">
						<div id="site_statistics" class="chart">
						</div>
					</div>
				</div>
			</div>
			<!-- END PORTLET-->
		</div>
		<div class="col-md-6 col-sm-6">
			
			<!-- BEGIN PORTLET-->
			<div class="portlet paddingless">
			<!-- 	<div class="portlet-title line">
					<div class="caption">
						<i class="fa fa-bell-o"></i>新闻概览
					</div>
<!-- 							<div class="tools"> -->
<!-- 								<a href="" class="collapse"> -->
<!-- 								</a> -->
								<!-- <a href="#portlet-config" data-toggle="modal" class="config"> -->
<!-- 								</a> -->
<!-- 								<a href="" class="reload"> -->
<!-- 								</a> -->
<!-- 								<a href="" class="remove"> -->
<!-- 								</a> -->
<!-- 							</div> -->
				<!-- </div> --> 
				<div class="portlet-body">
					<!--BEGIN TABS(采用的tab布局方式进行切换)-->
					<div class="tabbable tabbable-custom">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_1_1" data-toggle="tab">
								需求相关 </a>
							</li>
							<li>
								<a href="#tab_1_2" data-toggle="tab">
								任务相关 </a>
							</li>
							<li>
								<a href="#tab_1_3" data-toggle="tab">
								用户相关 </a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1_1">
								<div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible="0">
									<ul class="feeds">
										<li>
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-success">
															<i class="fa fa-bell-o"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 You have 4 pending tasks. <span class="label label-sm label-danger ">
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
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-info">
															<i class="fa fa-bullhorn"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 New order received. Please take care of it.
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 30 mins
												</div>
											</div>
										</li>
										<li>
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-success">
															<i class="fa fa-bell-o"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
															Overdue </span>
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 2 hours
												</div>
											</div>
										</li>
										
									</ul>
								</div>
							</div>
							<div class="tab-pane" id="tab_1_2">
								<div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
									<ul class="feeds">
										<li>
											<a href="#">
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-success">
															<i class="fa fa-bell-o"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 New user registered
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 Just now
												</div>
											</div>
											</a>
										</li>
										
										<li>
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-danger">
															<i class="fa fa-bolt"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 Order #24DOP4 has been rejected. <span class="label label-sm label-danger ">
															Take action <i class="fa fa-share"></i>
															</span>
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
										
										<li>
											<a href="#">
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-success">
															<i class="fa fa-bell-o"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 New user registered
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 Just now
												</div>
											</div>
											</a>
										</li>
										
										<li>
											<a href="#">
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-success">
															<i class="fa fa-bell-o"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 New user registered
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 Just now
												</div>
											</div>
											</a>
										</li>
										
										<li>
											<a href="#">
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-success">
															<i class="fa fa-bell-o"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 New user registered
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 Just now
												</div>
											</div>
											</a>
										</li>
										
									</ul>
								</div>
							</div>
							<div class="tab-pane" id="tab_1_3">
								<div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
									
									<div class="row">
										<div class="col-md-6 user-info">
											<img alt="" src="../../assets/admin/layout/img/avatar.png" class="img-responsive"/>
											<div class="details">
												<div>
													<a href="#">
													Eric Kim </a>
													<span class="label label-sm label-info">
													Pending </span>
												</div>
												<div>
													 19 Jan 2013 12:45PM
												</div>
											</div>
										</div>
										<div class="col-md-6 user-info">
											<img alt="" src="../../assets/admin/layout/img/avatar.png" class="img-responsive"/>
											<div class="details">
												<div>
													<a href="#">
													Lisa Miller </a>
													<span class="label label-sm label-danger">
													In progress </span>
												</div>
												<div>
													 19 Jan 2013 11:55PM
												</div>
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-6 user-info">
											<img alt="" src=<?=base_url()."static/assets/admin/layout/img/avatar.png"?> class="img-responsive"/>
											<div class="details">
												<div>
													<a href="#">
													Eric Kim </a>
													<span class="label label-sm label-info">
													Pending </span>
												</div>
												<div>
													 19 Jan 2013 12:45PM
												</div>
											</div>
										</div>
										<div class="col-md-6 user-info">
											<img alt="" src=<?=base_url()."static/assets/admin/layout/img/avatar.png"?> class="img-responsive"/>
											<div class="details">
												<div>
													<a href="#">
													Lisa Miller </a>
													<span class="label label-sm label-danger">
													In progress </span>
												</div>
												<div>
													 19 Jan 2013 11:55PM
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--END TABS-->
				</div>
			</div>
			<!-- END PORTLET-->
			
		</div>
	</div>
	<div class="clearfix">
	</div>
	<div class="row ">
		<div class="col-md-6 col-sm-6">
			<div class="portlet box purple-wisteria">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-calendar"></i>访问量
					</div>
					<div class="actions">
						<a href="javascript:;" class="btn btn-sm btn-default easy-pie-chart-reload">
						<i class="fa fa-repeat"></i> 重新载入 </a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="row">
						<div class="col-md-4">
							<div class="easy-pie-chart">
								<div class="number transactions" data-percent="55">
									<span>
									+55 </span>
									%
								</div>
								<a class="title" href="#">
								交易量 <i class="icon-arrow-right"></i>
								</a>
							</div>
						</div>
						<div class="margin-bottom-10 visible-sm">
						</div>
						<div class="col-md-4">
							<div class="easy-pie-chart">
								<div class="number visits" data-percent="85">
									<span>
									+85 </span>
									%
								</div>
								<a class="title" href="#">
								访客量 <i class="icon-arrow-right"></i>
								</a>
							</div>
						</div>
						<div class="margin-bottom-10 visible-sm">
						</div>
						<div class="col-md-4">
							<div class="easy-pie-chart">
								<div class="number bounce" data-percent="46">
									<span>
									-46 </span>
									%
								</div>
								<a class="title" href="#">
								反弹比例 <i class="icon-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6">
			<div class="portlet box red-sunglo">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-calendar"></i>服务状态
					</div>
					<div class="tools">
						<a href="" class="collapse">
						</a>
						<a href="#portlet-config" data-toggle="modal" class="config">
						</a>
						<a href="" class="reload">
						</a>
						<a href="" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="row">
						<div class="col-md-4">
							<div class="sparkline-chart">
								<div class="number" id="sparkline_bar"></div>
								<a class="title" href="#">
								网络 <i class="icon-arrow-right"></i>
								</a>
							</div>
						</div>
						<div class="margin-bottom-10 visible-sm">
						</div>
						<div class="col-md-4">
							<div class="sparkline-chart">
								<div class="number" id="sparkline_bar2"></div>
								<a class="title" href="#">
								CPU负载 <i class="icon-arrow-right"></i>
								</a>
							</div>
						</div>
						<div class="margin-bottom-10 visible-sm">
						</div>
						<div class="col-md-4">
							<div class="sparkline-chart">
								<div class="number" id="sparkline_line"></div>
								<a class="title" href="#">
								负载率 <i class="icon-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>