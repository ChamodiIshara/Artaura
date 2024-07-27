

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
    <td style="padding:10px;">Email</td>
    <td style="padding:10px;">cardname</td>
        <td style="padding:10px;">cardnumber</td>
        <td style="padding:10px;">Expmonth/<br>Year</td>
        <td style="padding:10px;">Cvv</td>
        <td style="padding:10px;">Tracking No</td>
        <td style="padding:10px;">Status</td>
        <td style="padding:10px;">Action</td>

</tr>
<?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr style="font-size:14px;background-color:black;">
    <td style="padding:10px;"><?php echo e($orders->id); ?></td>
    <td style="padding:10px;"><?php echo e($orders->email); ?></td>
    <td style="padding:10px;"><?php echo e($orders->cardname); ?></td>
        <td style="padding:10px;"><?php echo e($orders->cardnumber); ?></td>
        <td style="padding:10px;"><?php echo e($orders->expmonth); ?></td>
        <td style="padding:10px;"><?php echo e($orders->cvv); ?></td>
        <td style="padding:10px;"><?php echo e($orders->tracking_no); ?></td>
        <td style="padding:10px;"><?php echo e($orders->status); ?></td>
        <td><a class="btn btn-success" href="<?php echo e(url('updatestatus',$orders->id)); ?>">Delivered</a></td>

        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
</div>

        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\user-login\resources\views/admin/showpayment.blade.php ENDPATH**/ ?>