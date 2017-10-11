<h2 style="font-size: 14px;font-weight: bold;text-decoration: none;background: url('image/module-header-left-bg.gif') no-repeat scroll left top transparent; margin: 0;padding: 10px; margin-top: 10px; ">Manajemen Link Lain</h2>
<?php
@ $aksi = $_GET['aksi'];
@ $judul = $_GET['judul'];

if($aksi == "tampiledit") {
  $data = $conn->query("SELECT * FROM link_lain WHERE judul LIKE \"$judul\"");
  $linkLain = $data->fetch_assoc();
  echo '<form action="administrator/aksi.php?aksi=updatelinklain&judul='.$judul.'" method="post">'
  .'<table class="table-modul" width="100%" cellspacing="0">'
    .'<tr>'
      .'<td width="15%">Judul</td>'
      .'<td align="center" width="5%">:</td>'
      .'<td width="80%"><input type="text" name="judul" class="input-field" style="width: 100%; height:25px;" value="'.$linkLain['judul'].'"></td>'
    .'</tr>'
    .'<tr>'
      .'<td>Link</td>'
      .'<td align="center">:</td>'
      .'<td><textarea name="link" class="input-textfield" cols="45" rows="5" style="width: 100%;">'.$linkLain['link'].'</textarea></td>'
    .'</tr>'
    .'<tr>'
      .'<td>Keterangan</td>'
      .'<td align="center">:</td>'
      .'<td width="80%"><input type="text" name="judul" class="input-field" style="width: 100%; height:25px;" value="'.$linkLain['keterangan'].'"></td>'
    .'</tr>'
    .'<tr>'
      .'<td colspan="3">'
        .'<input type="submit" name="simpan" class="button" value="Simpan">'
        .'</form>'
        .'<a href="javascript: history.back()"><input type="button" name="batal" class="button" value="Batal"></a>'
      .'</td>'
      .'</tr>'
  .'</table>'
  ;
}
else {
  echo '<a href="?page=tambahlinklain"><button type="button">Tambah Link Lain</button></a>';
  echo '<table width="100%" cellpadding="0" cellspacing="0">'
        .'<thead>'
          .'<tr>'
            .'<th>Judul</th>'
            .'<th>Link</th>'
            .'<th>Keterangan</th>'
            .'<th>Aksi</th>'
          .'</tr>'
        .'</thead>'
        .'<tbody>';
  $data = $conn->query("SELECT * FROM link_lain");
  while($linkLain = $data->fetch_assoc()) {
    echo '<tr>'
            .'<td>'.$linkLain['judul'].'</td>'
            .'<td>'.$linkLain['link'].'</td>'
            .'<td>'.$linkLain['keterangan'].'</td>'
            .'<td><a href="?page=managelinklain&aksi=tampiledit&judul='.$linkLain['judul'].'"><button type="button">Edit</button></a>'
            .'<a href="administrator/aksi.php?aksi=hapuslinklain&judul='.$linkLain['judul'].'"><button type="button">Hapus</button></a></td>'
          .'</tr>';
  }
  echo '</tbody>'
      .'</table>';
}
?>
