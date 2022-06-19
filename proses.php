<?php

include('koneksi.php');

if ($_POST['nama']) {
    $id = $_POST['film_id'];
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];

    $sql = "INSERT INTO comments (film_id , nama , komentar ) VALUES ('$id','$nama','$komentar')";

if (mysqli_query($koneksi, $sql)) {
    header("location: watch.php?id=$id");

} else {
    echo "Error: " . $sql . "" . mysqli_error($koneksi);
}

}