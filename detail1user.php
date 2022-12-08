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
    <link rel="stylesheet" href="css\user\batman.css"/>
    <title>Batman head legoes-ToyStoree</title>
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
    <!--body-->
    <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="produk-satu col-md-6"><img class="card-img-top mb-5 mb-md-0" src="img\produk\batman.jpg" alt="..." /></div>
                    <div class="col-md-6">
                        <h1 class="text-judul display-5 fw-bolder">Batman head Legoes</h1>
                        <div>
                            <p class="py-2">
                                <span style="padding-left: 10px; font-size: 25px;">4.9</span>
                                <i class="fa fa-star text-warning" style="padding-left: 5px; font-size: 20px;"></i>
                                <i class="fa fa-star text-warning" style="padding-left: -3px; font-size: 20px;"></i>
                                <i class="fa fa-star text-warning" style="padding-left: -3px; font-size: 20px;"></i>
                                <i class="fa fa-star text-warning" style="padding-left: -3px; font-size: 20px;"></i>
                                <i class="fa fa-star text-warning" style="padding-left: -3px; font-size: 20px;"></i>
                                <span style="padding-left: 10px; font-size: 25px;"> | 100 sold</span>
                            </p>
                            <hr>
                        </div>
                        <div class="fs-5 mb-5">
                            <span style="font-size: 50px; color:#CF0E0E;">Rp. 1.100.900</span>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group mb-3" style="width: 130px;  height: 40px;">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" class="form-control text-center input-qty bg-white" value="1" disabled>
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                            </div>
                        </div>            
                        <div class="row pb-3" style="padding-top: 30px;">
                            <div class="col d-grid">
                                <button type="submit" class="keranjang btn-lg" name="submit" value="addtocard"><i class="fa-solid fa-cart-plus" style="padding-right: 10px;"></i>Add To Cart</button>
                            </div>
                            <div class="col d-grid">
                                <button type="submit" class="tuku btn-lg" name="submit" value="buy">Buy</button>
                            </div>                                    
                        </div>        
                    </div>
                </div>
                <div class="deskirpsi">
                    <h1 style="padding-top: 150px;">Description Product</h1>
                    <hr>
                    <p style="padding-top: 10px;">• LEGO® DC Batman™: Batman Cowl (76182) menangkap gaya Batman dengan benar dalam model build-and-display menawan yang dibuat dengan mempertimbangkan pemikiran orang dewasa.</p>
                    <p>• Berukuran tinggi 8,5 inci (22 cm), lebar 4 inci (10 cm) dan kedalaman 4 inci (12 cm), model menawan ini dapat menjadi bahan pembicaraan yang menarik, baik saat dipajang di rumah atau tempat kerja Anda.</p>
                    <p>• LEGO® DC Batman™ Batman Cowl yang dapat dikoleksi ini menawarkan pengalaman merakit yang dapat menghilangkan stres karena 410 keping LEGO secara bertahap berubah menjadi model dengan tampilan yang menakjubkan.</p>
                    <p>• Kreasi ulang LEGO® bricks otentik dari helm Batman™ yang ikonik ini mencakup potongan transparan untuk mewakili wajah dan plakat bergaya yang menempel pada alas yang kokoh.</p>
                    <p>• Keluarkan kekuatan super konstruksi kreatif Anda. Sepotong memorabilia Batman™ yang dapat dikoleksi ini akan memberikan kesenangan dan kepuasan yang lama setelah selesai dikerjakan.</p>
                    <p>• Bagian build-and-display ini sangat ideal untuk setiap penggemar pembuat model atau penggemar dewasa dari Caped Crusader™. Cocok sebagai hadiah ulang tahun yang luar biasa, hadiah Natal atau hadiah untuk seseorang.</p>
                    <hr> 
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-9 bg-white">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">YOU MAY ALSO LIKE</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class=" card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/produk/batman.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Batman head legoes</h5>
                                    <!-- Product price-->
                                    Rp. 1.100.900
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/produk/doll1.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Squirrel doll</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    Rp. 36.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline mt-auto" href="detail2user.php">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/produk/tamiya.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">TAMIYA AERO AVANTE</h5>
                                    <!-- Product price-->
                                    Rp. 165.900
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/kategori/rc.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Race Car control</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    Rp. 190.900
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer -->
  <div class="footer">
    <div class="container pt-5">
      <div class="d-flex justify-content-between">
        <div class="d-flex flex-column ml-5">
          <p class="desc font-weight-bold">EXPLOR ToyStoree</p>
          <p class="mb-1 desc">About</p>
          <p class="mb-1 desc">Career</p>
          <p class="mb-1 desc">ToyStoree Policy</p>
        </div>
        <div class="d-flex flex-column ml-5">
          <p class="desc font-weight-bold">PAYMENT</p>
          <div class="d-flex align-items-center">
            <a href="https://indomaret.co.id/">
              <img
                class="ml-2"
                src="img/indo.jpg"
                width="60"
                height="30"
                alt=""
              />
            </a>
            <a href="https://alfamart.co.id/">
              <img
                class="ml-2"
                src="img/alfa.png"
                width="60"
                height="30"
                alt=""
                style="margin-left: 10px;"
              />
            </a>
          </div>
          <a href="https://www.klikbca.com/default.html?langID=2">
            <img src="img/bca.png" alt="" width="60" height="30" style="margin-top: 5px;"/>
          </a>
          <a href="https://gopay.co.id/">
            <img src="img/gopay.png" alt="" width="100" height="30" style="margin-top: 5px;"/>
          </a>
        </div>
        <div class="d-flex flex-column ml-5">
          <p class="desc font-weight-bold">FOLLOW US</p>
          <div class="d-flex flex-column">
            <div class="d-flex align-items-center">
              <a href="https://web.facebook.com/zikri.gemers.1/" style="text-decoration:none;">
              <i class="fa-brands fa-facebook"></i>
              <span class="desc ml-3">Facebook</span>
            </a>
            </div>
            <div class="d-flex align-items-center">
              <a href="https://instagram.com/zikri_amnllh?igshid=YmMyMTA2M2Y=" style="text-decoration:none;">
                <i class="fa-brands fa-instagram"></i>
                <span class="desc ml-3">Instagram</span>
              </a>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column ml-5">
          <p class="desc font-weight-bold">OUR ADDRESS</p>
          <div>
            <span class="tempat">SMK Negeri 4 Kota Malang</span>
          </div>
          <div class="d-flex align-items-center">
            <span class="alamat">Jl. Tanimbar No.22, Kasin,
              Kec.Klojen,
            </span>
          </div>
           Kota Malang, Jawa Timur 65117
          <div>
            <span class="No.tlpn">(0341) 353798</span>
          </div>
        </div>
      </div>

      <hr />

      <div
        class="d-flex justify-content-between mt-5 pb-3"
        style="color: #888"
      >
        <span> &copy; Toystoree 2022. Hak Cipta Dilindungi </span>
        <span
          >Negara: Indonesia</span
        >
      </div>
    </div>
  </div>

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