<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CRUD</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <div class="container">
        <h1 class="mt-3">Tambah Barang</h1>
        <form>
            <div class="mb-3">
                <label class="form-label">Nama barang</label>
                <input type="text" class="form-control" placeholder="Masukkan nama barang" name="nama_barang" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Berat Barang</label>
                <input type="number" class="form-control" placeholder="Masukkan berat barang" name="berat" aria-describedby="weightRule" required>
                <div id="weightRule" class="form-text">Berat barang dalam satuan Kg.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Stok barang</label>
                <input type="number" class="form-control" placeholder="Masukkan stok barang" name="stok" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Barang</button>
            <a type="button" href="index.php" class="btn btn-danger">Batal</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
