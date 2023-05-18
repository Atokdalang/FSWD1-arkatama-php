<html>
  <head>
    <title>Products</title>  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  </head>
  <body>
    
    <?php
    // koneksi ke database
    require_once 'koneksi.php';

    // fungsi untuk insert data ke tabel products
    if (isset($_POST['addProducts'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $status = $_POST['status'];
      
        $insert = "INSERT INTO Products (name, description, price, status) VALUES ('$name', '$description', '$price', '$status')";
      
        if (mysqli_query($conn, $insert)) {
            header('location: Products.php');
            exit;
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($conn);
        }
    }    

    // fungsi untuk delete data dari tabel products
    if (isset($_GET['delete_id'])) {
      $id = $_GET['delete_id'];

      $delete = "DELETE FROM Products WHERE id = '$id'";

      if (mysqli_query($conn, $delete)) {
        header('location: Products.php');
        exit;
      } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
      }
    }

    // query untuk menampilkan data
    $query = "SELECT * FROM Products";

    // eksekusi query
    $result = mysqli_query($conn, $query);
    ?>

    <!-- Tambahkan form untuk menambahkan data baru -->
    <form action="Products.php" method="post">
    <div class="modal-body">
        <br>
        <input type="text" name="name" placeholder="Name" class="form-control" required>
        <input type="text" name="description" placeholder="Description" class="form-control" required>
        <input type="text" name="price" placeholder="Price" class="form-control" required>
        <br>
        <select class="form-select" aria-label="Default select example" name="status" required>
            <option disabled selected>Select Status</option>
            <option value="accepted">accepted</option>
            <option value="waiting">waiting</option>
            <option value="rejected">rejected</option>
        </select>
        <br>
        <button type="submit" class="btn btn-primary" name="addProducts">Submit</button>
    </div>
</form>


    <h1>PRODUCTS</h1>

    <hr>

    <!-- Tampilkan Data -->
    <table id="myTable">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th
>
          <th>Category_id</th>
          <th>Description</th>
          <th>Price</th>
          <th>Status</th>
          <th>Created_at</th>
          <th>Updated_at</th>
          <th>Created_by</th>
          <th>Verified_at</th>
          <th>Verified_by</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['category_id'] ?></td>
            <td><?= $row['description'] ?></td>
            <td><?= $row['price'] ?></td>
            <td><?= $row['status'] ?></td>
            <td><?= $row['created_at'] ?></td>
            <td><?= $row['updated_at'] ?></td>
            <td><?= $row['created_by'] ?></td>
            <td><?= $row['verified_at'] ?></td>
            <td><?= $row['verified_by'] ?></td>
            <td>
              <a href="products.php?delete_id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
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
