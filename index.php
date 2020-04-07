<?php
include 'aset/header.php';
include 'koneksi.php';

$sql = "SELECT * FROM siswa";

$res = mysqli_query($koneksi, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
  $pinjam[] = $data;
}

?>
<style>
thead{
  background-color: #222831;
  color: white;
}
tbody{
  background-color: #414854;
  color: white;
}
</style>
<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      <div class="card bg-dark">
        <div class="card-header">
          <h2 class="card-title text-white"><i class="fas fa-edit"></i>Tabel Nilai Siswa</h2>
        </div>
        <div class="card-body">
          <table class="table table-striped col-12">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Kelas</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nilai Web</th>
                <th scope="col">Nilai PBO</th>
                <th scope="col">Nilai Basdat</th>
                <th scope="col">Nilai Desain</th>
                <th scope="col">Nilai ProgDas</th>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($pinjam as $p ) { ?>
                <tr>
                  <th scope="row"><?= $no ?></th>
                    <td><?= $p['nis'] ?></th>
                    <td><?= $p['nama'] ?></td>
                    <td><?= $p['jurusan'] ?></td>
                    <td><?= $p['kelas'] ?></td>
                    <td><?= $p['alamat'] ?></td>
                    <td><?= $p['WEB'] ?></td>
                    <td><?= $p['PBO'] ?></td>
                    <td><?= $p['Basdat'] ?></td>
                    <td><?= $p['Desain'] ?></td>
                    <td><?= $p['Progdas'] ?></td>
                  </tr>
                  <?php
                  $no++;
                }
                ?>
              </tbody>
            </table>
            <a href="proses/form-tambah.php"><button type="submit" class="btn btn-success" >Isi Data</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
  include 'aset/footer.php';
  ?>
