<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container pt-5">
      <h2>Data Table Siswa</h2>
      <table class="table border mt-3">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">No. HP</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <?php
          include "koneksi.php";

          $no = 1;          
          $query = "select * from siswa";
          $get_data = mysqli_query($conn, $query);

          while($result = mysqli_fetch_array($get_data)){
            $id_siswa = $result['id_siswa'];
            ?>
        <tbody>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $result['nama_siswa'] ?></td>
            <td><?php echo $result['jenis_kelamin'] ?></td>
            <td><?php echo $result['nomor_hp'] ?></td>
            <td><?php echo $result['email_siswa'] ?></td>
            <td><?php echo $result['alamat_siswa'] ?></td>
            <td>
              <a href="edit.php?edit=<?php echo $id_siswa ?>" type="button" class="btn btn-success btn-sm">Edit</a>
              <a href="hapus.php?hapus=<?php echo $id_siswa ?>" type="button" class="btn btn-danger btn-sm" onclick ="return confirm('Apakah anda yakin menghapus data <?php echo $result['nama_siswa'] ?> ?')">Hapus</a></td>
          </tr>
        </tbody>
        <?php
      }
      ?>
      </table>

      <a href="create.php" class="btn btn-primary">Create Data</a>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
