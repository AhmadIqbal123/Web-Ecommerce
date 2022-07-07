<?php
$url = "http://localhost:8080/Kegiatan10pwd/getdatamhs.php";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach ($result as $r) {
    echo "<p>";
    echo "nama : " . $r->nama . "<br />";
    echo "merek : " . $r->merek . "<br />";
    echo "deskripsi : " . $r->deskripsi . "<br />";
    echo "harga : " . $r->harga . "<br />";
    echo "gambar : " . $r->gambar . "<br />";
    echo "</p>";
}
