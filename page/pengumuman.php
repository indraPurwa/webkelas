<?php
@ $pagination = $_GET['pagination'];
@ $id = $_GET['id'];
if($id == "" ) {
  $data = $conn->query("SELECT * FROM pengumuman ORDER BY id_pengumuman DESC LIMIT 1");
  $data = $data->fetch_assoc();
}
else {
  $data = $conn->query("SELECT * FROM pengumuman WHERE id_pengumuman = $id");
  $data = $data->fetch_assoc();
}
$iduser = $data['createduser'];
$createduser = $conn->query("SELECT nama from tuser WHERE IdUser = $iduser");
$createduser = $createduser->fetch_assoc();
echo '<div class="list">'
      .'<div class="list-header"><h1>'.$data['jdl_pengumuman'].'</h1></div>'
      .'<div style="border: 1px solid black;box-sizing: border-box;" class="tombol">'
        .'<span> ID : '.$data['id_pengumuman'].', Tanggal Pos : '.$data['tgl_pengumuman'].', Posted by : '.$createduser['nama'].'</span>'
      .'</div>'
      .'<div id="pengumuman">'
        .$data['isi_pengumuman']
      .'</div>'
      .'<div style="border: 1px solid black;box-sizing: border-box;height: 40px;" class="tombol"></div>'
    .'</div>';
$idpengumuman = $data['id_pengumuman'];
?>
<div class="list pengumuman-lain">
  <h1>Pengumuman Lain</h1><br>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Tanggal Pengumuman</th>
        <th>Perihal</th>
      </tr>
    </thead>
    <tbody>
<?php
if($pagination == "")
  $pagination = 0;
$berita_per_hal= 3;
$tmp_jml_baris = $conn->query("SELECT * FROM pengumuman");
$jml_baris = $tmp_jml_baris->num_rows;
$jml_page = ceil($jml_baris / $berita_per_hal);
$mulai_berita = $pagination * $berita_per_hal;

$pengumuman = $conn->query("SELECT * FROM pengumuman ORDER BY id_pengumuman DESC LIMIT $mulai_berita, $berita_per_hal");
while ($data = $pengumuman->fetch_assoc() ) {
      echo '<tr>'
            .'<td><a href="?page=pengumuman&id='.$data['id_pengumuman'].'">'.$data['id_pengumuman'].'</a></td>'
            .'<td><a href="?page=pengumuman&id='.$data['id_pengumuman'].'">'.$data['tgl_pengumuman'].'</a></td>'
            .'<td><a href="?page=pengumuman&id='.$data['id_pengumuman'].'">'.$data['jdl_pengumuman'].'</a></td>'
          .'</tr>';
}
if($jml_page == 1)
  echo '<tr><td colspan="3">Page 1</td></tr>';
elseif($jml_page > 1) {
  echo '<tr><td colspan="3">Page ';
  for($a = 0; $a < $jml_page; $a++) {
    echo '<a href="?page=pengumuman&pagination='.$a.'">'.$a.'</a> ';
  }
  echo '</td></tr>';
}
?>
    </tbody>
   </table>
 </div>
