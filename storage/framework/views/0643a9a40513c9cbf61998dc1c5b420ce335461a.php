<?php foreach($attributes->onlyProps(['featuredpost']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['featuredpost']); ?>
<?php foreach (array_filter((['featuredpost']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<!--Featured Card-->
<div class='border-2 border-neutral-400 rounded-2xl shadow-lg hover:shadow-xl flex hover:bg-neutral-200 transition-colors'>
    <img src="/images/blogimg.jpg" height="500" width="500" class="rounded-2xl p-2">
    <div>
        <div class='p-4'>
            <h4><a href="/post/<?php echo e($featuredpost[0]->slug); ?>" class='text-blue-500 text-4xl hover:text-blue-400'><?php echo e($featuredpost[0]->title); ?></a></h4>
        </div>
        <div class='p-4'>
            <span class="border-2 border-blue-500 p-1 rounded-lg hover:bg-blue-200">
                <a href="#"><?php echo e($featuredpost[0]->category->category); ?></a></span>
            <p class="mt-4"><?php echo e($featuredpost[0]->body); ?></p>
            <p class='mt-4 text-sm font-thin'>Written by: <?php echo e($featuredpost[0]->author->name); ?></p>
            <p class='text-sm font-thin italic'>Last updated: <?php echo e($featuredpost[0]->updated_at->diffForHumans()); ?></p>
        </div>
    </div>
</div><?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Practice\resources\views/components/featured-card.blade.php ENDPATH**/ ?>