<?php
?>

<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box grey-cascade">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-globe"></i>匹配任务
				</div>
				<div class="tools">
					<a href="javascript:;" class="collapse">
					</a>
					<a href="#portlet-config" data-toggle="modal" class="config">
					</a>
					<a href="javascript:;" class="reload">
					</a>
					<a href="javascript:;" class="remove">
					</a>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-toolbar">
					<div class="row">
						<div class="col-md-6">
<!-- 							<div class="btn-group"> -->
<!--  								<button id="sample_editable_1_new" class="btn green"> -->
<!-- 								Add New <i class="fa fa-plus"></i> -->
<!--  								</button> -->
<!-- 							</div> -->
						<input type='text' val='' id="search_info" />
						<div id="display"></div>
						</div>
						<div class="col-md-6">
							<div class="btn-group pull-right">
								<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu pull-right">
									<li>
										<a href="#">
										Print </a>
									</li>
									<li>
										<a href="#">
										Save as PDF </a>
									</li>
									<li>
										<a href="#">
										Export to Excel </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<table class="table table-striped table-bordered table-hover" id="sample_1">
				<thead>
				<tr>
					<th class="table-checkbox">
						<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
					</th>
					<th>
						 Id
					</th>
					<th>
						 TaskId
					</th>
					<th>
						 Method
					</th>
					<th>
						 Status
					</th>
					<th>
						 DataInfo
					</th>
					<th>
						 Operator
					</th>
					<th>
						 CreateTime
					</th>
					<th>
						 FinishTime
					</th>
					<th>
						 Log
					</th>
				</tr>
				</thead>
				<tbody id="disp_tbody">
				<?php foreach ($data['detail_info'] as $item){?>
					<tr class="odd gradeX">
						<td>
							<input type="checkbox" class="checkboxes" value=<?php echo $item['id']?>/>
						</td>
						<td>
							 <?php echo $item['id']?>
						</td>
						<td>
							<a href="javascript:void(0);">
							<?php echo $item['taskid']?> </a>
						</td>
						<td>
							 <?php echo $item['method']?>
						</td>
						<td class="center">
							 <?php echo $item['status']?>
						</td>
						<td>
							<span class="label label-sm label-success">
							 333</span>
						</td>
						<td>
							<?php echo $item['operator']?>
						</td>
						<td>
							<?php echo $item['create_time']?>
						</td>
						<td>
							<?php echo $item['finish_time']?>
						</td>
						<td>
							<?php echo $item['log']?>
						</td>
					</tr>
					<?php }?>
				</tbody>
				</table>
				
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>