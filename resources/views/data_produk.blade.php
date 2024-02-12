<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
@include('layout.navbar')
<div class="container">
        <center><h1>Data Produk</h1></center>
    <table  style="margin-top: 2rem;" class="table">
        <thead>
          <tr>
            <th scope="col" class="table-primary">Id Produk</th>
            <th scope="col" class="table-primary">Nama Produk</th>
            <th scope="col" class="table-primary">Harga</th>
            <th scope="col" class="table-primary">stok</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="table-secondary"></th>
            <td class="table-secondary"></td>
            <td class="table-secondary"></td>
            <td class="table-secondary"></td>
          </tr>
        </tbody>
      </table>
    </div>
</body>
</html>
