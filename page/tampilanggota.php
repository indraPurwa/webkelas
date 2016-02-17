<?php
@ $nim = $_GET['nim'];
$berita = $conn->query("SELECT * FROM `anggota_si_c_2014` WHERE nim = $nim");
$data = $berita->fetch_assoc();
?>
<div class="list-header"><h1><?php echo $data['nama']; ?></h1></div>
<div class="image"><img src="foto/anggota/<?php echo $data['foto'];?>" style="height: 400px;left: 30px;width: 350px;"></div>
<div id="artikel">
  <h2>Profil Lengkap <?php echo $data['nama'];?></h2>
  <table width="100%" cellspacing="0">
    <tbody>
      <tr>
        <td width="15%">NIM</td>
        <td align="center" width="5%">:</td>
        <td width="80%"><?php echo $data['nim'];?></td>
      </tr>
      <tr>
        <td width="15%">Nama</td>
        <td align="center" width="5%">:</td>
        <td width="80%"><?php echo $data['nama'];?></td>
      </tr>
      <tr>
        <td>TTL</td>
        <td align="center">:</td>
        <td><?php echo $data['ttl'];?></td>
      </tr>
      <tr>
        <td width="15%">Jenis Kelamin</td>
        <td align="center" width="5%">:</td>
        <td width="80%"><?php echo $data['jk'];?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td align="center">:</td>
        <td><?php echo $data['alamat'];?></td>
      </tr>
      <tr>
        <td width="15%">Telephon</td>
        <td align="center" width="5%">:</td>
        <td width="80%"><?php echo $data['no_telephon'];?></td>
      </tr>
      <tr>
        <td width="15%">Hobi</td>
        <td align="center" width="5%">:</td>
        <td width="80%"><?php echo $data['hobi'];?></td>
      </tr>
      <tr>
        <td>Biografi</td>
        <td align="center">:</td>
        <td><?php echo $data['biografi'];?></td>
      </tr>
    </tbody>
  </table>
</div>
