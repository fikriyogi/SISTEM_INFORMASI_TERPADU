<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
      body {
            background: #22232a;
            color: #c1d3c9;
            font-family: "Ubuntu", -apple-system, "Segoe UI", "Roboto", "Oxygen", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
            font-size: .9rem;
      }
    table {
      border-collapse: collapse;
      width: 100%;
    }
    tr:nth-child(even) {
    background-color: #f2f2f214;
}

    th, td {
      padding: 2px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    tr:hover {background-color: #55e0e2;color: black;transition: 0.3s;}
    #myInput {
  background-image: url('img/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 95%; /* Full-width */
  outline: none;
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

/* The progress container (grey background) */
.progress-container {
  width: 100%;
  height: 8px;
  background: #ccc;
  position: fixed;
  top: 0;
  z-index: 1;
  background-color: #f1f1f1;
}

/* The progress bar (scroll indicator) */
.progress-bar {
  height: 8px;
  background: #4caf50;
  width: 0%;
}
    </style>
</head>
<body>
  <div class="progress-container">
      <div class="progress-bar" id="myBar"></div>
    </div>
  <input type="text" id="myInput" onkeyup="myFunction()" autofocus="" placeholder="Search for names..">

    <table id="myTable">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No. KK</th>
        <th>NIK</th>
        <th>Tempat</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>RT</th>
        <th>RW</th>
        <th>Aksi</th>
      </tr>
      <?php 
      $conn = mysqli_connect('localhost', 'root', '', 'user-management-pro');
      $q = mysqli_query($conn, "SELECT * FROM students ORDER BY kdSekolah ASC");
      while ($r = mysqli_fetch_array($q)) {
      ?>
      <tr>
        <td><?= $r['namaSiswa']?></td>
        <td><?= $r['kdSekolah']?></td>
        <td><?= $r['nisn']?></td>
        <td><?= $r['jk']?></td>
        <td><?= $r['tempatLahir']?></td>
        <td><?= $r['tglLahir']?></td>
        <td><?= $r['nik']?></td>
        <td><?= $r['agama']?></td>
        <td><?= $r['hp']?></td>
        <td><?= $r['namaAyah']?></td>
      </tr>
      <?php } ?>
    </table>

    <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<!-- <script type="text/javascript">
  // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script> -->

</body>
</html>