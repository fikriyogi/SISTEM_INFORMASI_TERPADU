<?php
include_once("dbconfig.php");
?>
<link rel="stylesheet" href="style.css" type="text/css" />
<table align="center" width="50%"  border="1">
<tr>
<td><a href="http://cleartuts.blogspot.com/2015/04/how-to-create-pagination-with-php-pdo.html">PHP Pagination with PDO using OOP concept.</a></td>
</tr>
<tr>
<td>

        <table align="center" border="1" width="100%" height="100%" id="data">
        <?php 
        $query = "SELECT * FROM warga";       
		$records_per_page=100;
		$newquery = $paginate->paging($query,$records_per_page);
		$paginate->dataview($newquery);
		$paginate->paginglink($query,$records_per_page);		
		?>
        </table>
</td>
</tr>
</table>
<div id="footer">
<a href="http://cleartuts.blogspot.com/">cleartuts.blogspot.com</a>
</div>
