<?php
session_start();

// Hapus session
unset($_SESSION['user']);
unset($_SESSION['lvl']);
unset($_SESSION['nama']);
unset($_SESSION['id_user'] );
      

// Redirect ke halaman login
header('Location: ../login.php');
exit;
?>