
<!DOCTYPE html>
<html lang="en">
  <head>
 @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
      @include('admin.navbar')
      
      <div style="padding-bottom:30px"class="container-fluid page-body-wrapper">
        <div class="container"align="center">
        @if(session()->has('message'))
      <div class="alert alert-success">
      
{{session()->get('message')}}
</div>
      @endif
            <table>
                <tr style="background-color:grey;" >
                    
                    <td style="padding:20px">Title</td>
                    <td style="padding:20px">Price</td>
                    <td style="padding:20px"> Artists</td>
                    <td style="padding:20px">Description</td>
                    <td style="padding:20px">Quantity</td>
                    <td style="padding:20px">Category</td>
                    <td style="padding:20px">Discount</td>
                    <td style="padding:20px">Image</td>
                    <td style="padding:20px">Update</td>
                    <td style="padding:20px">Delete</td>
</tr>
@foreach($data as $arts)

<tr align ="center"style="background-color:black;">
                    <td>{{$arts->title}}</td>
                    <td>{{$arts->price}}</td>
                    <td>{{$arts->artist}}</td>
                    <td>{{$arts->description}} </td>
                    <td>{{$arts->quantity}}</td>
                    <td>{{$arts->category}}</td>
                    <td>{{$arts->discount}}</td>


                    <td>
                        <img height="100" width="100" src="/artimage/{{$arts->image}}">
                    </td>

                    <td>
                        <a class="btn btn-primary"href="{{url('updateview',$arts->id)}}">Update</a>
                    </td>

                    <td>
                        <a class="btn btn-danger"href="{{url('deletearts',$arts->id)}}">Delete</a>
                    </td>
                    
</tr>
@endforeach
</table>
</div>
</div>
        @include('admin.script')
  </body>
</html>