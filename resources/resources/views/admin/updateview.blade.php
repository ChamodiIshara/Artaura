
<!DOCTYPE html>
<html lang="en">
  <head>
  <style type="text/css">
    .title{
        color:white;
         padding-top:25px;
         font-size:25px;
    }

    label{
        display:inline-block;
        width:200px;
    }
    
    </style>
    <base href="/public">
 @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
        <div class="container"align="center">
      <h1 class="title">Add Arts</h1>

      @if(session()->has('message'))
      <div class="alert alert-success">
      
{{session()->get('message')}}
</div>
      @endif
      <form action="{{url('updatearts',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div style="padding:15px;">
        <label>Art title</label>
        <input style="color:black;"type="text" name="title"value="{{$data->title}}"required="">
</div>
<div style="padding:15px;">
        <label>Price</label>
        <input style="color:black;"type="number" name="price"value="{{$data->price}}"required="">
</div>
<div style="padding:15px;">
        <label>Artist</label>
        <input style="color:black;"type="text" name="artist"value="{{$data->artist}}"required="">
</div>
<div style="padding:15px;">
        <label>Description</label>
        <input style="color:black;"type="text" name="des"value="{{$data->description}}"required="">
</div>
<div style="padding:15px;">
        <label>Quantity</label>
        <input style="color:black;"type="text" name="quantity"value="{{$data->quantity}}"required="">
</div>
<div style="padding:15px;">
        <label>Category</label>
        <input style="color:black;"type="text" name="category"value="{{$data->category}}"required="">
</div>
<div style="padding:15px;">
        <label>Discount</label>
        <input style="color:black;"type="text" name="discount"value="{{$data->discount}}"required="">
</div>

<div style="padding:15px;">
        <label>Old image</label>
      <img height="100" width="100" src="/artimage/{{$data->image}}">
</div>

<div style="padding:15px;">
<label>Change the image</label>
      <input type="file" name="file">
</div>
<div style="padding:15px;">
      <input class="btn btn-success"type="submit">
</div>
</form>
</div>
</div>
        @include('admin.script')
  </body>
</html>