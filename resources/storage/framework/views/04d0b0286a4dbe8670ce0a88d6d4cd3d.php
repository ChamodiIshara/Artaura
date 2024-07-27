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
    <?php echo $__env->make('user.navabar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
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

     <div class="page-heading offers-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">

            </div>
          </div>
        </div> 
      </div>

 
<div class="top-art">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">

        


<form action="<?php echo e(url('search')); ?>" method="get" class="form-inline"style="float:right;padding:10px;">
              <?php echo csrf_field(); ?>
                <input class="form-control" name="search" type="search" placeholder="search">
                <input type="submit" value="Search" class="btn btn-success">
              </form>
            </div>
          </div>
          
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-4">
           
            <div class="art">
              <a href="discription"><img height="300"width="150"src="/artimage/<?php echo e($arts->image); ?>" alt=""></a>
              <div class="down-content">
              <h4>Image ID: <?php echo e($arts->id); ?></h4>
              <h4>Name: <?php echo e($arts->title); ?></h4>
                <h4>Artist: <?php echo e($arts->artist); ?></h4>
                <h6 style="padding-top:20px;color:red;">Discount: $<?php echo e($arts->discount); ?></h6>
                <h6>Price: $<?php echo e($arts->price); ?></h6>
                <h6>Price: $<?php echo e($arts->quantity); ?></h6>
                <p>image size(in:):18 x 14</p>
                <p>Shipping Date: Within Two Weeks</p>
                <p><?php echo e($arts->description); ?></p>
               
<form action="<?php echo e(url('addcart',$arts->id)); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <input type="number" value="1"min="1"class="form-control"style="width:100px"name="quantity">
  <br>
  <input class="btn btn-primary" type="submit" name=""value="Add cart">
</form>
              </div>
            </div>
</a>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 

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

        

// script.js
function toggleDescription(event) {
    event.stopPropagation(); // Prevents the click from triggering multiple times
    var description = document.getElementById("artDescription");
    description.classList.toggle("show");
}

function updateViews() {
    event.stopPropagation(); // Prevents the click from bubbling up to the art-container
    // Assuming views are stored in a variable or fetched from a server
    var views = parseInt(document.querySelector("#artDescription strong:nth-child(9)").textContent) + 1;
    document.querySelector("#artDescription strong:nth-child(9)").textContent = views.toString();
    // Update the views in the database or server here
}

// Check stock and update message
window.onload = function() {
    var quantity = parseInt(document.getElementById("quantity").textContent);
    var stockMessage = document.getElementById("stockMessage");
    if(quantity <= 0) {
        stockMessage.textContent = "Out of Stock";
        stockMessage.style.color = "red";
    } else {
        stockMessage.textContent = "In Stock";
        stockMessage.style.color = "green";
    }
};

document.addEventListener('click', function (e) {
    // Clicking outside the art description box closes it
    if (!document.getElementById('artDescription').contains(e.target) && !e.target.matches('.art-container, .art-container *')) {
        document.getElementById('artDescription').classList.remove('show');
    }
});
      }
    </script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\user-login\resources\views/user/discription.blade.php ENDPATH**/ ?>