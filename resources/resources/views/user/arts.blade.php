 
      
 <!--art collection-->
 <div class="top-art">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Top Collection</h2>
              <a href="home">View All Arts <i class="fa fa-angle-right"></i></a>

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
              <a href="{{url('art_details',$arts->id)}}"><img height="300"width="150"src="/artimage/{{$arts->image}}" alt=""></a>
              <div class="down-content">
              <h4 style="color:black;">{{$arts->title}}</h4>
              <h4>Artist: {{$arts->artist}}</h4>
                <h6 style="padding-top:20px;color:red;">Discount: ${{$arts->discount}}</h6>
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