<?php
$con = mysqli_connect("localhost","root","","rahadian");?>
<h1>Selamat Datang ". $_SESSION['login'] ."</h1>
<h2>Halaman ini hanya bisa diakses jika Anda sudah login</h2>
<h2>Klik <a href='session3.php'>di sini
(session3.php)</a> untuk LOGOUT</h2>