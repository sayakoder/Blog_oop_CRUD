<?php
 include "db.php";
 
 $nama=$_POST["nama"];
 
  
 $result=mysql_query("SELECT * FROM siswa where nama like '%$nama%' ");
 $found=mysql_num_rows($result);
 
 if($found>0){
    while($row=mysql_fetch_array($result)){
    echo "<li>Nama 	: $row[nama]<br>
            Alamat 	: $row[alamat]<br>
            Kelamin	: $row[kelamin]<br>
            </li>";
    }   
 }else{
    echo "<li>Nama Tidak ditemukan <li>";
 }
?>