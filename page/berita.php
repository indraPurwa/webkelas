<?php
@ $pagination = $_GET['pagination'];
@ $aksi = $_GET['aksi'];
@ $id = $_GET['id'];
if($aksi == "tampil_berita" and $id != "") {
	$berita = $conn->query("SELECT * FROM berita WHERE IdBerita = $id");
	$data = $berita->fetch_assoc();

	$iduser = $data['createduser'];
	$createduser = $conn->query("SELECT nama from tuser WHERE IdUser = $iduser");
	$createduser = $createduser->fetch_assoc();
	echo '<div class="berita">'
					.'<div class="berita-header"><h1>'.$data['jdl_berita'].'</h1></div>'
					.'<div class="info">'.$data['tgl_berita'].' Posted by: '.$createduser['nama'].'</div>'
					.'<div class="image"><img src="foto/berita/'.$data['foto'].'" width="200px" height="200px"></div>'
					.'<div class="artikel">'
					.'<p>'.$data['isi_berita'].'</p>.'
					.'</div>'
			.'</div>';
}
else {
	if($pagination == "")
		$pagination = 0;
	$berita_per_hal= 3;
	$tmp_jml_baris = $conn->query("SELECT * FROM berita;");
	$jml_baris = $tmp_jml_baris->num_rows;
	$jml_page = ceil($jml_baris / $berita_per_hal);
	$mulai_berita = $pagination * $berita_per_hal;

	$berita = $conn->query("SELECT * FROM berita ORDER BY IdBerita DESC LIMIT $mulai_berita, $berita_per_hal;");
	while ($data = $berita->fetch_assoc() ) {
		$data['jdl_berita'] =  stripslashes($data['jdl_berita']);

		$data['isi_berita'] = str_replace("\n", "<br>", $data['isi_berita']);
		$cuplikan = array();
		$pecahan_kata = explode(" ", $data['isi_berita']);
		for($a=0; $a<10; $a++)
			@ $cuplikan[$a] = $pecahan_kata[$a];
		$cuplikan = implode(" ", $cuplikan);

		$iduser = $data['createduser'];
		$createduser = $conn->query("SELECT nama from tuser WHERE IdUser = $iduser");
		$createduser = $createduser->fetch_assoc();
		echo '<div class="list">'
				    .'<div class="list-header"><h1><a class="id_berita" href="?page=berita&aksi=tampil_berita&id='.$data['IdBerita'].'">'.$data['jdl_berita'].'</a></h1></div>'
				    .'<div class="image"><img src="foto/berita/'.$data['foto'].'" width="200px" height="200px"></div>'
				    .'<div class="artikel">'
						.'<div>'.$data['tgl_berita'].' Posted by: '.$createduser['nama'].'</div>'
				    .'<p>'.$cuplikan.' <a href="?page=berita&aksi=tampil_berita&id='.$data['IdBerita'].'">selanjutnya</a></p>.'
				    .'</div>'
				.'</div>';
	}
	if($jml_page == 1)
		echo '<div class="pagination">Page 1</div>';
	elseif($jml_page > 1) {
		echo '<div class="pagination">Page ';
		for($a = 0; $a < $jml_page; $a++) {
			echo '<a href="?page=berita&pagination='.$a.'">'.$a.'</a> ';
		}
		echo '</div>';
	}
}
?>
