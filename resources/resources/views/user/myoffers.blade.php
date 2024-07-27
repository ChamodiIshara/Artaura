<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
    <title>myoffers</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/artaura.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <style>
      .tag{
        padding-top:10%;
        text-align:center;
      }
      
    </style>
  </head>

  <body>
  <video autoplay muted loop id="myVideo">
      <source label="fullHD" src="assets/images/GET OFFER.mp4" type="video/mp4">
    </video>

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
            <ul  class="navbar-nav ml-auto">
            <li class="nav-item">
                <a style="color:black;"class="nav-link" href="home">Home </a>
              </li> 
              <li class="nav-item">
                 <a style="color:black;"class="nav-link" href="gallary">Gallary</a>
              </li>
              <li class="nav-item">
                 <a style="color:black;"class="nav-link" href="{{url('category')}}">Category</a>
              </li>
              <li class="nav-item">
                <a style="color:black;"class="nav-link" href="about">About</a>
              </li>
              <li class="nav-item active">
                <a style="color:black;"class="nav-link" href="#">
                My Offres<i class="fa fa-heart" style="font-size:20px;color:red"></i><span class="sr-only">(current)</span></a>
              </li>

                           <!--login or registration in home-->
   @auth


   <li class="nav-item">
          <a style="color:black;"class="nav-link" href="{{route('logout')}}">Logout</a>
        </li>
        @else
        <li class="nav-item">
          <a style="color:black;"class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a style="color:black;"class="nav-link" href="{{route('registration')}}">Registration</a>
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
     <!-- Page Content -->
     <div class="banner header-text">
        </div>
        
          
    

     
      
 <!--art collection-->
 <div class="top-art">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <br>
          <h4 style="color: rgb(88, 3, 3);margin-top:17%;text-shadow: 2px 2px 5px rgb(241, 234, 234);text-align:center;font-weight: 1000;">Get up to 30% off on selected artworks on Arts Day!</h4>
          <br>
          <a style="margin-left:45%;"class="btn btn-success"href="home">Clam Now</a>
          <div class="section-heading">

              <h2 class="tag">Enjoy free shipping on all orders during Arts Day!</h2>

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
              <h4 style="color:black;">{{$arts->title}}</h4>
              <h4>Artist: {{$arts->artist}}</h4>
                <p >Discount: <span style="color:lightGreen;">free shipping</span></p>
                <h6>Price: ${{$arts->price}}</h6>
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
          @if(method_exists($data,'links'))
          <!-- page back and next -->
          <div class="d-flex justify-content-center">
            {!! $data->links() !!}
</div>
@endif
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

