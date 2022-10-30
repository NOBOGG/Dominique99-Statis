
<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <img class="w-100 img-fluid" src="images/BannerDominique.png" alt="">

    <div class="container mt-2 fontAll">

        <h1 class="text-center mt-3 sizing">Favorite Menu</h1>
        
            <div class="row d-flex justify-content-center" >
                <?php $__currentLoopData = $listMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item['menuFavorite']==1): ?>
                    <div class="card col-lg-3 col-md-3 col-sm-12 text-center" >
                        <div class="img-wrapper img-fluid"><img src="<?php echo e($item['fotoMakanan']); ?>" class="d-block w-100"
                                alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($item['namaMenu']); ?></h5>
                            
                            <a href="/<?php echo e($item['id']); ?>" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        <h1 class="text-center mt-5 sizing" id="about">Our Social Media</h1>
        <div class="row d-flex justify-content-evenly" >
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                data-mc-src="b29c1f71-822c-495b-b27c-af251a68d832#instagram"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><a href="https://linktr.ee/dominique99id">
                    <img class="img-fluid" src="images/Dom_Logo.png" alt="order">
                </a></div>
        </div>

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\Laravel Project\webstatisDominique\resources\views/index.blade.php ENDPATH**/ ?>