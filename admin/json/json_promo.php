<?php
require 'functions.php';
$sql = "select * from promo";
$tampil = mysqli_query($conn, $sql);
if (mysqli_num_rows($tampil) > 0) {
    $no = 1;
    $response = array();
    $response["data"] = array();
    while ($r = mysqli_fetch_array($tampil)) {
        $h['des1'] = $r['des1'];
        $h['des2'] = $r['des2'];
        array_push($response["data"], $h);
    }
    echo json_encode($response);
} else {
    $response["message"] = "tidak ada data";
    echo json_encode($response);
}
