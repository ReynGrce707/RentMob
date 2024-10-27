<!DOCTYPE html>
<html lang="en">
<?php session_start()?>
<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="pet.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>RentMob</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"> <?php echo $_SESSION['user'];?> </h6>
                        <span><?php echo $_SESSION['lvl'];?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="pet.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="data_rental.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Data Rental</a>
                    <a href="hist.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i></a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Log-out</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Pembayaran</h6>
                        <?php
include "koneksi.php"; // Ensure this path is correct

// Get IDs from URL
$id_kembali = $_GET['id_kembali']; 
$id_transaksi = $_GET['id_transaksi']; 

// Fetch data based on the ID
$sql_kembali = "SELECT * FROM tb_kembali WHERE id_kembali = '$id_kembali'";
$result_kembali = $koneksi->query($sql_kembali);
$data_kembali = $result_kembali->fetch_assoc();

if (!$data_kembali) {
    die("Data tidak ditemukan!");
}

$sql_transaksi = "SELECT kekurangan, nopol, tgl_booking, downpayment FROM tb_transaksi WHERE id_transaksi = '$id_transaksi'";
$result_transaksi = $koneksi->query($sql_transaksi);
$data_transaksi = $result_transaksi->fetch_assoc();

if (!$data_transaksi) {
    die("Data transaksi tidak ditemukan!");
}

$kekurangan = $data_transaksi['kekurangan'];
$denda = $data_kembali['denda'];
$total = $kekurangan + $denda;
$tgl = date('Y-m-d');

// Process form submission
if (isset($_POST['submit'])) {
    $total_pembayaran = $_POST["total"];
    $status = $_POST["status"];

    // Insert into tb_bayar
    $sql_update = "INSERT INTO tb_bayar (id_kembali, tgl_bayar, total_bayar, status) 
                   VALUES ('$id_kembali', '$tgl', '$total_pembayaran', '$status')";

    if ($koneksi->query($sql_update) === TRUE) {
        echo "<script>alert('Sukses menambahkan.'); location.href='data_rental.php';</script>";
    } else {
        echo "Error saat menyimpan data: " . $koneksi->error;
    }
}
?>
<div class="form-group">
        <label for="nopol">Nomor Polisi</label>
        <input type="text" class="form-control" id="nopol" value="<?php echo $data_transaksi['nopol']; ?>" readonly>
    </div>
<br>
    <div class="form-group">
        <label for="tgl_booking">Tanggal Booking</label>
        <input type="date" class="form-control" id="tgl_booking" value="<?php echo $data_transaksi['tgl_booking']; ?>" readonly>
    </div>
<br>
    <div class="form-group">
        <label for="downpayment">Down Payment</label>
        <input type="number" class="form-control" id="downpayment" value="<?php echo $data_transaksi['downpayment']; ?>" readonly>
    </div>
<br>
<form class="forms-sample" method="post">    

    <div class="form-group">
        <label for="total">Total Pembayaran (Kekurangan + Denda)</label>
        <input type="number" class="form-control" id="total" name="total" value="<?php echo $total; ?>" readonly>
    </div>
<br>
    <div class="form-group">
        <label for="status">Status Pembayaran</label>
        <select name="status" class="form-control" id="status" required>
            <option value="lunas">Lunas</option>
            <option value="belum lunas">Belum Lunas</option>
        </select>
    </div>
<br>
    <button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
</form>
  </div>
                    </div>
                    
                    <div class="col-sm-12 col-xl-6">
                        
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        
                    </div>
                    
                    <div class="col-sm-12 col-xl-6">
                        
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        
                    </div>
                </div>
            </div>
            <!-- Form End -->
        

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/chart/chart.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>


</div></div></body>

</html>