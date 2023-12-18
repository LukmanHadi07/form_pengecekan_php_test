<?php

// validasi nama
if (empty($_POST['name'])) {
    echo "Name is required";
    exit();
}

if(!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])) {
    echo "Nama hanya boleh berisi huruf";
    exit();
}

// validasi alamat
if (empty($_POST['alamat'])) {
    echo "Alamat is required";
    exit();
}

// validasi telepon
if (empty($_POST['telepon'])) {
    echo "Telepon is required";
    exit();
}

if (!preg_match("/^[0-9]*$/", $_POST['telepon'])) {
    echo "Telepon hanya boleh berisi angka";
    exit();
}


// validasi jenis kelamin
if (empty($_POST['jenis_kelamin'])) {
    echo "Jenis Kelamin is required";
    exit();
}


// jika semua validasi terpenuhi, maka tampilkan data
echo "Name: " . $_POST['name'];
echo "<br>";
echo "Alamat: " . $_POST['alamat'];
echo "<br>";
echo "Telepon: " . $_POST['telepon'];
echo "<br>";
echo "Jenis Kelamin: " . $_POST['jenis_kelamin'];

?>