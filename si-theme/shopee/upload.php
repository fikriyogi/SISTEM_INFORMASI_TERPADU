<!doctype html>
<html>
<head>
<title>Upload Download File</title>
<style>
html, body {font:12px Arial,Helvetica,sans-serif;}
fieldset {border:1px solid #ff0000; width:400px;}
legend {border:1px solid #ff0000;}
table {border-collapse:collapse;width:500px;}
td, th {border:1px solid #c0c0c0;padding:5px;}
th{background:#ff0000;color:#ffffff;}
</style>
<script type="text/javascript">
function checkSize(max_img_size)
{   var input = document.getElementById("fileupload");
    if(input.files && input.files.length == 1)
    {   if (input.files[0].size > max_img_size) 
        {  alert("Ukuran file harus di bawah " 
                  + (max_img_size/1024/1024) + " MB");
            return false;
        }
    }
    return true;
}
</script>
</head>
<body>
<form enctype="multipart/form-data" action="uploader.php" method="post"
      onsubmit="return checkSize(1048576);">
<fieldset>
<legend>Upload File Max 1 MB</legend>
Choose a file to upload: <input name="uploadedfile" type="file" id="fileupload" /><br />
<input type="submit" value="Upload File" />
</fieldset>
</form>
<br/>
<table>
<tr>
<th>File Name</th>
<th>Upload Date</th>
<th>Type</th>
<th>Size</th>
<th>Delete</th>
</tr>
<?php
if ($handle = opendir('./files/'))
{   while (false !== ($file = readdir($handle)))
    {   if($file!=="." && $file !=="..")
    {   echo "<tr><td><a href=\"download.php?id=" . urlencode($file). "\">$file</a></td>";
        echo "<td>" . date ("m/d/Y H:i", filemtime("files/".$file)) . '</td>';
        echo "<td>" . pathinfo("files/".$file, PATHINFO_EXTENSION) . ' file </td>';
        echo "<td>" . round(filesize("files/".$file)/1024) . ' KB</td>';
        echo "<td><a href=\"hapus.php?id=$file\">Del</a></td></tr>";
        }
    }
    closedir($handle);
}
?>
</table>
</body>
</html>