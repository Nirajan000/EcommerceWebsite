<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BCraft Nepal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  


  <style>
    *{
      font-family:Arial, Helvetica, sans-serif;
    }
    .card {
      transition: box-shadow 0.5s;
    }

    .card:hover {
      box-shadow: 3px 3px 5px  black -3px -3px -5px gray;
    }

    .card-body {
      text-align: center;
      /* center the content */
    }

    .d-flex {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .ml-2 {
      margin-left: 10px;
    }

    .social-media li {
      display: inline-block;
      margin-right: 10px;
    }

    .social-media a {
      color: white;
      transition: color 0.5s;

    }

    .fa-facebook-f:hover {
      color: blue;

    }

    .fa-twitter:hover {
      color: skyblue;

    }

    .fa-tiktok:hover {
      color: black;

    }



    .social-media i {
      font-size: 24px;
    }

    .footer {
      background-color: #f7f7f7;
    }

    .pl-5 {
      padding-left: 50px;
    }

    .text-muted {
      color: #777;
    }

    a {
      color: white;
      text-decoration: none;
      list-style: none;
    }

    a:hover {
      color: orange;
      transition: 0.5s;


    }

    li {
      list-style: none;
    }

    .p1 {
      color: #f7f7f7;
    }

    h5 {
      color: #f7f7f7;
    }
  </style>
</head>

<body>

  <section class="navbar">
    <nav class="navbar navbar-expand-lg bg-secondary text-white" style="width: 100%; position: fixed; top: 0; left: 0; z-index: 1000; margin-bottom: 5;">
      <div class="container-fluid margin-bottom-5">
        <a class="navbar-brand" href="#" style="text-decoration: none; color: #fff;">BCraft<spa>Nepal</spa></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="Bcraft.php" style="text-decoration: none; color: #fff; transition: 0.3s; background-color: transparent;" onmouseover="this.style.backgroundColor='#333'" onmouseout="this.style.backgroundColor='transparent'">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="Contactus.php" style="text-decoration: none; color: #fff; transition: 0.3s; background-color: transparent;" onmouseover="this.style.backgroundColor='#333'" onmouseout="this.style.backgroundColor='transparent'">Contact us</a>

            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="payment.php" style="text-decoration: none; color: #fff; transition: 0.3s; background-color: transparent;" onmouseover="this.style.backgroundColor='#333'" onmouseout="this.style.backgroundColor='transparent'">Payment</a>
            </li>
            <div class="d-flex">
              <button type="button" class="btn btn-secondary btn-sm " data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-shopping-cart "></i> <span class="badge ">0</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Your cart is empty</a></li>
              </ul>
            </div>

            <div class="float-right">
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary text-white" type="submit">Search</button>
              </form>
            </div>


          </ul>
        </div>
      </div>
    </nav>
  </section>












  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner  mt-5">
      <div class="carousel-item active">
        <img src="images/mainpage2.jpg" class=" d-block  w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/mainpage2.jpg" class="d-block  w-100" alt="...">
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>










    <div class="container-fluid">
      <div class="row pt-2 pb-2">
        <div class="col-lg-8">
          <h1><b>How was BCraft Nepal Established?</b></h1>
          <p class="text-justify">

          BCraft Nepal, located in the vibrant district of Thamel, Kathmandu, is a distinguished ecommerce organization dedicated to showcasing and promoting Nepali craftsmanship on a global scale. Strategically positioned in one of Kathmandu's most bustling areas, BCraft Nepal serves as a vital hub for local artisans to exhibit their traditional skills to a diverse and appreciative audience. The organization boasts a meticulously curated selection of handmade products, including exquisite textiles, intricate pottery, and various other crafts that reflect Nepal's rich cultural heritage. Beyond its thriving physical store, BCraft Nepal maintains a robust online presence, ensuring that customers worldwide can access and cherish authentic Nepali craftsmanship. Through its dedicated efforts, BCraft Nepal not only fosters economic empowerment for artisans but also plays a crucial role in preserving Nepal's artistic traditions. As a pivotal player in the promotion of sustainable and culturally significant products from Nepal.</p>
            <button class="btn btn-outline-primary"> <i class="fa-solid fa-arrow-right " style="font-size: larger; margin-right:5px;"> </i>Get Started </button>
          </div>
       
      </div>
    </div>


























    <footer class="footer bg-secondary">
      <div class="container py-3">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12 pl-5">
            <h5>Bcraft</h5>
            <p class="p1">

            Explore BCraft Nepal in Thamel, Kathmandu, your destination for genuine Nepali artistry. Purchase handmade treasures online and support local artisans globally.</p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <h5>Customer Service</h5>
            <ul>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">FAQs</a></li>
              <li><a href="#">Return Policy</a></li>
            </ul>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <h5>Social Media</h5>
            <ul class="social-media">
              <li>
                <a href="#" target="_blank">
                  <i class="fab fa-facebook-f" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <i class="fab fa-tiktok" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <p class="text-muted py-2">Copyright &copy; 2023 Bcraft. All rights reserved.</p>
      </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>