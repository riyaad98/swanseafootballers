<link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('index.css')); ?>">
<!doctype html>
<html lang = "en">



<?php $__env->startSection('title', 'Player Details'); ?>

<?php $__env->startSection('content'); ?>
<head>
</head>

<body>
    <div class="card-header">
      Player details
    </div>
    <div class="card-body">
    <ul>
      <li>FirstName: <?php echo e($player->firstname); ?></li>
      <li>LastName: <?php echo e($player->lastname); ?></li>
      <li>Age: <?php echo e($player->age); ?></li>
      <li>Position: <?php echo e($player->position); ?></li>
      <li>Address: <?php echo e($player->address); ?></li>
      <li>Coach: <?php echo e($player->coach->firstname); ?></li>
    </ul>

    <form method="POST"
        action="<?php echo e(route('players.destroy', ['id' => $player->id])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit">Delete</button>
    </form>

    <p><a href="<?php echo e(route('players.index')); ?>">Back</a></p>
  </div>

</body>
<?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Laravel/swanseafootballers/resources/views/players/show.blade.php ENDPATH**/ ?>