
<!DOCTYPE html>
<html lang="en">
  <head>
 <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
      <div style="padding-bottom:30px"class="container-fluid page-body-wrapper">
        <div class="container"align="center">
        <?php if(session()->has('message')): ?>
      <div class="alert alert-success">
      
<?php echo e(session()->get('message')); ?>

</div>
      <?php endif; ?>
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
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr align ="center"style="background-color:black;">
                    <td><?php echo e($arts->title); ?></td>
                    <td><?php echo e($arts->price); ?></td>
                    <td><?php echo e($arts->artist); ?></td>
                    <td><?php echo e($arts->description); ?> </td>
                    <td><?php echo e($arts->quantity); ?></td>
                    <td><?php echo e($arts->category); ?></td>
                    <td><?php echo e($arts->discount); ?></td>


                    <td>
                        <img height="100" width="100" src="/artimage/<?php echo e($arts->image); ?>">
                    </td>

                    <td>
                        <a class="btn btn-primary"href="<?php echo e(url('updateview',$arts->id)); ?>">Update</a>
                    </td>

                    <td>
                        <a class="btn btn-danger"href="<?php echo e(url('deletearts',$arts->id)); ?>">Delete</a>
                    </td>
                    
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\user-login\resources\views/admin/showarts.blade.php ENDPATH**/ ?>