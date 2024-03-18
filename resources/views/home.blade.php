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
    <li class="list-group-item" style="background-color: black; color:aliceblue; border-color: black">| Admin </li>
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
          <li><a class="link_name" href="{{'penjualan'}}">penjualan</a></li>
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
      <span class="text">Drop Down WebKasir</span>
    </div>
    <div class="container">
        <div class="container ">
            <div class="row row-cols-3">
              <div class="col"><div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">0</h5>
                  <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-plus-fill position-absolute top-0 end-0 me-3 mt-3"  viewBox="0 0 16 16">
                    <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8z"/>
                  </svg>
                  <p class="card-text" >Jumlah Produk</p>
                </div>
                <a href="{{'data_produk'}}" class="link-light  link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0" >
                 <div class="card-footer bg-transparent border-light" >More info <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                  </svg>
                </div>
                </a>
              </div>
            </div>
              <div class="col">
                <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">0</h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-plus-fill position-absolute top-0 end-0 me-3 mt-3" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                      </svg>
                    <p class="card-text">Jumlah Terjual</p>
                  </div>
                  <a href="{{'detail_penjualan'}}" class="link-light  link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0" >
                  <div class="card-footer bg-transparent border-light">More info <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                  </svg>
                  </div>
                  </a>
                </div>
            </div>
              <div class="col">
                <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">3</h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-plus-fill position-absolute top-0 end-0 me-3 mt-3"  viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                      </svg>
                    <p class="card-text">Jumlah User</p>
                  </div>
                  <a href="{{'data_pelanggan'}}" class="link-light  link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0" >
                   <div class="card-footer bg-transparent border-light">More info <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                  </svg>
                  </div>
                  </a>
                </div>
            </div>
              <div class="col">
                <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">0</h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-plus-fill position-absolute top-0 end-0 me-3 mt-3"  viewBox="0 0 16 16">
                        <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1zm1 12h2V2h-2zm-3 0V7H7v7zm-5 0v-3H2v3z"/>
                      </svg>
                    <p class="card-text">Jumlah Stok</p>
                  </div>
                  <a href="{{'stok'}}" class="link-light  link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0" >
                  <div class="card-footer bg-transparent border-light">More info <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                  </svg>
                </div>
                  </a>
              </div>
            </div>
          </div>
       </div>
    </section>
  <script>
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
