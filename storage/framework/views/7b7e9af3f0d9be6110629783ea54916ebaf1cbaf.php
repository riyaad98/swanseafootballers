<link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('index.css')); ?>">
<!doctype html>
<html lang = "en">



<?php $__env->startSection('title', 'Create Player'); ?>

<?php $__env->startSection('content'); ?>
<head>

</head>

<body>
  <div class ="card-header">
    Create a new player
  </div>
  <div class="card-body">
    <form method="POST" action="<?php echo e(route('players.store')); ?>">
       <?php echo csrf_field(); ?>
       <p>FirstName: <input type="text" name="firstname"
         value="<?php echo e(old('firstname')); ?>"></p>
       <p>LastName: <input type="text" name="lastname"
         value="<?php echo e(old('lastname')); ?>"></p>
       <p>Age: <input type="text" name="age"
         value="<?php echo e(old('age')); ?>"></p>
       <p>Position: <input type="text" name="position"
         value="<?php echo e(old('position')); ?>"></p>
       <p>Address: <input type="text" name="address"
         value="<?php echo e(old('address')); ?>"></p>
         <p>Coach
           <select name="coaches_id">
           <?php $__currentLoopData = $coaches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coach): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($coach->id); ?>"
                <?php if($coach->id == old('coach_id')): ?>
                    selected='selected'
                <?php endif; ?>
              ><?php echo e($coach->firstname); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

       </p>
       <input type="submit" value="Submit">
       <a href="<?php echo e(route('players.index')); ?>">Cancel</a>
    </form>
  </div>

</body>

<?php $__env->stopSection(); ?>

</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Laravel/swanseafootballers/resources/views/players/create.blade.php ENDPATH**/ ?>