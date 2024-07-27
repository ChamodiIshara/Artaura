<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
    <title>place-order</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/artaura.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>


    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
   
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="home">ARTaura</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a style="color:black;"class="nav-link" href="home">Home </a>
              </li> 
              <li class="nav-item">
                 <a style="color:black;" class="nav-link" href="gallary">Gallary</a>
              </li>
              <li class="nav-item">
                <a style="color:black;"class="nav-link" href="about">About</a>
              </li>
              <li class="nav-item">
                <a style="color:black;"class="nav-link" href="myoffers">My Offres</a>
              </li>
              <li class="nav-item active">
                <a style="color:black;"class="nav-link" href="#"><i style="font-size:16px" class="fa">&#xf217;  My Order<span class="sr-only">(current)</span></a></i>
              </li>

              <!--login or registration in home-->
   <?php if(auth()->guard()->check()): ?>
 
   <li class="nav-item">
          <a style="color:black;"class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a>
        </li>
        <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('registration')); ?>">Registration</a>
        </li>
      <?php endif; ?>
      </ul>
      <span style="color:red;" class="navbar-text"><i style='font-size:20px' class='fas'>&#xf2bd;</i>

      <?php if(auth()->guard()->check()): ?><?php echo e(auth()->user()->name); ?> 
      <?php endif; ?>
      </span>
    </div>
  </div>
      </nav> 

    
    </header>
     <!-- Page Content -->
     <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <div class="text-content">
          <h3 style=" color:white; text-shadow: 3px 3px black;">Your Order is Successfully!</h3>
</div>
</div>
</div>
</div>
</div>
  
<!--Inheriting footer.blade.php -->
<?php echo $__env->make('user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>

<script language = "text/Javascript"> 
  cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
  function clearField(t){                   //declaring the array outside of the
  if(! cleared[t.id]){                      // function makes it static and global
      cleared[t.id] = 1;  //  use true and false, but that's more typing
      t.value='';         
      t.style.color='#fff';
      }
  }
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\user-login\resources\views/user/place-order.blade.php ENDPATH**/ ?>