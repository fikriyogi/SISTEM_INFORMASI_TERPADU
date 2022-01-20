<script src="<?= SI_JS; ?>bootstrap.bundle.min.js" ></script>

<script>
       
      $(function(){
 
           $('.table').DataTable({
              "processing": true,
              "serverSide": true,
              "ajax":{
                       "url": "si-inc/warga.php?action=table_data",
                       "dataType": "json",
                       "type": "POST"
                     },
              "columns": [
                  { "data": "no" },
                  { "data": "nama" },
                  { "data": "nik" },
                  { "data": "aksi" },
              ]  
 
          });
        });
 
     
 
</script>
</body>
</html>