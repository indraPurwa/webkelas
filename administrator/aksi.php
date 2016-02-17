<?php
session_start();
include "../konfigurasi.php";
@ $aksi = $_GET['aksi'];
@ $id = $_GET['id'];
@ $getjudul = $_GET['judul'];
@ $getnim = $_GET['nim'];

if($aksi == "updateberita") {
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];

	$query = "UPDATE berita SET `jdl_berita` = '$judul', `isi_berita` = '$isi' WHERE `IdBerita` = '$id'";
	$conn->query($query);
	echo '<script>alert("Berita berhasil di Update");window.location = "../master.php?page=manageberita";</script>';
}
elseif ($aksi == "hapusberita") {
	$conn->query("DELETE FROM berita WHERE IdBerita = $id ");
	echo '<script>alert("Berita berhasil di Hapus");window.location = "../master.php?page=manageberita";</script>';
}

elseif($aksi == "updatekegiatan") {
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];

	$query = "UPDATE kegiatan SET `jdl_kegiatan` = '$judul', `isi_kegiatan` = '$isi' WHERE `Id_kegiatan` = '$id'";
	$conn->query($query);
	echo '<script>alert("Kegiatan berhasil di Update");window.location = "../master.php?page=managekegiatan";</script>';
}
elseif ($aksi == "hapuskegiatan") {
	$conn->query("DELETE FROM kegiatan WHERE Id_kegiatan = $id ");
	echo '<script>alert("Kegiatan berhasil di Hapus");window.location = "../master.php?page=managekegiatan";</script>';
}
elseif($aksi == "updatepengumuman") {
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];

	$query = "UPDATE pengumuman SET `jdl_pengumuman` = '$judul', `isi_pengumuman` = '$isi' WHERE `id_pengumuman` = '$id'";
	$conn->query($query);
	echo '<script>alert("Pengumuman berhasil di Update");window.location = "../master.php?page=managepengumuman";</script>';
}
elseif ($aksi == "hapuskegiatan") {
	$conn->query("DELETE FROM pengumuman WHERE id_pengumuman = $id ");
	echo '<script>alert("Pengumuman berhasil di Hapus");window.location = "../master.php?page=managepengumuman";</script>';
}
elseif ($aksi == "tambahuser") {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$lastLogin = date('Y-m-d H:i:s');
	$createdDate = date('Y-m-d H:i:s');
	$level = $_POST['level'];
	$conn->query("INSERT INTO `tuser` (`IdUser`, `nama`, `alamat`, `telepon`, `username`, `password`, `last_login`, `created_date`, `level`) VALUES (NULL, '$nama', '$alamat', '$telepon', '$username', '$password', '$lastLogin', '$createdDate', '$level')");
	echo '<script>alert("User baru berhasil di Tambahkan");window.location = "../master.php?page=manageuser";</script>';
}
elseif ($aksi == "hapususer") {
	$conn->query("DELETE FROM tuser WHERE IdUser = $id");
	echo '<script>alert("User berhasil di Hapus");window.location = "../master.php?page=manageuser";</script>';
}
elseif ($aksi == "updateuser") {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	$conn->query("UPDATE tuser SET `nama` = '$nama', `alamat` = '$alamat', `telepon` = '$telepon', `username` = '$username', `password` = '$password', `level` ='$level' WHERE `IdUser` = $id");
	echo '<script>alert("User berhasil di Update");window.location = "../master.php?page=manageuser";</script>';
}
elseif ($aksi == "updatelinklain") {
	$judul = $_POST['judul'];
	$link = $_POST['link'];
	$keterangan= $_POST['keterangan'];
	$conn->query("UPDATE link_lain SET `judul` = '$judul', `link` = '$link', `keterangan` = '$keterangan' WHERE `judul` like \"$getjudul\"");
	echo '<script>alert("Link Lain berhasil di Update");window.location = "../master.php?page=managelinklain";</script>';
}
elseif ($aksi == "hapuslinklain") {
	$conn->query("DELETE FROM link_lain WHERE judul like \"$getjudul\"");
	echo '<script>alert("Link Lain berhasil di Hapus");window.location = "../master.php?page=managelinklain";</script>';
}
elseif ($aksi == "tambahlinklain") {
	$judul = $_POST['judul'];
	$link = $_POST['link'];
	$keterangan= $_POST['keterangan'];
	$sql = "INSERT INTO `link_lain` (`judul`, `link`, `keterangan`) VALUES ('$judul', '$link', '$keterangan')";
	$conn->query($sql);
	echo '<script>alert("Link Lain berhasil di Tambah");window.location = "../master.php?page=managelinklain";</script>';
}
elseif($aksi == "tambahanggota") {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telephon'];

	$lokasifile = $_FILES['fuploud']['tmp_name'];
	$tipefile = $_FILES['fuploud']['type'];
	$namafile = $_FILES['fuploud']['name'];
	move_uploaded_file($lokasifile, '../foto/anggota/'.$namafile);

	$hobi = $_POST['hobi'];
	$biografi = $_POST['biografi'];
	$conn->query("INSERT INTO `anggota_si_c_2014` (`nim`, `nama`, `ttl`, `jk`, `alamat`, `no_telephon`, `foto`, `hobi`, `biografi`) VALUES ('$nim', '$nama', '$ttl', '$jk', '$alamat', '$telp', '$namafile', '$hobi', '$biografi')");
	echo '<script>alert("Anggota berhasil ditambahkan");window.location = "../master.php?page=manageanggota";</script>';
}
elseif($aksi == "updateanggota") {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telephon'];
	$hobi = $_POST['hobi'];
	$biografi = $_POST['biografi'];
	$sql = "UPDATE `anggota_si_c_2014` SET `nim` = '$nim', `ttl` = '$ttl', `jk` = '$jk', `alamat` = '$alamat', `no_telephon` = '$telp', `hobi` = '$hobi', `biografi` = '$biografi' WHERE `nim` = $getnim;";
	$conn->query($sql);
	echo '<script>alert("Anggota berhasil di Update");window.location = "../master.php?page=manageanggota";</script>';
}
elseif($aksi == "hapusanggota"){
	$conn->query("DELETE FROM `anggota_si_c_2014` WHERE nim = $getnim");
	echo '<script>alert("Anggota berhasil di Hapus");window.location = "../master.php?page=manageanggota";</script>';
}
?>
