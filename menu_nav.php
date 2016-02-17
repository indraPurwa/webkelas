<li><a href="index.php">Home</a></li>
<li><a href="master.php?page=uinrafah">UIN RAFAH</a></li>
<li><a href="master.php?page=sic">SI C 2014</a></li>
<li><a href="master.php?page=berita">Berita</a></li>
<li><a href="master.php?page=kegiatan">Kegiatan</a></li>
<?php
require_once "konfigurasi.php";
require_once "functions.php";
if(cek_session('username')) {
	if($_SESSION["userlevel"] == "anggota") {
		echo '<li><a href="master.php?page=pengumuman">Pengumuman</a></li>'
			.'<li><a href="#">Member Area</a>'
			  .'<ul class="sub1">'
				.'<li><a href="#">Chatting</a></li>'
				.'<li><a href="?page=tambahberita">Tambah Berita</a></li>'
				.'<li><a href="?page=tambahkegiatan">Tambah Kegiatan</a></li>'
				.'<li><a href="?page=tambahpengumuman">Tambah Pengumuman</a></li>'
			  .'</ul>'
			.'</li>';
		}
    else if ($_SESSION["userlevel"] == "administrator") {
			echo '<li><a href="master.php?page=pengumuman">Pengumuman</a></li>'
				.'<li><a href="#">Member Area</a>'
				  .'<ul class="sub1">'
					.'<li><a href="#">Chatting</a></li>'
					.'<li><a href="?page=tambahberita">Tambah Berita</a></li>'
					.'<li><a href="?page=tambahkegiatan">Tambah Kegiatan</a></li>'
					.'<li><a href="?page=tambahpengumuman">Tambah Pengumuman</a></li>'
				  .'</ul>'
				.'</li>';
			echo '<li><a href="#">Administrator</a>'
					  .'<ul class="sub1">'
						  .'<li><a href="?page=manageberita">Manajemen Berita</a></li>'
						  .'<li><a href="?page=managekegiatan">Manajemen Kegiatan</a></li>'
						  .'<li><a href="?page=managepengumuman">Manajemen Pengumuman</a></li>'
						  .'<li><a href="?page=manageuser">Manajemen User</a></li>'
							.'<li><a href="?page=managelinklain">Manajemen Link Lain</a></li>'
							.'<li><a href="?page=manageanggota">Anggota SI C</a></li>'
					  .'</ul>'
				   .'</li>';
	}
}
?>
