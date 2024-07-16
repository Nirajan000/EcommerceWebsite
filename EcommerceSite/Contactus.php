<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BCraft Nepal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


    <style>
        .p1 {
            color: white;
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
            color: black;
            transition: color 0.5s;

        }

        .fa-facebook-f:hover {
            color: blue;

        }
        .fa-instagram-f:hover {
            color: orange;

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

        .img-map {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            width: 100%;

        }

        .card {
            background-color: transparent;
            border: none;
            box-shadow: none;
        }

        .card-body {
            padding: 0;
            margin-left: 20px;
        }

        .card-text {
            margin-bottom: 3px;
            font-size: larger;
        }

        .card-title {
            margin-bottom: 3px;
            font-size: 35px;
        }

        .social-media {
            margin-top: 0;
        }

        h5 {
            color: #f7f7f7;
        }
        .medias a{
            color: white;
        }
        .pa1{
            align-items: center;
            justify-content: center;
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
                <img src="images/mainpage5.jpg" class=" d-block  w-100" alt="...">

            </div>
            <div>
                <p class="pa1">Contact us</p>
            </div>
            <div class="carousel-item pt-5">
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
            <div class="row  ">
                <div class="col-md-12">
                    <form class="mt-5">
                        <h1><b>Send us message</b></h1>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone number:</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Enter phone number">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="address" class="form-control" id="phone" placeholder="Enter address">
                        </div>

                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <div class="form-check pl-5 pt-3 pb-3">
                    <input type="checkbox" class="form-check-input" id="agree">
                    <label class="form-check-label " for="agree">I agree to the terms and conditions</label>
                </div>
                <div> <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                </form>
            </div>

        </div>
        <div class="row mb-3">
            <div class="col-md-12 ">
                <div class="card mt-3 ">
                    <div class="card-body">
                        <b>
                            <h1 class="card-title">Contact Information</h1>
                        </b>
                        <span style="font-size: 20px;">Please contact us at the given mobile number or message us at social media we are always active.</span>
                        <p class="card-text">
                            <i class="fas fa-map-marker-alt pb-2"></i> Thamel,Kathmandu,Nepal<br>
                            <i class="fas fa-phone pb-2"></i> +977-98487321<br>
                            <i class="fas fa-envelope"></i> BCraftNepal@gmail.com<br>
                        </p>
                        <div class="social-media">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="map" style="width: 100%; height: 500px; position: relative;">

                    <iframe class="img-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7064.147533277565!2d85.30712124232363!3d27.715008604712313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fcb77fd4bd%3A0x58099b1deffed8d4!2sThamel%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1719418321778!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </div>



    <footer class="footer bg-secondary">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 pl-5">
                    <h5>Bcraft</h5>
                    <p class="p1">
                    Explore BCraft Nepal in Thamel, Kathmandu, your destination for genuine Nepali artistry. Purchase handmade treasures online and support local artisans globally.
                    </p>
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
                    <ul class="social-media medias">
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