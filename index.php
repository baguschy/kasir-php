<!DOCTYPE html>
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
        <h1 class="mt-3">Data Barang</h1>
        <div class="mt-4">
            <a href="add.php" type="button" class="btn btn-success">Tambah Barang</a>
        </div>
        <div class="table-data mt-5">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Berat Barang</th>
                    <th scope="col">Total</th>
                    <th scope="col" width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <a href="edit.php" type="button" class="btn btn-info">Edit</a>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </td>
                    </tr>
                    <tr>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                     <td>
                        <button type="button" class="btn btn-info">Edit</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </td>
                    </tr>
                    <tr>
                    <td>Larry the Bird</td>
                    <td>Thornton</td>
                    <td>@twitter</td>
                     <td>
                        <button type="button" class="btn btn-info">Edit</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>