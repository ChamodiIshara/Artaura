
<html>
  <head>
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
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li> 
              <li class="nav-item">
                 <a class="nav-link" href="gallary">Gallary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="offers.html">My Offres</a>
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
      <!-- Message -->
      <?php if(session()->has('message')): ?>
          <!-- Message button -->
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>     
<?php echo e(session()->get('message')); ?>

</div>
      <?php endif; ?>
    </header>
        <!-- Cart items table -->
      
<div style="padding:100px;"align="center">

  <table>
    <tr style="background-color:darkGrey";>
        <td style="padding:10px;font-size:20px;color:white;">Art Name</td>
        <td  style="padding:10px;font-size:20px;color:white;">Quantity</td>
        <td style="padding:10px;font-size:20px;color:white;">Price</td>
        <td style="padding:10px;font-size:20px;color:white;">Action</td>
    </tr>
   <!-- <form action="<?php echo e(url('myorder')); ?>" method="POST">
    <?php echo csrf_field(); ?> -->
    <!--coming from the HomeController -->
    
    <?php $total=0;         ?>
<?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr style="background-color:black;">
    <td style="padding:5px;color:white;">
        <input type="text" name="artname[]"value=" <?php echo e($carts->arts_title); ?>"hidden="">
        <?php echo e($carts->arts_title); ?></td>
        <td style="padding:5px;color:white;"align="center">
        <input type="text" name="quantity[]"value=" <?php echo e($carts->quantity); ?>"hidden="">
        <?php echo e($carts->quantity); ?></td>
        <td style="padding:5px;color:white;"align="center">
        <input type="text" name="price[]"value="<?php echo e($carts->price); ?>"hidden="">
        $ <?php echo e($carts->price); ?></td>
        
        <td style="padding:5px;color:white;"align="center"><a class="btn btn-danger" href="<?php echo e(url('delete',$carts->id)); ?>">Remove</a></td>
    </tr>
    <?php $total +=$carts->price*$carts->quantity  ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>

    <div style="padding:10px;background-color:lightGreen;color:black;width: 357px;">
    <h6> Total price : $ <?php echo e($total); ?></h6>
  </div>
<!-- </form> -->
  <div style="padding:10px;">
  <a class="btn btn-success"href="<?php echo e(url('/checkout')); ?>">Checkout</a>
  </div>
  </div>
  </div>
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
</html>




<?php /**PATH C:\xampp\htdocs\user-login - Copy\resources\views/user/showcart.blade.php ENDPATH**/ ?>