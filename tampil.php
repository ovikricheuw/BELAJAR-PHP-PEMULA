<?php
//ambil koneksi dari koneksi.php
include "koneksi.php";

// Perintah untuk menampilkan data
$queri="Select * From siswa" ;  //menampikan SEMUA data dari tabel siswa

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['id'];
 echo "  
  
  Nama : ".$data['nama']." </br>
  Jenis Kelamin : ".$data['Jenis_Kelamin']." </br> 
  Kelas : ".$data['Kelas']." </br>
  Alamat : ".$data['alamat']." </br>
  ---------------------------------------- </br>
  ";
   
}
echo " Berhasil Mengambil data dari database";
?>