<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>RentMob Register</h3>
                            </a>
                           <form action="" method="post">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number"name="nik" class="form-control" id="floatingText" placeholder="">
                            <label for="floatingText">NIK</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="usn" class="form-control" id="floatingText" placeholder="">
                            <label for="floatingText">Username</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="pw" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="nm"class="form-control" id="floatingText" placeholder="">
                            <label for="floatingText">Nama Lengkap</label>
                        </div>
                        <div class="form-group">
                            <select name="jk" class="form-select form-select-lg mb-3 " required>
                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="telp" class="form-control" id="floatingText" placeholder="">
                            <label for="floatingText">No. Telepon</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="alm" class="form-control" id="floatingText" placeholder="">
                            <label for="floatingText">Alamat</label>
                        </div>
                        <input type="submit" name="submit"class="btn btn-primary py-3 w-100 mb-4"value="Daftar">
                        </form>
                        <p class="text-center mb-0">dah ada akun nih? <a href="login.php">Login</a></p>
                       
                        <?php
 
if (isset($_POST['submit'])) {
    $nik = $_POST['nik'];
    $usn = $_POST['usn'];
    $pw = $_POST['pw'];
    $nm = $_POST['nm'];
    $jk = $_POST['jk'];
    $telp = $_POST['telp'];
    $alm = $_POST['alm'];

    include "koneksi.php";


 

  // Siapkan statement
  $stmt = $koneksi->prepare("INSERT INTO tb_member VALUES (?, ?, ?, ?, ?, ?, ?)");
  
  // Bind parameter dengan tipe data yang sesuai
  $stmt->bind_param("sssssss", $nik, $nm, $jk, $telp, $alm, $usn, $pw);
  
  // Eksekusi statement
  $stmt->execute();

  if ($stmt->affected_rows > 0) {
      echo "<script>alert('Sukses menambahkan User.'); location.href='login.php';</script>";
  } else {
      echo "<script>alert('Gagal menambahkan.'); location.href='login.php';</script>";
  }

  // Tutup statement
  $stmt->close();
}
?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>