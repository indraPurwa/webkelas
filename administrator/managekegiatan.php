<h2 style="font-size: 14px;font-weight: bold;text-decoration: none;background: url('image/module-header-left-bg.gif') no-repeat scroll left top transparent; margin: 0;padding: 10px; margin-top: 10px; ">Manajemen Kegiatan</h2>
<?php
@ $aksi = $_GET['aksi'];
@ $id = $_GET['id'];

if($aksi == "tampiledit") {
  $data = $conn->query("SELECT * FROM Kegiatan WHERE Id_kegiatan = $id");
  $kegiatan = $data->fetch_assoc();
  echo '<form action="administrator/aksi.php?aksi=updatekegiatan&id='.$id.'" method="post" enctype="multipart/form-data">'
  .'<table class="table-modul" width="100%" cellspacing="0">'
    .'<tr>'
      .'<td width="15%">Judul</td>'
      .'<td align="center" width="5%">:</td>'
      .'<td width="80%"><input type="text" name="judul" class="input-field" style="width: 100%; height:25px;" value="'.$kegiatan['jdl_kegiatan'].'"></td>'
    .'</tr>'
    .'<tr>'
      .'<td>Isi</td>'
      .'<td align="center">:</td>'
      .'<td><label>'
        .'<textarea name="isi" class="input-textfield" cols="45" rows="5" style="width: 100%;">'.$kegiatan['isi_kegiatan'].'</textarea>'
      .'</label></td>'
    .'</tr>'
    .'<tr>'
      .'<td>Foto</td>'
      .'<td align="center">:</td>'
      .'<td>foto : '.$kegiatan['foto'].'</td>'
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
  $data = $conn->query("SELECT * FROM kegiatan");
  while($kegiatan = $data->fetch_assoc()) {
    $iduser = $kegiatan['createduser'];
    $createduser = $conn->query("SELECT nama from tuser WHERE IdUser = $iduser");
    $createduser = $createduser->fetch_assoc();
    echo '<tr>'
            .'<td>'.$kegiatan['jdl_kegiatan'].'</td>'
            .'<td>'.$kegiatan['tgl_kegiatan'].'</td>'
            .'<td>'.$createduser['nama'].'</td>'
            .'<td><a href="?page=managekegiatan&aksi=tampiledit&id='.$kegiatan['Id_kegiatan'].'"><button type="button">Edit</button></a>'
            .'<a href="administrator/aksi.php?aksi=hapuskegiatan&id='.$kegiatan['Id_kegiatan'].'"><button type="button">Hapus</button></a></td>'
          .'</tr>';
  }
  echo '</tbody>'
      .'</table>';
}
?>
