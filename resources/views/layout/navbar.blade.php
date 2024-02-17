<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>WebKasir.com</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" style="color:white" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="color:white" href="#"></a>
        </li>
        <li class="nav-item dropdown">
        </li>
      </ul>
    </div>
    <ul class="list-group list-group-horizontal">
    <li class="list-group-item" style="background-color: black; color:aliceblue; border-color: black">| Admin min</li>
</ul>
    <a class="btn btn-dark" href="{{'register'}}"><i class='bx bx-user'></i></i></a>
</div>
</nav>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/home.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
    <i class='bx bx-store'></i>
    <span class="logo_name">KasirZan</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="home">
        <i class='bx bx-desktop'></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="{{'produk'}}">
          <i class='bx bx-package'></i>
            <span class="link_name" >produk</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a href="{{'stok'}}">stok</a></li>
          <li><a href="{{'data_produk'}}">Data Produk</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bx-clipboard'></i>
            <span class="link_name">pelanggan</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">pelanggan</a></li>
          <li><a href="{{'data_pelanggan'}}">Data pelanggan</a></li>
          <li><a href="#">....</a></li>
          <li><a href="#"></a></li>
         </ul>
        </li>
       <li>
      <li>
        <div class="iocn-link">
          <a href="{{'penjualan'}}">
          <i class='bx bxs-basket'></i>
            <span class="link_name">penjualan</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">penjualan</a></li>
          <li><a href="{{'detail_penjualan'}}">detail_penjualan</a></li>
         </li>
        </ul>
      <li>
    <div class="profile-details">
      <div class="name-job">
      </div>
      <a href="logout"><i class='bx bx-log-out' ></i></a>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Drop Down webkasir</span>
    </div><script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
          arrow[i].addEventListener("click", (e)=>{
         let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
         arrowParent.classList.toggle("showMenu");
          });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", ()=>{
          sidebar.classList.toggle("close");
        });
            </script>
           </body>
            </div>
          </html>
         </table>
        </div>
      </html>
