
<button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="p-1 flex items-center text-sm font-medium text-white rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-white dark:focus:ring-gray-700 dark:text-white" type="button">
    <span class="sr-only">Open user menu</span>
    <?php echo e(auth()->user()->name); ?>

    <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
</button>

<!-- Dropdown menu -->
<div id="dropdownAvatarName" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
    <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
      <div class="truncate"><?php echo e(auth()->user()->email); ?></div>
    </div>
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
      <li>
        <a href="/dashboard" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
      </li>
      <li>
        <a href="/newpost" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Write Post</a>
      </li>
      <!-- <li>
        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
      </li> -->
    </ul>
    <div class="py-1">
        <form method="POST" action="/logout">
            <?php echo csrf_field(); ?>
            <button type="submit" class="text-black py-2 px-4 block hover:text-gray-500" 
            type="button">Logout</button>
        </form>
</div>
</div>
<?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Practice\resources\views/components/menudropdown.blade.php ENDPATH**/ ?>