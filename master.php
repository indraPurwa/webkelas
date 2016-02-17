<?php ob_start(); ?>
<!doctype html>
<head>
  <?php
  session_start();
  	@ $page = $_GET['page'];
	if($page == "")
	  $page = "uinrafah";
  ?>
  <meta charset="utf-8">
  <title>sistem informasi</title>
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="style/menu.css">
  <link rel="shortcut icon" href="image/favicon.png">
  <style>
  <?php
    if($page == "uinrafah")
		include "style/uinrafah.css";
	else if($page == "sic" or $page == "tampilanggota")
		 include "style/sic2014.css";
	else if ($page == "berita")
		include "style/berita.css";
	else if ($page == "kegiatan")
		include "style/berita.css";
	else if($page == "pengumuman")
		include "style/pengumuman.css";
  else
    include "style/manage.css";
  ?>
  </style>
</head>

<body>
<div id="container">
  <header></header>
  <nav>
    <div id="garis"></div>
    <ul id="menu">
 	  <?php include "menu_nav.php"; ?>
    </ul>
  </nav>
  <section id="content">
    <aside id="left">
      <?php
	    if($page == "uinrafah")
			include "page/uinrafah.php";
		else if($page == "sic")
			 include "page/sic2014.php";
		elseif ($page == "berita")
			include "page/berita.php";
		elseif ($page == "kegiatan")
			include "page/kegiatan.php";
    elseif($page == "tampilanggota")
      include "page/tampilanggota.php";

		if(cek_session('username')) {
			if($page == "pengumuman")
				include "page/pengumuman.php";

			elseif($page == "chatting")
				include "memberarea/chatting.php";
			elseif($page == "tambahberita")
				include "memberarea/tambahberita.php";
			elseif($page == "tambahkegiatan")
				include "memberarea/tambahkegiatan.php";
			elseif($page == "tambahpengumuman")
				include "memberarea/tambahpengumuman.php";
      elseif ($page == "tambahuser")
        include "administrator/tambahuser.php";
      elseif ($page == "tambahlinklain")
        include "administrator/tambahlinklain.php";
      elseif($page == "tambahanggota")
        include "administrator/tambahanggota.php";

      elseif ($page == "manageberita")
        include "administrator/manageberita.php";
      elseif ($page == "managekegiatan")
        include "administrator/managekegiatan.php";
      elseif ($page == "managepengumuman")
        include "administrator/managepengumuman.php";
      elseif ($page == "manageuser")
        include "administrator/manageuser.php";
      elseif ($page == "managelinklain")
        include "administrator/managelinklain.php";
      elseif($page == "manageanggota")
        include "administrator/manageanggota.php";

		}
		if(!cek_session('username') and $page = ""){
			echo '<p>Anda belum login atau halaman yang anda klik salah. Silahkan login terlebih dahulu jika anda adalah anggota atau administrator</p>';
		}
	  ?>
	</aside>
    <aside id="right">
      <div id="form_login">
        <?php include "proses_login.php"; ?>
      </div>
      <div id="news">
        <div class="cont_header"><span>Berita Terbaru</span></div>
        <ul class="widget-content">
        <?php
          $data = $conn->query("SELECT * from berita ORDER BY IdBerita DESC LIMIT 3");
          while ($berita = $data->fetch_assoc()) {
            echo '<li><a href="?page=berita&aksi=tampil_berita&id='.$berita['IdBerita'].'">'.$berita['jdl_berita'].'</a> ('.$berita['tgl_berita'].')</li>';
          }
        ?>
      </ul>
      </div>
      <div id="link_partner">
        <div class="cont_header"><span>Link Lain</span></div>
        <ul class="widget-content">
        <?php
          $data = $conn->query("SELECT * from link_lain LIMIT 3");
          while ($link = $data->fetch_assoc()) {
            echo '<li><a href="'.$link['link'].'">'.$link['judul'].'</a> ('.$link['keterangan'].')</li>';
          }
        ?>
      </ul>
      </div>
    </aside>
  </section>
  <footer>
    <div id="copyright">Copyright &copy; 2015 by: InCepers <br>Alright Reserved</div>
  </footer>
</div>

</body>
</html>
<?php ob_flush(); ?>
