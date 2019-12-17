<link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('index.css')); ?>">
<!doctype html>
<html lang = "en">



<?php $__env->startSection('title', 'Players'); ?>

<?php $__env->startSection('content'); ?>
<head>

</head>

     <body>
       <div class="card-header">
         Swansea Football Players
       </div>
       <div class="card-body">
      <p>The players of Swansea FC:</p>
      <ul>
          <?php foreach ($players as $player): ?>
              <li><a href="<?php echo e(route('players.show', ['id' => $player->id])); ?>"><?php echo e($player->firstname); ?></a></li>

          <?php endforeach; ?>
        </ul>
        <a href="<?php echo e(route('players.create')); ?>">Create Player</a>
      </div>
</body>

</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Laravel/swanseafootballers/resources/views/players/index.blade.php ENDPATH**/ ?>