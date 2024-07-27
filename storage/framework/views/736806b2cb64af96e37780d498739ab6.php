<!DOCTYPE html>
<html lang="en">
  <head>
 <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
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
<?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr style="font-size:14px;background-color:black;">
    <td style="padding:10px;"><?php echo e($orders->id); ?></td>
        <td style="padding:10px;"><?php echo e($orders->fname); ?></td>
        <td style="padding:10px;"><?php echo e($orders->lname); ?></td>
        <td style="padding:10px;"><?php echo e($orders->email); ?></td>
        <td style="padding:10px;"><?php echo e($orders->phone); ?></td>
        <td style="padding:10px;"><?php echo e($orders->address); ?></td>
        <td style="padding:10px;"><?php echo e($orders->city); ?></td>
        <td style="padding:10px;"><?php echo e($orders->state); ?></td>
        <td style="padding:10px;"><?php echo e($orders->zip); ?></td>
       
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</div>
</div>


        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\user-login\resources\views/admin/showorder.blade.php ENDPATH**/ ?>