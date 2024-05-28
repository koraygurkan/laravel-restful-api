<h1>Login sayfası</h1>
<hr>
<form action="<?php echo e(route('mloginCheck')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="checkbox" name="remember"><b>Beni Hatırla</b>
    <input type="submit" value="Giriş Yap">
</form><?php /**PATH /var/www/vhosts/koraygurkandanaci.xyz/httpdocs/resources/views/mlogin.blade.php ENDPATH**/ ?>