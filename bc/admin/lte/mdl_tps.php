<?php 


if(isset($_POST["data_id"])){
	$data_id = $_POST["data_id"];
	$output = "";
	$connect = mysqli_connect('localhost', 'root', '', 'test');  
	$query = "SELECT * FROM warga WHERE id = '$data_id' ";  
	$result = mysqli_query($connect, $query); 
	$output .= '
<div class="table-responsive">  
	<table class="table table-bordered">'; 
	$row = mysqli_fetch_array($result);
     $output .= '  
          <tr>  
               <td width="30%"><label>Name</label></td>  
               <td width="70%">'.$row["nama"].'</td>  
          </tr>
          <tr>  
               <td width="30%"><label>Gender</label></td>  
               <td width="70%">'.$row["nik"].'</td>  
          </tr>  
          <tr>  
               <td width="30%"><label>Designation</label></td>  
               <td width="70%"><input type="text" name="tps" value="'.$row["kk"].'"></input></td>  
          </tr>
          ';    
$output .= "
	</table>
</div>";  
echo $output;  
}



?>