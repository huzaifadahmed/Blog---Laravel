<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>

    <title>Practice Blog</title>
</head>
<body>
    <nav class="bg-neutral-800 h-24 px-8 py-8 ">
        <div class="flex justify-between">
            <div class="text-lg flex items-center space-x-16 text-white font-semibold ">
                <a href="/" class="mr-18 hover:opacity-50"><img src="/images/logo.png" width="165" height="16"></a>
                <a href="/" class="hover:text-neutral-600">Home</a>
                <!-- <a href="#" class="hover:text-neutral-600">About</a>
                <a href="#" class="hover:text-neutral-600">Contact</a> -->
            </div>

            <?php if(auth()->guard()->guest()): ?>
            <div class="flex">  
                <div class="mr-8">
                <button class="text-white bg-blue-600 px-8 py-2 
                rounded-md shadow-xl font-bold hover:shadow-none 
                hover:bg-blue-800" 
                type="button" ><a href="/signupuser">Sign Up</a></button>
                </div>
                
                <button class="text-white bg-blue-600 px-8 py-2 
                rounded-md shadow-xl font-bold hover:shadow-none 
                hover:bg-blue-800" 
                type="button" ><a href="/loginuser">Log In</a></button>
                </div>
            </div>
            <?php endif; ?>
        
            <?php if(auth()->guard()->check()): ?>
            <div class="flex items-center">
                <div class="text-white text-sm mr-4">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.menudropdown','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menudropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>

            </div>
            <?php endif; ?>
        </div>
    </nav>

    <?php echo e($slot); ?>


    <footer class="bg-neutral-200 ">
        <div class="text-center">
            <p class="text-xl font-semibold pt-8 mb-4">Subscribe to stay in touch!</p>
            <form>
                <label for="email" class="text-lg mr-4 font-semibold">Email</label>
                <input type="text" name="email" class="p-2 rounded-lg border hover:border hover:border-black" placeholder="Your Email Address">
            </form>
            <button type="submit" class="bg-blue-500 p-2 rounded-lg my-4 hover:bg-blue-400">Subscribe</button>
        </div>

        <div class="h-48 text-center">
            <p class="pt-16">Contact us at hdahmed@ryerson.ca!</p>
        </div>
    </footer>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

    <?php if(session()->has('success')): ?>
        <div x-data="{show:true}" 
        x-init="setTimeout(()=>show=false,6000)"
        x-show="show"
        class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
            <p><?php echo e(session('success')); ?></p>
        </div>
    <?php endif; ?>
</body>
</html><?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Practice\resources\views/components/template.blade.php ENDPATH**/ ?>