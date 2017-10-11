<h2 style="font-size: 14px;font-weight: bold;text-decoration: none;background: url('image/module-header-left-bg.gif') no-repeat scroll left top transparent; margin: 0;padding: 10px; margin-top: 10px; ">
<span>Tambah Berita</span>
</h2>
<form action="memberarea/aksi.php?aksi=tambahberita" method="post" enctype="multipart/form-data">
<table class="table-modul" width="100%" cellspacing="0">
  <tr>
    <td width="15%">Judul</td>
    <td align="center" width="5%">:</td>
    <td width="80%"><input type="text" name="judul" class="input-field" style="width: 100%; height:25px;"></td>
  </tr>
  <tr>
    <td>Isi</td>
    <td align="center">:</td>
    <td><textarea name="isi" class="input-textfield" cols="45" rows="5" style="width: 100%;"></textarea></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td align="center">:</td>
    <td><input type="file" name="fuploud" id="fuploud" accept="image/*"></td>
  </tr>
  <tr>
    <td colspan="3"><label>
      <input type="submit" name="simpan" class="button" value="Simpan">
      <input type="submit" name="batal" class="button" value="Batal">
    </label></td>
    </tr>
</table>
</form>
