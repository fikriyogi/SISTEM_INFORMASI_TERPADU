 <?php
/***********************************************
*@ author : Vikash Kumar Singh
*@ blog: http://www.phpcluster.com/
*@ tutorial : http://www.phpcluster.com/dynamic-dependent-select-box-using-jquery-ajax-php.html
***********************************************/

include_once 'dbconfig.php';
   
$conn = mysqli_connect('localhost','root','','smart-schools');
if(isset($_POST['provinces_id']) && !empty($_POST['provinces_id'])){
 
 //get teachers list
$sql = mysqli_query($conn, "SELECT * FROM `teachers` WHERE `kdSekolah`='".$_POST['provinces_id']."'");

//check for rows
if(mysqli_num_rows($sql)>0){
while($states=mysqli_fetch_array($sql))
{ ?>
<option value ='<?php echo $states['id']; ?> '><?php echo  $states['nip'] .' - '.$states['namaPtk']; ?> </option>
<?php  }
       
} 
else
{
 echo '<option value="">teachers not available</option>';
}}
 



 //when teachers id in post
 if(isset($_POST['state_id']) && !empty($_POST['state_id']))
   {
   //get all city list
$sql = mysqli_query($conn,"SELECT * FROM  `kecamatan` WHERE `regency_id`='".$_POST['state_id']."'");

//check for rows
if(mysqli_num_rows($sql)>0){

while($cities=mysqli_fetch_array($sql))
  { ?>
 <option value ='<?php echo $cities['id']; ?> '><?php echo $cities['name']; ?> </option>
<?php  }
                     
   } 
else
{
 echo '<option value="">Kecamatan not available</option>';
}
}



 
 //when teachers id in post
 if(isset($_POST['regency_id']) && !empty($_POST['regency_id']))
   {
   //get all city list
$sql = mysqli_query($conn,"SELECT * FROM  `desa` WHERE `district_id`='".$_POST['regency_id']."'");

//check for rows
if(mysqli_num_rows($sql)>0){

while($desa=mysqli_fetch_array($sql))
  { ?>
 <option value ='<?php echo $desa['id']; ?> '><?php echo $desa['name']; ?> </option>
	<?php  
		}
	} else {
		echo '<option value="">Desa not available</option>';
	}
}
?>
