<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.template','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('template'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div class="bg-slate-200 rounded-xl p-8 w-96 mx-auto my-24">

        <div id="modalTitle" class="text-2xl pb-4 border-b-2 border-blue-200 text-blue-600 font-bold">Log In</div>
    


        <form name="form" method="POST" action="/login">
            <?php echo csrf_field(); ?>

            <label for="email" class="mt-4 mb-2">Email Address</label>
            <input name="email" id="email" type="text" placeholder="E-mail" class="h-8 w-full text-lg p-1 border-solid border-2 rounded-md border-blue-500 hover:border-blue-400" value="<?php echo e(old('email')); ?>"></input>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label for="password" class="mt-4 mb-2">Password</label>
            <input name="password" id="password" type="password" placeholder="Password" class="h-8 w-full text-lg p-1 border-solid border-2 rounded-md border-blue-500 hover:border-blue-400"></input>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <button type="button" id="loginActive" value="1" class="text-blue-600 mt-4 p-2 border-b-2 w-24 border-blue-600 font-bold hover:text-blue-400"><a href="signupuser">Sign Up</a></button>
            <button type="submit" id="enterBtn" class="text-white bg-blue-600 p-2 px-4 rounded-md shadow-xl w-24 font-bold hover:shadow-none hover:bg-blue-400 transition-colors ml-8">Login</button>
        </form>

    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Practice\resources\views/loginPage.blade.php ENDPATH**/ ?>