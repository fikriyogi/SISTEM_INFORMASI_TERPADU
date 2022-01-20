<?php
include '../../../assets/dbconnect.php';
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysqli_query($koneksi, "select * from search_history where keyword like '%$q%' order by id LIMIT 5");
while($row=mysqli_fetch_array($sql_res))
{
$userkeyword=$row['keyword'];
$email=$row['email'];
$b_userkeyword='<strong>'.$q.'</strong>';
$b_email='<strong>'.$q.'</strong>';
$final_userkeyword = str_ireplace($q, $b_userkeyword, $userkeyword);
$final_email = str_ireplace($q, $b_email, $email);
?>
<div class="show" align="left">
<img src="author.PNG" style="width:50px; height:50px; float:left; margin-right:6px;" /><span class="keyword"><?php echo $final_userkeyword; ?></span>&nbsp;<br/><?php echo $final_email; ?><br/>
</div>
<?php
}
}
?>