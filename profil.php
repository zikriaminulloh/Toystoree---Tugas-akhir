<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="img/brand.jpg">
    <link rel="stylesheet" href="css\profil.css"/>
    <title>TOYSTOREE</title>
  </head>
  <body>
    <!-- header  -->
    <div class="header">
        <div class="contener">
          <!-- navbar  -->
          <div class="navbar">
              <div class="d-flex align-items-center">
                <a href="/help" style="text-decoration:none; color:white">
                  <i class="fa-regular fa-circle-question"></i>
                  <span class="text-help">Help</span>
                </a>
                
                <a class="nav-link dropdown" href="#" id="alertsDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                    <i class="fas fa-bell fa-fw"></i>
                    <span class="text-notif">Notification</span>
                </a>
                <div class="dropdown-list dropdown-menu dropdown-menu shadow animated--grow-in"
                      aria-labelledby="alertsDropdown" style="margin-top: 270px; margin-left: 70px;">
                  <h6 class="dropdown-header" style="color: black;">Notification</h6>
                  <li><hr class="dropdown-divider"></li>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div>
                      <div class="small text-gray-500">December 12, 2019</div>
                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                    </div>
                  </a>
                  <li><hr class="dropdown-divider"></li>
                  <a class="dropdown-item d-flex align-items-center" href="#">  
                    <div>
                      <div class="small text-gray-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                    </div>
                    </a>
                    <li><hr class="dropdown-divider"></li>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <img class="profil" src="img/profil.jpg" alt=""/>
                <div class="dropdown">
                    <a class="btn btn-outline" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Zikri_Amnllh
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item-satu" href="profil.php">My Account</a></li>
                        <li><a class="dropdown-item-dua" href="#">My Purchase</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item-tiga" href="home_guest.php">Logout</a></li>
                    </ul>
                </div>
              </div>
              <!-- input search brand -->
              <div class="d-flex align-items-center mt-4">
                <div class="d-flex align-items-center">
                  <a href="home_user.php"><img class="brand-img mr-2" src="img/brand1.jpg" alt=""/></a>
                </div>
                <div class="wrap-navbar-input">
                  <div class="wrap-search"> 
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Browse !!"/>
                      <div class="wrap-icon-s" style="color: #CF0E0E">
                        <i class="fa-solid fa-magnifying-glass"></i>
                      </div>
                  </div>
                </div>
              </div>
              <a class="cart" href="/chart"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
          </div>
        </div>
    </div>

    <!-- body -->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>