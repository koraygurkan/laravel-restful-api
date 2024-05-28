<h1>Yaş Kontrollü Giriş Sayfası</h1>
<hr>
<form action="<?php echo e(route('ageCheckPost')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    Yaşınız:
    <input type="text" name="age">
    <input type="submit" value="Giriş Yap">
</form><?php /**PATH /var/www/vhosts/gencomare.xyz/httpdocs/resources/views/sitehome.blade.php ENDPATH**/ ?>