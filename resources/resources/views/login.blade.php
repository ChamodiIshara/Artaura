@extends('layout')
@section('title','Login')
@section('content')
<div class="toggle" style="--img-url:{{ asset('assets/img/Art.JPEG')}}">

<div class="container">
<main class="login-form">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
<div class='mt-1'>
  @if($errors->any())
    <div class='col-10'>
      @foreach($errors->all() as $error)
      <div class="alert alert-danger">{{$error}}</div>
      @endforeach
</div>
        @endif

@if(session()->has('error'))
<div class="alert alert-danger">{{session('error')}}</div>
@endif

@if(session()->has('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
  </div>

<form action="{{route('login.post')}}" method='POST'style= "width:400px">
@csrf  
<div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name='email'placeholder='Enter email' >
  </div>

  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name='password'placeholder='Enter password'>
  </div>
<div class="d-grid mx-auto">
 <button type="submit" class="btn btn-dark btn-block">Login</button>
   </div>
   <p><a style="color:blue;" href="registration">Frogot Password</a></p>
   <div class="social-buttons"> 
            <button class="facebook"> 
                <i class="fab fa-facebook-f"></i> 
                Login with Facebook 
            </button> 
            <button class="google"> 
                <i class="fab fa-google"></i> 
                Login with Google 
            </button> 
  <p><a style="color:blue;" href="registration">Create New Account</a></p>
</form>
</div>
</div>
</div>
</div>
<div class="mytext"><br>
<span>Welcome to ARTaura!</span> 
<p><strong>The vibrant heart where art lovers and creators converge. With a commitment to celebrating diversity, creativity, and the boundless expressions of the human spirit, ARTaura offers an exquisite online gallery and marketplace that caters to the discerning tastes of art collectors, enthusiasts, and artists alike.</p>
</div>
@endsection