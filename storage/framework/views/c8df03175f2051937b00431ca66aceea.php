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
    <body>

<div class="art-container" onclick="toggleDescription()">
    <div class="dis">
    <!-- Placeholder for Art Image -->
    <div class="description" id="artDescription">
        <p><strong>ID:</strong> #001</p>
        <p><strong>Title:</strong> The Dawn (Landscape)</p>
        <p><strong>Size:</strong> 24x36 inches</p>
        <p><strong>Medium:</strong> Watercolor on Paper</p>
        <p><strong>Artist:</strong> Jane Doe</p>
        <p><strong>Date Created:</strong> 2024</p>
        <p><strong>Shipping Date:</strong> Within 2 weeks</p>
        <p><strong>Painting Medium:</strong> Watercolor</p>
        <p><strong>Views:</strong> 120 <button onclick="updateViews()">Update Views</button></p>
        <p><strong>Quantity:</strong> <span id="quantity">3</span></p>
        <p id="stockMessage"></p>
    </div>
    </div>
</div>


 

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
</html><?php /**PATH C:\xampp\htdocs\user-login\resources\views/user/dis.blade.php ENDPATH**/ ?>