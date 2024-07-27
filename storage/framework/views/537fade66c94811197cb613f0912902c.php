 
      
 <!--art collection-->
 <div class="top-art">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Top Collection</h2>
              <a href="home">View All Arts <i class="fa fa-angle-right"></i></a>

              <form action="<?php echo e(url('search')); ?>" method="get" class="form-inline"style="float:right;padding:10px;">
              <?php echo csrf_field(); ?>
                <input class="form-control" name="search" type="search" placeholder="search">
                <input type="submit" value="Search" class="btn btn-success">
              </form>
            </div>
          </div>
        
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-4">
           
            <div class="art">
              <a href="<?php echo e(url('art_details',$arts->id)); ?>"><img height="300"width="150"src="/artimage/<?php echo e($arts->image); ?>" alt=""></a>
              <div class="down-content">
              <h4 style="color:black;"><?php echo e($arts->title); ?></h4>
              <h4>Artist: <?php echo e($arts->artist); ?></h4>
                <h6 style="padding-top:20px;color:red;">Discount: $<?php echo e($arts->discount); ?></h6>
                <h6>Price: $<?php echo e($arts->price); ?></h6>
                <p><?php echo e($arts->description); ?></p>
<form action="<?php echo e(url('addcart',$arts->id)); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <input type="number" value="1"min="1"class="form-control"style="width:100px"name="quantity">
  <br>
  <input class="btn btn-primary" type="submit" name=""value="Add cart">
</form>
              </div>
            </div>
</a>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php if(method_exists($data,'links')): ?>
          <!-- page back and next -->
          <div class="d-flex justify-content-center">
            <?php echo $data->links(); ?>

</div>
<?php endif; ?>
        </div>
      </div>
    </div><?php /**PATH C:\xampp\htdocs\user-login\resources\views/user/arts.blade.php ENDPATH**/ ?>