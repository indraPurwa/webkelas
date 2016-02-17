<h2 style="font-size: 14px;font-weight: bold;text-decoration: none;background: url('image/module-header-left-bg.gif') no-repeat scroll left top transparent; margin: 0;padding: 10px; margin-top: 10px; ">Manajemen Anggota SI C 2014</h2>
<?php
@ $aksi = $_GET['aksi'];
@ $nim = $_GET['nim'];

if($aksi == "tampiledit") {
  $data = $conn->query("SELECT * FROM `anggota_si_c_2014` WHERE nim = $nim");
  $anggota = $data->fetch_assoc();
  echo '<form action="administrator/aksi.php?aksi=updateanggota&nim='.$anggota['nim'].'" method="post" enctype="multipart/form-data">'
  .'<table class="table-modul" width="100%" cellspacing="0">'
    .'<tr>'
      .'<td width="15%">NIM</td>'
      .'<td align="center" width="5%">:</td>'
      .'<td width="80%"><input type="text" name="nim" class="input-field" style="width: 100%; height:25px;" value="'.$anggota['nim'].'"></td>'
    .'</tr>'
    .'<tr>'
      .'<td width="15%">Nama</td>'
      .'<td align="center" width="5%">:</td>'
      .'<td width="80%"><input type="text" name="nama" class="input-field" style="width: 100%; height:25px;" value="'.$anggota['nama'].'"></td>'
    .'</tr>'
    .'<tr>'
      .'<td>TTL</td>'
      .'<td align="center">:</td>'
      .'<td><input type="text" name="ttl" class="input-field" style="width: 100%; height:25px;" value="'.$anggota['ttl'].'"></td>'
    .'</tr>'
    .'<tr>'
      .'<td width="15%">Jenis Kelamin</td>'
      .'<td align="center" width="5%">:</td>'
      .'<td width="80%"><input type="text" name="jk" class="input-field" style="width: 100%; height:25px;" value="'.$anggota['jk'].'"></td>'
    .'</tr>'
    .'<tr>'
      .'<td>Alamat</td>'
      .'<td align="center">:</td>'
      .'<td><textarea name="alamat" class="input-textfield" cols="45" rows="5" style="width: 100%;">'.$anggota['alamat'].'</textarea></td>'
    .'</tr>'
    .'<tr>'
      .'<td width="15%">Telephon</td>'
      .'<td align="center" width="5%">:</td>'
      .'<td width="80%"><input type="text" name="telephon" class="input-field" style="width: 100%; height:25px;" value="'.$anggota['no_telephon'].'"></td>'
    .'</tr>'
    .'<tr>'
      .'<td>Foto</td>'
      .'<td align="center">:</td>'
      .'<td>'.$anggota['foto'].'</td>'
    .'</tr>'
    .'<tr>'
      .'<td width="15%">Hobi</td>'
      .'<td align="center" width="5%">:</td>'
      .'<td width="80%"><input type="text" name="hobi" class="input-field" style="width: 100%; height:25px;" value="'.$anggota['hobi'].'"></td>'
    .'</tr>'
    .'<tr>'
      .'<td>Biografi</td>'
      .'<td align="center">:</td>'
      .'<td><textarea name="biografi" class="input-textfield" cols="45" rows="5" style="width: 100%;">'.$anggota['biografi'].'</textarea></td>'
    .'</tr>'
    .'<tr>'
      .'<td colspan="3">'
        .'<input type="submit" name="simpan" class="button" value="Simpan">'
        .'<a href="javascript: history.back()"><input type="button" name="batal" class="button" value="Batal"></a>'
      .'</td>'
      .'</tr>'
  .'</table>'
  .'</form>';
}
else {
  echo '<a href="master.php?page=tambahanggota"><button type="button" name="batal">Tambah Anggota</button></a>';
  echo '<table width="100%" cellpadding="0" cellspacing="0">'
        .'<thead>'
          .'<tr>'
            .'<th>NIM</th>'
            .'<th>Nama</th>'
            .'<th>Jenis Kelamin</th>'
            .'<th>No Telepon</th>'
            .'<th>Aksi</th>'
          .'</tr>'
        .'</thead>'
        .'<tbody>';
  $data = $conn->query("SELECT * FROM `anggota_si_c_2014`");
  while($anggota = $data->fetch_assoc()) {
    echo '<tr>'
            .'<td>'.$anggota['nim'].'</td>'
            .'<td>'.$anggota['nama'].'</td>'
            .'<td>'.$anggota['jk'].'</td>'
            .'<td>'.$anggota['no_telephon'].'</td>'
            .'<td><a href="?page=manageanggota&aksi=tampiledit&nim='.$anggota['nim'].'"><button type="button">Edit</button></a>'
            .'<a href="administrator/aksi.php?aksi=hapusanggota&nim='.$anggota['nim'].'"><button type="button">Hapus</button></a></td>'
          .'</tr>';
  }
  echo '</tbody>'
      .'</table>';
}
?>
