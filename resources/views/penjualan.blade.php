<!DOCTYPE html>
<html lang="en">
aaa
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>halaman admin</title>
</head>
<body>
    @include('layout.navbar')
<div class="container">
        <center><h1>Penjualan</h1></center>
    <table  style="margin-top: 2rem;" class="table">
<div class="container">
<div class="row">
<form class="row gy-2 gx-3 align-items-center">
  <div class="col-auto">
    <input type="text" class="form-select" id="autoSizingInput" placeholder="pilih produk...">
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInputGroup">qty</label>
    <div class="input-group">
      <input type="number" class="form-control"  id="autoSizingInputGroup" placeholder="qty">
    </div>
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
    <select class="form-select" id="autoSizingSelect">
      <option selected>Nama pelanggan...</option>
      <option value="1">arya</option>
      <option value="2">irfan</option>
      <option value="3">dzaky</option>
    </select>
  </div>
  <div class="container">
  <div class="col-auto">
    <div class="form-check">
    </div>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-dark">kirim</button>
  </div>
</form>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col"  class="table-warning">#</th>
      <th scope="col"  class="table-warning">Nama Penjual</th>
      <th scope="col"  class="table-warning">harga</th>
      <th scope="col"  class="table-warning">qty</th>
      <th scope="col"  class="table-warning">sub total</th>
      <th scope="col"  class="table-warning">opsi</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row" class="table-secondary"></th>
      <td class="table-secondary"></td>
      <td class="table-secondary"></td>
      <td class="table-secondary">  </td>
      <td class="table-secondary"></td>
      <td class="table-secondary"><button type="button" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
      </svg></button>
        <button type="button" class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1z"/>
            <path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708z"/>
          </svg></button>
          <button type="button" class="btn btn-outline-primary"><a href="{{'detail_penjualan'}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
            <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1z"/>
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
          </svg><i class="bi bi-file-text"></i></a></button>
        </button>
        </td>
    </tr>

  </tbody>
</table>
</body>
</html>
