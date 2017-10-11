<h2 style="font-size: 14px;font-weight: bold;text-decoration: none;background: url('image/module-header-left-bg.gif') no-repeat scroll left top transparent; margin: 0;padding: 10px; margin-top: 10px; ">
<span>Tambah Anggota</span>
</h2>
<form action="administrator/aksi.php?aksi=tambahanggota" method="post" enctype="multipart/form-data">
<table class="table-modul" width="100%" cellspacing="0">
  <tr>
    <td width="15%">NIM</td>
    <td align="center" width="5%">:</td>
    <td width="80%"><input type="text" name="nim" class="input-field" style="width: 100%; height:25px;"></td>
  </tr>
  <tr>
    <td width="15%">Nama</td>
    <td align="center" width="5%">:</td>
    <td width="80%"><input type="text" name="nama" class="input-field" style="width: 100%; height:25px;"></td>
  </tr>
  <tr>
    <td>TTL</td>
    <td align="center">:</td>
    <td><input type="text" name="ttl" class="input-field" style="width: 100%; height:25px;"></td>
  </tr>
  <tr>
    <td width="15%">Jenis Kelamin</td>
    <td align="center" width="5%">:</td>
    <td width="80%"><input type="text" name="jk" class="input-field" style="width: 100%; height:25px;"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td align="center">:</td>
    <td><textarea name="alamat" class="input-textfield" cols="45" rows="5" style="width: 100%;"></textarea></td>
  </tr>
  <tr>
    <td width="15%">Telephon</td>
    <td align="center" width="5%">:</td>
    <td width="80%"><input type="text" name="telephon" class="input-field" style="width: 100%; height:25px;"></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td align="center">:</td>
    <td><input type="file" name="fuploud" id="fuploud" accept="image/*"></td>
  </tr>
  <tr>
    <td width="15%">Hobi</td>
    <td align="center" width="5%">:</td>
    <td width="80%"><input type="text" name="hobi" class="input-field" style="width: 100%; height:25px;"></td>
  </tr>
  <tr>
    <td>Biografi</td>
    <td align="center">:</td>
    <td><textarea name="biografi" class="input-textfield" cols="45" rows="5" style="width: 100%;"></textarea></td>
  </tr>
  <tr>
    <td colspan="3">
      <input type="submit" name="simpan" class="button" value="Simpan">
      <a href="javascript: history.back()"><input type="button" name="batal" class="button" value="Batal"></a>
    </td>
  </tr>
</table>
</form>
