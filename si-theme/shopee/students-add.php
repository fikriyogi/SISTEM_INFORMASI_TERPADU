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
		
								<form id="form1" action="http://localhost/smart_school_src/student/create" name="employeeform" method="post" accept-charset="utf-8" enctype="multipart/form-data">
								    <div class="">
								        <div class="bozero">
								            <h4 class="pagetitleh-whitebg">Student Admission </h4>
								            <div class="around10">
								                <input type="hidden" name="ci_csrf_token" value=""> <input type="hidden" name="sibling_name" value="" id="sibling_name_next">
								                <input type="hidden" name="sibling_id" value="0" id="sibling_id">
								                <div class="row">
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Roll Number</label>
								                            <input id="roll_no" name="roll_no" placeholder="" type="text" class="form-control" value="" autocomplete="off">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Class</label><small class="req"> *</small>
								                            <select id="class_id" name="class_id" class="form-control">
								                                                    <option value="">Select</option>
								                                                                                                            <option value="3">Kelas 1</option>
								                                                                                                        </select>
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3">

								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Section</label><small class="req"> *</small>
								                            <select id="section_id" name="section_id" class="form-control">
								                                                    <option value="">Select</option>
								                                                </select>
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>

								                </div>
								                <div class="row">

								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">First Name</label><small class="req"> *</small>
								                            <input id="firstname" name="firstname" placeholder="" type="text" class="form-control" value="">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Last Name</label>
								                            <input id="lastname" name="lastname" placeholder="" type="text" class="form-control" value="">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputFile"> Gender</label><small class="req"> *</small>
								                            <select class="form-control" name="gender">
								                                                    <option value="">Select</option>
								                                                                                                            <option value="Male">Male</option>
								                                                                                                                <option value="Female">Female</option>
								                                                                                                        </select>
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Date of Birth</label><small class="req"> *</small>
								                            <input id="dob" name="dob" placeholder="" type="text" class="form-control date" value="">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                </div>
								                <div class="row">
								                    <div class="col-md-2">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Category</label>
								                            <select id="category_id" name="category_id" class="form-control">
								                                                    <option value="">Select</option>
								                                                                                                    </select>
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-2">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Religion</label>
								                            <input id="religion" name="religion" placeholder="" type="text" class="form-control" value="">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-2">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Caste</label>
								                            <input id="cast" name="cast" placeholder="" type="text" class="form-control" value="">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Mobile Number</label>
								                            <input id="mobileno" name="mobileno" placeholder="" type="text" class="form-control" value="">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Email</label>
								                            <input id="email" name="email" placeholder="" type="text" class="form-control" value="">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                </div>
								                <div class="row">
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Admission Date</label>
								                            <input id="admission_date" name="admission_date" placeholder="" type="text" class="form-control date" value="30-07-2020" readonly="readonly">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputFile">Student Photo</label>
								                            <div>
								                                <div class="dropify-wrapper">
								                                    <div class="dropify-message">
								                                        <p><i class="fa fa-cloud-upload dropi18"></i>Drag and drop a file here or click</p>
								                                        <p class="dropify-error">Ooops, something wrong appended.</p>
								                                    </div>
								                                    <div class="dropify-loader"></div>
								                                    <div class="dropify-errors-container">
								                                        <ul></ul>
								                                    </div><input class="filestyle form-control" type="file" name="file" id="file" size="20"><button type="button" class="dropify-clear">Remove</button>
								                                    <div class="dropify-preview"><span class="dropify-render"></span>
								                                        <div class="dropify-infos">
								                                            <div class="dropify-infos-inner">
								                                                <p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>
								                                                <p class="dropify-infos-message">Drag and drop or click to replace</p>
								                                            </div>
								                                        </div>
								                                    </div>
								                                </div>
								                            </div>
								                            <span class="text-danger"></span></div>
								                    </div>
								                    <div class="col-md-3 col-xs-12">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Blood Group</label>
								                            <select class="form-control" rows="3" placeholder="" name="blood_group" autocomplete="off">
								                                                                <option value="">Select</option>
								                                                                                                                         <option value="O+">O+</option>

								                                                                                                                        <option value="A+">A+</option>

								                                                                                                                        <option value="B+">B+</option>

								                                                                                                                        <option value="AB+">AB+</option>

								                                                                                                                        <option value="O-">O-</option>

								                                                                                                                        <option value="A-">A-</option>

								                                                                                                                        <option value="B-">B-</option>

								                                                                                                                        <option value="AB-">AB-</option>

								                                                                                                                           </select>

								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3 col-xs-12">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Student House</label>
								                            <select class="form-control" rows="3" placeholder="" name="house">
								                                                                <option value="">Select</option>
								                                                                                                                            </select>
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>



								                    <div class="col-md-3 col-xs-12">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Height</label>
								                            <input type="text" name="height" class="form-control" value="">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3 col-xs-12">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Weight</label>
								                            <input type="text" name="weight" class="form-control" value="">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3 col-xs-12">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">As on Date</label>
								                            <input type="text" id="measure_date" value="30-07-2020" name="measure_date" class="form-control date">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3" style="display:none;">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Fees Discount</label>
								                            <input id="fees_discount" name="fees_discount" placeholder="" type="text" class="form-control" value="0">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>

								                    <div class="col-md-3 pt25">
								                        <div class="row">
								                            <div class="col-md-6">
								                                <button type="button" class="btn btn-sm mysiblings anchorbtn "><i class="fa fa-plus"></i> Add Sibling</button>
								                            </div>
								                            <div class="col-md-6">
								                                <div id="sibling_id" class="pt6"> <span id="sibling_name" class="label label-success "></span></div>
								                            </div>
								                        </div>
								                    </div>

								                </div>
								                <div class="row">
								                </div>

								            </div>
								        </div>
								        <div class="bozero">
								            <h4 class="pagetitleh2">Parent Guardian Detail</h4>
								            <div class="around10">
								                <div class="row">
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Father Name</label>
								                            <input id="father_name" name="father_name" placeholder="" type="text" class="form-control" value="">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Father Phone</label>
								                            <input id="father_phone" name="father_phone" placeholder="" type="text" class="form-control" value="">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Father Occupation</label>
								                            <input id="father_occupation" name="father_occupation" placeholder="" type="text" class="form-control" value="">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputFile">Father Photo</label>
								                            <div>
								                                <div class="dropify-wrapper">
								                                    <div class="dropify-message">
								                                        <p><i class="fa fa-cloud-upload dropi18"></i>Drag and drop a file here or click</p>
								                                        <p class="dropify-error">Ooops, something wrong appended.</p>
								                                    </div>
								                                    <div class="dropify-loader"></div>
								                                    <div class="dropify-errors-container">
								                                        <ul></ul>
								                                    </div><input class="filestyle form-control" type="file" name="father_pic" id="file" size="20"><button type="button" class="dropify-clear">Remove</button>
								                                    <div class="dropify-preview"><span class="dropify-render"></span>
								                                        <div class="dropify-infos">
								                                            <div class="dropify-infos-inner">
								                                                <p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>
								                                                <p class="dropify-infos-message">Drag and drop or click to replace</p>
								                                            </div>
								                                        </div>
								                                    </div>
								                                </div>
								                            </div>
								                            <span class="text-danger"></span></div>
								                    </div>
								                </div>
								                <div class="row">
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Mother Name</label>
								                            <input id="mother_name" name="mother_name" placeholder="" type="text" class="form-control" value="">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Mother Phone</label>
								                            <input id="mother_phone" name="mother_phone" placeholder="" type="text" class="form-control" value="">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Mother Occupation</label>
								                            <input id="mother_occupation" name="mother_occupation" placeholder="" type="text" class="form-control" value="">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputFile">Mother Photo</label>
								                            <div>
								                                <div class="dropify-wrapper">
								                                    <div class="dropify-message">
								                                        <p><i class="fa fa-cloud-upload dropi18"></i>Drag and drop a file here or click</p>
								                                        <p class="dropify-error">Ooops, something wrong appended.</p>
								                                    </div>
								                                    <div class="dropify-loader"></div>
								                                    <div class="dropify-errors-container">
								                                        <ul></ul>
								                                    </div><input class="filestyle form-control" type="file" name="mother_pic" id="file" size="20"><button type="button" class="dropify-clear">Remove</button>
								                                    <div class="dropify-preview"><span class="dropify-render"></span>
								                                        <div class="dropify-infos">
								                                            <div class="dropify-infos-inner">
								                                                <p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>
								                                                <p class="dropify-infos-message">Drag and drop or click to replace</p>
								                                            </div>
								                                        </div>
								                                    </div>
								                                </div>
								                            </div>
								                            <span class="text-danger"></span></div>
								                    </div>
								                </div>
								                <div class="row">
								                    <div class="form-group col-md-12">
								                        <label>If Guardian Is<small class="req"> *</small>&nbsp;&nbsp;&nbsp;</label>
								                        <label class="radio-inline">
								                                                <input type="radio" name="guardian_is" value="father"> Father                                            </label>
								                        <label class="radio-inline">
								                                                <input type="radio" name="guardian_is" value="mother"> Mother                                            </label>
								                        <label class="radio-inline">
								                                                <input type="radio" name="guardian_is" value="other"> Other                                            </label>
								                        <span class="text-danger"></span>
								                    </div>
								                </div>
								                <div class="row">
								                    <div class="col-md-6">
								                        <div class="row">
								                            <div class="col-md-6">
								                                <div class="form-group">
								                                    <label for="exampleInputEmail1">Guardian Name</label><small class="req"> *</small>
								                                    <input id="guardian_name" name="guardian_name" placeholder="" type="text" class="form-control" value="">
								                                    <span class="text-danger"></span>
								                                </div>
								                            </div>
								                            <div class="col-md-6">
								                                <div class="form-group">
								                                    <label for="exampleInputEmail1">Guardian Relation</label>
								                                    <input id="guardian_relation" name="guardian_relation" placeholder="" type="text" class="form-control" value="">
								                                    <span class="text-danger"></span>
								                                </div>
								                            </div>
								                        </div>
								                        <div class="row">
								                            <div class="col-md-6">
								                                <div class="form-group">
								                                    <label for="exampleInputEmail1">Guardian Phone</label><small class="req"> *</small>
								                                    <input id="guardian_phone" name="guardian_phone" placeholder="" type="text" class="form-control" value="">
								                                    <span class="text-danger"></span>
								                                </div>
								                            </div>
								                            <div class="col-md-6">
								                                <div class="form-group">
								                                    <label for="exampleInputEmail1">Guardian Occupation</label>
								                                    <input id="guardian_occupation" name="guardian_occupation" placeholder="" type="text" class="form-control" value="">
								                                    <span class="text-danger"></span>
								                                </div>
								                            </div>
								                        </div>
								                    </div>
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputEmail1">Guardian Email</label>
								                            <input id="guardian_email" name="guardian_email" placeholder="" type="text" class="form-control" value="">
								                            <span class="text-danger"></span>
								                        </div>
								                    </div>
								                    <div class="col-md-3">
								                        <div class="form-group">
								                            <label for="exampleInputFile">Guardian Photo</label>
								                            <div>
								                                <div class="dropify-wrapper">
								                                    <div class="dropify-message">
								                                        <p><i class="fa fa-cloud-upload dropi18"></i>Drag and drop a file here or click</p>
								                                        <p class="dropify-error">Ooops, something wrong appended.</p>
								                                    </div>
								                                    <div class="dropify-loader"></div>
								                                    <div class="dropify-errors-container">
								                                        <ul></ul>
								                                    </div><input class="filestyle form-control" type="file" name="guardian_pic" id="file" size="20"><button type="button" class="dropify-clear">Remove</button>
								                                    <div class="dropify-preview"><span class="dropify-render"></span>
								                                        <div class="dropify-infos">
								                                            <div class="dropify-infos-inner">
								                                                <p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>
								                                                <p class="dropify-infos-message">Drag and drop or click to replace</p>
								                                            </div>
								                                        </div>
								                                    </div>
								                                </div>
								                            </div>
								                            <span class="text-danger"></span></div>
								                    </div>
								                    <div class="col-md-6">
								                        <label for="exampleInputEmail1">Guardian Address</label>
								                        <textarea id="guardian_address" name="guardian_address" placeholder="" class="form-control" rows="2"></textarea>
								                        <span class="text-danger"></span>
								                    </div>
								                </div>
								            </div>
								        </div>


								        <div class="box-group collapsed-box">
								            <div class="panel box collapsed-box border0 mb0">
								                <div class="addmoredetail-title">

								                    <a data-widget="collapse" data-original-title="Collapse" class="collapsed btn boxplus">
								                                                <i class="fa fa-fw fa-plus"></i>Add More Details                                            </a>

								                </div>
								                <div class="box-body">
								                    <div class="mb25 bozero">
								                        <h4 class="pagetitleh2">Student Address Details</h4>

								                        <div class="row around10">
								                            <div class="col-md-6">
								                                <div class="checkbox">
								                                    <label>
								                                                                <input type="checkbox" id="autofill_current_address" onclick="return auto_fill_guardian_address();">
								                                                                If Guardian Address is Current Address                                                            </label>
								                                </div>
								                                <div class="form-group">
								                                    <label for="exampleInputEmail1">Current Address</label>
								                                    <textarea id="current_address" name="current_address" placeholder="" class="form-control"></textarea>
								                                    <span class="text-danger"></span>
								                                </div>
								                            </div>
								                            <div class="col-md-6">
								                                <div class="checkbox">
								                                    <label>
								                                                                <input type="checkbox" id="autofill_address" onclick="return auto_fill_address();">
								                                                                If Permanent Address is Current Address                                                            </label>
								                                </div>
								                                <div class="form-group">
								                                    <label for="exampleInputEmail1">Permanent Address</label>
								                                    <textarea id="permanent_address" name="permanent_address" placeholder="" class="form-control"></textarea>
								                                    <span class="text-danger"></span>
								                                </div>
								                            </div>
								                        </div>

								                    </div>
								                    <div class="tshadow mb25 bozero">
								                        <h4 class="pagetitleh2">
								                            Transport Details </h4>

								                        <div class="row around10">
								                            <div class="col-md-6">
								                                <div class="form-group">
								                                    <label for="exampleInputEmail1">Route List</label>
								                                    <select class="form-control" id="vehroute_id" name="vehroute_id">

								                                                                <option value="">Select</option>
								                                                                                                                            </select>
								                                    <span class="text-danger"></span>
								                                </div>
								                            </div>

								                        </div>
								                    </div>
								                    <div class="tshadow mb25 bozero">
								                        <h4 class="pagetitleh2">
								                            Hostel Details
								                        </h4>

								                        <div class="row around10">
								                            <div class="col-md-6">
								                                <div class="form-group">
								                                    <label for="exampleInputEmail1">Hostel</label>

								                                    <select class="form-control" id="hostel_id" name="hostel_id">

								                                                                <option value="">Select</option>
								                                                                                                                            </select>
								                                    <span class="text-danger"></span>
								                                </div>
								                            </div>
								                            <div class="col-md-6">
								                                <div class="form-group">
								                                    <label for="exampleInputEmail1">Room Number</label>
								                                    <select id="hostel_room_id" name="hostel_room_id" class="form-control">
								                                                    <option value="">Select</option>
								                                                         </select>
								                                    <span class="text-danger"></span>
								                                </div>
								                            </div>


								                        </div>
								                    </div>
								                    <div class="tshadow mb25 bozero">
								                        <h4 class="pagetitleh2">Miscellaneous Details </h4>
								                        <div class="row around10">
								                            <div class="col-md-4">
								                                <div class="form-group">
								                                    <label for="exampleInputEmail1">Bank Account Number</label>
								                                    <input id="bank_account_no" name="bank_account_no" placeholder="" type="text" class="form-control" value="">
								                                    <span class="text-danger"></span>
								                                </div>
								                            </div>
								                            <div class="col-md-4">
								                                <div class="form-group">
								                                    <label for="exampleInputEmail1">Bank Name</label>
								                                    <input id="bank_name" name="bank_name" placeholder="" type="text" class="form-control" value="">
								                                    <span class="text-danger"></span>
								                                </div>
								                            </div>
								                            <div class="col-md-4">
								                                <div class="form-group">
								                                    <label for="exampleInputEmail1">IFSC Code</label>
								                                    <input id="ifsc_code" name="ifsc_code" placeholder="" type="text" class="form-control" value="">
								                                    <span class="text-danger"></span>
								                                </div>
								                            </div>
								                        </div>
								                        <div class="row around10">
								                            <div class="col-md-4">
								                                <div class="form-group">
								                                    <label for="exampleInputEmail1">
								                                                                National Identification Number                                                            </label>
								                                    <input id="adhar_no" name="adhar_no" placeholder="" type="text" class="form-control" value="">
								                                    <span class="text-danger"></span>
								                                </div>
								                            </div>
								                            <div class="col-md-4">
								                                <div class="form-group">
								                                    <label for="exampleInputEmail1">
								                                                                Local Identification Number                                                            </label>
								                                    <input id="samagra_id" name="samagra_id" placeholder="" type="text" class="form-control" value="">
								                                    <span class="text-danger"></span>
								                                </div>
								                            </div>
								                            <div class="col-md-4">
								                                <label>RTE</label>
								                                <div class="radio" style="margin-top: 2px;">
								                                    <label><input class="radio-inline" type="radio" name="rte" value="Yes">Yes</label>
								                                    <label><input class="radio-inline" checked="checked" type="radio" name="rte" value="No">No</label>
								                                </div>
								                                <span class="text-danger"></span>
								                            </div>
								                            <div class="col-md-6">
								                                <div class="form-group">
								                                    <label for="exampleInputEmail1">Previous School Details</label>
								                                    <textarea class="form-control" rows="3" placeholder="" name="previous_school"></textarea>
								                                    <span class="text-danger"></span>
								                                </div>
								                            </div>
								                            <div class="col-md-6">
								                                <div class="form-group">
								                                    <label for="exampleInputEmail1">Note</label>
								                                    <textarea class="form-control" rows="3" placeholder="" name="note"></textarea>
								                                    <span class="text-danger"></span>
								                                </div>
								                            </div>


								                        </div>
								                    </div>
								                    <div id="upload_documents_hide_show">
								                        <div class="row">
								                            <div class="col-md-12">
								                                <div class="tshadow bozero">
								                                    <h4 class="pagetitleh2">Upload Documents</h4>

								                                    <div class="row around10">
								                                        <div class="col-md-6">
								                                            <table class="table">
								                                                <tbody>
								                                                    <tr>
								                                                        <th style="width: 10px">#</th>
								                                                        <th>Title</th>
								                                                        <th>Documents</th>
								                                                    </tr>
								                                                    <tr>
								                                                        <td>1.</td>
								                                                        <td><input type="text" name="first_title" class="form-control" placeholder=""></td>
								                                                        <td>
								                                                            <div class="dropify-wrapper">
								                                                                <div class="dropify-message">
								                                                                    <p><i class="fa fa-cloud-upload dropi18"></i>Drag and drop a file here or click</p>
								                                                                    <p class="dropify-error">Ooops, something wrong appended.</p>
								                                                                </div>
								                                                                <div class="dropify-loader"></div>
								                                                                <div class="dropify-errors-container">
								                                                                    <ul></ul>
								                                                                </div><input class="filestyle form-control" type="file" name="first_doc" id="doc1"><button type="button" class="dropify-clear">Remove</button>
								                                                                <div class="dropify-preview"><span class="dropify-render"></span>
								                                                                    <div class="dropify-infos">
								                                                                        <div class="dropify-infos-inner">
								                                                                            <p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>
								                                                                            <p class="dropify-infos-message">Drag and drop or click to replace</p>
								                                                                        </div>
								                                                                    </div>
								                                                                </div>
								                                                            </div>
								                                                        </td>
								                                                    </tr>
								                                                    <tr>
								                                                        <td>2.</td>
								                                                        <td><input type="text" name="second_title" class="form-control" placeholder=""></td>
								                                                        <td>
								                                                            <div class="dropify-wrapper">
								                                                                <div class="dropify-message">
								                                                                    <p><i class="fa fa-cloud-upload dropi18"></i>Drag and drop a file here or click</p>
								                                                                    <p class="dropify-error">Ooops, something wrong appended.</p>
								                                                                </div>
								                                                                <div class="dropify-loader"></div>
								                                                                <div class="dropify-errors-container">
								                                                                    <ul></ul>
								                                                                </div><input class="filestyle form-control" type="file" name="second_doc" id="doc1"><button type="button" class="dropify-clear">Remove</button>
								                                                                <div class="dropify-preview"><span class="dropify-render"></span>
								                                                                    <div class="dropify-infos">
								                                                                        <div class="dropify-infos-inner">
								                                                                            <p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>
								                                                                            <p class="dropify-infos-message">Drag and drop or click to replace</p>
								                                                                        </div>
								                                                                    </div>
								                                                                </div>
								                                                            </div>
								                                                        </td>
								                                                    </tr>

								                                                </tbody>
								                                            </table>
								                                        </div>
								                                        <div class="col-md-6">
								                                            <table class="table">
								                                                <tbody>
								                                                    <tr>
								                                                        <th style="width: 10px">#</th>
								                                                        <th>Title</th>
								                                                        <th>Documents</th>
								                                                    </tr>
								                                                    <tr>
								                                                        <td>3.</td>
								                                                        <td><input type="text" name="fourth_title" class="form-control" placeholder=""></td>
								                                                        <td>
								                                                            <div class="dropify-wrapper">
								                                                                <div class="dropify-message">
								                                                                    <p><i class="fa fa-cloud-upload dropi18"></i>Drag and drop a file here or click</p>
								                                                                    <p class="dropify-error">Ooops, something wrong appended.</p>
								                                                                </div>
								                                                                <div class="dropify-loader"></div>
								                                                                <div class="dropify-errors-container">
								                                                                    <ul></ul>
								                                                                </div><input class="filestyle form-control" type="file" name="fourth_doc" id="doc1"><button type="button" class="dropify-clear">Remove</button>
								                                                                <div class="dropify-preview"><span class="dropify-render"></span>
								                                                                    <div class="dropify-infos">
								                                                                        <div class="dropify-infos-inner">
								                                                                            <p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>
								                                                                            <p class="dropify-infos-message">Drag and drop or click to replace</p>
								                                                                        </div>
								                                                                    </div>
								                                                                </div>
								                                                            </div>
								                                                        </td>
								                                                    </tr>
								                                                    <tr>
								                                                        <td>4.</td>
								                                                        <td><input type="text" name="fifth_title" class="form-control" placeholder=""></td>
								                                                        <td>
								                                                            <div class="dropify-wrapper">
								                                                                <div class="dropify-message">
								                                                                    <p><i class="fa fa-cloud-upload dropi18"></i>Drag and drop a file here or click</p>
								                                                                    <p class="dropify-error">Ooops, something wrong appended.</p>
								                                                                </div>
								                                                                <div class="dropify-loader"></div>
								                                                                <div class="dropify-errors-container">
								                                                                    <ul></ul>
								                                                                </div><input class="filestyle form-control" type="file" name="fifth_doc" id="doc1"><button type="button" class="dropify-clear">Remove</button>
								                                                                <div class="dropify-preview"><span class="dropify-render"></span>
								                                                                    <div class="dropify-infos">
								                                                                        <div class="dropify-infos-inner">
								                                                                            <p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>
								                                                                            <p class="dropify-infos-message">Drag and drop or click to replace</p>
								                                                                        </div>
								                                                                    </div>
								                                                                </div>
								                                                            </div>
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
								                </div>
								            </div>
								        </div>
								        <div class="box-footer">
								            <button type="submit" class="btn btn-info pull-right">Save</button>
								        </div>

								    </div>
								</form>
		

		
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