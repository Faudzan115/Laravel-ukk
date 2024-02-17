<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>WebKasir.com</title>
</head>
<body>
    @include('layout.navbar')
    <div class="container">
        <center><h1>Data Pelanggan</h1></center>
    <table  style="margin-top: 2rem;" class="table">
        <thead>
          <tr>
            <th scope="col" class="table-warning">ID pelanggan</th>
            <th scope="col" class="table-warning">Nama pelanggan</th>
            <th scope="col" class="table-warning">Alamat</th>
            <th scope="col" class="table-warning">Nomer</th>
            <th scope="col" class="table-warning">opsi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="table-secondary">1.</th>
            <td class="table-secondary">irfan fauzi</td>
            <td class="table-secondary">sukamanah</td>
            <td class="table-secondary">085711523338</td>
            <td class="table-secondary"><button type="button" class="btn btn-outline-danger"><i class='bx bx-trash'></i></button>
                    <button type="button" class="btn btn-outline-success"><i class='bx bx-upload'></i></button></td>
          </tr>
          <tr>
            <th scope="row" class="table-secondary">2.</th>
            <td class="table-secondary">arya zaid</td>
            <td class="table-secondary">kerajan</td>
            <td class="table-secondary">0881295621198</td>
            <td class="table-secondary"><button type="button" class="btn btn-outline-danger"><i class='bx bx-trash'></i></button>
                    <button type="button" class="btn btn-outline-success"><i class='bx bx-upload'></i></button></td>
          </tr>
          <tr>
            <th scope="row" class="table-secondary">3.</th>
            <td class="table-secondary">dzaky</td>
            <td class="table-secondary">cariu</td>
            <td class="table-secondary">0859148322167</td>
            <td class="table-secondary"><button type="button" class="btn btn-outline-danger"><i class='bx bx-trash'></i></button>
                    <button type="button" class="btn btn-outline-success"><i class='bx bx-upload'></i></button></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="container">
            <a href="{{'register'}}">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-success me-md-2" type="button"><i class='bx bx-user-plus'></i></button>
                  </div>
               </a>
          </body>
      </html>
