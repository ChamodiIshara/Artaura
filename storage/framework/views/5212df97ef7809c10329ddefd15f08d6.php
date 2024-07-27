
<?php $__env->startSection('title','Registration'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
<main class="login-form">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Sign Up</h3>
                    <div class="card-body">

<form action="<?php echo e(route('registration.post')); ?>" method='POST' class='ms-auto me-auto mt-auto'style= "width:300px">
<?php echo csrf_field(); ?>  
<div class="mb-3">
    <label class="form-label">Full Name</label>
    <input type="text" class="form-control" name='name'>
  </div>

  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name='email' >
  </div>

  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name='password'>
  </div>
  <div class="d-grid mx-auto">
 <button type="submit" class="btn btn-dark btn-block">Sign up</button>
   </div>
</form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ishu's pc\user-login\resources\views/registration.blade.php ENDPATH**/ ?>