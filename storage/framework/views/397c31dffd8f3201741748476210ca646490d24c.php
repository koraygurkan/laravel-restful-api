<?php $__env->startSection('title','Course Page Form'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <div class="col-md-12">
            <h1>Kurslar</h1>
            <hr>
            <div align="right">
                <a href="<?php echo e(route('courseInsert')); ?>"><button class="btn btn-success">Yeni Ekle</button></a>
            </div><br>
            <table class="table table-dark table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Must</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                    <td><?php echo e($key->course_title); ?></td>
                    <td><?php echo e($key->course_content); ?></td>
                    <td><?php echo e($key->course_must); ?></td>
                    <td width="10"><a href="<?php echo e(route('courseUpdate',['id'=>$key->id])); ?>"><button class="btn btn-primary">Düzenle</button></a></td>
                    <td width="10"><a href="<?php echo e(route('courseDelete',['id'=>$key->id])); ?>"><button class="btn btn-primary">Sil</button></a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/gencomare.xyz/httpdocs/resources/views/course.blade.php ENDPATH**/ ?>