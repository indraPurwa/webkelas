<h2 style="font-size: 14px;font-weight: bold;text-decoration: none;background: url('image/module-header-left-bg.gif') no-repeat scroll left top transparent; margin: 0;padding: 10px; margin-top: 10px; ">Manajemen Berita</h2>
<?php
@ $aksi = $_GET['aksi'];
@ $id = $_GET['id'];

if($aksi == "tampiledit") {
  $data = $conn->query("SELECT * FROM berita WHERE IdBerita = $id");
  $berita = $data->fetch_assoc();
  echo '<form action="administrator/aksi.php?aksi=updateberita&id='.$id.'" method="post" enctype="multipart/form-data">'
  .'<table class="table-modul" width="100%" cellspacing="0">'
    .'<tr>'
      .'<td width="15%">Judul</td>'
      .'<td align="center" width="5%">:</td>'
      .'<td width="80%"><input type="text" name="judul" class="input-field" style="width: 100%; height:25px;" value="'.$berita['jdl_berita'].'"></td>'
    .'</tr>'
    .'<tr>'
      .'<td>Isi</td>'
      .'<td align="center">:</td>'
      .'<td><label>'
        .'<textarea name="isi" class="input-textfield" cols="45" rows="5" style="width: 100%;">'.$berita['isi_berita'].'</textarea>'
      .'</label></td>'
    .'</tr>'
    .'<tr>'
      .'<td>Foto</td>'
      .'<td align="center">:</td>'
      .'<td>foto : '.$berita['foto'].'</td>'
    .'</tr>'
    .'<tr>'
      .'<td colspan="3"><label>'
        .'<input type="submit" name="simpan" class="button" value="Simpan"></label>'
        .'</form>'
        .'<a href="javascript: history.back()"><input type="button" name="batal" class="button" value="Batal"></a>'
      .'</td>'
      .'</tr>'
  .'</table>'
  ;
}
else {
  echo '<table width="100%" cellpadding="0" cellspacing="0">'
        .'<thead>'
          .'<tr>'
            .'<th>Judul</th>'
            .'<th>Tanggal</th>'
            .'<th>Pembuat</th>'
            .'<th>Aksi</th>'
          .'</tr>'
        .'</thead>'
        .'<tbody>';
  $data = $conn->query("SELECT * FROM berita");
  while($berita = $data->fetch_assoc()) {
    $iduser = $berita['createduser'];
    $createduser = $conn->query("SELECT nama from tuser WHERE IdUser = $iduser");
    $createduser = $createduser->fetch_assoc();
    echo '<tr>'
            .'<td>'.$berita['jdl_berita'].'</td>'
            .'<td>'.$berita['tgl_berita'].'</td>'
            .'<td>'.$createduser['nama'].'</td>'
            .'<td><a href="?page=manageberita&aksi=tampiledit&id='.$berita['IdBerita'].'"><button type="button">Edit</button></a>'
            .'<a href="administrator/aksi.php?aksi=hapusberita&id='.$berita['IdBerita'].'"><button type="button">Hapus</button></a></td>'
          .'</tr>';
  }
  echo '</tbody>'
      .'</table>';
}
?>
