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
					<li>Home</li><li>Inbox</li>
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

				<div class="inbox-nav-bar no-content-padding">
				
					<div class="page-title txt-color-blueDark hidden-tablet h1"><i class="fa fa-fw fa-inbox"></i> Inbox &nbsp;
						<div class="btn-group">
							<a href="#" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle"><span class="caret single"></span></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</div>
					</div>
				
					<div class="btn-group hidden-desktop visible-tablet">
						<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							Inbox <i class="fa fa-caret-down"></i>
						</button>
						<ul class="dropdown-menu pull-left">
							<li>
								<a href="javascript:void(0);" class="inbox-load">Inbox <i class="fa fa-check"></i></a>
							</li>
							<li>
								<a href="javascript:void(0);">Sent</a>
							</li>
							<li>
								<a href="javascript:void(0);">Trash</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="javascript:void(0);">Spam</a>
							</li>
						</ul>
				
					</div>
				
					<div class="inbox-checkbox-triggered">
				
						<div class="btn-group">
							<a href="javascript:void(0);" rel="tooltip" title="" data-placement="bottom" data-original-title="Mark Important" class="btn btn-default"><strong><i class="fa fa-exclamation fa-lg text-danger"></i></strong></a>
							<a href="javascript:void(0);" rel="tooltip" title="" data-placement="bottom" data-original-title="Move to folder" class="btn btn-default"><strong><i class="fa fa-folder-open fa-lg"></i></strong></a>
							<a href="javascript:void(0);" rel="tooltip" title="" data-placement="bottom" data-original-title="Delete" class="deletebutton btn btn-default"><strong><i class="fa fa-trash-o fa-lg"></i></strong></a>
						</div>
				
					</div>
				
					<a href="javascript:void(0);" id="compose-mail-mini" class="btn btn-primary pull-right hidden-desktop visible-tablet"> <strong><i class="fa fa-file fa-lg"></i></strong> </a>
				
					<div class="btn-group pull-right inbox-paging">
						<a href="javascript:void(0);" class="btn btn-default btn-sm"><strong><i class="fa fa-chevron-left"></i></strong></a>
						<a href="javascript:void(0);" class="btn btn-default btn-sm"><strong><i class="fa fa-chevron-right"></i></strong></a>
					</div>
					<span class="pull-right"><strong>1-30</strong> of <strong>3,452</strong></span>
				
				</div>
				
				<div id="inbox-content" class="inbox-body no-content-padding">
				
					<div class="inbox-side-bar">
				
						<a href="javascript:void(0);" id="compose-mail" class="btn btn-primary btn-block"> <strong>Compose</strong> </a>
				
						<h6> Folder <a href="javascript:void(0);" rel="tooltip" title="" data-placement="right" data-original-title="Refresh" class="pull-right txt-color-darken"><i class="fa fa-refresh"></i></a></h6>
				
						<ul class="inbox-menu-lg">
							<li class="active">
								<a class="inbox-load" href="javascript:void(0);"> Inbox (14) </a>
							</li>
							<li>
								<a href="javascript:void(0);">Sent</a>
							</li>
							<li>
								<a href="javascript:void(0);">Draft</a>
							</li>
							<li>
								<a href="javascript:void(0);">Trash</a>
							</li>
						</ul>
				
						<h6> Quick Access <a href="javascript:void(0);" rel="tooltip" title="" data-placement="right" data-original-title="Add Another" class="pull-right txt-color-darken"><i class="fa fa-plus"></i></a></h6>
				
						<ul class="inbox-menu-sm">
							<li>
								<a href="javascript:void(0);"> Images (476)</a>
							</li>
							<li>
								<a href="javascript:void(0);">Documents (4)</a>
							</li>
						</ul>
				
						<div class="air air-bottom inbox-space">
				
							3.5GB of <strong>10GB</strong><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Empty Spam" class="pull-right txt-color-darken"><i class="fa fa-trash-o fa-lg"></i></a>
				
							<div class="progress progress-micro">
								<div class="progress-bar progress-primary" style="width: 34%;"></div>
							</div>
						</div>
				
					</div>
				
					<div class="table-wrap custom-scroll animated fast fadeInRight">
						<!-- ajax will fill this area -->
						LOADING...
				
					</div>
				
					<div class="inbox-footer">
				
						<div class="row">
				
							<div class="col-xs-6 col-sm-1">
				
								<div class="txt-color-white hidden-desktop visible-mobile">
									3.5GB of <strong>10GB</strong>
				
									<div class="progress progress-micro">
										<div class="progress-bar progress-primary" style="width: 34%;"></div>
									</div>
								</div>
							</div>
				
							<div class="col-xs-6 col-sm-11 text-right">
								<div class="txt-color-white inline-block">
									<i class="txt-color-blueLight hidden-mobile">Last account activity <i class="fa fa-clock-o"></i> 52 mins ago |</i> Displaying <strong>44 of 259</strong>
								</div>
							</div>
				
						</div>
				
					</div>
				
				</div>


			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->

		<!-- PAGE FOOTER -->
		<?php include 'footer.php'; ?>
		
		<!-- PAGE RELATED PLUGIN(S) -->
		
		<script src="js/plugin/delete-table-row/delete-table-row.min.js"></script>
		
		<script src="js/plugin/summernote/summernote.min.js"></script>
		
		<script src="js/plugin/select2/select2.min.js"></script>
		
		<script>
		
		$(document).ready(function() {
		
			// DO NOT REMOVE : GLOBAL FUNCTIONS!
			pageSetUp();
		
			// PAGE RELATED SCRIPTS
		
			/*
			 * Fixed table height
			 */
			
			//tableHeightSize()
			
			//$(window).resize(function() {
			//	tableHeightSize()
			//})
			
			function tableHeightSize() {
	
				if ($('body').hasClass('menu-on-top')) {
					var menuHeight = 68;
					// nav height
	
					var tableHeight = ($(window).height() - 224) - menuHeight;
					if (tableHeight < (320 - menuHeight)) {
						$('.table-wrap').css('height', (320 - menuHeight) + 'px');
					} else {
						$('.table-wrap').css('height', tableHeight + 'px');
					}
	
				} else {
					var tableHeight = $(window).height() - 224;
					if (tableHeight < 320) {
						$('.table-wrap').css('height', 320 + 'px');
					} else {
						$('.table-wrap').css('height', tableHeight + 'px');
					}
	
				}
	
			}
			
			/*
			 * LOAD INBOX MESSAGES
			 */
			loadInbox();
			function loadInbox() {
				loadURL("ajax/email/email-list.html", $('#inbox-content > .table-wrap'))
			}
		
			/*
			 * Buttons (compose mail and inbox load)
			 */
			$(".inbox-load").click(function() {
				loadInbox();
			});
		
			// compose email
			$("#compose-mail").click(function() {
				loadURL("ajax/email-compose.html", $('#inbox-content > .table-wrap'));
			})
		
		});	
			
		
		</script>



	</body>

</html>