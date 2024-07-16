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



    body {
      font-family: Arial, sans-serif;
    }

    .payment-form {
      max-width: 400px;
      margin: 40px auto;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    li {
      list-style: none;
    }

    .p1 {
      color: white;
    }

    h5 {
      color: white;
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
              <a class="nav-link text-white" href="Aboutus.php" style="text-decoration: none; color: #fff; transition: 0.3s; background-color: transparent;" onmouseover="this.style.backgroundColor='#333'" onmouseout="this.style.backgroundColor='transparent'">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="Contactus.php" style="text-decoration: none; color: #fff; transition: 0.3s; background-color: transparent;" onmouseover="this.style.backgroundColor='#333'" onmouseout="this.style.backgroundColor='transparent'">Contact us</a>
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




  < <div class="payment-form">
    <h2>Payment Information</h2>
    <form id="payment-form">
      <div class="form-group">
        <label for="card-number">Card Number <span class="text-danger">*</span></label>
        <input type="text" id="card-number" class="form-control" placeholder="4242 4242 4242 4242" required>
      </div>
      <div class="form-group">
        <label for="exp-month">Expiration Month <span class="text-danger">*</span></label>
        <select id="exp-month" class="form-control" required>
          <option value="">Select Month</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exp-year">Expiration Year <span class="text-danger">*</span></label>
        <select id="exp-year" class="form-control" required>
          <option value="">Select Year</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
          <option value="2024">2024</option>
          <option value="2025">2025</option>
          <option value="2026">2026</option>
        </select>
      </div>
      <div class="form-group">
        <label for="cvc">CVC <span class="text-danger">*</span></label>
        <input type="text" id="cvc" class="form-control" placeholder="123" required>
      </div>
      <div class="form-group">
        <label for="amount">Amount <span class="text-danger">*</span></label>
        <input type="number" id="amount" class="form-control" value="10.00" required>
      </div>
      <div class="form-group">
        <label for="exp-year">Payment Gateway <span class="text-danger">*</span></label>
        <select id="exp-year" class="form-control" required>
          <option value="">Select Preferred Gateway</option>
          <option value="Khalti">Khalti</option>
          <option value="E-sewa">E-sewa</option>
          <option value="Ime Pay">Ime Pay</option>
          <option value="Paypal">Paypal</option>
          <option value="Mobile Banking">Mobile Banking</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Pay Now</button>
    </form>
    </div>

    <script>
      // Demo payment processing script
      document.getElementById('payment-form').addEventListener('submit', function(event) {
        event.preventDefault();
        const cardNumber = document.getElementById('card-number').value;
        const expMonth = document.getElementById('exp-month').value;
        const expYear = document.getElementById('exp-year').value;
        const cvc = document.getElementById('cvc').value;
        const amount = document.getElementById('amount').value;

        // Simulate payment processing
        setTimeout(function() {
          alert(`Payment successful! Amount: ${amount}`);
        }, 2000);
      });
    </script>










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