

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
    <td style="padding:10px;">Email</td>
    <td style="padding:10px;">cardname</td>
        <td style="padding:10px;">cardnumber</td>
        <td style="padding:10px;">Expmonth/<br>Year</td>
        <td style="padding:10px;">Cvv</td>
        <td style="padding:10px;">Tracking No</td>
        <td style="padding:10px;">Status</td>
        <td style="padding:10px;">Action</td>

</tr>
@foreach ($order as $orders)
<tr style="font-size:14px;background-color:black;">
    <td style="padding:10px;">{{$orders->id}}</td>
    <td style="padding:10px;">{{$orders->email}}</td>
    <td style="padding:10px;">{{$orders->cardname}}</td>
        <td style="padding:10px;">{{$orders->cardnumber}}</td>
        <td style="padding:10px;">{{$orders->expmonth}}</td>
        <td style="padding:10px;">{{$orders->cvv}}</td>
        <td style="padding:10px;">{{$orders->tracking_no}}</td>
        <td style="padding:10px;">{{$orders->status}}</td>
        <td><a class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">Delivered</a></td>

        </tr>
    @endforeach

</div>
</div>

        @include('admin.script')
  </body>
</html>