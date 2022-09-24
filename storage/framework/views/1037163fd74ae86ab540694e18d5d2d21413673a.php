<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.template','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('template'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div class="w-96 mx-auto py-8">
        <p class="text-xl font-bold py-8 text-center">Edit Post <?php echo e($post->title); ?></p>

        <form name="form" method="POST" action="/update/<?php echo e($post->slug); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
            <label for="title" class="mt-4 mb-2 font-semibold">Title</label>
            <input name="title" id="title" type="text" placeholder="Title..." class="h-8 w-full text-lg p-1 border-solid border-2 rounded-md border-blue-500 hover:border-blue-400" value="<?php echo e($post->title); ?>"></input>
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <label for="excerpt" class="mt-4 mb-2 font-semibold">Excerpt</label>
            <textarea name="excerpt" placeholder="Excerpt..." rows="3" cols="30" class="w-full text-lg p-1 border-solid border-2 rounded-md border-blue-500 hover:border-blue-400"><?php echo e($post->excerpt); ?></textarea>
            <?php $__errorArgs = ['excerpt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <label for="slug" class="mt-4 mb-2 font-semibold">Slug</label>
            <input name="slug" type="text" placeholder="Example: my-first-post..." class="w-full text-lg p-1 border-solid border-2 rounded-md border-blue-500 hover:border-blue-400 bg-gray-300" value="<?php echo e($post->slug); ?>" readonly></input>
            <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <div class="my-4">
                <label for="category_id" class="font-semibold mr-2">Select a Category: </label>
                <select name="category_id" class="rounded-xl border-blue-500">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->category); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <label for="body" class="mt-4 mb-2 font-semibold">Body</label>
            <textarea name="body" rows="10" cols="30" placeholder="Type your content here..." class=" w-full text-lg p-1 border-solid border-2 rounded-md border-blue-500 hover:border-blue-400"><?php echo e($post->body); ?></textarea>
            <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>



            <button type="submit" id="enterBtn" class="text-white bg-blue-600 mt-4 p-2 px-4 rounded-md shadow-xl w-24 font-bold hover:shadow-none hover:bg-blue-400 transition-colors ml-8">Update</button>
        </form>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Practice\resources\views/editpost.blade.php ENDPATH**/ ?>