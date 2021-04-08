 <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('content'); ?> 
        <section id="best_rooms">
            <div class="title_container">
                <p>CONTINENTAL HOTEL</p>
                <hr>
                <h2>ROOMS TYPES</h2>
            </div>

            <div class="rooms_container">

                <div class="small_room">
                    <div class="upper_content">
                        <img src="assets/images/home/room_small.jpeg" alt="room1">
                        <p>HOTEL CONTINENTAL <i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i></p>
                    </div>
                    <div class="lower_content">
                        <div class="content_alignment">
                            <h4> <?php echo e($RoomType->name); ?></h4>
                            <a class="fa fa-user-circle"> <span><?php echo e($RoomType->guests); ?> GUEST(s)</span></a>
                            <a class="fa fa-hotel"> <span><?php echo e($RoomType->size); ?>m<sup>2</sup></span></a>
                            <p> <?php echo e($RoomType->small_description); ?></p>
                            <div class="button">
                                <a href="<?php echo e(route('room_view', $RoomType->slug)); ?>">BOOK NOW FROM <?php echo e(intval($RoomType->price)); ?>$</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="four_rooms">
                    <?php $__currentLoopData = $RoomTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="square">
                            <img src="<?php echo e(asset($type->img)); ?>" alt="room1">
                            <p><?php echo e($type->name); ?> <a href="<?php echo e(route('room_view', $type->slug)); ?>">BOOK FROM  <?php echo e(intval($type->price)); ?>$ </a></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </section>
     <?php $__env->endSlot(); ?>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php /**PATH C:\Users\user\openserver\OSPanel\domains\hotel.com\resources\views/rooms.blade.php ENDPATH**/ ?>