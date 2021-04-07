 <?php if (isset($component)) { $__componentOriginal68fd1716d3649640b85d625349a99a37b7434812 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\DashboardLayout::class, []); ?>
<?php $component->withName('dashboard-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('content'); ?> 
        <div class="settings_forms">
            <h1 class="edit_employee_header">SETTINGS</h1>
            <hr>
            <form method="POST" action="<?php echo e(route('user.profile.update')); ?>" id="settings_form_1">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="subtitle1">Change Details</div>
                <div class="element">
                    <?php $__errorArgs = ['name', 'updateProfileInformation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="warning"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <!-- <label for="names">Name</label> -->
                    <input type="text" value="<?php echo e(old("name",Auth::user()->name)); ?>" name="name" spellcheck="false"
                           placeholder="Name" id="names" required>
                </div>
                <div class="element">
                    <!-- <label for="emails">Email</label> -->
                    <input type="email" value="<?php echo e(old("email",Auth::user()->email)); ?>" name="email" spellcheck="false"
                           placeholder="Email" id="emails" required>
                </div>

                <div class="edit_employee_footer">
                    <!-- <button class="cancelBtn2" form="">Cancel</button> -->
                    <button type="update" form="settings_form_1" value="Submit">Update</button>
                </div>
            </form>
            <form action="<?php echo e(route('user.password.update')); ?>" method="POST" id="settings_form_2">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <div class="subtitle1">Change Password</div>
                <div class="element">
                    <!-- <label for="passwords">Password</label> -->
                    <input type="password" name="old_password" spellcheck="false" placeholder="Old Password" id="passwords" required>
                </div>
                <div class="element">
                    <!-- <label for="passwords">Password</label> -->
                    <input type="password" name="new_password" spellcheck="false" placeholder="New Password" id="passwords" required>
                </div>
                <div class="element">
                    <!-- <label for="passwords">Password</label> -->
                    <input type="password" name="new_password_confirmation" spellcheck="false" placeholder="Confirm New Password" id="passwords"
                           required>
                </div>

                <div class="edit_employee_footer">
                    <!-- <button class="cancelBtn2" form="">Cancel</button> -->
                    <button type="submit" form="settings_form_2" value="Submit">Update</button>
                </div>
            </form>
            <!-- <hr> -->
        </div>
     <?php $__env->endSlot(); ?>
 <?php if (isset($__componentOriginal68fd1716d3649640b85d625349a99a37b7434812)): ?>
<?php $component = $__componentOriginal68fd1716d3649640b85d625349a99a37b7434812; ?>
<?php unset($__componentOriginal68fd1716d3649640b85d625349a99a37b7434812); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php /**PATH C:\Users\user\openserver\OSPanel\domains\hotel.com\resources\views/settings.blade.php ENDPATH**/ ?>