<?php 
include 'koneksi.php';
if(isset($_GET['edit'])){
    $id_siswa = $_GET['edit'];
    $query = "select * from siswa where id_siswa = $id_siswa";
    $sql = mysqli_query($conn, $query);
    $result = mysqli_fetch_array($sql);
    $nama_siswa = $result['nama_siswa'];
    $jenis_kelamin = $result['jenis_kelamin'];
    $nomor_hp = $result['nomor_hp'];
    $email_siswa = $result['email_siswa'];
    $alamat_siswa = $result['alamat_siswa'];

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
      <h2>Edit Data Siswa</h2>
      <form method="POST" action="proses-edit.php" class="mt-3">
        <input type="hidden" name="id_siswa" value="<?php echo $id_siswa?>" >
        <div class="mb-3">
          <label for="nama_siswa" class="form-label">Nama Siswa</label>
          <input
            type="text"
            class="form-control"
            id="nama_siswa"
            placeholder="Budi"
            name="nama_siswa"
            value="<?php echo $nama_siswa ?>"
          />
        </div>
        <div class="mb-3 row">
          <label for="jenis_kelamin" class="col-sm-2 col-form-label"
          >Jenis Kelamin</label
          >
          <div>
            <select required class="form-select" id="jenis_kelamin" name="jenis_kelamin">
              <option <?php if($jenis_kelamin == "Laki-Laki"){ echo "selected";} ?> value="Laki-Laki">Laki-Laki</option>
              <option <?php if($jenis_kelamin == "Perempuan"){ echo "selected";} ?> value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="mb-3">
          <label for="nomor_hp" class="form-label">No. Hp</label>
          <input
            type="number"
            class="form-control"
            id="nomor_hp"
            placeholder="08888"
            name="nomor_hp"
            value="<?php echo $nomor_hp?>"
          />
        </div>
        <div class="mb-3">
          <label for="email_siswa" class="form-label">Email address</label>
          <input
            type="text"
            class="form-control"
            id="email_siswa"
            aria-describedby="emailHelp"
            placeholder="example@co.com"
            name="email_siswa"
            value="<?php echo $email_siswa?>"
          />
          <div id="emailHelp" class="form-text">
            We'll never share your email with anyone else.
          </div>
        </div>
        <div class="mb-3">
          <label for="alamat_siswa" class="form-label"
            >Alamat</label
          >
          <textarea
            class="form-control"
            id="alamat_siswa"
            rows="3"
            name="alamat_siswa"
            placeholder="Jl. Pahlawan 12X"
          ><?php echo $alamat_siswa ?></textarea>
        </div>
        <input type="submit" class="btn btn-primary" name="edit" value="Edit Data"></input>
        <a href="index.php" class="btn btn-danger">Cancel</a>

      </form>

      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"
      ></script>
    </div>
  </body>
</html>
