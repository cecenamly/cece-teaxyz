<?php

$host = "localhost";
$database = "db_travel";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengatur karakter set untuk koneksi
$conn->set_charset("utf8");