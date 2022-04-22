<?php $__env->startSection('body'); ?>

<section class="campus">
    <h1>Mountains</h1>
    <p>Lorem ipsum dolar sit amet, cosectetur adipiscing elit.</p>

    <div class="row">
        <div class="campus-col">
            <img src="<?php echo e(asset('images/image2.jpg')); ?>" alt="Mountain">
            <div class="layer">
            </div>
        </div>
        <div class="campus-col">
            <img src="<?php echo e(asset('images/image1.jpg')); ?>" alt="Mountain">
            <div class="layer">
            </div>
        </div>
        <div class="campus-col">
            <img src="<?php echo e(asset('images/image3.jpg')); ?>" alt="Mountain">
            <div class="layer">
            </div>
        </div>
    </div>
    <section class="course">
        <h1>Lorem something</h1>
        <p>lorem ipsum dolar sit amet, cosectetur adipiscing elit.</p>

        <div class="row">
            <div class="course-col">
                <div>
                    <h3>Lorem ipsum</h3>
                    <p> dolar sit amet, consectetur adipiscing elit.
                    Pellentesque aliquet turpis nulla, eleifend faucibus est
                    sollicitudin ut. Maecenas ut vaneantis ex, et dapibus purus.</p>
                </div>
            </div>
            <div class="course-col">
                <div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolar sit amet, consectetur adipiscing elit.
                    Pellentesque aliquet turpis nulla, eleifend faucibus est
                    sollicitudin ut. Maecenas ut vaneantis ex, et dapibus purus.</p>
                </div>
            </div>
        </div>

    </section>


</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\resources\views/webpages/main.blade.php ENDPATH**/ ?>