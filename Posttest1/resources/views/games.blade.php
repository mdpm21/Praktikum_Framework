<?php
  require('koneksi.php'); 
  

?>

<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
  </head>
  
  <body>
    <center><h1>Data Game of The Year</h1><center>
    
	

    <!-- @php
        $conn = mysqli_connect("localhost", "root", "", "games");
        $sql = "SELECT * FROM games";
        $result = $conn->query($sql);
    @endphp -->
    <br/>
    <table>
      <thead>
        <tr>
			<!-- <th>No</th> -->
			<!-- <th>Gambar</th> -->
			<th>Judul</th>
			<th>Tahun</th>
			<th>Pengembang</th>
			<th>Penerbit</th>
			<th>Platform</th>
			<!-- <th>Aksi</th> -->
        </tr>
    </thead>
    <tbody>
	<?php

      $query = "SELECT * FROM games ORDER BY id ASC";

      $result = mysqli_query($koneksi, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
		}

      $no = 1; //variabel untuk membuat nomor urut

	  while($row = mysqli_fetch_assoc($result))
      {
     ?>
       <tr>
          <td><?php echo $row['judul']; ?></td>
          <td><?php echo $row['tahun']; ?></td>
          <td><?php echo $row['pengembang']; ?></td>
          <td><?php echo $row['penerbit']; ?></td>
          <td><?php echo $row['platform']; ?></td>
          
      </tr>
         
      <?php
        $no++; 
      }
      ?>
	  
    </tbody>
    </table>
    <!-- <form action="/home" method="post">
        <button type="submit" name="logout">logout</button>
    </form> -->
  </body>
  
</html>




