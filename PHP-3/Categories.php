<html>
  <head>
    <title>categories</title>  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  </head>
  <body>
    
    <?php
    // koneksi ke database
    require_once 'koneksi.php';

    // fungsi untuk insert data ke tabel categories
    if (isset($_POST['submit'])) {
      $name = $_POST['name'];

      $insert = "INSERT INTO categories (name) VALUES ('$name')";

      if (mysqli_query($conn, $insert)) {
        echo "Data berhasil ditambahkan";
        header('location: categories.php');
      } else {
        echo "Gagal menambahkan data: " . mysqli_error($conn);
      }
    }

    // fungsi untuk delete data dari tabel categories
    if (isset($_GET['delete_id'])) {
      $id = $_GET['delete_id'];

      $delete = "DELETE FROM categories WHERE id = '$id'";

      if (mysqli_query($conn, $delete)) {
        echo "Data berhasil dihapus";
        header('location: read.php');
      } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
      }
    }

    // query untuk menampilkan data
    $query = "SELECT * FROM categories";

    // eksekusi query
    $result = mysqli_query($conn, $query);
    ?>

    <!-- Tambahkan form untuk menambahkan data baru -->
    <form action="" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
        <button type="submit" name="submit" class="btn btn-primary">Tambahkan Data</button>
      </div>
    </form>

    <h1>CATEGORIES</h1>

    <hr>

    <!-- Tampilkan Data -->
    <table id="myTable">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Created_at</th>
          <th>Updated_at</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?= $row['id'] ?></td>  
            <td><?= $row['name'] ?></td>
            <td><?= $row['created_at'] ?></td>
            <td><?= $row['updated_at'] ?></td>
            <td>
              <a href="read.php?delete_id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <!-- Inisialisasi DataTables -->
    <script>
      $(document).ready( function () {
        $('#myTable').DataTable();
      });
    </script>

  </body>
</html>
