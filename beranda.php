<?php 
require_once 'class.user.php';
$user_home = new USER();

if (!$user_home->is_logged_in()) {
    $user_home->redirect('index.php');
}

// echo $user_home->count('warga', 'jk', '0');
