
<!DOCTYPE html>
<html lang="en">
  <head>
 <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
      <div class="container-fluid page-body-wrapper">
        <div class="container"align="center">
      <h1 class="title">Add Arts</h1>

      <?php if(session()->has('message')): ?>
      <div class="alert alert-success">
      
<?php echo e(session()->get('message')); ?>

</div>
      <?php endif; ?>
      <form action="<?php echo e(url('uploadarts')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
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
        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($category->category_name); ?>">
            <?php echo e($category->category_name); ?>

          </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\user-login\resources\views/admin/arts.blade.php ENDPATH**/ ?>