<?php

  class Siswa {
      public  $nama       = "Naufal";
      public $kelas       = "11";
      protected  $jurusan = "RPL";
      private $nis        = "67358";
      function tampilkanDataSiswa(){
          echo "nama    : $this->nama    <br>";
          echo "kelas   : $this->kelas   <br>";
          echo "jurusan : $this->jurusan <br>";
          echo "nis     : $this->nis     <br>";
      }
  }  
  
  $siswa1 = new Siswa("");
  $siswa1->tampilkanDataSiswa();
?>
