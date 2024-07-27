

<!DOCTYPE html>
<html lang="en">
  <head>
 <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="main-panel">
          <div class="content-wrapper">
          <?php if(session()->has('message')): ?>
      <div class="alert alert-success">            
<?php echo e(session()->get('message')); ?>

</div>
      <?php endif; ?>

<div class="div_center">
    <h2 style="padding-bottom:40px;">Add Category</h2>
    <form action="<?php echo e(url('add_category')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text"name="category"placeholder="Write Category Name">
        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
    </form>
</div>
<table class="center">
  <tr>
    <td style="background-color:green;">Category Name</td>
    <td style="background-color:green;">Action</td>
  </tr>

  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($data->category_name); ?></td>
    <td><a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger" href="<?php echo e(url('delete_category',$data->id)); ?>">Delete</a></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\user-login\resources\views/admin/category.blade.php ENDPATH**/ ?>