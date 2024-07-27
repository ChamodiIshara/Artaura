
<!DOCTYPE html>
<html lang="en">
  <head>
 @include('admin.css')
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
      <form action="{{url('uploadarts')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div style="padding:15px;">
        <label>Art title</label>
        <input style="color:black;"type="text" name="title"placeholder="Give a Art title"required="">
</div>
<div style="padding:15px;">
        <label>Price</label>
        <input style="color:black;"type="number" name="price"placeholder="Give a Price"required="">
</div>
<div style="padding:15px;">
        <label>Artist</label>
        <input style="color:black;"type="text" name="artist"placeholder="Artist name "required="">
</div>
<div style="padding:15px;">
        <label>Description</label>
        <input style="color:black;"type="text" name="des"placeholder="Give a description"required="">
</div>
<div style="padding:15px;">
        <label>Quantity</label>
        <input style="color:black;"type="text" name="quantity"placeholder="Art Quantity"required="">
</div>
<div style="padding:15px;">
        <label>Category</label>
        <input style="color:black;"type="text" name="category"placeholder="Enter Category"required="">

        <!-- <select name="quantity"style="width:200px;">
        @foreach($category as $category)
          <option value="{{$category->category_name}}">
            {{$category->category_name}}
          </option>
          @endforeach
        </select> -->
</div>
  
<div style="padding:15px;">
        <label>Deiscount</label>
        <input style="color:black;"type="text" name="discount"placeholder="Get discount"required="">
</div>
<div style="padding:15px;">
      <input type="file" name="file">
</div>
<div style="padding:15px;">
      <input class="btn btn-success"type="submit"value="Add Art">
</div>
</form>
</div>
</div>
        @include('admin.script')
  </body>
</html>