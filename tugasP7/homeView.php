<!DOCTYPE html>

<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: loginView.php");
  exit;
}
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link rel="stylesheet" href="style1.css">
  <title>Home - LOGO COMPANY</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
    <div class="container text-center">
      <a class="navbar-brand md-auto mb-2 mb-lg-0" href="../tugasP7/homeView.php">Eat Here.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      </button>
      <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
        <ul class="navbar-nav md-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#menus">Our Menus</a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <div class="nav-link" id="total-shop">Total Shop Rp 0,-</div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="commandPHP/logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
              </svg> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid banner">
    <div class="container text-center">
      <h4 class="display-6">Welcome to Eat Here.</h4>
      <h3 class="display-1">Enjoy your favorite Meals!</h3>
      <a href="#menus">
        <button type="button" class="btn btn-danger btn-lg">Check our Menu</button>
      </a>
    </div>
  </div>
  <div class="container-fluid menus pt-5 pb-5">
    <div class="container text-center">
      <h3 class="display-3" id="menus">Our Menus</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nemo saepe alias, odit hic corporis autem. Magnam numquam dolore perspiciatis officia exercitationem suscipit repellat blanditiis.</p>
      <div class="row mt-5">
        <!-- Menu Platter -->
        <div class=" col-sm-6 col-md-4 mb-3">
          <div class="card menus">
            <img src="https://images.unsplash.com/photo-1607623814075-e51df1bdc82f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="card-img-top image-src" alt="meatplatter">
            <div class="card-body">
              <h5 class="card-title display-3">Platter Meat</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="card-text display-6">
                <h6 class="display-6">Rp 75.000,-</h6>
              </div>
              <div class="row mt-5 list-menu">
                <div class="col-6">
                  <button type="button" class="btn btn-primary btn-lg btn-block price" data-price="75000">Add</button>
                </div>
                <div class="col-6">
                  <button type="button" class="btn btn-danger btn-lg btn-block price" data-price="75000">Remove</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Menu Fried Rice -->
        <div class=" col-sm-6 col-md-4 mb-3">
          <div class="card menus">
            <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1025&q=80" class="card-img-top image-src" alt="meatplatter">
            <div class="card-body">
              <h5 class="card-title display-3">Sepcial Fried Rice</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="card-text display-6">
                <h6 class="display-6">Rp 50.000,-</h6>
              </div>
              <div class="row mt-5 list-menu">
                <div class="col-6">
                  <button type="button" class="btn btn-primary btn-lg btn-block price" data-price="50000">Add</button>
                </div>
                <div class="col-6">
                  <button type="button" class="btn btn-danger btn-lg btn-block price" data-price="50000">Remove</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Menu Egg Sausage -->
        <div class=" col-sm-6 col-md-4 mb-3">
          <div class="card menus">
            <img src="https://images.unsplash.com/photo-1625626275755-a2e1a03a8e9d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1113&q=80" class="card-img-top image-src" alt="meatplatter">
            <div class="card-body">
              <h5 class="card-title display-3">Egg Sausage</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="card-text display-6">
                <h6 class="display-6">Rp 35.000,-</h6>
              </div>
              <div class="row mt-5 list-menu">
                <div class="col-6">
                  <button type="button" class="btn btn-primary btn-lg btn-block price" data-price="35000">Add</button>
                </div>
                <div class="col-6">
                  <button type="button" class="btn btn-danger btn-lg btn-block price" data-price="35000">Remove</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Menu Beer -->
        <div class=" col-sm-6 col-md-4 mb-3">
          <div class="card menus">
            <img src="https://images.unsplash.com/photo-1608270586620-248524c67de9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="card-img-top image-src" alt="meatplatter">
            <div class="card-body">
              <h5 class="card-title display-3">Beer</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="card-text display-6">
                <h6 class="display-6">Rp 25.000,-</h6>
              </div>
              <div class="row mt-5 list-menu">
                <div class="col-6">
                  <button type="button" class="btn btn-primary btn-lg btn-block price" data-price="25000">Add</button>
                </div>
                <div class="col-6">
                  <button type="button" class="btn btn-danger btn-lg btn-block price" data-price="25000">Remove</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Menu Soda -->
        <div class=" col-sm-6 col-md-4 mb-3">
          <div class="card menus">
            <img src="https://images.unsplash.com/photo-1633949698015-0f8a8b261c07?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="card-img-top image-src" alt="meatplatter">
            <div class="card-body">
              <h5 class="card-title display-3">Soda</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="card-text display-6">
                <h6 class="display-6">Rp 15.000,-</h6>
              </div>
              <div class="row mt-5 list-menu">
                <div class="col-6">
                  <button type="button" class="btn btn-primary btn-lg btn-block price" data-price="15000">Add</button>
                </div>
                <div class="col-6">
                  <button type="button" class="btn btn-danger btn-lg btn-block price" data-price="15000">Remove</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Menu Coca Cola -->
        <div class=" col-sm-6 col-md-4 mb-3">
          <div class="card menus">
            <img src="https://images.unsplash.com/photo-1622483767028-3f66f32aef97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="card-img-top image-src" alt="meatplatter">
            <div class="card-body">
              <h5 class="card-title display-3">Coca Cola</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="card-text display-6">
                <h6 class="display-6">Rp 20.000,-</h6>
              </div>
              <div class="row mt-5 list-menu">
                <div class="col-6">
                  <button type="button" class="btn btn-primary btn-lg btn-block price" data-price="20000">Add</button>
                </div>
                <div class="col-6">
                  <button type="button" class="btn btn-danger btn-lg btn-block price" data-price="20000">Remove</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  <footer class="text-center text-dark" style="background-color: #f1f1f1;">
    <!-- Grid container -->
    <div class="container pt-3">
      <!-- Section: Social media -->
      <section class="mb-2">
        <h4 class="mb-2">Follow us on : </h4>
        <!-- Facebook -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
          </svg></a>

        <!-- Instagram -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
          </svg></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      2022 Copyright © | Oktavianus Kurniadi Prasetyo
    </div>
    <!-- Copyright -->
  </footer>


  <!-- SCRIPT JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- SCRIPT JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
  <!-- SCRIPT Add To Cart -->
  <script>
    $(document).ready(function() {
      let total = 0;
      let price = 0;
      $('.btn-primary').click(function() {
        price = $(this).data('price');
        total += price;
        $('#total-shop').text('Total Shop Rp ' + Intl.NumberFormat('id-ID').format(total) + ',-');
      });
      $('.btn-danger').click(function() {
        if (total > 0) {
          price = $(this).data('price');
          total -= price;
          $('#total-shop').text('Total Shop Rp ' + Intl.NumberFormat('id-ID').format(total) + ',-');
        }
      });
      // $('.btn-danger').on('click', function() {
      //   if(total <= 0 ) {
      //   } else {
      //     total -= ($(this).data('price'));
      //     console.log(total);
      //   }
      // })

      // $('.btn-primary').on('click', function() {
      //   total += ($(this).data('price'));
      //     console.log(total);
      // })

      // if ($('.btn-primary').hasClass('price')) {
      //   $('.btn-primary').on('click', function() {
      //     total += ($(this).data('price'));
      //     // console.log(total);
      //   })
      // } 
      // if ($('.btn-danger').hasClass('price')) {
      //   $('.btn-danger').on('click', function() {
      //   total -= ($(this).data('price'));
      //   // console.log(total);
      // })
      // }
      // $('.btn-primary').on('click', function() {
      //   total += ($(this).data('price'));
      //   // console.log($(this).data('price'));
      //   console.log(total);
      // })
      // $('.btn-danger').on('click', function() {
      //   total -= ($(this).data('price'));
      //   // console.log($(this).data('price'));
      //   console.log(total);
      // })
      $('total').text('Rp ' + total + ',-');
      // console.log($('total').text('Rp ' + total + ',-'));
    })


    // let total = 0;
    // $('.list-menu').click(function() {
    //   if ($(this).hasClass('btn-plus')) {
    //     total += $(this).find('.price').data('price');
    //   } else if ($(this).hasClass('btn-minus')) {
    //     total -= $(this).find('.price').data('price');
    //   }
    //   console.log($(this).find('.price').data('price'));
    //   console.log(total);
    //   $('#total-shop').html('Rp '+total+',-');
    // })

    // $("#addbutton").click(function(){
    //   total += $(this).find('.price').data('price');
    // })
    // console.log(total)
  </script>
</body>

</html>