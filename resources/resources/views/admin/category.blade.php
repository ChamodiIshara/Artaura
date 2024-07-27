

<!DOCTYPE html>
<html lang="en">
  <head>
 @include('admin.css')
 <style>
    .div_center{
        text-align:center;
        padding-top: 40px;
    }
    .center{
      margin:auto;
      width: 50%;
      text-align:center;
      margin-top:30px;
      border: 3px solid white;
    }
 </style>
  </head>
  <body>
    @include('admin.sidebar')
      @include('admin.navbar')
      <div class="main-panel">
          <div class="content-wrapper">
          @if(session()->has('message'))
      <div class="alert alert-success">            
{{session()->get('message')}}
</div>
      @endif

<div class="div_center">
    <h2 style="padding-bottom:40px;">Add Category</h2>
    <form action="{{url('add_category')}}" method="POST">
        @csrf
        <input type="text"name="category"placeholder="Write Category Name">
        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
    </form>
</div>
<table class="center">
  <tr>
    <td style="background-color:green;">Category Name</td>
    <td style="background-color:green;">Action</td>
  </tr>

  @foreach($data as $data)
  <tr>
    <td>{{$data->category_name}}</td>
    <td><a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</a></td>
  </tr>
  @endforeach
</table>
</div>
</div>
        @include('admin.script')
  </body>
</html>