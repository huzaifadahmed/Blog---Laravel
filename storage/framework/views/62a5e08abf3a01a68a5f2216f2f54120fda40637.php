<?php foreach($attributes->onlyProps(['post']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['post']); ?>
<?php foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<section class="px-2 pt-16 pb-6 max-w-6xl mx-auto">

    <div class='flex'>
        <img src="/images/blogimg.jpg" height="500" width="500" class="rounded-2xl p-2">
        <div>
            <div class='p-4'>
                <h4 class='text-blue-500 text-6xl'><?php echo e($post->title); ?></h4>
            </div>

        </div>

    </div>
    <div class='p-4 pt-8 flex justify-between'>
        <p class='text-lg font-thin'>Written by: <?php echo e($post->author->name); ?></p>
        <p class='text-sm font-thin italic'>Last updated: <?php echo e($post->updated_at->diffForHumans()); ?></p>
    </div>
    <hr>

    <div class="p-4 mt-10 border-2 border-neutral-400 rounded-xl">
        <p><?php echo e($post->body); ?></p>
    </div>

</section><?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Practice\resources\views/components/article.blade.php ENDPATH**/ ?>