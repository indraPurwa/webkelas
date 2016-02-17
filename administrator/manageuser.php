<h2 style="font-size: 14px;font-weight: bold;text-decoration: none;background: url('image/module-header-left-bg.gif') no-repeat scroll left top transparent; margin: 0;padding: 10px; margin-top: 10px; ">Manajemen User</h2>
<?php
@ $aksi = $_GET['aksi'];
@ $id = $_GET['id'];

if($aksi == "tampiledit") {
  $data = $conn->query("SELECT * FROM tuser WHERE IdUser = $id");
  $user = $data->fetch_assoc();
  echo '<form action="administrator/aksi.php?aksi=updateuser&id='.$user['IdUser'].'" method="post" enctype="multipart/form-data">'
  .'<table class="table-modul" width="100%" cellspacing="0">'
    .'<tr>'
      .'<td width="15%">ID user</td>'
      .'<td align="center" width="5%">:</td>'
      .'<td width="80%"><input type="text" disabled name="iduser" class="input-field" style="width: 100%; height:25px;" value="'.$user['IdUser'].'"></td>'
    .'</tr>'
    .'<tr>'
      .'<td width="15%">Nama</td>'
      .'<td align="center" width="5%">:</td>'
      .'<td width="80%"><input type="text" name="nama" class="input-field" style="width: 100%; height:25px;" value="'.$user['nama'].'"></td>'
    .'</tr>'
    .'<tr>'
      .'<td>Alamat</td>'
      .'<td align="center">:</td>'
      .'<td><textarea name="alamat" class="input-textfield" cols="45" rows="5" style="width: 100%;">'.$user['alamat'].'</textarea></td>'
    .'</tr>'
    .'<tr>'
      .'<td width="15%">Telepon</td>'
      .'<td align="center" width="5%">:</td>'
      .'<td width="80%"><input type="text" name="telepon" class="input-field" style="width: 100%; height:25px;" value="'.$user['telepon'].'"></td>'
    .'</tr>'
    .'<tr>'
      .'<td>Username</td>'
      .'<td align="center">:</td>'
      .'<td><input type="text" name="username" class="input-field" style="width: 100%; height:25px;" value="'.$user['username'].'"></td>'
    .'</tr>'
    .'<tr>'
      .'<td width="15%">Password</td>'
      .'<td align="center" width="5%">:</td>'
      .'<td width="80%"><input type="text" name="password" class="input-field" style="width: 100%; height:25px;" value="'.$user['password'].'"></td>'
    .'</tr>'
    .'<tr>'
      .'<td width="15%">Level</td>'
      .'<td align="center" width="5%">:</td>'
      .'<td width="80%"><input type="radio" name="level" value="1">Administrator <input type="radio" name="level" value="2">Anggota<br> *) wajib diisi</td>'
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
  echo '<a href="master.php?page=tambahuser"><button type="button" name="batal">Tambah User</button></a>';
  echo '<table width="100%" cellpadding="0" cellspacing="0">'
        .'<thead>'
          .'<tr>'
            .'<th>ID User</th>'
            .'<th>Nama</th>'
            .'<th>Username</th>'
            .'<th>Level</th>'
            .'<th>Aksi</th>'
          .'</tr>'
        .'</thead>'
        .'<tbody>';
  $data = $conn->query("SELECT * FROM tuser");
  while($user = $data->fetch_assoc()) {
    if($user['level'] == 1)
      $leveluser = "Administrator";
    elseif ($user['level'] == 2) {
      $leveluser = "Anggota";
    }
    echo '<tr>'
            .'<td>'.$user['IdUser'].'</td>'
            .'<td>'.$user['nama'].'</td>'
            .'<td>'.$user['username'].'</td>'
            .'<td>'.$leveluser.'</td>'
            .'<td><a href="?page=manageuser&aksi=tampiledit&id='.$user['IdUser'].'"><button type="button">Edit</button></a>'
            .'<a href="administrator/aksi.php?aksi=hapususer&id='.$user['IdUser'].'"><button type="button">Hapus</button></a></td>'
          .'</tr>';
  }
  echo '</tbody>'
      .'</table>';
}
?>
