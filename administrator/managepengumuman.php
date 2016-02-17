<h2 style="font-size: 14px;font-weight: bold;text-decoration: none;background: url('image/module-header-left-bg.gif') no-repeat scroll left top transparent; margin: 0;padding: 10px; margin-top: 10px; ">Manajemen Kegiatan</h2>
<?php
@ $aksi = $_GET['aksi'];
@ $id = $_GET['id'];

if($aksi == "tampiledit") {
  $data = $conn->query("SELECT * FROM pengumuman WHERE id_pengumuman = $id");
  $pengumuman = $data->fetch_assoc();
  echo '<form action="administrator/aksi.php?aksi=updatepengumuman&id='.$id.'" method="post" enctype="multipart/form-data">'
  .'<table class="table-modul" width="100%" cellspacing="0">'
    .'<tr>'
      .'<td width="15%">Judul</td>'
      .'<td align="center" width="5%">:</td>'
      .'<td width="80%"><input type="text" name="judul" class="input-field" style="width: 100%; height:25px;" value="'.$pengumuman['jdl_pengumuman'].'"></td>'
    .'</tr>'
    .'<tr>'
      .'<td>Isi</td>'
      .'<td align="center">:</td>'
      .'<td><label>'
        .'<textarea name="isi" class="input-textfield" cols="45" rows="5" style="width: 100%;">'.$pengumuman['isi_pengumuman'].'</textarea>'
      .'</label></td>'
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
  $data = $conn->query("SELECT * FROM pengumuman");
  while($pengumuman = $data->fetch_assoc()) {
    $iduser = $pengumuman['createduser'];
    $createduser = $conn->query("SELECT nama from tuser WHERE IdUser = $iduser");
    $createduser = $createduser->fetch_assoc();
    echo '<tr>'
            .'<td>'.$pengumuman['jdl_pengumuman'].'</td>'
            .'<td>'.$pengumuman['tgl_pengumuman'].'</td>'
            .'<td>'.$createduser['nama'].'</td>'
            .'<td><a href="?page=managepengumuman&aksi=tampiledit&id='.$pengumuman['id_pengumuman'].'"><button type="button">Edit</button></a>'
            .'<a href="administrator/aksi.php?aksi=hapuskegiatan&id='.$pengumuman['id_pengumuman'].'"><button type="button">Hapus</button></a></td>'
          .'</tr>';
  }
  echo '</tbody>'
      .'</table>';
}
?>
