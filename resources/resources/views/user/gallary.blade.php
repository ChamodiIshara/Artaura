
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
            <li class="nav-item">
                <a class="nav-link" href="home">Home </a>
              </li> 
           
              <li class="nav-item active">
                 <a class="nav-link" href="#">Gallary<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="myoffers">
My Offres<i class="fa fa-heart" style="font-size:20px;color:red"></i></a>
              </li>
   
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

      <h2 style="text-align:center; color:white;">ART Gallery</h2>
      <br>

<div class="container">
  <div class="mySlides">
    <img src="img_woods_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="img_5terre_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="img_mountains_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <img src="img_lights_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="img_nature_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <img src="img_snow_wide.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div  class="column">
      <img class="demo cursor" src="assets/images/sunflower.jpg" style="width:100%;height:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/face.jpg" style="width:100%;height:100%" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/owl.jpg" style="width:100%;height:100%" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/wet.jpg" style="width:100%;height:100%" onclick="currentSlide(4)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/land.jpg" style="width:100%;height:100%" onclick="currentSlide(5)" >
    </div>    
    <div class="column">
      <img class="demo cursor" src="assets/images/vas.jpg" style="width:100%;height:100%" onclick="currentSlide(6)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/traditional.jpg" style="width:100%;height:100%" onclick="currentSlide(6)">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/girl.jpg" style="width:100%;height:100%" onclick="currentSlide(6)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/puppy.jpg" style="width:100%;height:100%" onclick="currentSlide(6)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/oil.jpg" style="width:100%;height:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/env.jpg" style="width:100%;height:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/dragon.jpg" style="width:100%;height:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>
@if(method_exists($data,'links'))
          <!-- page back and next -->
          <div class="d-flex justify-content-center">
            {!! $data->links() !!}
</div>
@endif
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
       
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
      }
    </script>
  </body>
</html>