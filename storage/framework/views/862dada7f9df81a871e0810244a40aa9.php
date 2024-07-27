
<?php $__env->startSection('title','Login'); ?>
<?php $__env->startSection('content'); ?>
<div class="toggle" style="--img-url:<?php echo e(asset('assets/img/Art.JPEG')); ?>">

<div class="container">
<main class="login-form">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
<div class='mt-5'>
  <?php if($errors->any()): ?>
    <div class='col-12'>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="alert alert-danger"><?php echo e($error); ?></div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
        <?php endif; ?>

<?php if(session()->has('error')): ?>
<div class="alert alert-danger"><?php echo e(session('error')); ?></div>
<?php endif; ?>

<?php if(session()->has('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>
  </div>

<form action="<?php echo e(route('login.post')); ?>" method='POST' class='ms-auto me-auto mt-auto'style= "width:300px">
<?php echo csrf_field(); ?>  
<div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name='email' >
  </div>

  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name='password'>
  </div>
<div class="d-grid mx-auto">
 <button type="submit" class="btn btn-dark btn-block">Login</button>
   </div>
  <p><a href="registration">Create New Account</a></p>
</form>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ishu's pc\user-login\resources\views/login.blade.php ENDPATH**/ ?>