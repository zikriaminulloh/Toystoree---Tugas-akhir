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
    <link rel="stylesheet" href="css\style2.css"/>
    <title>Home Guest-TOYSTOREE</title>
  </head>
  <body>
    <!-- header  -->
    <div class="header">
        <div class="contener">
          <!-- navbar  -->
            <div class="navbar">
                <div class="d-flex align-items-center" style="padding-top: 10px;">
                    <a href="/help" style="text-decoration:none; color:white; right: 20px;">
                        <i class="fa-regular fa-circle-question"></i>
                        <span class="text-help">Help</span>
                    </a>
                </div>
                <div class="d-flex align-items-center">
                    <a href="daftar.php" style="text-decoration:none;"><span class="login font-weight-bold">Sign up</span></a>
                    <div class="hr1 mx-2"></div>
                    <a href="login.php" style="text-decoration:none;"><span class="daftar font-weight-bold">Login</span></a>
                </div>
                <!-- input search brand -->
                <div class="d-flex align-items-center mt-4">
                    <div class="d-flex align-items-center">
                        <img class="brand-img mr-2" src="img/brand1.jpg" alt=""/>
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
            </div>
        </div>
    </div>
  <!-- body -->
    <div class="body">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="border-radius: 10px">
          <div class="carousel-item active">
            <img src="img/iklan/3.png" class="d-block h-100 w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="img/iklan/4.png" class="d-block h-100 w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="img/iklan/5.png" class="d-block h-100 w-100" alt="">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- kategory  -->
      <div class="row mx-0 mt-4 kategory">
        <h5 class="p-4">CATEGORIES</h5>
        <div class="d-flex justify-content-between w-100">
          <div class="d-flex flex-column align-items-center">
            <div class="wrap-img">
              <img src="img/kategori/lego.png" alt="" >
            </div>
            <p class="mb-0 mt-2">LEGO</p>
          </div>
          <div class="d-flex flex-column align-items-center">
            <div class="wrap-img">
              <img src="img/kategori/hotwil.png" alt="" />
            </div>
            <p class="mb-0 mt-2">HOT WHEELS</p>
          </div>
          <div class="d-flex flex-column align-items-center">
            <div class="wrap-img">
              <img src="img/kategori/tamiya.png" alt="" />
            </div>
            <p class="mb-0 mt-2">TAMIYA</p>
          </div>
          <div class="d-flex flex-column align-items-center">
            <div class="wrap-img">
              <img src="img/kategori/doll.jpg" alt="" />
            </div>
            <p class="mb-0 mt-2">DOLL</p>
          </div>
          <div class="d-flex flex-column align-items-center">
            <div class="wrap-img">
              <img src="img/kategori/rubik.jpg" alt="" />
            </div>
            <p class="mb-0 mt-2">RUBIK</p>
          </div>
          <div class="d-flex flex-column align-items-center">
            <div class="wrap-img">
              <img src="img/kategori/slime.jpg" alt="" />
            </div>
            <p class="mb-0 mt-2">SLIME</p>
          </div>
          <div class="d-flex flex-column align-items-center">
            <div class="wrap-img">
              <img src="img/kategori/squishy.jpG" alt="" />
            </div>
            <p class="mb-0 mt-2">SQUISHY</p>
          </div>
          <div class="d-flex flex-column align-items-center">
            <div class="wrap-img">
              <img src="img/kategori/rc.jpg" alt="" />
            </div>
            <p class="mb-0 mt-2">Remote&nbsp;Cars</p>
          </div>
        </div>
      </div>
      <!-- rekomendasi  -->
      <div class="row mx-0 flex-column mt-4">
          <div class="row mx-0 mt-4 rekomendasi">
              <h6 style=
              "padding-top: 15px;
               padding-left: 20px;">
              TOP PRODUCT</h6>
          </div>
        <div class="tab-content mt-2" id="nav-tabContent">
          <div
            class="tab-pane fade show active"
            id="nav-home"
            role="tabpanel"
            aria-labelledby="nav-home-tab"
          >
       </div>
       <!-- produk pertama -->
            <div class="row mx-0 mt-2" style="height: 200px">
              <div class=" col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                  border: 1px solid #000;
                  border-radius: 10px;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border: 1px solid #000;
                    border-top-left-radius: 10px; border-top-right-radius:10px;"
                  >
                    <a href="detail1guest.php"><img
                      class="w-100 h-100 position-absolute"
                      src="img/produk/batman.jpg"
                      alt=""
                      style="border-top-left-radius: 10px; border-top-right-radius:10px;"
                    /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2">
                    <span><a href="detail1guest.php" style="color: #000;  text-decoration: none;">Batman head lego</a></span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                    
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 1.100.900</span
                      >
                      <span style="color: #A49E9E; font-size: 12px"
                        >100 sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                        border: 1px solid #000;
                        border-radius: 10px;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  >
                  <a href="detail2guest.php"><img
                    class="w-100 h-100 position-absolute"
                    src="img/produk/doll1.jpg"
                    alt=""
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;"
                  /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2">
                    <span><a href="detail2guest.php" style="color: #000;  text-decoration: none;">Squirrel Doll</a></span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 36.000</span
                      >
                      <span style="color: #888; font-size: 12px"
                        >368 sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                        border: 1px solid #000;
                        border-radius: 10px;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  >
                  <a href="/detail"><img
                    class="w-100 h-100 position-absolute"
                    src="img/produk/slime1.jpg"
                    alt=""
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;"
                  /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2" style="font-size: 15px;">
                    <span>Slime STAR GALAXY</span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 20.000</span
                      >
                      <span style="color: #888; font-size: 12px"
                        >6,6k sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                        border: 1px solid #000;
                        border-radius: 10px;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  >
                  <a href="/detail"><img
                    class="w-100 h-100 position-absolute"
                    src="img/produk/doll3.jpg"
                    alt=""
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;"
                  /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2">
                    <span>Teddy Bear</span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 79.000</span
                      >
                      <span style="color: #888; font-size: 12px"
                        >970 sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                        border: 1px solid #000;
                        border-radius: 10px;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  >
                  <a href="/detail"><img
                    class="w-100 h-100 position-absolute"
                    src="img/produk/goku.jpg"
                    alt=""
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;"
                  /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2">
                    <span>Lego Goku</span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 19.900</span
                      >
                      <span style="color: #888; font-size: 12px"
                        >147 sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                        border: 1px solid #000;
                        border-radius: 10px;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  >
                  <a href="/detail"><img
                    class="w-100 h-100 position-absolute"
                    src="img/produk/slimetelur.jpg"
                    alt=""
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;"
                  /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2">
                    <span>Egg Slime</span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 13.000</span
                      >
                      <span style="color: #888; font-size: 12px"
                        >365 sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- baris dua -->
            <div class="row mx-0 mt-2" style="height: 200px">
              <div class=" col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                  border: 1px solid #000;
                  border-radius: 10px;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border: 1px solid #000;
                    border-top-left-radius: 10px; border-top-right-radius:10px;"
                  >
                    <a href="detail1.php"><img
                      class="w-100 h-100 position-absolute"
                      src="img/produk/deadpool.jpg"
                      alt=""
                      style="border-top-left-radius: 10px; border-top-right-radius:10px;"
                    /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2">
                    <span><a href="/detail" style="color: #000;  text-decoration: none;">Lego Deadpool</a></span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                    
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 19.000</span
                      >
                      <span style="color: #A49E9E; font-size: 12px"
                        >30 sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                        border: 1px solid #000;
                        border-radius: 10px;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  >
                  <a href="/detail"><img
                    class="w-100 h-100 position-absolute"
                    src="img/produk/doll2.jpg"
                    alt=""
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;"
                  /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2">
                    <span>Teddy Bear LED</span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 52.000</span
                      >
                      <span style="color: #888; font-size: 12px"
                        >3K sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                        border: 1px solid #000;
                        border-radius: 10px;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  >
                  <a href="/detail"><img
                    class="w-100 h-100 position-absolute"
                    src="img/produk/gojosatoru.jpg"
                    alt=""
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;"
                  /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2">
                    <span>Lego Gojo satoru</span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 22.233</span
                      >
                      <span style="color: #888; font-size: 12px"
                        >55 sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                        border: 1px solid #000;
                        border-radius: 10px;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  >
                  <a href="/detail"><img
                    class="w-100 h-100 position-absolute"
                    src="img/produk/slime2.jpg"
                    alt=""
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;"
                  /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2">
                    <span>GALAXY Slime</span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 18.000</span
                      >
                      <span style="color: #888; font-size: 12px"
                        >124 sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                        border: 1px solid #000;
                        border-radius: 10px;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  >
                  <a href="/detail"><img
                    class="w-100 h-100 position-absolute"
                    src="img/produk/killerseven.jpg"
                    alt=""
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;"
                  /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2">
                    <span>Lego Killer seven</span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 25.000</span
                      >
                      <span style="color: #888; font-size: 12px"
                        >165 sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                        border: 1px solid #000;
                        border-radius: 10px;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  >
                  <a href="/detail"><img
                    class="w-100 h-100 position-absolute"
                    src="img/produk/yuji.jpg"
                    alt=""
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;"
                  /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2">
                    <span>Lego Itadori Yuji</span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 23.000</span
                      >
                      <span style="color: #888; font-size: 12px"
                        >55 sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- baris tiga -->
            <div class="row mx-0 mt-2" style="height: 200px">
              <div class="col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                        border-radius: 10px;
                        border: 1px solid #000;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  >
                  <a href="/detail"><img
                    class="w-100 h-100 position-absolute"
                    src="img/produk/luffy.jpg"
                    alt=""
                    style="border-top-left-radius: 10px; border-top-right-radius:10px"
                  /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2">
                    <span>Lego Monkey D.Luffy</span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 24.710</span
                      >
                      <span style="color: #888; font-size: 12px"
                        >185 sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                  border-radius: 10px;
                  border: 1px solid #000;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  >
                  <a href="/detail"><img
                    class="w-100 h-100 position-absolute"
                    src="img/produk/hw.jpg"
                    alt=""
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;"
                  /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2" style="font-size: 15px;">
                    <span>Hot Wheels 5-car Pack</span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 169.900</span
                      >
                      <span style="color: #888; font-size: 12px"
                        >2,2K sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                  border-radius: 10px;
                  border: 1px solid #000;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  >
                  <a href="/detail"><img
                    class="w-100 h-100 position-absolute"
                    src="img/produk/tamiya.jpg"
                    alt=""
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;"
                  /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2" style="font-size: 14px;">
                    <span>TAMIYA AERO AVANTE</span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 165.900</span
                      >
                      <span style="color: #888; font-size: 12px"
                        >185 sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                  border-radius: 10px;
                  border: 1px solid #000;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  >
                  <a href="/detail"><img
                    class="w-100 h-100 position-absolute"
                    src="img/produk/zoro.jpg"
                    alt=""
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2">
                    <span>Lego Rorona Zoro</span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 19.900</span
                      >
                      <span style="color: #888; font-size: 12px"
                        >185 sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                  border-radius: 10px;
                  border: 1px solid #000;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  >
                  <a href="/detail"><img
                    class="w-100 h-100 position-absolute"
                    src="img/kategori/rc.jpg"
                    alt=""
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;"
                  /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2">
                    <span>Race Car control</span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 190.900</span
                      >
                      <span style="color: #888; font-size: 12px"
                        >24 sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-2 pl-0">
                <div
                  class="container-produk-satu d-flex flex-column h-100"
                  style="background-color: #ffffff;
                  border-radius: 10px;
                  border: 1px solid #000;"
                >
                  <div
                    class="w-100 h-75 position-relative"
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;
                    border: 1px solid #000;"
                  >
                  <a href="/detail"><img
                    class="w-100 h-100 position-absolute"
                    src="img/produk/naruto.jpg"
                    alt=""
                    style="border-top-left-radius: 10px; border-top-right-radius:10px;"
                  /></a>
                  </div>
                  <div class="w-100 d-flex flex-column px-2" style="font-size: 13px;">
                    <span>Lego Naruto SAGE mode</span>
                    <div
                      class="
                        w-100
                        pb-2
                        d-flex
                        justify-content-between
                        align-items-center
                        mt-2
                      "
                    >
                      <span style="color: #CF0E0E; font-size: 14px"
                        >Rp. 23.900</span
                      >
                      <span style="color: #888; font-size: 12px"
                        >55 sold</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

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