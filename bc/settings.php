<?php

 
	 
include __DIR__ . '/header.php';

$user_home->get_link(@$_GET['setting']);
$msg = '';
if (isset($_POST['update'])) {
	// This part is similar to the db.php, but instead we update a record and not insert
	        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
	        $user_name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
	        $user_email = isset($_POST['user_email']) ? $_POST['user_email'] : '';
	        $otp_set = isset($_POST['otp_set']) ? $_POST['otp_set'] : '';
	        $notif_set = isset($_POST['notif_set']) ? $_POST['notif_set'] : '';
	        // $title = isset($_POST['title']) ? $_POST['title'] : '';
	        // $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
	        // Update the record
	        $stmt = $user_home->runQuery('UPDATE tbl_users SET userName = ?, userEmail = ?, is_otp = ?, is_notif = ? WHERE userID = ?');
	        $stmt->execute([$user_name, $user_email, $otp_set, $notif_set, $_SESSION['userSession']]);

	        // $statement = $user_home->runQuery('INSERT INTO history (user_id, action, create_at) VALUES (?,?,?)')  ;
	        // $statement->execute([$_SESSION['user_id'], 'Update Profil', $created]);

			$result = $stmt->fetchAll();

			if (isset($result)) {
				if ($row['is_notif']==1) {
					$user_home->send_mail($row['userEmail'],'Update Profil Success','Update Profil');
					// header('location:settings.php');
					$user_home->redirect('settings.php');
				} else {
					$user_home->redirect('settings.php');
				}
				
				$msg = 'Update berhasil';
			} else {
				$msg = 'Update Gagal';
			}
}

?>


<body>

	<div class="navbar navbar-fixed-top">
	    <div class="navbar-inner">
	        <div class="container-fluid">
	            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </a>
	            <a class="brand" href="#">Settings</a>
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
	                            <li><a href="profile.php">Profile</a></li>
	                            <li><a href="schools.php">Schools</a></li>
	                            <li><a href="http://www.codingcage.com/search/label/jQuery">jQuery</a></li>
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
	<div class="container">

				<?php if ($msg): ?>
				<p><?=$msg?></p>
				<?php endif; ?>
				<div class="content update">
					<h2>Update Contact #<?=$row['userID']?></h2>
				    <form action="" method="post">
				        <label for="id">ID</label>
				        <label for="name">Name</label>
				        <input type="hidden" name="id" placeholder="1" value="<?=$_SESSION['userSession']?>" id="id">
				        <input type="text" name="user_name" placeholder="John Doe" value="<?=$row['userName']?>" id="name">
				        <label for="email">Email</label>
				        <input type="text" name="user_email" placeholder="johndoe@example.com" value="<?=$row['userEmail']?>" id="user_email">
				        <label for="name">Set OTP Code When Login</label>

				        <select name="otp_set">
				        	<option value="0" <?php echo ($row['is_otp'] == '0' ? 'selected' : '');?>>Non Active</option>
				        	<option value="1" <?php echo ($row['is_otp'] == '1' ? 'selected' : '');?> >Active</option>
				        </select>
				        <label for="name">Set Notification when update profil</label>

				        <select name="notif_set">
				        	<option value="0" <?php echo ($row['is_notif'] == '0' ? 'selected' : '');?>>Non Active</option>
				        	<option value="1" <?php echo ($row['is_notif'] == '1' ? 'selected' : '');?> >Active</option>
				        </select>
				        <!-- <label for="title">Title</label>
				        <label for="created">Created</label>
				        <input type="text" name="title" placeholder="Employee" value="<?=$row['title']?>" id="title">
				        <input type="datetime-local" name="created" value="<?=date('Y-m-d\TH:i', strtotime($row['created']))?>" id="created"> -->
				        <input type="submit" name="update" value="Update">
				    </form>
				</div>
		
			
		</div>



	
<?php 
include __DIR__ . '/footer.php';

?>