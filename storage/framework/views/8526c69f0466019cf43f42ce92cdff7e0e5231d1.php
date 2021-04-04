 <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('content'); ?> 
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
        <div id="user_container">
            <h3>Stay connected with us</h3>
            <p>We keep people together and things simple.</p>
        </div>
        <section id="auth_container">
            <div class="svg_container"></div>
            <div class="details_container">
                <form method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>
                    <h4>Register</h4>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <div class="label">
                        <label for="name" class="fa fa-user-circle-o"> Name *</label>
                        <input type="text" placeholder="Enter Name" name="name" value="<?php echo e(old('name')); ?>" id="name" required>
                    </div>
                    <div class="label">
                        <label for="email" class="fa fa-envelope"> Email *</label>
                        <input type="text" placeholder="Enter Email" name="email" value="<?php echo e(old('email')); ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="email" required>
                    </div>
                    <label for="psw" class="fa fa-lock"> Password *</label>
                    <input type="password" placeholder="Enter Password" name="password" id="psw" required>

                    <label for="psw-repeat" class="fa fa-lock"> Repeat Password *</label>
                    <input type="password" placeholder="Repeat Password" name="password_confirmation" id="psw-repeat" required>
                    <hr>
                    <p>* required fields.</p>
                    <p>By creating an account you agree to our <a href="/pages/settings.html">Terms & Privacy</a>.</p>
                    <button type="submit" class="registerbtn">Register</button>
                    <div class="container signin">
                        <p>Already have an account? <a href="<?php echo e(route('login')); ?>">Sign in</a>.</p>
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
<?php /**PATH C:\Users\user\openserver\OSPanel\domains\hotel.com\resources\views/auth/register.blade.php ENDPATH**/ ?>