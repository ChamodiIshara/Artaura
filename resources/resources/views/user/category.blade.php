
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
                 <a class="nav-link" href="{{url('category')}}">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="offers.html">
My Offres<i class="fa fa-heart" style="font-size:20px;color:red"></i></a>
              </li>
                         <!--login or registration in home-->
   @auth
   <li class="nav-item">
                <a class="nav-link" href="{{url('showcart')}}">
                <i class="fas fa-shopping-cart"></i> Cart[{{$count}}]</a>
              </li>

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
      <span class="navbar-text">
      @auth{{auth()->user()->name}} 
      @endauth
      </span>
   
    </div>
  </div>
      </nav> 

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                @foreach($category as $cate)
        <div class="col-md-4 mb-3">
        <div class="art">
              <a href="discription6.html"><img height="300"width="150"src="/artimage/{{$cate->image}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{$cate->artist}}</h4></a>
                <h6>${{$cate->price}}</h6>
                <p>{{$cate->description}}</p>
        </div>
    </div>
</div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

      <!--Inheriting footer.blade.php -->
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
  }
</script>
</body>
</html>

