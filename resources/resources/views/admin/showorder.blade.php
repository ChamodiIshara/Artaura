<!DOCTYPE html>
<html lang="en">
  <head>
 @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
      @include('admin.navbar')
   
      <div class="container-fluid page-body-wrapper">
        <div class="container"align="center">
<br>
<table border="3px">
    <tr style="background-color:grey;color:black;font-size:14px;">
    <td style="padding:10px;">Order ID</td>
        <td style="padding:10px;">Fname</td>
        <td style="padding:10px;">Lname</td>
        <td style="padding:10px;">Email</td>
        <td style="padding:10px;">Phone</td>
        <td style="padding:10px;">Address</td>
        <td style="padding:10px;">City</td>
        <td style="padding:10px;">Country</td>
        <td style="padding:10px;">zip</td>
       
    </tr>
@foreach ($order as $orders)
    <tr style="font-size:14px;background-color:black;">
    <td style="padding:10px;">{{$orders->id}}</td>
        <td style="padding:10px;">{{$orders->fname}}</td>
        <td style="padding:10px;">{{$orders->lname}}</td>
        <td style="padding:10px;">{{$orders->email}}</td>
        <td style="padding:10px;">{{$orders->phone}}</td>
        <td style="padding:10px;">{{$orders->address}}</td>
        <td style="padding:10px;">{{$orders->city}}</td>
        <td style="padding:10px;">{{$orders->state}}</td>
        <td style="padding:10px;">{{$orders->zip}}</td>
       
    </tr>
    @endforeach
</table>

</div>
</div>


        @include('admin.script')
  </body>
</html>