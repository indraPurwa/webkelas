<?php
session_start();
include "../konfigurasi.php";
@ $aksi = $_GET['aksi'];
if($aksi == "tambahberita") {
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$tanggal = date('Y-m-d H:i:s');
	$lokasifile = $_FILES['fuploud']['tmp_name'];
	$tipefile = $_FILES['fuploud']['type'];
	$namafile = $_FILES['fuploud']['name'];
	$iduser = $_SESSION['iduser'];
	move_uploaded_file($lokasifile, '../foto/berita/'.$namafile);
	$query = "INSERT INTO berita(`IdBerita`, `jdl_berita`, `isi_berita`, `tgl_berita`, `foto`, `createduser`) VALUES (NULL, '$judul', '$isi', '$tanggal', '$namafile', '$iduser')";
	$conn->query($query);
	echo '<script>alert("Berita berhasil ditambahkan");window.location = "../master.php?page=berita";</script>';
}
else if($aksi == "tambahkegiatan") {
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$tanggal = date('Y-m-d H:i:s');
	$lokasifile = $_FILES['fuploud']['tmp_name'];
	$tipefile = $_FILES['fuploud']['type'];
	$namafile = $_FILES['fuploud']['name'];
	$iduser = $_SESSION['iduser'];
	move_uploaded_file($lokasifile, '../foto/kegiatan/'.$namafile);
	$query = "INSERT INTO kegiatan (`Id_kegiatan`, `jdl_kegiatan`, `isi_kegiatan`, `tgl_kegiatan`, `foto`, `createduser`) VALUES (NULL, '$judul', '$isi', '$tanggal', '$namafile', '$iduser')";
	$conn->query($query);
	echo '<script>alert("Kegiatan berhasil ditambahkan");window.location = "../master.php?page=kegiatan";</script>';
}
else if ($aksi == "tambahpengumuman") {
	$judul = $_POST['judul'];
	$tanggal = date('Y-m-d H:i:s');
	$isi = $_POST['isi'];
	$iduser = $_SESSION['iduser'];
	$query ="INSERT INTO pengumuman (`id_pengumuman`, `jdl_pengumuman`, `tgl_pengumuman`, `isi_pengumuman`, `createduser`) VALUES (NULL, '$judul', '$tanggal', '$isi', '$iduser')";
	$conn->query($query);
	echo '<script>alert("Pengumuman berhasil ditambahkan");window.location = "../master.php?page=pengumuman";</script>';
}
?>