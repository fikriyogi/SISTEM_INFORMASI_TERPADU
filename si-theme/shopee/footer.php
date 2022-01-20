		<!-- PAGE FOOTER -->
		<div class="page-footer">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<span class="txt-color-white">SmartAdmin 1.9.0 <span class="hidden-xs"> - Web Application Framework</span> © 2017-2019</span>
				</div>

				<div class="col-xs-6 col-sm-6 text-right hidden-xs">
					<div class="txt-color-white inline-block">
						<i class="txt-color-blueLight hidden-mobile">Last account activity <i class="fa fa-clock-o"></i> <strong>52 mins ago &nbsp;</strong> </i>
						<div class="btn-group dropup">
							<button class="btn btn-xs dropdown-toggle bg-color-blue txt-color-white" data-toggle="dropdown">
								<i class="fa fa-link"></i> <span class="caret"></span>
							</button>
							<ul class="dropdown-menu pull-right text-left">
								<li>
									<div class="padding-5">
										<p class="txt-color-darken font-sm no-margin">Download Progress</p>
										<div class="progress progress-micro no-margin">
											<div class="progress-bar progress-bar-success" style="width: 50%;"></div>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="padding-5">
										<p class="txt-color-darken font-sm no-margin">Server Load</p>
										<div class="progress progress-micro no-margin">
											<div class="progress-bar progress-bar-success" style="width: 20%;"></div>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="padding-5">
										<p class="txt-color-darken font-sm no-margin">Memory Load <span class="text-danger">*critical*</span></p>
										<div class="progress progress-micro no-margin">
											<div class="progress-bar progress-bar-danger" style="width: 70%;"></div>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="padding-5">
										<button class="btn btn-block btn-default">refresh</button>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE FOOTER -->

		<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
		Note: These tiles are completely responsive,
		you can add as many as you like
		-->
		<div id="shortcut">
			<ul>
				<li>
					<a href="inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
				</li>
				<li>
					<a href="calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
				</li>
				<li>
					<a href="gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
				</li>
				<li>
					<a href="invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
				</li>
				<li>
					<a href="gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
				</li>
				<li>
					<a href="profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
				</li>
			</ul>
		</div>
		<!-- END SHORTCUT AREA -->

		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="js/jquery.min.js"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="js/libs/jquery-3.2.1.min.js"><\/script>');
			}
		</script>

		<script src="js/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="js/libs/jquery-ui.min.js"><\/script>');
			}
		</script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="js/app.config.js"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
		<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 

		<!-- BOOTSTRAP JS -->
		<script src="js/bootstrap/bootstrap.min.js"></script>

		<!-- CUSTOM NOTIFICATION -->
		<script src="js/notification/SmartNotification.min.js"></script>

		<!-- JARVIS WIDGETS -->
		<script src="js/smartwidgets/jarvis.widget.min.js"></script>

		<!-- EASY PIE CHARTS -->
		<script src="js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

		<!-- SPARKLINES -->
		<script src="js/plugin/sparkline/jquery.sparkline.min.js"></script>

		<!-- JQUERY VALIDATE -->
		<script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>

		<!-- JQUERY SELECT2 INPUT -->
		<script src="js/plugin/select2/select2.min.js"></script>

		<!-- JQUERY UI + Bootstrap Slider -->
		<script src="js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

		<!-- browser msie issue fix -->
		<script src="js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

		<!-- FastClick: For mobile devices -->
		<script src="js/plugin/fastclick/fastclick.min.js"></script>

		<!--[if IE 8]>

		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->

		<!-- Demo purpose only -->
		<script src="js/demo.min.js"></script>

		<!-- MAIN APP JS FILE -->
		<script src="js/app.min.js"></script>

		<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
		<!-- Voice command : plugin -->
		<script src="js/speech/voicecommand.min.js"></script>

		<!-- SmartChat UI : plugin -->
		<script src="js/smart-chat-ui/smart.chat.ui.min.js"></script>
		<script src="js/smart-chat-ui/smart.chat.manager.min.js"></script>

		<!-- PAGE RELATED PLUGIN(S) -->
		<script src="js/plugin/datatables/jquery.dataTables.min.js"></script>
		<script src="js/plugin/datatables/dataTables.colVis.min.js"></script>
		<script src="js/plugin/datatables/dataTables.tableTools.min.js"></script>
		<script src="js/plugin/datatables/dataTables.bootstrap.min.js"></script>
		<script src="js/plugin/datatable-responsive/datatables.responsive.min.js"></script>

		<script>
		
		// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
		$(document).ready(function() {
			
			pageSetUp();
			
			/* // DOM Position key index //
		
			l - Length changing (dropdown)
			f - Filtering input (search)
			t - The Table! (datatable)
			i - Information (records)
			p - Pagination (paging)
			r - pRocessing 
			< and > - div elements
			<"#id" and > - div with an id
			<"class" and > - div with a class
			<"#id.class" and > - div with an id and class
			
			Also see: http://legacy.datatables.net/usage/features
			*/	
	
			/* BASIC ;*/
				var responsiveHelper_dt_basic = undefined;
				var responsiveHelper_datatable_fixed_column = undefined;
				var responsiveHelper_datatable_col_reorder = undefined;
				var responsiveHelper_datatable_tabletools = undefined;
				
				var breakpointDefinition = {
					tablet : 1024,
					phone : 480
				};
	
				$('#dt_basic').dataTable({
					"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
					"autoWidth" : true,
			        "oLanguage": {
					    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
					},
					"preDrawCallback" : function() {
						// Initialize the responsive datatables helper once.
						if (!responsiveHelper_dt_basic) {
							responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
						}
					},
					"rowCallback" : function(nRow) {
						responsiveHelper_dt_basic.createExpandIcon(nRow);
					},
					"drawCallback" : function(oSettings) {
						responsiveHelper_dt_basic.respond();
					}
				});
	
			/* END BASIC */
			
			/* COLUMN FILTER  */
		    var otable = $('#datatable_fixed_column').DataTable({
		    	//"bFilter": false,
		    	//"bInfo": false,
		    	//"bLengthChange": false
		    	//"bAutoWidth": false,
		    	//"bPaginate": false,
		    	//"bStateSave": true // saves sort state using localStorage
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
				"autoWidth" : true,
				"oLanguage": {
					"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
				},
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_datatable_fixed_column) {
						responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_datatable_fixed_column.respond();
				}		
			
		    });
		    
		    // custom toolbar
		    $("div.toolbar").html('<div class="text-right"><img src="img/logo.png" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');
		    	   
		    // Apply the filter
		    $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {
		    	
		        otable
		            .column( $(this).parent().index()+':visible' )
		            .search( this.value )
		            .draw();
		            
		    } );
		    /* END COLUMN FILTER */   
	    
			/* COLUMN SHOW - HIDE */
			$('#datatable_col_reorder').dataTable({
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
				"autoWidth" : true,
				"oLanguage": {
					"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
				},
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_datatable_col_reorder) {
						responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper($('#datatable_col_reorder'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_datatable_col_reorder.respond();
				}			
			});
			
			/* END COLUMN SHOW - HIDE */
	
			/* TABLETOOLS */
			$('#datatable_tabletools').dataTable({
				
				// Tabletools options: 
				//   https://datatables.net/extensions/tabletools/button_options
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'T>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
				"oLanguage": {
					"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
				},		
		        "oTableTools": {
		        	 "aButtons": [
		             "copy",
		             "csv",
		             "xls",
		                {
		                    "sExtends": "pdf",
		                    "sTitle": "SmartAdmin_PDF",
		                    "sPdfMessage": "SmartAdmin PDF Export",
		                    "sPdfSize": "letter"
		                },
		             	{
	                    	"sExtends": "print",
	                    	"sMessage": "Generated by SmartAdmin <i>(press Esc to close)</i>"
	                	}
		             ],
		            "sSwfPath": "js/plugin/datatables/swf/copy_csv_xls_pdf.swf"
		        },
				"autoWidth" : true,
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_datatable_tabletools) {
						responsiveHelper_datatable_tabletools = new ResponsiveDatatablesHelper($('#datatable_tabletools'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_datatable_tabletools.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_datatable_tabletools.respond();
				}
			});
			
			/* END TABLETOOLS */
		
		})

		</script>

		<!-- PAGE RELATED PLUGIN(S) -->
				<script src="js/plugin/jquery-form/jquery-form.min.js"></script>
				

				<script>
				
				// DO NOT REMOVE : GLOBAL FUNCTIONS!
				
				$(document).ready(function() {
					
					pageSetUp();
					var errorClass = 'invalid';
					var errorElement = 'em';
					
					var $checkoutForm = $('#checkout-form').validate({
						errorClass		: errorClass,
						errorElement	: errorElement,
						highlight: function(element) {
					        $(element).parent().removeClass('state-success').addClass("state-error");
					        $(element).removeClass('valid');
					    },
					    unhighlight: function(element) {
					        $(element).parent().removeClass("state-error").addClass('state-success');
					        $(element).addClass('valid');
					    },

					// Rules for form validation
						rules : {
							fname : {
								required : true
							},
							lname : {
								required : true
							},
							email : {
								required : true,
								email : true
							},
							phone : {
								required : true
							},
							country : {
								required : true
							},
							city : {
								required : true
							},
							code : {
								required : true,
								digits : true
							},
							address : {
								required : true
							},
							name : {
								required : true
							},
							card : {
								required : true,
								creditcard : true
							},
							cvv : {
								required : true,
								digits : true
							},
							month : {
								required : true
							},
							year : {
								required : true,
								digits : true
							}
						},
				
						// Messages for form validation
						messages : {
							fname : {
								required : 'Please enter your first name'
							},
							lname : {
								required : 'Please enter your last name'
							},
							email : {
								required : 'Please enter your email address',
								email : 'Please enter a VALID email address'
							},
							phone : {
								required : 'Please enter your phone number'
							},
							country : {
								required : 'Please select your country'
							},
							city : {
								required : 'Please enter your city'
							},
							code : {
								required : 'Please enter code',
								digits : 'Digits only please'
							},
							address : {
								required : 'Please enter your full address'
							},
							name : {
								required : 'Please enter name on your card'
							},
							card : {
								required : 'Please enter your card number'
							},
							cvv : {
								required : 'Enter CVV2',
								digits : 'Digits only'
							},
							month : {
								required : 'Select month'
							},
							year : {
								required : 'Enter year',
								digits : 'Digits only please'
							}
						},
				
						// Do not change code below
						errorPlacement : function(error, element) {
							error.insertAfter(element.parent());
						}
					});
							
					var $registerForm = $("#smart-form-register").validate({
						errorClass		: errorClass,
						errorElement	: errorElement,
						highlight: function(element) {
					        $(element).parent().removeClass('state-success').addClass("state-error");
					        $(element).removeClass('valid');
					    },
					    unhighlight: function(element) {
					        $(element).parent().removeClass("state-error").addClass('state-success');
					        $(element).addClass('valid');
					    },
			
						// Rules for form validation
						rules : {
							username : {
								required : true
							},
							email : {
								required : true,
								email : true
							},
							password : {
								required : true,
								minlength : 3,
								maxlength : 20
							},
							passwordConfirm : {
								required : true,
								minlength : 3,
								maxlength : 20,
								equalTo : '#password'
							},
							firstname : {
								required : true
							},
							lastname : {
								required : true
							},
							gender : {
								required : true
							},
							terms : {
								required : true
							}
						},
			
						// Messages for form validation
						messages : {
							login : {
								required : 'Please enter your login'
							},
							email : {
								required : 'Please enter your email address',
								email : 'Please enter a VALID email address'
							},
							password : {
								required : 'Please enter your password'
							},
							passwordConfirm : {
								required : 'Please enter your password one more time',
								equalTo : 'Please enter the same password as above'
							},
							firstname : {
								required : 'Please select your first name'
							},
							lastname : {
								required : 'Please select your last name'
							},
							gender : {
								required : 'Please select your gender'
							},
							terms : {
								required : 'You must agree with Terms and Conditions'
							}
						},
			
						// Do not change code below
						errorPlacement : function(error, element) {
							error.insertAfter(element.parent());
						}
					});
			
					var $reviewForm = $("#review-form").validate({
						errorClass		: errorClass,
						errorElement	: errorElement,
						highlight: function(element) {
					        $(element).parent().removeClass('state-success').addClass("state-error");
					        $(element).removeClass('valid');
					    },
					    unhighlight: function(element) {
					        $(element).parent().removeClass("state-error").addClass('state-success');
					        $(element).addClass('valid');
					    },
						// Rules for form validation
						rules : {
							name : {
								required : true
							},
							email : {
								required : true,
								email : true
							},
							review : {
								required : true,
								minlength : 20
							},
							quality : {
								required : true
							},
							reliability : {
								required : true
							},
							overall : {
								required : true
							}
						},
			
						// Messages for form validation
						messages : {
							name : {
								required : 'Please enter your name'
							},
							email : {
								required : 'Please enter your email address',
								email : '<i class="fa fa-warning"></i><strong>Please enter a VALID email addres</strong>'
							},
							review : {
								required : 'Please enter your review'
							},
							quality : {
								required : 'Please rate quality of the product'
							},
							reliability : {
								required : 'Please rate reliability of the product'
							},
							overall : {
								required : 'Please rate the product'
							}
						},
			
						// Do not change code below
						errorPlacement : function(error, element) {
							error.insertAfter(element.parent());
						}
					});
					
					var $commentForm = $("#comment-form").validate({
						errorClass		: errorClass,
						errorElement	: errorElement,
						highlight: function(element) {
					        $(element).parent().removeClass('state-success').addClass("state-error");
					        $(element).removeClass('valid');
					    },
					    unhighlight: function(element) {
					        $(element).parent().removeClass("state-error").addClass('state-success');
					        $(element).addClass('valid');
					    },
						// Rules for form validation
						rules : {
							name : {
								required : true
							},
							email : {
								required : true,
								email : true
							},
							url : {
								url : true
							},
							comment : {
								required : true
							}
						},
			
						// Messages for form validation
						messages : {
							name : {
								required : 'Enter your name',
							},
							email : {
								required : 'Enter your email address',
								email : 'Enter a VALID email'
							},
							url : {
								email : 'Enter a VALID url'
							},
							comment : {
								required : 'Please enter your comment'
							}
						},
			
						// Ajax form submition
						submitHandler : function(form) {
							$(form).ajaxSubmit({
								success : function() {
									$("#comment-form").addClass('submited');
								}
							});
						},
			
						// Do not change code below
						errorPlacement : function(error, element) {
							error.insertAfter(element.parent());
						}
					});
			
					var $contactForm = $("#contact-form").validate({
						errorClass		: errorClass,
						errorElement	: errorElement,
						highlight: function(element) {
					        $(element).parent().removeClass('state-success').addClass("state-error");
					        $(element).removeClass('valid');
					    },
					    unhighlight: function(element) {
					        $(element).parent().removeClass("state-error").addClass('state-success');
					        $(element).addClass('valid');
					    },
						// Rules for form validation
						rules : {
							name : {
								required : true
							},
							email : {
								required : true,
								email : true
							},
							fname : {
								required : true
							},
							lname : {
								required : true
							},
							email : {
								required : true,
								email : true
							},
							phone : {
								required : true
							},
							country : {
								required : true
							},
							city : {
								required : true
							},
							code : {
								required : true,
								digits : true
							},
							address : {
								required : true
							},
							name : {
								required : true
							},
							card : {
								required : true,
								creditcard : true
							},
							cvv : {
								required : true,
								digits : true
							},
							month : {
								required : true
							},
							message : {
								required : true,
								minlength : 10
							}
						},
			
						// Messages for form validation
						messages : {
							name : {
								required : 'Please enter your name',
							},
							email : {
								required : 'Please enter your email address',
								email : 'Please enter a VALID email address'
							},
							message : {
								required : 'Please enter your message'
							}
						},
			
						// Ajax form submition
						submitHandler : function(form) {
							$(form).ajaxSubmit({
								success : function() {
									$("#contact-form").addClass('submited');
								}
							});
						},
			
						// Do not change code below
						errorPlacement : function(error, element) {
							error.insertAfter(element.parent());
						}
					});
			
					var $loginForm = $("#login-form").validate({
						errorClass		: errorClass,
						errorElement	: errorElement,
						highlight: function(element) {
					        $(element).parent().removeClass('state-success').addClass("state-error");
					        $(element).removeClass('valid');
					    },
					    unhighlight: function(element) {
					        $(element).parent().removeClass("state-error").addClass('state-success');
					        $(element).addClass('valid');
					    },
						// Rules for form validation
						rules : {
							email : {
								required : true,
								email : true
							},
							password : {
								required : true,
								minlength : 3,
								maxlength : 20
							}
						},
			
						// Messages for form validation
						messages : {
							email : {
								required : 'Please enter your email address',
								email : 'Please enter a VALID email address'
							},
							password : {
								required : 'Please enter your password'
							}
						},
			
						// Do not change code below
						errorPlacement : function(error, element) {
							error.insertAfter(element.parent());
						}
					});
			
					var $orderForm = $("#order-form").validate({
						errorClass		: errorClass,
						errorElement	: errorElement,
						highlight: function(element) {
					        $(element).parent().removeClass('state-success').addClass("state-error");
					        $(element).removeClass('valid');
					    },
					    unhighlight: function(element) {
					        $(element).parent().removeClass("state-error").addClass('state-success');
					        $(element).addClass('valid');
					    },
						// Rules for form validation
						rules : {
							name : {
								required : true
							},
							email : {
								required : true,
								email : true
							},
							phone : {
								required : true
							},
							interested : {
								required : true
							},
							budget : {
								required : true
							}
						},
			
						// Messages for form validation
						messages : {
							name : {
								required : 'Please enter your name'
							},
							email : {
								required : 'Please enter your email address',
								email : 'Please enter a VALID email address'
							},
							phone : {
								required : 'Please enter your phone number'
							},
							interested : {
								required : 'Please select interested service'
							},
							budget : {
								required : 'Please select your budget'
							}
						},
			
						// Do not change code below
						errorPlacement : function(error, element) {
							error.insertAfter(element.parent());
						}
					});
			
					// START AND FINISH DATE
					$('#startdate').datepicker({
						dateFormat : 'dd.mm.yy',
						prevText : '<i class="fa fa-chevron-left"></i>',
						nextText : '<i class="fa fa-chevron-right"></i>',
						onSelect : function(selectedDate) {
							$('#finishdate').datepicker('option', 'minDate', selectedDate);
						}
					});
					
					$('#finishdate').datepicker({
						dateFormat : 'dd.mm.yy',
						prevText : '<i class="fa fa-chevron-left"></i>',
						nextText : '<i class="fa fa-chevron-right"></i>',
						onSelect : function(selectedDate) {
							$('#startdate').datepicker('option', 'maxDate', selectedDate);
						}
					});


				
				})

				</script>

