<?php $__env->startSection('title','Course Page Form'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <div class="col-md-12">
            <h3 style="color:red;font-family:'Comic Sans MS'">Kurs ekle</h3>







            <?php if($errors->any()): ?>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
            <?php if(session()->has('status')): ?>
            <div class="alert alert-success">
                <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>
            <form action="<?php echo e(route('courseInsertPost')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <input type="text" value="<?php echo e(old('course_title')); ?>" class="form-control" name="course_title" placeholder="Course Title">
                </div>
                <div class="mb-3">
                    <input type="text" value="<?php echo e(old('course_content')); ?>" class="form-control" name="course_content" placeholder="Course Content">
                </div>
                <div class="mb-3">
                    <input type="number" value="<?php echo e(old('course_must')); ?>" class="form-control" name="course_must" placeholder="Course Must">
                </div>

                <input class="form-control" type="submit" value="Kurs Ekle">
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/gencomare.xyz/httpdocs/resources/views/courseInsert.blade.php ENDPATH**/ ?>