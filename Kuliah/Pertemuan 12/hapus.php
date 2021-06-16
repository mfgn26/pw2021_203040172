<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari URL
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
          </script>";
} else {
  echo "data gagal ditambahkan";
}
