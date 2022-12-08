<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="css/login.css? <?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="img/brand.jpg">
    <title>Log-in Toystoree</title>
</head>
<body>
     <!-- header  -->
     <div class="header">
        <div class="container-atas">
        <!-- input search brand -->
            <div class="d-flex align-items-center mt-4">
                <div class="d-flex align-items-center">
                    <a href="home_guest.php"><img class="brand-img mr-2" src="img/brand1.jpg" alt=""/></a>
                    <span class="text-brand">Toystoree</span>
                </div>
                <span class="text-login">Log-in</span>
            </div>
        </div>
    </div>
    <!-- body -->
    <div class="container-kiri">
        <div class="wrapper">
            <div class="container-logo">
                <img src="img/brand1.jpg" alt="logo" class="logo">
            </div>
        </div>
    </div>
    <form action="plogin.php" method="POST">
      <div class="container-daftar">
        <h3 class="judul">LOG-IN</h3>
        <label for="exampleFormControlInput1" class="email form-label">Email address</label>
          <div class="input-grup">
            <input type="text" name="email" id="exampleFormControlInput1" placeholder="@gmail.com" required>
          </div>
          <div class="input-grup2">
            <input type="password" name="password" placeholder="Password" maxlength="8" required>
            <div class="tombol">
              <a href="home_user.php"><button class="daftar" type="submit">LOGIN</button></a>
            </div>
            <div class="text-center">
              <a class="small" href="forgot-password.html" style="text-decoration:none;">Forgot Password?</a>
            </div>
            <hr style="margin-left: -300px; width: 300px;">
            <div class="gg">
            <a href="index.html" class="btn btn-google btn-user btn-block">
              <i class=" fab fa-google fa-fw"></i> Login with Google
            </a>
          </div>
          <div class="fb">
            <a href="index.html" class="btn btn-facebook btn-user btn-block">
              <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
            </a>
          </div>
            <p class="text">Belum punya akun? <a href="daftar.php" class="text-register">Sign-up</a></p>
          </div>
        </div>
    </form>

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