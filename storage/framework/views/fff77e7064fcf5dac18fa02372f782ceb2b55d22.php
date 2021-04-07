 <?php if (isset($component)) { $__componentOriginal68fd1716d3649640b85d625349a99a37b7434812 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\DashboardLayout::class, []); ?>
<?php $component->withName('dashboard-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('content'); ?> 
        <div class="reservations">
            <div class="header">
                <div class="label">MY BOOKINGS</div>
                <hr>
                <div class="table-header">
                    <div class="parameter center">PDF</div>
                    <div class="parameter">ROOM</div>
                    <div class="parameter">TYPE</div>
                    <div class="parameter">PRICE</div>
                    <div class="parameter">DATE</div>
                </div>
            </div>
            <hr>

            <div class="table-row">
                <div class="value center"><a href="" class="fas fa-file-alt user"></a></div>
                <div class="value name">Room 0.1</div>
                <div class="value">Single</div>
                <div class="value">€150</div>
                <div class="value short">01.05.2021 - 02.05.2021</div>
                <div class="parameter cancel-booking"><a href="">CANCEL</a></div>
            </div>

            <div class="table-row">
                <div class="value center"><a href="" class="fas fa-file-alt user"></a></div>
                <div class="value name">Room 0.1</div>
                <div class="value">Single</div>
                <div class="value">€150</div>
                <div class="value short">01.05.2021 - 02.05.2021</div>
                <div class="parameter cancel-booking"><a href="">CANCEL</a></div>
            </div>
            <hr>

        </div>
     <?php $__env->endSlot(); ?>
 <?php if (isset($__componentOriginal68fd1716d3649640b85d625349a99a37b7434812)): ?>
<?php $component = $__componentOriginal68fd1716d3649640b85d625349a99a37b7434812; ?>
<?php unset($__componentOriginal68fd1716d3649640b85d625349a99a37b7434812); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php /**PATH C:\Users\user\openserver\OSPanel\domains\hotel.com\resources\views/dashboard.blade.php ENDPATH**/ ?>