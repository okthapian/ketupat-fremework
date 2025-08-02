
<?php render::component('header', ['lang'=>'id']);?>


<?php render::component('navbar');?>

    <?php render::getcontent('content');?>

    <?php render::getcontent('script');?>
    
<?php render::component('footer');?>