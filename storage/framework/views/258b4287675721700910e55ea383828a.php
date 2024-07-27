<html>
<head>
    <base href="/public">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
    <title>ARTaura</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
 <link rel="stylesheet" href="assets/css/artaura.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>
  <body>
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
                <a class="nav-link" href="home">Home </a>
              </li> 
           
              <li class="nav-item active">
                 <a class="nav-link" href="gallary">Gallary<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="myoffers">
My Offres<i class="fa fa-heart" style="font-size:20px;color:red"></i></a>
              </li>
   
              <!--login or registration in home-->
   <?php if(auth()->guard()->check()): ?>


   <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a>
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
      <span class="navbar-text"><i style='font-size:20px' class='fas'>&#xf2bd;</i>
      <?php if(auth()->guard()->check()): ?><?php echo e(auth()->user()->name); ?> 
      <?php endif; ?>
      </span>
   
    </div>
  </div>
      </nav> 
</header>
          <div class="col-md-4"style="margin:auto;width:50%;padding-top:7%;">
           
            <div class="art">
              <a href="<?php echo e(url('art_details',$arts->id)); ?>"><img height="300"width="150"src="/artimage/<?php echo e($arts->image); ?>" alt=""></a>
              <div class="down-content">
              <h4 style="color:black;"><?php echo e($arts->title); ?></h4>
              <h4>Artist: <?php echo e($arts->artist); ?></h4>
              <p>Category: <?php echo e($arts->category); ?></p>
              <p>Available Quantity: <?php echo e($arts->quantity); ?></p>
              <?php if($arts->quantity): ?>
              <label class="btn btn-success">In Stock</label>
<?php else: ?>
              <label class="btn btn-danger">Out of Stock</label>
              <?php endif; ?>

<p>Size: 18 x 24 inches</p>
<p>Deliver: Within Two Weeks</p>
                <h6 style="padding-top:20px;color:red;">Discount: $<?php echo e($arts->discount); ?></h6>
                <h6>Price: $<?php echo e($arts->price); ?></h6>
                <p><?php echo e($arts->description); ?></p>
<form action="<?php echo e(url('addcart',$arts->id)); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <input type="number" value="1"min="1"class="form-control"style="width:100px"name="quantity">
  <br>
  <input class="btn btn-primary" type="submit" name=""value="Add cart">
</form> 

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
</html><?php /**PATH C:\xampp\htdocs\user-login - Copy\resources\views/user/art_details.blade.php ENDPATH**/ ?>