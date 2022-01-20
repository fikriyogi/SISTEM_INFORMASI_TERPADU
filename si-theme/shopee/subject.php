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
		<!-- end breadcrumb -->

		<!-- You can also add more buttons to the
		ribbon for further usability

		Example below:

		<span class="ribbon-button-alignment pull-right">
		<span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
		<span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
		<span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
		</span> -->

	</div>
	<!-- END RIBBON -->

	<!-- MAIN CONTENT -->
	<div id="content">

		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<h1 class="page-title txt-color-blueDark">
					<i class="fa fa-table fa-fw "></i> Users 
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
							<h2>Add Users </h2>
		
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

								<div class="data-info">
									<h2>Dynamic Dependent Select Box Using Jquery and Ajax in PHP</h2>

									

									<select id="state" name="state" onChange="getCity(this.value);">
									<option selected="selected">Pilih Kabupaten</option>
									</select>

									<select id="city" name="city"  onChange="getDesa(this.value);">
									<option selected="selected">Pilih Kecamatan </option>
									</select>

									<select id="desa" name="desa">
									<option selected="selected">Pilih Desa</option>
									</select>

									<p id="desa" name="desa"></p>

								</div>

								<form action="" method="post" id="contact-form" class="smart-form">
									<!-- <header>Contacts form</header> -->
									
									<fieldset>					
										<!-- <div class="row">
											<section class="col col-6">
												<label class="label">Name</label>
												<label class="input">
													<i class="icon-append fa fa-user"></i>
													<input type="text" name="named" id="named">
												</label>
											</section>
											<section class="col col-6">
												<label class="label">E-mail</label>
												<label class="input">
													<i class="icon-append fa fa-envelope-o"></i>
													<input type="email" name="emaild" id="emaild">
												</label>
											</section>
										</div> -->

										
										<section>
											<label class="label">Name</label>
											<label class="input">
												<select id="country" name="country" class="form-control" onChange="getState(this.value);">
													<option selected="selected">Pilih Provinsi</option>
													<?php
											        		$conn = mysqli_connect('localhost','root','','smart-schools');
													//Get all country data
													$query = mysqli_query($conn,"SELECT * FROM `schools` ");
													   
													if(mysqli_num_rows($query)>0){
													while($countries = mysqli_fetch_array($query)){
													    ?>
													<option value="<?php echo $countries['npsn']; ?>"><?php echo $countries['namaSekolah']; ?></option>
													<?php }}
													else{
													        echo '<option value="">Provinsi not available</option>';
													    } ?>
												</select>

											</label>
										</section>

										<section>
											<label class="label">Name</label>
											<label class="input"> <i class="icon-prepend fa fa-user"></i>
												<input type="text" name="fname" placeholder="First name">
											</label>
										</section>

										<section>
											<label class="label">Name</label>
											<label class="input"> <i class="icon-prepend fa fa-user"></i>
												<input type="text" name="lname" placeholder="Last name">
											</label>
										</section>
										
										<section>
											<label class="label">E-mail</label>
											<label class="input">
												<i class="icon-append fa fa-envelope-o"></i>
												<input type="email" name="emaild" id="emaild">
											</label>
										</section>
										
										<section>
											<label class="label">Subject</label>
											<label class="input">
												<i class="icon-append fa fa-tag"></i>
												<input type="text" name="subject" id="subject">
											</label>
										</section>
										
										<section>
											<label class="label">Message</label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="message" id="message"></textarea>
											</label>
										</section>
										
										<section>
											<label class="checkbox"><input type="checkbox" name="copy" id="copy"><i></i>Send a copy to my e-mail address</label>
										</section>
									</fieldset>
									
									<footer>
										<button type="submit" class="btn btn-primary">Validate Form</button>
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
							<h2>Users List </h2>
		
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
											<th class="hasinput" style="width:16%">
												<input type="text" class="form-control" placeholder="Filter Office" />
											</th>
											<th class="hasinput" style="width:17%">
												<input type="text" class="form-control" placeholder="Filter Age" />
											</th>
											<th class="hasinput icon-addon">
												<input id="dateselect_filter" type="text" placeholder="Filter Date" class="form-control datepicker" data-dateformat="yy/mm/dd">
												<label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Filter Date"></label>
											</th>
										</tr>
							            <tr>
						                    <th data-class="expand">Name</th>
						                    <th>Position</th>
						                    <th data-hide="phone">Office</th>
						                    <th data-hide="phone">Age</th>
						                    <th data-hide="phone,tablet">Start date</th>
							            </tr>
							        </thead>
		
							        <tbody>
							        	<?php 
							        		$conn = mysqli_connect('localhost','root','','smart-schools');
							        		$q = mysqli_query($conn, "SELECT * FROM subject, schools WHERE subject.npsn=schools.npsn");
            								while ($r = mysqli_fetch_array($q)) {
							        	?>
							            <tr>
							                <td><?= $r['name']?></td>
							                <td><?= $r['namaSekolah']?></td>
							                <td><?= $r['tempatLahir'] . ', ' . $r['tglLahir']?></td>
							                <td><?= $r['kec']?></td>
							                <td>2014/12/12</td>
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

<!-- PAGE FOOTER -->
<?php include 'footer.php'; ?>

</body>

</html>