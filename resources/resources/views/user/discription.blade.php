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
    @include('user.navabar')
   
              <!--login or registration in home-->
   @auth
   <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}">Logout</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('registration')}}">Registration</a>
        </li>
      @endauth
      </ul>
      <span class="navbar-text"><i style='font-size:20px' class='fas'>&#xf2bd;</i>
      @auth{{auth()->user()->name}} 
      @endauth
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

        


<form action="{{url('search')}}" method="get" class="form-inline"style="float:right;padding:10px;">
              @csrf
                <input class="form-control" name="search" type="search" placeholder="search">
                <input type="submit" value="Search" class="btn btn-success">
              </form>
            </div>
          </div>
          
          @foreach($data as $arts)
          <div class="col-md-4">
           
            <div class="art">
              <a href="discription"><img height="300"width="150"src="/artimage/{{$arts->image}}" alt=""></a>
              <div class="down-content">
              <h4>Image ID: {{$arts->id}}</h4>
              <h4>Name: {{$arts->title}}</h4>
                <h4>Artist: {{$arts->artist}}</h4>
                <h6 style="padding-top:20px;color:red;">Discount: ${{$arts->discount}}</h6>
                <h6>Price: ${{$arts->price}}</h6>
                <h6>Price: ${{$arts->quantity}}</h6>
                <p>image size(in:):18 x 14</p>
                <p>Shipping Date: Within Two Weeks</p>
                <p>{{$arts->description}}</p>
               
<form action="{{url('addcart',$arts->id)}}" method="POST">
  @csrf
  <input type="number" value="1"min="1"class="form-control"style="width:100px"name="quantity">
  <br>
  <input class="btn btn-primary" type="submit" name=""value="Add cart">
</form>
              </div>
            </div>
</a>
          </div>
          @endforeach

 

    @include('user.footer')
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
</html>