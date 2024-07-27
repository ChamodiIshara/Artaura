
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
    <title>checkout</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/artaura.css">
    <link rel="stylesheet" href="assets/css/checkout.css">
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
 <div>
 <div style="padding:150px;">
    <div class="row">
  <div class="col-75">
    <div class="container">
   
  
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            
            <form method="POST" action="<?php echo e(url('placeorder')); ?>">
<?php echo e(csrf_field()); ?>

   
    <div class="row">
              <div class="col-50">
            <label for="firstname"><i class="fa fa-user"></i> First Name</label>
            <input type="text" id="firstname" value="<?php echo e(Auth::user()->name); ?>" name="firstname" placeholder="user"required>
</div>
            <div class="col-50">
            <label for="lastname"><i class="fa fa-user"></i> Last Name</label>
            <input type="text" id="lastname"value="<?php echo e(Auth::user()->name); ?>" name="lastname" placeholder="user2"required>
            </div>
              <div class="col-50">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email"value="<?php echo e(Auth::user()->email); ?>" name="email" placeholder="user@example.com"required>
</div>
<div class="col-50">
            <label for="address"><i class="fa fa-map-marker"></i> Address</label>
            <input type="text" id="adr"value="<?php echo e(Auth::user()->address); ?>" name="address" placeholder="542 W. 15th Street"required>
</div>
<div class="col-50">
            <label for="phone"><i class="fa fa-phone"></i> Phone</label>
            <input type="text" id="phone"value="<?php echo e(Auth::user()->phone); ?>" name="phone" placeholder="+94756685178"required>
</div>
<div class="col-50">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city"value="<?php echo e(Auth::user()->city); ?>" name="city" placeholder="New York"required>
</div>
              <div class="col-50">
                <label for="state"><i style="font-size:16px" class="fa">&#xf0ac;</i>Country</label>
                <input type="text" id="state"value="<?php echo e(Auth::user()->state); ?>" name="state" placeholder="NY"required>
              </div>
              <div class="col-50">
                <label for="zip"><i class="fa fa-file-zip-o"></i>
Zip</label>
                <input type="text" id="zip"value="<?php echo e(Auth::user()->zip); ?>" name="zip" placeholder="100"required>
              </div>
              
              <div class="col-50">
              <h3>Payment</h3>
          <br>
          <div class="row">
          <div class="col-50">
              <label for="fname">Accepted Cards</label>
            <div class="icon-container">
            <a href="#"><i class="fa fa-cc-visa" style="color:navy;"></i></a>
              <a href="#"><i class="fa fa-cc-amex" style="color:blue;"></i></a>
              <a href="#"><i class="fa fa-cc-mastercard" style="color:red;"></i></a>
              <a href="#"><i class="fa fa-cc-discover" style="color:orange;"></i></a>
            </div>
            
              <div class="col-50">
            <label for="cardname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="user"required>
</div>
<div class="col-50">

            <label for="cardnum"><i class="fa fa-credit-card"></i>
Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"required>
</div>
<div class="col-50">
            <label for="expmonth">	
Exp Month/Year</label>
            <input type="month" id="expmonth" name="expmonth" placeholder="September"required>
</div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="number" id="cvv" name="cvv" placeholder="352"required>
              </div>
            
            <div class="col-50">
                 <label for="checked">
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
</div>
<div style="padding:10px;">
  <button type="submit"class="btn btn-success">Place Order</button>
            </div>
</div>

<div class="col-50">
  <h3>Order Details</h3> 
            <div class="table">
  <table>
    <tr style="background-color:darkGreen;">
        <td style="padding:10px;font-size:20px;color:white;">Art Name</td>
        <td  style="padding:10px;font-size:20px;color:white;">Quantity</td>
        <td style="padding:10px;font-size:20px;color:white;">Price</td>
        <td style="padding:10px;font-size:20px;color:white;">Action</td>
    </tr>
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
        
        <td style="padding:5px;color:white;"align="center"><a class="btn btn-danger" href="<?php echo e(url('delete',$carts->id)); ?>">Delete</a></td>
    </tr>
    <?php $total +=$carts->price*$carts->quantity  ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
    <div style="padding:10px;background-color:maroon;color:white;width:351px;">
    <h6> Total price : <span style="padding:100px;"> $ <?php echo e($total); ?></span></h6>
</div>     
</form>
          </div>
    </div>
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
    <script src="assets/js/validate_form.js"></script>

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


<?php /**PATH C:\xampp\htdocs\user-login - Copy\resources\views/user/checkout.blade.php ENDPATH**/ ?>