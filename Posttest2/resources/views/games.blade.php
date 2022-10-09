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
    
	

    <br/>
    <table>
      <thead>
        <tr>
			<!-- <th>No</th> -->
			<!-- <th>Gambar</th> -->
      <th>NO</th>
			<th>Judul</th>
			<th>Tahun</th>
			<th>Pengembang</th>
			<th>Penerbit</th>
      <th>Mesin</th>
			<th>Platform</th>
			<!-- <th>Aksi</th> -->
        </tr>
    </thead>
    <tbody>


        @foreach ($games as $game)
        <tr>
            <th scope="row">{{ $game->id }}</th>
            <td>{{ $game->judul }}</td>
            <td>{{ $game->tahun }}</td>
            <td>{{ $game->publisher->pengembang }}</td>
            <td>{{ $game->penerbit }}</td>
            <td>{{ $game->publisher->mesin }}</td>
            <td>{{ $game->platform }}</td>
            {{-- Cukup Panggil seperti di atas --}}
        </tr>

        @endforeach
	  
 
    </tbody>
    </table>
  </body>
  
</html>




