<div class="list-header"><h1>Tentang SI C 2014</h1></div>
<div class="image"><img src="image/baju si c.jpg" width="400px" height="300px"></div>
<div class="image"><img src="image/logo si c.jpg" width="400px" height="260px"></div>
<div id="artikel">
<p>Ini adalah website resmi mahasiswa UIN RADEN FATAH kelas SI C tahun 2014. Situs ini ditujukan untuk memberikan informasi kepada mahasiswa-mahasiswi kelas SI C tentang kegiatan perkuliahan seperti jadwal perkeliahan, materi MK, tugas MK, jadwal UTS dan UAS dan file-file untuk mendukung pembelajaran MK tertentu. semoga situs ini bisa bermanfaat untuk kita semua.</p>
<p>Karena ini adalah situs pertama dari pembuat, jadi mungkin masih banyak kekurangan dalam design-nya ataupun isinya. Jadi dimohon kritik dan saran kepada para pengunjung situs ini, sehingga bisa diperbaiki agar menjadi lebih baik lagi.</p>

<div style="position:relative; float:right; right:0px; text-align:center;">
  Palembang, 03 Oktober 2015, ttd <br><br><br>Pengurus SI C 2014
</div>
<h2>Profil Anggota SI C 2014</h2>
<table>
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>NIM</th>
    </tr>
  </thead>
  <tbody>
<?php
@ $pagination = $_GET['pagination'];
if($pagination == "")
  $pagination = 0;
$berita_per_hal= 10;
$tmp_jml_baris = $conn->query("SELECT * FROM `anggota_si_c_2014`;");
if($tmp_jml_baris){
  $jml_baris = $tmp_jml_baris->num_rows;
  $jml_page = ceil($jml_baris / $berita_per_hal);
  $mulai_berita = $pagination * $berita_per_hal;

  $berita = $conn->query("SELECT * FROM `anggota_si_c_2014` LIMIT $mulai_berita, $berita_per_hal;");
  $a = 1;
  while ($data = $berita->fetch_assoc() ) {
    echo '<tr>'
        .'<th scope="row">'.$a.'</th>'
        .'<td><a href="?page=tampilanggota&nim='.$data['nim'].'">'.$data['nama'].'</a></td>'
        .'<td><a href="?page=tampilanggota&nim='.$data['nim'].'">'.$data['nim'].'</a></td>'
      .'</tr>';
      $a++;
  }
  if($jml_page == 1)
    echo '<td colspan="3" class="pagination">Page 1</td>';
  elseif($jml_page > 1) {
    echo '<td colspan="3" class="pagination">Page ';
    for($a = 0; $a < $jml_page; $a++)
      echo '<a href="?page=berita&pagination='.$a.'">'.$a.'</a> ';
    echo '</td';
  }
}
?>
  </tbody>
</table>
</div>
