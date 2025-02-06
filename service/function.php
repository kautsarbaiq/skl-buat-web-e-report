<?php

require "database.php";

if (isset($_POST["submit-report"])) {
    insertReport($_POST);
}
function get_data($query)
{
    global $db;

    $rows = [];
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    }
    return $rows;
}

function insertReport($data)
{
    global $db;
    $judul = $data['judul'];
    $descripsi = $data['descripsi'];
    $image = upload();

    $query = "INSERT INTO laporan (judul, descripsi, img) values ('$judul', '$descripsi', '$image')";

    mysqli_query($db, $query);

    if (mysqli_affected_rows($db) > 0) {
        echo "<script>alert('data berhasil dtambah');
        window.location.href = '../report.php'</script>";
    } else {
        echo "<script>alert('data gagal dtambah');
        window.location.href = '../report.php'</script>";
    }
}

function upload()
{
    if (!isset($_FILES['photo']) || $_FILES['photo']['error'] === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
        return false;
    }

    $originalName = $_FILES['photo']['name'];
    $filesize = $_FILES['photo']['size'];
    $tmpName = $_FILES['photo']['tmp_name'];

    $validExtensions = ['jpg', 'jpeg', 'png'];
    $extension = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

    if (!in_array($extension, $validExtensions)) {
        echo "<script>alert('File bukan gambar');</script>";
        return false;
    }

    if ($filesize > 10000000) {
        echo "<script>alert('Ukuran gambar terlalu besar!');</script>";
        return false;
    }

    $imgFolder = '../img/';
    if (!is_dir($imgFolder)) {
        mkdir($imgFolder, 0755, true);
    }

    $newFilename = uniqid() . '.' . $extension;
    move_uploaded_file($tmpName, $imgFolder . $newFilename);

    return $newFilename;
}

