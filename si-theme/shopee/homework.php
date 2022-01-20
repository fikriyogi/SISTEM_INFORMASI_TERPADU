<?php 
include 'header.php'; 
// <!-- END HEADER -->

// <!-- Left panel : Navigation area -->
// <!-- Note: This width of the aside area can be adjusted through LESS variables -->
include 'menu.php';
// <!-- END NAVIGATION -->
?>
<!-- MAIN PANEL -->
<div id="main" role="main">

	<!-- RIBBON -->
	<div id="ribbon">

		<span class="ribbon-button-alignment"> 
			<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
				<i class="fa fa-refresh"></i>
			</span> 
		</span>

		<!-- breadcrumb -->
		<ol class="breadcrumb">
			<li>Home</li><li>Tables</li><li>Data Tables</li>
		</ol>

	</div>
	<!-- END RIBBON -->

	<!-- MAIN CONTENT -->
	<div id="content">

		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<h1 class="page-title txt-color-blueDark">
					<i class="fa fa-table fa-fw "></i> Classes 
				</h1>
			</div>
			
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<!-- Button trigger modal -->
				<a data-toggle="modal" href="#myModal" class="btn btn-success btn-sm pull-right header-btn hidden-mobile"><i class="fa fa-circle-arrow-up fa-lg"></i> Launch form modal</a>
			</div>
		</div>
		
		<!-- widget grid -->
		<section id="widget-grid" class="">
		
			<!-- row -->
			<div class="row">
		
				<!-- NEW WIDGET START -->
				<article class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" >
						<header>
							<span class="widget-icon"> <i class="fa fa-table"></i> </span>
							<h2>Add Classes </h2>
		
						</header>
		
						<!-- widget div-->
						<div>
		
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
		
							</div>
							<!-- end widget edit box -->
		
							<!-- widget content -->
							<div class="widget-body no-padding">

								<form action="uploads.php" method="post" enctype="multipart/form-data" id="contact-form" class="smart-form">
									<!-- <header>Contacts form</header> -->
									
									<fieldset>	

										<section>
											<label class="label">Title</label>
											<label class="input">
												<div class="input input-file">
													<span class="button"><input type="file" id="file" name="file1" onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include some files" readonly="">
												</div>
											</label>
										</section>

								            <?php if(isset($_GET['st'])) { ?>
								                <div class="alert alert-danger text-center">
								                <?php if ($_GET['st'] == 'success') {
								                        echo "File Uploaded Successfully!";
								                    }
								                    else
								                    {
								                        echo 'Invalid File Extension!';
								                    } ?>
								                </div>
								            <?php } ?>
									</fieldset>
									
									<footer>
										<button type="submit" class="btn btn-primary" name="saveHomework"  value="Upload"  >Save</button>
									</footer>
									
									<div class="message">
										<i class="fa fa-thumbs-up"></i>
										<p>Your message was successfully sent!</p>
									</div>
								</form>			
		
							</div>
							<!-- end widget content -->
		
						</div>
						<!-- end widget div -->
		
					</div>
					<!-- end widget -->
		
				</article>
				<!-- WIDGET END -->
		
				<!-- NEW WIDGET START -->
				<article class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		
		
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-editbutton="false">
						<header>
							<span class="widget-icon"> <i class="fa fa-table"></i> </span>
							<h2>Classes List </h2>
		
						</header>
		
						<!-- widget div-->
						<div>
		
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
		
							</div>
							<!-- end widget edit box -->
		
							<!-- widget content -->
							<div class="widget-body no-padding">
		
								<table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">
			
							        <thead>
										<tr>
											<th class="hasinput" style="width:5%">
												<!-- <input type="text" class="form-control" placeholder="Filter Name" /> -->
											</th>
											<th class="hasinput" style="width:25%">
												<input type="text" class="form-control" placeholder="Filter Name" />
											</th>
											<th class="hasinput" style="width:20%">
												<div class="input-group">
													<input class="form-control" placeholder="Filter Position" type="text">
													<span class="input-group-addon">
														<span class="onoffswitch">
															<input type="checkbox" name="start_interval" class="onoffswitch-checkbox" id="st3">
															<label class="onoffswitch-label" for="st3"> 
																<span class="onoffswitch-inner" data-swchon-text="YES" data-swchoff-text="NO"></span> 
																<span class="onoffswitch-switch"></span> 
															</label> 
														</span>
													</span>
												</div>
															
														
											</th>
											<th class="hasinput icon-addon">
												<input id="dateselect_filter" type="text" placeholder="Filter Date" class="form-control datepicker" data-dateformat="yy/mm/dd">
												<label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Filter Date"></label>
											</th>
											<th class="hasinput" style="width:7%">
												<!-- <input type="text" class="form-control" placeholder="Filter Age" /> -->
											</th>
										</tr>
							            <tr>
						                    <th>No.</th>
						                    <th data-class="expand">Name</th>
						                    <th>Position</th>
						                    <th data-hide="phone">Office</th>
						                    <th data-hide="phone,tablet">Action</th>
							            </tr>
							        </thead>
		
							        <tbody>
							        	<?php 
							        		$q = mysqli_query($conn, "SELECT * FROM files");
							        		$no = 1;
            								while ($r = mysqli_fetch_array($q)) {
							        	?>
							            <tr>
							                <td><?= $no++; ?></td>
							                <td><?= $r['filename']?></td>
							                <td><?= $r['created']?></td>
							                <td><?= $r['qty']?></td>
							                <td>
							                	<button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-cog fa-lg"></i>
												</button>
												<ul class="dropdown-menu dropdown-menu-xs pull-right">
													<li>
														<a href="files/<?php echo $row['filename']; ?>" target="_blank">View</a>
													</li>
													<li>
														<a href="files/<?php echo $row['filename']; ?>" download>Download</a>
													</li>
													<li class="divider"></li>
													<li class="text-align-center">
														<a href="javascript:void(0);">Cancel</a>
													</li>
												</ul>
							                </td>
							            </tr>
							            <?php } ?>
							        </tbody>
							
								</table>
		
							</div>
							<!-- end widget content -->
		
						</div>
						<!-- end widget div -->
		
					</div>
					<!-- end widget -->
		
				</article>
				<!-- WIDGET END -->
		
			</div>
		
			<!-- end row -->
		
			<!-- end row -->
		
		</section>
		<!-- end widget grid -->

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">
							<img src="img/logo.png" width="150" alt="SmartAdmin">
						</h4>
					</div>
					<div class="modal-body no-padding">

						<form id="login-form" class="smart-form">

							<fieldset>
								<section>
									<div class="row">
										<label class="label col col-2">Username</label>
										<div class="col col-10">
											<label class="input"> <i class="icon-append fa fa-user"></i>
												<input type="email" name="email">
											</label>
										</div>
									</div>
								</section>

								<section>
									<div class="row">
										<label class="label col col-2">Password</label>
										<div class="col col-10">
											<label class="input"> <i class="icon-append fa fa-lock"></i>
												<input type="password" name="password">
											</label>
											<div class="note">
												<a href="javascript:void(0)">Forgot password?</a>
											</div>
										</div>
									</div>
								</section>

								<section>
									<div class="row">
										<div class="col col-2"></div>
										<div class="col col-10">
											<label class="checkbox">
												<input type="checkbox" name="remember" checked="">
												<i></i>Keep me logged in</label>
										</div>
									</div>
								</section>
							</fieldset>
							
							<footer>
								<button type="submit" class="btn btn-primary">
									Sign in
								</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Cancel
								</button>

							</footer>
						</form>						
								

					</div>

				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

	</div>
	<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<?php 
include 'footer.php'; 
?>
</body>

</html>