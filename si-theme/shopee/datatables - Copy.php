
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title> SmartAdmin </title>
		<meta name="description" content="">
		<meta name="author" content="">
			
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production-plugins.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.min.css">

		<!-- SmartAdmin RTL Support -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> 

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/demo.min.css">

		<!-- FAVICONS -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">

	</head>
	
	<!-- #BODY -->
	<!-- Possible Classes

		* 'smart-style-{SKIN#}'
		* 'smart-rtl'         - Switch theme mode to RTL
		* 'menu-on-top'       - Switch to top navigation (no DOM change required)
		* 'no-menu'			  - Hides the menu completely
		* 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
		* 'fixed-header'      - Fixes the header
		* 'fixed-navigation'  - Fixes the main menu
		* 'fixed-ribbon'      - Fixes breadcrumb
		* 'fixed-page-footer' - Fixes footer
		* 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
	-->
	<body class="fixed-header fixed-navigation ">

		<!-- HEADER -->
		<header id="header">
			<div id="logo-group">

				<!-- PLACE YOUR LOGO HERE -->
				<span id="logo"> <img src="img/logo.png" alt="SmartAdmin"> </span>
				<!-- END LOGO PLACEHOLDER -->

				<!-- Note: The activity badge color changes when clicked and resets the number to 0
				Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
				<span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>

				<!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
				<div class="ajax-dropdown">

					<!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<label class="btn btn-default">
							<input type="radio" name="activity" id="ajax/notify/mail.html">
							Msgs (14) </label>
						<label class="btn btn-default">
							<input type="radio" name="activity" id="ajax/notify/notifications.html">
							notify (3) </label>
						<label class="btn btn-default">
							<input type="radio" name="activity" id="ajax/notify/tasks.html">
							Tasks (4) </label>
					</div>

					<!-- notification content -->
					<div class="ajax-notifications custom-scroll">

						<div class="alert alert-transparent">
							<h4>Click a button to show messages here</h4>
							This blank page message helps protect your privacy, or you can show the first message here automatically.
						</div>

						<i class="fa fa-lock fa-4x fa-border"></i>

					</div>
					<!-- end notification content -->

					<!-- footer: refresh area -->
					<span> Last updated on: 12/12/2013 9:43AM
						<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
							<i class="fa fa-refresh"></i>
						</button> </span>
					<!-- end footer -->

				</div>
				<!-- END AJAX-DROPDOWN -->
			</div>

			<!-- projects dropdown -->
			<div class="project-context hidden-xs">

				<span class="label">Projects:</span>
				<span class="project-selector dropdown-toggle" data-toggle="dropdown">Recent projects <i class="fa fa-angle-down"></i></span>

				<!-- Suggestion: populate this list with fetch and push technique -->
				<ul class="dropdown-menu">
					<li>
						<a href="javascript:void(0);">Online e-merchant management system - attaching integration with the iOS</a>
					</li>
					<li>
						<a href="javascript:void(0);">Notes on pipeline upgradee</a>
					</li>
					<li>
						<a href="javascript:void(0);">Assesment Report for merchant account</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>
					</li>
				</ul>
				<!-- end dropdown-menu-->

			</div>
			<!-- end projects dropdown -->

			<!-- pulled right: nav area -->
			<div class="pull-right">
				
				<!-- collapse menu button -->
				<div id="hide-menu" class="btn-header pull-right">
					<span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
				</div>
				<!-- end collapse menu -->
				
				<!-- #MOBILE -->
				<!-- Top menu profile link : this shows only when top menu is active -->
				<ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
					<li class="">
						<a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown"> 
							<img src="img/avatars/sunny.png" alt="John Doe" class="online" />  
						</a>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
							</li>
						</ul>
					</li>
				</ul>

				<!-- logout button -->
				<div id="logout" class="btn-header transparent pull-right">
					<span> <a href="login.html" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
				</div>
				<!-- end logout button -->

				<!-- search mobile button (this is hidden till mobile view port) -->
				<div id="search-mobile" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
				</div>
				<!-- end search mobile button -->

				<!-- input: search field -->
				<form action="search.html" class="header-search pull-right">
					<input id="search-fld"  type="text" name="param" placeholder="Find reports and more" data-autocomplete='[
					"ActionScript",
					"AppleScript",
					"Asp",
					"BASIC",
					"C",
					"C++",
					"Clojure",
					"COBOL",
					"ColdFusion",
					"Erlang",
					"Fortran",
					"Groovy",
					"Haskell",
					"Java",
					"JavaScript",
					"Lisp",
					"Perl",
					"PHP",
					"Python",
					"Ruby",
					"Scala",
					"Scheme"]'>
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
					<a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
				</form>
				<!-- end input: search field -->

				<!-- fullscreen button -->
				<div id="fullscreen" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
				</div>
				<!-- end fullscreen button -->
				
				<!-- #Voice Command: Start Speech -->
				<div id="speech-btn" class="btn-header transparent pull-right hidden-sm hidden-xs">
					<div> 
						<a href="javascript:void(0)" title="Voice Command" data-action="voiceCommand"><i class="fa fa-microphone"></i></a> 
						<div class="popover bottom"><div class="arrow"></div>
							<div class="popover-content">
								<h4 class="vc-title">Voice command activated <br><small>Please speak clearly into the mic</small></h4>
								<h4 class="vc-title-error text-center">
									<i class="fa fa-microphone-slash"></i> Voice command failed
									<br><small class="txt-color-red">Must <strong>"Allow"</strong> Microphone</small>
									<br><small class="txt-color-red">Must have <strong>Internet Connection</strong></small>
								</h4>
								<a href="javascript:void(0);" class="btn btn-success" onclick="commands.help()">See Commands</a> 
								<a href="javascript:void(0);" class="btn bg-color-purple txt-color-white" onclick="$('#speech-btn .popover').fadeOut(50);">Close Popup</a> 
							</div>
						</div>
					</div>
				</div>
				<!-- end voice command -->

				<!-- multiple lang dropdown : find all flags in the flags page -->
				<ul class="header-dropdown-list hidden-xs">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="img/blank.gif" class="flag flag-us" alt="United States"> <span> English (US) </span> <i class="fa fa-angle-down"></i> </a>
						<ul class="dropdown-menu pull-right">
							<li class="active">
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-us" alt="United States"> English (US)</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-fr" alt="France"> Français</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-es" alt="Spanish"> Español</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-de" alt="German"> Deutsch</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-jp" alt="Japan"> 日本語</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-cn" alt="China"> 中文</a>
							</li>	
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-it" alt="Italy"> Italiano</a>
							</li>	
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-pt" alt="Portugal"> Portugal</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-ru" alt="Russia"> Русский язык</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-kr" alt="Korea"> 한국어</a>
							</li>						
							
						</ul>
					</li>
				</ul>
				<!-- end multiple lang -->

			</div>
			<!-- end pulled right: nav area -->

		</header>
		<!-- END HEADER -->

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		<aside id="left-panel">

			<!-- User info -->
			<div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
					
					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="img/avatars/sunny.png" alt="me" class="online" /> 
						<span>
							john.doe 
						</span>
						<i class="fa fa-angle-down"></i>
					</a> 
					
				</span>
			</div>
			<!-- end user info -->

			<nav>
				<!-- 
				NOTE: Notice the gaps after each icon usage <i></i>..
				Please note that these links work a bit different than
				traditional href="" links. See documentation for details.
				-->

				<ul>
					<li>
						<a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
					</li>
					<li>
						<a href="inbox.html"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Outlook</span> <span class="badge pull-right inbox-badge margin-right-13">14</span></a>
					</li>
					<li class="active open">
						<a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span></a>
						<ul style="display:block;">
							<li>
								<a href="table.html">Normal Tables</a>
							</li>
							<li class="active">
								<a href="datatables.html">Data Tables <span class="badge inbox-badge bg-color-greenLight hidden-mobile">responsive</span></a>
							</li>
							<li>
								<a href="jqgrid.html">Jquery Grid</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Teachers</span></a>
					</li>
					<li>
						<a href="class.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Class</span></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-cloud"><em>3</em></i> <span class="menu-item-parent">Cool Features!</span></a>
						<ul>
							<li>
								<a href="calendar.html"><i class="fa fa-lg fa-fw fa-calendar"></i> <span class="menu-item-parent">Calendar</span></a>
							</li>
							<li>
								<a href="gmap-xml.html"><i class="fa fa-lg fa-fw fa-map-marker"></i> <span class="menu-item-parent">GMap Skins</span><span class="badge bg-color-greenLight pull-right inbox-badge">9</span></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-windows"></i> <span class="menu-item-parent">Manage Students</span></a>
						<ul>
                            <li><a href="https://codetroopers-team.com/multi/administrator/setting/index.html"> General Setting</a></li>
                                                           
                            <li><a href="https://codetroopers-team.com/multi/administrator/school/index.html"> Manage School</a></li>
                                                         
                       		<li><a href="https://codetroopers-team.com/multi/administrator/payment/index.html">Payment Setting</a></li>
                            <li><a href="https://codetroopers-team.com/multi/administrator/sms/index.html">SMS Setting</a></li>
                            
                            <li><a href="https://codetroopers-team.com/multi/administrator/emailsetting/index.html">Email Setting</a></li>
                            
                            <li><a href="https://codetroopers-team.com/multi/administrator/year/index.html"> Academic Year</a></li>
                                                            
                            <li><a href="https://codetroopers-team.com/multi/administrator/role/index.html"> User Role (ACL)</a></li> 
                                                         
                            <li><a href="https://codetroopers-team.com/multi/administrator/permission/index.html">Role Permission (ACL)</a></li> 
                                                            
                            <li><a href="https://codetroopers-team.com/multi/administrator/superadmin/index.html"> Manage Super Admin</a></li> 
                                                            
                            <li><a href="https://codetroopers-team.com/multi/administrator/user/index.html">Manage User</a></li> 
                                                           
                            <li><a href="https://codetroopers-team.com/multi/administrator/password/index.html">Reset User Password</a></li> 
                          
                           
                            <li><a href="https://codetroopers-team.com/multi/administrator/username/index.html">Reset Username</a></li> 
                          
                           
                            <li><a href="https://codetroopers-team.com/multi/administrator/usercredential/index.html">User Credential</a></li> 
                          
                           
                            <li><a href="https://codetroopers-team.com/multi/administrator/activitylog/index.html">Activity Log</a></li>                         
                              
                           
                            <li><a href="https://codetroopers-team.com/multi/administrator/feedback/index.html">Manage Feedback</a></li>                         
                         
                           
                            <li><a href="https://codetroopers-team.com/multi/administrator/backup/index.html">Backup Database</a></li>       
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-windows"></i> <span class="menu-item-parent">Administrator</span></a>
						<ul>
                                <li><a href="https://codetroopers-team.com/multi/administrator/setting/index.html"> General Setting</a></li>
                                                               
                                <li><a href="https://codetroopers-team.com/multi/administrator/school/index.html"> Manage School</a></li>
                                                             
                           		<li><a href="https://codetroopers-team.com/multi/administrator/payment/index.html">Payment Setting</a></li>
                                <li><a href="https://codetroopers-team.com/multi/administrator/sms/index.html">SMS Setting</a></li>
                                
                                <li><a href="https://codetroopers-team.com/multi/administrator/emailsetting/index.html">Email Setting</a></li>
                                
                                <li><a href="https://codetroopers-team.com/multi/administrator/year/index.html"> Academic Year</a></li>
                                                                
                                <li><a href="https://codetroopers-team.com/multi/administrator/role/index.html"> User Role (ACL)</a></li> 
                                                             
                                <li><a href="https://codetroopers-team.com/multi/administrator/permission/index.html">Role Permission (ACL)</a></li> 
                                                                
                                <li><a href="https://codetroopers-team.com/multi/administrator/superadmin/index.html"> Manage Super Admin</a></li> 
                                                                
                                <li><a href="https://codetroopers-team.com/multi/administrator/user/index.html">Manage User</a></li> 
                                                               
                                <li><a href="https://codetroopers-team.com/multi/administrator/password/index.html">Reset User Password</a></li> 
                              
                               
                                <li><a href="https://codetroopers-team.com/multi/administrator/username/index.html">Reset Username</a></li> 
                              
                               
                                <li><a href="https://codetroopers-team.com/multi/administrator/usercredential/index.html">User Credential</a></li> 
                              
                               
                                <li><a href="https://codetroopers-team.com/multi/administrator/activitylog/index.html">Activity Log</a></li>                         
                                  
                               
                                <li><a href="https://codetroopers-team.com/multi/administrator/feedback/index.html">Manage Feedback</a></li>                         
                             
                               
                                <li><a href="https://codetroopers-team.com/multi/administrator/backup/index.html">Backup Database</a></li>                         
                                
                        
						</ul>
					</li>
					<li class="chat-users top-menu-invisible">
						<a href="#"><i class="fa fa-lg fa-fw fa-comment-o"><em class="bg-color-pink flash animated">!</em></i> <span class="menu-item-parent">Smart Chat API <sup>beta</sup></span></a>
						<ul>
							<li>
								<!-- DISPLAY USERS -->
								<div class="display-users">

									<input class="form-control chat-user-filter" placeholder="Filter" type="text">
									
								  	<a href="#" class="usr" 
									  	data-chat-id="cha1" 
									  	data-chat-fname="Sadi" 
									  	data-chat-lname="Orlaf" 
									  	data-chat-status="busy" 
									  	data-chat-alertmsg="Sadi Orlaf is in a meeting. Please do not disturb!" 
									  	data-chat-alertshow="true" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/5.png' alt='Sadi Orlaf'>
												<div class='usr-card-content'>
													<h3>Sadi Orlaf</h3>
													<p>Marketing Executive</p>
												</div>
											</div>
										"> 
									  	<i></i>Sadi Orlaf
								  	</a>
								  
									<a href="#" class="usr" 
										data-chat-id="cha2" 
									  	data-chat-fname="Jessica" 
									  	data-chat-lname="Dolof" 
									  	data-chat-status="online" 
									  	data-chat-alertmsg="" 
									  	data-chat-alertshow="false" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/1.png' alt='Jessica Dolof'>
												<div class='usr-card-content'>
													<h3>Jessica Dolof</h3>
													<p>Sales Administrator</p>
												</div>
											</div>
										"> 
									  	<i></i>Jessica Dolof
									</a>
								  
									<a href="#" class="usr" 
									  	data-chat-id="cha3" 
									  	data-chat-fname="Zekarburg" 
									  	data-chat-lname="Almandalie" 
									  	data-chat-status="online" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/3.png' alt='Zekarburg Almandalie'>
												<div class='usr-card-content'>
													<h3>Zekarburg Almandalie</h3>
													<p>Sales Admin</p>
												</div>
											</div>
										"> 
									  	<i></i>Zekarburg Almandalie
									</a>
								 
									<a href="#" class="usr" 
									  	data-chat-id="cha4" 
									  	data-chat-fname="Barley" 
									  	data-chat-lname="Krazurkth" 
									  	data-chat-status="away" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/4.png' alt='Barley Krazurkth'>
												<div class='usr-card-content'>
													<h3>Barley Krazurkth</h3>
													<p>Sales Director</p>
												</div>
											</div>
										"> 
									  	<i></i>Barley Krazurkth
									</a>
								  
									<a href="#" class="usr offline" 
									  	data-chat-id="cha5" 
									  	data-chat-fname="Farhana" 
									  	data-chat-lname="Amrin" 
									  	data-chat-status="incognito" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/female.png' alt='Farhana Amrin'>
												<div class='usr-card-content'>
													<h3>Farhana Amrin</h3>
													<p>Support Admin <small><i class='fa fa-music'></i> Playing Beethoven Classics</small></p>
												</div>
											</div>
										"> 
									  	<i></i>Farhana Amrin (offline)
									</a>
								  
									<a href="#" class="usr offline" 
										data-chat-id="cha6" 
									  	data-chat-fname="Lezley" 
									  	data-chat-lname="Jacob" 
									  	data-chat-status="incognito" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/male.png' alt='Lezley Jacob'>
												<div class='usr-card-content'>
													<h3>Lezley Jacob</h3>
													<p>Sales Director</p>
												</div>
											</div>
										"> 
									  	<i></i>Lezley Jacob (offline)
									</a>
									
									<a href="chat.html" class="btn btn-xs btn-default btn-block sa-chat-learnmore-btn">About the API</a>

								</div>
								<!-- END DISPLAY USERS -->
							</li>
						</ul>	
					</li>
				</ul>
			</nav>
			

			<span class="minifyme" data-action="minifyMenu"> 
				<i class="fa fa-arrow-circle-left hit"></i> 
			</span>

		</aside>
		<!-- END NAVIGATION -->

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

										<form action="demo-contacts.php" method="post" id="contact-form" class="smart-form">
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
														<i class="icon-append fa fa-user"></i>
														<input type="text" name="named" id="named">
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
													<th class="hasinput" style="width:17%">
														<input type="text" class="form-control" placeholder="Filter Name" />
													</th>
													<th class="hasinput" style="width:18%">
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
									        		$q = mysqli_query($conn, "SELECT * FROM students");
									        		while 
									        	?>
									            <tr>
									                <td>Tiger Nixon</td>
									                <td>System Architect</td>
									                <td>Edinburgh</td>
									                <td>61</td>
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="js/libs/jquery-3.2.1.min.js"><\/script>');
			}
		</script>

		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
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


	</body>

</html>