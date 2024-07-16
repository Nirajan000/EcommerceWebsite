<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BCraft Nepal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
  <style>
  .card {
  transition: box-shadow 0.5s;
}

.card:hover {
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

.card-body {
  text-align: center; /* center the content */
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
  color:white;
  text-decoration: none;
   list-style: none;
}
a:hover{
  color:orange;
  transition:0.5s;


}
 
.p1{
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
                <a class="nav-link active text-white" aria-current="page" href="#" style="text-decoration: none; color: #fff; transition: 0.3s; background-color: transparent;" onmouseover="this.style.backgroundColor='#333'" onmouseout="this.style.backgroundColor='transparent'">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="Aboutus.php" style="text-decoration: none; color: #fff; transition: 0.3s; background-color: transparent;" onmouseover="this.style.backgroundColor='#333'" onmouseout="this.style.backgroundColor='transparent'">About us</a>
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
      <form class="d-flex ms-auto">
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











<section class="py-5">

 <h1 style="color:black; margin-left:100px;">Our Products</h1>
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-3 col-sm-6 col-xs-12 ">
        <div class="card mb-4" style="width: fit-content;">
          <div class="card-image">
            <img src="images/tshirt1.jpg" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; margin: 5px;" alt="...">
          </div>
          <div class="card-body p-2">
         
            <h5 class="card-title">Black Tshirt</h5>
          
            <p class="card-text">
              <small class="text-muted">$20.00</small> <br>
              
             
            </p>
            <button type="button" id="btn1" class="btn btn-primary btn-sm text-center"> Add to cart</button>
          </div>
        </div>
      </div>
      
      <div class="col-md-3 col-sm-6 col-xs-12 px-2">
        <div class="card mb-4" style="width: fit-content;">
          <div class="card-image">
            <img src="images/tshirt2.jpg" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; margin: 5px;" alt="...">
          </div>
          <div class="card-body p-2">
            <h5 class="card-title">Brown Tshirt</h5>
        
            <p class="card-text">
              <small class="text-muted">$15.00</small>
            </p>
                <button type="button" id="btn1" class="btn btn-primary btn-sm text-center">Add to Cart</button>
          </div>
        </div>
      </div>
      

      <div class="col-md-3 col-sm-6 col-xs-12 px-2">
        <div class="card mb-4" style="width: fit-content;">
          <div class="card-image">
            <img src="images/tshirt3.jpg" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; margin: 5px;" alt="...">
          </div>
          <div class="card-body p-2">
            <h5 class="card-title">White Tshirt</h5>
            <p class="card-text">
              <small class="text-muted">$30.00</small>
              
            </p>
            <button type="button" id="btn1" class="btn btn-primary btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12 px-2">
        <div class="card mb-4" style="width: fit-content;">
          <div class="card-image">
            <img src="images/tshirt4.jpg" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; margin: 5px;" alt="...">
          </div>
          <div class="card-body p-2">
            <h5 class="card-title">Kathmandunepal Tshirt</h5>
           
            <p class="card-text">
              <small class="text-muted">$35.00</small>
              
            </p>
            <button type="button" id="btn1" class="btn btn-primary btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>








           <div class="col-md-3 col-sm-6 col-xs-12 px-2">
        <div class="card mb-4" style="width: fit-content;">
          <div class="card-image">
            <img src="images/trouser2.jpg" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; margin: 5px;" alt="...">
          </div>
          <div class="card-body p-2">
            <h5 class="card-title">Cotton Trouser</h5>
            
            <p class="card-text">
              <small class="text-muted">$50.00</small>
              
            </p>
            <button type="button" id="btn1" class="btn btn-primary btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>

           <div class="col-md-3 col-sm-6 col-xs-12 px-2">
        <div class="card mb-4" style="width: fit-content;">
          <div class="card-image">
            <img src="images/trouser3.jpg" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; margin: 5px;" alt="...">
          </div>
          <div class="card-body p-2">
            <h5 class="card-title">red Trouser</h5>
           
            <p class="card-text">
              <small class="text-muted">$60.00</small>
              
            </p>
            <button type="button" id="btn1" class="btn btn-primary btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>



           <div class="col-md-3 col-sm-6 col-xs-12 px-2">
        <div class="card mb-4" style="width: fit-content;">
          <div class="card-image">
            <img src="images/trouser4.jpg" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; margin: 5px;" alt="...">
          </div>
          <div class="card-body p-2">
            <h5 class="card-title">Blue Trouser</h5>
            <p class="card-text">
              <small class="text-muted">$65.00</small>
              
            </p>
            <button type="button" id="btn1" class="btn btn-primary btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>


           <div class="col-md-3 col-sm-6 col-xs-12 px-2">
        <div class="card mb-4" style="width: fit-content;">
          <div class="card-image">
            <img src="images/trouser5.jpg" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; margin: 5px;" alt="...">
          </div>
          <div class="card-body p-2">
            <h5 class="card-title">women Trouser</h5>
        
            <p class="card-text">
              <small class="text-muted">$59.99</small>
              
            </p>
            <button type="button" id="btn1" class="btn btn-primary btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>






          <div class="col-md-3 col-sm-6 col-xs-12 px-2">
        <div class="card mb-4" style="width: fit-content;">
          <div class="card-image">
            <img src="images/handmadebag.jpg" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; margin: 5px;" alt="...">
          </div>
          <div class="card-body p-2">
            <h5 class="card-title">Comfy Bag</h5>
            <p class="card-text">
              <small class="text-muted">$200.00</small>
              
            </p>
            <button type="button" id="btn1" class="btn btn-primary btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>


          <div class="col-md-3 col-sm-6 col-xs-12 px-2">
        <div class="card mb-4" style="width: fit-content;">
          <div class="card-image">
            <img src="images/handmadebag2.jpg" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; margin: 5px;" alt="...">
          </div>
          <div class="card-body p-2">
            <h5 class="card-title">Black Long Hand Bag</h5>
            <p class="card-text">
              <small class="text-muted">$300.00</small>
              
            </p>
            <button type="button" id="btn1" class="btn btn-primary btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>

          <div class="col-md-3 col-sm-6 col-xs-12 px-2">
        <div class="card mb-4" style="width: fit-content;">
          <div class="card-image">
            <img src="images/handmadebag4.jpg" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; margin: 5px;" alt="...">
          </div>
          <div class="card-body p-2">
            <h5 class="card-title">Small Comfy Bag</h5>
            <p class="card-text">
              <small class="text-muted">$150.00</small>
              
            </p>
            <button type="button" id="btn1" class="btn btn-primary btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>


       <div class="col-md-3 col-sm-6 col-xs-12 px-2">
        <div class="card mb-4" style="width: fit-content;">
          <div class="card-image">
            <img src="images/thankapainting.jpg" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; margin: 5px;" alt="...">
          </div>
          <div class="card-body p-2">
            <h5 class="card-title"> Ancient thankapainting</h5>
            <p class="card-text">
              <small class="text-muted">$600.00</small>
              
            </p>
            <button type="button" id="btn1" class="btn btn-primary btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>

       <div class="col-md-3 col-sm-6 col-xs-12 px-2">
        <div class="card mb-4" style="width: fit-content;">
          <div class="card-image">
            <img src="images/thankapainting3.jpg" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; margin: 5px;" alt="...">
          </div>
          <div class="card-body p-2">
            <h5 class="card-title">Ancient round Thanka Painting</h5>
            <p class="card-text">
              <small class="text-muted">$309.99</small>
              
            </p>
            <button type="button" id="btn1" class="btn btn-primary btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>

       <div class="col-md-3 col-sm-6 col-xs-12 px-2">
        <div class="card mb-4" style="width: fit-content;">
          <div class="card-image">
            <img src="images/thankapainting4.jpg" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; margin: 5px;" alt="...">
          </div>
          <div class="card-body p-2">
            <h5 class="card-title">God thankapainting</h5>
            <p class="card-text">
              <small class="text-muted">$109.99</small>
              
            </p>
            <button type="button" id="btn1" class="btn btn-primary btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>

          <div class="col-md-3 col-sm-6 col-xs-12 px-2">
        <div class="card mb-4" style="width: fit-content;">
          <div class="card-image">
            <img src="images/thankapainting5.jpg" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; margin: 5px;" alt="...">
          </div>
          <div class="card-body p-2">
            <h5 class="card-title">ganesh Thnakapainting</h5>
            <p class="card-text">
              <small class="text-muted">$200.00</small>
              
            </p>
            <button type="button" id="btn1" class="btn btn-primary btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>





























    </div>
  </div>
</section>


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
          <li style="list-style: none;"><a href="#">Contact Us</a></li>
          <li style="list-style: none;"><a href="#">FAQs</a></li>
          <li style="list-style: none;"><a href="#">Return Policy</a></li>
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



<script>

document.addEventListener('click', function(event) {
  if (event.target.classList.contains('btn-primary') && event.target.closest('.card')) {
    alert('Product added to cart!');
  }
});

let cartCount = 0;

document.querySelectorAll('.btn-primary').forEach(function(button) {
  button.addEventListener('click', function() {
    cartCount++;
    document.querySelector('.badge').textContent = cartCount;
  });
});





</script>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>