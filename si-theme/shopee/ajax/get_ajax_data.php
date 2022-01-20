 <?php
/***********************************************
*@ author : Vikash Kumar Singh
*@ blog: http://www.phpcluster.com/
*@ tutorial : http://www.phpcluster.com/dynamic-dependent-select-box-using-jquery-ajax-php.html
***********************************************/

include_once 'dbconfig.php';
   
if(isset($_POST['country_id']) && !empty($_POST['country_id'])){
 
 //get state list
$sql = mysqli_query($conn, "SELECT * FROM `state` WHERE `country_id`='".$_POST['country_id']."'");

//check for rows
if(mysqli_num_rows($sql)>0){
while($states=mysqli_fetch_array($sql))
{ ?>
<option value ='<?php echo $states['id']; ?> '><?php echo $states['state_name']; ?> </option>
<?php  }
       
} 
else
{
 echo '<option value="">State not available</option>';
}}
 
 //when state id in post
 if(isset($_POST['state_id']) && !empty($_POST['state_id']))
   {
   //get all city list
$sql = mysqli_query($conn,"SELECT * FROM  `city` WHERE `state_id`='".$_POST['state_id']."'");

//check for rows
if(mysqli_num_rows($sql)>0){

while($cities=mysqli_fetch_array($sql))
  { ?>
 <option value ='<?php echo $cities['id']; ?> '><?php echo $cities['city_name']; ?> </option>
<?php  }
                     
   } 
else
{
 echo '<option value="">City not available</option>';
}
}
?>
