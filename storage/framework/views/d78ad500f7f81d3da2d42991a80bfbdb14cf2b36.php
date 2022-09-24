<?php foreach($attributes->onlyProps(['categoryposts']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['categoryposts']); ?>
<?php foreach (array_filter((['categoryposts']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php $__currentLoopData = $categoryposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorypost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class='mt-8 border-2 border-neutral-400 rounded-2xl p-4 hover:shadow-xl hover:bg-neutral-200 transition-colors'>
    <div>
    <img src="/images/cardimg.jpg" height="400" width="400" class="rounded-2xl">
    <a href="/post/<?php echo e($categorypost->slug); ?>" class='text-2xl text-blue-500 hover:text-blue-400 mb-4'><?php echo e($categorypost->title); ?></a></div>
    <span class="border-2 border-blue-500 p-1 rounded-lg hover:bg-blue-200">
                <a href="#"><?php echo e($categorypost->category->category); ?></a></span>
    <p class='max-h-56 overflow-hidden mt-4'><?php echo e($categorypost->body); ?></p>
    <p class='mt-4 text-sm font-thin'>Written by: <?php echo e($categorypost->author->name); ?></p>
    <p class='text-sm font-thin italic'>Last updated: <?php echo e($categorypost->updated_at->diffForHumans()); ?></p>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Practice\resources\views/components/cardFiltered.blade.php ENDPATH**/ ?>