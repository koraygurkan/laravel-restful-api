<p><?php echo e(session('success')); ?></p>
<form action="<?php echo e(route('sendpost')); ?>" method="post">
    <?php echo csrf_field(); ?>
    Ad Soyad
    <input type="text" name="name" >
    Mail
    <input type="text" name="email" >
    <input type="submit" value="Mail Gönder">
</form><?php /**PATH /var/www/vhosts/gencomare.xyz/httpdocs/resources/views/mailsend.blade.php ENDPATH**/ ?>