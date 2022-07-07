<?php
require 'functions.php';

header('Content-Type:text/xml');
$query = "SELECT * FROM smartphone";
$hasil = mysqli_query(
    $conn,
    $query
);

$jumField =
    mysqli_num_fields($hasil);

echo "<?xml version='1.0'?>";
echo "<data>";

while ($data =
    mysqli_fetch_array($hasil)
) {
    echo "<Daftar>";
    echo "<nama>", $data['nama'], "</nama>";
    echo "<merek>", $data['merek'], "</merek>";
    echo "<deskripsi>", $data['deskripsi'], "</deskripsi>";
    echo "<harga>", $data['harga'], "</harga>";
    echo "<gambar>", $data['gambar'], "</gambar>";
    echo "</Daftar>";
}

echo "</data>";
