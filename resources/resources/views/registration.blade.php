 @extends('layout')
@section('title','Registration')
@section('content')
<div class="container">
<main class="login-form">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h3 class="card-header text-center">Sign Up</h3>
                    <div class="card-body">

<form action="{{route('registration.post')}}" method='POST' class='ms-auto me-auto mt-auto'style= "width:400px">
@csrf  
<div class="mb-2">
    <label class="form-label">Full Name</label>
    <input type="text" class="form-control" name='name'placeholder='Enter Username'required/>
  </div>

  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name='email'placeholder='Enter email' required/>
  </div>

  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name='password'placeholder='Enter Password'required/>
  </div>
		
  <div class="d-grid mx-auto">
 <button type="submit" class="btn btn-dark btn-block">Register</button>
   </div>
</form>
</div>
</div>
</div>
<div class="mytext"><br>
<span>Welcome to ARTaura!</span> 
<p><strong>The vibrant heart where art lovers and creators converge. With a commitment to celebrating diversity, creativity, and the boundless expressions of the human spirit, ARTaura offers an exquisite online gallery and marketplace that caters to the discerning tastes of art collectors, enthusiasts, and artists alike.</p>
</div>
@endsection
