<html>
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <h1>Form</h1>
    <form action="form_validasi.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" required>

        <label for="telepon">Telepon</label>
        <input type="text" name="telepon" id="telepon" required>

    
        <label for="telepon">Telepon</label>
        <input type="number" name="telepon" id="telepon" required>

        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
        <label for="laki-laki">Laki-laki</label>
        <input type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
        <label for="perempuan">Perempuan</label>
        <input type="submit" value="Submit">
</html> 