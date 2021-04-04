 <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('content'); ?> 
        <div id="user_container">
            <h3>Stay connected with us</h3>
            <p>We keep people together and things simple.</p>
        </div>
         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
        <section id="auth_container_two">
            <div class="svg_container_two"></div>
            <?php if(session('status')): ?>
                <div class="mb-4 font-medium text-sm text-green-600">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <div class="details_container">
                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    <h4>Sign In</h4>
                    <p>Please fill in this form in order to sign in.</p>
                    <hr>
                    <label for="email" class="fa fa-envelope"> Email *</label>
                    <input type="text" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email"  value="<?php echo e(old('email')); ?>" id="email" required>

                    <label for="psw" class="fa fa-lock"> Password *</label>
                    <input type="password" placeholder="Enter Password" name="password" id="password" required>
                    <hr>
                    <p>* required fields.</p>
                    <button type="submit" class="registerbtn">Sign In</button>
                    <div class="container signin">
                        <p>You don't have an account? <a href="<?php echo e(route('register')); ?>">Register</a>.</p>
                    </div>
                </form>
            </div>
        </section>
     <?php $__env->endSlot(); ?>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php /**PATH C:\Users\user\openserver\OSPanel\domains\hotel.com\resources\views/auth/login.blade.php ENDPATH**/ ?>