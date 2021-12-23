<?php
$con = mysqli_connect('localhost','root','','test');

if(isset($_POST['email'])){

    if($_POST['email']!=""){
        $query = mysqli_query($con,"select * from tbl_users where userEmail='".$_POST['email']."'");
        $num = mysqli_num_rows($query);
        if($num==1){
            $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
            $action = "SHOW_SUCCESS";
            $userName = $result['userName'];
            $email = $result['userEmail'];
            $imagePath = "assets/img/".$result['image'];
            $image =  '<img src="'.$imagePath.'" alt="" class="img-circle" height="100">';
            echo json_encode(array('action'=>$action,'userName'=>$userName,'userEmail'=>$email,'image'=>$image));
        }else{
            $action = "SHOW_ERROR";
            $error_msg  = "Sorry, we doesn't recognize that email. ";
            echo json_encode(array('action'=>$action,'error_msg'=>$error_msg));
        }
    }else{
        $action = "SHOW_ERROR";
        $error_msg  = "Please enter your email.";
        echo json_encode(array('action'=>$action,'error_msg'=>$error_msg));
    }

}
