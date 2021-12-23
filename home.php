<?php

 
	 
include __DIR__ . '/header.php';

?>


<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">
                <?php 
                // echo $row['level'] == 'Super Admin' ? 'Super Admin' : 'Tidak';  
                echo $row['level'];
                ?>
                    
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i
                                    class="icon-user"></i>
                            <?php echo $row['userEmail']; ?> <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="home.php?setting=identitas_sekolah">Identitas Sekolah</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="notice.php">Notification</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="settings.php">Settings</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="active">
                        <a href="http://www.codingcage.com/">Coding Cage</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Tutorials <b class="caret"></b>

                        </a>
                        <ul class="dropdown-menu" id="menu1">
                            <li><a href="tes.php">Tes</a></li>
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="schools.php">Schools</a></li>
                            <li><a href="http://www.codingcage.com/search/label/jQuery"><?php echo $_SESSION['token'];?></a></li>
                            <li><a href="http://www.codingcage.com/search/label/Bootstrap">Bootstrap</a></li>
                            <li><a href="http://www.codingcage.com/search/label/CRUD">CRUD</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>

	<?php 
    
    echo $user_home->get_link(@$_GET['setting']); ?>
	<div class="container badan">
		
	</div>

<!--/.fluid-container-->
<?php include __DIR__ . '/footer.php'; ?>

